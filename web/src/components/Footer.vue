<template>
  <v-footer dark class="red darken-4 mt-0 pt-0"  absolute>
    <v-container class="text-center" id="text" >
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
</style>
