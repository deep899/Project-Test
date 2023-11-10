const subdomain = window.location.hostname.split('.');
console.log('hello', subdomain[0]);

const newSubdomain = 'gaurav'; // Define your custom subdomain here
// Check if the current subdomain is equal to your custom subdomain

if (subdomain[0] == localStorage.getItem('domainname')) {
  // Replace the subdomain with your custom subdomain
  subdomain[0] = newSubdomain;
  // alert("hell");
  // Reconstruct the URL with the updated subdomain
  // const updatedURL = window.location.protocol + '//' + subdomain.join('.') + ':' + window.location.port + window.location.pathname;

  // Get the current URL without the subdomain
  const currentURL = window.location.href.replace(subdomain[0] + '.', '');

  // Update the URL with the new subdomain
  const updatedURL = newSubdomain + '.' + currentURL;


  // Redirect to the updated URL
  // console.log(updatedURL);
  window.location.href = updatedURL;
}


// const routes2 = [

// ];


const routes1 = [

  {
    path: "/",
    component: () => import("layouts/MainLayout.vue"),
    children: [
      { path: "", component: () => import("pages/IndexPage.vue") },

      { path: "/Services", name: "Services", component: () => import("pages/Services.vue") },
      { path: "/contactus", name: "contactus", component: () => import("pages/contactus.vue") },
      { path: "/aboutus", name: "aboutus", component: () => import("pages/aboutus.vue") },
      { path: "/portfolio", name: "portfolio", component: () => import("pages/portfolio.vue") },
      { path: "/career", name: "career", component: () => import("pages/careerpage.vue") },

      {

        path: "/IbsfPrivacy", name: "privacy1",
        component: () => import("pages/product_pages/privercy1.vue"),
      },
      

      {

        path: "/:id", name: "AddToProduct",
        component: () => import("pages/product_pages/AddToProduct"),
        meta: {
          title: 'Product Page', // Set the title for SEO
          metaTags: [
            {
              name: 'Infinitybrains Product',
              content: 'This Products are company own product user can purchase and buy or shell this product by the vendor ',
            },
            // Add more meta tags as needed for SEO
          ],
        },
      },


      {
        path: "/AfterBuyCreative", name: "AfterBuyCreative",
        component: () => import("pages/product_pages/AfterBuyCreative.vue"),
      },
      {
        path: "/paymentForm/:id", name: "paymentForm",
        component: () => import("pages/product_pages/newPaymentForm.vue"),
      },
      {
        path: "/CreativeBuy", name: "CreativeBuy",
        component: () => import("pages/product_pages/CreativeBuy.vue"),
      }
      ,
      {
        path: "/downloadImg", name: "logoimg",
        component: () => import("pages/product_pages/downloadLogoImg.vue"),
      },
      {
        path: "home/User/Success", name: "success",
        component: () => import("pages/success.vue"),
      },
      {
        path: "/deletionPolicy", name: "deletionPolicy",
        component: () => import("./../deletionPolicy.vue"),
      },
      // {
      //   path: "/sitemap",name: "sitemap",
      //   component: () => import("./../../public/Sitemap.xml"),
      // },
    ],
  },
  {
    path: "/Food",
    name: "theam21",
    component: () => import("../Theme2/Food.vue"),
  },
  {
    path: "/textile",
    name: "theam22",
    component: () => import("./../../src/Theme2/Textile.vue"),
  },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: "/:catchAll(.*)*",
    component: () => import("pages/ErrorNotFound.vue"),
  },

  {
    path: "/10M_website/", // Default route for route2
    component: () => import("./../Theme1/Page"),
    children: [
      {
        path: "", // Empty path for the default child route
        name: "default", // Give it a name for easy navigation
        component: () => import("./../Theme1/Page"), // Use Page.vue as the default component
      },
    ],

  },
  {
    path: "/10M_website/page",
    name: "page",
    component: () => import("./../Theme1/Page"),
  },
  {
    path: "/10M_website/categories",
    name: "categories",
    component: () => import("./../Theme1/Categories"),
  },
  {
    path: "/10M_website/selectyourtype",
    name: "selectyourtype",
    component: () => import("./../Theme1/SelectYourType"),
    // props: true, // Allows passing route params as props to the component
  },
  {
    path: "/10M_website/pickdesign/:id",
    name: "pickdesign",
    component: () => import("./../Theme1/PickDesign"),
  },
  {
    path: "/10M_website/previewalltheme/:themeName",
    name: "previewalltheme",
    component: () => import("./../Theme1/PreviewAllTheme"),
    props: true,
  },
  {
    path: "/10M_website/previewalltheme/paymentscreen/:id",
    name: "paymentscreen",
    component: () => import("pages/product_pages/newPaymentForm.vue"),
  },
  
 
];

// Determine which routes to use based on the subdomain
// let selectedRoutes = [];
// console.log(window.location.hostname);

// if (window.location.hostname.includes(newSubdomain)) {
//   selectedRoutes = routes2;
//   console.log("Route1");
// } else {
//   selectedRoutes = routes1;
//   console.log("Route2");
// }

export default routes1;
