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
        client's business. We are a highly-rated agency on Upwork. Yet we get
        the bulk of our clients by referrals. Existing clients referring new
        leads to us is perhaps the only achievement we cherish. Market
        reputation is our biggest
      </p>
    </div>
  </div>

  <div class="row q-mt-lg justify-around text-center">
    <div class="col-md-2 col-sm-12"><img src="~/src/img/pogo.png" /></div>
    <div class="col-md-2 col-sm-12"><img src="~/src/img/award.png" /></div>
    <div class="col-md-2 col-sm-12"><img src="~/src/img/tali.png" /></div>
    <div class="col-md-2 col-sm-12"><img src="~/src/img/money.png" /></div>
  </div>

  <div
    style="background-color: #2f518a"
    class="bg-indigo-8 q-mt-lg q-mb-md q-h-12"
  ></div>
  <!-- Blacnk Background0-blue End Here -->

  <!-- Logo Image  -->

  <logoimageblack />

  <!-- Logo Image -->

  <!-- Link Mennu Contact Addreess -->
  <div class="q-pa-md bgclass">
    <div
      class="row justify-between items-start q-gutter-md q-mb-md"
      style="margin: 0 auto; max-width: 1920px; width: 84%"
    >
      <!-- Infinit ABout -->
      <div class="col-md-6 col-lg-2">
        <infinityabout :lorem="lorem" />
      </div>
      <!-- End Infinity About -->

      <!-- COntact Details Start Here -->
      <div class="col-md-6 col-lg-2">
        <contactdetail />
      </div>
      <!-- Contact Details End here -->

      <!-- Expert Service HEre -->
      <div class="col-md-6 col-lg-2">
        <expertservice />
      </div>
      <!-- Expert Service End HEre -->

      <!-- Quick links Here -->
      <div class="col-md-6 col-lg-2">
        <quicklink />
      </div>
      <!-- Quick links End Here -->
    </div>

    <div class="row justify-center items-center text-white q-mt-lg">
      <div class="col-auto text-center">
        <p
          style="
            top: 5672px;
            left: 750px;
            width: 421px;
            height: 34px;
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
<style scoped>
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

.bgclass {
  background-image: url("./../img/bgok.jpg");
  background-repeat: no-repeat;
  background-position: top left;
  background-size: cover;
}
</style>
