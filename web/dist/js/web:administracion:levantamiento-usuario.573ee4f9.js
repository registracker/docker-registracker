(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["web:administracion:levantamiento-usuario"],{"0bc6":function(e,a,r){},e0c7:function(e,a,r){"use strict";r("0bc6");var t=r("7560"),s=r("58df");a["a"]=Object(s["a"])(t["a"]).extend({name:"v-subheader",props:{inset:Boolean},render(e){return e("div",{staticClass:"v-subheader",class:{"v-subheader--inset":this.inset,...this.themeClasses},attrs:this.$attrs,on:this.$listeners},this.$slots.default)}})},f9ab:function(e,a,r){"use strict";r.r(a);var t=r("8336"),s=r("b0af"),i=r("99d9"),o=r("4bd4"),n=r("132d"),l=r("8860"),u=r("da13"),c=r("5d23"),d=r("1baa"),m=r("34c3"),h=r("e0c7"),f=r("8654"),b=function(){var e,a=this,r=a._self._c;return r("div",[a.enabled?r("div",[r(t["a"],{attrs:{dark:"",outlined:"",large:"",color:"red darken-2"},on:{click:function(e){return a.$router.go(-1)}}},[a._v(" Regresar ")]),r(s["a"],{staticClass:"mx-auto",attrs:{width:"50%"}},[r(o["a"],{ref:"userform",on:{submit:function(e){e.preventDefault()}},model:{value:a.userFormValid,callback:function(e){a.userFormValid=e},expression:"userFormValid"}},[r(i["d"],{staticClass:"mb-0 pb-0"},[r(f["a"],{attrs:{label:"Ingresar el correo",outlined:"",rules:[a.fieldEmailRule]},on:{keyup:function(e){return!e.type.indexOf("key")&&a._k(e.keyCode,"enter",13,e.key,"Enter")?null:a.addEmailUser.apply(null,arguments)},blur:a.handleBlur},model:{value:a.email,callback:function(e){a.email=e},expression:"email"}})],1)],1),r(i["c"],{staticClass:"mt-0 pt-0"},[r(l["a"],[r(h["a"],[a._v(" "+a._s(null!==(e=a.users)&&void 0!==e&&e.length?"Participantes":"No se han agregado participantes")+" ")]),r(d["a"],a._l(a.users,(function(e){return r(u["a"],{key:e.id},[r(c["a"],[r(c["c"],[a._v(a._s(e.email))])],1),r(m["a"],[r(n["a"],{attrs:{color:"red darken-2"},on:{click:function(r){return a.eliminarUser(e)}}},[a._v(" mdi-delete-outline ")])],1)],1)})),1)],1)],1)],1)],1):r("div",[r(t["a"],{attrs:{dark:"",outlined:"",large:"",color:"red darken-2"},on:{click:function(e){return a.$router.go(-1)}}},[a._v(" Regresar ")]),r("p",{staticClass:"font-weight-regular"},[a._v("Recurso no encontrado")])],1)])},p=[],v=r("132a"),g={name:"GestionLevantamientoUsuario",data(){return{userFormValid:!0,users:[],email:"",enabled:!1}},created(){this.obtenerUsers()},methods:{fieldEmailRule:Object(v["a"])("Debe agregar un correo válido."),handleBlur(){this.$refs.userform.resetValidation()},async obtenerUsers(){const{id:e}=this.$route.params;try{const a=await this.axios.get(`levantamiento/${e}/agrupacion`);this.users=a.data.data,this.enabled=!0}catch(a){console.log(a),this.$toast.error("Error al obtener los usuarios del levantamiento."),this.users=[]}},async addEmailUser(){const e=this.$refs.userform.validate();if(!e)return;const{id:a}=this.$route.params;try{const{data:{data:{email:e}}}=await this.axios.post(`levantamiento/${a}/agrupacion`,{email:this.email});this.$toast.success(`El correo ${e} se ha agregado.`),this.obtenerUsers()}catch(r){console.log(r),this.$toast.error("Error al agregar el usuario.")}this.$refs.userform.reset(),this.$refs.userform.resetValidation()},async eliminarUser(e){const{id:a}=this.$route.params,{id:r,email:t}=e;try{await this.axios.delete(`levantamiento/${a}/agrupacion/${r}`,{params:{force:!0}}),this.$toast.info(`El correo ${t} se ha eliminado.`)}catch(s){console.log(s),this.$toast.error("Error al eliminar el correo.")}this.obtenerUsers(),this.$refs.userform.reset(),this.$refs.userform.resetValidation()}}},$=g,k=r("2877"),y=Object(k["a"])($,b,p,!1,null,null,null);a["default"]=y.exports}}]);
//# sourceMappingURL=web:administracion:levantamiento-usuario.573ee4f9.js.map