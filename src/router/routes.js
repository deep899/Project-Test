const routes = [
  {
    path: "/",
    component: () => import("layouts/MainLayout.vue"),
    children: [
      { path: "", component: () => import("pages/IndexPage.vue") },
      { path: "/Services", component: () => import("pages/Services.vue") },
      { path: "/contactus", component: () => import("pages/contactus.vue") },
      { path: "/aboutus", component: () => import("pages/aboutus.vue") },
      { path: "/portfolio", component: () => import("pages/portfolio.vue") },
      { path: "/career", component: () => import("pages/careerpage.vue") },
      {
        path: "/festivalCreative",
        component: () => import("pages/product_pages/festivalCreative.vue"),
      },
      {
        path: "/hrms",
        component: () => import("pages/product_pages/hrms.vue"),
      },
      {
        path: "/IBsalesforce",
        component: () => import("pages/product_pages/IBsalesforce.vue"),
      },
      {
        path: "/Success",
        component: () => import("pages/success.vue"),
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
