<template>
  <!-- Slider Carousel -->
  <carousel />
  <!-- Carousel End Here -->
  <!-- OUR PRODUTCS -->

  <!-- OUR PRODUCTS END HERE -->

  <!-- WORK IN PROGRESS START HERE -->

  <!-- Work In Progress End Here -->

  <!-- Blacnk Background0-blue Start Here -->
  <div class="mainContainer">
    <!-- =======================main product section===================================== -->
    <div class="product">
      <!-- =======================main product Image section===================================== -->
      <div class="img">
        <h1>Image</h1>
      </div>
      <!-- =======================main product Side part section===================================== -->
      <div class="sidePart">
        <div class="name"></div>
        <div class="info"></div>
        <div class="btn"></div>
      </div>
    </div>
    <!-- =======================discription section===================================== -->
    <div class="desc"></div>
    <!-- =======================demo image section===================================== -->
    <div class="demo"></div>
  </div>
  <div style="background-color: #2f518a" class="bg-indigo-8 q-mt-lg q-mb-md q-h-12"></div>
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
      <p>2024 copyright. All right Reserved</p>
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
// import productDetails from "src/components/DetailsOfProduct.vue";
export default {
  name: "ProductDetails",

  components: {
    products,
    carousel,
    workInprogress,
    logoimageblack,
    infinityabout,
    contactdetail,
    expertservice,
    quicklink,
    // productDetails,
  },

  Detailsunted() {
    this.showProducts = true;
  },
  data() {
    return {
      showProducts: true,
      id: "",
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
        "We work  with a variety of industries and global corporations, which is why our Portfolio consists of social media apps, digital marketing sites, and more! As a professional and dynamic company, we aim to provide excellent service to all our clients. A recent project we completed is a Digital Marketing website that contains everything a business website often longs for!Redesigning a website or creating your own app for your product everything will be done personalized. We value honesty, impartiality, and candor, with our partners, and our valuable customers. Life is too short to bother; Let’s have fun and learn. We do our best to be proud of our work!",
    };
  },
};
</script>
<style>
.headingtag {
  text-align: center;
}

.mainContainer {
  display: grid;
  grid-template-rows: 1fr 1fr 1fr;
}

/* <!-- =======================main product section===================================== --> */
.product {
  grid-row: 1/2;
}

/* <!-- =======================discription section===================================== --> */
.desc {
  grid-row: 2/3;
}

/* <!-- =======================demo image section===================================== --> */
.demo {
  grid-row: 3/4;
}
</style>
