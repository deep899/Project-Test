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
                    <q-btn label="Buy me" color="primary" @click="inception = true" />

                    <q-dialog v-model="inception">
                        <q-card>
                            <!-- <q-card-section>
                                <div class="text-h6">Buy Now</div>
                            </q-card-section> -->

                            <q-card-section class="q-pt-none">
                                <q-card-section style="max-height: 50vh; text-align: -webkit-center" class="scroll">
                                    <div class="q-pa-md" style="max-width: 400px">
                                        <q-form class="q-gutter-md" @submit.prevent="paymentcreate()">
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
                                          padding: 1.4rem 12.45rem 0.375rem 0.75rem;
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
                                            <q-input filled v-model="coupon_code" label="Apply Coupon" />
                                            <q-input filled disable :v-bind="this.products.price" v-model="amount_pay" label="100000" label-color="black" />
                                        </q-form>
                                    </div>
                                </q-card-section>
                            </q-card-section>

                            <q-card-actions align="right" class="text-primary">
                                <button type="submit" class="
                                                                btn
                                                                shadow-none
                                                                btn-primary
                                                                fw-500
                                                                font-xss
                                                                text-primary-500
                                                                w-100
                                                                mb-2
                                                            " @click="BuyConfirmation()">
                                    {{ paynowbtn ? "Processing..." : "Pay Now" }}
                                </button>

                                <q-btn flat label="Close" v-close-popup />
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
    <form method="post" class="pl-5 pr-5" id="paymentForm" action="https://secure.payu.in/_payment" @click.prevent="sendData()">
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
                id: "8",
                disable: false,
                list: [],
                state: [],
                city: [],
                country: [],
                amount_pay: "100000",
                products: [],
                email: "",
                mobile_no: "",
                first_name: "",
                last_name: "",
                address: "",
                pincode: "",
                coupon_code: "",
                country_id: "",
                state_id: "",
                city_id: "",
                productInfo: "hrms",
                paynowbtn: "",
                loading: "",
                // =================================Payment Data================================
                txnid: this.makeid(),
                payuUrl: "https://secure.payu.in/_payment",
                mkey: "nxpvv9VZ",
                saltKey: "3oFxUMtWG2",
                //surl: window.location.origin + "/home/User/Success",
                //surl: "http://localhost:8080/home/User/Success",
                surl: "https://uat.infinitybrains.com",
                furl: window.location.origin + "/home/User/Fail",
                hash: this.hash,

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
                lorem: "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque voluptatem totam, architecto cupiditate officia rerum, error dignissimos praesentium libero ab nemo.",
            };
        },
        methods: {

            BuyConfirmation() {

                //this.amount_pay = 20000;
                this.hashGen();

            },
            async paymentcreate() {

                alert(this.amount_pay);
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
                    .get("https://uatapi.infinitybrains.com/public/api/show/8")
                    .then((result) => {
                        this.products = result.data.data;
                        console.warn(result.data.data);
                    });
            },

            async sendData() {
                alert("high");
                this.paynowbtn = true;
                axios.baseURL = 'https://secure.payu.in/_payment';

                await axios
                    .post("https://uatapi.infinitybrains.com/public/api/payment/8", {
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
                ///alert(this.products.price);
                //this.amount_pay = 20000;
                // axios.defaults.baseURL = process.env.BASE_URL;
                // axios.defaults.headers.get['Accepts'] = 'application/json';
                // axios.defaults.headers.common['Access-Control-Allow-Origin'] = '*';
                // axios.defaults.headers.common['Access-Control-Allow-Headers'] = 'Origin, X-Requested-With, Content-Type, Accept';

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
                    "|||||"

                    +
                    "||||||";
                var sha512 = require("js-sha512");
                var salt = this.saltKey;
                var hash = sha512(data + salt);
                if (hash) {
                    localStorage.setItem("hash", hash);
                    localStorage.setItem("expireSession", "sesion12dgtdb");
                }
                console.log(hash);
                //alert(data);

                // let result = axios.post("https://secure.payu.in/_payment", {

                //     key: this.mkey,
                //     txnid: this.txnid,
                //     amount: this.amount_pay,
                //     productinfo: this.productInfo,
                //     email: this.email
                // }).then((res) => {
                //     alert(res);
                //     localStorage.setItem("UserDetails", JSON.stringify(res.data.data));
                // })
                // console.log(result);

                document.getElementById("hash").value = hash;

                document.getElementById("paymentForm").submit();

            },

        },

        async mounted() {

            this.getList();
            //this.sendData();
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
