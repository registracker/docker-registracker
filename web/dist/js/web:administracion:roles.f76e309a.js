(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["web:administracion:roles"],{"210b":function(e,t,s){},"62ad":function(e,t,s){"use strict";s("13d5"),s("14d9"),s("4b85");var a=s("2b0e"),i=s("d9f7"),n=s("80d2");const o=["sm","md","lg","xl"],r=(()=>o.reduce((e,t)=>(e[t]={type:[Boolean,String,Number],default:!1},e),{}))(),l=(()=>o.reduce((e,t)=>(e["offset"+Object(n["G"])(t)]={type:[String,Number],default:null},e),{}))(),c=(()=>o.reduce((e,t)=>(e["order"+Object(n["G"])(t)]={type:[String,Number],default:null},e),{}))(),d={col:Object.keys(r),offset:Object.keys(l),order:Object.keys(c)};function u(e,t,s){let a=e;if(null!=s&&!1!==s){if(t){const s=t.replace(e,"");a+="-"+s}return"col"!==e||""!==s&&!0!==s?(a+="-"+s,a.toLowerCase()):a.toLowerCase()}}const h=new Map;t["a"]=a["default"].extend({name:"v-col",functional:!0,props:{cols:{type:[Boolean,String,Number],default:!1},...r,offset:{type:[String,Number],default:null},...l,order:{type:[String,Number],default:null},...c,alignSelf:{type:String,default:null,validator:e=>["auto","start","end","center","baseline","stretch"].includes(e)},tag:{type:String,default:"div"}},render(e,{props:t,data:s,children:a,parent:n}){let o="";for(const i in t)o+=String(t[i]);let r=h.get(o);if(!r){let e;for(e in r=[],d)d[e].forEach(s=>{const a=t[s],i=u(e,s,a);i&&r.push(i)});const s=r.some(e=>e.startsWith("col-"));r.push({col:!s||!t.cols,["col-"+t.cols]:t.cols,["offset-"+t.offset]:t.offset,["order-"+t.order]:t.order,["align-self-"+t.alignSelf]:t.alignSelf}),h.set(o,r)}return e(t.tag,Object(i["a"])(s,{class:r}),a)}})},"6ca7":function(e,t,s){},ac7c:function(e,t,s){"use strict";s("6ca7"),s("ec29");var a=s("9d26"),i=s("c37a"),n=s("fe09");t["a"]=n["a"].extend({name:"v-checkbox",props:{indeterminate:Boolean,indeterminateIcon:{type:String,default:"$checkboxIndeterminate"},offIcon:{type:String,default:"$checkboxOff"},onIcon:{type:String,default:"$checkboxOn"}},data(){return{inputIndeterminate:this.indeterminate}},computed:{classes(){return{...i["a"].options.computed.classes.call(this),"v-input--selection-controls":!0,"v-input--checkbox":!0,"v-input--indeterminate":this.inputIndeterminate}},computedIcon(){return this.inputIndeterminate?this.indeterminateIcon:this.isActive?this.onIcon:this.offIcon},validationState(){if(!this.isDisabled||this.inputIndeterminate)return this.hasError&&this.shouldValidate?"error":this.hasSuccess?"success":null!==this.hasColor?this.computedColor:void 0}},watch:{indeterminate(e){this.$nextTick(()=>this.inputIndeterminate=e)},inputIndeterminate(e){this.$emit("update:indeterminate",e)},isActive(){this.indeterminate&&(this.inputIndeterminate=!1)}},methods:{genCheckbox(){const{title:e,...t}=this.attrs$;return this.$createElement("div",{staticClass:"v-input--selection-controls__input"},[this.$createElement(a["a"],this.setTextColor(this.validationState,{props:{dense:this.dense,dark:this.dark,light:this.light}}),this.computedIcon),this.genInput("checkbox",{...t,"aria-checked":this.inputIndeterminate?"mixed":this.isActive.toString()}),this.genRipple(this.setTextColor(this.rippleState))])},genDefaultSlot(){return[this.genCheckbox(),this.genLabel()]}}})},afdd:function(e,t,s){"use strict";var a=s("8336");t["a"]=a["a"]},ec29:function(e,t,s){},f283:function(e,t,s){"use strict";s.r(t);var a=s("b0af"),i=s("99d9"),n=s("71a3"),o=s("c671"),r=s("fe57"),l=s("aac8"),c=function(){var e=this,t=e._self._c;return t("div",[t(r["a"],{attrs:{color:"red"},model:{value:e.tab,callback:function(t){e.tab=t},expression:"tab"}},[t(n["a"],[e._v("Listado roles")]),t(n["a"],[e._v("Crear rol")])],1),t(l["a"],{model:{value:e.tab,callback:function(t){e.tab=t},expression:"tab"}},[t(o["a"],[t("roles-lista",{ref:"lista"})],1),t(o["a"],[t("roles-crear-form",{ref:"crear"})],1),t(o["a"],[t(a["a"],{attrs:{flat:""}},[t(i["c"],[e._v("TODO")])],1)],1)],1)],1)},d=[],u=s("ac7c"),h=s("62ad"),p=s("ce7e"),m=s("4bd4"),v=s("0fd9"),f=s("8654"),b=function(){var e=this,t=e._self._c;return t("div",[t(v["a"],{staticClass:"mx-2"},[t(h["a"],{attrs:{cols:"12",sm:"10",md:"8",lg:"6"}},[t(m["a"],{ref:"form",attrs:{"lazy-validation":""},on:{submit:function(t){return t.preventDefault(),e.create.apply(null,arguments)}},model:{value:e.valid,callback:function(t){e.valid=t},expression:"valid"}},[t(f["a"],{staticClass:"mb-0 pb-0 mt-2",attrs:{rules:[e.nombreRol],outlined:"",required:"",label:"Nombre del rol","append-icon":"mdi-account-plus-outline"},on:{"click:append":e.create},model:{value:e.nombre_rol,callback:function(t){e.nombre_rol=t},expression:"nombre_rol"}})],1)],1)],1),e._l(e.secciones,(function(s){return t(a["a"],{key:s.etiqueta,staticClass:"mx-4 mb-2"},[t(i["d"],{staticClass:"m-0 p-0"},[t(u["a"],{staticClass:"m-0 p-0",attrs:{label:s.etiqueta,color:"red darken-2","hide-details":""},on:{change:function(t){return e.cambiarEstado(t,s.etiqueta)}},model:{value:s.seleccionado,callback:function(t){e.$set(s,"seleccionado",t)},expression:"seccion.seleccionado"}})],1),t(i["c"],[t(p["a"]),t(v["a"],e._l(s.permisos,(function(s){return t(h["a"],{key:s.id,attrs:{cols:"6",sm:"4",md:"4",lg:"3"}},[t(u["a"],{staticClass:"text-truncate",attrs:{dense:"",label:s.name,color:"red darken-2","hide-details":""},model:{value:s.seleccionado,callback:function(t){e.$set(s,"seleccionado",t)},expression:"permiso.seleccionado"}})],1)})),1)],1)],1)}))],2)},x=[],g=(s("14d9"),s("132a"));const y={web:{filters:[{field:"name",operator:"like",value:"web%"},{field:"id",operator:"<=",value:g["f"]}]},api:{filters:[{field:"name",operator:"like",value:"api%"},{field:"id",operator:"<=",value:g["f"]}]},otro:{filters:[{field:"id",operator:">",value:g["f"]}]}};var C={name:"RolesCrearForm",created(){this.loadCards()},data(){return{secciones:[],valid:!1,nombre_rol:""}},methods:{nombreRol:Object(g["g"])("El campo nombre rol es requerido."),async cargarRoles(e,t){try{const{data:{data:s}}=await this.axios.post("/permisos/search",{...e});this.secciones.push({etiqueta:t,seleccionado:!1,permisos:s.map(e=>({...e,seleccionado:!1}))})}catch(i){var s,a;if(422===i.response.status)return void this.$toast.error(null===i||void 0===i||null===(s=i.response)||void 0===s||null===(a=s.data)||void 0===a?void 0:a.message);this.$toast.error("Error al realizar la petición.")}},cambiarEstado(e,t){this.secciones.forEach((s,a)=>{if(s.etiqueta===t){const i=s.permisos.map(t=>({...t,seleccionado:e}));this.secciones.splice(a,1,{etiqueta:t,seleccionado:e,permisos:i})}})},async loadCards(){await this.cargarRoles(y.web,"Componente web"),await this.cargarRoles(y.api,"Servicios API REST"),await this.cargarRoles(y.otro,"Otros permisos")},async create(){const e=this.$refs.form.validate();if(!e)return;const t=this.obtenerRoles();try{const{data:{data:{name:e}}}=await this.axios.post("/roles",{nombre_rol:this.nombre_rol,permisos:t});this.$toast.success(`Rol ${e} creado`),this.$refs.form.reset(),this.limpiarSeleccion()}catch(i){var s,a;if(422===i.response.status)return void this.$toast.error(null===i||void 0===i||null===(s=i.response)||void 0===s||null===(a=s.data)||void 0===a?void 0:a.message);this.$toast.error("Error al realizar la petición.")}},limpiarSeleccion(){this.secciones=this.secciones.map(e=>{const t=e.permisos.map(e=>({...e,seleccionado:!1}));return{...e,permisos:t,seleccionado:!1}})},obtenerRoles(){return this.secciones.map(e=>e.permisos.filter(e=>e.seleccionado)).flat().map(e=>e.name)}}},k=C,$=s("2877"),w=Object($["a"])(k,b,x,!1,null,null,null),A=w.exports,I=s("4e82"),S=s("3206"),O=s("80d2"),_=s("58df"),j=Object(_["a"])(Object(I["a"])("expansionPanels","v-expansion-panel","v-expansion-panels"),Object(S["b"])("expansionPanel",!0)).extend({name:"v-expansion-panel",props:{disabled:Boolean,readonly:Boolean},data(){return{content:null,header:null,nextIsActive:!1}},computed:{classes(){return{"v-expansion-panel--active":this.isActive,"v-expansion-panel--next-active":this.nextIsActive,"v-expansion-panel--disabled":this.isDisabled,...this.groupClasses}},isDisabled(){return this.expansionPanels.disabled||this.disabled},isReadonly(){return this.expansionPanels.readonly||this.readonly}},methods:{registerContent(e){this.content=e},unregisterContent(){this.content=null},registerHeader(e){this.header=e,e.$on("click",this.onClick)},unregisterHeader(){this.header=null},onClick(e){e.detail&&this.header.$el.blur(),this.$emit("click",e),this.isReadonly||this.isDisabled||this.toggle()},toggle(){this.$nextTick(()=>this.$emit("change"))}},render(e){return e("div",{staticClass:"v-expansion-panel",class:this.classes,attrs:{"aria-expanded":String(this.isActive)}},Object(O["s"])(this))}}),R=s("0789"),B=s("9d65"),V=s("a9ad");const D=Object(_["a"])(B["a"],V["a"],Object(S["a"])("expansionPanel","v-expansion-panel-content","v-expansion-panel"));var P=D.extend().extend({name:"v-expansion-panel-content",data:()=>({isActive:!1}),computed:{parentIsActive(){return this.expansionPanel.isActive}},watch:{parentIsActive:{immediate:!0,handler(e,t){e&&(this.isBooted=!0),null==t?this.isActive=e:this.$nextTick(()=>this.isActive=e)}}},created(){this.expansionPanel.registerContent(this)},beforeDestroy(){this.expansionPanel.unregisterContent()},render(e){return e(R["a"],this.showLazyContent(()=>[e("div",this.setBackgroundColor(this.color,{staticClass:"v-expansion-panel-content",directives:[{name:"show",value:this.isActive}]}),[e("div",{class:"v-expansion-panel-content__wrap"},Object(O["s"])(this))])]))}}),E=s("9d26"),M=s("5607");const L=Object(_["a"])(V["a"],Object(S["a"])("expansionPanel","v-expansion-panel-header","v-expansion-panel"));var q=L.extend().extend({name:"v-expansion-panel-header",directives:{ripple:M["a"]},props:{disableIconRotate:Boolean,expandIcon:{type:String,default:"$expand"},hideActions:Boolean,ripple:{type:[Boolean,Object],default:!1}},data:()=>({hasMousedown:!1}),computed:{classes(){return{"v-expansion-panel-header--active":this.isActive,"v-expansion-panel-header--mousedown":this.hasMousedown}},isActive(){return this.expansionPanel.isActive},isDisabled(){return this.expansionPanel.isDisabled},isReadonly(){return this.expansionPanel.isReadonly}},created(){this.expansionPanel.registerHeader(this)},beforeDestroy(){this.expansionPanel.unregisterHeader()},methods:{onClick(e){this.$emit("click",e)},genIcon(){const e=Object(O["s"])(this,"actions")||[this.$createElement(E["a"],this.expandIcon)];return this.$createElement(R["d"],[this.$createElement("div",{staticClass:"v-expansion-panel-header__icon",class:{"v-expansion-panel-header__icon--disable-rotate":this.disableIconRotate},directives:[{name:"show",value:!this.isDisabled}]},e)])}},render(e){return e("button",this.setBackgroundColor(this.color,{staticClass:"v-expansion-panel-header",class:this.classes,attrs:{tabindex:this.isDisabled?-1:null,type:"button","aria-expanded":this.isActive},directives:[{name:"ripple",value:this.ripple}],on:{...this.$listeners,click:this.onClick,mousedown:()=>this.hasMousedown=!0,mouseup:()=>this.hasMousedown=!1}}),[Object(O["s"])(this,"default",{open:this.isActive},!0),this.hideActions||this.genIcon()])}}),z=(s("210b"),s("604c")),N=s("d9bd"),T=z["a"].extend({name:"v-expansion-panels",provide(){return{expansionPanels:this}},props:{accordion:Boolean,disabled:Boolean,flat:Boolean,hover:Boolean,focusable:Boolean,inset:Boolean,popout:Boolean,readonly:Boolean,tile:Boolean},computed:{classes(){return{...z["a"].options.computed.classes.call(this),"v-expansion-panels":!0,"v-expansion-panels--accordion":this.accordion,"v-expansion-panels--flat":this.flat,"v-expansion-panels--hover":this.hover,"v-expansion-panels--focusable":this.focusable,"v-expansion-panels--inset":this.inset,"v-expansion-panels--popout":this.popout,"v-expansion-panels--tile":this.tile}}},created(){this.$attrs.hasOwnProperty("expand")&&Object(N["a"])("expand","multiple",this),Array.isArray(this.value)&&this.value.length>0&&"boolean"===typeof this.value[0]&&Object(N["a"])(':value="[true, false, true]"',':value="[0, 2]"',this)},methods:{updateItem(e,t){const s=this.getValue(e,t),a=this.getValue(e,t+1);e.isActive=this.toggleMethod(s),e.nextIsActive=this.toggleMethod(a)}}}),F=function(){var e=this,t=e._self._c;return t(T,{staticClass:"pa-2"},e._l(e.secciones,(function(s){return t(j,{key:s.id,staticClass:"mt-3"},[t(q,{staticClass:"m-0 p-0 font-weight-bold"},[e._v(" "+e._s(s.name)+" ")]),t(P,[t(v["a"],e._l(s.permissions,(function(s){return t(h["a"],{key:s.id,attrs:{cols:"12",sm:"6",md:"4",lg:"4"}},[e._v(" "+e._s(s.name)+" ")])})),1)],1)],1)})),1)},H=[],G={name:"RolesLista",created(){this.cargarRoles()},data(){return{secciones:[]}},methods:{async cargarRoles(){try{const{data:{data:e}}=await this.axios.get("/roles",{params:{include:"permissions"}});this.secciones=e}catch(s){var e,t;if(422===s.response.status)return void this.$toast.error(null===s||void 0===s||null===(e=s.response)||void 0===e||null===(t=e.data)||void 0===t?void 0:t.message);this.$toast.error("Error al realizar la petición.")}}}},J=G,K=Object($["a"])(J,F,H,!1,null,null,null),W=K.exports,Q={name:"Roles",components:{RolesCrearForm:A,RolesLista:W},data(){return{tab:null}},watch:{tab(e){0===e&&this.$refs.lista&&this.$refs.lista.cargarRoles(),1===e&&this.$refs.crear&&(this.$refs.crear.$refs.form.reset(),this.$refs.crear.limpiarSeleccion())}}},U=Q,X=Object($["a"])(U,c,d,!1,null,null,null);t["default"]=X.exports},fe09:function(e,t,s){"use strict";s("14d9");var a=s("c37a"),i=s("5607"),n=s("2b0e"),o=n["default"].extend({name:"rippleable",directives:{ripple:i["a"]},props:{ripple:{type:[Boolean,Object],default:!0}},methods:{genRipple(e={}){return this.ripple?(e.staticClass="v-input--selection-controls__ripple",e.directives=e.directives||[],e.directives.push({name:"ripple",value:{center:!0}}),this.$createElement("div",e)):null}}}),r=s("8547"),l=s("58df");function c(e){e.preventDefault()}t["a"]=Object(l["a"])(a["a"],o,r["a"]).extend({name:"selectable",model:{prop:"inputValue",event:"change"},props:{id:String,inputValue:null,falseValue:null,trueValue:null,multiple:{type:Boolean,default:null},label:String},data(){return{hasColor:this.inputValue,lazyValue:this.inputValue}},computed:{computedColor(){if(this.isActive)return this.color?this.color:this.isDark&&!this.appIsDark?"white":"primary"},isMultiple(){return!0===this.multiple||null===this.multiple&&Array.isArray(this.internalValue)},isActive(){const e=this.value,t=this.internalValue;return this.isMultiple?!!Array.isArray(t)&&t.some(t=>this.valueComparator(t,e)):void 0===this.trueValue||void 0===this.falseValue?e?this.valueComparator(e,t):Boolean(t):this.valueComparator(t,this.trueValue)},isDirty(){return this.isActive},rippleState(){return this.isDisabled||this.validationState?this.validationState:void 0}},watch:{inputValue(e){this.lazyValue=e,this.hasColor=e}},methods:{genLabel(){const e=a["a"].options.methods.genLabel.call(this);return e?(e.data.on={click:c},e):e},genInput(e,t){return this.$createElement("input",{attrs:Object.assign({"aria-checked":this.isActive.toString(),disabled:this.isDisabled,id:this.computedId,role:e,type:e},t),domProps:{value:this.value,checked:this.isActive},on:{blur:this.onBlur,change:this.onChange,focus:this.onFocus,keydown:this.onKeydown,click:c},ref:"input"})},onClick(e){this.onChange(),this.$emit("click",e)},onChange(){if(!this.isInteractive)return;const e=this.value;let t=this.internalValue;if(this.isMultiple){Array.isArray(t)||(t=[]);const s=t.length;t=t.filter(t=>!this.valueComparator(t,e)),t.length===s&&t.push(e)}else t=void 0!==this.trueValue&&void 0!==this.falseValue?this.valueComparator(t,this.trueValue)?this.falseValue:this.trueValue:e?this.valueComparator(t,e)?null:e:!t;this.validate(!0,t),this.internalValue=t,this.hasColor=t},onFocus(e){this.isFocused=!0,this.$emit("focus",e)},onBlur(e){this.isFocused=!1,this.$emit("blur",e)},onKeydown(e){}}})}}]);
//# sourceMappingURL=web:administracion:roles.f76e309a.js.map