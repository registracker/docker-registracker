(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["web:administracion:vehiculos"],{"0fd9":function(t,e,a){"use strict";a("13d5"),a("14d9"),a("4b85");var i=a("2b0e"),s=a("d9f7"),r=a("80d2");const l=["sm","md","lg","xl"],o=["start","end","center"];function n(t,e){return l.reduce((a,i)=>(a[t+Object(r["G"])(i)]=e(),a),{})}const c=t=>[...o,"baseline","stretch"].includes(t),d=n("align",()=>({type:String,default:null,validator:c})),u=t=>[...o,"space-between","space-around"].includes(t),m=n("justify",()=>({type:String,default:null,validator:u})),h=t=>[...o,"space-between","space-around","stretch"].includes(t),f=n("alignContent",()=>({type:String,default:null,validator:h})),g={align:Object.keys(d),justify:Object.keys(m),alignContent:Object.keys(f)},p={align:"align",justify:"justify",alignContent:"align-content"};function v(t,e,a){let i=p[t];if(null!=a){if(e){const a=e.replace(t,"");i+="-"+a}return i+="-"+a,i.toLowerCase()}}const b=new Map;e["a"]=i["default"].extend({name:"v-row",functional:!0,props:{tag:{type:String,default:"div"},dense:Boolean,noGutters:Boolean,align:{type:String,default:null,validator:c},...d,justify:{type:String,default:null,validator:u},...m,alignContent:{type:String,default:null,validator:h},...f},render(t,{props:e,data:a,children:i}){let r="";for(const s in e)r+=String(e[s]);let l=b.get(r);if(!l){let t;for(t in l=[],g)g[t].forEach(a=>{const i=e[a],s=v(t,a,i);s&&l.push(s)});l.push({"no-gutters":e.noGutters,"row--dense":e.dense,["align-"+e.align]:e.align,["justify-"+e.justify]:e.justify,["align-content-"+e.alignContent]:e.alignContent}),b.set(r,l)}return t(e.tag,Object(s["a"])(a,{staticClass:"row",class:l}),i)}})},"2a7f":function(t,e,a){"use strict";a.d(e,"a",(function(){return r}));var i=a("71d9"),s=a("80d2");const r=Object(s["j"])("v-toolbar__title"),l=Object(s["j"])("v-toolbar__items");i["a"]},"62ad":function(t,e,a){"use strict";a("13d5"),a("14d9"),a("4b85");var i=a("2b0e"),s=a("d9f7"),r=a("80d2");const l=["sm","md","lg","xl"],o=(()=>l.reduce((t,e)=>(t[e]={type:[Boolean,String,Number],default:!1},t),{}))(),n=(()=>l.reduce((t,e)=>(t["offset"+Object(r["G"])(e)]={type:[String,Number],default:null},t),{}))(),c=(()=>l.reduce((t,e)=>(t["order"+Object(r["G"])(e)]={type:[String,Number],default:null},t),{}))(),d={col:Object.keys(o),offset:Object.keys(n),order:Object.keys(c)};function u(t,e,a){let i=t;if(null!=a&&!1!==a){if(e){const a=e.replace(t,"");i+="-"+a}return"col"!==t||""!==a&&!0!==a?(i+="-"+a,i.toLowerCase()):i.toLowerCase()}}const m=new Map;e["a"]=i["default"].extend({name:"v-col",functional:!0,props:{cols:{type:[Boolean,String,Number],default:!1},...o,offset:{type:[String,Number],default:null},...n,order:{type:[String,Number],default:null},...c,alignSelf:{type:String,default:null,validator:t=>["auto","start","end","center","baseline","stretch"].includes(t)},tag:{type:String,default:"div"}},render(t,{props:e,data:a,children:i,parent:r}){let l="";for(const s in e)l+=String(e[s]);let o=m.get(l);if(!o){let t;for(t in o=[],d)d[t].forEach(a=>{const i=e[a],s=u(t,a,i);s&&o.push(s)});const a=o.some(t=>t.startsWith("col-"));o.push({col:!a||!e.cols,["col-"+e.cols]:e.cols,["offset-"+e.offset]:e.offset,["order-"+e.order]:e.order,["align-self-"+e.alignSelf]:e.alignSelf}),m.set(l,o)}return t(e.tag,Object(s["a"])(a,{class:o}),i)}})},ff9e:function(t,e,a){"use strict";a.r(e);var i=a("8336"),s=a("b0af"),r=a("99d9"),l=a("62ad"),o=a("a523"),n=a("8fea"),c=a("169a"),d=a("ce7e"),u=a("4bd4"),m=a("132d"),h=a("0fd9"),f=a("2fa4"),g=a("8654"),p=a("71d9"),v=a("2a7f"),b=function(){var t=this,e=t._self._c;return e("div",[e(n["a"],{staticClass:"elevation-1",attrs:{headers:t.headers,items:t.items,"server-items-length":t.total,"sort-by":"id","footer-props":{pageText:"{0}-{1} de {2}","items-per-page-text":"Elementos por página"}},on:{"update:options":t.actualizarOpcionesTabla},scopedSlots:t._u([{key:"no-data",fn:function(){return[t._v(" Sin registros ")]},proxy:!0},{key:"top",fn:function(){return[e(p["a"],{attrs:{flat:""}},[e(v["a"],{staticClass:"text-capitalize"},[t._v(" Vehiculos ")]),e(d["a"],{staticClass:"mx-4",attrs:{inset:"",vertical:""}}),e(f["a"]),e(i["a"],{staticClass:"mr-2",attrs:{icon:"",title:"Mostrar registros eliminados"},on:{click:function(e){t.withTrashed=!t.withTrashed}}},[e(m["a"],{attrs:{color:t.withTrashed?"red darken-2":"grey"}},[t._v(" mdi-archive-lock-open-outline ")])],1),e(c["a"],{attrs:{"max-width":"600px",persistent:""},scopedSlots:t._u([{key:"activator",fn:function({on:a,attrs:s}){return[e(i["a"],t._g(t._b({staticClass:"mb-2",attrs:{color:"red darken-2",dark:""}},"v-btn",s,!1),a),[e(m["a"],{staticClass:"mr-1"},[t._v(" mdi-plus-box ")]),t._v(" Nuevo registro ")],1)]}}]),model:{value:t.dialog,callback:function(e){t.dialog=e},expression:"dialog"}},[e(s["a"],[e(r["d"],{},[t._v(" "+t._s(t.formTitle)+" ")]),e(r["c"],[e(u["a"],{ref:"form_vehiculo"},[e(o["a"],[e(h["a"],[e(l["a"],{staticClass:"mt-2 pb-0",attrs:{cols:"12",sm:"12"}},[e(g["a"],{attrs:{rules:[t.textRule],label:"Ingrese el nombre*",outlined:""},model:{value:t.editedItem.nombre,callback:function(e){t.$set(t.editedItem,"nombre",e)},expression:"editedItem.nombre"}})],1),e(l["a"],{staticClass:"mt-2 pb-0",attrs:{cols:"12",sm:"12"}},[e(g["a"],{attrs:{label:"Ingrese la nomenclatura",outlined:""},model:{value:t.editedItem.nomenclatura,callback:function(e){t.$set(t.editedItem,"nomenclatura",e)},expression:"editedItem.nomenclatura"}})],1),e(l["a"],{staticClass:"pb-0",attrs:{cols:"12",sm:"12"}},[e(g["a"],{attrs:{label:"Ingrese descripción",outlined:""},model:{value:t.editedItem.descripcion,callback:function(e){t.$set(t.editedItem,"descripcion",e)},expression:"editedItem.descripcion"}})],1)],1)],1)],1)],1),e(r["a"],{staticClass:"py-5"},[e(f["a"]),e(i["a"],{attrs:{text:""},on:{click:function(e){return t.close()}}},[t._v(" Cancelar ")]),-1==t.editedIndex?e(i["a"],{staticClass:"red darken-1",attrs:{text:"",dark:""},on:{click:function(e){return t.save()}}},[t._v(" Guardar ")]):e(i["a"],{staticClass:"red darken-1",attrs:{text:"",dark:""},on:{click:function(e){return t.update(t.editedItem)}}},[t._v(" Actualizar ")])],1)],1)],1)],1)]},proxy:!0},{key:"item.actions",fn:function({item:a}){return[a.fecha_eliminado?t._e():e(m["a"],{on:{click:function(e){return t.editItem(a)}}},[t._v(" mdi-pencil ")]),a.fecha_eliminado?e(m["a"],{attrs:{color:"grey"},on:{click:function(e){return t.restoreItemDialog(a)}}},[t._v(" mdi-delete-restore ")]):e(m["a"],{attrs:{color:"red lighten-2"},on:{click:function(e){return t.deleteItemConfirm(a)}}},[t._v(" mdi-delete ")])]}}])}),e(c["a"],{attrs:{"max-width":"530px"},model:{value:t.dialogDelete,callback:function(e){t.dialogDelete=e},expression:"dialogDelete"}},[e(s["a"],[e(r["d"],{staticClass:"text-h5"},[t._v(" ¿Quiere eliminar el registro "+t._s(t.editedItem.nombre)+"? ")]),e(r["a"],{staticClass:"py-3"},[e(f["a"]),e(i["a"],{attrs:{text:"",color:"red darken-1"},on:{click:t.deleteItem}},[t._v("Aceptar")]),e(i["a"],{attrs:{text:"",color:"gray darken-1"},on:{click:function(e){t.dialogDelete=!1}}},[t._v(" Cancelar ")]),e(f["a"])],1)],1)],1),e(c["a"],{attrs:{"max-width":"530px"},model:{value:t.restoreDialog,callback:function(e){t.restoreDialog=e},expression:"restoreDialog"}},[e(s["a"],[e(r["d"],{staticClass:"text-h5"},[t._v(" ¿Quiere restaurar el registro "+t._s(t.editedItem.nombre)+"? ")]),e(r["a"],{staticClass:"py-3"},[e(f["a"]),e(i["a"],{attrs:{text:"",color:"red darken-1"},on:{click:t.restoreItem}},[t._v("Aceptar")]),e(i["a"],{attrs:{text:"",color:"gray darken-1"},on:{click:function(e){t.restoreDialog=!1}}},[t._v(" Cancelar ")]),e(f["a"])],1)],1)],1)],1)},x=[],y=a("132a"),I={data(){return{withTrashed:!1,restoreDialog:!1,limit:10,page:1,total:0,headers:[{text:"Nombre",align:"start",value:"nombre"},{text:"Nomenclatura",align:"center",value:"nomenclatura"},{text:"Descripción",align:"center",value:"descripcion"},{text:"Acciones",align:"right",value:"actions",sortable:!1}],items:[],clases:[],dialog:!1,dialogDelete:!1,editedIndex:-1,editedItem:{},defaultItem:{nombre:"",id_clase:null,nomenclatura:"",cantidad_ejes:null,peso_maximo:null,longitud_maxima:null,descripcion:""}}},computed:{formTitle(){return-1===this.editedIndex?"Registrar Vehiculo":"Editar Vehiculo"}},watch:{withTrashed(){this.initialize()}},methods:{textRule:Object(y["g"])("El campo es requerido"),async initialize(){const{data:{data:t,meta:{total:e}}}=await this.axios.get("/vehiculos",{params:{with_trashed:this.withTrashed,limit:this.limit,page:this.page}});this.items=t,this.total=e},async save(){try{const t=this.$refs.form_vehiculo.validate();t&&(await this.axios.post("/vehiculos",this.editedItem),this.initialize(),this.$toast.success("Registro creado"),this.close())}catch(t){this.$toast.error("Error al crear el vehículo")}},editItem(t){this.editedIndex=this.items.indexOf(t),this.editedItem={...t},this.dialog=!0},async update(t){try{const e=this.$refs.form_vehiculo.validate();e&&(await this.axios.put("/vehiculos/"+t.id,this.editedItem),this.initialize(),this.$toast.success("Registro actualizado"),this.close())}catch(e){this.$toast.error("Error al actualizar el vehículo")}},deleteItemConfirm(t){this.editedItem.id=t.id,this.editedItem.nombre=t.nombre,this.dialogDelete=!0},async deleteItem(){try{await this.axios.delete("/vehiculos/"+this.editedItem.id),this.$toast.success("Registro eliminado"),this.initialize(),this.dialogDelete=!1}catch(t){this.$toast.error("Error al eliminar el vehículo")}},restoreItemDialog(t){this.editedItem.id=t.id,this.editedItem.nombre=t.nombre,this.restoreDialog=!0},async restoreItem(){try{await this.axios.post(`/vehiculos/${this.editedItem.id}/restore`),this.$toast.success("Registro restaurado"),this.restoreDialog=!1,this.initialize()}catch(t){this.$toast.error("Error al restaurar el vehiculo")}},actualizarOpcionesTabla(t){t.page!==this.page&&(this.page=t.page,this.initialize()),t.itemsPerPage!==this.limit&&(this.limit=t.itemsPerPage,this.initialize())},close(){this.dialog=!1,this.$nextTick(()=>{this.editedItem={...this.defaultItem},this.editedIndex=-1}),this.$refs.form_vehiculo.reset()}},created(){this.initialize()}},_=I,k=a("2877"),w=Object(k["a"])(_,b,x,!1,null,null,null);e["default"]=w.exports}}]);
//# sourceMappingURL=web:administracion:vehiculos.9416fc70.js.map