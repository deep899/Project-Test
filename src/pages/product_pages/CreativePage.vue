<!-- This Page Text element use as a CoupenCode Text = CoupenCode -->
<template>
  <!-- Slider Carousel -->

  <!-- <img src="../../assets/img/bener.jpg" alt="" style="width: 100%; height: 25rem;"> -->
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
        <img :src="products.product_image" style="width: 35rem" />
      </div>
      <!-- =======================main product Side part section===================================== -->
      <div class="sidePart">
        <div class="name">{{ products.name }}</div>
        <div class="info">
          {{ products.short_desc }}<br />
          <!-- <q-rating v-model="ratingModel" size="2em"  color="purple" disable /> -->
        </div>
        <div class="btn" style="text-decoration: line-through">
          Price : ₹ {{ products.price }}.00<br />
        </div>
        <div
          class=""
          style="
            font-size: 18px;
            font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif;
          "
        >
          Price : ₹ {{ this.coupon_codePrice }}.00<br />
        </div>
        <div class="q-pa-md q-gutter-sm">
          <q-btn label="Buy me" color="primary" @click="inception = true" />
          <router-link to="/CreativeBuy">
            <q-btn
              style="margin-top: 1%"
              label="ALREADY PURCHESED ?"
              outline
              color="primary"
              @click=""
            />
          </router-link>
          <div style="margin-top: 15%"></div>

          <q-dialog v-model="inception">
            <q-card style="max-width: 50%">
              <q-card-section>
                <div class="text-h6">
                  Buy Now
                  <p
                    style="
                      float: right;
                      font-size: 70%;
                      margin-right: 5%;
                      color: red;
                    "
                  >
                    {{ this.MainErrorOfForm }}
                  </p>
                </div>
              </q-card-section>

              <q-card-section class="q-pt-none">
                <q-card-section
                  style="max-height: 50vh; text-align: -webkit-center"
                  class="scroll"
                >
                  <div class="q-pa-md" style="max-width: 400px">
                    <q-form
                      class="q-gutter-md"
                      @submit.prevent="SelectPaymentGatewayoption()"
                    >
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
                      <q-input filled v-model="B_Name" label="Business Name " />
                      <q-input
                        filled
                        v-model="B_Gst_N"
                        label="Business Gst Number "
                      />
                      <q-input
                        filled
                        v-model="S_Name"
                        label="SalesManager Name "
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
                        maxlength="10"
                        v-model="mobile_no"
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
                      <q-input
                        filled
                        v-model="Website"
                        label="Web Site *"
                        lazy-rules
                        :rules="[
                          (val) =>
                            (val && val.length > 0) || 'Please type something',
                        ]"
                      />

                      <q-file
                        filled
                        v-model="CompanyImage"
                        label="Company Logo"
                      >
                        <template v-slot:prepend>
                          <q-icon name="cloud_upload" />
                        </template>
                      </q-file>

                      <select
                        style="width: 95%; height: 48px; font-size: 1rem"
                        class="form-select"
                        aria-required="true"
                        aria-invalid="false"
                        v-model="country_id"
                        @change="getState()"
                        required
                      >
                        <option value="" disabled selected>Country</option>
                        <option
                          v-for="country in list"
                          :value="country.id"
                          v-bind:key="country.id"
                        >
                          {{ country.name }}
                        </option>
                      </select>

                      <select
                        style="width: 95%; height: 48px; font-size: 1rem"
                        class="form-select"
                        aria-required="true"
                        aria-invalid="false"
                        v-model="state_id"
                        @change="getCity()"
                        required
                      >
                        <option value="" disabled selected>State</option>
                        <option
                          v-for="item in state"
                          :value="item.id"
                          v-bind:key="item.id"
                        >
                          {{ item.name }}
                        </option>
                      </select>

                      <select
                        style="width: 95%; height: 48px; font-size: 1rem"
                        class="form-select"
                        aria-required="true"
                        aria-invalid="false"
                        v-model="city_id"
                        required
                      >
                        <option value="" disabled selected>City</option>
                        <option
                          v-for="item in city"
                          :value="item.id"
                          v-bind:key="item.id"
                        >
                          {{ item.name }}
                        </option>
                      </select>

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
                      <!-- <select
                        style="width: 95%; height: 48px; font-size: 1rem"
                        class="form-select"
                        aria-required="true"
                        aria-invalid="false"
                        id="optionsOfcode"
                        required
                      >
                        <option value="" disabled selected>Promocode</option>
                        <option
                          v-for="item in optionse"
                          :value="item.code"
                          v-bind:key="item.id"
                        >
                          {{ item.code }}
                        </option>
                      </select> -->
                      <q-input
                        filled
                        v-model="CouponCode"
                        label="Coupon Code "
                        style=""
                      />
                      <q-banner color="green" v-if="couponCodeSuccess">
                        {{ couponCodeSuccess }}
                      </q-banner>
                      <q-btn
                        color="primary"
                        style="width: 95%"
                        label="Apply"
                        @click="getDiscount()"
                      />
                      <q-input
                        filled
                        disable
                        v-model="final_amount"
                        label="Price : "
                        label-color="black"
                      />
                      <q-input
                        filled
                        disable
                        v-model="sgst"
                        label="SGST : "
                        label-color="black"
                      />
                      <q-input
                        filled
                        disable
                        v-model="cgst"
                        label="CGST : "
                        label-color="black"
                      />
                      <q-input
                        filled
                        disable
                        v-model="discount"
                        label="Total Discount : "
                        label-color="black"
                      />
                      <q-input
                        filled
                        disable
                        v-model="amount_pay"
                        label="Total Amount : "
                        label-color="black"
                      />
                      <q-radio v-model="selectedPaymentMethod" val="razorpay">
                        <img
                          style="width: 100px"
                          :src="razorpayIconUrl"
                          alt="Razor Pay"
                        />
                        <!-- <i class="fab fa-razorpay"></i> -->
                      </q-radio>
                      <q-radio v-model="selectedPaymentMethod" val="payumoney">
                        <img
                          style="width: 100px"
                          :src="payumoneyIconUrl"
                          alt="PayUmoney"
                        />
                        <!-- <i class="fa fa-payumoney"></i> -->
                      </q-radio>
                      <div>
                        <!-- <div>
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
                              href="https://pmny.in/6IvNFycHSNew"
                            >
                              Buy Now
                            </a>
                          </div> -->
                      </div>
                    </q-form>
                  </div>
                </q-card-section>
              </q-card-section>

              <q-card-actions align="right" class="text-primary">
                <!-- <q-btn
                      flat
                      label="Pay now"
                      @click="
                        secondDialog = true;
                        sendData();
                      "
                    /> -->
                <q-btn
                  type="submit"
                  class="btn shadow-none"
                  v-on:click="SelectPaymentGatewayoption()"
                >
                  {{ paynowbtn ? "Processing..." : "Pay Now" }}
                </q-btn>

                <q-btn flat label="Close" v-close-popup />
              </q-card-actions>
            </q-card>
          </q-dialog>

          <!-- <q-dialog
            v-model="secondDialog"
            persistent
            transition-show="scale"
            transition-hide="scale"
          >
            <q-card class="bg-teal text-white" style="width: 300px">
              <q-card-section>
                <form
                  class="p-1 m-4 mb-0 text-center d-block form-group"
                  @submit.prevent="sendData"
                >
                  <div class="justify-content-center align-items-center mt-4">
                    <button
                      type="submit"
                      class="btn shadow-none btn-primary fw-500 font-xss text-light-500 p-1"
                      @click="confirmBuy()"
                    >
                      {{ loading ? "Processing..." : "Verify" }}
                    </button>
                  </div>
                </form>
              </q-card-section>

              <q-card-actions align="right" class="bg-white text-teal">
                <q-btn flat label="OK" v-close-popup />
              </q-card-actions>
            </q-card>
          </q-dialog> -->
        </div>
      </div>
    </div>
    <!-- =======================discription section===================================== -->
    <div class="desc">
      {{ products.desc }}

      <!-- <div class="carousel_item" style="">

                <img style="width:15%; height:15%" src="../../img/img1.jpg" alt="" class="carousel-img">
            </div>

            <div class="carousel_item" style="--i:2">

                <img style="width:15%; height:15%" src="../../img/img1.jpg" alt="" class="carousel-img">
            </div>

            <div class="carousel_item" style="--i:3">

                <img style="width:15%; height:15%" src="../../img/img1.jpg" alt="" class="carousel-img">
            </div>

            <div class="carousel_item" style="--i:4">

                <img style="width:15%; height:15%" src="../../img/img1.jpg" alt="" class="carousel-img">
            </div>

            <div class="carousel_item" style="--i:5">

                <img style="width:15%; height:15%" src="../../img/img1.jpg" alt="" class="carousel-img">
            </div>

            <div class="carousel_item" style="--i:6 ">

                <img style="width:15%; height:15%" src="../../img/img1.jpg" alt="" class="carousel-img">
            </div> -->
    </div>

    <div class="after_desc name">
      <h2>Creative</h2>

      <div>
        <center>
          <div class="carousel">
            <ul class="slides" style="">
              <input type="radio" name="radio-buttons" id="img-1" checked />
              <li class="slide-container">
                <div class="slide-image">
                  <img
                    src="https://ib-bucketlive.s3.ap-south-1.amazonaws.com/public/creatives/nxZUmMnBz8VZEPSWCAOuByhQHY5Yhq.jpg"
                  />
                </div>
                <div class="carousel-controls">
                  <label for="img-3" class="prev-slide">
                    <span>&lsaquo;</span>
                  </label>
                  <label for="img-2" class="next-slide">
                    <span>&rsaquo;</span>
                  </label>
                </div>
              </li>
              <input type="radio" name="radio-buttons" id="img-2" />
              <li class="slide-container">
                <div class="slide-image">
                  <img
                    src="https://ib-bucketlive.s3.ap-south-1.amazonaws.com/public/creatives/YXGK1qfN6C936tygonpyMuWwvreBkJ.jpg"
                  />
                </div>
                <div class="carousel-controls">
                  <label for="img-1" class="prev-slide">
                    <span>&lsaquo;</span>
                  </label>
                  <label for="img-3" class="next-slide">
                    <span>&rsaquo;</span>
                  </label>
                </div>
              </li>

              <input type="radio" name="radio-buttons" id="img-3" />
              <li class="slide-container">
                <div class="slide-image">
                  <div>
                    <q-btn
                      label="Buy Creative"
                      color="primary"
                      @click="inception = true"
                    />
                  </div>
                </div>
                <div class="carousel-controls">
                  <label for="img-2" class="prev-slide">
                    <span>&lsaquo;</span>
                  </label>
                  <label for="img-1" class="next-slide">
                    <span>&rsaquo;</span>
                  </label>
                </div>
              </li>
            </ul>
          </div>
        </center>
      </div>
    </div>

    <!-- <div class="carsoule1">

                  <div class="carousel_item" style="--i:1">

              </div>

        </div> -->
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
  <form method="POST" class="pl-5 pr-5" id="paymentForm" :action="payuUrl">
    <input type="hidden" name="key" v-model="mkey" size="64" />
    <input type="hidden" name="txnid" v-model="txnid" size="64" />
    <input type="hidden" name="amount" v-model="amount_pay" size="64" />
    <input type="hidden" name="productinfo" v-model="productInfo" size="64" />
    <input type="hidden" name="firstname" v-model="first_name" size="64" />
    <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
    <input type="hidden" name="email" v-model="email" size="64" />
    <input type="hidden" name="phone" v-model="mobile_no" size="64" />
    <input type="hidden" name="lastname" v-model="last_name" size="64" />
    <input type="hidden" name="surl" v-model="surl" />
    <input type="hidden" name="furl" v-model="furl" />
    <input type="hidden" name="hash" id="hash" v-model="hash" size="64" />
  </form>
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
  name: "hrms",

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
      amount_pay: "999",
      products: [],
      email: "",
      mobile_no: "",
      first_name: "",
      last_name: "",
      Website: "",
      address: "",
      pincode: "",
      coupon_code: "",
      country_id: "101",
      state_id: "",
      sgst: "",
      cgst: "",
      city_id: "",
      productInfo: "CreativePurchase",
      paynowbtn: "",
      loading: "",
      price: "",
      B_Name: "",
      B_Gst_N: "",
      CouponCode: "",
      S_Name: "",
      CompanyImage: "",
      MainErrorOfForm: "",
      coupon_codePrice: "",
      couponCodeSuccess: "",
      selectedPaymentMethod: null,
      razorpayIconUrl: "https://entrackr.com/storage/2023/02/Razorpay.jpg",
      payumoneyIconUrl:
        "https://upload.wikimedia.org/wikipedia/commons/b/b1/PayUmoney_Logo.jpg",
      // =================================Payment Data================================
      txnid: this.makeid(),
      payuUrl: "https://secure.payu.in/_payment",
      mkey: "nxpvv9VZ",
      saltKey: "3oFxUMtWG2",
      surl: window.location.origin + "/AfterBuyCreative",
      furl: window.location.origin + "/home/User/Fail",

      // =========================For testing===============================
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
      text: ref(""),
      coupon_code: ref(""),
      inception: ref(false),
      secondDialog: ref(false),
      padding: ref(true),
      vertical,
      arrows: ref(true),
      navigation: ref(true),
      navPos,

      model: ref(null),

      fixed: ref(false),
      navigationPositions: [
        {
          value: "top",
          label: "top",
        },
        {
          value: "right",
          label: "right",
        },
        {
          value: "bottom",
          label: "bottom (default)",
        },
        {
          value: "left",
          label: "left",
        },
      ],
      slide: ref("style"),
      lorem:
        "We work  with a variety of industries and global corporations, which is why our Portfolio consists of social media apps, digital marketing sites, and more! As a professional and dynamic company, we aim to provide excellent service to all our clients. A recent project we completed is a Digital Marketing website that contains everything a business website often longs for!Redesigning a website or creating your own app for your product everything will be done personalized. We value honesty, impartiality, and candor, with our partners, and our valuable customers. Life is too short to bother; Let’s have fun and learn. We do our best to be proud of our work!",
    };
  },
  methods: {
    SelectPaymentGatewayoption() {
      if (this.selectedPaymentMethod == "razorpay") {
        axios
          .post("https://uatapi.infinitybrains.com/public/api/payment/" + 13, {
            email: this.email,
            firstname: this.first_name,
            lastname: this.last_name,
            phoneno: this.mobile_no,
            address: this.address,
            country: this.country_id,
            state: this.state_id,
            city: this.city_id,
            pincode: this.pincode,
          })
          .then((res) => {
            console.log(res.data.data);
            this.user_id = res.data.data.id;
            this.paynowbtn = false;
            localStorage.setItem(
              "UserDetails",
              JSON.stringify(res.data.data.id)
            );
            this.rezorpayed();
          })
          .catch((error) => {
            this.MainErrorOfForm = error.response.data.message;
            this.paynowbtn = false;
            // this.rezorpayed();
          });
      } else {
        this.BuyConfirmation();
      }
    },
    // applyCoupon() {
    //             axios
    //               .get("apply-coupon/1", {
    //                 params: {
    //                   country_id: this.user.country_id,
    //                   coupon_code: this.coupon_code,
    //                 },
    //               })
    //               .then((response) => {
    //                 this.coupon = response.data;
    //                 this.amount_pay = response.data.payable_amount;
    //                 this.amount_payPrint = response.data.payable_amount;
    //                 this.couponerr = this.coupon.message;
    //                 localStorage.setItem("copondetails", JSON.stringify(response.data));
    //               })
    //               .catch((error) => {
    //                 console.log(error);
    //                 if (error.response.data.status_code == 422) {
    //                   this.couponerr = error.response.data.message;
    //                   this.coupon_code = "";
    //                   this.$refs.removecou.reset();
    //                 }
    //                 console.log(error);
    //               });
    //           },

    async BuyConfirmation() {
      await axios
        .post("https://uatapi.infinitybrains.com/public/api/payment/13", {
          email: this.email,
          firstname: this.first_name,
          lastname: this.last_name,
          phoneno: this.mobile_no,
          address: this.address,
          country: this.country_id,
          state: this.state_id,
          city: this.city_id,
          pincode: this.pincode,
        })
        .then((res) => {
          console.log(res);
          this.paynowbtn = false;
          localStorage.setItem("UserDetails", JSON.stringify(res.data.data));

          console.log("thisis", res.data.data.id);

          let user_id = res.data.data.id;
          const formDatas = new FormData();
          formDatas.append("company_logo", this.CompanyImage);
          formDatas.append("address", this.address);
          formDatas.append("website", this.Website);
          formDatas.append("contact_number", this.mobile_no);
          formDatas.append("user_id", user_id);
          axios
            .post(
              "https://uatapi.infinitybrains.com/public/api/creativedata",
              formDatas,
              {}
            )
            .then((response) => {
              console.log("hello", response.data);
              this.loading = true;
              this.hashGen();
              // this.rezorpayed();
              // this.SelectPaymentGatewayoption();
            });
        })
        .catch((error) => {
          this.MainErrorOfForm = error.response.data.message;

          this.paynowbtn = false;
        });
      // this.hashGen();
    },
    makeid() {
      var text = "";
      var possible =
        "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
      for (var i = 0; i < 20; i++)
        text += possible.charAt(Math.floor(Math.random() * possible.length));

      return text;
    },

    getData() {
      axios
        .get("https://api.restroworld.com/api/countries?is_light=true")
        .then((result) => {
          this.list = result.data.data;
          if (this.country_id) {
            this.getState();
          }
        });
    },
    getGstValye() {
      axios
        .get(
          "https://uatapi.infinitybrains.com/public/api/showpayment_product_details/13"
        )
        .then((result) => {
          this.Gst = result.data.data;
          console.log(this.Gst);
          console.log(this.final_amount);
          // this.Gst.price = this.amount_pay;
          this.final_amount = this.Gst.price;
          this.sgst = this.Gst.sgst;
          this.cgst = this.Gst.cgst;
          this.discount = this.Gst.discount;
          this.amount_pay = Math.round(this.Gst.final_amount);
          localStorage.setItem("copondetails", JSON.stringify(response.data));
        });
    },

    getDiscount() {
      // let naming = document.getElementsByClassName("CoupenIsHere").value;
      // console.log(naming);
      axios
        .post(
          "https://uatapi.infinitybrains.com/public/api/checkcoupen/" + 13,
          {
            code: this.CouponCode,
          }
        )
        .then((result) => {
          this.couponCodeSuccess = result.data.message;
          this.Dis = result.data.data;
          console.log(this.Dis);
          this.final_amount = this.Dis.price;
          this.sgst = this.Dis.sgst;
          this.cgst = this.Dis.cgst;
          this.discount = this.Dis.discount;
          this.amount_pay = Math.round(this.Dis.final_amount);
          localStorage.setItem("copondetails", JSON.stringify(response.data));
        })
        .catch((error) => {
          this.couponCodeSuccess = error.data.message;
        });
    },

    getState() {
      axios
        .get(
          "https://api.restroworld.com/api/states_of_country?is_light=1" +
            this.country_id,
          {
            params: {
              country_id: this.country_id,
            },
          }
        )
        .then((result) => {
          this.state = result.data.data;
          if (this.state_id) {
            this.getCity();
          }
        });
    },
    getCity() {
      axios
        .get(
          "https://api.restroworld.com/api/cities_of_state?is_light=1" +
            this.state_id,
          {
            params: {
              state_id: this.state_id,
            },
          }
        )
        .then((result) => {
          this.city = result.data.data;
        });
    },
    getList() {
      axios
        .get("https://uatapi.infinitybrains.com/public/api/showproduct/13")
        .then((result) => {
          this.products = result.data.data;
          console.warn(result.data.data);
        });
    },

    hashGen() {
      var data =
        this.mkey +
        "|" +
        this.txnid +
        "|" +
        this.amount_pay +
        "|" +
        this.productInfo +
        "|" +
        this.first_name +
        "|" +
        this.email +
        "|||||||||||";
      var sha512 = require("js-sha512");
      var salt = this.saltKey;
      var hash = sha512(data + salt);
      if (hash) {
        localStorage.setItem("hash", hash);
        localStorage.setItem("expireSession", "sesion12dgtdb");
      }
      console.log(hash);
      console.log(data);

      document.getElementById("hash").value = hash;

      document.getElementById("paymentForm").submit();
    },
    rezorpayed() {
      var options = {
        key: "rzp_live_tazg9e4O5sAPdQ",
        // key: "rzp_test_EpNayKPHUEGLMY",
        amount: this.amount_pay * 100,

        currency: "INR",
        name: this.first_name,
        description: "Test Transaction",
        image: "https://cdn.razorpay.com/logos/7K3b6d18wHwKzL_medium.png",
        handler: function (response) {
          this.paymentId = response.razorpay_payment_id;
          this.orderId = response.razorpay_order_id;
          this.signature = response.razorpay_signature;

          if (response.razorpay_payment_id) {
            this.usersidN = localStorage.getItem("UserDetails");
            axios
              .post(
                "https://uatapi.infinitybrains.com/public/api/paymentstatusupdate",
                {
                  user_id: this.usersidN,
                  payment_status: "1",
                  product_id: this.id,
                  cgst: this.cegst,
                  sgst: this.sgst,
                  discount: this.discount,
                  amount: this.amount,
                }
              )
              .then((result) => {
                console.log(result.data);
                alert("PaymentSuccess", this.usersidN);
              });
          } else {
            // Payment unsuccessful
            // console.log("Payment unsuccessful!");
            alert("Payment failed. Please try again later.");
          }
        }.bind(this),
        prefill: {
          name: this.first_name,
          email: this.email,
        },
        notes: {
          address: "Razorpay Corporate Office",
        },
        theme: {
          color: "#F37254",
        },
      };
      var rzp1 = new window.Razorpay(options);
      rzp1.open();
    },
  },

  async mounted() {
    this.id = this.$route.params.id;

    // this.BeforeMountedApplyeCoupenCode();
    axios
      .post("https://uatapi.infinitybrains.com/public/api/checkcoupen/" + 13, {
        code: "Festival Creatives",
      })
      .then((result) => {
        window.scrollTo(0, 50);
        this.coupon_codePrice = Math.round(result.data.data.final_amount);
        console.log("Creative", result.data.data.final_amount);
      });
    console.log("name", this.id);
    axios
      .get(
        'https://uatapi.infinitybrains.com/public/api/showcoupen?filter={"product":"' +
          13 +
          '"}'
      )
      .then((response) => {
        // handle success
        console.log("helooooooooooo", response.data.data.data[0].code);
        this.optionse = response.data.data.data;
      });
    axios
      .get("https://uatapi.infinitybrains.com/public/api/show/13")
      .then((result) => {
        this.products = result.data.data;
      });

    this.getGstValye();
    //this.getList();
    // this.sendData();
    this.getData();

    //this.hashGen();
    this.makeid();
  },
};
</script>

<style scoped>
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

.after_desc {
  text-align: center;

  grid-row: 4/5;
}

.carousel {
  margin-left: 15%;
  margin-right: 15%;
  height: 22rem;
  width: 60vh;
}

ul.slides {
  display: block;
  position: relative;
  height: 100%;
  margin: 0;
  padding: 0;
  overflow: hidden;
  list-style: none;
}

.slides * {
  user-select: none;
  -ms-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -webkit-touch-callout: none;
}

ul.slides input {
  display: none;
}

.slide-container {
  display: block;
}

.slide-image {
  display: block;
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  opacity: 0;
  transition: all 0.7s ease-in-out;
}

.slide-image img {
  width: auto;
  min-width: 100%;
  height: 100%;
}

.carousel-controls {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  z-index: 999;
  font-size: 100px;
  line-height: 600px;
  color: #fff;
  margin-top: -24%;
}

.carousel-controls label {
  display: none;
  position: absolute;
  padding: 0 20px;
  opacity: 0;
  transition: opacity 0.2s;
  cursor: pointer;
}

.slide-image:hover + .carousel-controls label {
  opacity: 0.5;
}

.carousel-controls label:hover {
  opacity: 1;
}

.carousel-controls .prev-slide {
  width: 15%;
  text-align: left;

  margin-bottom: 50%;
}

.carousel-controls .next-slide {
  width: 49%;
  text-align: right;
  right: 0;
}

.carousel-dots {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 20px;
  z-index: 999;
  text-align: center;
}

.carousel-dots .carousel-dot {
  display: inline-block;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  background-color: #fff;
  opacity: 0.5;
  margin-bottom: 0px;
}

input:checked + .slide-container .slide-image {
  opacity: 1;
  transform: scale(1);
  transition: opacity 1s ease-in-out;
}

input:checked + .slide-container .carousel-controls label {
  display: block;
}

input#img-1:checked ~ .carousel-dots label#img-dot-1,
input#img-2:checked ~ .carousel-dots label#img-dot-2,
input#img-3:checked ~ .carousel-dots label#img-dot-3,
input#img-4:checked ~ .carousel-dots label#img-dot-4,
input#img-5:checked ~ .carousel-dots label#img-dot-5,
input#img-6:checked ~ .carousel-dots label#img-dot-6 {
  opacity: 1;
}

input:checked + .slide-container .nav label {
  display: block;
}
</style>
