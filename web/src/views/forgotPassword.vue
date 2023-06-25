<template>
    <div>
        <v-card class="mx-auto"
            max-width="600">
            <v-card-title  class="justify-center mb-4 mb-0 pb-0">
                <h3 class="text-center">OLVIDASTE TU CONTRASEÑA</h3>
            </v-card-title>
            <v-card-text class="mt-0 pt-0 mb-0 pb-0">
              <v-alert
                  v-if="enviado"
                  dense
                  text
                  type="success"
                  class="py-4 px-3"
                >
                  Se ha enviado a tu correo un enlace para que puedas reestablecer
                  tu contraseña
                </v-alert>
               <v-form ref="form">
                <v-text-field
                    :rules="[emailRule]"
                    v-model="email"
                    label="Ingrese su correo electronico"
                    outlined
                    class="mx-8 mt-6"
                ></v-text-field>
               </v-form>
            </v-card-text>
            <v-card-actions class="mt-0 pb-10">
                <v-row>
                  <v-col cols="12" class="px-12">
                    <v-btn @click="sendLinkResetPassword()" block color="error py-6">Enviar</v-btn>
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
import {
  email,
} from '../http/Validation';

export default {
  data: () => ({
    email: null,
    enviado: false,
    mensaje: '',
  }),
  methods: {
    emailRule: email('Debe agregar un correo válido.'),
    async sendLinkResetPassword() {
      const isValid = this.$refs.form.validate();
      if (isValid) {
        try {
          await this.axios.post('forgot-password', {
            email: this.email,
          });
          this.enviado = true;
        } catch (error) {
          if (error.response.request.status === 422) {
            this.mensaje = 'Correo no registrado';
          } else {
            this.mensaje = 'Error al restaurar la contraseña';
          }
          this.$toast.error(this.mensaje);
        }
      }
    },
  },
};
</script>
