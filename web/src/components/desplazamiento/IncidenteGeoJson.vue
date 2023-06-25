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
        <br />
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
                  :rules="[fieldRule, dateRangeRules]"
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
            <v-btn x-large dark color="red darken-2" @click="buscar()"
              >Buscar</v-btn
            >
          </v-col>
        </v-row>
      </v-card-subtitle>
      <v-card-subtitle>
        <v-btn
          @click="descargar"
          outlined
          color="success"
          size="small"
          :disabled="!features"
        >
          Descargar
        </v-btn>
        <br /><br />
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
import { LMap, LTileLayer, LGeoJson, LControlLayers } from 'vue2-leaflet';
import { string } from '../../http/Validation';
import { circleMarker } from 'leaflet';
import { saveAs } from 'file-saver';

export default {
  name: 'IncidenteGeoJson',

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
        onEachFeature(feature, layer) {
          const data = feature?.properties?.nombre;
          const fechaReporte = feature?.properties?.fecha_reporte;
          if (data) {
            layer.bindPopup(data + '<br>' + fechaReporte);
          }
        },
        pointToLayer(feature, latlng) {
          const fillColor = 'rgba(255,26,104,1)';
          return circleMarker(latlng, {
            radius: 8,
            fillColor,
            color: '#000',
            weight: 1,
            opacity: 1,
            fillOpacity: 0.8,
          });
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
      return () =>
        new Date(this.dateRange[1]).getTime() >=
          new Date(this.dateRange[0]).getTime() ||
        this.dateRange[0] === this.dateRange[1] ||
        'Error en las fechas';
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
        } = await this.axios.get('incidente/geojson/filtro', {
          params: {
            fecha_inicio: this.dateRange?.[0],
            fecha_fin: this.dateRange?.[1]
          },
        });

        if (Array.isArray(coleccion.features)) {
          this.geojson = coleccion;
          this.features = coleccion?.features?.length || 0;
        } else {
          this.geojson = [];
          this.features = 0;
        }
      } catch (error) {
        this.$toast.error('Error al cargar los datos.');
        console.log(error);
      }
    },

    descargar() {
      this.axios
        .get('incidente/geojson/filtro', {
          responseType: 'arraybuffer',
          params: {
            fecha_inicio: this.dateRange[0],
            fecha_fin: this.dateRange[1],
            csv: 'yes',
          },
        })
        .then((response) => {
          const csvData = response.data;
          const blob = new Blob([csvData], { type: 'text/plain' });
          const fileName = `reporte-incidentes.csv`;
          saveAs(blob, fileName);
        })
        .catch((error) => {
          console.error('Error en la solicitud:', error);
        });
    },

    async buscar() {
      if (!this.$refs.formFiltro.validate()) return;
      this.fetchCoordenadas();
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
