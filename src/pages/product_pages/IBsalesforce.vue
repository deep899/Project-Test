<template>
  <!-- Slider Carousel -->
  <carousel />
  <!-- Carousel End Here -->
  <!-- OUR PRODUTCS -->

  <!-- OUR PRODUCTS END HERE -->

  <!-- WORK IN PROGRESS START HERE -->

  <!-- Work In Progress End Here -->

  <!-- Blacnk Background0-blue Start Here -->
  <div class="mainContainer">
    <!-- =======================main product section===================================== -->
    <div class="product">
      <!-- =======================main product Image section===================================== -->
      <div class="img">
        <img :src="list.product_image" style="width: 35rem" />
      </div>
      <!-- =======================main product Side part section===================================== -->
      <div class="sidePart">
        <div class="name">{{ list.name }}</div>
        <div class="info">
          {{ list.short_desc }}<br />
          <!-- <q-rating v-model="ratingModel" size="2em"  color="purple" disable /> -->
        </div>
        <div class="btn">Price : ₹ {{ list.price }}.00<br /></div>
        <!-- <div>
          <div>
            <a
              style="
                width: 150px;
                background-color: #1065b7;
                text-align: center;
                font-weight: 800;
                padding: 11px 0px;
                color: white;
                font-size: 12px;
                display: inline-block;
                text-decoration: none;
              "
              href="https://pmny.in/HI6LNrF8W8ZH"
            >
              Buy Now
            </a>
          </div>
        </div> -->
        <div class="q-pa-md q-gutter-sm">
          <q-btn label="BUY NOW" color="primary" @click="fixed = true" />
          <q-dialog v-model="fixed">
            <q-card style="width: 50rem">
              <q-card-section>
                <div class="text-h6">Buy Now</div>
              </q-card-section>

              <q-separator />

              <q-card-section
                style="max-height: 50vh; text-align: -webkit-center"
                class="scroll"
              >
                <div class="q-pa-md" style="max-width: 400px">
                  <q-form @submit="signInButtonPressed" class="q-gutter-md">
                    <q-input
                      filled
                      v-model="first_name"
                      label="First name *"
                      lazy-rules
                      :rules="[
                        (val) =>
                          (val && val.length > 0) || 'Please type something',
                      ]"
                    />
                    <q-input
                      filled
                      v-model="last_name"
                      label="Last name *"
                      lazy-rules
                      :rules="[
                        (val) =>
                          (val && val.length > 0) || 'Please type something',
                      ]"
                    />
                    <q-input
                      filled
                      v-model="email"
                      label="Email *"
                      lazy-rules
                      :rules="[
                        (val) =>
                          (val && val.length > 0) || 'Please type something',
                      ]"
                    />
                    <q-input
                      filled
                      type="number"
                      v-model="phone_no"
                      label="Phone no *"
                      lazy-rules
                      :rules="[
                        (val) =>
                          (val && val.length > 0) || 'Please type something',
                      ]"
                    />
                    <q-input
                      filled
                      v-model="address"
                      label="Address *"
                      lazy-rules
                      :rules="[
                        (val) =>
                          (val && val.length > 0) || 'Please type something',
                      ]"
                    />
                    <q-select
                      filled
                      v-model="country_id"
                      :options="country"
                      label="Country"
                    />
                    <q-select
                      filled
                      v-model="state_id"
                      :options="state"
                      label="Stat"
                    />
                    <q-select
                      filled
                      v-model="city_id"
                      :options="city"
                      label="City"
                    />
                    <q-input
                      filled
                      v-model="pincode"
                      label="Pincode *"
                      lazy-rules
                      :rules="[
                        (val) =>
                          (val && val.length > 0) || 'Please type something',
                      ]"
                    />
                    <q-input
                      filled
                      v-model="coupon_code"
                      label="Apply Coupon"
                    />
                    <q-input
                      filled
                      disable
                      v-model="amount_pay"
                      label="100000"
                      label-color="black"
                    />

                    <div>
                      <div>
                        <a
                          style="
                            width: 135px;
                            background-color: #1065b7;
                            text-align: center;
                            font-weight: 800;
                            padding: 11px 0px;
                            color: white;
                            font-size: 12px;
                            display: inline-block;
                            text-decoration: none;
                          "
                          href="https://pmny.in/FIYUkS9ttWZa"
                        >
                          Buy Now
                        </a>
                      </div>
                      <!-- <q-btn
                        label="Reset"
                        type="reset"
                        color="primary"
                        flat
                        class="q-ml-sm"
                        onclick="signInButtonPressed()"
                      /> -->
                    </div>
                  </q-form>
                </div>
              </q-card-section>
            </q-card>
          </q-dialog>
        </div>
      </div>
    </div>
    <!-- =======================discription section===================================== -->
    <div class="desc">{{ list.desc }}</div>
    <!-- <img src="../../img/Scroll Group 8.jpg" /> -->
    <!-- =======================demo image section===================================== -->
    <div class="demo"></div>
  </div>
  <div class="black-space-blue bg-indigo-8 q-mt-lg q-mb-md q-h-12"></div>
  <!-- Blacnk Background0-blue End Here -->

  <!-- Logo Image  -->

  <logoimageblack />

  <!-- Logo Image -->

  <!-- Link Mennu Contact Addreess -->
  <div class="row bg-indigo-8 justify-evenly">
    <!-- Infinit ABout -->
    <infinityabout :lorem="lorem" />

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
  <!-- PayU money payment form=============================================================================================== -->
</template>

<script>
// import { defineComponent } from 'vue'
import { ref, watch } from "vue";
import products from "components/Products.vue";
import carousel from "components/carousel.vue";
import workInprogress from "components/WorkInProgress.vue";
import logoimageblack from "components/logoimageBlack.vue";
import infinityabout from "components/InfinityAbout.vue";
import contactdetail from "components/ContactDetails.vue";
import expertservice from "components/ExpertService.vue";
import quicklink from "components/QuickLinks.vue";
import axios from "axios";
// import productDetails from "src/components/DetailsOfProduct.vue";
export default {
  name: "IBsalesforce",

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
      showProducts: true,
      id: "",
      disable: false,

      list: [],
      state: [],
      city: [],
      country: [],
      amount_pay: "",

      email: "",
      phone_no: "",
      first_name: "",
      last_name: "",
      address: "",
      pincode: "",
      coupon_code: "",
      country_id: "101",
      state_id: "",
      city_id: "",

      // =================================Payment Data================================

      // payuUrl: "https://test.payu.in/_payment",
      // mkey: "rjQUPktU",
      // saltKey: "e5iIg1jwi8",
      // surl: window.location.origin + "/home/User/Success",
      // furl: window.location.origin + "/home/User/Fail",
    };
  },

  Detailsunted() {
    this.showProducts = true;
  },

  setup() {
    const navPos = ref("bottom");
    const vertical = ref(false);
    watch(vertical, (val) => {
      navPos.value = val === true ? "right" : "bottom";
    });
    return {
      padding: ref(true),
      vertical,
      arrows: ref(true),
      navigation: ref(true),
      navPos,

      model: ref(null),

      fixed: ref(false),
      navigationPositions: [
        { value: "top", label: "top" },
        { value: "right", label: "right" },
        { value: "bottom", label: "bottom (default)" },
        { value: "left", label: "left" },
      ],
      slide: ref("style"),
      lorem:
        "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque voluptatem totam, architecto cupiditate officia rerum, error dignissimos praesentium libero ab nemo.",
    };
  },
  methods: {
    // makeid() {
    //   var text = "";
    //   var possible =
    //     "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    //   for (var i = 0; i < 20; i++)
    //     text += possible.charAt(Math.floor(Math.random() * possible.length));
    //   return text;
    // },
    // signInButtonPressed() {
    //   var data =
    //     this.mkey +
    //     "|" +
    //     this.txnid +
    //     "|" +
    //     this.amount_pay +
    //     "|" +
    //     this.productInfo +
    //     "|" +
    //     this.first_name +
    //     "|" +
    //     this.email +
    //     "|||||||||||";
    //   var sha512 = require("js-sha512");
    //   var salt = this.saltKey;
    //   var hash = sha512(data + salt);
    //   if (hash) {
    //     localStorage.setItem("hash", hash);
    //     localStorage.setItem("expireSession", "sesion12dgtdb");
    //   }
    //   // console.log(hash);
    //   // console.log(data);
    //   document.getElementById("hash").value = hash;
    //   document.getElementById("paymentForm").submit();
    // },
  },
};
</script>
<style>
.headingtag {
  text-align: center;
}
.mainContainer {
  display: grid;
  grid-template-rows: 20% 1fr 1fr 1fr;
  row-gap: 50px;
}
/* <!-- =======================main product section===================================== --> */
.product {
  grid-row: 2/3;
  display: grid;
  grid-template-columns: 10% 1fr 1fr 10%;
}

.img {
  grid-column: 2/3;
}
.sidePart {
  grid-column: 3/4;
  display: grid;
  grid-template-rows: 1fr 1fr 1fr;
  row-gap: 10px;
}

.name {
  color: #2f518a;
  font-size: 35px;
  text-transform: uppercase;

  grid-row: 1/2;
  font-family: Impact, Haettenschweiler, "Arial Narrow Bold", sans-serif;
}

.info {
  grid-row: 2/3;
  color: dimgray;
  font-size: 18px;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}

.btn {
  font-size: 18px;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  grid-row: 3/4;
}
/* <!-- =======================discription section===================================== --> */
.desc {
  grid-row: 3/4;
  margin-top: 35px;
  text-align: center;
  width: 70%;
  margin-left: 15%;
  font-size: 18px;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  /* display: flex;
  justify-items: center;
  align-items: center; */
}

/* <!-- =======================demo image section===================================== --> */
.demo {
  grid-row: 4/5;
}
</style>