<template>
  <div>
    <div v-if="enabled">
      <v-btn @click="$router.go(-1)" dark outlined large color="red darken-2">
        Regresar
      </v-btn>

      <v-card class="mx-auto" width="50%">
        <v-form ref="userform" @submit.prevent v-model="userFormValid">
          <v-card-title class="mb-0 pb-0">
            <v-text-field
              v-model="email"
              label="Ingresar el correo"
              outlined
              :rules="[fieldEmailRule]"
              @keyup.enter="addEmailUser"
              @blur="handleBlur"
            >
            </v-text-field>
          </v-card-title>
        </v-form>

        <v-card-text class="mt-0 pt-0">
          <v-list>
            <v-subheader>
              {{
                users?.length
                  ? 'Participantes'
                  : 'No se han agregado participantes'
              }}
            </v-subheader>
            <v-list-item-group>
              <v-list-item v-for="user in users" :key="user.id">
                <v-list-item-content>
                  <v-list-item-title>{{ user.email }}</v-list-item-title>
                </v-list-item-content>
                <v-list-item-icon>
                  <v-icon color="red darken-2" @click="eliminarUser(user)">
                    mdi-delete-outline
                  </v-icon>
                </v-list-item-icon>
              </v-list-item>
            </v-list-item-group>
          </v-list>
        </v-card-text>
      </v-card>
    </div>
    <div v-else>
      <v-btn @click="$router.go(-1)" dark outlined large color="red darken-2">
        Regresar
      </v-btn>
      <p class="font-weight-regular">Recurso no encontrado</p>
    </div>
  </div>
</template>
<script>
import { email } from '../../http/Validation';

export default {
  name: 'GestionLevantamientoUsuario',

  data() {
    return {
      userFormValid: true,
      users: [],
      email: '',
      enabled: false,
    };
  },

  created() {
    this.obtenerUsers();
  },

  methods: {
    fieldEmailRule: email('Debe agregar un correo válido.'),

    handleBlur() {
      this.$refs.userform.resetValidation();
    },

    async obtenerUsers() {
      const { id } = this.$route.params;
      try {
        const response = await this.axios.get(`levantamiento/${id}/agrupacion`);
        this.users = response.data.data;
        this.enabled = true;
      } catch (error) {
        console.log(error);
        this.$toast.error('Error al obtener los usuarios del levantamiento.');
        this.users = [];
      }
    },

    async addEmailUser() {
      const validate = this.$refs.userform.validate();
      if (!validate) {
        return;
      }
      const { id } = this.$route.params;
      try {
        const {
          data: {
            data: { email: correo },
          },
        } = await this.axios.post(`levantamiento/${id}/agrupacion`, {
          email: this.email,
        });
        this.$toast.success(`El correo ${correo} se ha agregado.`);
        this.obtenerUsers();
      } catch (error) {
        console.log(error);
        this.$toast.error('Error al agregar el usuario.');
      }
      this.$refs.userform.reset();
      this.$refs.userform.resetValidation();
    },

    async eliminarUser(item) {
      const { id } = this.$route.params;
      const { id: IdUser, email: correo } = item;
      try {
        await this.axios.delete(`levantamiento/${id}/agrupacion/${IdUser}`, {
          params: {
            force: true,
          },
        });
        this.$toast.info(`El correo ${correo} se ha eliminado.`);
      } catch (error) {
        console.log(error);
        this.$toast.error('Error al eliminar el correo.');
      }
      this.obtenerUsers();
      this.$refs.userform.reset();
      this.$refs.userform.resetValidation();
    },
  },
};
</script>
