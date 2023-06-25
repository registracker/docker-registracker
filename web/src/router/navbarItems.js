export default [{
  title: 'Administración',
  icon: 'mdi-database',
  children: [{
    title: 'Usuarios',
    icon: 'mdi-account-multiple',
    path: {
      name: 'web:administracion:usuarios',
    },
  },
  {
    title: 'Permisos',
    icon: 'mdi-security',
    path: {
      name: 'web:administracion:permisos',
    },
  },
  {
    title: 'Roles',
    icon: 'mdi-account-check',
    path: {
      name: 'web:administracion:roles',
    },
  },
  {
    title: 'Estados solicitud',
    icon: 'mdi-account-details',
    path: {
      name: 'web:administracion:estados-solicitud',
    },
  },
  {
    title: 'Medios desplazamiento',
    icon: 'mdi-train-car',
    path: {
      name: 'web:administracion:medios-desplazamiento',
    },
  },
  {
    title: 'Incidentes',
    icon: 'mdi-alert',
    path: {
      name: 'web:administracion:incidentes',
    },
  },
  {
    title: 'Marcadores',
    icon: 'mdi-map-marker-star',
    path: {
      name: 'web:administracion:marcadores',
    },
  },
  {
    title: 'Clasificación Vehicular',
    icon: 'mdi-car-info',
    path: {
      name: 'web:administracion:clasificacion-vehicular',
    },
  },
  {
    title: 'Tipos vehiculos rutas',
    icon: 'mdi-format-list-group',
    path: {
      name: 'web:administracion:tipos-vehiculos-rutas',
    },
  },
  {
    title: 'Tipos servicios rutas',
    icon: 'mdi-format-list-group',
    path: {
      name: 'web:administracion:tipos-servicios-rutas',
    },
  },
  {
    title: 'Clases servicios rutas',
    icon: 'mdi-format-list-group',
    path: {
      name: 'web:administracion:clases-servicios-rutas',
    },
  },
  {
    title: 'Rutas transporte',
    icon: 'mdi-bus-stop',
    path: {
      name: 'web:administracion:rutas-transporte',
    },
  },

  {
    title: 'Vehiculos',
    icon: 'mdi-car-info',
    path: {
      name: 'web:administracion:vehiculos',
    },
  },
  ],
},
{
  title: 'Levantamiento',
  icon: 'mdi-clipboard-outline',
  children: [{
    title: 'Gestión Marcadores',
    icon: 'mdi-folder-search-outline',
    path: {
      name: 'web:administracion:levantamiento',
    },
  },
  {
    title: 'Gestión Conteo vehicular',
    icon: 'mdi-format-list-group-plus',
    path: {
      name: 'web:administracion:conteo-vehicular',
    },
  },
  ],
},

{
  title: 'Recorridos',
  icon: 'mdi-crosshairs-gps',
  children: [{
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
    {
      title: 'Incidentes',
      icon: 'mdi-map-marker-multiple-outline',
      path: {
        name: 'web:reporte:incidente',
      },
    },
    {
      title: 'Marcadores',
      icon: 'mdi-map-search-outline',
      path: {
        name: 'web:reporte:marcador',
      },
    },
    {
      title: 'Conteo vehicular',
      icon: 'mdi-clipboard-edit-outline',
      path: {
        name: 'web:reporte:conteo-vehicular',
      },
    },
  ],
},
];
