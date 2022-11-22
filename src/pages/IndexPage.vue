<template>
  <!-- Slider Carousel -->
  <carousel />
  <!-- Carousel End Here -->
  <!-- OUR PRODUTCS -->
  <div v-show="showProducts">
    <div class="headingtag text-center">
      <h4
        class="product-heading font-weight-black text-indigo-8 text-weight-bold"
      >
        OUR PRODUCT
      </h4>
    </div>
    <products />
  </div>

  <!-- OUR PRODUCTS END HERE -->

  <!-- WORK IN PROGRESS START HERE -->
  <div class="headingtag text-center">
    <h4
      class="progress-title font-weight-black text-indigo-8 text-weight-bolder"
    >
      OUR WORK IN PROGRESS
    </h4>
  </div>

  <workInprogress />

  <!-- Work In Progress End Here -->

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
</template>

<script>
// import { defineComponent } from 'vue'
import { ref, watch } from "vue";
import products from "components/Products.vue";
import carousel from "components/carousel.vue";
import workInprogress from "components/WorkInProgress.vue";
import logoimageblack from "components/logoimageBlack.vue";
import infinityabout from "components/InfinityAbout.vue";
import contactdetail from "components/ContactDetails.vue";
import expertservice from "components/ExpertService.vue";
import quicklink from "components/QuickLinks.vue";
export default {
  components: {
    products,
    carousel,
    workInprogress,
    logoimageblack,
    infinityabout,
    contactdetail,
    expertservice,
    quicklink,
  },
  mounted() {
    this.showProducts = true;
  },
  data() {
    return {
      showProducts: true,
      items: [
        // {
        //   img: require("src/img/festival_creatives.png"),
        //   product_name: "FESTIVAL CREATIVES",
        //   prod_descr:
        //     "Aute nostrud est veniam qui do exercitation commodo consectetur.Ad nulla aute mollit mollit mollit elit ad voluptate. Adipisicing ad excepteur aliqua tempor dolor anim adipisicing nostrud amet fugiat minim dolor. Laborum adipisicing irure magna elit Lorem ex sit. Ullamco mollit eu quis ut dolor eiusmod amet nostrud id. Anim minim voluptate in reprehenderit magna do officia dolor",
        // },
        // {
        //   img: require("src/img/HRMS.png"),
        //   product_name: "HRMS",
        //   prod_descr:
        //     "Aute nostrud est veniam qui do exercitation commodo consectetur.Ad nulla aute mollit mollit mollit elit ad voluptate. Adipisicing ad excepteur aliqua tempor dolor anim adipisicing nostrud amet fugiat minim dolor. Laborum adipisicing irure magna elit Lorem ex sit. Ullamco mollit eu quis ut dolor eiusmod amet nostrud id. Anim minim voluptate in reprehenderit magna do officia dolor",
        // },
        // {
        //   img: require("src/img/salesforce.png"),
        //   product_name: "SALESFORCE",
        //   prod_descr:
        //     "Aute nostrud est veniam qui do exercitation commodo consectetur.Ad nulla aute mollit mollit mollit elit ad voluptate. Adipisicing ad excepteur aliqua tempor dolor anim adipisicing nostrud amet fugiat minim dolor. Laborum adipisicing irure magna elit Lorem ex sit. Ullamco mollit eu quis ut dolor eiusmod amet nostrud id. Anim minim voluptate in reprehenderit magna do officia dolor.",
        // },
      ],
    };
  },
  setup() {
    const navPos = ref("bottom");
    const vertical = ref(false);
    watch(vertical, (val) => {
      navPos.value = val === true ? "right" : "bottom";
    });
    return {
      padding: ref(true),
      vertical,
      arrows: ref(true),
      navigation: ref(true),
      navPos,
      navigationPositions: [
        { value: "top", label: "top" },
        { value: "right", label: "right" },
        { value: "bottom", label: "bottom (default)" },
        { value: "left", label: "left" },
      ],
      slide: ref("style"),
      lorem:
        "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque voluptatem totam, architecto cupiditate officia rerum, error dignissimos praesentium libero ab nemo.",
    };
  },
};
</script>
<style>
.headingtag {
  text-align: center;
}
</style>