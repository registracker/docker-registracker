<template>
  <div>
    <v-btn
      text
      class="mb-1 pb-1 pt-0 mt-0"
      color="red darken-2"
      @click="$router.go(-1)"
    >
      Regresar
    </v-btn>

    <v-tabs color="red" v-model="tab" class="mb-3">
      <v-tab>Volumen vehicular</v-tab>
      <v-tab>Representación Gráfica</v-tab>
    </v-tabs>
    <v-tabs-items v-model="tab">
      <v-tab-item>
        <v-slider
          v-model="tick"
          discrete
          label="Tiempo agrupación"
          class="mx-6 my-4"
          color="red"
          track-color="red"
          :tick-labels="ticksLabels"
          :max="2"
          step="1"
          ticks="always"
          tick-size="3"
        >
        </v-slider>
        <v-data-table :headers="headers" :items="reporte" hide-default-header>
          <template v-slot:top>
            <v-row class="my-3 mr-1" align="center" justify="end">
              <v-btn outlined @click="descargar" color="green darken-2">
                <v-icon>mdi-file-delimited-outline</v-icon>
                Descargar
              </v-btn>
            </v-row>
          </template>
          <template v-slot:header="{ props: { headers } }">
            <thead class="v-data-table-header">
              <tr>
                <th
                  role="columnheader"
                  scope="col"
                  aria-label="Código"
                  class="text-center"
                  v-for="header in headers"
                  :key="header.length + randomKey()"
                >
                  <span>{{ header }}</span>
                </th>
              </tr>
            </thead>
          </template>
          <template v-slot:body="{ items }">
            <tbody>
              <tr v-for="row in items" :key="row.length + randomKey()">
                <td
                  v-for="data in row"
                  class="text-center"
                  :key="data + randomKey()"
                >
                  {{ data }}
                </td>
              </tr>
            </tbody>
          </template>
        </v-data-table>
      </v-tab-item>
      <v-tab-item>
        <Bar
          :chart-options="chartOptions"
          :chart-data="chartData"
          :chart-id="chartId"
          :dataset-id-key="datasetIdKey"
          :plugins="plugins"
          :css-classes="cssClasses"
          :styles="styles"
          :width="width"
          :height="height"
        />
      </v-tab-item>
    </v-tabs-items>
  </div>
</template>
<script>
import { saveAs } from 'file-saver';
import { Bar } from 'vue-chartjs/legacy';

import {
  Chart as ChartJS,
  Title,
  Tooltip,
  Legend,
  BarElement,
  CategoryScale,
  LinearScale,
} from 'chart.js';

import ChartDataLabels from 'chartjs-plugin-datalabels';

ChartJS.register(
  Title,
  Tooltip,
  Legend,
  BarElement,
  CategoryScale,
  LinearScale,
);

const agrupacion = [15, 30, 60];
export default {
  name: 'ConteoVehicularTabla',
  components: {
    Bar,
  },
  data() {
    return {
      tab: null,
      tick: 2,
      ticksLabels: ['15 min', '30 min', '60 min'],
      headers: [],
      reporte: [],
      chartId: 'bar-chart',
      datasetIdKey: 'label',
      width: 500,
      height: 500,
      cssClasses: '',
      styles: {},
      plugins: [ChartDataLabels],
      chartOptions: {
        responsive: true,
        maintainAspectRatio: false,
      },
      chartData: {
        labels: [],
        datasets: [
          {
            label: '',
            backgroundColor: '#F44336',
            data: [],
          },
        ],
      },
    };
  },

  created() {
    this.loadChartData();
    this.fetchAgrupacion();
  },

  methods: {
    async loadChartData() {
      try {
        const { codigo } = this.$route.params;
        const {
          data: { data, total },
        } = await this.axios.get(`reporte-contador/${codigo}/agrupado`, {
          params: { total_vehiculos: 'yes' },
        });
        const labels = data.map(({ nombre }) => nombre);
        const totalByLabel = data.map(
          ({ reporte_count: reporteCount }) => reporteCount,
        );
        const chartData = {
          labels,
          datasets: [
            {
              label: `Total registrado: ${total}`,
              backgroundColor: ['rgba(255,26,104,0.2)'],
              borderColor: ['rgba(255,26,104,1)'],
              tension: 0.4,
              data: totalByLabel,
              datalabels: {
                color: 'black',
              },
            },
          ],
        };
        this.chartData = chartData;
      } catch (error) {
        console.log(error);
      }
    },

    descargar() {
      const { codigo } = this.$route.params;
      this.axios
        .get(`reporte-contador/${codigo}/agrupado`, {
          responseType: 'arraybuffer',
          params: {
            csv: 'yes',
            agrupacion_minutos: agrupacion.at(this.tick) || 15,
          },
        })
        .then((response) => {
          const csvData = response.data;
          const blob = new Blob([csvData], { type: 'text/plain' });
          const fileName = `reporte_contador_agrupado_${codigo}.csv`;
          saveAs(blob, fileName);
        })
        .catch((error) => {
          console.error('Error en la solicitud:', error);
        });
    },

    async fetchAgrupacion() {
      try {
        const { codigo } = this.$route.params;
        const response = await this.axios.get(
          `reporte-contador/${codigo}/agrupado`,
          {
            params: { agrupacion_minutos: agrupacion.at(this.tick) || 15 },
          },
        );
        this.headers = response.data.data.at(0);
        this.reporte = response.data.data.slice(1);
      } catch (error) {
        console.log(error);
      }
    },

    randomKey() {
      return (
        new Date().getTime() + Math.floor(Math.random() * 99999).toString()
      );
    },
  },

  watch: {
    tick() {
      this.fetchAgrupacion();
    },
  },
};
</script>
