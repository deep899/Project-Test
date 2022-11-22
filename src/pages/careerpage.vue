<template>
  <banner
    :heading="mydata[0].heading"
    :text1="mydata[0].text1"
    :text2="mydata[0].text2"
  />

  <p class="q-mt-lg text-weight-bolder text-center text-indigo-7 text-h4">
    CAREER AT INFINITY BRAINS
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

  <p class="text-h4 text-center text-indigo-7 text-weight-bold">
    CURRENT OPENINGS
  </p>

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
import thoerysection from "components/theorysection.vue";
import banner from "components/banner.vue";
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
        "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque voluptatem totam, architecto cupiditate officia rerum, error dignissimos praesentium libero ab nemo",
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
          img: require("/src/img/career2.jpg"),
          heading: "About Us",
          para1:
            "We, at Inifnity Brains,endevor to offer you the best solutions in order to acquire your maximum satisfaction . ",
          para2:
            "We are experts in offering effective information Technology We Have Experience in solving problems like web or software development etc",
          para3:
            "We Have Experience in solving problems like web or software development etc",
          para4:
            "Our experts handle your assigned projects prudently as well We Strive for perfectionsim in this era of Technological",
          para5:
            "advancement,by providing best plus affordable IT Services to numerous large as well as medium entreprenuers ",
          para6:
            "Everydat we become better & learn the new latest technlogies in the market",
          para7:
            "Inifnity Brains is a place built by dreamers to make your dreams come   true",
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
