(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["web:ingresar"],{"0798":function(e,t,s){"use strict";s("0c18");var i=s("10d2"),a=s("afdd"),n=s("9d26"),r=s("f2e7"),o=s("7560"),l=s("2b0e"),c=l["default"].extend({name:"transitionable",props:{mode:String,origin:String,transition:String}}),u=s("58df"),d=s("d9bd");t["a"]=Object(u["a"])(i["a"],r["a"],c).extend({name:"v-alert",props:{border:{type:String,validator(e){return["top","right","bottom","left"].includes(e)}},closeLabel:{type:String,default:"$vuetify.close"},coloredBorder:Boolean,dense:Boolean,dismissible:Boolean,closeIcon:{type:String,default:"$cancel"},icon:{default:"",type:[Boolean,String],validator(e){return"string"===typeof e||!1===e}},outlined:Boolean,prominent:Boolean,text:Boolean,type:{type:String,validator(e){return["info","error","success","warning"].includes(e)}},value:{type:Boolean,default:!0}},computed:{__cachedBorder(){if(!this.border)return null;let e={staticClass:"v-alert__border",class:{["v-alert__border--"+this.border]:!0}};return this.coloredBorder&&(e=this.setBackgroundColor(this.computedColor,e),e.class["v-alert__border--has-color"]=!0),this.$createElement("div",e)},__cachedDismissible(){if(!this.dismissible)return null;const e=this.iconColor;return this.$createElement(a["a"],{staticClass:"v-alert__dismissible",props:{color:e,icon:!0,small:!0},attrs:{"aria-label":this.$vuetify.lang.t(this.closeLabel)},on:{click:()=>this.isActive=!1}},[this.$createElement(n["a"],{props:{color:e}},this.closeIcon)])},__cachedIcon(){return this.computedIcon?this.$createElement(n["a"],{staticClass:"v-alert__icon",props:{color:this.iconColor}},this.computedIcon):null},classes(){const e={...i["a"].options.computed.classes.call(this),"v-alert--border":Boolean(this.border),"v-alert--dense":this.dense,"v-alert--outlined":this.outlined,"v-alert--prominent":this.prominent,"v-alert--text":this.text};return this.border&&(e["v-alert--border-"+this.border]=!0),e},computedColor(){return this.color||this.type},computedIcon(){return!1!==this.icon&&("string"===typeof this.icon&&this.icon?this.icon:!!["error","info","success","warning"].includes(this.type)&&"$"+this.type)},hasColoredIcon(){return this.hasText||Boolean(this.border)&&this.coloredBorder},hasText(){return this.text||this.outlined},iconColor(){return this.hasColoredIcon?this.computedColor:void 0},isDark(){return!(!this.type||this.coloredBorder||this.outlined)||o["a"].options.computed.isDark.call(this)}},created(){this.$attrs.hasOwnProperty("outline")&&Object(d["a"])("outline","outlined",this)},methods:{genWrapper(){const e=[this.$slots.prepend||this.__cachedIcon,this.genContent(),this.__cachedBorder,this.$slots.append,this.$scopedSlots.close?this.$scopedSlots.close({toggle:this.toggle}):this.__cachedDismissible],t={staticClass:"v-alert__wrapper"};return this.$createElement("div",t,e)},genContent(){return this.$createElement("div",{staticClass:"v-alert__content"},this.$slots.default)},genAlert(){let e={staticClass:"v-alert",attrs:{role:"alert"},on:this.listeners$,class:this.classes,style:this.styles,directives:[{name:"show",value:this.isActive}]};if(!this.coloredBorder){const t=this.hasText?this.setTextColor:this.setBackgroundColor;e=t(this.computedColor,e)}return this.$createElement("div",e,[this.genWrapper()])},toggle(){this.isActive=!this.isActive}},render(e){const t=this.genAlert();return this.transition?e("transition",{props:{name:this.transition,origin:this.origin,mode:this.mode}},[t]):t}})},"0c18":function(e,t,s){},"0fd9":function(e,t,s){"use strict";s("13d5"),s("14d9"),s("4b85");var i=s("2b0e"),a=s("d9f7"),n=s("80d2");const r=["sm","md","lg","xl"],o=["start","end","center"];function l(e,t){return r.reduce((s,i)=>(s[e+Object(n["G"])(i)]=t(),s),{})}const c=e=>[...o,"baseline","stretch"].includes(e),u=l("align",()=>({type:String,default:null,validator:c})),d=e=>[...o,"space-between","space-around"].includes(e),h=l("justify",()=>({type:String,default:null,validator:d})),p=e=>[...o,"space-between","space-around","stretch"].includes(e),m=l("alignContent",()=>({type:String,default:null,validator:p})),f={align:Object.keys(u),justify:Object.keys(h),alignContent:Object.keys(m)},g={align:"align",justify:"justify",alignContent:"align-content"};function v(e,t,s){let i=g[e];if(null!=s){if(t){const s=t.replace(e,"");i+="-"+s}return i+="-"+s,i.toLowerCase()}}const b=new Map;t["a"]=i["default"].extend({name:"v-row",functional:!0,props:{tag:{type:String,default:"div"},dense:Boolean,noGutters:Boolean,align:{type:String,default:null,validator:c},...u,justify:{type:String,default:null,validator:d},...h,alignContent:{type:String,default:null,validator:p},...m},render(e,{props:t,data:s,children:i}){let n="";for(const a in t)n+=String(t[a]);let r=b.get(n);if(!r){let e;for(e in r=[],f)f[e].forEach(s=>{const i=t[s],a=v(e,s,i);a&&r.push(a)});r.push({"no-gutters":t.noGutters,"row--dense":t.dense,["align-"+t.align]:t.align,["justify-"+t.justify]:t.justify,["align-content-"+t.alignContent]:t.alignContent}),b.set(n,r)}return e(t.tag,Object(a["a"])(s,{staticClass:"row",class:r}),i)}})},"2bfd":function(e,t,s){},"46a0":function(e,t,s){},"54f5":function(e,t,s){"use strict";s.r(t);var i=s("0798"),a=s("8336"),n=s("b0af"),r=s("99d9"),o=s("62ad"),l=s("a523"),c=s("4bd4"),u=s("adda"),d=s("0fd9"),h=s("8654"),p=function(){var e=this,t=e._self._c;return t(l["a"],{staticClass:"fill-height"},[t(d["a"],{attrs:{justify:"center"}},[t(o["a"],{attrs:{cols:"12",sm:"10",md:"12",lg:"10",xl:"8"}},[t(n["a"],{staticClass:"elevation-1"},[t(r["d"],{staticClass:"justify-center red darken-4"},[t("h2",{staticClass:"white--text"},[e._v("REGISTRACKER")])]),t(r["c"],[t(d["a"],[t(o["a"],{staticClass:"pr-0 my-0 mr-0 align-self-center",attrs:{cols:"12",md:"6"}},[e.esInicioSesion?t(n["a"],{staticClass:"mb-0 pb-0 mx-9",staticStyle:{height:"100"},attrs:{flat:""}},[e.showSuccessAlert?t(i["a"],{staticClass:"py-4 px-3",attrs:{dense:"",text:"",type:"success"}},[e._v(" La constraseña se restauro correctamente ")]):e._e(),t(r["d"],[e._v(" Iniciar sesión ")]),t(r["c"],{staticClass:"mb-0 pb-0"},[t(c["a"],{ref:"form",model:{value:e.valid,callback:function(t){e.valid=t},expression:"valid"}},[t(h["a"],{attrs:{rules:[e.emailRule],outlined:"","validate-on-blur":"",required:""},scopedSlots:e._u([{key:"label",fn:function(){return[e._v(" Correo electrónico "),t("span",{staticClass:"red--text"},[t("strong",[e._v("* ")])])]},proxy:!0}],null,!1,1592735061),model:{value:e.form.email,callback:function(t){e.$set(e.form,"email",t)},expression:"form.email"}}),t(h["a"],{attrs:{rules:[e.passwordRule],"validate-on-blur":"",outlined:"","append-icon":e.showPassword?"mdi-eye":"mdi-eye-off",type:e.showPassword?"text":"password"},on:{"click:append":function(t){e.showPassword=!e.showPassword},keypress:function(t){return!t.type.indexOf("key")&&e._k(t.keyCode,"enter",13,t.key,"Enter")?null:e.login.apply(null,arguments)}},scopedSlots:e._u([{key:"label",fn:function(){return[e._v(" Contraseña "),t("span",{staticClass:"red--text"},[t("strong",[e._v("* ")])])]},proxy:!0}],null,!1,602787297),model:{value:e.form.password,callback:function(t){e.$set(e.form,"password",t)},expression:"form.password"}})],1)],1),t(r["a"],[t(l["a"],{staticClass:"mt-0 pt-0"},[t(d["a"],{attrs:{"no-gutters":"",justify:"center"}},[t(o["a"],{attrs:{sm:"8",md:"8",lg:"8","align-self":"center"}},[t(a["a"],{attrs:{color:"red darken-4",dark:"",block:""},on:{click:e.login}},[e._v(" Ingresar ")])],1)],1),t(d["a"],{staticClass:"mt-6",attrs:{"no-gutters":"",justify:"center"}},[t(o["a"],{attrs:{sm:"8",md:"8",lg:"8","align-self":"center"}},[t(a["a"],{attrs:{outlined:"",block:""},on:{click:e.registrarse}},[e._v(" Registrarse ")])],1)],1),t(d["a"],{staticClass:"mt-6"},[t(o["a"],{staticClass:"d-flex justify-center",attrs:{sm:"12",md:"12",lg:"12"}},[t("router-link",{staticClass:"forgot-password-link",attrs:{to:{name:"web:forgot-password"}}},[e._v(" ¿Olvidaste tu contraseña?")])],1)],1)],1)],1)],1):t("RegistroUsuario",{on:{cancelar:e.cancelar}})],1),t(o["a"],[t(u["a"],{staticStyle:{height:"100%"},attrs:{"aspect-ratio":1,src:s("e133")}})],1)],1)],1)],1)],1)],1)],1)},m=[],f=s("c6a6"),g=s("ac7c"),v=s("2fa4"),b=function(){var e=this,t=e._self._c;return t(c["a"],{ref:"form",model:{value:e.valid,callback:function(t){e.valid=t},expression:"valid"}},[t(n["a"],{staticClass:"mx-9",attrs:{flat:""}},[t(r["d"],[e._v(" Crear cuenta ")]),t(r["c"],{staticClass:"mb-0 pb-0"},[t(h["a"],{attrs:{outlined:"",required:"",rules:[e.emailRule]},scopedSlots:e._u([{key:"label",fn:function(){return[e._v(" Correo electrónico "),t("span",{staticClass:"red--text"},[t("strong",[e._v("* ")])])]},proxy:!0}]),model:{value:e.form.email,callback:function(t){e.$set(e.form,"email",t)},expression:"form.email"}}),t(h["a"],{attrs:{label:"Nombre de usuario",outlined:""},model:{value:e.form.nombre_usuario,callback:function(t){e.$set(e.form,"nombre_usuario",t)},expression:"form.nombre_usuario"}}),t(f["a"],{attrs:{rules:[e.integerRule],"item-text":"name","item-value":"id",outlined:"",items:e.roles},scopedSlots:e._u([{key:"label",fn:function(){return[e._v(" Selecciona el rol "),t("span",{staticClass:"red--text"},[t("strong",[e._v("* ")])])]},proxy:!0}]),model:{value:e.form.rol,callback:function(t){e.$set(e.form,"rol",t)},expression:"form.rol"}}),t(h["a"],{attrs:{rules:e.passwordRules,outlined:"","append-icon":e.showPassword?"mdi-eye":"mdi-eye-off",type:e.showPassword?"text":"password"},on:{"click:append":function(t){e.showPassword=!e.showPassword}},scopedSlots:e._u([{key:"label",fn:function(){return[e._v(" Contraseña "),t("span",{staticClass:"red--text"},[t("strong",[e._v("* ")])])]},proxy:!0}]),model:{value:e.form.password,callback:function(t){e.$set(e.form,"password",t)},expression:"form.password"}}),t(g["a"],{scopedSlots:e._u([{key:"label",fn:function(){return[t("div",[e._v(" Acepto "),t("a",{attrs:{target:"_blank",href:e.url},on:{click:function(e){e.stopPropagation()}}},[e._v(" Condiciones de servicio ")])])]},proxy:!0}]),model:{value:e.agree,callback:function(t){e.agree=t},expression:"agree"}})],1),t(r["a"],[t(v["a"]),t(a["a"],{attrs:{outlined:""},on:{click:function(t){return e.$emit("cancelar")}}},[e._v(" Regresar ")]),t(a["a"],{attrs:{color:"red darken-1",dark:""},on:{click:e.crearUsuario}},[e._v(" Registrarse ")])],1)],1)],1)},y=[],I=s("132a"),S={name:"RegistroUsuario",created(){this.obtenerRoles()},data:()=>({valid:!0,agree:!1,showPassword:!1,url:window.location.origin+"/privacy",roles:[],form:{email:"",nombre_usuario:"",rol:null,password:""},passwordRules:[e=>/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,250}$/.test(e)||"La contraseña debe contener al menos 8 caracteres con una letra mayúscula, un carácter especial, un dígito."]}),methods:{emailRule:Object(I["a"])("Debe agregar un correo válido."),fieldRule:Object(I["g"])("Debe completar el campo."),integerRule:Object(I["b"])("Debe seleccionar un rol."),abrir(){window.open(window.location.origin+"/privacy","_blank")},async obtenerRoles(){const e=await this.axios.get("/roles"),{data:{data:t}}=e;this.roles=t.slice(1)},async crearUsuario(){if(this.$refs.form.validate())if(this.agree)try{const e="/usuario",{data:t}=await this.axios.post(e,{...this.form});this.$refs.form.reset();const s=`La cuenta ${t.usuario.email} está ${t.estado_cuenta}`;this.$toast.info(s)}catch(e){if(422===e.response.status)return void this.$toast.error(e.response.data.message);this.$toast.error("No se pudo registrar la cuenta, intente de nuevo.")}else{const e="Debe aceptar los terminos y condiciones";this.$toast.info(e)}}}},x=S,C=s("2877"),w=Object(C["a"])(x,b,y,!1,null,null,null),k=w.exports,_={name:"LoginForm",components:{RegistroUsuario:k},data:()=>({step:1,showPassword:!1,valid:!1,esInicioSesion:!0,showSuccessAlert:!1,form:{email:"",password:""},show:!1}),created(){this.$route.query.resetSuccess&&(this.showSuccessAlert=!0)},props:{source:String},mounted(){setTimeout(()=>{this.show=!0},1e3)},methods:{passwordRule:Object(I["e"])("El campo contraseña es requerido"),emailRule:Object(I["a"])("El campo correo electrónico es requerido."),async login(){const e=this.$refs.form.validate();if(e)try{const e=await this.axios.post("/sanctum/token",{...this.form}),{data:{token:t}}=e;localStorage.setItem("token",t),window.location.reload()}catch(t){422===t.response.status?this.$toast.error(t.response.data.message):this.$toast.error("Error al iniciar sesión.")}},registrarse(){this.esInicioSesion=!1},cancelar(){this.esInicioSesion=!0}}},$=_,D=(s("f514"),Object(C["a"])($,p,m,!1,null,null,null));t["default"]=D.exports},"62ad":function(e,t,s){"use strict";s("13d5"),s("14d9"),s("4b85");var i=s("2b0e"),a=s("d9f7"),n=s("80d2");const r=["sm","md","lg","xl"],o=(()=>r.reduce((e,t)=>(e[t]={type:[Boolean,String,Number],default:!1},e),{}))(),l=(()=>r.reduce((e,t)=>(e["offset"+Object(n["G"])(t)]={type:[String,Number],default:null},e),{}))(),c=(()=>r.reduce((e,t)=>(e["order"+Object(n["G"])(t)]={type:[String,Number],default:null},e),{}))(),u={col:Object.keys(o),offset:Object.keys(l),order:Object.keys(c)};function d(e,t,s){let i=e;if(null!=s&&!1!==s){if(t){const s=t.replace(e,"");i+="-"+s}return"col"!==e||""!==s&&!0!==s?(i+="-"+s,i.toLowerCase()):i.toLowerCase()}}const h=new Map;t["a"]=i["default"].extend({name:"v-col",functional:!0,props:{cols:{type:[Boolean,String,Number],default:!1},...o,offset:{type:[String,Number],default:null},...l,order:{type:[String,Number],default:null},...c,alignSelf:{type:String,default:null,validator:e=>["auto","start","end","center","baseline","stretch"].includes(e)},tag:{type:String,default:"div"}},render(e,{props:t,data:s,children:i,parent:n}){let r="";for(const a in t)r+=String(t[a]);let o=h.get(r);if(!o){let e;for(e in o=[],u)u[e].forEach(s=>{const i=t[s],a=d(e,s,i);a&&o.push(a)});const s=o.some(e=>e.startsWith("col-"));o.push({col:!s||!t.cols,["col-"+t.cols]:t.cols,["offset-"+t.offset]:t.offset,["order-"+t.order]:t.order,["align-self-"+t.alignSelf]:t.alignSelf}),h.set(r,o)}return e(t.tag,Object(a["a"])(s,{class:o}),i)}})},"6ca7":function(e,t,s){},ac7c:function(e,t,s){"use strict";s("6ca7"),s("ec29");var i=s("9d26"),a=s("c37a"),n=s("fe09");t["a"]=n["a"].extend({name:"v-checkbox",props:{indeterminate:Boolean,indeterminateIcon:{type:String,default:"$checkboxIndeterminate"},offIcon:{type:String,default:"$checkboxOff"},onIcon:{type:String,default:"$checkboxOn"}},data(){return{inputIndeterminate:this.indeterminate}},computed:{classes(){return{...a["a"].options.computed.classes.call(this),"v-input--selection-controls":!0,"v-input--checkbox":!0,"v-input--indeterminate":this.inputIndeterminate}},computedIcon(){return this.inputIndeterminate?this.indeterminateIcon:this.isActive?this.onIcon:this.offIcon},validationState(){if(!this.isDisabled||this.inputIndeterminate)return this.hasError&&this.shouldValidate?"error":this.hasSuccess?"success":null!==this.hasColor?this.computedColor:void 0}},watch:{indeterminate(e){this.$nextTick(()=>this.inputIndeterminate=e)},inputIndeterminate(e){this.$emit("update:indeterminate",e)},isActive(){this.indeterminate&&(this.inputIndeterminate=!1)}},methods:{genCheckbox(){const{title:e,...t}=this.attrs$;return this.$createElement("div",{staticClass:"v-input--selection-controls__input"},[this.$createElement(i["a"],this.setTextColor(this.validationState,{props:{dense:this.dense,dark:this.dark,light:this.light}}),this.computedIcon),this.genInput("checkbox",{...t,"aria-checked":this.inputIndeterminate?"mixed":this.isActive.toString()}),this.genRipple(this.setTextColor(this.rippleState))])},genDefaultSlot(){return[this.genCheckbox(),this.genLabel()]}}})},c6a6:function(e,t,s){"use strict";s("2bfd");var i=s("b974"),a=s("8654"),n=s("d9f7"),r=s("80d2");const o={...i["b"],offsetY:!0,offsetOverflow:!0,transition:!1};t["a"]=i["a"].extend({name:"v-autocomplete",props:{autoSelectFirst:{type:Boolean,default:!1},filter:{type:Function,default:(e,t,s)=>s.toLocaleLowerCase().indexOf(t.toLocaleLowerCase())>-1},hideNoData:Boolean,menuProps:{type:i["a"].options.props.menuProps.type,default:()=>o},noFilter:Boolean,searchInput:{type:String}},data(){return{lazySearch:this.searchInput}},computed:{classes(){return{...i["a"].options.computed.classes.call(this),"v-autocomplete":!0,"v-autocomplete--is-selecting-index":this.selectedIndex>-1}},computedItems(){return this.filteredItems},selectedValues(){return this.selectedItems.map(e=>this.getValue(e))},hasDisplayedItems(){return this.hideSelected?this.filteredItems.some(e=>!this.hasItem(e)):this.filteredItems.length>0},currentRange(){return null==this.selectedItem?0:String(this.getText(this.selectedItem)).length},filteredItems(){return!this.isSearching||this.noFilter||null==this.internalSearch?this.allItems:this.allItems.filter(e=>{const t=Object(r["r"])(e,this.itemText),s=null!=t?String(t):"";return this.filter(e,String(this.internalSearch),s)})},internalSearch:{get(){return this.lazySearch},set(e){this.lazySearch!==e&&(this.lazySearch=e,this.$emit("update:search-input",e))}},isAnyValueAllowed(){return!1},isDirty(){return this.searchIsDirty||this.selectedItems.length>0},isSearching(){return this.multiple&&this.searchIsDirty||this.searchIsDirty&&this.internalSearch!==this.getText(this.selectedItem)},menuCanShow(){return!!this.isFocused&&(this.hasDisplayedItems||!this.hideNoData)},$_menuProps(){const e=i["a"].options.computed.$_menuProps.call(this);return e.contentClass=("v-autocomplete__content "+(e.contentClass||"")).trim(),{...o,...e}},searchIsDirty(){return null!=this.internalSearch&&""!==this.internalSearch},selectedItem(){return this.multiple?null:this.selectedItems.find(e=>this.valueComparator(this.getValue(e),this.getValue(this.internalValue)))},listData(){const e=i["a"].options.computed.listData.call(this);return e.props={...e.props,items:this.virtualizedItems,noFilter:this.noFilter||!this.isSearching||!this.filteredItems.length,searchInput:this.internalSearch},e}},watch:{filteredItems:"onFilteredItemsChanged",internalValue:"setSearch",isFocused(e){e?(document.addEventListener("copy",this.onCopy),this.$refs.input&&this.$refs.input.select()):(document.removeEventListener("copy",this.onCopy),this.blur(),this.updateSelf())},isMenuActive(e){!e&&this.hasSlot&&(this.lazySearch=null)},items(e,t){t&&t.length||!this.hideNoData||!this.isFocused||this.isMenuActive||!e.length||this.activateMenu()},searchInput(e){this.lazySearch=e},internalSearch:"onInternalSearchChanged",itemText:"updateSelf"},created(){this.setSearch()},destroyed(){document.removeEventListener("copy",this.onCopy)},methods:{onFilteredItemsChanged(e,t){if(e!==t){if(!this.autoSelectFirst){const s=t[this.$refs.menu.listIndex];s?this.setMenuIndex(e.findIndex(e=>e===s)):this.setMenuIndex(-1),this.$emit("update:list-index",this.$refs.menu.listIndex)}this.$nextTick(()=>{this.internalSearch&&(1===e.length||this.autoSelectFirst)&&(this.$refs.menu.getTiles(),this.autoSelectFirst&&e.length&&(this.setMenuIndex(0),this.$emit("update:list-index",this.$refs.menu.listIndex)))})}},onInternalSearchChanged(){this.updateMenuDimensions()},updateMenuDimensions(){this.isMenuActive&&this.$refs.menu&&this.$refs.menu.updateDimensions()},changeSelectedIndex(e){this.searchIsDirty||(this.multiple&&e===r["x"].left?-1===this.selectedIndex?this.selectedIndex=this.selectedItems.length-1:this.selectedIndex--:this.multiple&&e===r["x"].right?this.selectedIndex>=this.selectedItems.length-1?this.selectedIndex=-1:this.selectedIndex++:e!==r["x"].backspace&&e!==r["x"].delete||this.deleteCurrentItem())},deleteCurrentItem(){const e=this.selectedIndex,t=this.selectedItems[e];if(!this.isInteractive||this.getDisabled(t))return;const s=this.selectedItems.length-1;if(-1===this.selectedIndex&&0!==s)return void(this.selectedIndex=s);const i=this.selectedItems.length,a=e!==i-1?e:e-1,n=this.selectedItems[a];n?this.selectItem(t):this.setValue(this.multiple?[]:null),this.selectedIndex=a},clearableCallback(){this.internalSearch=null,i["a"].options.methods.clearableCallback.call(this)},genInput(){const e=a["a"].options.methods.genInput.call(this);return e.data=Object(n["a"])(e.data,{attrs:{"aria-activedescendant":Object(r["p"])(this.$refs.menu,"activeTile.id"),autocomplete:Object(r["p"])(e.data,"attrs.autocomplete","off")},domProps:{value:this.internalSearch}}),e},genInputSlot(){const e=i["a"].options.methods.genInputSlot.call(this);return e.data.attrs.role="combobox",e},genSelections(){return this.hasSlot||this.multiple?i["a"].options.methods.genSelections.call(this):[]},onClick(e){this.isInteractive&&(this.selectedIndex>-1?this.selectedIndex=-1:this.onFocus(),this.isAppendInner(e.target)||this.activateMenu())},onInput(e){if(this.selectedIndex>-1||!e.target)return;const t=e.target,s=t.value;t.value&&this.activateMenu(),this.multiple||""!==s||this.deleteCurrentItem(),this.internalSearch=s,this.badInput=t.validity&&t.validity.badInput},onKeyDown(e){const t=e.keyCode;!e.ctrlKey&&[r["x"].home,r["x"].end].includes(t)||i["a"].options.methods.onKeyDown.call(this,e),this.changeSelectedIndex(t)},onSpaceDown(e){},onTabDown(e){i["a"].options.methods.onTabDown.call(this,e),this.updateSelf()},onUpDown(e){e.preventDefault(),this.activateMenu()},selectItem(e){i["a"].options.methods.selectItem.call(this,e),this.setSearch()},setSelectedItems(){i["a"].options.methods.setSelectedItems.call(this),this.isFocused||this.setSearch()},setSearch(){this.$nextTick(()=>{this.multiple&&this.internalSearch&&this.isMenuActive||(this.internalSearch=!this.selectedItems.length||this.multiple||this.hasSlot?null:this.getText(this.selectedItem))})},updateSelf(){(this.searchIsDirty||this.internalValue)&&(this.multiple||this.valueComparator(this.internalSearch,this.getValue(this.internalValue))||this.setSearch())},hasItem(e){return this.selectedValues.indexOf(this.getValue(e))>-1},onCopy(e){var t,s;if(-1===this.selectedIndex)return;const i=this.selectedItems[this.selectedIndex],a=this.getText(i);null===(t=e.clipboardData)||void 0===t||t.setData("text/plain",a),null===(s=e.clipboardData)||void 0===s||s.setData("text/vnd.vuetify.autocomplete.item+plain",a),e.preventDefault()}}})},e133:function(e,t,s){e.exports=s.p+"img/movilidad_urbana.5941945c.jpeg"},ec29:function(e,t,s){},f514:function(e,t,s){"use strict";s("46a0")},fe09:function(e,t,s){"use strict";s("14d9");var i=s("c37a"),a=s("5607"),n=s("2b0e"),r=n["default"].extend({name:"rippleable",directives:{ripple:a["a"]},props:{ripple:{type:[Boolean,Object],default:!0}},methods:{genRipple(e={}){return this.ripple?(e.staticClass="v-input--selection-controls__ripple",e.directives=e.directives||[],e.directives.push({name:"ripple",value:{center:!0}}),this.$createElement("div",e)):null}}}),o=s("8547"),l=s("58df");function c(e){e.preventDefault()}t["a"]=Object(l["a"])(i["a"],r,o["a"]).extend({name:"selectable",model:{prop:"inputValue",event:"change"},props:{id:String,inputValue:null,falseValue:null,trueValue:null,multiple:{type:Boolean,default:null},label:String},data(){return{hasColor:this.inputValue,lazyValue:this.inputValue}},computed:{computedColor(){if(this.isActive)return this.color?this.color:this.isDark&&!this.appIsDark?"white":"primary"},isMultiple(){return!0===this.multiple||null===this.multiple&&Array.isArray(this.internalValue)},isActive(){const e=this.value,t=this.internalValue;return this.isMultiple?!!Array.isArray(t)&&t.some(t=>this.valueComparator(t,e)):void 0===this.trueValue||void 0===this.falseValue?e?this.valueComparator(e,t):Boolean(t):this.valueComparator(t,this.trueValue)},isDirty(){return this.isActive},rippleState(){return this.isDisabled||this.validationState?this.validationState:void 0}},watch:{inputValue(e){this.lazyValue=e,this.hasColor=e}},methods:{genLabel(){const e=i["a"].options.methods.genLabel.call(this);return e?(e.data.on={click:c},e):e},genInput(e,t){return this.$createElement("input",{attrs:Object.assign({"aria-checked":this.isActive.toString(),disabled:this.isDisabled,id:this.computedId,role:e,type:e},t),domProps:{value:this.value,checked:this.isActive},on:{blur:this.onBlur,change:this.onChange,focus:this.onFocus,keydown:this.onKeydown,click:c},ref:"input"})},onClick(e){this.onChange(),this.$emit("click",e)},onChange(){if(!this.isInteractive)return;const e=this.value;let t=this.internalValue;if(this.isMultiple){Array.isArray(t)||(t=[]);const s=t.length;t=t.filter(t=>!this.valueComparator(t,e)),t.length===s&&t.push(e)}else t=void 0!==this.trueValue&&void 0!==this.falseValue?this.valueComparator(t,this.trueValue)?this.falseValue:this.trueValue:e?this.valueComparator(t,e)?null:e:!t;this.validate(!0,t),this.internalValue=t,this.hasColor=t},onFocus(e){this.isFocused=!0,this.$emit("focus",e)},onBlur(e){this.isFocused=!1,this.$emit("blur",e)},onKeydown(e){}}})}}]);
//# sourceMappingURL=web:ingresar.baf0efa1.js.map