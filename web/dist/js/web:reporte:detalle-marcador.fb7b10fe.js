(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["web:reporte:detalle-marcador"],{2921:function(o,t,e){"use strict";e.r(t);var a=e("8336"),r=e("b0af"),n=e("99d9"),i=e("adda"),s=function(){var o=this,t=o._self._c;return t(r["a"],[t(n["d"],[t(a["a"],{staticClass:"mb-1 pb-1 pt-0 mt-0",attrs:{text:"",color:"red darken-2"},on:{click:function(t){return o.$router.go(-1)}}},[o._v(" Regresar ")])],1),t(n["c"],[t(i["a"],{attrs:{height:"72vh",width:"100vw"}},[t("l-map",{ref:"map",style:{position:"absolute",height:"100%",width:"100%"},attrs:{zoom:o.config.zoom,center:o.config.center},on:{ready:o.ready}},[t("l-tile-layer",{attrs:{url:o.config.url,attribution:o.config.attribution}}),t("l-geo-json",{attrs:{geojson:o.geojson,options:o.geojsonOptions}})],1)],1)],1)],1)},l=[],c=e("2699"),p=e("a40a"),d=e("044a"),u=e("e11e"),g={name:"LevantamientoMarker",components:{LMap:c["a"],LTileLayer:p["a"],LGeoJson:d["a"]},data(){return{config:{url:"https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",attribution:'&copy; <a target="_blank" href="http://osm.org/copyright">OpenStreetMap</a> contributors',zoom:10,center:[13.794185,-88.89652999999998]},mapa:null,geojson:null,geojsonOptions:{pointToLayer(o,t){const e="rgba(255,26,104,1)";return Object(u["circleMarker"])(t,{radius:8,fillColor:e,color:"#000",weight:1,opacity:1,fillOpacity:.8})},onEachFeature(o,t){var e,a,r;const n=[null===o||void 0===o||null===(e=o.properties)||void 0===e||null===(a=e.marcador)||void 0===a?void 0:a.nombre,null===o||void 0===o||null===(r=o.properties)||void 0===r?void 0:r.comentario];n&&t.bindPopup(n.filter(Boolean).join(": "))}}}},created(){},methods:{ready(o){this.mapa=o,this.fetchCoordenadas()},async fetchCoordenadas(){try{const{codigo:o}=this.$route.params,{data:{data:t}}=await this.axios.get(`/reporte-marcadores/${o}/geojson`);this.geojson=t}catch(o){this.$toast.error("Error al mostrar los marcadores."),console.log(o)}}}},h=g,m=e("2877"),f=Object(m["a"])(h,s,l,!1,null,null,null);t["default"]=f.exports}}]);
//# sourceMappingURL=web:reporte:detalle-marcador.fb7b10fe.js.map