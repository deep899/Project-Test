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
          2022 copyright. All right Reserved
        </p>
      </div>
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
        "Infinity Brains is an accredited IT Company, which is a venture of Redjinni Industries Pvt. & taking Projects from all over India, with The latest technologies & digitally Transforming all kind of business. We believe in building and Maintaining long term relationships With all our clients.",
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
          img: "",
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
