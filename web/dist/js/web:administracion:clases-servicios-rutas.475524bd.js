(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["web:administracion:clases-servicios-rutas"],{"0cb2":function(e,t,a){var r=a("e330"),s=a("7b0b"),i=Math.floor,n=r("".charAt),o=r("".replace),l=r("".slice),c=/\$([$&'`]|\d{1,2}|<[^>]*>)/g,d=/\$([$&'`]|\d{1,2})/g;e.exports=function(e,t,a,r,u,f){var h=a+e.length,g=r.length,p=d;return void 0!==u&&(u=s(u),p=c),o(f,p,(function(s,o){var c;switch(n(o,0)){case"$":return"$";case"&":return e;case"`":return l(t,0,a);case"'":return l(t,h);case"<":c=u[l(o,1,-1)];break;default:var d=+o;if(0===d)return s;if(d>g){var f=i(d/10);return 0===f?s:f<=g?void 0===r[f-1]?n(o,1):r[f-1]+n(o,1):s}c=r[d-1]}return void 0===c?"":c}))}},"0fd9":function(e,t,a){"use strict";a("13d5"),a("14d9"),a("4b85");var r=a("2b0e"),s=a("d9f7"),i=a("80d2");const n=["sm","md","lg","xl"],o=["start","end","center"];function l(e,t){return n.reduce((a,r)=>(a[e+Object(i["G"])(r)]=t(),a),{})}const c=e=>[...o,"baseline","stretch"].includes(e),d=l("align",()=>({type:String,default:null,validator:c})),u=e=>[...o,"space-between","space-around"].includes(e),f=l("justify",()=>({type:String,default:null,validator:u})),h=e=>[...o,"space-between","space-around","stretch"].includes(e),g=l("alignContent",()=>({type:String,default:null,validator:h})),p={align:Object.keys(d),justify:Object.keys(f),alignContent:Object.keys(g)},m={align:"align",justify:"justify",alignContent:"align-content"};function v(e,t,a){let r=m[e];if(null!=a){if(t){const a=t.replace(e,"");r+="-"+a}return r+="-"+a,r.toLowerCase()}}const b=new Map;t["a"]=r["default"].extend({name:"v-row",functional:!0,props:{tag:{type:String,default:"div"},dense:Boolean,noGutters:Boolean,align:{type:String,default:null,validator:c},...d,justify:{type:String,default:null,validator:u},...f,alignContent:{type:String,default:null,validator:h},...g},render(e,{props:t,data:a,children:r}){let i="";for(const s in t)i+=String(t[s]);let n=b.get(i);if(!n){let e;for(e in n=[],p)p[e].forEach(a=>{const r=t[a],s=v(e,a,r);s&&n.push(s)});n.push({"no-gutters":t.noGutters,"row--dense":t.dense,["align-"+t.align]:t.align,["justify-"+t.justify]:t.justify,["align-content-"+t.alignContent]:t.alignContent}),b.set(i,n)}return e(t.tag,Object(s["a"])(a,{staticClass:"row",class:n}),r)}})},"1be4":function(e,t,a){var r=a("d066");e.exports=r("document","documentElement")},"2a7f":function(e,t,a){"use strict";a.d(t,"a",(function(){return i}));var r=a("71d9"),s=a("80d2");const i=Object(s["j"])("v-toolbar__title"),n=Object(s["j"])("v-toolbar__items");r["a"]},"33d1":function(e,t,a){"use strict";var r=a("23e7"),s=a("7b0b"),i=a("07fa"),n=a("5926"),o=a("44d2");r({target:"Array",proto:!0},{at:function(e){var t=s(this),a=i(t),r=n(e),o=r>=0?r:a+r;return o<0||o>=a?void 0:t[o]}}),o("at")},"37e8":function(e,t,a){var r=a("83ab"),s=a("aed9"),i=a("9bf2"),n=a("825a"),o=a("fc6a"),l=a("df75");t.f=r&&!s?Object.defineProperties:function(e,t){n(e);var a,r=o(t),s=l(t),c=s.length,d=0;while(c>d)i.f(e,a=s[d++],r[a]);return e}},"42e0":function(e,t,a){"use strict";a.r(t);var r=a("8336"),s=a("b0af"),i=a("99d9"),n=a("62ad"),o=a("a523"),l=a("8fea"),c=a("169a"),d=a("ce7e"),u=a("4bd4"),f=a("132d"),h=a("0fd9"),g=a("2fa4"),p=a("8654"),m=a("71d9"),v=a("2a7f"),b=function(){var e=this,t=e._self._c;return t("div",[t(l["a"],{staticClass:"elevation-1",attrs:{headers:e.headers,items:e.items,"server-items-length":e.total,"sort-by":"id","footer-props":{pageText:"{0}-{1} de {2}","items-per-page-text":"Elementos por página"},"disable-sort":!0},on:{"update:options":e.actualizarOpcionesTabla},scopedSlots:e._u([{key:"no-data",fn:function(){return[e._v(" Sin registros ")]},proxy:!0},{key:"top",fn:function(){return[t(m["a"],{attrs:{flat:""}},[t(v["a"],{staticClass:"text-capitalize"},[e._v(" "+e._s(e.routeName)+" ")]),t(d["a"],{staticClass:"mx-4",attrs:{inset:"",vertical:""}}),t(g["a"]),t(r["a"],{staticClass:"mr-2",attrs:{icon:"",title:"Mostrar registros eliminados"},on:{click:function(t){e.withTrashed=!e.withTrashed}}},[t(f["a"],{attrs:{color:e.withTrashed?"red darken-2":"grey"}},[e._v(" mdi-archive-lock-open-outline ")])],1),t(c["a"],{attrs:{"max-width":"600px",persistent:""},scopedSlots:e._u([{key:"activator",fn:function({on:a,attrs:s}){return[t(r["a"],e._g(e._b({staticClass:"mb-2",attrs:{color:"red darken-2",dark:""}},"v-btn",s,!1),a),[t(f["a"],{staticClass:"mr-1"},[e._v(" mdi-plus-box ")]),e._v(" Nuevo registro ")],1)]}}]),model:{value:e.dialog,callback:function(t){e.dialog=t},expression:"dialog"}},[t(s["a"],[t(i["d"],[e._v(" "+e._s(e.formTitle)+" ")]),t(i["c"],[t(u["a"],{ref:"form",on:{submit:function(e){e.preventDefault()}}},[t(o["a"],[t(h["a"],[t(n["a"],{staticClass:"mt-2",attrs:{cols:"12",sm:"12"}},[t(p["a"],{attrs:{rules:[e.fieldRule],outlined:""},on:{keyup:function(t){return!t.type.indexOf("key")&&e._k(t.keyCode,"enter",13,t.key,"Enter")?null:e.handleSave.apply(null,arguments)}},scopedSlots:e._u([{key:"label",fn:function(){return[e._v(" Ingrese el nombre "),t("span",{staticClass:"red--text"},[t("strong",[e._v("* ")])])]},proxy:!0}]),model:{value:e.editedItem.clase,callback:function(t){e.$set(e.editedItem,"clase",t)},expression:"editedItem.clase"}})],1)],1)],1)],1)],1),t(i["a"],{staticClass:"pt-0 mt-0"},[t(g["a"]),t(r["a"],{attrs:{text:""},on:{click:e.close}},[e._v(" Cancelar ")]),-1==e.editedIndex?t(r["a"],{staticClass:"red darken-1",attrs:{text:"",dark:""},on:{click:e.handleSave}},[e._v(" Guardar ")]):t(r["a"],{staticClass:"red darken-1",attrs:{text:"",dark:""},on:{click:e.handleUpdate}},[e._v(" Actualizar ")])],1)],1)],1)],1)]},proxy:!0},{key:"item.actions",fn:function({item:a}){return[a.fecha_eliminado?e._e():t(f["a"],{staticClass:"mr-2",on:{click:function(t){return e.editItem(a)}}},[e._v(" mdi-pencil ")]),a.fecha_eliminado?t(f["a"],{attrs:{color:"grey"},on:{click:function(t){return e.restoreItem(a)}}},[e._v(" mdi-delete-restore ")]):t(f["a"],{attrs:{color:"red lighten-2"},on:{click:function(t){return e.deleteItem(a)}}},[e._v(" mdi-delete ")])]}}])}),t(c["a"],{attrs:{"max-width":"600"},model:{value:e.restoreDialog,callback:function(t){e.restoreDialog=t},expression:"restoreDialog"}},[t(s["a"],[t(i["d"],{staticClass:"text-center"},[e._v(" ¿Quiere restaurar el registro "+e._s(e.editedItem.clase)+"? ")]),t(i["a"],[t(g["a"]),t(r["a"],{attrs:{color:"red darken-1",text:""},on:{click:e.handleRestore}},[e._v("Aceptar")]),t(r["a"],{attrs:{color:"gray darken-1",text:""},on:{click:e.close}},[e._v(" Cancelar ")]),t(g["a"])],1)],1)],1),t(c["a"],{attrs:{"max-width":"600"},model:{value:e.deleteDialog,callback:function(t){e.deleteDialog=t},expression:"deleteDialog"}},[t(s["a"],[t(i["d"],{staticClass:"justify-center"},[e._v(" ¿Quiere eliminar el registro "+e._s(e.editedItem.clase)+"? ")]),t(i["a"],{staticClass:"py-3"},[t(g["a"]),t(r["a"],{attrs:{text:"",color:"red darken-1"},on:{click:e.handleDelete}},[e._v(" Aceptar ")]),t(r["a"],{attrs:{text:"",color:"gray darken-1"},on:{click:e.close}},[e._v(" Cancelar ")]),t(g["a"])],1)],1)],1)],1)},y=[],x=(a("5b81"),a("33d1"),a("ea98"),a("132a")),k={name:"GestionClasesServiciosRutas",data(){return{url:"",routeName:"",withTrashed:!1,limit:10,total:0,page:1,headers:[{text:"Clase",align:"start",value:"clase",sortable:!1},{text:"Acciones",align:"end",value:"actions",sortable:!1}],items:[],dialog:!1,deleteDialog:!1,restoreDialog:!1,editedIndex:-1,editedItem:{id:"",clase:""},defaultItem:{id:"",clase:""}}},created(){this.routeName=this.$route.name.split(":").at(-1).replaceAll("-"," "),this.obtenerItems()},watch:{withTrashed(){this.obtenerItems()}},computed:{formTitle(){return-1===this.editedIndex?"Crear registro":"Editar registro"}},methods:{fieldRule:Object(x["g"])("Debe completar el campo."),async obtenerItems(){const e=await this.axios.get("clases-servicios-rutas",{params:{with_trashed:this.withTrashed,limit:this.limit,page:this.page}});this.items=e.data.data,this.total=e.data.meta.total},actualizarOpcionesTabla(e){e.page!==this.page&&(this.page=e.page,this.obtenerItems()),e.itemsPerPage!==this.limit&&(this.limit=e.itemsPerPage,this.obtenerItems())},setItemValues(e){this.editedIndex=this.items.indexOf(e),this.editedItem={...e},this.$refs.form&&this.$refs.form.resetValidation()},restoreItem(e){this.setItemValues(e),this.restoreDialog=!0},editItem(e){this.setItemValues(e),this.dialog=!0},async handleSave(){try{const e=this.$refs.form.validate();if(!e)return;await this.axios.post("clases-servicios-rutas",{...this.editedItem,id:void 0}),this.$toast.success("Registro creado.")}catch(e){console.log(e),this.$toast.error("Error al crear el registro.")}this.obtenerItems(),this.close()},async handleUpdate(){try{const e=this.$refs.form.validate();if(!e)return;await this.axios.put("clases-servicios-rutas/"+this.editedItem.id,{clase:this.editedItem.clase}),this.$toast.success("Registro actualizado correctamente.")}catch(e){console.log(e),this.$toast.error("Error al actualizar el registro.")}this.obtenerItems(),this.close()},async handleRestore(){try{await this.axios.post(`clases-servicios-rutas/${this.editedItem.id}/restore`),this.$toast.info("Registro restaurado.")}catch(e){console.log(e),this.$toast.error("Error al actualizar el medio de desplazamiento.")}this.obtenerItems(),this.close()},async handleDelete(){try{await this.axios.delete("clases-servicios-rutas/"+this.editedItem.id),this.$toast.success("Registro eliminado")}catch(e){console.log(e),this.$toast.error("Error al eliminar el registro.")}this.obtenerItems(),this.close()},deleteItem(e){this.editedItem={...e},this.deleteDialog=!0},close(){this.dialog=!1,this.deleteDialog=!1,this.restoreDialog=!1,this.$nextTick(()=>{this.editedItem={...this.defaultItem},this.editedIndex=-1}),this.$refs.form&&(this.$refs.form.resetValidation(),this.$refs.form.reset())}}},w=k,I=a("2877"),_=Object(I["a"])(w,b,y,!1,null,null,null);t["default"]=_.exports},"44d2":function(e,t,a){var r=a("b622"),s=a("7c73"),i=a("9bf2").f,n=r("unscopables"),o=Array.prototype;void 0==o[n]&&i(o,n,{configurable:!0,value:s(null)}),e.exports=function(e){o[n][e]=!0}},"44e7":function(e,t,a){var r=a("861d"),s=a("c6b6"),i=a("b622"),n=i("match");e.exports=function(e){var t;return r(e)&&(void 0!==(t=e[n])?!!t:"RegExp"==s(e))}},"5b81":function(e,t,a){"use strict";var r=a("23e7"),s=a("c65b"),i=a("e330"),n=a("1d80"),o=a("1626"),l=a("7234"),c=a("44e7"),d=a("577e"),u=a("dc4a"),f=a("90d8"),h=a("0cb2"),g=a("b622"),p=a("c430"),m=g("replace"),v=TypeError,b=i("".indexOf),y=i("".replace),x=i("".slice),k=Math.max,w=function(e,t,a){return a>e.length?-1:""===t?a:b(e,t,a)};r({target:"String",proto:!0},{replaceAll:function(e,t){var a,r,i,g,I,_,C,j,S,O=n(this),$=0,D=0,E="";if(!l(e)){if(a=c(e),a&&(r=d(n(f(e))),!~b(r,"g")))throw v("`.replaceAll` does not allow non-global regexes");if(i=u(e,m),i)return s(i,e,O,t);if(p&&a)return y(d(O),e,t)}g=d(O),I=d(e),_=o(t),_||(t=d(t)),C=I.length,j=k(1,C),$=w(g,I,0);while(-1!==$)S=_?d(t(I,$,g)):h(I,g,$,[],void 0,t),E+=x(g,D,$)+S,D=$+C,$=w(g,I,$+j);return D<g.length&&(E+=x(g,D)),E}})},"62ad":function(e,t,a){"use strict";a("13d5"),a("14d9"),a("4b85");var r=a("2b0e"),s=a("d9f7"),i=a("80d2");const n=["sm","md","lg","xl"],o=(()=>n.reduce((e,t)=>(e[t]={type:[Boolean,String,Number],default:!1},e),{}))(),l=(()=>n.reduce((e,t)=>(e["offset"+Object(i["G"])(t)]={type:[String,Number],default:null},e),{}))(),c=(()=>n.reduce((e,t)=>(e["order"+Object(i["G"])(t)]={type:[String,Number],default:null},e),{}))(),d={col:Object.keys(o),offset:Object.keys(l),order:Object.keys(c)};function u(e,t,a){let r=e;if(null!=a&&!1!==a){if(t){const a=t.replace(e,"");r+="-"+a}return"col"!==e||""!==a&&!0!==a?(r+="-"+a,r.toLowerCase()):r.toLowerCase()}}const f=new Map;t["a"]=r["default"].extend({name:"v-col",functional:!0,props:{cols:{type:[Boolean,String,Number],default:!1},...o,offset:{type:[String,Number],default:null},...l,order:{type:[String,Number],default:null},...c,alignSelf:{type:String,default:null,validator:e=>["auto","start","end","center","baseline","stretch"].includes(e)},tag:{type:String,default:"div"}},render(e,{props:t,data:a,children:r,parent:i}){let n="";for(const s in t)n+=String(t[s]);let o=f.get(n);if(!o){let e;for(e in o=[],d)d[e].forEach(a=>{const r=t[a],s=u(e,a,r);s&&o.push(s)});const a=o.some(e=>e.startsWith("col-"));o.push({col:!a||!t.cols,["col-"+t.cols]:t.cols,["offset-"+t.offset]:t.offset,["order-"+t.order]:t.order,["align-self-"+t.alignSelf]:t.alignSelf}),f.set(n,o)}return e(t.tag,Object(s["a"])(a,{class:o}),r)}})},"7c73":function(e,t,a){var r,s=a("825a"),i=a("37e8"),n=a("7839"),o=a("d012"),l=a("1be4"),c=a("cc12"),d=a("f772"),u=">",f="<",h="prototype",g="script",p=d("IE_PROTO"),m=function(){},v=function(e){return f+g+u+e+f+"/"+g+u},b=function(e){e.write(v("")),e.close();var t=e.parentWindow.Object;return e=null,t},y=function(){var e,t=c("iframe"),a="java"+g+":";return t.style.display="none",l.appendChild(t),t.src=String(a),e=t.contentWindow.document,e.open(),e.write(v("document.F=Object")),e.close(),e.F},x=function(){try{r=new ActiveXObject("htmlfile")}catch(t){}x="undefined"!=typeof document?document.domain&&r?b(r):y():b(r);var e=n.length;while(e--)delete x[h][n[e]];return x()};o[p]=!0,e.exports=Object.create||function(e,t){var a;return null!==e?(m[h]=s(e),a=new m,m[h]=null,a[p]=e):a=x(),void 0===t?a:i.f(a,t)}},"90d8":function(e,t,a){var r=a("c65b"),s=a("1a2d"),i=a("3a9b"),n=a("ad6d"),o=RegExp.prototype;e.exports=function(e){var t=e.flags;return void 0!==t||"flags"in o||s(e,"flags")||!i(o,e)?t:r(n,e)}},ad6d:function(e,t,a){"use strict";var r=a("825a");e.exports=function(){var e=r(this),t="";return e.hasIndices&&(t+="d"),e.global&&(t+="g"),e.ignoreCase&&(t+="i"),e.multiline&&(t+="m"),e.dotAll&&(t+="s"),e.unicode&&(t+="u"),e.unicodeSets&&(t+="v"),e.sticky&&(t+="y"),t}},df75:function(e,t,a){var r=a("ca84"),s=a("7839");e.exports=Object.keys||function(e){return r(e,s)}},ea98:function(e,t,a){"use strict";var r=a("23e7"),s=a("e330"),i=a("1d80"),n=a("5926"),o=a("577e"),l=a("d039"),c=s("".charAt),d=l((function(){return"\ud842"!=="𠮷".at(-2)}));r({target:"String",proto:!0,forced:d},{at:function(e){var t=o(i(this)),a=t.length,r=n(e),s=r>=0?r:a+r;return s<0||s>=a?void 0:c(t,s)}})}}]);
//# sourceMappingURL=web:administracion:clases-servicios-rutas.475524bd.js.map