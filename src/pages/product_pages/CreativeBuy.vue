<template>
<link href="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.2/axios.min.js" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link src="https://unpkg.com/vue@2" />
<!-- <img  style=" width: 10rem; margin-top: 80%; opacity: 0.5;" src="../../img/ScrollGroup7.png" /> -->

<div class="text-center titlee name">Creatives</div>
<div class="row browse">



     <div v-if="showButton">
    <q-btn style="width: 12rem;"  @click="showSearchbar" class="btnall" outline color="primary"><i class="fa-solid fa-magnifying-glass  "></i> &nbsp;&nbsp;&nbsp; SEARCH </q-btn>
  </div>


  <div v-else>
    <input type="text" style="margin-top: 1%;"  v-model="searchText" placeholder="Search Creative"
      class="quasar-searchbar" />
    <q-btn outline color="primary" style=" margin-top: -2.3rem; margin-right: 5%;  float: right;  "   @click="ginventext()"><i class="fa-solid fa-magnifying-glass  "></i> </q-btn>

    </div>
    <q-btn style="width: 12rem;" class="btnall" @click="alert = true" outline color="primary"><i class="fa-solid fa-file"></i> &nbsp;&nbsp;&nbsp; FILL YOUR DETAILS </q-btn>
    <q-dialog v-model="alert">
        <q-card style="max-width: 60rem;  ">
            <center>
                <h4 style=" margin-block-end:0%;   margin-top: 0%; font-size: x-large; width: 100%; background-color:#2f518a; color: white;">FIll YOUR COMPANY DETAILS </h4>
            </center>
            <div style="margin-top: 5%; display: flex;justify-content: center;">
                    <div class="row " style=" width: 90%; display: flex; align-items: center;">
                        <div class="row-1 col-6" style="grid-column: 2/3; ">
                            <h6 class="containstext" style=" grid-column: 1/2;">Your Company Logo</h6>
                            <!-- <label for="files" class="btn">Select Image</label> -->
                            <!-- <input id="files" placeholder="Your Company Logo" style="visibility:hidden;" type="file"> -->
                            <input type="file"  title="" accept="image/*"  />
                        </div>

                        <div class="row-1 col-6" >
                            <h6 class="containstext"   >Address</h6>
                            <input type="text" placeholder="Address" style=" font-size: 20px;" />
                        </div>

                        <div class="row-2 col-6" style="grid-column: 2/3; ">
                            <h6 class="containstext" style=" grid-column: 1/2;">Contact Number</h6>
                            <input type="text" placeholder="Contact Number" style=" font-size: 20px;"  />
                        </div>


                        <div class="row-2 col-6" >
                            <h6 class="containstext" style="" >Website</h6>
                            <input type="text" placeholder="Website" style=" font-size: 20px;"  />
                        </div>

                        <Button  style="background-color: #2f518a; color: white; width: 98%; padding: 7px 11px; margin-top: 2.5rem; margin-bottom  : 2.5rem;  "  >SAVE</Button>

                    </div>



            </div>


        </q-card>
    </q-dialog>
    <q-btn style="width: 12rem;" class="btnall" outline color="primary"><i class="fa fa-download  "></i> &nbsp;&nbsp;&nbsp; Download </q-btn>
</div>
<div class="row  headers ">
    <div class="postimg text-center " v-for="item in creative1" v-bind:key="item.id">

        <div class="imgclassUper" v-for="(grp, idx) in item.id" >

            <!-- <i class="fa fa-download" >
                          <input  type="button"  value="Download" /></i> -->
            <Button  class="innerbutton"  @click="downloadImg(idx)"><i class="fa fa-download"></i> &nbsp; Download</Button>

          </div>
        <div class="imgclass">
            <!-- <a id="myAnchor" :href="item.creative" download="w3logo8"> -->
            <img :src="item.creative" v-bind="creativeurls" id="downloadimgs" />

            <!-- </a> -->
        </div>
    </div>

</div>
<div class="row browse">

    <q-btn style="width: 12rem;" class="btnall" outline color="primary"> &nbsp;&nbsp;&nbsp; LOAD MORE CREATIVE </q-btn>

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
import products from "components/Products.vue";
import carousel from "components/carousel.vue";
import workInprogress from "components/WorkInProgress.vue";
import logoimageblack from "components/logoimageBlack.vue";
import infinityabout from "components/InfinityAbout.vue";
import contactdetail from "components/ContactDetails.vue";
import expertservice from "components/ExpertService.vue";
import quicklink from "components/QuickLinks.vue";
import axios from "axios";
import {
    ref
} from 'vue'
export default {

    name: 'CreativeBuy',
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
          showButton: true,
          searchText: '',

            searchValue: '',
            creative1: [],
            id:"",
            buttonindex:[]
            // link: 'https://i.imgur.com/lF1GKDt.jpg',

        }
    },

    setup() {
        return {
            alert: ref(false)
        }
    },

    //   setup () {
    //   return {
    //     alert: ref(false),

    //   }
    // },
    methods: {

      ginventext(){

        alert(this.searchText);


        axios
                  .get('https://uatapi.infinitybrains.com/public/api/showcreatives?search='+this.searchText)
                  .then((result) => {

                    console.log('this searchbar',result.data.data);

                      this.creative1 = result.data.data.creative;

                  })


      },
            showSearchbar() {
            this.showButton = false;
          },
          hideSearchbar() {
            this.showButton = true;
            this.searchValue = '';
          },


        downloadImg(idx) {

                 idx = idx+1;

                console.log("your button id",idx);
            axios({
                url: "https://uatapi.infinitybrains.com/public/api/Download-creative?id="+idx,
                method: 'POST',

                responseType: 'blob'
            }, {

            }).then((response) => {

                const url = window.URL.createObjectURL(new Blob([response.data]));
                const link = document.createElement("a");
                link.href = url;
                link.setAttribute("download", "Creative.jpg");
                document.body.appendChild(link);
                link.click();
            });

        },

    },

    mounted() {



        axios
            .get('https://uatapi.infinitybrains.com/public/api/showcreatives')
            .then((result) => {
                this.creative1 = result.data.data;
                this.id1 = result.data.data;
                console.log("yourn id",this.id1);
                console.log("yourn ", result.data.data);

            });
    }
}
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

input[type=text], select {
    margin-top: 0%;
  width: 95%;
  padding: 7px 14px;

  display: inline-block;
  border: 1px solid #ccc;
  /* border-radius: 4px; */
  box-sizing: border-box;
}

input[type=file], select {
    margin-top: 0%;
  width: 95%;
  /* padding: 12px 20px; */

    font-size: 14px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
}

 ::file-selector-button{

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

.containstext{
    margin-block-start: 3%;
    margin-block-end: 0%;

    color: #2f518a;
}
</style>
