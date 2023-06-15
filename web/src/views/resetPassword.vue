<template>
    <div>
        <v-card class="mx-auto"
        max-width="600">
            <v-card-title>
                Restaurar constraseña
            </v-card-title>
            <v-card-text>
               <v-form ref="form">
                <v-text-field
                  v-model="password"
                  :rules="[passwordRule]"
                  validate-on-blur
                  outlined
                  :append-icon="
                    showPassword ? 'mdi-eye' : 'mdi-eye-off'
                  "
                  :type="showPassword ? 'text' : 'password'"
                  @click:append="showPassword = !showPassword"
                >
                  <template #label>
                    Contraseña
                    <span class="red--text"
                      ><strong>* </strong></span
                    >
                  </template>
                </v-text-field>
                <v-text-field
                  v-model="confirmPassword"
                  :rules="[passwordRule]"
                  validate-on-blur
                  outlined
                  :append-icon="
                    showPasswordConfirm ? 'mdi-eye' : 'mdi-eye-off'
                  "
                  :type="showPasswordConfirm ? 'text' : 'password'"
                  @click:append="showPasswordConfirm = !showPasswordConfirm"
                >
                  <template #label>
                    Confirme contraseña
                    <span class="red--text"
                      ><strong>* </strong></span
                    >
                  </template>
                </v-text-field>
               </v-form>
            </v-card-text>
            <v-card-actions>
                <v-btn @click="resetPassword" color="error">Restaurar contraseña</v-btn>
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
import { passwordLogin } from '../http/Validation';

export default {
  data: () => ({
    password: null,
    confirmPassword: null,
    showPassword: false,
    showPasswordConfirm: false,
  }),

  methods: {
    passwordRule: passwordLogin('El campo contraseña es requerido'),
    async resetPassword() {
      const isValid = this.$refs.form.validate();
      if (isValid) {
        try {
          await this.axios.post('reset-password', {
            password: this.password,
            password_confirmation: this.confirmPassword,
            token: this.$route.query.token,
            email: this.$route.query.email,
          });
          this.$router.push({ name: 'web:ingresar', query: { resetSuccess: true } });
          this.$toast.success('Realizado.');
        } catch (error) {
          this.$toast.error('Error al restaurar la contraseña.');
        }
      }
    },
  },
};
</script>
