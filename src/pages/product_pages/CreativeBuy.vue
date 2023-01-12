
<template>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.2/axios.min.js" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

  <!-- <img  style=" width: 10rem; margin-top: 80%; opacity: 0.5;" src="../../img/ScrollGroup7.png" /> -->



  <div class="text-center titlee name">Creatives</div>
<div class="row browse">

  <q-btn style="width: 12rem;" class="btnall" outline color="primary" ><i class="fa-solid fa-magnifying-glass  " ></i>  &nbsp;&nbsp;&nbsp; SEARCH </q-btn>
  <q-btn style="width: 12rem;" class="btnall"  outline color="primary" ><i class="fa-solid fa-file"></i> &nbsp;&nbsp;&nbsp; FILL YOUR DETAILS </q-btn>
  <q-btn style="width: 12rem;"  class="btnall" outline color="primary" ><i class="fa fa-download  " ></i> &nbsp;&nbsp;&nbsp; Download </q-btn>
</div>
  <div class="row  headers ">
      <div class="postimg text-center " v-for="item in creative1" v-bind:key="item.id">
                <div class="imgclassUper">
                          <!-- <i class="fa fa-download" >
                          <input  type="button"  value="Download" /></i> -->
                          <Button  onmouseover="" class="innerbutton"  @click="downloadImg()"><i class="fa fa-download"></i> &nbsp; Download</Button>
                </div>
                  <div class="imgclass">
                            <!-- <a id="myAnchor" :href="item.creative" download="w3logo8"> -->
                            <img  :src="item.creative" id="downloadimgs"  />

                            <!-- </a> -->
                </div>
      </div>




      </div>
            <div class="row browse">

            <q-btn style="width: 12rem;" class="btnall" outline color="primary" > &nbsp;&nbsp;&nbsp; LOAD MORE CREATIVE </q-btn>


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


  export default {

      name:'CreativeBuy',
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


      data(){
        return{

          creative1: [],
          // link: 'https://i.imgur.com/lF1GKDt.jpg',
        }
      },
        methods: {




                  downloadImg() {


                    axios({

                      //url: "https://i.imgur.com/lF1GKDt.jpg",
                      // url: "https://uatapi.infinitybrains.com/public/api/showcreatives",
                       url: "https://uatapi.infinitybrains.com/public/storage/creatives/BMdXNjJrzkZgr0jzzHAsX5xZfLsStg.jpg",
                      method: 'GET',
                      responseType: 'blob'
                      }).then((response) => {

                          const url = window.URL.createObjectURL(new Blob([response.data]));
                          const link = document.createElement("a");
                          link.href = url;
                          link.setAttribute("download","file.jpg");
                          document.body.appendChild(link);
                          link.click();
                      });

                    },



        },
      mounted(){

    //     app.use(function (req, res, next) {
    // //Enabling CORS
    // res.header("Access-Control-Allow-Origin", "*");
    // res.header("Access-Control-Allow-Methods", "GET,HEAD,OPTIONS,POST,PUT");
    // res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type,Accept, x-client-key, x-client-token, x-client-secret, Authorization");
    //   next();
    // });

        axios
                  .get('https://uatapi.infinitybrains.com/public/api/showcreatives')
                  .then((result) => {
                      this.creative1 = result.data.data;



                  });
      }
  }
</script>

<style>
.postimg .innerbutton:hover .downloadimg{

  filter: brightness(55%);

  /* color: black; */


}
/* all buton  */
.btnall{
  margin-left: 1%;
  margin-right: 1%;
}
/* all button  */

.titlee{

  margin-top: 12rem;
}
 .name {
      color: #2f518a;
      font-size: 3.5rem;
      text-transform: uppercase;

      grid-row: 1/4;
      font-family: Impact, Haettenschweiler, "Arial Narrow Bold", sans-serif;
  }
  .imgclass{

    align-items: center;
    justify-content: center;
  }
  /* .imgclassUper:hover .img{
    filter: brightness(55%);
  } */
  .imgclassUper{


    position: absolute;

    opacity: 0;
    z-index: 1;
    transition: 2sec ease;
    flex-direction: row;

  }


  .browse{
    grid-row: 2/4;
    margin-top: 5rem;
    margin-bottom: 2rem;
    align-items: center;
    justify-content: center;
  }
  .postimg:hover .imgclassUper{
    opacity: 1;
    transition: 2sec ease;

  }
  .postimg:hover .imgclassUper button{
    opacity: 1;
    transition: 2sec ease;
    width: 15vh;
    align-items: baseline;

  }

  .imgclassUper:hover .postimg {

    filter: brightness(55%);
  }
.imgclass:hover  {
  filter: brightness(55%);

}
 .imgclassUper:hover .imgclass {
  filter: brightness(55%);

}
.postimg .imgclassUper{

  align-content: center;
    justify-content: center;
    margin-left: 11vh;
    margin-top: 21vh;
    background-color: white;
    color: white;
}






/* this is img hight set  do not touch  */
.postimg img{
   width: 39vh;
  height: 30vh;
  padding-left: 1%;
  padding-right: 1%;
}
/* this is img hight set  do not touch  */
 /* this is header  */


.headers{
  justify-content: center;
  align-items: center;
}
  /* this is header  */


</style>
