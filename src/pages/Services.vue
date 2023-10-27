<template>
  <ServiceBanner />
  <serviceofcompanyabout />
  <!-- <ServiceSection /> -->
  <webdev />
  <appdev />
  <hybriddev />
  <uiux />
  <contentwriting />
  <seo />
  <ServiceSection />
  

  <div class="black-space-blue bg-indigo-8 q-mt-lg q-mb-md"></div>
  <logoimageblack />

  <!-- Logo Image -->

  <!-- Link Mennu Contact Addreess -->
  <div class="q-pa-md bgclass">
    <div
      class="row justify-between items-start q-gutter-md q-mb-md"
      style="margin: 0 auto; max-width: 1920px; width: 84%"
    >
      <!-- Infinit ABout -->
      <div class="col-md-6 col-lg-2">
        <infinityabout :lorem="lorem" />
      </div>
      <!-- End Infinity About -->

      <!-- COntact Details Start Here -->
      <div class="col-md-6 col-lg-2">
        <contactdetail />
      </div>
      <!-- Contact Details End here -->

      <!-- Expert Service HEre -->
      <div class="col-md-6 col-lg-2">
        <expertservice />
      </div>
      <!-- Expert Service End HEre -->

      <!-- Quick links Here -->
      <div class="col-md-6 col-lg-2">
        <quicklink />
      </div>
      <!-- Quick links End Here -->
    </div>

    <div class="row justify-center items-center text-white q-mt-lg">
      <div class="col-auto text-center">
        <p
          style="
            top: 5672px;
            left: 750px;
            width: 421px;
            height: 34px;
            /* UI Properties */
            color: var(--unnamed-color-ffffff);

            font: normal normal 600 1.1rem/34px Nunito;
            letter-spacing: 0px;
            color: #ffffff;
            opacity: 1;
          "
        >
          2023 copyright. All right Reserved
        </p>
      </div>
    </div>
  </div>
</template>

<script>
import expertservice from "components/ExpertService.vue";
import quicklink from "components/QuickLinks.vue";
import ServiceBanner from "../components/servicebanner.vue";
import infinityabout from "components/InfinityAbout.vue";
import serviceofcompanyabout from "../components/serviceofcompanyabout.vue";
import ServiceSection from "../components/service_section.vue";
import contentwriting from "../components/contentwriting.vue";
import seo from "../components/seo.vue";
import webdev from "../components/webdev.vue";
import appdev from "../components/appdev.vue";
import hybriddev from "../components/hybriddev.vue";
import contactdetail from "components/ContactDetails.vue";
import uiux from "../components/uiux.vue";

import logoimageblack from "components/logoimageBlack.vue";
export default {
  setup() {
    return {
      lorem:
        "Infinity Brains is an accredited IT Company, which is a venture of Redjinni Industries Pvt. & taking Projects from all over India, with The latest technologies & digitally Transforming all kind of business. We believe in building and Maintaining long term relationships With all our clients.",
    };
  },
  components: {
    ServiceBanner,
    serviceofcompanyabout,
    ServiceSection,
    logoimageblack,
    contactdetail,
    expertservice,
    quicklink,
    infinityabout,
    contentwriting,
    seo,
    webdev,
    appdev,
    hybriddev,
    uiux,
  },

  mounted(){
    // console.clear();\
    const subdomain = window.location.hostname.split('.');
    console.log('hello' ,subdomain[0]);





  }
};
</script>
<style>
.service_section {
  background: url("~/src/img/banner_background.jpg");
  background-repeat: no-repeat;
  background-size: 100% 100%;
  background-position: center;
  background-attachment: fixed;
  object-fit: cover;
  height: 100vh;
}

@media (min-width: 768px) {
  .row.justify-between {
    justify-content: space-between;
  }
}
@media (max-width: 767px) {
  .row.justify-between {
    flex-wrap: wrap;
  }
}

.bgclass {
  background-image: url("./../img/bgok.jpg");
  background-repeat: no-repeat;
  background-position: top left;
  background-size: cover;
}
</style>
