(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["web:administracion:estados-solicitud"],{"1be4":function(t,e,i){var a=i("d066");t.exports=a("document","documentElement")},"2a7f":function(t,e,i){"use strict";i.d(e,"a",(function(){return r}));var a=i("71d9"),s=i("80d2");const r=Object(s["j"])("v-toolbar__title"),o=Object(s["j"])("v-toolbar__items");a["a"]},"33d1":function(t,e,i){"use strict";var a=i("23e7"),s=i("7b0b"),r=i("07fa"),o=i("5926"),n=i("44d2");a({target:"Array",proto:!0},{at:function(t){var e=s(this),i=r(e),a=o(t),n=a>=0?a:i+a;return n<0||n>=i?void 0:e[n]}}),n("at")},"37e8":function(t,e,i){var a=i("83ab"),s=i("aed9"),r=i("9bf2"),o=i("825a"),n=i("fc6a"),l=i("df75");e.f=a&&!s?Object.defineProperties:function(t,e){o(t);var i,a=n(e),s=l(e),c=s.length,h=0;while(c>h)r.f(t,i=s[h++],a[i]);return t}},"44d2":function(t,e,i){var a=i("b622"),s=i("7c73"),r=i("9bf2").f,o=a("unscopables"),n=Array.prototype;void 0==n[o]&&r(n,o,{configurable:!0,value:s(null)}),t.exports=function(t){n[o][t]=!0}},"77a3":function(t,e,i){"use strict";i.r(e);var a=i("8336"),s=i("b0af"),r=i("99d9"),o=i("169a"),n=i("2fa4"),l=function(){var t=this,e=t._self._c;return e("div",[e("EstadoCuentaTablaPaginada",{key:t.total,attrs:{toolbarTitle:this.path.replace("-"," "),headers:t.headers,items:t.items,total:t.total},on:{create:t.create,remove:t.remove,edit:t.edit,refresh:t.obtenerItems,restore:t.restore,trash:t.trash,update:t.update}}),e(o["a"],{attrs:{"max-width":"600"},model:{value:t.dialog,callback:function(e){t.dialog=e},expression:"dialog"}},[t.initialForm.length?e("EstadoCuentaForm",{ref:"mdipicker",attrs:{value:t.initialForm},on:{submit:t.submit,close:t.close}}):t._e()],1),e(o["a"],{attrs:{"max-width":"600"},model:{value:t.dialogDelete,callback:function(e){t.dialogDelete=e},expression:"dialogDelete"}},[t.initialForm.length?e(s["a"],[e(r["d"],{staticClass:"text-center justify-center"},[t._v(" ¿Seguro que quieres borrar el registro "+t._s(t.initialForm[0].toLocaleLowerCase())+"? ")]),e(r["a"],[e(n["a"]),e(a["a"],{attrs:{color:"red darken-1",text:""},on:{click:t.deleteItem}},[t._v("Aceptar")]),e(a["a"],{attrs:{color:"gray darken-1",text:""},on:{click:function(e){t.dialogDelete=!1}}},[t._v(" Cancelar ")]),e(n["a"])],1)],1):t._e()],1),e(o["a"],{attrs:{"max-width":"600"},model:{value:t.dialogRestore,callback:function(e){t.dialogRestore=e},expression:"dialogRestore"}},[t.initialForm.length?e(s["a"],[e(r["d"],{staticClass:"text-center"},[t._v(" ¿Quieres restaurar el registro "+t._s(t.initialForm[0].toLocaleLowerCase())+"? ")]),e(r["a"],[e(n["a"]),e(a["a"],{attrs:{color:"red darken-1",text:""},on:{click:t.restoreItem}},[t._v("Aceptar")]),e(a["a"],{attrs:{color:"gray darken-1",text:""},on:{click:function(e){t.dialogRestore=!1}}},[t._v(" Cancelar ")]),e(n["a"])],1)],1):t._e()],1)],1)},c=[],h=(i("33d1"),i("ea98"),i("4bd4")),u=(i("ec29"),i("9d01"),i("fe09")),d=i("c37a"),m=i("c3f0"),p=i("0789"),v=i("490a"),f=i("80d2"),g=u["a"].extend({name:"v-switch",directives:{Touch:m["a"]},props:{inset:Boolean,loading:{type:[Boolean,String],default:!1},flat:{type:Boolean,default:!1}},computed:{classes(){return{...d["a"].options.computed.classes.call(this),"v-input--selection-controls v-input--switch":!0,"v-input--switch--flat":this.flat,"v-input--switch--inset":this.inset}},attrs(){return{"aria-checked":String(this.isActive),"aria-disabled":String(this.isDisabled),role:"switch"}},validationState(){return this.hasError&&this.shouldValidate?"error":this.hasSuccess?"success":null!==this.hasColor?this.computedColor:void 0},switchData(){return this.setTextColor(this.loading?void 0:this.validationState,{class:this.themeClasses})}},methods:{genDefaultSlot(){return[this.genSwitch(),this.genLabel()]},genSwitch(){const{title:t,...e}=this.attrs$;return this.$createElement("div",{staticClass:"v-input--selection-controls__input"},[this.genInput("checkbox",{...this.attrs,...e}),this.genRipple(this.setTextColor(this.validationState,{directives:[{name:"touch",value:{left:this.onSwipeLeft,right:this.onSwipeRight}}]})),this.$createElement("div",{staticClass:"v-input--switch__track",...this.switchData}),this.$createElement("div",{staticClass:"v-input--switch__thumb",...this.switchData},[this.genProgress()])])},genProgress(){return this.$createElement(p["c"],{},[!1===this.loading?null:this.$slots.progress||this.$createElement(v["a"],{props:{color:!0===this.loading||""===this.loading?this.color||"primary":this.loading,size:16,width:2,indeterminate:!0}})])},onSwipeLeft(){this.isActive&&this.onChange()},onSwipeRight(){this.isActive||this.onChange()},onKeydown(t){(t.keyCode===f["x"].left&&this.isActive||t.keyCode===f["x"].right&&!this.isActive)&&this.onChange()}}}),b=i("8654"),y=function(){var t=this,e=t._self._c;return e(s["a"],{staticClass:"mx-auto",attrs:{"max-width":"600"}},[e(h["a"],{ref:"form",attrs:{"lazy-validation":""},model:{value:t.valid,callback:function(e){t.valid=e},expression:"valid"}},[e(r["d"],[t._v(" "+t._s(3===t.value.length?"Editar registro":"Crear registro")+" ")]),e(r["c"],{staticClass:"mb-0 pb-0"},[e(b["a"],{attrs:{rules:[t.nombreRule],outlined:"",required:""},on:{keyup:function(e){return!e.type.indexOf("key")&&t._k(e.keyCode,"enter",13,e.key,"Enter")?null:t.submit.apply(null,arguments)}},scopedSlots:t._u([{key:"label",fn:function(){return[t._v(" "+t._s(t.title)+" "),e("span",{staticClass:"red--text"},[e("strong",[t._v("* ")])])]},proxy:!0}]),model:{value:t.nombre,callback:function(e){t.nombre=e},expression:"nombre"}}),e(g,{attrs:{label:"Permitir acceso al software"},model:{value:t.permitirAcceso,callback:function(e){t.permitirAcceso=e},expression:"permitirAcceso"}})],1),e(r["a"],[e(n["a"]),e(a["a"],{attrs:{text:""},on:{click:function(e){return t.$emit("close")}}},[t._v(" Cancelar ")]),e(a["a"],{attrs:{color:"red darken-1",dark:""},on:{click:t.submit}},[t._v(" Aceptar ")])],1)],1)],1)},_=[],w=i("132a"),k={name:"EstadoCuentaForm",props:{title:{type:String,default:"Nombre"},cardTitle:{type:String,default:"Title"},value:{type:Array,default:()=>["",""]}},data(){return{valid:!1,nombre:"",permitirAcceso:""}},mounted(){this.nombre=this.value.at(0)||"",this.permitirAcceso=this.value.at(1)||!1},methods:{iconoRule:Object(w["g"])("Debe seleccionar un icono."),nombreRule:Object(w["g"])("Debe agregar el nombre."),submit(){const t=this.$refs.form.validate();t&&this.$emit("submit")}},watch:{nombre(t){this.value[0]=t},permitirAcceso(t){this.value[1]=t}}},C=k,x=i("2877"),A=Object(x["a"])(C,y,_,!1,null,null,null),$=A.exports,F=i("8fea"),S=i("ce7e"),E=i("132d"),T=i("71d9"),V=i("2a7f"),D=function(){var t=this,e=t._self._c;return e(F["a"],{staticClass:"elevation-1",attrs:{"sort-by":"id",headers:t.headers,items:t.items,options:t.options,"footer-props":t.footerProps,"server-items-length":t.total},on:{"update:options":t.actualizarOpcionesTabla},scopedSlots:t._u([{key:"no-data",fn:function(){return[t._v(" Sin registros ")]},proxy:!0},{key:"top",fn:function(){return[e(T["a"],{attrs:{flat:""}},[e(V["a"],{staticClass:"text-capitalize"},[t._v(" "+t._s(t.toolbarTitle)+" ")]),e(S["a"],{staticClass:"mx-4",attrs:{inset:"",vertical:""}}),e(n["a"]),e(a["a"],{staticClass:"mr-2",attrs:{icon:"",title:"Mostrar registros eliminados"},on:{click:function(e){t.withTrashedActive=!t.withTrashedActive}}},[e(E["a"],{attrs:{color:t.withTrashedActive?"red darken-2":"grey"}},[t._v(" mdi-archive-lock-open-outline ")])],1),e(a["a"],{staticClass:"mb-2",attrs:{color:"red darken-2",dark:""},on:{click:function(e){return t.$emit("create")}}},[e(E["a"],{staticClass:"mr-1"},[t._v(" mdi-plus-box ")]),t._v(" Nuevo registro ")],1)],1)]},proxy:!0},{key:"item.permitir_acceso",fn:function({item:i}){return[i.permitir_acceso?e(E["a"],{attrs:{color:"green darken-2"}},[t._v("mdi-check-circle-outline")]):t._e()]}},{key:"item.actions",fn:function({item:i}){return[i.fecha_eliminado?e(E["a"],{staticClass:"mr-2",attrs:{color:"grey"},on:{click:function(e){return t.$emit("restore",i)}}},[t._v(" mdi-delete-restore ")]):t._e(),i.fecha_eliminado?t._e():e(E["a"],{staticClass:"ml-2",on:{click:function(e){return t.$emit("edit",i)}}},[t._v(" mdi-pencil ")]),i.fecha_eliminado?t._e():e(E["a"],{attrs:{color:"red lighten-2"},on:{click:function(e){return t.$emit("remove",i)}}},[t._v(" mdi-delete ")])]}}])})},O=[],j={name:"EstadoCuentaTablaPaginada",props:{total:{type:Number},toolbarTitle:{type:String,default:"Listado"},headers:{type:Array,default:()=>[]},items:{type:Array,default:()=>[]}},created(){this.resource=this.$route.query.resource,this.options={},this.footerProps={"items-per-page-options":this.itemsPerPage,pageText:"{0}-{1} de {2}","items-per-page-text":"Elementos por página"}},data(){return{withTrashedActive:!1,options:{},footerProps:{}}},computed:{},methods:{actualizarOpcionesTabla(t){this.$emit("update",t)}},watch:{withTrashedActive(t){this.$emit("trash",t)}}},P=j,R=Object(x["a"])(P,D,O,!1,null,null,null),I=R.exports,z={name:"GestionEstadosCuenta",components:{EstadoCuentaForm:$,EstadoCuentaTablaPaginada:I},data(){return{total:0,itemsPerPage:10,withTrashed:!1,limit:10,page:1,dialog:!1,dialogDelete:!1,dialogRestore:!1,path:"",headers:[{text:"Nombre",align:"start",value:"nombre"},{text:"Acceso al software",align:"center",value:"permitir_acceso"},{text:"Acciones",align:"right",value:"actions",sortable:!1}],items:[],initialForm:["",""]}},created(){this.path=this.$route.path.split("/").at(-1),this.obtenerItems()},methods:{update(t){t.page!==this.page&&(this.page=t.page,this.obtenerItems()),t.itemsPerPage!==this.limit&&(this.limit=t.itemsPerPage,this.obtenerItems())},trash(t){this.withTrashed=t},async obtenerItems(){try{const{data:{data:t,meta:{total:e}}}=await this.axios.get(this.path,{params:{with_trashed:this.withTrashed,limit:this.limit,page:this.page}});this.items=t,this.total=e}catch(t){this.$toast.error("Error al obtener los medios de desplazamiento.")}},async deleteItem(){const t=this.initialForm.at(2);try{await this.axios.delete(`${this.path}/${t}`),this.$toast.info("Registro eliminado.")}catch(e){this.$toast.error("Error al eliminar el medio de desplazamiento.")}this.obtenerItems(),this.dialogDelete=!1},create(){this.initialForm=["",""],this.dialog=!0},remove(t){this.dialogDelete=!0,this.initialForm=[t.nombre,t.permitir_acceso,t.id]},edit(t){this.initialForm=[t.nombre,t.permitir_acceso,t.id],this.dialog=!0},close(){this.dialog=!1,this.initialForm=[]},async restoreItem(){const t=this.initialForm.at(2);try{await this.axios.post(`${this.path}/${t}/restore`),this.$toast.info("Registro restaurado.")}catch(e){this.$toast.error("Error al actualizar el medio de desplazamiento.")}this.obtenerItems(),this.dialogRestore=!1},async restore(t){this.dialogRestore=!0,this.initialForm=[t.nombre,t.permitir_acceso,t.id]},async submit(){if(!Array.isArray(this.initialForm)&&!this.initialForm.length>2)return;const t={nombre:this.initialForm.at(0),permitir_acceso:this.initialForm.at(1)};if(2===this.initialForm.length)try{await this.axios.post(this.path,t),this.$toast.success("Registro creado.")}catch(e){this.$toast.error("Error al crear el medio de desplazamiento.")}if(3===this.initialForm.length){const i=this.initialForm.at(2);try{this.axios.put(`${this.path}/${i}`,t),this.$toast.info("Registro actualizado.")}catch(e){this.$toast.error("Error al actualizar el medio de desplazamiento.")}}this.obtenerItems(),this.dialog=!1}},watch:{dialog(t){t||(this.initialForm=[])},dialogRestore(t){t||(this.initialForm=[])},dialogDelete(t){t||(this.initialForm=[])},withTrashed(){this.obtenerItems()}}},L=z,B=Object(x["a"])(L,l,c,!1,null,null,null);e["default"]=B.exports},"7c73":function(t,e,i){var a,s=i("825a"),r=i("37e8"),o=i("7839"),n=i("d012"),l=i("1be4"),c=i("cc12"),h=i("f772"),u=">",d="<",m="prototype",p="script",v=h("IE_PROTO"),f=function(){},g=function(t){return d+p+u+t+d+"/"+p+u},b=function(t){t.write(g("")),t.close();var e=t.parentWindow.Object;return t=null,e},y=function(){var t,e=c("iframe"),i="java"+p+":";return e.style.display="none",l.appendChild(e),e.src=String(i),t=e.contentWindow.document,t.open(),t.write(g("document.F=Object")),t.close(),t.F},_=function(){try{a=new ActiveXObject("htmlfile")}catch(e){}_="undefined"!=typeof document?document.domain&&a?b(a):y():b(a);var t=o.length;while(t--)delete _[m][o[t]];return _()};n[v]=!0,t.exports=Object.create||function(t,e){var i;return null!==t?(f[m]=s(t),i=new f,f[m]=null,i[v]=t):i=_(),void 0===e?i:r.f(i,e)}},"9d01":function(t,e,i){},df75:function(t,e,i){var a=i("ca84"),s=i("7839");t.exports=Object.keys||function(t){return a(t,s)}},ea98:function(t,e,i){"use strict";var a=i("23e7"),s=i("e330"),r=i("1d80"),o=i("5926"),n=i("577e"),l=i("d039"),c=s("".charAt),h=l((function(){return"\ud842"!=="𠮷".at(-2)}));a({target:"String",proto:!0,forced:h},{at:function(t){var e=n(r(this)),i=e.length,a=o(t),s=a>=0?a:i+a;return s<0||s>=i?void 0:c(e,s)}})},ec29:function(t,e,i){},fe09:function(t,e,i){"use strict";i("14d9");var a=i("c37a"),s=i("5607"),r=i("2b0e"),o=r["default"].extend({name:"rippleable",directives:{ripple:s["a"]},props:{ripple:{type:[Boolean,Object],default:!0}},methods:{genRipple(t={}){return this.ripple?(t.staticClass="v-input--selection-controls__ripple",t.directives=t.directives||[],t.directives.push({name:"ripple",value:{center:!0}}),this.$createElement("div",t)):null}}}),n=i("8547"),l=i("58df");function c(t){t.preventDefault()}e["a"]=Object(l["a"])(a["a"],o,n["a"]).extend({name:"selectable",model:{prop:"inputValue",event:"change"},props:{id:String,inputValue:null,falseValue:null,trueValue:null,multiple:{type:Boolean,default:null},label:String},data(){return{hasColor:this.inputValue,lazyValue:this.inputValue}},computed:{computedColor(){if(this.isActive)return this.color?this.color:this.isDark&&!this.appIsDark?"white":"primary"},isMultiple(){return!0===this.multiple||null===this.multiple&&Array.isArray(this.internalValue)},isActive(){const t=this.value,e=this.internalValue;return this.isMultiple?!!Array.isArray(e)&&e.some(e=>this.valueComparator(e,t)):void 0===this.trueValue||void 0===this.falseValue?t?this.valueComparator(t,e):Boolean(e):this.valueComparator(e,this.trueValue)},isDirty(){return this.isActive},rippleState(){return this.isDisabled||this.validationState?this.validationState:void 0}},watch:{inputValue(t){this.lazyValue=t,this.hasColor=t}},methods:{genLabel(){const t=a["a"].options.methods.genLabel.call(this);return t?(t.data.on={click:c},t):t},genInput(t,e){return this.$createElement("input",{attrs:Object.assign({"aria-checked":this.isActive.toString(),disabled:this.isDisabled,id:this.computedId,role:t,type:t},e),domProps:{value:this.value,checked:this.isActive},on:{blur:this.onBlur,change:this.onChange,focus:this.onFocus,keydown:this.onKeydown,click:c},ref:"input"})},onClick(t){this.onChange(),this.$emit("click",t)},onChange(){if(!this.isInteractive)return;const t=this.value;let e=this.internalValue;if(this.isMultiple){Array.isArray(e)||(e=[]);const i=e.length;e=e.filter(e=>!this.valueComparator(e,t)),e.length===i&&e.push(t)}else e=void 0!==this.trueValue&&void 0!==this.falseValue?this.valueComparator(e,this.trueValue)?this.falseValue:this.trueValue:t?this.valueComparator(e,t)?null:t:!e;this.validate(!0,e),this.internalValue=e,this.hasColor=e},onFocus(t){this.isFocused=!0,this.$emit("focus",t)},onBlur(t){this.isFocused=!1,this.$emit("blur",t)},onKeydown(t){}}})}}]);
//# sourceMappingURL=web:administracion:estados-solicitud.f05ae64b.js.map