
<template>
  <div v-if="productPurchase">
    <div class="maincontainer containerActuall">
      <div style="position: relative; width: 100%">
        <img src="./../../../src/assets/BackGround/pur1.png" alt="Image description"
          style="width: 100%; margin-top: 0%" />
        <div style="
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 100%;
            color: white;
            padding: 5px 10px;
          ">
          <span class="tt1">Build, Test, and Deploy with Confidence</span><br />
          <span class="tt2">We deliver Websites, Mobile Apps, Hybrid Apps, Software, Digital
            Marketing, and more.</span><br />
        </div>
      </div>
    </div>

    <div class="row rowcontainer" style="display: flex; width: 100%">
      <div class="col-lg-7 col-md-7 col-sm-12 imgContain" style="">
        <img :src="products.product_image" alt="Product Image" class="prodPur" style="" />
      </div>
      <div class="col-lg-5 col-md-5 col-sm-12" style="padding-left: 3%">
        <span class="name">{{ products.name }}</span>
        <p class="longDec" style="color: #707070">{{ products.short_desc }}</p>
        <span style="font-size: 1.6em; line-height: 1em; margin-top: -20%">
          Price :
          <span v-if="this.effectiveprice" style="font-size: 0.9em">
            <span style="font-size: 0.9em; margin-top: -20%; line-height: 1%">₹</span>
            {{ this.formatNumber(this.effectiveprice) }}.00/-</span>
          <span v-else style="font-size: 0.9em">
            <span style="font-size: 0.9em; margin-top: -20%; line-height: 1%">₹</span>
            {{ this.formatNumber(this.price) }}.00/-</span>
        </span>
        &nbsp; &nbsp;
        <span v-if="this.effectiveprice" class="cross" style="font-size: 1.5em; line-height: 1em">
          <span style="font-size: 0.8em">
            <span style="font-size: 0.9em; margin-top: -20%; line-height: 1%">₹</span>
            {{ this.formatNumber(this.price) }}.00/-</span>
        </span>
        <br />
        <button style="
            font-size: 1.3rem;
            padding: 0.5vh 2vw;
            cursor: pointer;
            background-color: #2f518a;
            color: #ffffff;
            border: none;
            margin-top: 2%;
          " @click="this.$router.push(`/paymentForm/${products.id}`)">
          Buy Now
        </button>
      </div>
    </div>

    <div class="logdiscriptionblog" style="
        background-color: #f1f1f169;
        margin-top: 10%;
        margin-bottom: 10%;
        display: flex;
        align-items: center;
        justify-content: center;
      ">
      <p class="textLong" style="background-color: transparent">
        {{ products.desc }}
      </p>
    </div>
  </div>
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
  <footer>
    <!-- Blacnk Background0-blue Start Here -->
    <h3 class="" style="width: 100%; background-color: #446cb1">&nbsp;</h3>
    <logoimageblack />

    <!-- Logo Image -->

    <!-- Link Mennu Contact Addreess -->
    <div class="q-pa-md bgclass">
      <div class="row justify-between items-start q-gutter-md q-mb-md"
        style="margin: 0 auto; max-width: 100%; width: 90%">
        <!-- Infinit ABout -->
        <div class="col-sm-6 col-md-4 col-lg-2">
          <infinityabout :lorem="lorem" />
        </div>
        <!-- End Infinity About -->

        <!-- COntact Details Start Here -->
        <div class="col-sm-6 col-md-4 col-lg-2">
          <contactdetail />
        </div>
        <!-- Contact Details End here -->

        <!-- Expert Service HEre -->
        <div class="col-sm-6 col-md-4 col-lg-2">
          <expertservice />
        </div>
        <!-- Expert Service End HEre -->

        <!-- Quick links Here -->
        <div class="col-sm-6 col-md-4 col-lg-2">
          <quicklink />
        </div>
        <!-- Quick links End Here -->
      </div>

      <div class="row justify-center items-center text-white q-mt-lg">
        <div class="col-auto text-center">
          <p style="
              /* UI Properties */
              color: var(--unnamed-color-ffffff);

              font: normal normal 600 1.1rem/34px Nunito;
              letter-spacing: 0px;
              color: #ffffff;
              opacity: 1;
            ">
            2023 copyright. All right Reserved
          </p>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
import { useStore } from "vuex";
import { ref, watch } from "vue";
import products from "components/Products.vue";
import carousel from "components/carousel.vue";
import workInprogress from "components/WorkInProgress.vue";
import logoimageblack from "components/logoimageBlack.vue";
import infinityabout from "components/InfinityAbout.vue";
import contactdetail from "components/ContactDetails.vue";
import expertservice from "components/ExpertService.vue";
import quicklink from "components/QuickLinks.vue";
import axios from "./../../axios";
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
      price: 0,
      showProducts: true,
      id: "",
      disable: false,
      list: [],
      state: [],
      city: [],
      country: [],
      productPurchase: true,
      amount_pay: "999",
      effectiveprice: 0,
      products: [],
      email: "",
      mobile_no: "",
      first_name: "",
      last_name: "",
      SalesManName: "",
      BusinessGstNumber: "",
      BusinessName: "",
      address: "",
      pincode: "",
      coupon_code: "",
      country_id: "101",
      state_id: "",
      sgst: "",
      cgst: "",
      city_id: "",
      productInfo: "Salesforce",
      paynowbtn: "",
      loading: "",
      price: "",
      code: "",
      MainErrorOfForm: "",
      CouponCode: "",
      couponCodeSuccess: "",
      couponCodeSuccessCopy: "",
      couponCode: "",
      selectedCoupen: "",
      usersidN: "",
      selectedPaymentMethod: null,
      razorpayIconUrl: "https://entrackr.com/storage/2023/02/Razorpay.jpg",
      payumoneyIconUrl:
        "https://upload.wikimedia.org/wikipedia/commons/b/b1/PayUmoney_Logo.jpg",
      // =================================Payment Data================================
      txnid: this.makeid(),
      payuUrl: "https://secure.payu.in/_payment",
      mkey: "nxpvv9VZ",
      saltKey: "3oFxUMtWG2",
      surl: window.location.origin + "/home/User/Success",
      furl: window.location.origin + "/home/User/Fail",
      optionse: [],
      CoupyCode: "",

      // =========================For testing===============================
    };
  },

  computed: {
    couponCodeSuccessColor() {
      return {
        color: this.couponCodeSuccess.startsWith(
          "Coupon code applied successfully"
        )
          ? "green"
          : "red",
      };
    },
    couponCodeSuccessColorCopy() {
      return { color: "green" };
    },
  },

  setup() {
    const navPos = ref("bottom");
    // const $q = useQuasar()
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
    triggerPositive() {
      navigator.clipboard.writeText(this.CoupyCode);
      if (this.CoupyCode) {
        this.selectedCoupen = "Code is Copy !!";
      } else {
        alert("Something went Wrong");
      }
    },

    SelectPaymentGatewayoption() {
      // if (this.selectedPaymentMethod == "razorpay") {
      if ("nonvalue" == "razorpay") {
        this.rezorpayed();
      } else {
        this.BuyConfirmation();
      }
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
          axios
            .post(
              " payment/" + this.id,
              {
                email: this.email,
                firstname: this.first_name,
                lastname: this.last_name,
                phoneno: this.mobile_no,
                address: this.address,
                country: this.country_id,
                state: this.state_id,
                city: this.city_id,
                pincode: this.pincode,
              }
            )
            .then((res) => {
              console.log(res.data.data);
              this.user_id = res.data.data.id;
              this.paynowbtn = false;
              localStorage.setItem(
                "UserDetails",
                JSON.stringify(res.data.data.id)
              );
            })
            .catch((error) => {
              this.MainErrorOfForm = error.response.data.message;
              this.paynowbtn = false;
            });

          if (response.razorpay_payment_id) {
            this.usersidN = localStorage.getItem("UserDetails");
            axios
              .post(
                " paymentstatusupdate",
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
          address: "Redjinni Corporate Office",
        },
        theme: {
          color: "#F37254",
        },
      };
      var rzp1 = new window.Razorpay(options);
      rzp1.open();
    },

    async BuyConfirmation() {
      await axios
        .post(" payment/" + this.id, {
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
          localStorage.setItem("UserDetails", JSON.stringify(res.data.data.id));
          this.hashGen();
        })
        .catch((error) => {
          this.MainErrorOfForm = error.response.data.message;
          // alert(error.response.data.message);
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
          "showpayment_product_details/" +
            this.id
        )
        .then((result) => {
          this.Gst = result.data.data;
          this.final_amount = this.Gst.price;
          this.sgst = this.Gst.sgst;
          this.cgst = this.Gst.cgst;
          this.discount = Math.round(this.Gst.discount);
          this.amount_pay = Math.round(this.Gst.final_amount);
          localStorage.setItem("copondetails", JSON.stringify(response.data));
        });
    },

    getDiscount() {
      axios
        .post(
          " checkcoupen/" + this.id,
          {
            code: this.CouponCode,
          }
        )
        .then((response) => {
          // Handle success response
          this.Dis = response.data.data;
          console.log(this.Dis);
          this.final_amount = this.Dis.price;
          this.sgst = this.Dis.sgst;
          this.cgst = this.Dis.cgst;
          this.discount = Math.round(this.Dis.discount);
          this.amount_pay = Math.round(this.Dis.final_amount);
          this.couponCodeSuccess = "Coupon code applied successfully!";
          localStorage.setItem("copondetails", JSON.stringify(response.data));
        })
        .catch((error) => {
          // Handle error response
          this.couponCodeSuccess = error.response.data.message;
          console.log(error.response.data);
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
    // getList() {
    //     axios
    //         .get(" show/9")
    //         .then((result) => {
    //             this.products = result.data.data;
    //             console.warn(result.data.data);
    //         });
    // },

    // async sendData() {
    //     this.paynowbtn = true;
    //     await axios
    //         .post(' payment/' + this.id, {
    //             email: this.email,
    //             firstname: this.first_name,
    //             lastname: this.last_name,
    //             phoneno: this.mobile_no,
    //             address: this.address,
    //             country: this.country_id,
    //             state: this.state_id,
    //             city: this.city_id,
    //             pincode: this.pincode,
    //         })
    //         .then((res) => {
    //             this.failMsg = "";
    //             this.paynowbtn = false;
    //             localStorage.setItem("UserDetails", JSON.stringify(res.data.data));
    //         })
    //         .catch((error) => {
    //             this.failMsg = error.response.data.message;
    //             this.paynowbtn = false;
    //         });
    // },

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
  mounted() {
    const store = useStore();
    store.commit("setBackGroundColor", "#ffffff");
    store.commit(
      "setimageSrc",
      `${window.location.origin}/img/logo_blue.ca47717c.png`
    );
    store.commit("changeColor", "#012A71");

    // Always start the page at the top

    this.id = this.$route.params.id;
    console.log("name", this.id);

    Promise.all([
      axios
        .get(
          'showcoupen?filter={"product":"' +
            this.id +
            '"}'
        )
        .then((response) => {
          // handle success
          this.CoupyCode = response.data.data.data[0].code;
          this.optionse = response.data.data.data;
        }),
      axios
        .get("show/" + this.id)
        .then((result) => {
          this.products = result.data.data;
          this.price = result.data.data.price;
          this.effectiveprice = result.data.data.effective_price;
        }),
    ]).then(() => {
      this.getGstValye();
      this.getData();
      this.makeid();
    });
  },
};
</script>

<style scoped>
/* new css here start 23 */
.name {
  color: #2f518a;
  font-size: 7vh;
  text-transform: uppercase;
  /* line-height: 7.2vh; */
  /* */
  font-family: Impact, Haettenschweiler, "Arial Narrow Bold", sans-serif;
}

.textLong {
  width: 80%;
  font-size: 1.3rem;
  margin-top: 1%;
  text-align: center;
}

.bgclass {
  background-image: url("./../../img/bgok.jpg");
  background-repeat: no-repeat;
  background-position: top left;
  background-size: cover;
}

.containerActuall {
  margin-top: 0%;
}

.tt1 {
  font-size: 3vw;
}

.tt2 {
  font-size: 2vw;
}

.prodPur {
  object-fit: contain;

  height: 50.4vh;
  width: 110%;
  justify-content: flex-end;
}

.rowcontainer {
  margin-top: 12%;
}

.longDec {
  font-size: 1.4vmax;
  margin-top: 2%;
  width: 80%;
}

@media (max-width: 940px) {
  .containerActuall {
    margin-top: 10%;
  }

  .tt1 {
    font-size: 4vw;
    line-height: 1vw;
  }

  .tt2 {
    font-size: 2.4vw;
    line-height: 1vw;
  }

  .name {
    font-size: 10vw;

    display: flex;
    align-items: center;
    justify-content: center;
  }

  .prodPur {
    height: 30vh;
    width: 80%;
  }

  .container {
    height: 50%;
  }

  .imgContain {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .longDec {
    font-size: 2.5vh;
    display: flex;
    align-items: center;
    margin-top: 2%;
    width: 100%;
  }

  .textLong {
    width: 90%;
    font-size: 1.3rem;
    margin-top: 1%;
    text-align: center;
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
</style>
