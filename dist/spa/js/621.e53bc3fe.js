"use strict";(globalThis["webpackChunkinfinity_brains"]=globalThis["webpackChunkinfinity_brains"]||[]).push([[621],{6551:(e,t,a)=>{a.r(t),a.d(t,{default:()=>v});var i=a(9835),o=a(6970),l=a(1957);const n=e=>((0,i.dD)("data-v-6e9b25e3"),e=e(),(0,i.Cn)(),e),s={class:"mainContainer"},r={class:"headin-2"},d={class:"headin-4"},c={class:"container secondDiv",style:{"flex-direction":"column"}},g=n((()=>(0,i._)("div",{class:"select-categories"},[(0,i._)("h3",{class:"heading-3"},"Select Your Categories"),(0,i._)("h6",{class:"heading-6"},"Tell Us What Would You Like To Accomplish With Your Websites")],-1))),u=["value","id","onChange"],h=["for"];function b(e,t,a,n,b,y){const m=(0,i.up)("Home"),p=(0,i.up)("router-link");return(0,i.wg)(),(0,i.iD)(i.HY,null,[(0,i._)("div",null,[(0,i.Wm)(m)]),(0,i._)("div",s,[(0,i._)("div",{class:"container bgImgContainer",style:(0,o.j5)({"background-image":"url("+b.backgroundImageUrl+")"})},[(0,i._)("h2",r,(0,o.zw)(b.pageTitle),1),(0,i._)("h4",d,(0,o.zw)(b.pageSubtitle),1)],4),(0,i._)("div",c,[g,(0,i._)("div",null,[(0,i._)("table",null,[(0,i._)("tr",null,[((0,i.wg)(!0),(0,i.iD)(i.HY,null,(0,i.Ko)(b.grid,((e,a)=>((0,i.wg)(),(0,i.iD)("td",{key:a,style:{width:"30vh","margin-bottom":"010%"}},[(0,i.wy)((0,i._)("input",{type:"radio",style:{},"onUpdate:modelValue":t[0]||(t[0]=e=>b.selectedCategory=e),value:e.id,id:e.id,onChange:t=>y.radioChanged(e)},null,40,u),[[l.G2,b.selectedCategory]]),(0,i._)("label",{for:e.id,class:"custom-checkbox"},(0,o.zw)(e.name),9,h)])))),128))])])]),(0,i.Wm)(p,{to:"/10M_website/pickdesign/"+b.selectedCategory,class:"btnContinue"},{default:(0,i.w5)((()=>[(0,i.Uk)((0,o.zw)(b.continueButtonLabel),1)])),_:1},8,["to"])])])],64)}a(9665);var y=a(9599),m=a(8292);const p={data(){return{pageTitle:"Your Site's, Your Rules",pageSubtitle:"Make your websites/App in 10 Minutes",continueButtonLabel:"Continue",businessName:"",backgroundImageUrl:a(949),grid:[[{id:"category1",label:"Sell Online"},{id:"category2",label:"Promote Myself"},{id:"category3",label:"Food And Beverage"}],[{id:"category4",label:"Write & Publish"},{id:"category5",label:"Informational"},{id:"category6",label:"Other"}]],selectedCategory:null}},methods:{radioChanged(e){console.log(`Selected Category: ${e.label}`)},continueToCategories(){this.selectedCategory?(this.$store.commit("setCategory_id",this.selectedCategory),localStorage.setItem("category_id",this.selectedCategory),this.$router.push({name:"pickdesign",params:{category:this.selectedCategory}})):alert("Please select a category before continuing.")}},mounted(){m.Z.get("https://api.infinitybrains.com/api/admin/catagories").then((e=>{console.log(e.data.data),this.grid=e.data.data})).catch((e=>{alert(e.response.data.message)}))},components:{Home:y.Z}};var C=a(1639);const _=(0,C.Z)(p,[["render",b],["__scopeId","data-v-6e9b25e3"]]),v=_}}]);