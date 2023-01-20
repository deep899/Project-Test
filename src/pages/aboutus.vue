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
        Breaking the industry stereotype and demonstrating measurable results. That's how Kamal Dhari executes digital business empowerment. Every effort at our organizational level has one goal. To add value to our client's business. We are a highly-rated agency on Upwork. Yet we get the bulk of our clients by referrals. Existing clients referring new leads to us is perhaps the only achievement we cherish. Market reputation is our biggest
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
    <infinityabout lorem="We work with a variety of industries and global corporations, which is why our Portfolio consists of social media apps, digital marketing sites, and more! As a professional and dynamic company, we aim to provide excellent service to all our clients. A recent project we completed is a Digital Marketing website that contains everything a business website often longs for!Redesigning a website or creating your own app for your product everything will be done personalized. We value honesty, impartiality, and candor, with our partners, and our valuable customers. Life is too short to bother; Let’s have fun and learn. We do our best to be proud of our work!" />

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
            "We, at InfinityBrains, endeavour to offer you the best solutions in order to acquire your maximum satisfaction. ",
          para2:
            "We are experts in offering effective information Technology We Have Experience in solving problems like web or software development etc",
          para3:
            "We Have Experience in solving problems like web or software development etc",
          para4:
            "Our experts handle your assigned projects prudently as well We Strive for perfectionism in this era of Technological",
          para5:
            "advancement, by providing the best plus affordable IT Services to numerous large as well as medium entrepreneurs ",
          para6:
            "Every day we become better & learn the new latest technologies in the market",
          para7:
            "InfinityBrains is a place built by dreamers to make your dreams come true",
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
.heading {
      color: #2f518a;
      font-size: 35px;
      text-transform: uppercase;

      grid-row: 1/2;
      font-family: Impact, Haettenschweiler, "Arial Narrow Bold", sans-serif;
  }
</style>
