<template>
  <banner
    :heading="mydata[0].bannerheading"
    :text1="mydata[0].text1"
    :text2="mydata[0].text2"
  />
  <thoerysection
    :src="img"
    :heading="mydata[0].heading"
    :para1="mydata[0].para1"
    :para2="mydata[0].para2"
    :para3="mydata[0].para3"
    :para4="mydata[0].para4"
    :para5="mydata[0].para5"
    :para6="mydata[0].para6"
    :para7="mydata[0].para7"
  />

  <ourvision />

  <div class="q-mt-lg row justify-center">
    <div class="col-md-8 col-sm-12">
      <p class="text-h4 text-center text-indigo-7">MISSION</p>
      <p>
        Breaking the industry stereotype and demonstrating measurable results.
        That's how Kamal Dhari executes digital business empowerment. Every
        effort at our organizational level has one goal. To add value to our
        client's business. We are a highly rated agency on Upwork. Yet we get
        bulk of our clients by referrals. Existing clients referring new leads
        to us is perhaps the only achievement we cherish. Market reputation is
        our biggest
      </p>
    </div>
  </div>

  <div class="row q-mt-lg justify-around text-center">
    <div class="col-md-2 col-sm-12"><img src="~/src/img/pogo.png" /></div>
    <div class="col-md-2 col-sm-12"><img src="~/src/img/award.png" /></div>
    <div class="col-md-2 col-sm-12"><img src="~/src/img/tali.png" /></div>
    <div class="col-md-2 col-sm-12"><img src="~/src/img/money.png" /></div>
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
import banner from "components/aboutusbanner.vue";
import ourvision from "components/ourvision.vue";
import infinityabout from "components/InfinityAbout.vue";
import contactdetail from "components/ContactDetails.vue";
import expertservice from "components/ExpertService.vue";
import quicklink from "components/QuickLinks.vue";
import logoimageblack from "components/logoimageBlack.vue";
import "../img/AboutUsBanner.jpg";
export default {
  components: {
    infinityabout,
    logoimageblack,
    contactdetail,
    expertservice,
    quicklink,
    banner,
    thoerysection,
    ourvision,
  },

  data() {
    return {
      mydata: [
        {
          bannerheading: "ABOUT INFINITY BRAINS",
          text1:
            "We are group of passionate people,who have come together with an  aim to ",
          text2:
            "create impactful and value-driven software solutions for global customers",
          img: "unsplash.com/720x450",
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
    };
  },
};
</script>

<style>
.aboutusbanner {
  /* background: url(https://source.unsplash.com/1000x750); */
  background: url("../img/AboutUsBanner.jpg");
  background-repeat: no-repeat;
  background-size: 100vw 100vh;
}
</style>
