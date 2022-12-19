<template>
  <ServiceBanner />
  <serviceofcompanyabout />
  <ServiceSection />
  <contentwriting />
  <seo />
  <webdev />
  <appdev />
  <hybriddev />
  <uiux />

  <div class="black-space-blue bg-indigo-8 q-mt-lg q-mb-md"></div>
  <logoimageblack />
  <div class="row bg-indigo-8 justify-evenly">
    <!-- Infinit ABout -->
    <infinityabout :lorem="lorem" />

    <!-- End Infinity About -->

    <!-- COntact Details Start Here -->

    <contactdetail />

    <!-- Contact Details End here -->
    <!-- Expert Service HEre -->

    <expertservice />
    <!-- Expert Service End HEre -->

    <!-- Quick links Here -->
    <quicklink />
    <!-- Quick links End Here -->

    <div class="text-center text-white q-mt-md">
      <p>2022 copyright. All right Reserved</p>
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
        "We work with a variety of industries and global corporations, which is why our Portfolio consists of social media apps, digital marketing sites, and more! As a professional and dynamic company, we aim to provide excellent service to all our clients. A recent project we completed is a Digital Marketing website that contains everything a business website often longs for!Redesigning a website or creating your own app for your product everything will be done personalized. We value honesty, impartiality, and candor, with our partners, and our valuable customers. Life is too short to bother; Let’s have fun and learn. We do our best to be proud of our work!",
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
</style>
