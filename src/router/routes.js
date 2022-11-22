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
        path: "/festivalCreative",name: "festivalCreative",
        component: () => import("pages/product_pages/festivalCreative.vue"),
      },
      {
        path: "/HRMS",name: "hrms",
        component: () => import("pages/product_pages/hrms.vue"),
      },
      {
        path: "/Salesforce",name: "IBsalesforce",
        component: () => import("pages/product_pages/IBsalesforce.vue"),
      },
      {
        path: "home/User/Success",name: "Success",
        component: () => import("pages/Success.vue"),
      },
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
