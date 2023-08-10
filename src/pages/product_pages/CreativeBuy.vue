
<template>
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.2/axios.min.js"
  />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
  />
  <link src="https://unpkg.com/vue@2" />
  <!-- <img  style=" width: 10rem; margin-top: 80%; opacity: 0.5;" src="../../img/ScrollGroup7.png" /> -->
  <div v-if="loading" class="loading-overlay">
    <q-spinner-gears color="white" size="80px" />
  </div>
  <div class="text-center titlee name">Creatives</div>
  <div class="row browse">
    <div v-if="showButton">
      <q-btn
        style="width: 12rem"
        @click="showSearchbar"
        class="btnall"
        outline
        color="primary"
        ><i class="fa-solid fa-magnifying-glass"></i> &nbsp;&nbsp;&nbsp; SEARCH
      </q-btn>
    </div>

    <div v-else>
      <input
        type="text"
        style="margin-top: 1%"
        v-model="searchText"
        placeholder="Search Creative"
        class="quasar-searchbar"
        @change="ginventext()"
      />
      <q-btn
        outline
        color="primary"
        style="margin-top: -2.3rem; margin-right: 5%; float: right"
        @click="ginventext()"
        ><i class="fa-solid fa-magnifying-glass"></i>
      </q-btn>
    </div>

    <q-btn
      @click="DownloadAllCreative()"
      style="width: 12rem"
      class="btnall"
      outline
      color="primary"
      ><i class="fa fa-download"></i> &nbsp;&nbsp;&nbsp; Download All
    </q-btn>
  </div>

  <q-dialog v-model="alerted" @update:model-value="dialogClosed">
    <q-card class="cardd">
      <div class="Keyproduct">
        <center>
          <img
            style="margin-top: 5rem; margin-bottom: 5%; width: 14rem"
            src="../../img/IB_KEY/keyy.svg"
          />
          <p class="typep">
            "Please enter the 16-digit Key Provided in your purchase
            confirmation email to activate your Digital Services."
          </p>
          <input
            id="iban"
            required
            minlength="32"
            placeholder="Enter Your Key"
            maxlength="32"
            type="text"
            name="iban"
            @click="spacing()"
          />
          <br />
          <q-btn
            style="
              width: 25rem;
              max-width: 100%;

              margin-bottom: 2%;
              background-color: #2f518a;
              color: white;
              font-size: 1.2rem;
            "
            @click="Submitedkey()"
          >
            SUBMIT
          </q-btn>
        </center>
      </div>
    </q-card>
  </q-dialog>
  <div class="row headers">
    <div
      class="postimg text-center flex"
      v-for="item in creative1"
      v-bind:key="item.id"
    >
      <!-- <h4 style="margin-left: 50%; margin-top: 40%; z-index: 5;">hello</h4> -->
      <h4 class="imgclassUper1 text-center" style="color: white">
        {{ item.name }}
      </h4>
      <div class="imgclassUper">
        <Button
          style="background-color: white; color: black"
          class="btn innerbutton"
          @click="ShereUrl(item.id)"
          ><i class="fa fa-download"></i> &nbsp; Download</Button
        >
      </div>

      <div class="imgclass" style="margin-left: 0%; z-index: 0">
        <img :src="item.creative" v-bind="creativeurls" id="downloadimgs" />
      </div>
    </div>

    <!-- {{ this.canvas }} -->
  </div>
  <div class="row browse load" id="load1">
    <q-btn
      style="width: 12rem"
      class="btnall"
      id="loadmoreCreative"
      :loading="loading[0]"
      outline
      color="primary"
      @click="loadmore()"
    >
      LOAD MORE CREATIVE
    </q-btn>
  </div>

  <!-- HereIsDownloadImageLogo -->
  <img
    v-html="userProvidedHtml"
    id="main-image"
    style="visibility: hidden; display: none"
    :src="mainImageUrl"
    crossorigin="anonymous"
  />
  <img
    id="logo-image"
    style="visibility: hidden; display: none"
    :src="logoImageUrl"
    crossorigin="anonymous"
  />
  <canvas id="canvas" style="visibility: hidden; display: none"></canvas>

  <!-- HereIsDownloadImageLogo -->

  <div
    style="background-color: #2f518a"
    class="bg-indigo-8 q-mt-lg q-mb-md q-h-12"
  ></div>
  <!-- Blacnk Background0-blue End Here -->

  <!-- Logo Image  -->

  <logoimageblack />

  <!-- Logo Image -->

  <!-- Link Mennu Contact Addreess -->
  <div class="row bg-indigo-8 justify-evenly">
    <!-- Infinit ABout -->
    <infinityabout
      lorem="Infinity Brains is an accredited IT Company, which is a venture of Redjinni Industries Pvt. & taking Projects from all over India, with The latest technologies & digitally Transforming all kind of business. We believe in building and Maintaining long term relationships With all our clients."
    />

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
      <p>2023 copyright. All right Reserved</p>
    </div>
  </div>
</template>

      <script>
import { saveAs } from "file-saver";
import products from "components/Products.vue";
import carousel from "components/carousel.vue";
import workInprogress from "components/WorkInProgress.vue";
import logoimageblack from "components/logoimageBlack.vue";
import infinityabout from "components/InfinityAbout.vue";
import contactdetail from "components/ContactDetails.vue";
import expertservice from "components/ExpertService.vue";
import quicklink from "components/QuickLinks.vue";
import axios from "axios";
import { createCanvas } from "canvas";

import { ref } from "vue";
export default {
  name: "CreativeBuy",
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

  data() {
    return {
      // imageUrl:"https://images.ctfassets.net/yadj1kx9rmg0/wtrHxeu3zEoEce2MokCSi/cf6f68efdcf625fdc060607df0f3baef/quwowooybuqbl6ntboz3.jpg",
      //   logoUrl:"https://images.ctfassets.net/yadj1kx9rmg0/wtrHxeu3zEoEce2MokCSi/cf6f68efdcf625fdc060607df0f3baef/quwowooybuqbl6ntboz3.jpg",
      showButton: true,
      searchText: "",

      searchValue: "",
      creative1: [],
      id: "",
      buttonindex: [],
      result1: [],
      secondpagecreative: [],
      creative2: [],
      // link: 'https://i.imgur.com/lF1GKDt.jpg',
      idess: [],
      keyvalue: "",
      keyoriginalvalue: "",
      // This Is The Creative Image DownloadUrls
      mainImageUrl: "",
      logoImageUrl: "",
      text1: "",
      text2: "",
      text3: "",
      DownloadCreativeName: "",
      AllCreativeUrl: [],
    };
  },

  setup() {
    const loading = ref([false]);

    function simulateProgress(number) {
      // we set loading state
      loading.value[number] = true;

      // simulate a delay
      setTimeout(() => {
        //alert('3 seconds have passed!');
        // anotherpageLoad();

        var divElement = document.getElementById("load1");

        // Get a reference to the parent element
        var parentElement = divElement.parentNode;

        // Remove the div element from its parent
        parentElement.removeChild(divElement);

        loading.value[number] = false;
        // we're done, we reset loading state
      }, 30);
    }

    return {
      // creative1,
      alert: ref(false),
      alerted: ref(false),
      loading,
      simulateProgress,
    };
  },

  methods: {
    redirect() {
      this.$router.push("/other-page");
    },
    submitKey() {
      // handle submit key logic
    },
    spacing() {
      // handle spacing logic
    },
    dialogClosed(visible) {
      if (!visible) {
        // dialog was closed, handle logic here
        this.$router.push("/13");
      }
    },
    async ShereUrl(id) {
      this.loading = true;
      await axios
        .get("https://api.infinitybrains.com/public/api/showcreative/" + id)
        .then((result) => {
          this.mainImageUrl =
            result.data.data.creative + "?not-from-cache-please";
          this.DownloadCreativeName = result.data.data.name;
        });

      const canvas = document.getElementById("canvas");
      canvas.width = 850;
      canvas.height = 920;
      const ctx = canvas.getContext("2d");

      // Load main image
      const mainImage = new Image();
      mainImage.crossOrigin = "anonymous";
      mainImage.src = this.mainImageUrl + "?not-from-cache-please";
      await new Promise((resolve) => (mainImage.onload = resolve));

      // Load logo image
      const logoImage = new Image();
      logoImage.crossOrigin = "anonymous";
      logoImage.src = this.logoImageUrl + "?not-from-cache-please";
      await new Promise((resolve) => (logoImage.onload = resolve));

      // Draw main image
      ctx.drawImage(mainImage, 0, 0, 850, 920);

      // Draw logo image as watermark
      const logoWidth = 100;
      const logoHeight = logoWidth * (logoImage.height / logoImage.width);
      // const padding = 10;
      // const x = canvas.width - logoWidth - padding;
      // const y = canvas.height - logoHeight - padding;
      const x = 20;
      const y = 20;
      ctx.globalAlpha = 1;
      ctx.drawImage(logoImage, x, y, logoWidth, logoHeight);

      // add text in image
      // Set font and text alignment
      ctx.font = "20px Arial";
      ctx.textAlign = "center";

      // Set positions for each text
      var x1 = canvas.width / 5;
      var x2 = canvas.width / 2;
      var x3 = (canvas.width * 3.5) / 4;
      var y1 = canvas.height - 25;

      // Fill text at each position
      ctx.fillText(this.text1, x1, y1);
      ctx.fillText(this.text2, x2, y1);
      ctx.fillText(this.text3, x3, y1);

      // add text in image

      // Convert canvas to data URL and download
      const dataUrl = canvas.toDataURL("image/jpeg");
      const link = document.createElement("a");
      link.download = this.DownloadCreativeName + ".jpg";
      link.href = dataUrl;
      document.body.appendChild(link);
      link.click();
      document.body.removeChild(link);
      this.loading = false;
    },
    Submitedkey() {
      let keyvalue = document.getElementById("iban").value;

      axios
        .post(
          "https://api.infinitybrains.com/public/api/checkkey/" + keyvalue
          // "U1E43IdtZ0kBCYzv"
        )
        .then((result) => {
          this.alerted = false;
          window.scrollTo(0, 50);
          this.logoImageUrl = result.data.data.company_logo;
          this.text11 = result.data.data.address;
          this.text22 = result.data.data.contact_number;
          this.text33 = result.data.data.website;

          if (this.text11 == null) {
            this.text1 = " ";
          } else {
            this.text1 = " Address :" + result.data.data.address;
          }
          if (this.text22 == null) {
            this.text2 = " ";
          } else {
            this.text2 = "PhNo. :" + result.data.data.contact_number;
          }
          if (this.text33 == null) {
            this.text3 = " ";
          } else {
            this.text3 = "Website :" + result.data.data.website;
          }

          axios
            .get(
              'https://api.infinitybrains.com/public/api/showcreatives?sort=id&order_by=desc&filter={"status":"1"}'
            )
            .then((result) => {
              this.creative1 = result.data.data;
              this.id1 = result.data.data;
              this.mainid = result.data.data[0].id;
              this.alerted = false;
              window.scrollTo(0, 50);
            })
            .catch((error) => {
              this.alerted = true;
            })
            .finally(() => {
              this.loading = false;
            });
        })
        .catch((error) => {
          this.alerted = true;
        });
    },

    DownloadAllCreative() {
      alert(this.mainid);
      let lesthenCreativeId = this.mainid - 15;
      alert(lesthenCreativeId);
      for (let i = this.mainid; i >= lesthenCreativeId; i--) {
        axios
          .get("https://api.infinitybrains.com/public/api/showcreative/" + i)
          .then((result) => {
            // console.log(result.data.data.creative);
            this.mainImageUrl1 =
              result.data.data.creative + "?not-from-cache-please";
            this.DownloadCreativeName1 = result.data.data.name;
            this.DownloadCreativePartII();
          });

        // if(i >=lesthenCreativeId){
        //  this.allcreativesDownloaded();
        // }
        // setTimeout(function(){}2000)
        setTimeout(function () {
          this.allcreativesDownloaded();
        }, 2000);
      }
    },
    async allcreativesDownloaded() {
      // alert();
      const fileNamePrefix = "All CreativeFile"; // replace with your desired filename prefix

      for (let i = 0; i < this.AllCreativeUrl.length; i++) {
        const response = await axios.get(this.AllCreativeUrl[i], {
          responseType: "blob",
        });
        const fileName = fileNamePrefix + (i + 1) + ".zip"; // construct filename with prefix and index
        saveAs(response.data, fileName);
      }
    },
    async DownloadCreativePartII() {
      // const AllCreativeUrl

      const canvas = document.getElementById("canvas");
      canvas.width = 850;
      canvas.height = 920;
      const ctx = canvas.getContext("2d");

      // Load main image
      const mainImage1 = new Image();
      mainImage1.crossOrigin = "anonymous";
      mainImage1.src = this.mainImageUrl1 + "?not-from-cache-please";
      await new Promise((resolve) => (mainImage1.onload = resolve));

      // Load logo image
      const logoImage1 = new Image();
      logoImage1.crossOrigin = "anonymous";
      logoImage1.src = this.logoImageUrl + "?not-from-cache-please";
      await new Promise((resolve) => (logoImage1.onload = resolve));

      // Draw main image
      ctx.drawImage(mainImage1, 0, 0, 850, 920);

      // Draw logo image as watermark
      const logoWidth = 100;
      const logoHeight = logoWidth * (logoImage1.height / logoImage1.width);
      // const padding = 10;
      // const x = canvas.width - logoWidth - padding;
      // const y = canvas.height - logoHeight - padding;
      const x = 20;
      const y = 20;
      ctx.globalAlpha = 1;
      ctx.drawImage(logoImage1, x, y, logoWidth, logoHeight);

      // add text in image
      // Set font and text alignment
      ctx.font = "20px Arial";
      ctx.textAlign = "center";

      // Set positions for each text
      var x1 = canvas.width / 5;
      var x2 = canvas.width / 2;
      var x3 = (canvas.width * 3.5) / 4;
      var y1 = canvas.height - 25;

      // Fill text at each position
      ctx.fillText(this.text1, x1, y1);
      ctx.fillText(this.text2, x2, y1);
      ctx.fillText(this.text3, x3, y1);

      // add text in image

      // Convert canvas to data URL and download
      const dataUrl = canvas.toDataURL("image/jpeg");
      const link = document.createElement("a");
      // link.download = this.DownloadCreativeName + ".jpg";
      link.download = this.DownloadCreativeName1 + ".jpg";
      link.href = dataUrl;

      // this.AllCreativeUrl.push(dataUrl);
      // console.log(this.AllCreativeUrl);
      // link.0........href = dataUrl;
      document.body.appendChild(link);
      link.click();
      document.body.removeChild(link);
    },

    loadmore() {
      let pages = 40;

      axios
        .get(
          "https://api.infinitybrains.com/public/api/showcreatives?per_page=" +
            pages +
            '&page=1&sort=id&order_by=desc&filter={"status":"1"}'
        )
        .then((result) => {
          this.creative1 = result.data.data;
        });
      if (pages == 40) {
        axios
          .get(
            'https://api.infinitybrains.com/public/api/showcreatives?per_page=500&page=1&page=1&sort=id&order_by=desc&filter={"status":"1"}'
          )
          .then((result) => {
            this.creative1 = result.data.data;
          });
      }
    },
    //    axios.get("https://api.infinitybrains.com/public/api/showcreatives").;
    //   //console.warn(result.data.data);
    //   // this.listdef1 = resultfinal1.data.data;
    //   //this.creative1 = resultfinal1.data.data;
    //   console.log(result1);
    //   alert(result1);
    // },

    ginventext() {
      //this alert search creative base alert(this.searchText);

      axios
        .get(
          "https://api.infinitybrains.com/public/api/showcreatives?search=" +
            this.searchText
        )
        .then((result) => {
          console.log("this searchbar", result.data.data);

          this.creative1 = result.data.data;
        });
    },
    showSearchbar() {
      this.showButton = false;
    },
    hideSearchbar() {
      this.showButton = true;
      this.searchValue = "";
    },

    // downloadImg(idx) {
    //   idx = idx + 1;

    //   console.log("your button id", idx);
    //   axios(
    //     {
    //       url:
    //         "https://api.infinitybrains.com/public/api/Download-creative/" +
    //         idx,
    //       method: "POST",

    //       responseType: "blob",
    //     },
    //     {}
    //   ).then((response) => {
    //     const url = window.URL.createObjectURL(new Blob([response.data]));
    //     const link = document.createElement("a");
    //     link.href = url;
    //     link.setAttribute("download", "Creative.jpg");
    //     document.body.appendChild(link);
    //     link.click();
    //   });
    // },
  },

  mounted() {
    this.alerted = true;

    // axios
    //   .get("https://api.infinitybrains.com/public/api/showcreatives?sort=id&order_by=desc")
    //   .then((result) => {
    //     this.creative1 = result.data.data;
    //   });
    this.allcreativesDownloaded();
  },
};
</script>

      <style>
.loading-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 50;
  background-color: rgba(0, 0, 0, 0.5);
  display: flex;
  justify-content: center;
  align-items: center;
}
.quasar-searchbar {
  width: 45rem;
  padding: 10px;
  font-size: 14px;
  border: 1px solid rgb(72, 68, 175);
  border-radius: 4px;
  background-color: #f8f8f8;
  border-color: #2f518a;
}

input[type="text"],
select {
  margin-top: 0%;
  width: 95%;
  padding: 7px 14px;

  display: inline-block;
  border: 1px solid #ccc;
  /* border-radius: 4px; */
  box-sizing: border-box;
}

input[type="file"],
select {
  margin-top: 0%;
  width: 95%;
  /* padding: 12px 20px; */

  font-size: 14px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
}

::file-selector-button {
  float: right;
  padding: 1em;
  margin-right: 0%;
  background-color: #2f518a;
  color: white;
}

.postimg .innerbutton:hover .downloadimg {
  filter: brightness(55%);

  /* color: black; */
}

/* all buton  */
.btnall {
  margin-left: 1%;
  margin-right: 1%;
}

/* all button  */

.titlee {
  margin-top: 12rem;
}

.name {
  color: #2f518a;
  font-size: 3.5rem;
  text-transform: uppercase;

  grid-row: 1/4;
  font-family: Impact, Haettenschweiler, "Arial Narrow Bold", sans-serif;
}

.imgclass {
  align-items: center;
  justify-content: center;
}

/* .imgclassUper:hover .img{
          filter: brightness(55%);
        } */
.imgclassUper {
  position: absolute;

  opacity: 0;
  z-index: 1;
  transition: 2sec ease;
  flex-direction: row;
}
.imgclassUper1 {
  position: absolute;

  opacity: 0;
  z-index: 1;
  transition: 2sec ease;
  flex-direction: row;
}

.browse {
  grid-row: 2/4;
  margin-top: 5rem;
  margin-bottom: 2rem;
  align-items: center;
  justify-content: center;
}

.postimg:hover .imgclassUper {
  opacity: 1;
  transition: 2sec ease;
}
.postimg:hover .imgclassUper1 {
  margin-left: 8vh;
  opacity: 1;
  transition: 2sec ease;
}
.postimg:hover .imgclassUper button {
  opacity: 1;
  transition: 2sec ease;
  width: 15vh;
  align-items: baseline;
  /* font-size: 1.5vw; */
}

.imgclassUper:hover .postimg {
  filter: brightness(55%);
}

.imgclass:hover {
  filter: brightness(55%);
}

.imgclassUper:hover .imgclass {
  filter: brightness(55%);
}

.postimg .imgclassUper {
  align-content: center;
  justify-content: center;
  margin-left: 11vh;
  margin-top: 22vh;
  background-color: white;
  color: white;
}

/* this is img hight set  do not touch  */
.postimg img {
  width: 39vh;
  height: 30vh;
  padding-left: 1%;
  padding-right: 1%;
}

/* this is img hight set  do not touch  */
/* this is header  */

.headers {
  justify-content: center;
  align-items: center;
}

/* this is header  */

.containstext {
  margin-block-start: 3%;
  margin-block-end: 0%;

  color: #2f518a;
}

.Keyproduct {
  height: fit-content;
}

.cardd {
  margin-top: -1%;
  margin-left: -1%;
  background-image: url("../../img/IB_KEY/gt.png");
}

#iban {
  text-align: center;
  width: 26rem;
  max-width: 100%;
  font-size: 1.5rem;
  margin-bottom: 2rem;
  margin-top: 2rem;
  font-weight: bold;
}

.typep {
  color: #2f518a;
  font-size: 1.5rem;
  margin-top: 3rem;
  text-align: center;
  width: 80%;
}
</style>
qa