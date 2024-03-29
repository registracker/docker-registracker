<template>
  <div>
    <v-row>
      <v-col md="6" sm="12" lg="6" xl="6" xs="12">
        <v-text-field
          outlined
          v-model="searchUuid"
          append-icon="mdi-magnify"
          label="Buscar por código"
          @click:append="search"
          @keypress.enter="search"
          :loading="loading"
        ></v-text-field>
      </v-col>
      <v-col md="6" sm="12" lg="6" xl="6" xs="12">
        <v-pagination
          v-if="numeroDePaginas"
          v-model="paginaActiva"
          :length="numeroDePaginas"
          class="mb-2"
          color="red darken-2"
        ></v-pagination>
      </v-col>
    </v-row>

    <v-row>
      <v-col
        v-for="desplazamiento in desplazamientos"
        :key="desplazamiento.id"
        cols="12"
        sm="12"
        md="12"
        lg="12"
        xl="12"
      >
        <v-card>
          <v-card-title class="mb-0 pb-0">
            Fecha registro:
            {{ desplazamiento.fecha_creado.split('.').at(0).replace('T', ' ') }}
            <v-spacer></v-spacer>
            <div class="body-1">Costo</div>
          </v-card-title>
          <v-card-text class="my-0 py-0">
            <v-list>
              <v-list-item
                dense
                v-for="medio in desplazamiento.detalle_medios_desplazamiento"
                :key="medio.id"
              >
                <v-list-item-title>
                  {{ medio.medio_desplazamiento.nombre }}
                </v-list-item-title>

                <v-list-item-icon>
                  <v-icon>
                    {{ `mdi-${medio.medio_desplazamiento.icono}` }}
                  </v-icon>
                </v-list-item-icon>

                <v-list-item-subtitle class="text-right">
                  {{ medio.duracion }}
                </v-list-item-subtitle>

                <v-list-item-subtitle class="text-right">
                  {{ medio.costo }}
                </v-list-item-subtitle>
              </v-list-item>
            </v-list>
          </v-card-text>
          <v-card-actions>
            <v-row class="mb-1 mr-1" align="center" justify="end">
              <v-col>
                <span class="font-weight-bold mr-2"> Identificador: </span>
                {{ desplazamiento.id }}
              </v-col>
              <v-col class="d-flex justify-end">
                <v-btn
                  class="mr-2"
                  outlined
                  @click="descargar(desplazamiento)"
                  color="green darken-2"
                >
                  <v-icon>mdi-file-delimited-outline</v-icon>
                  Descargar
                </v-btn>
                <v-btn
                  dark
                  outlined
                  @click="visualizar(desplazamiento)"
                  color="red darken-2"
                >
                  Visualizar
                </v-btn>
              </v-col>
            </v-row>
          </v-card-actions>
        </v-card>
      </v-col>
    </v-row>
    <h2 v-if="desplazamientos.length === 0" class="grey--text text-lighten-5">
      No se ha registrado ningún recorrido
    </h2>
  </div>
</template>
<script>
import { saveAs } from 'file-saver';
import { mapState } from 'vuex';

export default {
  name: 'DesplazamientoListado',

  created() {
    if (this.isAuthenticated) {
      this.obtenerDesplazamientos();
    } else {
      this.$router.push({ name: 'web:ingresar' }, (error) => {
        console.log(error);
      });
    }
  },

  data() {
    return {
      no_data: false,
      searchUuid: null,
      loading: false,
      numeroDePaginas: 0,
      paginaActiva: 1,
      desplazamientos: [],
    };
  },

  methods: {
    async obtenerDesplazamientos() {
      const search = typeof this.searchUuid === 'string' && !!this.searchUuid
        ? {
          value: this.searchUuid.toLowerCase(),
          case_sensitive: true,
        }
        : undefined;
      try {
        const {
          data: {
            data: desplazamientos,
            meta: { last_page: lastPage },
          },
        } = await this.axios.post(
          'desplazamientos/search',
          {
            sort: [{ field: 'fecha_creado', direction: 'desc' }],
            includes: [
              {
                relation: 'detalle_medios_desplazamiento.medio_desplazamiento',
              },
            ],
            search,
          },
          {
            params: {
              page: this.paginaActiva,
            },
          },
        );
        this.desplazamientos = desplazamientos;
        this.numeroDePaginas = lastPage;

        if (!this.desplazamientos) {
          this.no_data = true;
        }
      } catch (error) {
        this.$toast.error('Error al obtener los desplazamiento.');
      }
      this.loading = false;
    },

    descargar(desplazamiento) {
      const { id } = desplazamiento;
      this.axios
        .post(`reporte-desplazamiento/${id}/csv`, {
          responseType: 'arraybuffer',
        })
        .then((response) => {
          const csvData = response.data;
          const blob = new Blob([csvData], { type: 'text/plain' });
          const fileName = `reporte-desplazamiento-${id}.csv`;
          saveAs(blob, fileName);
        })
        .catch((error) => {
          console.error('Error en la solicitud:', error);
        });
    },
    search() {
      this.loading = true;
      this.paginaActiva = 1;
      this.obtenerDesplazamientos();
    },

    visualizar(desplazamiento) {
      this.$router.push({
        name: 'web:desplazamiento:detalle',
        params: { uuid: desplazamiento.id },
      });
    },
  },

  watch: {
    paginaActiva() {
      this.obtenerDesplazamientos();
    },
  },

  computed: {
    ...mapState('user', ['isAuthenticated']),
  },
};
</script>
