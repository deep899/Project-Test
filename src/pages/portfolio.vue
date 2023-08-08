np<template>
  <banner />

  <!-- Softwares added Here  -->
  <h3 class="text-indigo-10 ourworktitle text-center">OUR WORK</h3>

  <!-- <div class="row flex-row">
    <div
      class="col justify-center"
      v-for="(prod, index) in softwaredata"
      :key="index"
    >
      <softwares :href="prod.href" :img="prod.img" :heading="prod.heading" />
    </div>
  </div> -->
  <div class="row" style="padding-left: 150px; padding-right: 150px">
    <div class="col-12 col-md">
      <q-card class="my-card" style="margin: auto">
        <q-img src="../img/rwl.png">
          <div class="absolute-bottom text-subtitle2 text-center">
            RESTROWORLD
          </div>
        </q-img>
      </q-card>
    </div>
    <div class="col-12 col-md">
      <q-card class="my-card" style="margin: auto">
        <q-img src="../img/rjl.png">
          <div class="absolute-bottom text-subtitle2 text-center">REDJINNI</div>
        </q-img>
      </q-card>
    </div>
    <div class="col-12 col-md">
      <q-card class="my-card" style="margin: auto">
        <q-img src="../img/rpl.png">
          <div class="absolute-bottom text-subtitle2 text-center">REDPRIX</div>
        </q-img>
      </q-card>
    </div>
  </div>
  <div class="row q-my-xl" style="padding-left: 150px; padding-right: 150px">
    <div class="col-12 col-md">
      <q-card class="my-card" style="margin: auto">
        <q-img src="../img/gj.png">
          <div class="absolute-bottom text-subtitle2 text-center">
            GARBA JOCKEY
          </div>
        </q-img>
      </q-card>
    </div>
    <div class="col-12 col-md">
      <q-card class="my-card" style="margin: auto">
        <q-img src="../img/hrmsl.png">
          <div class="absolute-bottom text-subtitle2 text-center">HRMS</div>
        </q-img>
      </q-card>
    </div>
    <div class="col-12 col-md">
      <q-card class="my-card" style="margin: auto">
        <q-img src="../img/ibs.png">
          <div class="absolute-bottom text-subtitle2 text-center">
            SALESFORCE
          </div>
        </q-img>
      </q-card>
    </div>
  </div>

  <div class="ourworktheory q-mt-lg row justify-center text-body1">
    <div class="col-md-8 col-sm-12">
      <!-- <p class="text-h4 text-center text-indigo-7">MISSION</p> -->
      <p>
        {{ lorem }}
      </p>
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
import banner from "components/portfoliobanner.vue";
import softwares from "components/softwares.vue";
import infinityabout from "components/InfinityAbout.vue";
import contactdetail from "components/ContactDetails.vue";
import expertservice from "components/ExpertService.vue";
import quicklink from "components/QuickLinks.vue";
import logoimageblack from "components/logoimageBlack.vue";

export default {
  name: "portfolio",
  components: {
    banner,
    softwares,
    infinityabout,
    contactdetail,
    expertservice,
    quicklink,
    logoimageblack,
  },
  data() {
    return {
      lorem:
        "We work  with a variety of industries and global corporations, which is why our Portfolio consists of social media apps, digital marketing sites, and more! As a professional and dynamic company, we aim to provide excellent service to all our clients. A recent project we completed is a Digital Marketing website that contains everything a business website often longs for!Redesigning a website or creating your own app for your product everything will be done personalized. We value honesty, impartiality, and candor, with our partners, and our valuable customers. Life is too short to bother; Let’s have fun and learn. We do our best to be proud of our work!",
      softwaredata: [
        {
          href: "/",
          heading: "This is card",
          img: "https://cdn.quasar.dev/img/parallax2.jpg",
        },
        {
          href: "/",
          heading: "This is card",
          img: "https://cdn.quasar.dev/img/parallax2.jpg",
        },
      ],
      mydata: [
        {
          heading: "WORK DIRECTORY",
          text1: "We Deliver Website,Mobile App,",
          text2: "Hybrid Apps, Software Digial Marketing,SAP,etc",
        },
      ],
    };
  },
};
</script>

<style >
.portfoliobanner {
  background: url("src/img/PORTFOLIO.jpg");
  background-size: cover;
}
.portfoliobanner {
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
