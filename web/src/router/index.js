import Vue from 'vue';
import VueRouter from 'vue-router';
// import store from '@/store/user';

Vue.use(VueRouter);

const routes = [{
  path: '/',
  name: 'web:ingresar',
  meta: {
    requiresAuth: false,
  },
  component: () => import(
    /* webpackChunkName: "web:ingresar" */
    '@/views/administracion/Login.vue'
  ),
},
{
  path: '/dashboard',
  name: 'web:dashboard',
  meta: {
    requiresAuth: true,
  },
  component: () => import(
    /* webpackChunkName: "web:dashboard" */
    '@/components/desplazamiento/DesplazamientoListado.vue'
  ),
},
{
  path: '/terminos-condiciones',
  name: 'web:terminos-condiciones',
  meta: {
    requiresAuth: false,
  },
  component: () => import(
    /* webpackChunkName: "web:terminos-condiciones" */
    '@/views/terminosCondiciones.vue'
  ),
},
{
  path: '/forgot-password',
  name: 'web:forgot-password',
  meta: {
    requiresAuth: false,
  },
  component: () => import(
    /* webpackChunkName: "web:forgot-password" */
    '@/views/forgotPassword.vue'
  ),
},
{
  path: '/reset-password',
  name: 'web:reset-password',
  meta: {
    requiresAuth: false,
  },
  component: () => import(
    /* webpackChunkName: "web:reset-password" */
    '@/views/resetPassword.vue'
  ),
},
{
  path: '/administracion',
  name: 'administracion',
  meta: {
    requiresAuth: true,
  },
  component: () => import(
    /* webpackChunkName: "administracion" */
    '@/views/administracion/Base.vue'
  ),
  children: [
    {
      path: 'usuario',
      name: 'web:administracion:usuarios',
      meta: {
        requiresAuth: true,
      },
      component: () => import(
      /* webpackChunkName: "web:administracion:usuarios" */
        '@/components/users/CreateUserFom.vue'
      ),
    },

    {
      path: 'roles',
      name: 'web:administracion:roles',
      meta: {
        requiresAuth: true,
      },
      component: () => import(
      /* webpackChunkName: "web:administracion:roles" */
        '@/views/administracion/Roles.vue'
      ),
    },
    {
      path: 'permisos',
      name: 'web:administracion:permisos',
      meta: {
        requiresAuth: true,
      },
      component: () => import(
      /* webpackChunkName: "web:administracion:permisos" */
        '@/views/administracion/Permisos.vue'
      ),
    },
    {
      path: 'medios-desplazamiento',
      name: 'web:administracion:medios-desplazamiento',
      meta: {
        requiresAuth: true,
      },
      component: () => import(
      /* webpackChunkName: "web:administracion:medios-desplazamiento" */
        '@/components/administracion/GestionIconos.vue'
      ),
    },
    {
      path: 'incidentes',
      name: 'web:administracion:incidentes',
      meta: {
        requiresAuth: true,
      },
      component: () => import(
      /* webpackChunkName: "web:administracion:incidentes" */
        '@/components/administracion/GestionIconos.vue'
      ),
    },
    {
      path: 'marcadores',
      name: 'web:administracion:marcadores',
      meta: {
        requiresAuth: true,
      },
      component: () => import(
      /* webpackChunkName: "web:administracion:marcadores" */
        '@/components/administracion/GestionIconos.vue'
      ),
    },
    {
      path: 'clasificacion-vehicular',
      name: 'web:administracion:clasificacion-vehicular',
      meta: {
        requiresAuth: true,
      },
      component: () => import(
      /* webpackChunkName: "web:administracion:clasificacion-vehicular" */
        '@/components/administracion/ClasificacionVehicular.vue'
      ),
    },
    {
      path: 'clases-vehiculares',
      name: 'web:administracion:clases-vehiculares',
      meta: {
        requiresAuth: true,
      },
      component: () => import(
      /* webpackChunkName: "web:administracion:clases-vehiculares" */
        '@/views/administracion/ClasesVehiculares.vue'
      ),
    },
    {
      path: 'vehiculos',
      name: 'web:administracion:vehiculos',
      meta: {
        requiresAuth: true,
      },
      component: () => import(
      /* webpackChunkName: "web:administracion:vehiculos" */
        '@/views/administracion/Vehiculos.vue'
      ),
    },
    {
      path: 'estados-solicitud',
      name: 'web:administracion:estados-solicitud',
      meta: {
        requiresAuth: true,
      },
      component: () => import(
      /* webpackChunkName: "web:administracion:estados-solicitud" */
        '@/components/administracion/GestionEstadosCuenta.vue'
      ),
    },
    {
      path: 'tipos-vehiculos-rutas',
      name: 'web:administracion:tipos-vehiculos-rutas',
      meta: {
        requiresAuth: true,
      },
      component: () => import(
      /* webpackChunkName: "web:administracion:tipos-vehiculos-rutas" */
        '@/components/administracion/RutasTransporte/GestionTiposVehiculoRutas.vue'
      ),
    },
    {
      path: 'tipos-servicios-rutas',
      name: 'web:administracion:tipos-servicios-rutas',
      meta: {
        requiresAuth: true,
      },
      component: () => import(
      /* webpackChunkName: "web:administracion:tipos-servicios-rutas" */
        '@/components/administracion/RutasTransporte/GestionTiposServiciosRutas.vue'
      ),
    },
    {
      path: 'clases-servicios-rutas',
      name: 'web:administracion:clases-servicios-rutas',
      meta: {
        requiresAuth: true,
      },
      component: () => import(
      /* webpackChunkName: "web:administracion:clases-servicios-rutas" */
        '@/components/administracion/RutasTransporte/GestionClasesServiciosRutas.vue'
      ),
    },
    {
      path: 'rutas-transporte',
      name: 'web:administracion:rutas-transporte',
      meta: {
        requiresAuth: true,
      },
      component: () => import(
      /* webpackChunkName: "web:administracion:rutas-transporte" */
        '@/components/administracion/RutasTransporte/GestionRutasTransporte.vue'
      ),
    },
    {
      path: 'levantamientos',
      name: 'web:administracion:levantamiento',
      meta: {
        requiresAuth: true,
      },
      component: () => import(
      /* webpackChunkName: "web:administracion:levantamiento" */
        '@/components/administracion/GestionLevantamiento.vue'
      ),
    },
    {
      path: 'levantamientos/:id',
      name: 'web:administracion:levantamiento-usuario',
      meta: {
        requiresAuth: true,
      },
      component: () => import(
      /* webpackChunkName: "web:administracion:levantamiento-usuario" */
        '@/components/administracion/GestionLevantamientoUsuario.vue'
      ),
      beforeEnter: (to, from, next) => {
        const userId = parseInt(to.params.id, 10);
        if (!Number.isNaN(userId)) {
          next();
        } else {
          next('/NotFound');
        }
      },
    },
    {
      path: 'conteo-vehicular',
      name: 'web:administracion:conteo-vehicular',
      meta: {
        requiresAuth: true,
      },
      component: () => import(
      /* webpackChunkName: "web:administracion:conteo-vehicular" */
        '@/components/administracion/GestionLevantamientoContador.vue'
      ),
    },
    {
      path: 'conteo-vehicular/:id',
      name: 'web:administracion:conteo-vehicular-usuario',
      meta: {
        requiresAuth: true,
      },
      component: () => import(
      /* webpackChunkName: "web:administracion:conteo-vehicular-usuario" */
        '@/components/administracion/GestionLevantamientoContadorUsuario.vue'
      ),
      beforeEnter: (to, from, next) => {
        const userId = parseInt(to.params.id, 10);
        if (!Number.isNaN(userId)) {
          next();
        } else {
          next('/NotFound');
        }
      },
    },
  ],
},

{
  path: '/desplazamiento',
  name: 'desplazamiento',
  meta: {
    requiresAuth: true,
  },
  component: () => import(
    /* webpackChunkName: "desplazamiento" */
    '@/views/administracion/Base.vue'
  ),
  children: [{
    path: 'movil',
    name: 'web:desplazamiento:movil',
    meta: {
      requiresAuth: true,
    },
    component: () => import(
      /* webpackChunkName: "web:desplazamiento:movil" */
      '@/components/desplazamiento/DesplazamientoListado.vue'
    ),
  },
  {
    path: 'registrados/:uuid',
    name: 'web:desplazamiento:detalle',
    meta: {
      requiresAuth: true,
    },
    component: () => import(
      /* webpackChunkName: "web:desplazamiento:detalle" */
      '@/components/desplazamiento/GeoJson.vue'
    ),
  },
  {
    path: 'geojson',
    name: 'web:desplazamiento:geojson',
    meta: {
      requiresAuth: true,
    },
    component: () => import(
      /* webpackChunkName: "web:desplazamiento:geojson" */
      '@/components/desplazamiento/GeoJsonFiltro.vue'
    ),
  },
  ],
},

{
  path: '/reporte',
  name: 'reporte',
  meta: {
    requiresAuth: true,
  },
  component: () => import(
    /* webpackChunkName: "levantamiento" */
    '@/views/administracion/Base.vue'
  ),
  children: [{
    path: 'incidentes',
    name: 'web:reporte:incidente',
    meta: {
      requiresAuth: true,
    },
    component: () => import(
      /* webpackChunkName: "web:reporte:incidente" */
      '@/components/desplazamiento/IncidenteGeoJson.vue'
    ),
  },
  {
    path: 'marcadores',
    name: 'web:reporte:marcador',
    meta: {
      requiresAuth: true,
    },
    component: () => import(
      /* webpackChunkName: "web:reporte:marcador" */
      '@/components/levantamiento/Listado.vue'
    ),
  },
  {
    path: 'marcador/:codigo',
    name: 'web:reporte:detalle-marcador',
    meta: {
      requiresAuth: true,
    },
    component: () => import(
      /* webpackChunkName: "web:reporte:detalle-marcador" */
      '@/components/levantamiento/Marker.vue'
    ),
  },
  {
    path: 'conteo-vehicular',
    name: 'web:reporte:conteo-vehicular',
    meta: {
      requiresAuth: true,
    },
    component: () => import(
      /* webpackChunkName: "web:reporte:conteo-vehicular" */
      '@/components/conteo_vehicular/Listado.vue'
    ),
  },
  {
    path: 'conteo-vehicular/:codigo',
    name: 'web:reporte:detalle-conteo-vehicular',
    meta: {
      requiresAuth: true,
    },
    component: () => import(
      /* webpackChunkName: "web:reporte:detalle-conteo-vehicular" */
      '@/components/conteo_vehicular/Tabla.vue'
    ),
  },
  ],
},

{
  path: '*',
  component: () => import(
    /* webpackChunkName: "web:not_found:movil" */
    '@/components/paginas/NotFound.vue'
  ),
},
];

const router = new VueRouter({
  mode: 'history',
  // base: process.env.BASE_URL,
  routes,
});

export default router;
