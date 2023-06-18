<template>
  <v-form ref="formFiltro">
    <v-card>
      <v-card-title>
        <v-btn
          text
          class="mb-1 pb-1 pt-0 mt-0"
          color="red darken-2"
          @click="$router.go(-1)"
        >
          Regresar
        </v-btn>
        <br>
      </v-card-title>
      <v-card-subtitle>
        <v-row class="">
          <v-col cols="12" sm="12" md="6" class="">
            <v-menu
              ref="menu"
              v-model="menu"
              :close-on-content-click="false"
              transition="scale-transition"
              offset-y
              min-width="auto"
            >
              <template v-slot:activator="{ on, attrs }">
                <v-text-field
                  :rules="[fieldRule,dateRangeRules]"
                  label="Periodo"
                  ref="fechas"
                  v-model="dateRangeText"
                  placeholder="DD / MM / YYYY -- DD / MM / YYYY"
                  prepend-inner-icon="mdi-calendar-month-outline"
                  v-bind="attrs"
                  v-on="on"
                  readonly
                  outlined
                  @click:clear="dateRange = []"
                  clearable
                ></v-text-field>
              </template>
              <v-date-picker
                locale="es"
                v-model="dateRange"
                range
                @change="save"
              ></v-date-picker>
            </v-menu>
          </v-col>
          <v-col cols="12" sm="12" md="2" class="">
            <v-btn x-large dark color="red darken-2" @click="buscar()">Buscar</v-btn>
          </v-col>
        </v-row>
      </v-card-subtitle>
      <v-card-subtitle>
        <v-btn
          @click="downloadDesplazamientos()"
          outlined
          color="success"
          size="small"
          :disabled = "dateRangeText ? false : true "
        >
          Descargar
        </v-btn>
        <br><br>
        Cantidad de registros: {{ features ? features : '0' }}
      </v-card-subtitle>
      <v-card-text>
        <v-img height="72vh" width="100vw">
          <l-map
            :style="{ position: 'absolute', height: '100%', width: '100%' }"
            :zoom="config.zoom"
            :center="config.center"
            ref="map"
            @ready="ready"
          >
            <l-control-layers position="topright"></l-control-layers>
            <l-tile-layer
              v-for="tileProvider in tileProviders"
              :key="tileProvider.name"
              :name="tileProvider.name"
              :visible="tileProvider.visible"
              :url="tileProvider.url"
              :attribution="tileProvider.attribution"
              layer-type="base"
            />
            <l-geo-json
              v-if="geojson"
              :geojson="geojson"
              :options="geojsonOptions"
            >
            </l-geo-json>
          </l-map>
        </v-img>
      </v-card-text>
    </v-card>
  </v-form>
</template>
<script>
import {
  LMap, LTileLayer, LGeoJson, LControlLayers,
} from 'vue2-leaflet';
import {
  string,
} from '../../http/Validation';

const color = {
  1: 'rgba(255, 99, 132)',
  2: 'rgba(255, 159, 64)',
  3: 'rgba(255, 205, 86)',
  4: 'rgba(75, 192, 192)',
  5: 'rgba(54, 162, 235)',
  6: 'rgba(153, 102, 255)',
  7: 'rgb(92, 70, 156)',
  8: 'rgb(176, 71, 89)',
};

export default {
  name: 'GeoJsonFiltro',

  components: {
    LMap,
    LTileLayer,
    LGeoJson,
    LControlLayers,
  },

  data() {
    return {
      features: null,
      geojson: null,
      dateRange: [],
      menu: false,
      geojsonOptions: {
        style(feature) {
          return {
            color:
              color[feature?.properties?.medios_desplazamiento?.id]
              || 'rgb(92, 70, 156)',
            weight: 6,
          };
        },
        onEachFeature(feature, layer) {
          const data = feature?.properties?.medios_desplazamiento?.nombre;
          if (data) {
            layer.bindPopup(data);
          }
        },
      },
      tileProviders: [
        {
          name: 'OpenStreetMap',
          visible: true,
          attribution:
            '&copy; <a target="_blank" href="http://osm.org/copyright">OpenStreetMap</a> contributors',
          url: 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
        },
        {
          name: 'Stadia.AlidadeSmoothDark',
          visible: false,
          url: 'https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png',
          attribution:
            '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptiles.org/">OpenMapTiles</a> &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
        },
        {
          name: 'CartoDB',
          visible: false,
          url: 'https://cartodb-basemaps-{s}.global.ssl.fastly.net/light_all/{z}/{x}/{y}.png',
          attribution:
            '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, &copy; <a href="https://cartodb.com/attributions">CartoDB</a>',
        },
      ],

      config: {
        // url: 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
        url: 'https://cartodb-basemaps-{s}.global.ssl.fastly.net/light_all/{z}/{x}/{y}.png',
        // attribution:
        //   '&copy; <a target="_blank" href="http://osm.org/copyright">OpenStreetMap</a> contributors',
        attribution:
          '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, &copy; <a href="https://cartodb.com/attributions">CartoDB</a>',
        zoom: 10,
        center: [13.794185, -88.89652999999998],
      },
      mapa: null,
    };
  },

  computed: {
    dateRangeText: {
      get() {
        if (!this.dateRange || !Array.isArray(this.dateRange)) return null;

        if (this.dateRange.length === 2) {
          const fechaInicio = this.formatDate(this.dateRange[0]);
          const fechaFin = this.formatDate(this.dateRange[1]);

          return `${fechaInicio} ~ ${fechaFin}`;
        }
        return '';
      },
      set() {
        return '';
      },
    },
    dateRangeRules() {
      return () => (new Date(this.dateRange[1]).getTime() >= new Date(this.dateRange[0]).getTime()
      || this.dateRange[0] === this.dateRange[1])
      || 'Error en las fechas';
    },
  },

  methods: {
    fieldRule: string('Debe completar el campo.'),
    ready(mapa) {
      this.mapa = mapa;
      this.fetchCoordenadas();
    },

    save(dateRange) {
      this.$refs.menu.save(dateRange);
    },

    async fetchCoordenadas() {
      try {
        const {
          data: { coleccion },
        } = await this.axios.get('recorrido/geojson/filtro', {
          params: { fecha_inicio: this.dateRange[0], fecha_fin: this.dateRange[1] },
        });

        if (Array.isArray(coleccion.features)) {
          this.geojson = coleccion;
          this.features = coleccion?.features?.length || 0;
        }
      } catch (error) {
        this.$toast.error('Error al cargar los datos.');
        console.log(error);
      }
    },
    async buscar() {
      if (!this.$refs.formFiltro.validate()) return;
      this.fetchCoordenadas();
    },

    async downloadDesplazamientos() {
      // await this.axios.get('/download-desplazamientos/csv', { responseType: 'blob' });
      await this.axios({
        url: '/download-desplazamientos/csv',
        params: { fecha_inicio: this.dateRange[0], fecha_fin: this.dateRange[1] },
        responseType: 'arraybuffer',
        responseEncoding: 'binary',
        headers: {
          'content-type': 'application/vnd.ms-excel',
        },
      })
        .then((response) => {
          const reporteName = 'desplazamientos.xlsx';
          // programmatically 'click'.
          const link = document.createElement('a');

          // Tell the browser to associate the response data to
          // the URL of the link we created above.
          link.href = window.URL.createObjectURL(new Blob([response.data]));

          // Tell the browser to download, not render, the file.
          link.setAttribute('download', reporteName);

          // Place the link in the DOM.
          document.body.appendChild(link);
          // cerrar modal
          // Make the magic happen!
          link.click();
        })
        .catch((error) => {
          console.log(error);
        });
    },

    formatDate(date) {
      if (!date) return null;

      const [year, month, day] = date.split('-');
      return `${day}/${month}/${year}`;
    },

    parseDate(date) {
      if (!date) return null;

      const [month, day, year] = date.split('/');
      return `${year}-${month.padStart(2, '0')}-${day.padStart(2, '0')}`;
    },

  },
};
</script>

<style></style>
