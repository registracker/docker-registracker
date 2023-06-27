<template>
  <v-container>
    <v-row>
      <v-col align-self="center">
        <v-card outlined max-height="50%">
          <v-card-title class="text-h2 justify-center"> 404 </v-card-title>
          <v-card-subtitle class="text-h2 text-center"
            >No Encontrado</v-card-subtitle
          >
          <v-card-text class="text-h5 text-center">
            El recurso solicitado no se encuentra en el servidor!
          </v-card-text>
          <v-card-actions class="justify-center">
            <v-btn @click="gotToDashboard" dark large color="red darken-2">
              Ir a inicio
            </v-btn>
          </v-card-actions>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>
<script>
export default {
  name: 'NotFound',
  methods: {
    gotToDashboard() {
      this.$router.push({ name: 'web:ingresar' }, (error) => {
        console.log(error);
      });
    },
  },
};
</script>
