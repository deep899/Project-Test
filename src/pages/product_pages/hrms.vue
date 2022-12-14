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
                <div class="btn">Price : ₹ {{ products.price }}.00<br />
                  <q-btn label="Buy me" color="primary" @click="razorPay()" />
                </div>

                <!-- =======================PaymentGetway===================================== -->
                <div ref="rzpform"></div>
                <!-- =======================PaymentG===================================== -->


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
                lorem: "We work  with a variety of industries and global corporations, which is why our Portfolio consists of social media apps, digital marketing sites, and more! As a professional and dynamic company, we aim to provide excellent service to all our clients. A recent project we completed is a Digital Marketing website that contains everything a business website often longs for!Redesigning a website or creating your own app for your product everything will be done personalized. We value honesty, impartiality, and candor, with our partners, and our valuable customers. Life is too short to bother; Let’s have fun and learn. We do our best to be proud of our work!",
            };
        },
        methods: {

          razorPay() {

              axios
                    .post("/api/payment/razorpay", { amount: this.amount })
                    .then((res) => {
                      if (res.data) {
                        window.location.href = "/pay/razorpay?key=" + res.data.key + "&amount=" + res.data.amount + "&order_id=" + res.data.order_id;
                      }
                    })
                    .catch((err) => {alert("hello");});


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



        },

        async mounted() {

            this.getList();
            //this.sendData();
            this.getData();
            //this.hashGen();
            this.makeid();

                        var form = document.createElement("form");
            var rzpScript = document.createElement("script");
            rzpScript['src']="https://cdn.razorpay.com/static/widget/subscription-button.js";
            rzpScript.setAttribute('data-subscription_button_id', "pl_IXOuwF4EldEpc5");
            rzpScript.setAttribute('async', true);
            form.appendChild(rzpScript);
            this.$refs.rzpform.appendChild(form);

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
