<template>
  <banner

    :heading="mydata[0].heading"
    :text1="mydata[0].text1"
    :text2="mydata[0].text2"
  />

  <p class="q-mt-lg text-weight-bolder text-center text-indigo-7 text-h4">
    CAREERS AT INFINITY BRAINS
  </p>

  <thoerysection
    :img="theorydata[0].img"
    :para1="theorydata[0].para1"
    :para2="theorydata[0].para2"
    :para3="theorydata[0].para3"
    :para4="theorydata[0].para4"
    :para5="theorydata[0].para5"
    :para6="theorydata[0].para6"
    :para7="theorydata[0].para7"
  />



  <div class="q-ma-lg row justify-center">
    <div class="col-md-10 col-sm-12">
      <carrertable />
    </div>
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
import thoerysection from "components/theorysection1.vue";
import banner from "components/banner1.vue";
import ourvision from "components/ourvision.vue";
import infinityabout from "components/InfinityAbout.vue";
import contactdetail from "components/ContactDetails.vue";
import expertservice from "components/ExpertService.vue";
import quicklink from "components/QuickLinks.vue";
import logoimageblack from "components/logoimageBlack.vue";
import carrertable from "components/carrertable.vue";

export default {
  name: "careerpage",
  components: {
    infinityabout,
    logoimageblack,
    contactdetail,
    expertservice,
    quicklink,
    banner,
    thoerysection,
    ourvision,
    carrertable,
  },
  setup() {
    return {
      lorem:
        "We work with a variety of industries and global corporations, which is why our Portfolio consists of social media apps, digital marketing sites, and more! As a professional and dynamic company, we aim to provide excellent service to all our clients. A recent project we completed is a Digital Marketing website that contains everything a business website often longs for!Redesigning a website or creating your own app for your product everything will be done personalized. We value honesty, impartiality, and candor, with our partners, and our valuable customers. Life is too short to bother; Let’s have fun and learn. We do our best to be proud of our work!",
    };
  },
  data() {
    return {
      theorydata: [
        {
          text1:
            "We are group of passionate people,who have come together with an  aim to ",
          text2:
            "create impactful and value-driven software solutions for global customers",
          img:"",
          heading: "CAREER AT INFINITYBRAINS",
          para1:
            "There are many variations of passages of Lorem Ipsum available,but the majority have suffered. ",
          para2:
            "It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,",
          para3:
            "We Have Experience in solving problems like web or software development etc",
          para4:
            "It uses a dictionary of over 200 Latin words, combined with a",
          para5:
            "advancement, by providing the best plus affordable IT Services to numerous large as well as medium entrepreneurs ",

        },
      ],
      mydata: [
        {
          heading: "CAREER AT INFINITY BRAINS",
          text1: "Begin your career with infinity Brains",
          text2:
            "we offer the best industry experience & career opportunities to grow with us",
        },
      ],
    };
  },
};
</script>
<style>
.contactusbanner {
  background: url("src/img/careerpage.jpg");
  background-size: cover;
  width: 100%;
}
.center {
  padding-top: 170px;

  text-align: center;
}
</style>
