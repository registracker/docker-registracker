<template>
  <v-footer dark class="red darken-4 footer" v-if="false">
    <v-container class="text-center" id="text" fixed>
          Copyright © 2023 Universidad de El Salvador. Todos los derechos reservados
    </v-container>
  </v-footer>
</template>

<script>
export default {
  data: () => ({
    name: 'Footer',
  }),
};
</script>

<style>
  #text{
    font-size: 0.875rem;
  }

  .footer {
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
}
</style>
