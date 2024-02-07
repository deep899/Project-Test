<template>
  <div class="main-Container1" style="margin-top: 0%">
    <div v-if="container1" class="container container1" style="width: 100%; margin-top: 5%;">
      <div class="row w-100">
        <div v-for="(item, index) in listdef" :key="item.id" style=" margin-bottom: 5%;"
          class="maincontainers prodImg col-6 col-sm-12 col-md-6 col-xss-12 w-100   ">
          <div class="row "
            v-if="item.name !== 'consultant panel' && item.name !== 'Make Your Website / App In 10 Minutes'" style="">
            <div class="col-4 imgcontainer " style="">
              <router-link :to="item.id">
                <!-- <img src="./../assets/new2023-background/HPH.jpg" alt=""> -->
                <img v-if="item.product_image" :src="item.product_image" alt="product image">
                <!-- <img else src="./../assets/" alt="product image"> -->
              </router-link>

            </div>
            <div class="col-8" style="padding: 1.5%; padding-top:0.2% ;"><span class="prodName">{{ item.name }} </span>
              <br />

              <p class="prodDis">{{ item.short_desc }}</p>
              <div v-if="index == 2" style="margin-top: 12%; ">


                <!-- <span class="prodAmount"
                  style="text-shadow: 1px 0 0 #012a71;">Price</span><br /><span class="prodAmount">
                  {{ this.formatNumber(item.price) }}
                </span> -->
                <router-link :to="item.id">
                  <span class="smallDis" style="font-size: 1.5rem;">Price : FREE FOREVER</span>
                </router-link>

              </div>
              <div v-else style="margin-top: 5%; ">

                <!-- <span class="prodAmount"
                  style="text-shadow: 1px 0 0 #012a71;">Price</span><br /><span class="prodAmount">{{
                                    this.formatNumber(5999) }}</span> -->
                <br />
                <!-- <span class="smallDis">Up to 10 employees after that 50
                  RS. Per employee per month.</span> -->
                <router-link :to="item.id">
                  <span class="smallDis" style="font-size: 1.5rem;">Price : FREE FOREVER</span>
                </router-link>
              </div>
            </div>


          </div>
        </div>


      </div>
      <div class="row">

        <div class="1 col-6">
          <div class="row" style="display: flex;align-items: center;justify-content: center;">

            <div class="col-8" style="padding-right: 5%;   display: flex; align-items: center;justify-content: center;">
              <router-link to="/10M_website/page">

                <img :src="reversedProductList[0].product_image" alt="">
              </router-link>
            </div>
          </div>
          <div class="row" style="display: flex;align-items: center;justify-content: center;">
            <div class="col-8" style="margin-top: 3%;  padding: 1.5%; padding-top:0.2% ;"><span class="prodName">{{
              reversedProductList[0].name }} </span>
              <br />
              <p class="prodDis">{{ reversedProductList[0].short_desc }}</p>
              <div style="margin-top: 3%;">
                <div class="row">
                  <div class="col-6">
                    <!-- <span class="prodAmount" style="text-shadow: 1px 0 0 #012a71;">Price
                    </span> -->
                    <br />
                    <!-- <span class="prodAmount">{{
                                          this.formatNumber(24999) }}</span> -->
                    <router-link to="/10M_website/page">
                      <span class="smallDis" style="font-size: 1.5rem;">Price : FREE FOREVER</span>
                    </router-link>
                    <br />
                  </div>
                  <div class="col-6">

                    <!-- <span class="prodAmount" style="text-shadow: 1px 0 0 #012a71;">Price</span><br /><span
                      class="prodAmount">{{
                                            this.formatNumber(9999) }}</span> -->

                  </div>

                  <!-- <span class="smallDis">Up to 10 employees after that 50
                    RS. Per employee per month.</span> -->
                </div>

                <br />
              </div>
            </div>



          </div>
        </div>



        <div class="2  col-6" style="margin-bottom: 5%;">
          <div class="row" style="display: flex;align-items: center;justify-content: center;">

            <div class="col-8" style="padding-right: 5%;   display: flex; align-items: center;justify-content: center;">
              <router-link :to="reversedProductList[1].id">

                <img :src="reversedProductList[1].product_image" alt="">
              </router-link>
            </div>
          </div>
          <div class="row" style="display: flex;align-items: center;justify-content: center;">
            <div class="col-8" style="margin-top: 3%;  padding: 1.5%; padding-top:0.2% ;"><span class="prodName">{{
              reversedProductList[1].name }}</span>
              <br />
              <p class="prodDis">{{ reversedProductList[1].short_desc }}</p>

              <div class="col-6" style="margin-top: 5%;">
                <!-- <span class="prodAmount" style="text-shadow: 1px 0 0 #012a71;">Price
                </span><br /> -->

                <!-- <span class="prodAmount">{{
                                  this.formatNumber(reversedProductList[1].price) }}</span> -->

                <router-link :to="reversedProductList[1].id"><span class="smallDis" style="font-size: 1.5rem;">Price :
                    FREE FOREVER</span></router-link>


                <!-- <br /><span class="smallDis">Up to 10 employees after that 50
                    RS. Per employee per month.</span> -->


              </div>
            </div>



          </div>
        </div>

      </div>

    </div>
    <div v-else class="container container2" style="width: 100%; margin-bottom: 30%">
      <div class="row w-100">
        <div v-for="(item, index) in listdef" :key="item.id"
          style="display: flex; align-items: center; justify-content: center ; margin-bottom: 10%;"
          class="maincontainers  col-12 col-sm-12 col-md-6 col-xss-12 w-100   ">
          <div class="row " style="">
            <div class="col-12" style="display: flex;align-items: center;justify-content: center;">
              <router-link :to="item.id" v-if="item.id !== '17'">
                <img :src="item.product_image" alt="">
              </router-link>
              <router-link v-else to="/10M_website/page">

                <img :src="item.product_image" alt="">
              </router-link>

            </div>
            <div class="col-12" style="padding: 1.5%; padding-top:0.2% ;"><span class="prodName">{{ item.name }} </span>
              <br />
              <p class="prodDis">{{ item.short_desc }}</p>
              <div style="margin-top: 5%;"> <span class="prodAmount"
                  style="text-shadow: 1px 0 0 #012a71;">Price</span><br /><span class="prodAmount">₹ 5,999.00/-</span>
                <br />
                <span class="smallDis">Up to 10 employees after that 50 RS. Per employee per month.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import { ref, onMounted, onUnmounted } from "vue";
import { useStore } from "vuex";

export default {
  data() {
    return {
      listdef: [],
      container1: false,
    };
  },
  setup() {
    const isVisible = ref(false);
    const store = useStore();

    onMounted(() => {
      isVisible.value = true;
      // Apply the lines of code when the component becomes visible
      store.commit("setBackGroundColor", "transparent");
      store.commit(
        "setimageSrc",
        `₹{window.location.origin}/img/Ib_logo.446e007b.png`
      );
      store.commit("changeColor", "white");
    });

    onUnmounted(() => {
      isVisible.value = false;
    });

    // ... Other component logic ...

    return {
      isVisible,
      // ... Other properties ...
    };
  },
  computed: {
    reversedProductList() {
      return this.listdef.slice().reverse();
    },
  },
  mounted() {
    // const store = userDetails();
    // store.commit('setBackGroundColor', 'transparent');
    // store.commit('setimageSrc', `₹{window.location.origin}/img/Ib_logo.446e007b.png`);
    this.getProductList();
    this.checkScreenSize();
    // Add an event listener to monitor window resize
    window.addEventListener("resize", this.checkScreenSize);
  },
  beforeDestroy() {
    // Remove the event listener when the component is destroyed
    window.removeEventListener("resize", this.checkScreenSize);
  },

  methods: {
    async getProductList() {
      const resultfinal = await axios.get(
        "https://api.infinitybrains.com/api/showproduct"
      );
      this.listdef = resultfinal.data.data;
    },
    checkScreenSize() {
      // Update the isAbove940 flag based on window width
      this.container1 = window.innerWidth > 940;
    },
    formatNumber(number) {
      number = number.toString().replace(/\D/g, "");
      let formattedNumber = "";
      let commaCount = 0;

      for (let i = number.length - 1; i >= 0; i--) {
        formattedNumber = number[i] + formattedNumber;
        commaCount++;

        if (commaCount === 3 && i > 0) {
          formattedNumber = "," + formattedNumber;
          commaCount = 0;
        }
      }

      return formattedNumber;
    },
  },
};
</script>

<style>
@keyframes fadeInFromTop {
  0% {
    opacity: 0;
    transform: translateY(-10px);
  }

  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes fadeInFromLeft {
  0% {
    opacity: 0;
    transform: translateX(-10px);
  }

  100% {
    opacity: 1;
    transform: translateX(0);
  }
}

/* Apply animations to rows based on index */
.row:nth-child(odd) {
  animation: fadeInFromTop 0.5s ease-in-out;
}

.row:nth-child(even) {
  animation: fadeInFromLeft 0.5s ease-in-out;
}

/* Media query for smaller screens */
@media (max-width: 940px) {

  /* Adjust the animation for smaller screens if needed */
  .row:nth-child(odd) {
    animation: fadeInFromLeft 0.5s ease-in-out;
  }

  .row:nth-child(even) {
    animation: fadeInFromTop 0.5s ease-in-out;
  }
}

/* Optional CSS styles */
.nameProduct {
  color: #012a71;
  color: #012a71;
  font-family: Impact, Bold, sans-serif;
  font-family: Impact, Haettenschweiler, "Arial Narrow Bold", sans-serif;
}

.firstDiv {
  width: 80%;
  height: 42.8vh;
  padding-left: 5%;
}

.secondImage {
  object-fit: contain;
  width: fit-content;
  height: 42.8vh;
  margin-left: 10%;
  max-width: 100%;
}

.secondDiv {
  align-items: center;
  padding-left: 8%;
  display: flex;
  justify-content: center;
  position: relative;
}

.nameSecond {
  font-size: 5vh;
  line-height: 4vh;
  display: inline;
  top: 0;
  max-width: 100%;
}

.firstCondition {
  display: flex;
  height: 70vh;
  align-items: center;
  justify-content: end;
}

.longDiscription {
  width: 95%;
  margin-top: 4.5%;
  font-size: 1.2vw;

  max-height: fit-content;
}

.price {
  font-size: 1.2vw;
  font-weight: 900 bolder;
  margin-top: -1.5%;
}

@media (max-width: 940px) {
  .longDiscription {
    width: 100%;
    margin-top: 4.5%;
    font-size: 4.3vw;

    max-height: fit-content;
  }

  .imag34 {
    display: none;
  }

  #firstCondition1 {
    height: 50vh;
  }

  .secondDiv {
    align-items: center;
    padding-left: 0%;
    display: flex;
    justify-content: center;
    position: relative;
  }

  .secondImage {
    margin-left: 0;
  }

  .firstDiv {
    width: 80%;
    height: 42.8vh;
    padding-left: 0%;
  }

  .nameSecond {
    font-size: 4.5vh;
    line-height: 4vh;
    display: inline;
    top: 0;
    max-width: 80%;
  }

  .row .col-md,
  .col {
    height: 50vh;
  }

  .price {
    font-size: 5.2vw;
    font-weight: 900 bolder;
    margin-top: -1.5%;
  }
}

.cross {
  position: relative;
  display: inline-block;
}

.cross::before,
.cross::after {
  content: "";
  width: 100%;
  position: absolute;
  right: 0;
  top: 50%;
}

.cross::before {
  border-bottom: 2px solid red;
  -webkit-transform: skewY(-10deg);
  transform: skewY(-10deg);
}

.cross::after {
  border-bottom: 2px solid red;
  -webkit-transform: skewY(10deg);
  transform: skewY(10deg);
}



/* neww design css */

.prodName {
  font-weight: 900;
  font-size: 2.5em;
  color: #012a71;
  text-shadow: 2px 0 0 #012a71;
}

.prodDis {
  font-size: 1.4em;
  width: 80%;


}

.prodAmount {
  font-weight: 900;
  font-size: 2em;
  color: #012a71;


}

.smallDis {
  color: #012a71;
  text-decoration: underline;
  font-weight: bold;
  font-size: 1.2em;


}

.imgcontainer {
  display: flex;
  align-items: center;
  justify-content: center;
}

.prodImg {
  display: flex;
}

.prodImg:last-child,
.imgcontainer:last-child {

  display: none;
  margin-bottom: 0%;

}

@media only screen and (max-width: 320px) {

  .prodImg:last-child,
  .imgcontainer:last-child {
    /* Override the previous styles for iPhone SE */
    /* You can define different styles here for iPhone SE */
    display: flex !important;
  }
}
</style>
