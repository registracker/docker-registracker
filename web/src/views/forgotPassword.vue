<template>
    <div>
        <v-card class="mx-auto"
            max-width="600">
            <v-card-title  class="justify-center py-6 mb-4">
                <h3 class="text-center">OLVIDASTE TU CONTRASENIA</h3>
            </v-card-title>
            <v-card-text class="mb-0 pb-0">
              <v-alert
                  v-if="enviado"
                  dense
                  text
                  type="success"
                  class="py-4 px-3"
                >
                  Se ha enviado a tu correo un enlace para que puedas reestablecer
                  tu contrasenia
                </v-alert>
               <v-form>
                <v-text-field
                    v-model="form.email"
                    label="Ingrese su correo electronico"
                    outlined
                    class="mx-8"
                ></v-text-field>
               </v-form>
            </v-card-text>
            <v-card-actions class="mt-0 pb-10">
                <v-row>
                  <v-col cols="12" class="px-12">
                    <v-btn block color="error py-6">Enviar</v-btn>
                  </v-col>
                  <v-col cols="12" class="px-12">
                    <v-btn class="py-6"  block text color="gray darken-1"
                     :to="{ name: 'web:ingresar' }">
                      <v-icon left>
                        mdi-arrow-left
                      </v-icon>
                      Regresar login
                    </v-btn>
                  </v-col>
                </v-row>
            </v-card-actions>
        </v-card>
  </div>
</template>
<style>
.ver {
    background: transparent;
  }

</style>
<script>

export default {
  data: () => ({
    form: {
      email: null,
      enviado: false,
    },
  }),
};
</script>
