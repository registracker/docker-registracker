<template>
  <div>
    <v-row>
      <i class="mdi mdi-facebook-box"></i>
      <v-col sm="12" md="6" lg="6" xl="6">
        <v-text-field
          outlined
          v-model.trim="form.codigo"
          append-icon="mdi-magnify"
          label="Buscar por código"
          @click:append="search"
          @keypress.enter="search"
          :loading="loading"
        ></v-text-field>
      </v-col>
      <v-col md="6" sm="12" lg="6" xl="6">
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
        v-for="levantamiento in levantamientos"
        :key="levantamiento.id"
        cols="12"
        sm="12"
        md="6"
        lg="6"
        xl="6"
      >
        <v-card>
          <v-card-title> Código: {{ levantamiento.codigo }} </v-card-title>
          <v-card-subtitle>
            Fecha vencimiento:
            {{ levantamiento.fecha_vencimiento }}
          </v-card-subtitle>
          <v-card-actions>
            <v-row class="mb-1 mr-1" align="center" justify="end">
              <v-btn
                class="mr-2"
                outlined
                @click="descargar(levantamiento)"
                color="green darken-2"
              >
                <v-icon>mdi-file-delimited-outline</v-icon>
                Descargar
              </v-btn>
              <v-btn
                outlined
                @click="visualizar(levantamiento)"
                color="red darken-2"
              >
                Visualizar
              </v-btn>
            </v-row>
          </v-card-actions>
        </v-card>
      </v-col>
    </v-row>
  </div>
</template>
<script>
import { saveAs } from 'file-saver';

export default {
  name: 'LevantamientoListado',

  created() {
    this.fetchLevantamientos();
  },

  data() {
    return {
      form: { codigo: null },
      loading: false,
      numeroDePaginas: 0,
      paginaActiva: 1,
      levantamientos: [],
    };
  },

  methods: {
    async fetchLevantamientos() {
      const search = typeof this.form.codigo === 'string' && !!this.form.codigo
        ? {
          value: this.form.codigo.toLowerCase(),
          case_sensitive: true,
        }
        : undefined;

      const filters = [];

      if (this.form.codigo) {
        filters.push({
          field: 'codigo',
          operator: 'like',
          value: `%${this.codigo}%`,
        });
      }

      try {
        const {
          data: {
            data,
            meta: { last_page: lastPage },
          },
        } = await this.axios.post(
          'levantamientos/search',
          {
            filters: [],
            search,
          },
          {
            params: {
              page: this.paginaActiva,
              limit: 20,
            },
          },
        );
        this.levantamientos = data;
        this.numeroDePaginas = lastPage;
      } catch (error) {
        this.$toast.error('Error al obtener los registros de levantamiento.');
      }
      this.loading = false;
    },

    search() {
      this.loading = true;
      this.paginaActiva = 1;
      this.fetchLevantamientos();
    },

    descargar(levantamiento) {
      const { codigo } = levantamiento;
      this.axios
        .post(`reporte-marcador/${codigo}/csv`, {
          responseType: 'arraybuffer',
        })
        .then((response) => {
          const csvData = response.data;
          const blob = new Blob([csvData], { type: 'text/plain' });
          const fileName = `reporte-levantamiento-${codigo}.csv`;
          saveAs(blob, fileName);
        })
        .catch((error) => {
          console.error('Error en la solicitud:', error);
        });
    },

    visualizar(levantamiento) {
      this.$router.push({
        name: 'web:reporte:detalle-marcador',
        params: { codigo: levantamiento.codigo },
      });
    },
  },

  watch: {
    paginaActiva() {
      this.fetchLevantamientos();
    },
  },
};
</script>
