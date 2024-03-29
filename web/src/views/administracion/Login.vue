<template>
  <v-container class="fill-height">
    <v-row justify="center">
      <v-col cols="12" sm="10" md="12" lg="10" xl="8">
        <v-card class="elevation-1">
          <v-card-title class="justify-center red darken-4">
            <h2 class="white--text">REGISTRACKER</h2>
          </v-card-title>
          <v-card-text>
                <v-row>
                  <v-col cols="12" md="6" class="pr-0 my-0 mr-0 align-self-center">
                    <v-card flat style="height: 100" class="mb-0 pb-0 mx-9" v-if="esInicioSesion">
                      <v-alert v-if="showSuccessAlert" dense text type="success" class="py-4 px-3">
                        La constraseña se restauro correctamente
                      </v-alert>
                      <v-card-title> Iniciar sesión </v-card-title>
                      <v-card-text class="mb-0 pb-0">
                        <v-form ref="form" v-model="valid">
                          <v-text-field
                            :rules="[emailRule]"
                            v-model="form.email"
                            outlined
                            validate-on-blur
                            required
                          >
                            <template #label>
                              Correo electrónico
                              <span class="red--text"><strong>* </strong></span>
                            </template>
                          </v-text-field>
                          <v-text-field
                            v-model="form.password"
                            :rules="[passwordRule]"
                            validate-on-blur
                            outlined
                            :append-icon="showPassword ? 'mdi-eye' : 'mdi-eye-off'"
                            :type="showPassword ? 'text' : 'password'"
                            @click:append="showPassword = !showPassword"
                            @keypress.enter="login"
                          >
                            <template #label>
                              Contraseña
                              <span class="red--text"><strong>* </strong></span>
                            </template>
                          </v-text-field>
                        </v-form>
                      </v-card-text>
                      <v-card-actions>
                        <v-container class="mt-0 pt-0">
                          <v-row no-gutters justify="center">
                            <v-col sm="8" md="8" lg="8" align-self="center">
                              <v-btn @click="login" color="red darken-4" dark block>
                                Ingresar
                              </v-btn>
                            </v-col>
                          </v-row>
                          <v-row no-gutters class="mt-6" justify="center">
                            <v-col sm="8" md="8" lg="8" align-self="center">
                              <v-btn @click="registrarse" outlined block> Registrarse </v-btn>
                            </v-col>
                          </v-row>
                          <v-row class="mt-6">
                            <v-col class="d-flex justify-center" sm="12" md="12" lg="12">
                              <router-link
                                class="forgot-password-link"
                                :to="{ name: 'web:forgot-password' }"
                              >
                                ¿Olvidaste tu contraseña?</router-link
                              >
                            </v-col>
                          </v-row>
                        </v-container>
                      </v-card-actions>
                    </v-card>
                    <RegistroUsuario v-else @cancelar="cancelar"></RegistroUsuario>
                  </v-col>
                  <v-col>
                    <v-img
                      style="height: 100%"
                      :aspect-ratio="1"
                      :src="require('@/assets/movilidad_urbana.jpeg')"
                    >
                    </v-img>
                  </v-col>
                </v-row>
          </v-card-text>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>
<style>
.forgot-password-link {
  color: #580e0e !important; /* Color personalizado */
  text-decoration: none; /* Quitar subrayado */
  font-weight: bold; /* Negrita */
  font-size: 16px; /* Tamaño de fuente */
  transition: color 0.3s;
}
</style>
<script>
import RegistroUsuario from '@/components/users/RegistroUsuario.vue';
import { passwordLogin, email } from '../../http/Validation';

export default {
  name: 'LoginForm',

  components: { RegistroUsuario },

  data: () => ({
    step: 1,
    showPassword: false,
    valid: false,
    esInicioSesion: true,
    showSuccessAlert: false,
    form: {
      email: '',
      password: '',
    },
    show: false,
  }),

  created() {
    if (this.$route.query.resetSuccess) {
      this.showSuccessAlert = true;
    }
  },

  props: {
    source: String,
  },

  mounted() {
    setTimeout(() => {
      this.show = true;
    }, 1000);
  },

  methods: {
    passwordRule: passwordLogin('El campo contraseña es requerido'),
    emailRule: email('El campo correo electrónico es requerido.'),

    async login() {
      const isValid = this.$refs.form.validate();
      if (isValid) {
        try {
          const response = await this.axios.post('/sanctum/token', {
            ...this.form,
          });
          const {
            data: { token },
          } = response;
          localStorage.setItem('token', token);
          window.location.reload();
        } catch (error) {
          if (error.response.status === 422) {
            this.$toast.error(error.response.data.message);
          } else {
            this.$toast.error('Error al iniciar sesión.');
          }
        }
      }
    },

    registrarse() {
      this.esInicioSesion = false;
    },

    cancelar() {
      this.esInicioSesion = true;
    },
  },
};
</script>
