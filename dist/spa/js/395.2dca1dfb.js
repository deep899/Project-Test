"use strict";(globalThis["webpackChunkinfinity_brains"]=globalThis["webpackChunkinfinity_brains"]||[]).push([[395],{395:(e,a,t)=>{t.r(a),t.d(a,{default:()=>k});var i=t(9835),o=t(6970);const s=e=>((0,i.dD)("data-v-423b08c7"),e=e(),(0,i.Cn)(),e),n=s((()=>(0,i._)("h1",{class:"title"},"Delicious Food",-1))),c=s((()=>(0,i._)("p",{class:"subtitle"},"Experience the Taste of Paradise",-1))),l={class:"client-reviews"},r=s((()=>(0,i._)("h2",{class:"section-title"},"Client Reviews",-1))),d={class:"review-card"},h={class:"review-text"},u={class:"review-author"},m={class:"container"},p=s((()=>(0,i._)("h2",{class:"section-title"},"Featured Dishes",-1))),b={class:"dish-card"},g=["src","alt"],w={class:"dish-name"},_={class:"dish-description"};function f(e,a,t,s,f,v){const y=(0,i.up)("Slide"),C=(0,i.up)("Carousel");return(0,i.wg)(),(0,i.iD)("div",null,[(0,i._)("header",null,[n,c,(0,i._)("label",{class:"cta-button",style:(0,o.j5)({backgroundColor:v.selectedColor})},"Order Now",4)]),(0,i._)("div",l,[r,(0,i.Wm)(C,{autoplay:!0,autoplaySpeed:4e3,infinite:!0,arrows:!0},{default:(0,i.w5)((()=>[((0,i.wg)(!0),(0,i.iD)(i.HY,null,(0,i.Ko)(f.clientReviews,(e=>((0,i.wg)(),(0,i.j4)(y,{key:e.id},{default:(0,i.w5)((()=>[(0,i._)("div",d,[(0,i._)("p",h,(0,o.zw)(e.text),1),(0,i._)("p",u,"- "+(0,o.zw)(e.author),1)])])),_:2},1024)))),128))])),_:1})]),(0,i._)("div",m,[p,(0,i.Wm)(C,{autoplay:!0,autoplaySpeed:4e3,infinite:!0,arrows:!0},{default:(0,i.w5)((()=>[((0,i.wg)(!0),(0,i.iD)(i.HY,null,(0,i.Ko)(f.dishes,(e=>((0,i.wg)(),(0,i.j4)(y,{key:e.id},{default:(0,i.w5)((()=>[(0,i._)("div",b,[(0,i._)("img",{src:e.image,alt:e.name,class:"dish-image"},null,8,g),(0,i._)("h3",w,(0,o.zw)(e.name),1),(0,i._)("p",_,(0,o.zw)(e.description),1)])])),_:2},1024)))),128))])),_:1})]),(0,i._)("footer",{style:(0,o.j5)({backgroundColor:v.selectedColor})},[(0,i._)("div",{class:"container",style:(0,o.j5)({backgroundColor:v.selectedColor})},[(0,i._)("p",{style:(0,o.j5)({backgroundColor:v.selectedColor})},"© 2023 infinitybrains.com. All rights reserved.",4)],4)],4)])}t(398);const v={data(){return{clientReviews:[{id:1,text:"Amazing food and great service! I keep coming back for more.",author:"John Doe"},{id:2,text:"The best pizza in town. I highly recommend it!",author:"Jane Smith"},{id:3,text:"I've never had sushi this fresh. It's a delight!",author:"Alice Johnson"},{id:4,text:"Their chocolate cake is a must-try. Heavenly!",author:"Bob Wilson"}],dishes:[{id:1,name:"Pasta Carbonara",description:"Creamy pasta with bacon and cheese.",image:"https://static.toiimg.com/thumb/84784534.cms?imgsize=468021&width=800&height=800"},{id:2,name:"Pizza",description:"Classic pizza with tomato, mozzarella, and basil.",image:"https://uatinfinitybackend.pizzahut.io/v1/content/en-in/in-1/images/deal/double-treat-box-ice-cream.9266b8899776fb8755c9262e84a5e2df.1.jpg"},{id:3,name:"Sushi Platter",description:"Fresh and delicious sushi selection.",image:"https://t4.ftcdn.net/jpg/06/05/83/35/360_F_605833578_EbcLZohjgPGAaRYUOrQF2Bn2DjApUedc.jpg"},{id:4,name:"Chocolate Cake",description:"Decadent chocolate cake with a rich flavor.",image:"https://mrbrownbakery.com/image/images/TXnSdEsXr1fMSXZSzgiVzTMJFs9Wi4PpJvvLKeNs.jpeg?p=med"}]}},computed:{selectedColor(){return this.$store.state.magaswala_color}},methods:{async handleSubdomain(){const e="https://api.infinitybrains.com/api";try{const a=window.location.hostname.split(".");console.log("hello",a[0]);const t=a[0],i=await fetch(`${e}/Searching?domain_name=${t}`),o=await i.json();this.$store.commit("setMagaswalaColor",o.data.color_select)}catch(a){console.error("Error fetching subcategory info:",a)}},extractSubdomain(e){const a=e.match(/^(?:https?:\/\/)?([^\/]+)\./);return a?a[1]:null},checkSubdomainOnLoad(){if(!this.$data.isHandleSubdomainExecuted){this.$data.isHandleSubdomainExecuted=!0;const e=window.location.href,a=this.extractSubdomain(e);a?(console.log(`Subdomain ${a} in URL ${e} exists!`),this.handleSubdomain()):console.error(`No subdomain found in URL ${e}`)}}},mounted(){this.checkSubdomainOnLoad()}};var y=t(1639);const C=(0,y.Z)(v,[["render",f],["__scopeId","data-v-423b08c7"]]),k=C}}]);