(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["web:administracion:usuarios"],{"2a7f":function(e,t,s){"use strict";s.d(t,"a",(function(){return o}));var a=s("71d9"),i=s("80d2");const o=Object(i["j"])("v-toolbar__title"),l=Object(i["j"])("v-toolbar__items");a["a"]},"2bfd":function(e,t,s){},c6a6:function(e,t,s){"use strict";s("2bfd");var a=s("b974"),i=s("8654"),o=s("d9f7"),l=s("80d2");const r={...a["b"],offsetY:!0,offsetOverflow:!0,transition:!1};t["a"]=a["a"].extend({name:"v-autocomplete",props:{autoSelectFirst:{type:Boolean,default:!1},filter:{type:Function,default:(e,t,s)=>s.toLocaleLowerCase().indexOf(t.toLocaleLowerCase())>-1},hideNoData:Boolean,menuProps:{type:a["a"].options.props.menuProps.type,default:()=>r},noFilter:Boolean,searchInput:{type:String}},data(){return{lazySearch:this.searchInput}},computed:{classes(){return{...a["a"].options.computed.classes.call(this),"v-autocomplete":!0,"v-autocomplete--is-selecting-index":this.selectedIndex>-1}},computedItems(){return this.filteredItems},selectedValues(){return this.selectedItems.map(e=>this.getValue(e))},hasDisplayedItems(){return this.hideSelected?this.filteredItems.some(e=>!this.hasItem(e)):this.filteredItems.length>0},currentRange(){return null==this.selectedItem?0:String(this.getText(this.selectedItem)).length},filteredItems(){return!this.isSearching||this.noFilter||null==this.internalSearch?this.allItems:this.allItems.filter(e=>{const t=Object(l["r"])(e,this.itemText),s=null!=t?String(t):"";return this.filter(e,String(this.internalSearch),s)})},internalSearch:{get(){return this.lazySearch},set(e){this.lazySearch!==e&&(this.lazySearch=e,this.$emit("update:search-input",e))}},isAnyValueAllowed(){return!1},isDirty(){return this.searchIsDirty||this.selectedItems.length>0},isSearching(){return this.multiple&&this.searchIsDirty||this.searchIsDirty&&this.internalSearch!==this.getText(this.selectedItem)},menuCanShow(){return!!this.isFocused&&(this.hasDisplayedItems||!this.hideNoData)},$_menuProps(){const e=a["a"].options.computed.$_menuProps.call(this);return e.contentClass=("v-autocomplete__content "+(e.contentClass||"")).trim(),{...r,...e}},searchIsDirty(){return null!=this.internalSearch&&""!==this.internalSearch},selectedItem(){return this.multiple?null:this.selectedItems.find(e=>this.valueComparator(this.getValue(e),this.getValue(this.internalValue)))},listData(){const e=a["a"].options.computed.listData.call(this);return e.props={...e.props,items:this.virtualizedItems,noFilter:this.noFilter||!this.isSearching||!this.filteredItems.length,searchInput:this.internalSearch},e}},watch:{filteredItems:"onFilteredItemsChanged",internalValue:"setSearch",isFocused(e){e?(document.addEventListener("copy",this.onCopy),this.$refs.input&&this.$refs.input.select()):(document.removeEventListener("copy",this.onCopy),this.blur(),this.updateSelf())},isMenuActive(e){!e&&this.hasSlot&&(this.lazySearch=null)},items(e,t){t&&t.length||!this.hideNoData||!this.isFocused||this.isMenuActive||!e.length||this.activateMenu()},searchInput(e){this.lazySearch=e},internalSearch:"onInternalSearchChanged",itemText:"updateSelf"},created(){this.setSearch()},destroyed(){document.removeEventListener("copy",this.onCopy)},methods:{onFilteredItemsChanged(e,t){if(e!==t){if(!this.autoSelectFirst){const s=t[this.$refs.menu.listIndex];s?this.setMenuIndex(e.findIndex(e=>e===s)):this.setMenuIndex(-1),this.$emit("update:list-index",this.$refs.menu.listIndex)}this.$nextTick(()=>{this.internalSearch&&(1===e.length||this.autoSelectFirst)&&(this.$refs.menu.getTiles(),this.autoSelectFirst&&e.length&&(this.setMenuIndex(0),this.$emit("update:list-index",this.$refs.menu.listIndex)))})}},onInternalSearchChanged(){this.updateMenuDimensions()},updateMenuDimensions(){this.isMenuActive&&this.$refs.menu&&this.$refs.menu.updateDimensions()},changeSelectedIndex(e){this.searchIsDirty||(this.multiple&&e===l["x"].left?-1===this.selectedIndex?this.selectedIndex=this.selectedItems.length-1:this.selectedIndex--:this.multiple&&e===l["x"].right?this.selectedIndex>=this.selectedItems.length-1?this.selectedIndex=-1:this.selectedIndex++:e!==l["x"].backspace&&e!==l["x"].delete||this.deleteCurrentItem())},deleteCurrentItem(){const e=this.selectedIndex,t=this.selectedItems[e];if(!this.isInteractive||this.getDisabled(t))return;const s=this.selectedItems.length-1;if(-1===this.selectedIndex&&0!==s)return void(this.selectedIndex=s);const a=this.selectedItems.length,i=e!==a-1?e:e-1,o=this.selectedItems[i];o?this.selectItem(t):this.setValue(this.multiple?[]:null),this.selectedIndex=i},clearableCallback(){this.internalSearch=null,a["a"].options.methods.clearableCallback.call(this)},genInput(){const e=i["a"].options.methods.genInput.call(this);return e.data=Object(o["a"])(e.data,{attrs:{"aria-activedescendant":Object(l["p"])(this.$refs.menu,"activeTile.id"),autocomplete:Object(l["p"])(e.data,"attrs.autocomplete","off")},domProps:{value:this.internalSearch}}),e},genInputSlot(){const e=a["a"].options.methods.genInputSlot.call(this);return e.data.attrs.role="combobox",e},genSelections(){return this.hasSlot||this.multiple?a["a"].options.methods.genSelections.call(this):[]},onClick(e){this.isInteractive&&(this.selectedIndex>-1?this.selectedIndex=-1:this.onFocus(),this.isAppendInner(e.target)||this.activateMenu())},onInput(e){if(this.selectedIndex>-1||!e.target)return;const t=e.target,s=t.value;t.value&&this.activateMenu(),this.multiple||""!==s||this.deleteCurrentItem(),this.internalSearch=s,this.badInput=t.validity&&t.validity.badInput},onKeyDown(e){const t=e.keyCode;!e.ctrlKey&&[l["x"].home,l["x"].end].includes(t)||a["a"].options.methods.onKeyDown.call(this,e),this.changeSelectedIndex(t)},onSpaceDown(e){},onTabDown(e){a["a"].options.methods.onTabDown.call(this,e),this.updateSelf()},onUpDown(e){e.preventDefault(),this.activateMenu()},selectItem(e){a["a"].options.methods.selectItem.call(this,e),this.setSearch()},setSelectedItems(){a["a"].options.methods.setSelectedItems.call(this),this.isFocused||this.setSearch()},setSearch(){this.$nextTick(()=>{this.multiple&&this.internalSearch&&this.isMenuActive||(this.internalSearch=!this.selectedItems.length||this.multiple||this.hasSlot?null:this.getText(this.selectedItem))})},updateSelf(){(this.searchIsDirty||this.internalValue)&&(this.multiple||this.valueComparator(this.internalSearch,this.getValue(this.internalValue))||this.setSearch())},hasItem(e){return this.selectedValues.indexOf(this.getValue(e))>-1},onCopy(e){var t,s;if(-1===this.selectedIndex)return;const a=this.selectedItems[this.selectedIndex],i=this.getText(a);null===(t=e.clipboardData)||void 0===t||t.setData("text/plain",i),null===(s=e.clipboardData)||void 0===s||s.setData("text/vnd.vuetify.autocomplete.item+plain",i),e.preventDefault()}}})},d412:function(e,t,s){"use strict";s.r(t);var a=s("c6a6"),i=s("8336"),o=s("b0af"),l=s("99d9"),r=s("cc20"),n=s("8fea"),c=s("169a"),d=s("ce7e"),u=s("4bd4"),h=s("132d"),m=s("2fa4"),p=s("8654"),f=s("71d9"),g=s("2a7f"),v=function(){var e=this,t=e._self._c;return t("div",[t(n["a"],{staticClass:"elevation-1",attrs:{headers:e.headers,items:e.items,"sort-by":"id","footer-props":{pageText:"{0}-{1} de {2}","items-per-page-text":"Elementos por página"},"server-items-length":e.total,page:e.page},on:{"update:options":e.update,"update:page":function(t){e.page=t}},scopedSlots:e._u([{key:"header.roles",fn:function(){return[t(a["a"],{staticClass:"mt-2 pt-2",attrs:{items:e.roles,"item-text":"name","item-value":"id",label:"Rol",multiple:"",flat:"",clearable:""},model:{value:e.filtroRoles,callback:function(t){e.filtroRoles=t},expression:"filtroRoles"}})]},proxy:!0},{key:"no-data",fn:function(){return[e._v(" Sin registros ")]},proxy:!0},{key:"top",fn:function(){return[t(f["a"],{attrs:{flat:""}},[t(g["a"],{staticClass:"text-capitalize"},[e._v(" Usuarios ")]),t(d["a"],{staticClass:"mx-4",attrs:{inset:"",vertical:""}}),t(m["a"]),t(c["a"],{attrs:{width:"600px",persistent:""},scopedSlots:e._u([{key:"activator",fn:function({on:s,attrs:a}){return[t(i["a"],e._g(e._b({staticClass:"mb-2",attrs:{color:"red darken-2",dark:""}},"v-btn",a,!1),s),[t(h["a"],{staticClass:"mr-1"},[e._v(" mdi-plus-box ")]),e._v(" Nuevo registro ")],1)]}}]),model:{value:e.dialog,callback:function(t){e.dialog=t},expression:"dialog"}},[t(o["a"],[t(l["d"],[e._v(" Crear registro ")]),t(l["c"],[t(u["a"],{ref:"form",model:{value:e.valid,callback:function(t){e.valid=t},expression:"valid"}},[t(p["a"],{attrs:{outlined:"",required:"",rules:[e.emailRule]},scopedSlots:e._u([{key:"label",fn:function(){return[e._v(" Correo electrónico "),t("span",{staticClass:"red--text"},[t("strong",[e._v("* ")])])]},proxy:!0}]),model:{value:e.form.email,callback:function(t){e.$set(e.form,"email",t)},expression:"form.email"}}),t(p["a"],{attrs:{label:"Nombre de usuario",outlined:"",autocomplete:"off"},model:{value:e.form.nombre_usuario,callback:function(t){e.$set(e.form,"nombre_usuario",t)},expression:"form.nombre_usuario"}}),t(a["a"],{attrs:{rules:[e.integerRule],"item-text":"name","item-value":"id",outlined:"",items:e.roles},scopedSlots:e._u([{key:"label",fn:function(){return[e._v(" Selecciona el rol "),t("span",{staticClass:"red--text"},[t("strong",[e._v("* ")])])]},proxy:!0}]),model:{value:e.form.rol,callback:function(t){e.$set(e.form,"rol",t)},expression:"form.rol"}}),t(p["a"],{attrs:{rules:e.passwordRules,outlined:"","append-icon":e.showPassword?"mdi-eye":"mdi-eye-off",type:e.showPassword?"text":"password",autocomplete:"off"},on:{"click:append":function(t){e.showPassword=!e.showPassword}},scopedSlots:e._u([{key:"label",fn:function(){return[e._v(" Contraseña "),t("span",{staticClass:"red--text"},[t("strong",[e._v("* ")])])]},proxy:!0}]),model:{value:e.form.password,callback:function(t){e.$set(e.form,"password",t)},expression:"form.password"}})],1)],1),t(l["a"],{staticClass:"py-5"},[t(m["a"]),t(i["a"],{attrs:{text:""},on:{click:function(t){return e.close()}}},[e._v(" Cancelar ")]),t(i["a"],{attrs:{color:"red darken-1",dark:""},on:{click:e.crearUsuario}},[e._v("Aceptar")])],1)],1)],1)],1)]},proxy:!0},{key:"item.actions",fn:function({item:s}){return[t(h["a"],{staticClass:"mr-2",attrs:{title:"Cambiar rol"},on:{click:function(t){return e.openDialogoRol(s)}}},[e._v(" mdi-account-switch ")]),t(h["a"],{staticClass:"mr-2",attrs:{title:"Cambiar estado usuario"},on:{click:function(t){return e.openDialog(s)}}},[e._v(" mdi-account-convert ")]),t(h["a"],{attrs:{title:"Cambiar contraseña"},on:{click:function(t){return e.openDialogChangePass(s)}}},[e._v(" mdi-lock-reset ")])]}},{key:"item.solicitud",fn:function({item:s}){var a,i,o,l;return[t(r["a"],{attrs:{small:"",color:1==(null===s||void 0===s||null===(a=s.solicitud)||void 0===a||null===(i=a.estado)||void 0===i?void 0:i.id)?"green":"red","text-color":"white"}},[e._v(" "+e._s(null===s||void 0===s||null===(o=s.solicitud)||void 0===o||null===(l=o.estado)||void 0===l?void 0:l.nombre)+" ")])]}}])}),t(c["a"],{attrs:{"max-width":"530px"},model:{value:e.dialogoRol,callback:function(t){e.dialogoRol=t},expression:"dialogoRol"}},[e.rolSeleccionado?t(o["a"],[t(l["d"],{staticClass:"text-h5"},[e._v(" Cambio de rol ")]),t(l["c"],{staticClass:"mb-0 pb-0"},[t(u["a"],{ref:"formRol"},[t(a["a"],{attrs:{rules:[e.reglaTexto],"item-text":"name","item-value":"name",outlined:"",items:e.roles,label:"Seleccionar el rol"},model:{value:e.rolSeleccionado.roles,callback:function(t){e.$set(e.rolSeleccionado,"roles",t)},expression:"rolSeleccionado.roles"}})],1)],1),t(l["a"],{staticClass:"mt-0 pt-0"},[t(m["a"]),t(i["a"],{staticClass:"default",attrs:{color:""},on:{click:e.closeDialogoRol}},[e._v(" Cancelar ")]),t(i["a"],{attrs:{color:"red darken-3",dark:""},on:{click:e.cambiarRol}},[e._v(" Aceptar ")])],1)],1):e._e()],1),t(c["a"],{attrs:{"max-width":"530px"},model:{value:e.dialogEstado,callback:function(t){e.dialogEstado=t},expression:"dialogEstado"}},[t(o["a"],[t(l["d"],{staticClass:"text-h5"},[e._v(" Cambio de estado ")]),t(l["c"],{staticClass:"mb-0 pb-0"},[t(u["a"],{ref:"form_change_state",model:{value:e.valid_state,callback:function(t){e.valid_state=t},expression:"valid_state"}},[t(a["a"],{attrs:{rules:[e.integerRule],"item-text":"nombre","item-value":"id",outlined:"",items:e.estados},scopedSlots:e._u([{key:"label",fn:function(){return[e._v(" Selecciona el estado "),t("span",{staticClass:"red--text"},[t("strong",[e._v("* ")])])]},proxy:!0}]),model:{value:e.estado,callback:function(t){e.estado=t},expression:"estado"}})],1)],1),t(l["a"],{staticClass:"mt-0 pt-0"},[t(m["a"]),t(i["a"],{staticClass:"default",attrs:{color:""},on:{click:function(t){e.dialogEstado=!1}}},[e._v("Cancelar")]),t(i["a"],{attrs:{color:"red darken-3",dark:""},on:{click:function(t){return e.changeState()}}},[e._v(" Aceptar ")])],1)],1)],1),t(c["a"],{attrs:{"max-width":"530px"},model:{value:e.dialogCambioPassword,callback:function(t){e.dialogCambioPassword=t},expression:"dialogCambioPassword"}},[t(o["a"],[t(l["d"],{staticClass:"text-h5"},[e._v(" Cambio de contraseña ")]),t(l["c"],[t(u["a"],{ref:"form_change_pass"},[t(p["a"],{attrs:{rules:[e.fieldRule],outlined:"","append-icon":e.showPassword?"mdi-eye":"mdi-eye-off",type:e.showPassword?"text":"password"},on:{"click:append":function(t){e.showPassword=!e.showPassword}},scopedSlots:e._u([{key:"label",fn:function(){return[e._v(" Contraseña "),t("span",{staticClass:"red--text"},[t("strong",[e._v("* ")])])]},proxy:!0}]),model:{value:e.editedItem.password,callback:function(t){e.$set(e.editedItem,"password",t)},expression:"editedItem.password"}}),t(p["a"],{attrs:{rules:[e.fieldRule,e.repeatPasswordRules],outlined:"","append-icon":e.showPasswordConfirm?"mdi-eye":"mdi-eye-off",type:e.showPasswordConfirm?"text":"password"},on:{"click:append":function(t){e.showPasswordConfirm=!e.showPasswordConfirm}},scopedSlots:e._u([{key:"label",fn:function(){return[e._v(" Confirmar Contraseña "),t("span",{staticClass:"red--text"},[t("strong",[e._v("* ")])])]},proxy:!0}]),model:{value:e.passConfirm,callback:function(t){e.passConfirm=t},expression:"passConfirm"}})],1)],1),t(l["a"],{staticClass:"py-3"},[t(m["a"]),t(i["a"],{staticClass:"default",attrs:{text:""},on:{click:function(t){e.dialogCambioPassword=!1}}},[e._v("Cancelar")]),t(i["a"],{staticClass:"red darken-2",attrs:{dark:""},on:{click:function(t){return e.changePassword()}}},[e._v("Aceptar")])],1)],1)],1)],1)},x=[],b=s("132a"),I={name:"CreateUserFom",created(){this.obtenerRoles(),this.initialize(),this.getEstadosCuenta()},data:()=>({page:1,limit:10,total:0,filtroRoles:null,dialogoRol:!1,rolSeleccionado:null,valid:!0,valid_state:!0,showPassword:!1,showPasswordConfirm:!1,roles:[],form:{email:"",nombre_usuario:"",rol:null,password:""},headers:[{text:"Correo",align:"start",value:"email",sortable:!1},{text:"Usuario",align:"start",value:"name",sortable:!1},{text:"Rol",align:"start",value:"roles",sortable:!1,width:"20%"},{text:"Estado",align:"center",value:"solicitud",sortable:!1},{text:"Acciones",align:"start",value:"actions",sortable:!1}],items:[],editedItem:{password:""},passConfirm:"",dialog:!1,dialogEstado:!1,dialogCambioPassword:!1,estado:"",estados:[],passwordRules:[e=>/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/.test(e)||"La contraseña debe tener al entre 8, al menos un dígito, al menos tres minúscula y al menos una mayúscula."],reglaTexto:[e=>!!e||"Debe seleccionar el rol."]}),methods:{emailRule:Object(b["a"])("Debe agregar un correo válido."),fieldRule:Object(b["g"])("Debe completar el campo."),integerRule:Object(b["b"])("Debe seleccionar un rol."),passwordRule:Object(b["d"])("La contraseña debe tener mínimo una letra mayúscula, tres minúscula, un carácter especial, un dígito y mínimo ocho caracteres"),async obtenerRoles(){const e=await this.axios.get("/roles"),{data:{data:t}}=e;this.roles=t.slice("signup"===this.$route.name?1:0)},openDialogoRol(e){this.rolSeleccionado=JSON.parse(JSON.stringify(e)),this.dialogoRol=!0},closeDialogoRol(){this.dialogoRol=!1,this.rolSeleccionado=null},async cambiarRol(){try{const e=this.$refs.formRol.validate();e&&(await this.axios.put("/usuarios/"+this.rolSeleccionado.id,{rol:this.rolSeleccionado.roles}),this.initialize(),this.$toast.success("Rol actualizado."))}catch(e){this.$toast.error("Error al actualizar el rol.")}this.dialogoRol=!1},async crearUsuario(){if(this.$refs.form.validate())try{const{data:e}=await this.axios.post("/usuario",{...this.form});this.$refs.form.reset();const t=`La cuenta ${e.usuario.email} está ${e.estado_cuenta}`;this.$toast.info(t),this.dialog=!1,this.initialize()}catch(e){if(422===e.response.status)return void this.$toast.error(e.response.data.message);this.$toast.error("No se pudo registrar la cuenta, intente de nuevo.")}},async initialize(){var e;let t;(null===(e=this.filtroRoles)||void 0===e?void 0:e.length)>0&&(t=[{field:"roles.id",operator:"in",value:this.filtroRoles}]);const s=await this.axios.post("/usuarios/search",{includes:[{relation:"roles"},{relation:"solicitud.estado"}],sort:[{field:"id",direction:"desc"}],filters:t},{params:{limit:this.limit,page:this.page}});this.items=s.data.data.map(e=>({...e,roles:e.roles.map(e=>e.name).join(", ")})),this.total=s.data.meta.total},update(e){e.page!==this.page&&(this.page=e.page,this.initialize()),e.itemsPerPage!==this.limit&&(this.limit=e.itemsPerPage,this.initialize())},pagination(){return{page:this.page}},openDialog(e){var t,s;this.editedIndex=this.items.indexOf(e),this.editedItem={...e},this.estado=(null===(t=e.solicitud)||void 0===t||null===(s=t.estado)||void 0===s?void 0:s.id)||1,this.dialogEstado=!0},openDialogChangePass(e){this.editedIndex=this.items.indexOf(e),this.editedItem={...e},this.dialogCambioPassword=!0,this.$refs.form_change_pass&&this.$refs.form_change_pass.reset()},async changeState(){const e=this.estado;try{const t=this.$refs.form_change_state.validate();if(t){const t={id_estado_solicitud:e};await this.axios.put("/solicitudes-cuentas/"+this.editedItem.solicitud.id,t),this.initialize(),this.$toast.success("Registro actualizado"),this.dialogEstado=!1}}catch(t){this.$toast.error("Error al actualizar el estado")}},async changePassword(){try{const e=this.$refs.form_change_pass.validate();if(e){const e=this.editedItem.password,t={password:e};await this.axios.put("/usuarios/"+this.editedItem.id,t),this.$toast.success("Constraseña actualizada correctamente"),this.dialogCambioPassword=!1}}catch(e){this.$toast.error("Error al actualizar la contraseña")}},async getEstadosCuenta(){const e=await this.axios.get("/estados-solicitud");this.estados=e.data.data,console.log(e.data.data)},close(){this.dialog=!1,this.$nextTick(()=>{this.editedItem={...this.defaultItem},this.editedIndex=-1,this.$refs.form.resetValidation(),this.$refs.form.reset()})}},computed:{repeatPasswordRules(){return()=>this.editedItem.password===this.passConfirm||"Contraseñas no coinciden"}},watch:{filtroRoles(){this.page=1,this.$nextTick(()=>{this.initialize()})}}},w=I,C=s("2877"),y=Object(C["a"])(w,v,x,!1,null,null,null);t["default"]=y.exports}}]);
//# sourceMappingURL=web:administracion:usuarios.be61e4e4.js.map