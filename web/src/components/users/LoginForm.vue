<template>
  <v-row justify="center">
    <v-col lg="4" md="4" sm="12">
      <v-card class="mt-8" v-if="esInicioSesion">
        <v-card-title> Iniciar sesión </v-card-title>
        <v-card-text class="mb-0 pb-0">
          <v-form ref="form" v-model="valid" lazy-validation>
            <v-text-field
              :rules="[emailRule]"
              v-model="form.email"
              outlined
              required
            >
              <template #label>
                Correo electrónico
                <span class="red--text"><strong>* </strong></span>
              </template>
            </v-text-field>
            <v-text-field
              v-model.lazy="form.password"
              :rules="passwordRules"
              outlined
              :append-icon="showPassword ? 'mdi-eye' : 'mdi-eye-off'"
              :type="showPassword ? 'text' : 'password'"
              @click:append="showPassword = !showPassword"
            >
              <template #label>
                Contraseña <span class="red--text"><strong>* </strong></span>
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
          </v-container>
        </v-card-actions>
      </v-card>

      <RegistroUsuario v-else @cancelar="cancelar"></RegistroUsuario>
    </v-col>
  </v-row>
</template>
<script>
import RegistroUsuario from '@/components/users/RegistroUsuario.vue';

import { string, password } from '../../http/Validation';

export default {
  name: 'LoginForm',

  components: { RegistroUsuario },

  data: () => ({
    showPassword: false,
    valid: false,
    esInicioSesion: true,
    form: {
      email: '',
      password: '',
    },
    passwordRules: [
      (v) => /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/.test(v)
        || 'La contraseña debe tener al entre 8 y 16 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula.',
    ],
  }),

  methods: {
    passwordRule: password('Formato de la contraseña invalido'),
    emailRule: string('El campo correo electrónico es requerido.'),

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
          // this.$router.push('dashboard');
          window.location.reload();
        } catch (error) {
          this.$toast.error('Error al iniciar sesión.');
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

  computed: {
    handleOffset() {
      return this.$vuetify.breakpoint.mobile ? 0 : 4;
    },
  },
};
</script>
