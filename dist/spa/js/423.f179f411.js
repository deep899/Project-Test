"use strict";(globalThis["webpackChunkinfinity_brains"]=globalThis["webpackChunkinfinity_brains"]||[]).push([[423],{209:(e,a,n)=>{n.r(a),n.d(a,{default:()=>y});var i=n(9835),o=n(6970),t=n(1957);const m={style:{height:"100vh"}},l={class:"mainContainer"},s={class:"headin-2"},d={class:"headin-4"},r={class:"container secondDiv",style:{"flex-direction":"column"}},u={id:"inputName"},c={for:"domain"},h=["placeholder"];function g(e,a,n,g,b,p){const N=(0,i.up)("Home");return(0,i.wg)(),(0,i.iD)(i.HY,null,[(0,i._)("div",null,[(0,i.Wm)(N)]),(0,i._)("div",m,[(0,i._)("div",l,[(0,i._)("div",{class:"container bgImgContainer",style:(0,o.j5)({"background-image":"url("+b.backgroundImageUrl+")"})},[(0,i._)("h2",s,(0,o.zw)(b.pageTitle),1),(0,i._)("h4",d,(0,o.zw)(b.pageSubtitle),1)],4),(0,i._)("div",r,[(0,i._)("h3",null,(0,o.zw)(b.domainNameHeading),1),(0,i._)("div",u,[(0,i._)("label",c,(0,o.zw)(b.domainNameLabel),1),(0,i.wy)((0,i._)("input",{"onUpdate:modelValue":a[0]||(a[0]=e=>b.domainName=e),type:"text",name:"domain",id:"domain",placeholder:b.domainNamePlaceholder},null,8,h),[[t.nr,b.domainName]])]),(0,i._)("button",{onClick:a[1]||(a[1]=(...e)=>p.continueToCategories&&p.continueToCategories(...e)),class:"btnContinue"},(0,o.zw)(b.continueButtonLabel),1)])])])],64)}n(9665);var b=n(9599),p=n(3100);const N={data(){return{pageTitle:"Your Site's, Your Rules",pageSubtitle:"Make your websites/App in 10 Minutes",domainNameHeading:"First Let's Give Your Domain Name",domainNameLabel:"Enter your Domain name",domainNamePlaceholder:"Domain name",continueButtonLabel:"Continue",domainName:"",backgroundImageUrl:n(949)}},computed:{...(0,p.rn)(["domainName"])},methods:{continueToCategories(){this.domainName?(this.$store.commit("setdomainName",this.domainName),this.$router.push({name:"selectyourtype"}),localStorage.setItem("domainname",this.domainName)):alert("Please enter your Domain name.")}},components:{Home:b.Z}};var _=n(1639);const v=(0,_.Z)(N,[["render",g],["__scopeId","data-v-4f0abff2"]]),y=v}}]);