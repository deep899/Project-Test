"use strict";(globalThis["webpackChunkinfinity_brains"]=globalThis["webpackChunkinfinity_brains"]||[]).push([[8],{8:(t,s,e)=>{e.r(s),e.d(s,{default:()=>$});var i=e(9835),a=e(6970),n=e(4118),r=e.n(n);const o={class:"row",style:{"max-width":"100%",height:"fit-content"}},l={class:"container"},h=(0,i._)("h1",{class:"pl-5 pr-5 ml-5 mr-5 fw-300 text-danger-300 font-xssss mb-4",style:{"font-size":"2rem",width:"80%","font-weight":"400","line-height":"3rem","letter-spacing":"-0.01562em",color:"#00a00b !important"}}," Your Payment Was Successful ! ",-1),m={style:{width:"70%",color:"rgb(65, 65, 65)"},class:"pl-5 pr-5 ml-5 mr-5 fw-300 text-danger-300 font-xssss mb-4"},u={style:{border:"1px solid black !important",width:"50%","margin-top":"4rem",padding:"3px 3px 3px 3px","background-color":"#2f518a",color:"white"}},c={href:"/CreativeBuy",class:"fw-900",style:{"font-size":"1.2rem",color:"white"}},d={id:"Layer_2","data-name":"Layer 2",xmlns:"http://www.w3.org/2000/svg",width:"30",height:"22",style:{"padding-top":"5px"},viewBox:"0 0 339.195 250.71"},p=(0,i._)("path",{id:"Path_7376","data-name":"Path 7376",d:"M134.476,256.705a13.477,13.477,0,0,1-9.33-3.635L6.881,140.275a12.129,12.129,0,0,1,0-17.8L125.146,9.682a13.651,13.651,0,0,1,18.66,0,12.177,12.177,0,0,1,0,17.8L34.739,131.376l109.066,103.9a12.129,12.129,0,0,1,0,17.8A13.477,13.477,0,0,1,134.476,256.705Z",transform:"translate(-2.994 -5.996)",fill:"#fff"},null,-1),g=(0,i._)("path",{id:"Path_7377","data-name":"Path 7377",d:"M329.076,41.281H16.043a13.141,13.141,0,0,1,0-26.281H329.076a13.141,13.141,0,0,1,0,26.281Z",transform:"translate(-2.924 97.24)",fill:"#fff"},null,-1),f=[p,g],w=(0,i._)("div",{style:{"margin-top":"15%"}},null,-1);function _(t,s,e,n,p,g){const _=(0,i.up)("q-img"),y=(0,i.up)("center");return(0,i.wg)(),(0,i.iD)("div",o,[(0,i._)("div",l,[(0,i.Wm)(y,null,{default:(0,i.w5)((()=>[(0,i.Wm)(_,{src:r(),"spinner-color":"white",style:{height:"15rem",width:"15rem","margin-top":"4rem",filter:"brightness(-1000033333)"}})])),_:1}),(0,i.Wm)(y,null,{default:(0,i.w5)((()=>[h,(0,i._)("p",m," Your Payment of ₹"+(0,a.zw)(this.amount)+".00 has been SuccessFul Payment receipt sent to your email ",1),(0,i._)("div",u,[(0,i._)("a",c,[((0,i.wg)(),(0,i.iD)("svg",d,f)),(0,i.Uk)("  GO TO CREATIVE SCREENS ")])]),w])),_:1})])])}var y=e(9981),b=e.n(y);const x={name:"AfterBuyCreative",methods:{},mounted(){this.id=this.$route.params.id,this.user_id=this.$route.params.user_id,this.cegst=this.$route.params.cgst,this.segst=this.$route.params.sgst,this.discount=this.$route.params.discount,this.amount=this.$route.params.amount_pay,console.log("hello",this.cgst,this.amount),this.subscribe=JSON.parse(localStorage.getItem("copondetails")),this.subscribe?this.coupon_code=this.text:this.coupon_code="",b().post("https://api.infinitybrains.com/api/paymentstatusupdate",{user_id:this.user_id,payment_status:"1",product_id:this.id,cgst:this.cegst,sgst:this.sgst,discount:this.discount,amount:this.amount}).then((t=>{console.log(t.data)}))}};var v=e(1639),k=e(335),P=e(9984),C=e.n(P);const S=(0,v.Z)(x,[["render",_]]),$=S;C()(x,"components",{QImg:k.Z})}}]);