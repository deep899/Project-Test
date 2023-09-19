const subdomain = window.location.hostname.split('.');
    console.log('hello' ,subdomain[0]);
    

const routes = [
  
  
  
  {
    path: "/",
    component: () => import("layouts/MainLayout.vue"),
    children: [
      { path: "", component: () => import("pages/IndexPage.vue") },

      { path: "/Services",name: "Services" ,component: () => import("pages/Services.vue") },
      { path: "/contactus", name: "contactus" , component: () => import("pages/contactus.vue") },
      { path: "/aboutus", name: "aboutus",  component: () => import("pages/aboutus.vue") },
      { path: "/portfolio",name: "portfolio", component: () => import("pages/portfolio.vue") },
      { path: "/career",name: "career", component: () => import("pages/careerpage.vue") },
      {

        path:"/IbsfPrivacy",name:"privacy1",
        component:() => import("pages/product_pages/privercy1.vue"),
      },
      {

        path:"/:id",name:"AddToProduct",
        component:() => import("pages/product_pages/AddToProduct"),
      },
      
      
      {
        path:"/AfterBuyCreative",name:"AfterBuyCreative",
        component:() => import("pages/product_pages/AfterBuyCreative.vue"),
      },
      {
        path:"/paymentForm/:id",name:"paymentForm",
        component:() => import("pages/product_pages/newPaymentForm.vue"),
      },
      {
        path:"/CreativeBuy",name:"CreativeBuy",
        component:() => import("pages/product_pages/CreativeBuy.vue"),
      }
      ,
      {
        path:"/downloadImg",name:"logoimg",
        component:() => import("pages/product_pages/downloadLogoImg.vue"),
      },
      {
        path: "home/User/Success",name: "success",
        component: () => import("pages/success.vue"),
      },
      {
        path: "/deletionPolicy",name: "deletionPolicy",
        component: () => import("./../deletionPolicy.vue"),
      },
      // {
      //   path: "/sitemap",name: "sitemap",
      //   component: () => import("./../../public/Sitemap.xml"),
      // },
    ],
  },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: "/:catchAll(.*)*",
    component: () => import("pages/ErrorNotFound.vue"),
  },
];

export default routes;
