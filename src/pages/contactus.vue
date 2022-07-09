<template>
  <!-- Banner -->
  <!-- <div class="contactusbanner" style="height: 90vh">
    <p class="text-center center text-align-center text-h3 text-white">
      Contact Us
    </p>
    <p class="text-center text-h5 text-white">
      We will Always love to hear words from you ,
    </p>
    <p class="text-center text-h5 text-white">
      feeling pride to help you with Your needs
    </p>
  </div> -->
  <banner />

  <!-- Banner End -->

  <!-- Form and Image  -->

  <div class="row justify-evenly">
    <div
      class="col-md-6 col-sm-12 col-xs-12 center contactusformdiv"
      style="padding-top: 70px"
    >
      <p class="text-h4 text-indigo-7 text-center">GET IN TOUCH</p>
      <p class="text-indigo-7 text-center">
        Do You Have questions/queries, feel free to contact us Use the below
        form to contact us
      </p>
      <contactform />
    </div>
    <div class="col-md-6 col-sm-12 col-xs-12 center" style="padding-top: 50px">
      <img src="../img/ContactUs.jpg" style="width: 80%; height: 500px" />
    </div>

    <!-- Start google Map Integration -->
    <div class="row" style="margin: auto">
      <googlemaps />
    </div>
    <!-- End Google Map Integration -->

    <!-- Footer -->
    <!-- Blacnk Background0-blue Start Here -->

    <div class="black-space-blue bg-indigo-8 q-mt-lg q-mb-md q-h-12"></div>
    <!-- Blacnk Background0-blue End Here -->

    <!-- Logo Image  -->

    <logoimageblack />

    <!-- Logo Image -->

    <!-- Link Mennu Contact Addreess -->
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
    <!-- End Footer -->
  </div>
  <!-- ENd Form and Image  -->
</template>
<script>
import contactform from "../components/contactform.vue";
import googlemaps from "../components/googlemaps.vue";
import infinityabout from "components/InfinityAbout.vue";
import contactdetail from "components/ContactDetails.vue";
import expertservice from "components/ExpertService.vue";
import quicklink from "components/QuickLinks.vue";
import banner from "components/banner.vue";

export default {
  components: {
    banner,
    contactform,
    googlemaps,
    infinityabout,
    contactdetail,
    expertservice,
    quicklink,
  },
  setup() {
    return {
      lorem:
        "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque voluptatem totam, architecto cupiditate officia rerum, error dignissimos praesentium libero ab nemo",
    };
  },
};
</script>

<style>
.contactusbanner {
  /* background: url(https://source.unsplash.com/1000x750); */
  background: url("../img/ContactUsBanner.jpg");
  background-repeat: no-repeat;
  background-size: 100vw 100vh;
}
.contactusbanner {
  padding-top: 150px;

  text-align: center;
}
</style>
