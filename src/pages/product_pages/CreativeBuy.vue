
<template>

  <!-- <img  style=" width: 10rem; margin-top: 80%; opacity: 0.5;" src="../../img/ScrollGroup7.png" /> -->



  <div class="text-center titlee name">Creatives</div>



      <div class="postimg">

    <img src="../../img/img12.jpg"/>
    <img src="../../img/img12.jpg"/>
    <img src="../../img/img12.jpg"/>
    <img src="../../img/img12.jpg"/>
    <img src="../../img/img12.jpg"/>
    <img src="../../img/img12.jpg"/>
    <img src="../../img/img12.jpg"/>
    <img src="../../img/img12.jpg"/>
    <img src="../../img/img12.jpg"/>
    <img src="../../img/img12.jpg"/>
    <img src="../../img/img12.jpg"/>
    <img src="../../img/img12.jpg"/>
    <img src="../../img/img12.jpg"/>
    <img src="../../img/img12.jpg"/>
    <img src="../../img/img12.jpg"/>
    <img src="../../img/img12.jpg"/>

    <img src="../../img/img12.jpg"/>

  </div>


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
import {
  ref,
  watch
} from "vue";
import products from "components/Products.vue";
import carousel from "components/carousel.vue";
import workInprogress from "components/WorkInProgress.vue";
import logoimageblack from "components/logoimageBlack.vue";
import infinityabout from "components/InfinityAbout.vue";
import contactdetail from "components/ContactDetails.vue";
import expertservice from "components/ExpertService.vue";
import quicklink from "components/QuickLinks.vue";
import axios from "axios";

  export default {

      name:'CreativeBuy',
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
  }
</script>

<style>

.titlee{

  margin-top: 12rem;
}
 .name {
      color: #2f518a;
      font-size: 3.5rem;
      text-transform: uppercase;

      grid-row: 1/2;
      font-family: Impact, Haettenschweiler, "Arial Narrow Bold", sans-serif;
  }




.postimg{
  align-items: center;
  margin-left: 1vh ;
 /* width: 90%;
 margin-left: 9%; */
}
img{
  width: 32vh;
  height: 30vh;
  padding-left: 1px;
  padding-right: 1px;
  margin-left: 8vh;

  /* margin-left: 1%;
  margin-right: 1%; */
}

</style>
