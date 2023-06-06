<template>
  <v-app :style="[
      !isAuthenticated
        ? {
            background:
              `url(${require('@/assets/fondo.png')})`,
              'background-repeat': 'repeat',
              'background-size': '200px 200px' }
        : '',
    ]">
  <div class="">
    <vue-progress-bar></vue-progress-bar>
    <v-navigation-drawer
      app
      v-model="drawer"
      v-if="isAuthenticated"
      color="blue-grey lighten-5"
    >
      <v-list-item>
        <v-list-item-content>
          <v-list-item-title class="text-h6 text-center">
            REGISTRACKER
          </v-list-item-title>
          <v-list-item-subtitle class="text-h4 text-center">
            🛴
          </v-list-item-subtitle>
        </v-list-item-content>
      </v-list-item>

      <v-divider></v-divider>

      <v-list dense nav>
        <template v-for="item in items">
          <v-list-group color="red" v-if="item.children" :key="item.index">
            <template v-slot:activator>
              <v-list-item-title class="text-capitalize">
                {{ item.title }}
              </v-list-item-title>
            </template>

            <template #prependIcon>
              <v-icon>{{ item.icon }}</v-icon>
            </template>

            <v-list-item
              v-for="(child, j) in item.children"
              :key="j"
              :to="child.path"
              class="ml-4"
              color="red"
            >
              <v-list-item-icon>
                <v-icon>{{ child.icon }} </v-icon>
              </v-list-item-icon>
              <v-list-item-title class="text-capitalize">
                <span>{{ child.title }}</span>
              </v-list-item-title>
            </v-list-item>
          </v-list-group>

          <v-list-item v-else :key="item.title" :to="item.path">
            <v-list-item-icon>
              <v-icon>{{ item.icon }} </v-icon>
            </v-list-item-icon>
            <v-list-item-title class="text-capitalize">
              <span>{{ item.title }}</span>
            </v-list-item-title>
          </v-list-item>
        </template>
      </v-list>
    </v-navigation-drawer>

    <v-app-bar app color="blue-grey lighten-5" v-if="isAuthenticated">
      <v-app-bar-nav-icon
        @click="drawer = !drawer"
        v-if="isAuthenticated"
      ></v-app-bar-nav-icon>
      <v-spacer></v-spacer>

      <template v-if="isAuthenticated">
        <v-btn icon class="mx-2" plain @click="dialogLogout = true">
          <v-icon> mdi-logout </v-icon>
        </v-btn>
      </template>

      <!-- <template v-else>
        <v-btn
          :color="loginColor"
          small
          class="mx-2"
          plain
          :to="{ name: 'web:ingresar' }"
        >
          Ingresar2
        </v-btn>
      </template>-->
    </v-app-bar>

    <v-main>
      <v-container fluid>
        <router-view></router-view>
      </v-container>
    </v-main>

    <v-footer app v-if="false"> </v-footer>
    <v-dialog v-model="dialogLogout" max-width="530px">
      <v-card>
        <v-card-title class="text-h5 justify-center">
          ¿Está seguro que desea cerrar sesión?
        </v-card-title>
        <v-card-actions class="py-3">
          <v-spacer></v-spacer>
          <v-btn class="red darken-2" @click="logout" dark>Si</v-btn>
          <v-btn class="default" color="" @click="dialogLogout = false"
            >No</v-btn
          >
          <v-spacer></v-spacer>
        </v-card-actions>
      </v-card>
    </v-dialog>
    <Footer></Footer>
    </div>
  </v-app>
</template>
<style>
.background-image {
  height: 100vh;
  width: 100%;
  background-size: contain;
  background-position: center;
}
</style>
<script>
import { mapActions, mapState } from 'vuex';
import Footer from '@/components/Footer.vue';

const items = [
  {
    title: 'Administración',
    icon: 'mdi-database',
    children: [
      {
        title: 'Usuarios',
        icon: 'mdi-account-multiple',
        path: { name: 'web:administracion:usuarios' },
      },
      {
        title: 'Permisos',
        icon: 'mdi-security',
        path: { name: 'web:administracion:permisos' },
      },
      {
        title: 'Roles',
        icon: 'mdi-account-check',
        path: { name: 'web:administracion:roles' },
      },
      {
        title: 'Estados solicitud',
        icon: 'mdi-account-details',
        path: { name: 'web:administracion:estados-solicitud' },
      },
      {
        title: 'Medios desplazamiento',
        icon: 'mdi-train-car',
        path: { name: 'web:administracion:medios-desplazamiento' },
      },
      {
        title: 'Incidentes',
        icon: 'mdi-alert',
        path: { name: 'web:administracion:incidentes' },
      },
      {
        title: 'Marcadores',
        icon: 'mdi-map-marker-star',
        path: { name: 'web:administracion:marcadores' },
      },
      {
        title: 'Clasificación Vehicular',
        icon: 'mdi-car-info',
        path: { name: 'web:administracion:clasificacion-vehicular' },
      },
      {
        title: 'Tipos vehiculos rutas',
        icon: 'mdi-format-list-group',
        path: { name: 'web:administracion:tipos-vehiculos-rutas' },
      },
      {
        title: 'Tipos servicios rutas',
        icon: 'mdi-format-list-group',
        path: { name: 'web:administracion:tipos-servicios-rutas' },
      },
      {
        title: 'Clases servicios rutas',
        icon: 'mdi-format-list-group',
        path: { name: 'web:administracion:clases-servicios-rutas' },
      },
      {
        title: 'Rutas transporte',
        icon: 'mdi-bus-stop',
        path: { name: 'web:administracion:rutas-transporte' },
      },

      {
        title: 'Vehiculos',
        icon: 'mdi-car-info',
        path: { name: 'web:administracion:vehiculos' },
      },
    ],
  },
  {
    title: 'Levantamiento',
    icon: 'mdi-clipboard-outline',
    children: [
      {
        title: 'Gestión Marcadores',
        icon: 'mdi-folder-search-outline',
        path: { name: 'web:administracion:levantamiento' },
      },
      {
        title: 'Gestión Conteo vehicular',
        icon: 'mdi-format-list-group-plus',
        path: { name: 'web:administracion:conteo-vehicular' },
      },
    ],
  },

  {
    title: 'Recorridos',
    icon: 'mdi-crosshairs-gps',
    children: [
      {
        title: 'Individual',
        icon: 'mdi-cellphone-marker',
        path: {
          name: 'web:desplazamiento:movil',
        },
      },
      {
        title: 'Multiple',
        icon: 'mdi-database-marker-outline',
        path: {
          name: 'web:desplazamiento:geojson',
        },
      },
    ],
  },

  {
    title: 'Reportes',
    icon: 'mdi-folder-outline',
    children: [
      // {
      //   title: 'Incidentes',
      //   icon: 'mdi-map-search-outline',
      //   path: {
      //     name: 'web:levantamiento:marcador',
      //   },
      // },
      {
        title: 'Marcadores',
        icon: 'mdi-map-search-outline',
        path: {
          name: 'web:levantamiento:marcador',
        },
      },
      {
        title: 'Conteo vehicular',
        icon: 'mdi-clipboard-edit-outline',
        path: {
          name: 'web:conteo-vehicular:lista',
        },
      },
    ],
  },
];

export default {
  name: 'App',
  // components: { BarNavigation, MainContainer, NavigationDrawer },
  components: { Footer },
  async created() {
    this.$Progress.start();

    const hasToken = !!localStorage.getItem('token') || false;

    if (hasToken) {
      console.log('Tiene token');
      try {
        const { data } = await this.axios.get('/user');
        const { permisos } = data;

        if (permisos.length) {
          this.userData(data);
          this.userIsAuthenticated(true);
          this.showBtn = true;
          this.items = items
            .map((item) => {
              const childPath = item.children.filter((child) => permisos.includes(child.path.name));
              if (childPath.length === 0) return null;
              return {
                ...item,
                children: childPath,
              };
            })
            .filter(Boolean);
        } else {
          this.$toast.error(
            'No tiene permisos para acceder al componente web.',
          );
          this.logout();
        }
      } catch (error) {
        this.logout();
      }
    }

    this.$nextTick(() => {
      console.log('No tiene token');
      if (this.$route?.meta?.requiresAuth === true) {
        this.logout();
      }
    });

    // this.userIsAuthenticated
    if (!this.accesoPermitido(this.$route.name) && this.isAuthenticated) {
      console.log(this.$route.name);
      console.log(this.data?.permisos);
      this.$router.push({ name: 'web:dashboard' }, () => {});
    }

    this.$router.beforeEach((to, from, next) => {
      console.log(to);
      console.log(from);
      console.log(this.data);

      if (!this.isAuthenticated && !to.meta.requiresAuth) {
        console.log('Entra');
        return next();
      }

      if (!this.isAuthenticated) {
        console.log('Entra 2');
        return next(false);
      }

      if (to.name === 'web:ingresar' || !this.accesoPermitido(to.name)) {
        console.log('Entra 3');
        return next(false);
      }

      // if (to.meta.requiresAuth) {
      //   console.log('Entra 2');
      //   return next();
      // }

      console.log('Entra 4');
      return next();
    });

    this.axios.interceptors.request.use(
      (config) => {
        this.$Progress.start();
        return config;
      },
      (error) => {
        this.$Progress.finish();
        return Promise.reject(error);
      },
    );

    this.axios.interceptors.response.use(
      (response) => {
        this.$Progress.finish();
        return response;
      },
      (error) => {
        this.$Progress.finish();
        return Promise.reject(error);
      },
    );
  },

  mounted() {
    this.$Progress.finish();
  },

  data: () => ({
    items: [],
    showBtn: false,
    right: null,
    drawer: null,
    dialogLogout: false,
    fondo: '@/assets/fondo.png',
    minerva:
      'https://eluniversitario.ues.edu.sv/wp-content/uploads/sites/11/2021/02/Minerva-Universidad-de-El-Salvador-UES.jpg',
  }),

  methods: {
    ...mapActions('user', ['userIsAuthenticated', 'userData']),

    logout() {
      this.dialogLogout = false;
      localStorage.removeItem('token');
      this.userIsAuthenticated(false);
      this.$router.push({ name: 'web:ingresar' }, () => {});
    },

    rutaIngresar() {
      console.log('🚀 ~ file: App.vue:297 ~ rutaIngresar', this.$route.name);
      return this.$route.name === 'web:ingresar';
    },

    accesoPermitido(nombreRuta) {
      if (!Array.isArray(this.data?.permisos)) {
        return false;
      }
      return this.data.permisos.includes(nombreRuta);
    },
  },

  computed: {
    ...mapState('user', ['data', 'isAuthenticated']),

    loginColor() {
      return this.$route.name === 'web:ingresar' ? 'red darken-2' : '';
    },
  },
};
</script>
