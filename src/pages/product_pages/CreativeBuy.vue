
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

  <q-dialog
    v-model="alerted"
    persistent
    @update:visible="onDialogUpdate"
    style=""
  >
    <q-card style="max-width: 40rem; height: 37rem" class="cardd">
      <div
        class="Keyproduct"
        style="align-items: center; justify-content: center"
      >
        <center>
          <img
            style="margin-top: 5rem; width: 14rem"
            src="../../img/IB_KEY/keyy.svg"
          />

          <p class="typep">
            "Please enter the 16-digit Key Provided in your purchase
            confirmation email to acttivate your Digital Services."
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
              background-color: #2f518a;
              color: white;
              font-size: 1.2rem;
            "
            @click="Submitedkey()"
            >SUBMIT</q-btn
          >
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
      <div class="imgclassUper">
        <Button class="innerbutton" @click="ShereUrl(item.id)"
          ><i class="fa fa-download"></i> &nbsp; Download</Button
        >
      </div>

      <div class="imgclass">
        <!-- <img :src="logoImageUrl"> -->
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
      &nbsp;&nbsp;&nbsp; LOAD MORE CREATIVE
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

  <div class="black-space-blue bg-indigo-8 q-mt-lg q-mb-md q-h-12"></div>
  <!-- Blacnk Background0-blue End Here -->

  <!-- Logo Image  -->

  <logoimageblack />

  <!-- Logo Image -->

  <!-- Link Mennu Contact Addreess -->
  <div class="row bg-indigo-8 justify-evenly">
    <!-- Infinit ABout -->
    <infinityabout
      lorem="We work with a variety of industries and global corporations, which is why our Portfolio consists of social media apps, digital marketing sites, and more! As a professional and dynamic company, we aim to provide excellent service to all our clients. A recent project we completed is a Digital Marketing website that contains everything a business website often longs for!Redesigning a website or creating your own app for your product everything will be done personalized. We value honesty, impartiality, and candor, with our partners, and our valuable customers. Life is too short to bother; Let’s have fun and learn. We do our best to be proud of our work!"
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
      <p>2022 copyright. All right Reserved</p>
    </div>
  </div>
</template>

      <script>
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
    onDialogUpdate(val) {
      if (val === true) {
        // dialog has been opened
        this.$nextTick(() => {
          document.addEventListener("click", this.onDocumentClick);
        });
      } else {
        // dialog has been closed
        document.removeEventListener("click", this.onDocumentClick);
      }
    },
    onDocumentClick(event) {
      const dialogEl = this.$refs.dialog.$el;
      if (!dialogEl.contains(event.target)) {
        this.alerted = false;
      }
    },

    async ShereUrl(id) {
      await axios
        .get("https://uatapi.infinitybrains.com/public/api/showcreative/" + id)
        .then((result) => {
          // alert(result.data.data);
          // console.log(result.data.data);
          this.mainImageUrl =
            result.data.data.creative + "?not-from-cache-please";
          //  this.logoImageUrl = "https://thumbs.dreamstime.com/b/gradient-fire-phoenix-bird-simple-logo-design-black-bird-simple-logo-design-simple-gradient-fire-phoenix-bird-logo-158339374.jpg";
          // this.logoImageUrl=""
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
      link.download = "watermarked-image.jpg";
      link.href = dataUrl;
      document.body.appendChild(link);
      link.click();
      document.body.removeChild(link);
    },
    Submitedkey() {
      let keyvalue = document.getElementById("iban").value;

      axios
        .post(
          "https://uatapi.infinitybrains.com/public/api/checkkey/" + keyvalue
        )
        .then((result) => {
          this.alerted = false;
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
              "https://uatapi.infinitybrains.com/public/api/showcreatives?sort=id&order_by=desc"
            )
            .then((result) => {
              this.creative1 = result.data.data;
              this.id1 = result.data.data;
              this.alerted = false;
            })
            .catch((error) => {
              this.alerted = true;
            });
        })
        .catch((error) => {
          this.alerted = true;
        });
    },

    DownloadAllCreative() {
      axios
        .post(
          "https://uatapi.infinitybrains.com/public/api/Download-creative",
          {
            id: 1,
            // product_key: 'TJQGZcefRYU8KPFN',
            responseType: "blob",
          }
        )
        .then((response) => {
          console.log(response.data);
          const url = window.URL.createObjectURL(new Blob([response.data]));
          const link = document.createElement("a");
          link.href = url;
          link.setAttribute("download", "file.zip");
          document.body.appendChild(link);
          link.click();
        });
    },

    loadmore() {
      let pagescreative = 30;
      if ((pagescreative = 30)) {
        // pagescreative = 60;
        pagescreative = pagescreative + pagescreative;
      } else {
        pagescreative = pagescreative + pagescreative;
        pagescreative = 4000;
      }

      // alert(pagescreative);
      axios
        .get(
          "https://uatapi.infinitybrains.com/public/api/showcreatives?per_page=" +
            pagescreative +
            "&page=1"
        )
        .then((result) => {
          //console.log(result.data.data);
          // let secondpagecreative = result.data.data;

          this.creative1 = result.data.data;
          // console.log("im creative1",this.creative1);
          // let creative2  = [this.creative1,secondpagecreative];
          // console.log("im creative2",creative2.length);
          //console.log(this.creative1);
          //alert(creative2[1]);
          //this.creative1 = creative2;
        });
    },
    //    axios.get("https://uatapi.infinitybrains.com/public/api/showcreatives").;
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
          "https://uatapi.infinitybrains.com/public/api/showcreatives?search=" +
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
    //         "https://uatapi.infinitybrains.com/public/api/Download-creative/" +
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
    //   .get("https://uatapi.infinitybrains.com/public/api/showcreatives?sort=id&order_by=desc")
    //   .then((result) => {
    //     this.creative1 = result.data.data;
    //   });
  },
};
</script>

      <style>
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

.postimg:hover .imgclassUper button {
  opacity: 1;
  transition: 2sec ease;
  width: 15vh;
  align-items: baseline;
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
  margin-top: 21vh;
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
