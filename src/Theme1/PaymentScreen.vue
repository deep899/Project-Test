<template>
  <div>
    <Home />
  </div>
  <div class="maincontainer" style="width: 100%">
    <div class="container-bg bgImgContainer" :style="{ backgroundImage: 'url(' + backgroundImageUrl + ')' }">
    </div>
    <div class="container" style="">
      <div class="row" style="">
        <div class="col-lg-7 col-md-7 col-sm-12" style="">

          <div v-if="showForm" style="margin-top: 2%" ref="scrollableDiv">
            <div class="form-container formcontainer" style="width: 100%; border: 1px solid #c5c5c5">
              <label @click="toggleForm" class="lableForm lableForm-heading">FILL THE
                DETAILS</label>
              <!-- <span v-if="this.errorForm" sty>{{ this.errorForm }}</span> -->
              <form style="padding: 1.5rem">
                <span style="
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 1.2rem;
                    color: rgb(255, 4, 4);
                    width: 100%;
                  ">{{ this.errorForm }}</span>

                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <label class="lableForm" for="firstname ">First Name</label>
                    <input style="" placeholder="firstname " type="text" id="firstname " class="halfinput form-control"
                      v-model="formData.firstname" />
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <label class="lableForm" for="lastname ">Last Name</label>
                    <input style="width: 100%" placeholder="lastname " type="text" id="lastname " class="form-control"
                      v-model="formData.lastname" />
                  </div>
                </div>

                <div class="col-md-6 col-sm-12">
                  <label class="lableForm" for="emailPhoneNumber">Email </label>
                  <input style="width: 100%" placeholder="Email" type="email" id="emailPhoneNumber" class="form-control"
                    v-model="formData.email" />
                </div>

                <div class="col-md-6 col-sm-12">
                  <label class="lableForm" for="businessGst">Business GST Number</label>
                  <input style="width: 100%" placeholder="Business GST Number" type="text" id="businessGst"
                    class="form-control" v-model="formData.businessGst" />
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <label class="lableForm" for="salesmanName">Salesman Code</label>
                    <input style="width: 100%" placeholder="Salesman Code" type="text" id="salesmanName"
                      class="form-control" v-model="formData.salesmanName" />
                  </div>
                </div>
                <div class="col-md-6 col-sm-12">
                  <label class="lableForm" for="emailPhoneNumber">Email </label>
                  <input style="width: 100%" placeholder="Email" type="email" id="emailPhoneNumber" class="form-control"
                    v-model="formData.email" />
                </div>

                <div class="col-md-6 col-sm-12">
                  <label class="lableForm" for="phone Number">Phone Number
                  </label>
                  <input style="width: 100%" placeholder="Phone Number" type="text" id="emailPhoneNumber"
                    class="form-control" v-model="formData.phoneno" />
                </div>

                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <label for="country" class="lableForm">Country</label>
                    <div class="select-wrapper">
                      <select id="country" class="form-control halfinput" style="
                          padding-top: 2%;
                          padding-bottom: 2%;
                          font-size: 1rem;
                        " v-model="formData.country" @change="getState()" required>
                        <option value="">Select Country</option>

                        <option v-for="country in countries" :key="country.id" :value="country.id">
                          {{ country.name }}
                        </option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-12">
                    <label for="state" class="lableForm">State</label>
                    <select id="state" class="form-control" style="
                        width: 100%;
                        padding-top: 2%;
                        padding-bottom: 2%;
                        font-size: 1rem;
                      " v-model="formData.state" @change="getCity()" required>
                      <option value="">Select State</option>

                      <option v-for="state in states" :key="state.id" :value="state.id">
                        {{ state.name }}
                      </option>
                    </select>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 col-sm-12">
                    <label for="city" class="lableForm">City</label>
                    <select id="city" style="
                        padding-top: 2%;
                        padding-bottom: 2%;
                        font-size: 1rem;
                      " class="form-control halfinput" v-model="this.formData.city">
                      <option value="" selected>Select City</option>
                      <option v-for="city in cities" :key="city.id" :value="city.id">
                        {{ city.name }}
                      </option>
                    </select>
                  </div>

                  <div class="col-md-6 col-sm-12">
                    <div class="col-md-6 col-sm-12">
                      <label class="lableForm" for="pincode">Pincode</label><br />
                      <input style="width: 100%" placeholder="Pincode" type="text" id="pincode" class="form-control"
                        v-model="formData.pincode" />
                    </div>
                  </div>
                </div>

                <div class="col-12" style="margin-top: 8%">
                  <button class="PaynowButton" :class="{ disabled: PaynowVisible }" :disabled="PaynowVisible"
                    @click="PayNow()" style="
                      background-color: #2f518a;
                      color: #ffffff;
                      border: transparent;
                      padding-top: 10px;
                      cursor: pointer;
                      padding-bottom: 10px;
                      width: 100%;
                      font-weight: 600;
                    ">
                    PAY NOW
                  </button>
                </div>

              </form>
            </div>
          </div>

          <hr style="margin-top: 5%" />
        </div>

        <div class="col-lg-5 col-md-5 col-sm-12 nubu" style="">
          <div class="innerContainer" style="">
            <div class="row" style=" margin-bottom: 5%; padding:10px;background-color: #2f518a;color: white; "> 
                <div class="col-6" @click="website()" style="cursor: pointer;  display: flex;align-items: center;justify-content: center;" >WEB-Site</div><hr style=" border: none; /* Remove the default horizontal line */
  border-left: 1px solid #ffffff; /* Add a 1px solid black left border */
  height: 25px; /* Set the desired height of the vertical line */
  margin: 0 10px;"/>
                <div class="col-5" @click="phone1()" style="cursor: pointer;  display: flex;align-items: center;justify-content: center;">Application </div>
              </div>
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

                <!-- <div class="col-12" style="margin-top: 4%">
                  <div style="border: 1px dashed #707070; opacity: 1;,   "></div>
                </div> -->

                <div class="col-12" style="margin-top: 2%">
                  <div class="disc" style="float: left; color: #101010">
                    Price
                  </div>
                  <div class="disc" style="float: right; color: #101010" v-if="this.Discount.discount">
                    {{ this.subTotal() }}.00
                  </div>
                  <div class="disc" style="float: right; color: #101010" v-else>
                    {{ this.price }}.00
                  </div>
                </div>

                <div class="col-12" style="margin-top: 2%">
                  <div class="disc" style="color: #3d4141; float: left">
                    C-GST(9%)
                  </div>
                  <div v-if="this.Discount.discount" class="disc" style="float: right">
                    {{ this.calculateCGST(this.subTotal(), 9) }}
                  </div>
                  <div v-else class="disc" style="float: right">
                    {{ this.calculateCGST(this.price, 9) }}
                  </div>
                </div>

                <div class="col-12" style="margin-top: 2%">
                  <div class="disc" style="color: #3d4141; float: left">
                    S-GST(9%)
                  </div>
                  <div v-if="this.Discount.discount" class="disc" style="float: right">
                    {{ this.calculateCGST(this.subTotal(), 9) }}
                  </div>
                  <div v-else class="disc" style="float: right">
                    {{ this.calculateCGST(this.price, 9) }}
                  </div>
                </div>
                <div class="col-12" style="margin-top: 5%">
                  <div style="border: 1px dashed #707070; opacity: 1"></div>
                </div>

                <div class="col-12" style="margin-top: 5%">
                  <div class="disc" style="float: left">Total Payment:</div>
                  <div class="disc" style="float: right">
                    {{ this.total_amount }}
                  </div>
                </div>
                <div class="col-12" style="margin-top: 8%">
                  <button class="PaynowButton" :class="{ disabled: PaynowVisible }" :disabled="PaynowVisible"
                    @click="PayNow()" style="
                      background-color: #2f518a;
                      color: #ffffff;
                      border: transparent;
                      padding-top: 10px;
                      cursor: pointer;
                      padding-bottom: 10px;
                      width: 100%;
                      font-weight: 600;
                    ">
                    PAY NOW
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

  <form method="POST" class="pl-5 pr-5" id="paymentForm" :action="payuUrl">
    <input type="hidden" name="key" v-model="mkey" size="64" />
    <input type="hidden" name="txnid" v-model="txnid" size="64" />
    <input type="hidden" name="amount" v-model="finalAmount1" size="64" />
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
import axios from "./../axios";
import { ref, watch } from "vue";
import products from "components/Products.vue";
import carousel from "components/carousel.vue";
import workInprogress from "components/WorkInProgress.vue";
import logoimageblack from "components/logoimageBlack.vue";
import infinityabout from "components/InfinityAbout.vue";
import contactdetail from "components/ContactDetails.vue";
import expertservice from "components/ExpertService.vue";
import quicklink from "components/QuickLinks.vue";
import Home from "./Home.vue";

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
    Home
  },
  setup() {

    return {

      inception: ref(false),

    }
  },
  data() {
    return {
      backgroundImageUrl: require('./../../src/Theme1/10_Min_assets/img/wave2.png'), // Set the background image dynamically
      country: "101",
      inception: ref(false),
      state: " ",
      city: " ",
      totalList: 0,
      price:0,
      countries: [],
      states: [],
      cities: [],
      couponlist: [],
      titleShow: true,
      Discount: [],
      otpDigits: ['', '', '', '', '', ''],
      username: '',
      password1: '',
      confirmpassword: '',
      login: true,
      emailPopup: false,
      forgotpassword: false,
      reset: false,
      email1: '',
      payuUrl: "https://secure.payu.in/_payment",
      mkey: "nxpvv9VZ",
      saltKey: "3oFxUMtWG2",
      surl: window.location.origin + "/home/User/Success",
      furl: window.location.origin + "/",
      txnid: this.makeid(),
      productData: {
        coupon_amount: 0,
      },
      couponSearch: "",
      id: 0,
      discount: 0,
      showForm: true,
      finalAmount1: 0,
      // showForm2: false,
      formData: {
        firstname: "",
        lastname: "",
        businessName: "",
        businessGst: "",
        salesmanName: "",
        email: "",
        product: this.id,
        PhoneNumber: "",
        phoneno: "",
        website: "",
        company_logo: '',
        pincode: "",
        address: "none",
        country: "101",
        company_logo: " ",
        state: " ",
        city: " ",
      },
      errorForm: ``,
    };
  },
  methods: {
    website(){

      this.productData.price = 24999;

      this.price = 24999;
    

    },
    
    phone1(){
      
     this.price = 9999

    },

    VerifyOtps() {

      axios.post('otpverify', {
        email: this.email1,
        otp: this.otpDigits.join(''),
        new_password: this.password1,
        confirm_password: this.confirmpassword
      }).then((res) => {
        console.log(res.data.data);
        this.emailPopup = false;
        alert("password is change");
      }).catch();


    },
    handleKeyDown(index, event) {
      // Handles navigation and deletion of digits based on key events
      if (event.key === 'Backspace' && index > 0 && this.otpDigits[index] === '') {
        // Move focus to the previous input on Backspace key press
        this.$refs.otpInput[index - 1].focus();
      } else if (event.key === 'Delete' && index < this.otpDigits.length - 1 && this.otpDigits[index] === '') {
        // Move focus to the next input on Delete key press
        this.$refs.otpInput[index + 1].focus();
      }
    },
    handleInput(index) {
      // Automatically moves focus to the next input upon entering a digit
      if (index < this.otpDigits.length - 1 && this.otpDigits[index] !== '') {
        this.$refs.otpInput[index + 1].focus();
      }
    },
    handlePaste(event) {
      event.preventDefault();
      const pasteData = event.clipboardData.getData('text/plain');
      const digits = pasteData.slice(0, 6).split('');
      this.otpDigits = digits.concat(Array(6 - digits.length).fill(''));
    },
    forgot() {
      axios.post('forgotpassword', { email: this.email1 }).then((res) => {

        console.log(res.data.data);
        this.inception = false;
        this.emailPopup = true;

      });


    },

    async loginUser() {

      try {
        const response = await axios.post('login', {
          email: this.email1,
          password: this.password1,
        });

        // Process the response as needed
        localStorage.setItem("token", response.data.data.token);
        this.$router.push('/CreativeBuy');
        this.$store.commit("setEmail", this.email1);
        this.$store.commit("setPassword", this.password1);

      } catch (error) {

        console.error('Error:', error);
      }
    },

    makeid() {
      var text = "";
      var possible =
        "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
      for (var i = 0; i < 20; i++)
        text += possible.charAt(Math.floor(Math.random() * possible.length));

      return text;
    },
    handleFileChange(event) {
      this.formData.company_logo = event.target.files[0];
      // Process the selected file as needed
    },
    PayNow() {



      const formData = new FormData();



      // Append the company_logo (image) field
      formData.append('company_logo', fileInput.files[0]);
      formData.append('firstname', this.formData.firstname);
      formData.append('lastname', this.formData.lastname);
      formData.append('businessName', this.formData.businessName);
      formData.append('businessGst', this.formData.businessGst);
      formData.append('salesmanName', this.formData.salesmanName);
      formData.append('email', this.formData.email);
      formData.append('product', this.id);
      formData.append('PhoneNumber', this.formData.PhoneNumber);
      formData.append('phoneno', this.formData.phoneno);
      formData.append('website', this.formData.website);
      formData.append('pincode', this.formData.pincode);
      formData.append('address', this.formData.address);
      formData.append('country', this.formData.country);
      formData.append('state', this.formData.state);
      formData.append('city', this.formData.city);


      axios
        .post(`payment/${this.productData.id}`, formData, {})
        .then((res) => {
          formData.append('user_id', res.data.data.id);
          formData.append('contact_number', this.formData.phoneno);
          axios
            .post(`creativedata`, formData).then((res) => {
              console.log(res.data);

              console.log(res.data.data);
              // alert(res.data.data.id);

              var data =
                this.mkey +
                "|" +
                this.txnid +
                "|" +
                this.finalAmount1 +
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
              console.log("Here Is yourData", data);

              document.getElementById("hash").value = hash;
              document.getElementById("paymentForm").submit();



            }).catch((e) => {

              this.errorForm = e.response.data.message;
              this.showForm = true;
              window.scrollTo(0, 50);

            });
          localStorage.setItem("userId", res.data.data.id);
          localStorage.setItem("prodId", this.id);
          localStorage.setItem("amount", this.finalAmount1);
          localStorage.setItem("userpass", this.formData.password);
        })
        .catch((e) => {
          this.errorForm = e.response.data.message;
          this.showForm = true;
          window.scrollTo(0, 50);

        });

      this.$store.commit("setUserId", 21);
      this.$store.commit(
        "setSGST",
        this.calculateCGST(this.productData.price, 9)
      );

      this.$store.commit(
        "setCGST",
        this.calculateCGST(this.productData.price, 9)
      );
      this.$store.commit("setTotalAmount", this.totalAmount());
      this.$store.commit("setDiscount", this.productData.coupon_amount);
      this.$store.commit("setCouponCode", this.couponCode);
      this.$store.commit("setProduct", this.productData.id);
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
      let subTotal = 23000;

      subTotal =
        parseFloat(this.productData.price) - parseFloat(this.Discount.discount);

      return subTotal;
    },
    calculateDiscountPercentage(originalPrice, discountedPrice) {
      // console.log("thow ",originalPrice , discountedPrice);
      const percentageOff = (discountedPrice / originalPrice) * 100;

      return percentageOff.toFixed(2);
    },
    applyeCouponCode() {
      axios
        .post(
          "checkcoupen/" + this.id,

          {
            code: this.couponSearch,
          }
        )
        .then((res) => {
          console.log(res.data.data);
          this.Discount = res.data.data;
          this.finalAmount1 = this.calculateCGST(this.subTotal(), 9) * 2 + this.subTotal();

        })
        .catch();
    },
    appliedCouponed(id) {
      this.showPopup = false;
      this.showPopup1 = true;
      this.status = 0;
      axios
        .get(`showcoupen?filter={"id":"${id}","is_published":"1"}`)
        .then((res) => {
          console.log("data3", res.data);

          this.couponSearch = res.data.data.data[0].code;
          this.applyeCouponCode();
        });
      // Wait for the Vue next tick to ensure the popup is rendered
      // this.couponCode = 'IBcoupon'
    },
  },
  mounted() {
    this.makeid();
    this.id = this.$route.params.id;

    this.user_id = this.$route.params.user_id;
    this.getData();
    this.price = 24999;
   
    let productPrice = parseFloat(this.productData.price);
        let cgstAmount = parseFloat((this.price * 9) / 100);
        let sgstAmount = parseFloat((this.price * 9) / 100);
        this.total_price = this.price   + cgstAmount + sgstAmount;
       
    this.total_amount = this.price + cgstAmount + sgstAmount;
    axios
      .get(`/show/${this.id}`)
      .then((res) => {
        this.productData = res.data.data;
        // alert( this.productData.price);

        const productPrice = parseFloat(this.productData.price);
        const cgstAmount = parseFloat((this.productData.price * 9) / 100);
        const sgstAmount = parseFloat((this.productData.price * 9) / 100);

        const totalAmount = productPrice + cgstAmount + sgstAmount;

        this.finalAmount1 = Math.ceil(totalAmount);
      })
      .catch();

    axios
      .get(`showcoupen?filter={"product":"${this.id}","is_published":"1"}`)
      .then((res) => {
        console.log("Im here ", res.data.data.data[0].price);

        this.couponlist = res.data.data.data;
        this.discount = res.data.data.data[0].price;
        this.totalList = res.data.data.total;
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

.lableForm-heading {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: rgb(47, 81, 138);
  color: white;
  line-height: 2.125em;
  font-size: 1.5em;
}

.bgclass {
  background-image: url("./../img/bgok.jpg");
  background-repeat: no-repeat;
  background-position: top left;
  background-size: cover;
}

.nubu {
  margin-top: 4vh;
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

.couponInput {
  width: 50%;
  padding: 0px;
  padding-left: 3%;
  padding-top: 1%;
  padding-bottom: 1%;
}

.container {
  padding-left: 14%;
  padding-right: 14%;
}

.container-bg {
  text-align: center;
  margin-bottom: 20px;
  padding: 53px;
}

.bgImgContainer {
  background-image: url('{{ backgroundImageUrl }}');
  /* Use double curly braces for dynamic values */
  background-position: bottom;
  /* height: 8rem; */
}

.innerContainer {
  padding: 0px 8%;
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
  font: var(--unnamed-font-style-normal) normal var(--unnamed-font-weight-600) var(--unnamed-font-size-25) / 34px var(--unnamed-font-family-open-sans);
  letter-spacing: var(--unnamed-character-spacing-0);
  text-align: right;
  font: normal normal 600 2.7vh Nunito;
  letter-spacing: 0px;
  color: #2f518a;
}

.couponDescription {
  text-align: left;
  font: normal normal 600 2.3vmin Nunito;
  letter-spacing: 0px;
  color: #5e5e5e;
}

.couponCode {
  text-align: left;
  font: normal normal 600 2.8vmin Nunito;
  letter-spacing: 0px;
  line-height: 2vmin;
  color: #2f518a;
}

.title {
  text-align: left;
  font: normal normal 600 1.2rem Nunito;
  letter-spacing: 0px;
  color: #272727;
}

.container1 {
  margin-left: 2%;
  width: 100%;
}

.parDiv {
  line-height: 1;
  background-color: #2f518a;
  height: 100%;
  padding: 10px;
  width: 88px;
  font-family: "Merienda", cursive;
  text-align: left;
  font-size: 2rem;
  letter-spacing: 0px;
  color: #ffffff;
}

.ApplyCouponCodeContainer {
  height: 100px;
  padding-bottom: 8px;
  padding-top: 8px;
  padding-left: 8px;
  padding: 8px;
  position: relative;
  background: #ffffff 0% 0% no-repeat padding-box;
  border-bottom: 1px solid #c5c5c5;
  margin-top: 3%;
  margin-bottom: 2%;
  display: flex;
  /* justify-content: space-between; */

  /* align-items: center; */
}

.outerDiv::-webkit-scrollbar {
  display: none;
  /* Hide the scrollbar */
}

.loading-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 50;
  background-color: rgba(0, 0, 0, 0.5);
  display: flex;
  justify-content: center;
  align-items: center;
  opacity: 1;
  /* Start with 0 opacity to make it invisible initially */

  transition: opacity 0.3s ease-in-out;
  /* Add transition property for opacity */
}

.overlay-content {

  width: 70vh;
  padding: 22px;
  max-width: 500px;
  /* height: 50%; */
  max-height: fit-content;
  max-width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  /* Align items to the left */
  background-color: #ffffff;
  /* padding: 20px; */
  border-radius: 8px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
}



.applyButton {
  float: right;
  margin-top: 1%;
  margin-right: 1%;
  padding: 4px 5%;
  border-color: #2f518a !important;
  border: 1px solid;
  cursor: pointer;
  background-color: #2f518a;
  border-radius: 0px;
  color: #ffffff;
}

/* Media query for screens with a width less than 940px */
@media (max-width: 940px) {}

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
    width: 100%;
    /* Set a different width, such as 50% */
  }

  .couponDescription {
    text-align: left;
    font: normal normal 600 3vmin Nunito;
    letter-spacing: 0px;
    color: #5e5e5e;
  }

  .row {
    display: grid;
  }

  .innerContainer {
    padding: 0px 0%;
  }

  .container {
    padding-left: 4%;
    padding-right: 4%;
  }

  .nubu {
    margin-top: 9vh;
  }

  .couponInput {
    width: 60%;
    padding: 0px;
    padding-left: 3%;
    padding-top: 1%;
    padding-bottom: 1%;
  }
}

.otp-container {
  display: flex;
  justify-content: center;
}

.otp-input {
  width: 55px;
  height: 40px;
  margin: 5px;
  font-size: 1rem;
  z-index: 50000;
  text-align: center;
  border: none;
  color: #0AAFE3;
  border-bottom: 2px solid #0AAFE3;
  outline: none;
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
