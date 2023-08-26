<template>
  <!-- Slider Carousel -->
  <carousel />
  <br />
  <!-- Carousel End Here -->
  <span class="OurTitle" style="/* border: solid; */"> OUR PRODUCT </span>

  <!-- OUR PRODUTCS -->
  <div v-show="showProducts">
    <products />
  </div>
  <!-- <div class="container">
      <div class="col">
        <div class="row col-mid-6 " style="float: right;">
          <img style="width: 400px; height:400px;" src="https://www.w3schools.com/html/img_girl.jpg">
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam distinctio, vitae, asperiores harum dolorem numquam ipsam doloribus aperiam ut sapiente voluptatum quisquam eligendi, fugiat in laborum quo perferendis expedita vero?</p>
          <img style="width: 400px; height:400px;" src="https://www.w3schools.com/html/img_girl.jpg">
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam distinctio, vitae, asperiores harum dolorem numquam ipsam doloribus aperiam ut sapiente voluptatum quisquam eligendi, fugiat in laborum quo perferendis expedita vero?</p>

          <img style="width: 400px; height:400px;" src="https://www.w3schools.com/html/img_girl.jpg">
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam distinctio, vitae, asperiores harum dolorem numquam ipsam doloribus aperiam ut sapiente voluptatum quisquam eligendi, fugiat in laborum quo perferendis expedita vero?</p>

          <img style="width: 400px; height:400px;" src="https://www.w3schools.com/html/img_girl.jpg">
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam distinctio, vitae, asperiores harum dolorem numquam ipsam doloribus aperiam ut sapiente voluptatum quisquam eligendi, fugiat in laborum quo perferendis expedita vero?</p>


        </div>
      
      </div>

  </div> -->

  <!-- OUR PRODUCTS END HERE -->

  <!-- WORK IN PROGRESS START HERE -->
  <!-- <div class="headingtag text-center" style="background-color: gray; height: fit-content; height: 2vh;">
    <h4
      class="product-heading namine font-weight-black text-indigo-8 "
      style="font-size: 3.5rem; color:  #012A71; font-family: Impact, Bold, sans-serif; "
      >
      OUR WORK IN PROGRESS
    </h4>
  </div> -->

  <div
    class="headingtag text-center"
    style="
      background-color: rgb(252, 252, 250);
      background: #fcfcfc 0% 0% no-repeat padding-box;
      height: 10vh;
      display: flex;
      align-items: center;
      justify-content: center;
    "
  >
    <span class="OurTitle" style="width: 100%; /* border: solid; */">
      OUR WORK IN PROGRESS
    </span>
  </div>
  <workInprogress />

  <!-- Work In Progress End Here -->
  <footer>
    <!-- Blacnk Background0-blue Start Here -->
    <h3 class="" style="width: 100%; background-color: #446cb1">&nbsp;</h3>
    <logoimageblack />

    <!-- Logo Image -->

    <!-- Link Mennu Contact Addreess -->
    <div class="q-pa-md bgclass">
      <div
        class="row justify-between items-start q-gutter-md q-mb-md"
        style="margin: 0 auto; max-width: 100%; width: 90%"
      >
        <!-- Infinit ABout -->
        <div class="col-sm-6 col-md-4 col-lg-2">
          <infinityabout :lorem="lorem" />
        </div>
        <!-- End Infinity About -->

        <!-- COntact Details Start Here -->
        <div class="col-sm-6 col-md-4 col-lg-2">
          <contactdetail />
        </div>
        <!-- Contact Details End here -->

        <!-- Expert Service HEre -->
        <div class="col-sm-6 col-md-4 col-lg-2">
          <expertservice />
        </div>
        <!-- Expert Service End HEre -->

        <!-- Quick links Here -->
        <div class="col-sm-6 col-md-4 col-lg-2">
          <quicklink />
        </div>
        <!-- Quick links End Here -->
      </div>

      <div class="row justify-center items-center text-white q-mt-lg">
        <div class="col-auto text-center">
          <p
            style="
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
  </footer>
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
        "We work  with a variety of industries and global corporations, which is why our Portfolio consists of social media apps, digital marketing sites, and more! As a professional and dynamic company, we aim to provide excellent service to all our clients. A recent project we completed is a Digital Marketing website that contains everything a business website often longs for!Redesigning a website or creating your own app for your product everything will be done personalized. We value honesty, impartiality, and candor, with our partners, and our valuable customers. Life is too short to bother; Let’s have fun and learn. We do our best to be proud of our work!",
    };
  },
};
</script>
<style>
.headingtag {
  text-align: center;
}

.namine {
  font-family: Impact, Haettenschweiler, "Arial Narrow Bold", sans-serif;
}
.nameProduct {
  color: #012a71;
  color: #012a71;
  font-family: Impact, Bold, sans-serif;
  font-family: Impact, Haettenschweiler, "Arial Narrow Bold", sans-serif;
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
.OurTitle {
  font-size: 3.5vw;
  margin-top: 0%;
  color: #012a71;
  font-family: Impact, Bold, sans-serif;
  background-color: #eeeeee57;
  align-items: center;
  display: flex;
  line-height: 7vw;
  justify-content: center;
}
.bgclass {
  background-image: url("./../img/bgok.jpg");
  background-repeat: no-repeat;
  background-position: top left;
  background-size: cover;
}
.q-carousel__slide {
  padding: 0;
}
@media (max-width: 940px) {
  .OurTitle {
    margin-top: -2%;
    font-family: Impact, Bold, sans-serif;
    font-size: 7vw;
    line-height: 10vw;
    background-color: #f5f5f570;
  }
}
</style>
