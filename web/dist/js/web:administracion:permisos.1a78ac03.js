(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["web:administracion:permisos"],{"0fd9":function(e,t,a){"use strict";a("13d5"),a("14d9"),a("4b85");var i=a("2b0e"),s=a("d9f7"),r=a("80d2");const o=["sm","md","lg","xl"],n=["start","end","center"];function l(e,t){return o.reduce((a,i)=>(a[e+Object(r["G"])(i)]=t(),a),{})}const d=e=>[...n,"baseline","stretch"].includes(e),c=l("align",()=>({type:String,default:null,validator:d})),u=e=>[...n,"space-between","space-around"].includes(e),f=l("justify",()=>({type:String,default:null,validator:u})),m=e=>[...n,"space-between","space-around","stretch"].includes(e),p=l("alignContent",()=>({type:String,default:null,validator:m})),g={align:Object.keys(c),justify:Object.keys(f),alignContent:Object.keys(p)},h={align:"align",justify:"justify",alignContent:"align-content"};function b(e,t,a){let i=h[e];if(null!=a){if(t){const a=t.replace(e,"");i+="-"+a}return i+="-"+a,i.toLowerCase()}}const v=new Map;t["a"]=i["default"].extend({name:"v-row",functional:!0,props:{tag:{type:String,default:"div"},dense:Boolean,noGutters:Boolean,align:{type:String,default:null,validator:d},...c,justify:{type:String,default:null,validator:u},...f,alignContent:{type:String,default:null,validator:m},...p},render(e,{props:t,data:a,children:i}){let r="";for(const s in t)r+=String(t[s]);let o=v.get(r);if(!o){let e;for(e in o=[],g)g[e].forEach(a=>{const i=t[a],s=b(e,a,i);s&&o.push(s)});o.push({"no-gutters":t.noGutters,"row--dense":t.dense,["align-"+t.align]:t.align,["justify-"+t.justify]:t.justify,["align-content-"+t.alignContent]:t.alignContent}),v.set(r,o)}return e(t.tag,Object(s["a"])(a,{staticClass:"row",class:o}),i)}})},"2a7f":function(e,t,a){"use strict";a.d(t,"a",(function(){return r}));var i=a("71d9"),s=a("80d2");const r=Object(s["j"])("v-toolbar__title"),o=Object(s["j"])("v-toolbar__items");i["a"]},"62ad":function(e,t,a){"use strict";a("13d5"),a("14d9"),a("4b85");var i=a("2b0e"),s=a("d9f7"),r=a("80d2");const o=["sm","md","lg","xl"],n=(()=>o.reduce((e,t)=>(e[t]={type:[Boolean,String,Number],default:!1},e),{}))(),l=(()=>o.reduce((e,t)=>(e["offset"+Object(r["G"])(t)]={type:[String,Number],default:null},e),{}))(),d=(()=>o.reduce((e,t)=>(e["order"+Object(r["G"])(t)]={type:[String,Number],default:null},e),{}))(),c={col:Object.keys(n),offset:Object.keys(l),order:Object.keys(d)};function u(e,t,a){let i=e;if(null!=a&&!1!==a){if(t){const a=t.replace(e,"");i+="-"+a}return"col"!==e||""!==a&&!0!==a?(i+="-"+a,i.toLowerCase()):i.toLowerCase()}}const f=new Map;t["a"]=i["default"].extend({name:"v-col",functional:!0,props:{cols:{type:[Boolean,String,Number],default:!1},...n,offset:{type:[String,Number],default:null},...l,order:{type:[String,Number],default:null},...d,alignSelf:{type:String,default:null,validator:e=>["auto","start","end","center","baseline","stretch"].includes(e)},tag:{type:String,default:"div"}},render(e,{props:t,data:a,children:i,parent:r}){let o="";for(const s in t)o+=String(t[s]);let n=f.get(o);if(!n){let e;for(e in n=[],c)c[e].forEach(a=>{const i=t[a],s=u(e,a,i);s&&n.push(s)});const a=n.some(e=>e.startsWith("col-"));n.push({col:!a||!t.cols,["col-"+t.cols]:t.cols,["offset-"+t.offset]:t.offset,["order-"+t.order]:t.order,["align-self-"+t.alignSelf]:t.alignSelf}),f.set(o,n)}return e(t.tag,Object(s["a"])(a,{class:n}),i)}})},ee97:function(e,t,a){"use strict";a.r(t);var i=a("8336"),s=a("b0af"),r=a("99d9"),o=a("62ad"),n=a("a523"),l=a("8fea"),d=a("169a"),c=a("ce7e"),u=a("4bd4"),f=a("132d"),m=a("0fd9"),p=a("2fa4"),g=a("8654"),h=a("71d9"),b=a("2a7f"),v=function(){var e=this,t=e._self._c;return t("div",[t(l["a"],{staticClass:"elevation-1",attrs:{headers:e.headers,items:e.items,"sort-by":"id","footer-props":{pageText:"{0}-{1} de {2}","items-per-page-text":"Elementos por página"},"disable-sort":!0,"server-items-length":e.total},on:{"update:options":e.actualizarOpcionesTabla},scopedSlots:e._u([{key:"no-data",fn:function(){return[e._v(" Sin registros ")]},proxy:!0},{key:"top",fn:function(){return[t(h["a"],{attrs:{flat:""}},[t(b["a"],{staticClass:"text-capitalize"},[e._v(" Permisos ")]),t(c["a"],{staticClass:"mx-4",attrs:{inset:"",vertical:""}}),t(p["a"]),t(i["a"],{staticClass:"mr-2",attrs:{title:"ver permisos predefinidos",icon:""},on:{click:e.updateSearch}},[t(f["a"],{attrs:{color:e.showBaseRoles?"red darken-2":"grey"}},[e._v(" mdi-shield-lock-open-outline ")])],1),t(d["a"],{attrs:{"max-width":"600px",persistent:""},scopedSlots:e._u([{key:"activator",fn:function({on:a,attrs:s}){return[t(i["a"],e._g(e._b({staticClass:"mb-2",attrs:{color:"red darken-2",dark:""}},"v-btn",s,!1),a),[t(f["a"],{staticClass:"mr-1"},[e._v(" mdi-plus-box ")]),e._v(" Nuevo registro ")],1)]}}]),model:{value:e.dialog,callback:function(t){e.dialog=t},expression:"dialog"}},[t(s["a"],[t(r["d"],[e._v(" "+e._s(e.formTitle)+" ")]),t(r["c"],[t(u["a"],{ref:"form_permisos",on:{submit:function(e){e.preventDefault()}}},[t(n["a"],[t(m["a"],[t(o["a"],{staticClass:"mt-2",attrs:{cols:"12",sm:"12"}},[t(g["a"],{attrs:{rules:[e.fieldRule],outlined:""},scopedSlots:e._u([{key:"label",fn:function(){return[e._v(" Ingrese el nombre "),t("span",{staticClass:"red--text"},[t("strong",[e._v("* ")])])]},proxy:!0}]),model:{value:e.editedItem.name,callback:function(t){e.$set(e.editedItem,"name",t)},expression:"editedItem.name"}})],1)],1)],1)],1)],1),t(r["a"],{staticClass:"pt-0 mt-0"},[t(p["a"]),t(i["a"],{attrs:{text:""},on:{click:function(t){return e.close()}}},[e._v(" Cancelar ")]),-1==e.editedIndex?t(i["a"],{staticClass:"red darken-1",attrs:{text:"",dark:""},on:{click:function(t){return e.save()}}},[e._v(" Guardar ")]):t(i["a"],{staticClass:"red darken-1",attrs:{text:"",dark:""},on:{click:function(t){return e.update(e.editedItem)}}},[e._v(" Actualizar ")])],1)],1)],1)],1)]},proxy:!0},{key:"item.actions",fn:function({item:a}){return[a.id>e.permisosDefault?t(f["a"],{staticClass:"mr-2",on:{click:function(t){return e.editItem(a)}}},[e._v(" mdi-pencil ")]):e._e(),a.id>e.permisosDefault?t(f["a"],{attrs:{color:"red lighten-2"},on:{click:function(t){return e.deleteItemConfirm(a)}}},[e._v(" mdi-delete ")]):e._e()]}}])}),t(d["a"],{attrs:{"max-width":"530px"},model:{value:e.dialogDelete,callback:function(t){e.dialogDelete=t},expression:"dialogDelete"}},[t(s["a"],[t(r["d"],{staticClass:"justify-center"},[e._v(" ¿Está seguro que desea eliminar el registro? ")]),t(r["a"],{staticClass:"py-3"},[t(p["a"]),t(i["a"],{attrs:{text:"",color:"red darken-1"},on:{click:function(t){return e.deleteItem()}}},[e._v("Aceptar")]),t(i["a"],{attrs:{text:"",color:"gray darken-1"},on:{click:function(t){e.dialogDelete=!1}}},[e._v("Cancelar")]),t(p["a"])],1)],1)],1)],1)},y=[],x=a("132a"),_={data(){return{permisosDefault:x["f"],limit:10,page:1,total:0,showBaseRoles:!1,requiredField:[e=>!!e||"Name is required"],headers:[{text:"id",align:"start",value:"id",sortable:!1},{text:"Nombre",align:"start",value:"name",sortable:!1},{text:"Acciones",align:"right",value:"actions",sortable:!1}],items:[],dialog:!1,dialogDelete:!1,editedIndex:-1,editedItem:{id:"",name:""},defaultItem:{name:""}}},computed:{formTitle(){return-1===this.editedIndex?"Crear Permiso":"Editar Permiso"}},created(){this.initialize()},methods:{fieldRule:Object(x["g"])("Debe completar el campo."),async initialize(){const e=await this.axios.post("/permisos/search",{sort:[{field:"id",direction:"desc"}],filters:[{field:"id",operator:">",value:this.showBaseRoles?0:this.permisosDefault}]},{params:{limit:this.limit,page:this.page}});this.items=e.data.data,this.total=e.data.meta.total},updateSearch(){this.showBaseRoles=!this.showBaseRoles,this.initialize()},actualizarOpcionesTabla(e){e.page!==this.page&&(this.page=e.page,this.initialize()),e.itemsPerPage!==this.limit&&(this.limit=e.itemsPerPage,this.initialize())},async save(){try{const e=this.$refs.form_permisos.validate();e&&(await this.axios.post("/permisos",this.editedItem),this.initialize(),this.$toast.success("Registro creado."),this.close())}catch(e){this.$toast.error("Error al crear el permiso.")}},editItem(e){this.editedIndex=this.items.indexOf(e),this.editedItem={...e},this.dialog=!0,this.$refs.form_permisos&&this.$refs.form_permisos.resetValidation()},async update(e){try{const t=this.$refs.form_permisos.validate();t&&(await this.axios.put("/permisos/"+e.id,this.editedItem),this.initialize(),this.$toast.success("Registro actualizado correctamente."),this.close())}catch(t){this.$toast.error("Error al actualizar el permiso.")}},deleteItemConfirm(e){this.editedItem.id=e.id,this.dialogDelete=!0},async deleteItem(){try{await this.axios.delete("/permisos/"+this.editedItem.id),this.$toast.success("Registro eliminado"),this.initialize(),this.dialogDelete=!1}catch(e){this.$toast.error("Error al eliminar el permiso.")}},close(){this.dialog=!1,this.$nextTick(()=>{this.editedItem={...this.defaultItem},this.editedIndex=-1}),this.$refs.form_permisos.resetValidation(),this.$refs.form_permisos.reset()}}},k=_,C=a("2877"),w=Object(C["a"])(k,v,y,!1,null,null,null);t["default"]=w.exports}}]);
//# sourceMappingURL=web:administracion:permisos.1a78ac03.js.map