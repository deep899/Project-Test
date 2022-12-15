<!-- This Page Text element use as a CoupenCode Text = CoupenCode -->
<template>
<!-- Slider Carousel -->

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
            <div class="btn">Price : ₹ {{ products.price }}.00<br /></div>
            <div class="q-pa-md q-gutter-sm">
                <q-btn label="Buy me" color="primary" @click="inception = true" />

                <q-dialog v-model="inception">
                    <q-card>
                        <q-card-section>
                            <div class="text-h6">Buy Now</div>
                        </q-card-section>

                        <q-card-section class="q-pt-none">
                            <q-card-section style="max-height: 50vh; text-align: -webkit-center" class="scroll">
                                <div class="q-pa-md" style="max-width: 400px">
                                    <q-form class="q-gutter-md" @submit.prevent="sendData">
                                        <q-input filled v-model="first_name" label="First name *" lazy-rules :rules="[
                            (val) =>
                              (val && val.length > 0) || 'Please type something',
                          ]" />
                                        <q-input filled v-model="last_name" label="Last name *" lazy-rules :rules="[
                            (val) =>
                              (val && val.length > 0) || 'Please type something',
                          ]" />
                                        <q-input filled v-model="email" label="Email *" lazy-rules :rules="[
                            (val) =>
                              (val && val.length > 0) || 'Please type something',
                          ]" />
                                        <q-input filled type="number" v-model="mobile_no" label="Phone no *" lazy-rules :rules="[
                            (val) =>
                              (val && val.length > 0) || 'Please type something',
                          ]" />
                                        <q-input filled v-model="address" label="Address *" lazy-rules :rules="[
                            (val) =>
                              (val && val.length > 0) || 'Please type something',
                          ]" />

                                        <select style="
                            padding: 1.4rem 3.25rem 0.375rem 0.75rem;
                            font-size: 1rem;
                          " class="form-select" aria-required="true" aria-invalid="false" v-model="country_id" @change="getState()" required>
                                            <option value="" disabled selected>Country</option>
                                            <option v-for="country in list" :value="country.id" v-bind:key="country.id">
                                                {{ country.name }}
                                            </option>
                                        </select>

                                        <select style="
                            padding: 1.4rem 1.3rem 0.375rem 0.75rem;
                            font-size: 1rem;
                          " class="form-select" aria-required="true" aria-invalid="false" v-model="state_id" @change="getCity()" required>
                                            <option value="" disabled selected>State</option>
                                            <option v-for="item in state" :value="item.id" v-bind:key="item.id">
                                                {{ item.name }}
                                            </option>
                                        </select>

                                        <select style="
                            padding: 1.4rem 19rem 0.375rem 0.75rem;
                            font-size: 1rem;
                          " class="form-select" aria-required="true" aria-invalid="false" v-model="city_id" required>
                                            <option value="" disabled selected>City</option>
                                            <option v-for="item in city" :value="item.id" v-bind:key="item.id">
                                                {{ item.name }}
                                            </option>
                                        </select>

                                        <q-input filled v-model="pincode" label="Pincode *" lazy-rules :rules="[
                            (val) =>
                              (val && val.length > 0) || 'Please type something',
                          ]" />
                                        <q-input filled v-model="text" label="Apply Coupon" />


                                        <q-btn color="primary" style="width: 95%; " label="Apply" @click="getDiscount()" />
                                        <q-input filled disable :v-bind="price" v-model="final_amount" label="Price : " label-color="black" />
                                        <q-input filled disable :v-bind="price" v-model="sgst" label="SGST : " label-color="black" />
                                        <q-input filled disable :v-bind="price" v-model="cgst" label="CGST : " label-color="black" />
                                        <q-input filled disable :v-bind="price" v-model="discount" label="Total Discount : " label-color="black" />
                                        <q-input filled disable :v-bind="price" v-model="amount_pay" label="Total Amount : " label-color="black" />

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
                            <button type="submit" class="
                      btn
                      shadow-none
                      btn-primary
                      fw-500
                      font-xss
                      text-primary-500
                      w-100
                      mb-2
                    " v-on:click="BuyConfirmation()">
                                {{ paynowbtn ? "Processing..." : "Pay Now" }}
                            </button>

                            <q-btn flat label="Close" v-close-popup />
                        </q-card-actions>
                    </q-card>
                </q-dialog>

                <q-dialog v-model="secondDialog" persistent transition-show="scale" transition-hide="scale">
                    <q-card class="bg-teal text-white" style="width: 300px">
                        <q-card-section>
                            <form class="p-1 m-4 mb-0 text-center d-block form-group" @submit.prevent="sendData">
                                <div class="justify-content-center align-items-center mt-4">
                                    <button type="submit" class="
                          btn
                          shadow-none
                          btn-primary
                          fw-500
                          font-xss
                          text-light-500
                          p-1
                        " @click="confirmBuy()">
                                        {{ loading ? "Processing..." : "Verify" }}
                                    </button>

                                </div>
                            </form>

                        </q-card-section>

                        <q-card-actions align="right" class="bg-white text-teal">
                            <q-btn flat label="OK" v-close-popup />
                        </q-card-actions>
                    </q-card>
                </q-dialog>
            </div>
        </div>
    </div>
    <!-- =======================discription section===================================== -->
    <div class="desc">{{ products.desc }}</div>
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
import {
    ref,
    watch
} from "vue";
import products from "components/Products.vue";
import carousel from "components/carousel.vue";
import workInprogress from "components/WorkInProgress.vue";
import logoimageblack from "components/logoimageBlack.vue";
import infinityabout from "components/InfinityAbout.vue";
import contactdetail from "components/ContactDetails.vue";
import expertservice from "components/ExpertService.vue";
import quicklink from "components/QuickLinks.vue";
import axios from "axios";
import { allGeneratedPositionsFor } from "@jridgewell/trace-mapping";
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
            email: "omchevli@gmail.com",
            mobile_no: "123456789",
            first_name: "OmChevli",
            last_name: "",
            address: "",
            pincode: "",
            coupon_code: "",
            country_id: "101",
            state_id: "",
            sgst: "",
            cgst:"",
            city_id: "",
            productInfo: "Salesforce",
            paynowbtn: "",
            loading: "",
            price: "",
            // =================================Payment Data================================
            txnid: this.makeid(),
            payuUrl: "https://secure.payu.in/_payment",
            mkey: "nxpvv9VZ",
            saltKey: "3oFxUMtWG2",
            surl: window.location.origin + "/home/User/Success",
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
            text: ref(''),
            coupon_code: ref(''),
            inception: ref(false),
            secondDialog: ref(false),
            padding: ref(true),
            vertical,
            arrows: ref(true),
            navigation: ref(true),
            navPos,

            model: ref(null),

            fixed: ref(false),
            navigationPositions: [{
                    value: "top",
                    label: "top"
                },
                {
                    value: "right",
                    label: "right"
                },
                {
                    value: "bottom",
                    label: "bottom (default)"
                },
                {
                    value: "left",
                    label: "left"
                },
            ],
            slide: ref("style"),
            lorem: "We work  with a variety of industries and global corporations, which is why our Portfolio consists of social media apps, digital marketing sites, and more! As a professional and dynamic company, we aim to provide excellent service to all our clients. A recent project we completed is a Digital Marketing website that contains everything a business website often longs for!Redesigning a website or creating your own app for your product everything will be done personalized. We value honesty, impartiality, and candor, with our partners, and our valuable customers. Life is too short to bother; Let’s have fun and learn. We do our best to be proud of our work!",

        };
    },
    methods: {
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
                .post("https://uatapi.infinitybrains.com/public/api/payment/9", {
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
                })
                .catch((error) => {
                    this.failMsg = error.response.data.message;
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
                .get("https://api.restroworld.com/public/api/countries?is_light=true")
                .then((result) => {
                    this.list = result.data.data;
                    if (this.country_id) {
                        this.getState();
                    }
                });
        },
        getGstValye() {
            axios
                .get("https://uatapi.infinitybrains.com/public/api/showpayment_product_details/9")
                .then((result) => {
                    this.Gst = result.data.data;
                   // this.Gst.price = this.amount_pay;
                   this.final_amount = this.Gst.price;
                   this.sgst = this.Gst.sgst;
                  this.cgst = this.Gst.cgst;
                  this.discount = this.Gst.discount;
                  this.amount_pay = this.Gst.final_amount;
                  localStorage.setItem("copondetails", JSON.stringify(response.data));
              });


        },

        getDiscount() {
            axios
                .post('https://uatapi.infinitybrains.com/public/api/checkcoupen/9',{code : this.text})
                .then((result) => {
                    this.Dis = result.data.data;
                    console.log(this.Dis);
                      this.final_amount = this.Dis.price;
                      this.sgst = this.Dis.sgst;
                      this.cgst = this.Dis.cgst;
                      this.discount = this.Dis.discount;
                      this.amount_pay = this.Dis.final_amount;
                      localStorage.setItem("copondetails", JSON.stringify(response.data));
                    //this.coupon = response.data;
                   // this.Gst.price = this.amount_pay;

                });

        },

        getState() {
            axios
                .get(
                    "https://api.restroworld.com/public/api/states_of_country?is_light=1" +
                    this.country_id, {
                        params: {
                            country_id: this.country_id
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
                    "https://api.restroworld.com/public/api/cities_of_state?is_light=1" +
                    this.state_id, {
                        params: {
                            state_id: this.state_id
                        },
                    }
                )
                .then((result) => {
                    this.city = result.data.data;
                });
        },
        getList() {
            axios
                .get("https://uatapi.infinitybrains.com/public/api/show/9")
                .then((result) => {
                    this.products = result.data.data;
                    console.warn(result.data.data);
                });
        },

        async sendData() {
            this.paynowbtn = true;
            await axios
                .post("https://uatapi.infinitybrains.com/public/api/payment/9", {
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
                    this.failMsg = "";
                    this.paynowbtn = false;
                    localStorage.setItem("UserDetails", JSON.stringify(res.data.data));
                })
                .catch((error) => {
                    this.failMsg = error.response.data.message;
                    this.paynowbtn = false;
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
        confirmBuy() {
            this.loading = true;
            this.hashGen();
        },
    },

    async mounted() {

      this.getGstValye();
        this.getList();
        this.sendData();
        this.getData();

        //this.hashGen();
        this.makeid();
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
