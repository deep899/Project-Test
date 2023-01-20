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
    <q-btn  @click="DownloadAllCreative()"   style="width: 12rem;" class="btnall" outline color="primary"><i class="fa fa-download  "></i> &nbsp;&nbsp;&nbsp; Download All </q-btn>
</div>

<q-dialog v-model="alerted" style="">
        <q-card style="max-width: 40rem; height: 37rem;" class="cardd">
          <div  class="Keyproduct" style="align-items: center;justify-content: center; ">
             <center> <img style="margin-top: 5rem; width:14rem;" src="../../img/IB_KEY/keyy.svg"/>

             <p class="typep">

              "Please enter the 16-digit Key Provided in your purchase confirmation email to acttivate your Digital Services."
             </p>

            <input id="iban" required minlength="32" placeholder="xxxx xxxx xxxx xxxx"  maxlength="32"  type="text" name="iban"  @click="spacing()"/>
            <br/>
            <q-btn  style=" width:25rem ;max-width: 100%; background-color: #2f518a; color: white;   font-size: 1.2rem; " @click="Submitedkey()" >SUBMIT</q-btn>
          </center>
          </div>


        </q-card>
    </q-dialog>



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
<div class="row browse load" id="load1">

    <q-btn style="width: 12rem;" class="btnall" id="loadmoreCreative" :loading="loading[0]" outline color="primary" @click="simulateProgress(0)  , loadmore()"  > &nbsp;&nbsp;&nbsp; LOAD MORE CREATIVE </q-btn>

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

import { ref} from 'vue'
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
            buttonindex:[],
            result1:[],
            secondpagecreative:[],
            creative2:[]
            // link: 'https://i.imgur.com/lF1GKDt.jpg',
            ,idess:[],
            keyvalue:'',
            keyoriginalvalue:''


        }
    },

    setup() {


            const loading = ref([  false,  ])
    function simulateProgress (number) {
      // we set loading state
      loading.value[ number ] = true

      // simulate a delay
      setTimeout(() => {


        //alert('3 seconds have passed!');
        // anotherpageLoad();

        var divElement = document.getElementById('load1');

            // Get a reference to the parent element
            var parentElement = divElement.parentNode;

            // Remove the div element from its parent
            parentElement.removeChild(divElement);

         loading.value[ number ] = false
        // we're done, we reset loading state
      }, 30)

        }


        return {
          // creative1,
            alert: ref(false),
            alerted: ref(false),
         loading ,
         simulateProgress





        }
    },

    //   setup () {
    //   return {
    //     alert: ref(false),

    //   }
    // },
    methods: {
      Submitedkey(){
             let keyvalue = document.getElementById("iban").value;
                  // alert("hello");
                  //  keyvalue = this.input.value;
                       let keyoriginalvalue =  keyvalue.replace(/\s/g, '');

            },

        spacing(){

            var input = document.getElementById("iban");

                            input.onkeydown = function () {
                         if (input.value.length > 0) {

       if (input.value.length % 4 == 0) {
                  if(input.value.length <32 ){


                    input.value += "    ";
                      if(input.value.length  == 32 ){

                       //write here to complete 32 key pressed

                      }
                  }
        }

    }
}

        },


      DownloadAllCreative(){
        axios
                  .post('https://uatapi.infinitybrains.com/public/api/Download-creative', {
                      id:[1,2,3,4,5,6,7,8,9],
                      product_key: 'TJQGZcefRYU8KPFN',
                      responseType: 'blob'

                  },)
                  .then((response) => {
                    console.log(response.data);
                    const url = window.URL.createObjectURL(new Blob([response.data]));
                    const link = document.createElement('a');
                    link.href = url;
                    link.setAttribute('download', 'file.zip');
                    document.body.appendChild(link);
                    link.click();
                  });

        // axios({
        //         // url: 'https://uatapi.infinitybrains.com/public/api/Download-creative?id='+this.idess.id+'&product_key='+this.keyoriginalvalue,
        //           url: "https://uatapi.infinitybrains.com/public/api/Download-creative?id=2&product_key=TJQGZcefRYU8KPFN",

        //         method: 'POST',

        //         responseType: 'stream'
        //     }).then((response) => {

        //         const url = window.URL.createObjectURL(new Blob([response.data]));
        //         const link = document.createElement("a");
        //         link.href = url;
        //         link.setAttribute("download");
        //         document.body.appendChild(link);
        //         link.click();
        //     });

      },



      loadmore(){





        axios.get('https://uatapi.infinitybrains.com/public/api/showcreatives?page=2')
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



            })
          },
      //    axios.get("https://uatapi.infinitybrains.com/public/api/showcreatives").;
      //   //console.warn(result.data.data);
      //   // this.listdef1 = resultfinal1.data.data;
      //   //this.creative1 = resultfinal1.data.data;
      //   console.log(result1);
      //   alert(result1);
      // },



      ginventext(){

        //this alert search creative base alert(this.searchText);


        axios .get('https://uatapi.infinitybrains.com/public/api/showcreatives?search='+this.searchText)
                  .then((result) => {

                    console.log('this searchbar',result.data.data);

                      this.creative1 = result.data.data;

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

                axios.post('https://uatapi.infinitybrains.com/public/api/Download-creative', {
                      id:[1],
                      product_key: 'TJQGZcefRYU8KPFN',
                      responseType: 'blob'

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


      this.alerted = true;

        axios
            .get('https://uatapi.infinitybrains.com/public/api/showcreatives?page=1')
            .then((result) => {
                this.creative1 = result.data.data;
                this.id1 = result.data.data;
                let idess = result.data.data;

                // console.log("yourn ", result.data.data);

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
.Keyproduct{


  height: fit-content;

}
.cardd{
  margin-top: -1%;
  margin-left: -1%;
  background-image: url('../../img/IB_KEY/gt.png');

}

#iban{
  text-align: center;
  width: 26rem;
  max-width: 100%;
  font-size: 1.5rem;
  margin-bottom: 2rem;
  margin-top: 2rem;
  font-weight: bold;
}
.typep{

  color: #2f518a;
  font-size: 1.5rem;
  margin-top: 3rem;
  text-align: center;
  width: 80%;



}
</style>
