"use strict";(globalThis["webpackChunkinfinity_brains"]=globalThis["webpackChunkinfinity_brains"]||[]).push([[221],{2598:(e,a,t)=>{t.r(a),t.d(a,{default:()=>v});var l=t(9835),o=t(6970),i=t(1957);const n=e=>((0,l.dD)("data-v-4ab61a1c"),e=e(),(0,l.Cn)(),e),s={class:"mainContainer"},r={class:"headin-2"},c={class:"headin-4"},d={class:"container secondDiv",style:{"flex-direction":"column"}},u=n((()=>(0,l._)("div",{class:"select-categories"},[(0,l._)("h3",{class:"heading-3"},"Select Your Categories"),(0,l._)("h6",{class:"heading-6"},"Tell Us What Would You Like To Accomplish With Your Websites")],-1))),g={style:{width:"100%"}},b=["value","id","onChange"],h=["for"];function y(e,a,t,n,y,C){const m=(0,l.up)("Home");return(0,l.wg)(),(0,l.iD)(l.HY,null,[(0,l._)("div",null,[(0,l.Wm)(m)]),(0,l._)("div",s,[(0,l._)("div",{class:"container bgImgContainer",style:(0,o.j5)({"background-image":"url("+y.backgroundImageUrl+")"})},[(0,l._)("h2",r,(0,o.zw)(y.pageTitle),1),(0,l._)("h4",c,(0,o.zw)(y.pageSubtitle),1)],4),(0,l._)("div",d,[u,(0,l._)("div",g,[(0,l._)("table",null,[((0,l.wg)(!0),(0,l.iD)(l.HY,null,(0,l.Ko)(y.grid,((e,t)=>((0,l.wg)(),(0,l.iD)("tr",{key:t,class:"category-row"},[((0,l.wg)(!0),(0,l.iD)(l.HY,null,(0,l.Ko)(e,((e,t)=>((0,l.wg)(),(0,l.iD)("td",{key:t,class:"category-cell"},[(0,l.wy)((0,l._)("input",{type:"radio","onUpdate:modelValue":a[0]||(a[0]=e=>y.selectedCategory=e),value:e.id,id:e.id,onChange:a=>C.radioChanged(e)},null,40,b),[[i.G2,y.selectedCategory]]),(0,l._)("label",{for:e.id,class:"custom-checkbox"},(0,o.zw)(e.label),9,h)])))),128))])))),128))])]),(0,l._)("button",{onClick:a[1]||(a[1]=(...e)=>C.continueToCategories&&C.continueToCategories(...e)),class:"btnContinue"},(0,o.zw)(y.continueButtonLabel),1)])])],64)}t(9665);var C=t(9599);const m={data(){return{pageTitle:"Your Site's, Your Rules",pageSubtitle:"Make your websites/App in 10 Minutes",continueButtonLabel:"Continue",businessName:"",backgroundImageUrl:t(949),grid:[[{id:"category1",label:"Sell Online"},{id:"category2",label:"Promote Myself"},{id:"category3",label:"Food And Beverage"}],[{id:"category4",label:"Write & Publish"},{id:"category5",label:"Informational"},{id:"category6",label:"Other"}]],selectedCategory:null}},methods:{radioChanged(e){console.log(`Selected Category: ${e.label}`)},continueToCategories(){this.selectedCategory?this.$router.push({name:"pickdesign"}):alert("Please select a category before continuing.")}},components:{Home:C.Z}};var p=t(1639);const _=(0,p.Z)(m,[["render",y],["__scopeId","data-v-4ab61a1c"]]),v=_}}]);