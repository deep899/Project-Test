<template>
  <div class="maincontainer" style="width: 100%">
    <div class="container" style="">
      <div class="row" style="">
        <div class="col-lg-7 col-md-12 col-sm-12 nubu" style="">
          <label
            @click="toggleForm"
            class="lableForm"
            style="line-height: 100%; font-size: 3vh"
            >1. FILL THE DETAILS :</label
          >
          <button
            @click="toggleForm"
            v-if="showForm"
            style="
              font-size: 1rem;
              background-color: transparent;
              color: red;
              border: none;
              cursor: pointer;
              float: right;
            "
          >
            Close
          </button>

          <div v-if="showForm" style="margin-top: 2%">
            <div
              class="form-container formcontainer"
              style="width: 100%; border: 1px solid #c5c5c5"
            >
              <!-- <span v-if="this.errorForm" sty>{{ this.errorForm }}</span> -->
              <form style="padding: 1.5rem;">
                <span
                style=" display: flex;align-items: center; justify-content: center; font-size: 1.2rem; color: rgb(255, 4, 4);   width: 100%;"  >{{ this.errorForm }}</span>
              
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <label class="lableForm" for="firstname ">First Name</label>
                    <input
                      style=""
                      placeholder="firstname "
                      type="text"
                      id="firstname "
                      class="halfinput form-control"
                      v-model="formData.firstname "
                    />
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <label class="lableForm" for="lastname ">Last Name</label>
                    <input
                      style="width: 100%"
                      placeholder="lastname "
                      type="text"
                      id="lastname "
                      class="form-control"
                      v-model="formData.lastname "
                    />
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <label class="lableForm" for="businessName"
                      >Business Name</label
                    >
                    <input
                      style="width: 100%"
                      placeholder="BusinessName"
                      type="text"
                      id="businessName"
                      class="form-control"
                      v-model="formData.businessName"
                    />
                  </div>
                </div>
                <div class="col-md-6 col-sm-12">
                  <label class="lableForm" for="businessGst"
                    >Business GST Number</label
                  >
                  <input
                    style="width: 100%"
                    placeholder="Business GST Number"
                    type="text"
                    id="businessGst"
                    class="form-control"
                    v-model="formData.businessGst"
                  />
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <label class="lableForm" for="salesmanName"
                      >Salesman Name</label
                    >
                    <input
                      style="width: 100%"
                      placeholder="Salesman Name"
                      type="text"
                      id="salesmanName"
                      class="form-control"
                      v-model="formData.salesmanName"
                    />
                  </div>
                </div>
                <div class="col-md-6 col-sm-12">
                  <label class="lableForm" for="emailPhoneNumber">Email </label>
                  <input
                    style="width: 100%"
                    placeholder="Email"
                    type="email"
                    id="emailPhoneNumber"
                    class="form-control"
                    v-model="formData.email"
                  />
                </div>
                <div class="col-md-6 col-sm-12">
                  <label class="lableForm" for="phone Number"
                    >Phone Number
                  </label>
                  <input
                    style="width: 100%"
                    placeholder="Phone Number"
                    type="text"
                    id="emailPhoneNumber"
                    class="form-control"
                    v-model="formData.phoneno"
                  />
                </div>
                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <label for="country" class="lableForm">Country</label>
                    <div class="select-wrapper">
                      <select
                        id="country"
                        class="form-control halfinput"
                        style="
                          padding-top: 2%;
                          padding-bottom: 2%;
                          font-size: 1rem;
                        "
                        v-model="formData.country"
                        @change="getState()"
                        required
                      >
                        <option value="">Select Country</option>

                        <option
                          v-for="country in countries"
                          :key="country.id"
                          :value="country.id"
                        >
                          {{ country.name }}
                        </option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-12">
                    <label for="state" class="lableForm">State</label>
                    <select
                      id="state"
                      class="form-control"
                      style="
                        width: 100%;
                        padding-top: 2%;
                        padding-bottom: 2%;
                        font-size: 1rem;
                      "
                      v-model="formData.state"
                      @change="getCity()"
                      required
                    >
                      <option value="">Select State</option>

                      <option
                        v-for="state in states"
                        :key="state.id"
                        :value="state.id"
                      >
                        {{ state.name }}
                      </option>
                    </select>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <label for="city" class="lableForm">City</label>
                    <select
                      id="city"
                      style="
                        padding-top: 2%;
                        padding-bottom: 2%;
                        font-size: 1rem;
                      "
                      class="form-control halfinput"
                      v-model="this.formData.city"
                    >
                      <option value="" selected>Select City</option>
                      <option
                        v-for="city in cities"
                        :key="city.id"
                        :value="city.id"
                      >
                        {{ city.name }}
                      </option>
                    </select>
                  </div>

                  <div class="col-md-6 col-sm-12">
                    <div class="col-md-6 col-sm-12">
                      <label class="lableForm" for="pincode">Pincode</label
                      ><br />
                      <input
                        style="width: 100%"
                        placeholder="Pincode"
                        type="text"
                        id="pincode"
                        class="form-control"
                        v-model="formData.pincode"
                      />
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <hr style="margin-top: 3%" />
          <div style="margin-top: 3%"></div>
          <label
            @click="this.showForm2 = true"
            class="lableForm"
            style="line-height: 100%; font-size: 3vh"
            >2. OFFER :
          </label>
          <button
            v-if="showForm2"
            @click="this.showForm2 = false"
            style="
              font-size: 1rem;
              background-color: transparent;
              color: red;
              border: none;
              cursor: pointer;
              float: right;
            "
          >
            Close
          </button>

          <div v-if="showForm2">
          
            
          
          </div>
          <hr style="margin-top: 3%" />
        </div>
        <div class="col-lg-5 nubu" style="">
          <div class="innerContainer" style="padding: 0px 5%">
            <div class="plancontainer">
              <span class="title12" style="">BILLING INFORMATION</span>

              <div class="row">
                <div class="col-12" style="margin-top: 5%; margin-bottom: 1%">
                  <div style="float: left">
                    <span class="rate">Product Name</span>
                  </div>
                  <div style="float: right">
                    <span class="rate" style="">Rate(₹)</span>
                  </div>
                </div>

                <hr style="width: 100%; border: 1px solid #7070709d" />

                <div class="col-12" style="margin-top: 5%">
                  <div class="disc" style="float: left; color: #101010">
                    {{ this.productData.name }}
                  </div>
                  <div class="disc" style="float: right">
                    {{ this.productData.price }}.00
                  </div>
                </div>
                <div class="col-12" style="margin-top: 3%">
                  <div class="disc" style="float: left; color: #3d4141">
                    Coupon Discount
                  </div>
                  <div
                    class="disc"
                    style="float: right"
                    v-if="this.productData.coupon_amount"
                  >
                    {{ this.productData.coupon_amount }}.00
                  </div>
                  <div class="disc" style="float: right" v-else>00.0</div>
                </div>
                <div class="col-12" style="margin-top: 4%">
                  <div
                    style="border: 1px dashed #707070; opacity: 1;,   "
                  ></div>
                </div>

                <div class="col-12" style="margin-top: 2%">
                  <div class="disc" style="float: left; color: #101010">
                    Sub Total
                  </div>
                  <div
                    class="disc"
                    style="float: right; color: #101010"
                    v-if="this.productData.coupon_amount"
                  >
                    {{ this.subTotal() }}.00
                  </div>
                  <div class="disc" style="float: right; color: #101010" v-else>
                    {{ this.productData.price }}.00
                  </div>
                </div>

                <div class="col-12" style="margin-top: 2%">
                  <div
                    class=""
                    style="
                      font-size: 2.5vh;
                      text-decoration: underline;
                      float: left;
                      color: #101010;
                    "
                  >
                    Gst:
                  </div>
                  <!-- <div class="disc" style="float: right; color: #101010;">{{ this.formatNumber(this.PaymentDetails.Grossamount) }}.00</div> -->
                </div>

                <div class="col-12" style="margin-top: 2%">
                  <div class="disc" style="color: #3d4141; float: left">
                    C-GST(9%)
                  </div>
                  <div class="disc" style="float: right">
                    {{ this.calculateCGST(this.productData.price, 9) }}
                  </div>
                </div>
                <div class="col-12" style="margin-top: 2%">
                  <div class="disc" style="color: #3d4141; float: left">
                    S-GST(9%)
                  </div>
                  <div class="disc" style="float: right">
                    {{ this.calculateCGST(this.productData.price, 9) }}
                  </div>
                </div>
                <div class="col-12" style="margin-top: 5%">
                  <div style="border: 1px dashed #707070; opacity: 1"></div>
                </div>
                <div class="col-12" style="margin-top: 5%">
                  <div class="disc" style="float: left">Total Payment:</div>
                  <div class="disc" style="float: right">
                    {{ this.totalAmount() }}
                  </div>
                </div>
                <div class="col-12" style="margin-top: 8%">
                  <button
                    class="PaynowButton"
                    :class="{ disabled: PaynowVisible }"
                    :disabled="PaynowVisible"
                    @click="PayNow()"
                    style="
                      background-color: #2f518a;
                      color: #ffffff;
                      border: transparent;
                      padding-top: 10px;
                      cursor: pointer;
                      padding-bottom: 10px;
                      width: 100%;
                      font-weight: 600;
                    "
                  >
                    PAY NOW
                  </button>
                  <button
                    v-if="13 == this.$route.params.id"
                    class="PaynowButton"
                    @click="Login()"
                    style="
                      margin-top: 5%;
                      background-color: transparent;
                      color: #2f518a;
                      border: 1px solid;
                      cursor: pointer;
                      padding-top: 10px;
                      padding-bottom: 10px;
                      width: 100%;
                      font-weight: 600;
                    "
                  >
                    ALREADY PURCHASED ?
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  

<!-- Work In Progress End Here -->
<footer>
<!-- Blacnk Background0-blue Start Here -->
<h3 class="" style="width: 100%; background-color: #446cb1;">&nbsp;</h3>
<logoimageblack />

<!-- Logo Image -->

<!-- Link Mennu Contact Addreess -->
<div class="q-pa-md bgclass">
  <div
    class="row justify-between items-start q-gutter-md q-mb-md"
    style="margin: 0 auto; max-width: 100%; width: 90%"
  >
    <!-- Infinit ABout -->
    <div class=" col-sm-6   col-md-4 col-lg-2"   >
      <infinityabout :lorem="lorem" />
    </div>
    <!-- End Infinity About -->

    <!-- COntact Details Start Here -->
    <div class=" col-sm-6   col-md-4 col-lg-2">
      <contactdetail />
    </div>
    <!-- Contact Details End here -->

    <!-- Expert Service HEre -->
    <div class=" col-sm-6   col-md-4 col-lg-2"   >
      <expertservice />
    </div>
    <!-- Expert Service End HEre -->

    <!-- Quick links Here -->
    <div class=" col-sm-6   col-md-4 col-lg-2"    >
      <quicklink />
    </div>
    <!-- Quick links End Here -->
  </div>

  <div class="row justify-center items-center text-white q-mt-lg">
    <div class="col-auto text-center">
      <p
        style="
         
          /* UI Properties */
          color: var(--unnamed-color-ffffff);

          font: normal normal 600 1.1rem/34px Nunito;
          letter-spacing: 0px;
          color: #ffffff;
          opacity: 1;
        "
      >
        2022 copyright. All right Reserved
      </p>
    </div>
  </div>
</div>
</footer>

<form method="POST" class="pl-5 pr-5" id="paymentForm" :action="payuUrl">
  <input type="hidden" name="key" v-model="mkey" size="64" />
  <input type="hidden" name="txnid" v-model="txnid" size="64" />
  <input type="hidden"  name="amount" v-model="productData.price" size="64" />
  <input type="hidden" name="productinfo" v-model="productData.name" size="64" />
  <input type="hidden" name="firstname" v-model="formData.firstname" size="64" />
  <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
  <input type="hidden" name="email" v-model="formData.email" size="64" />
  <input type="hidden" name="phone" v-model="formData.PhoneNumber" size="64" />
  <!-- <input type="hidden" name="lastname" v-model="lastName" size="64" /> -->
  <input type="hidden" name="surl" v-model="surl" />
  <input type="hidden" name="furl" v-model="furl" />
  <input type="hidden" name="hash" id="hash" v-model="hash" size="64" />
</form>
</template>
<script>
import { useStore } from "vuex";
import axios from "./../../axios";
import { ref, watch } from "vue";
import products from "components/Products.vue";
import carousel from "components/carousel.vue";
import workInprogress from "components/WorkInProgress.vue";
import logoimageblack from "components/logoimageBlack.vue";
import infinityabout from "components/InfinityAbout.vue";
import contactdetail from "components/ContactDetails.vue";
import expertservice from "components/ExpertService.vue";
import quicklink from "components/QuickLinks.vue";
export default {
  components: {
    products,
    carousel,
    workInprogress,
    logoimageblack,
    infinityabout,
    contactdetail,
    expertservice,
    quicklink,
  },
  data() {
    return {
      country: "101",
      state: " ",
      city: " ",
      countries: [],
      states: [],
      cities: [],
      payuUrl: "https://secure.payu.in/_payment",
      mkey: "nxpvv9VZ",
      saltKey: "3oFxUMtWG2",
      surl: window.location.origin + "/success",
      furl: window.location.origin + "/",
      txnid: this.makeid(),
      productData: {
        coupon_amount: 0,
      },
      id: 0,
      showForm: false,
      showForm2: false,
      formData: {
        firstname : "",
        lastname : "",
        businessName: "",
        businessGst: "",
        salesmanName: "",
        email: "",
        PhoneNumber: "",
        phoneno: "",
        pincode: "",
        address:"none",
        country: "101",
        state: " ",
        city: " ",
      },
      errorForm:``
    };
  },
  methods: {
    makeid() {
      var text = "";
      var possible =
        "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
      for (var i = 0; i < 20; i++)
        text += possible.charAt(Math.floor(Math.random() * possible.length));

      return text;
    },
    PayNow() {

      axios.post(`payment/${this.productData.id}` , this.formData ,{
      } ).then((res)=>{

        console.log(res.data.data);
        alert(res.data.data.id);
        localStorage.setItem("userId" , res.data.data.id);
        var data =
                  this.mkey +
                  "|" +
                  this.txnid +
                  "|" +
                  this.productData.price +
                  "|" +
                  this.productData.name +
                  "|" +
                  this.formData.firstname +
                  "|" +
                  this.formData.email +
                  "|||||||||||";
                var sha512 = require("js-sha512");
                var salt = "3oFxUMtWG2";
                var hash = sha512(data + salt);

                console.log(hash);
                console.log("Here Is yourData",data);

                document.getElementById("hash").value = hash;
                document.getElementById("paymentForm").submit();

      }).catch(e =>{


          this.errorForm = e.response.data.message ; 
          this.showForm = true ; 

      });


      this.$store.commit("setUserId", 21);
      this.$store.commit("setSGST", this.calculateCGST(this.productData.price, 9));
      this.$store.commit("setCGST", this.calculateCGST(this.productData.price, 9));
      this.$store.commit("setTotalAmount",this.totalAmount());
      this.$store.commit("setDiscount", this.productData.coupon_amount);
      this.$store.commit("setCouponCode", this.couponCode);
      this.$store.commit("setProduct", this.productData.id);
    },
    getData() {
      axios
        .get("https://api.restroworld.com/api/countries?is_light=true")
        .then((result) => {
          this.countries = result.data.data;

          if (this.formData.country) {
            this.getState();
          }
        })
        .catch((error) => {
          console.error(error);
        });
    },
    getState() {
      axios
        .get("https://api.restroworld.com/api/states_of_country?is_light=1", {
          params: {
            country_id: this.formData.country,
          },
        })
        .then((result) => {
          this.states = result.data.data;
          this.formData.state = ""; // Reset the selected state
          this.getCity();
        })
        .catch((error) => {
          console.error(error);
        });
    },
    getCity() {
      axios
        .get("https://api.restroworld.com/api/cities_of_state?is_light=true", {
          params: {
            state_id: this.formData.state,
          },
        })
        .then((result) => {
          this.cities = result.data.data;
          this.formData.city = ""; // Reset the selected city
        })
        .catch((error) => {
          console.error(error);
        });
    },
    toggleForm() {
      this.showForm = !this.showForm;
    },
    calculateCGST(amount, cgstPercentage) {
      const cgstAmount = (amount * cgstPercentage) / 100;
      return cgstAmount.toFixed(2); // Return CGST amount rounded to 2 decimal places
    },
    totalAmount() {
      let totalValu = 0;
      totalValu =
        parseFloat(this.productData.price) +
        parseFloat(this.calculateCGST(this.productData.price, 9)) +
        parseFloat(this.calculateCGST(this.productData.price, 9));
      return totalValu;
    },
    subTotal() {
      let subTotal = 0;

      subTotal =
        parseFloat(this.productData.price) -
        parseFloat(this.productData.coupon_amount);

      return subTotal;
    },
  },
  mounted() {
    this.makeid();
    let id = this.$route.params.id;

    this.user_id = this.$route.params.user_id;
    this.getData();
    axios
      .get(`/show/${id}`)
      .then((res) => {
        this.productData = res.data.data;
      })
      .catch();
    const store = useStore();
    store.commit("setBackGroundColor", "#ffffff");
    store.commit(
      "setimageSrc",
      `${window.location.origin}/img/logo_blue.ca47717c.png`
    );
    store.commit("changeColor", "#012A71");

    // alert("hellow im updated  ");
  },
};
</script>
<style scoped>
.lableForm {
  text-align: left;
  font: normal normal 600 1rem Nunito;
  letter-spacing: 0px;
  margin-bottom: 20px;
  line-height: 3rem;

  color: #2f518a;
  /* border:solid; */
  opacity: 1;
}

.bgclass {
  background-image: url("./../../img/bgok.jpg");
  background-repeat: no-repeat;
  background-position: top left;
  background-size: cover;
}
.nubu {
  margin-top: 15vh;
}

input {
  border: 1px solid #ababab;
  padding-top: 8px;
  font-size: 1rem;
  padding-bottom: 8px;
  padding-left: 15px;
}

/* Define the .halfinput class */
.halfinput {
  width: 95%;
}
.container {
  padding-left: 10%;
  padding-right: 10%;
}
.plancontainer {
  /* height: 485px; */
  max-height: fit-content;
  width: 100%;
  background-color: white;
  border: 1px solid #c5c5c5;
  margin-bottom: 30px;
  padding: 4vh;
}
.disc {
  letter-spacing: var(--unnamed-character-spacing-0);
  text-align: left;
  font: normal normal 600 2.3vh Nunito;
  letter-spacing: 0px;
  /* color: #3D4141; */
  opacity: 1;
}
.rate {
  font: var(--unnamed-font-style-normal) normal var(--unnamed-font-weight-600)
    var(--unnamed-font-size-25) / 34px var(--unnamed-font-family-open-sans);
  letter-spacing: var(--unnamed-character-spacing-0);
  text-align: right;
  font: normal normal 600 2.7vh Nunito;
  letter-spacing: 0px;
  color: #2f518a;
}
/* Media query for screens with a width less than 940px */
@media (max-width: 940px) {
}

@media (max-width: 940px) {
  input {
    margin-top: 1%;
    border: 1px solid #ababab;
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 15px;
    width: 100%;
  }
  .halfinput {
    width: 100%; /* Set a different width, such as 50% */
  }

  .row {
    display: grid;
  }

  .container {
    padding-left: 4%;
    padding-right: 4%;
  }
  .nubu {
    margin-top: 9vh;
  }
}

.title12 {
  text-align: left;
  text-decoration: underline;
  letter-spacing: 0px;
  color: #2f518a;
  text-transform: uppercase;
  opacity: 1;
  font-size: 3vh;
  font: normal normal bold 2.8vh Nunito;
}
</style>