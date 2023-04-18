<template>
  <div class="row" style="max-width: 100%; height: fit-content">
    <div class="container">
      <center>
        <q-img
          src="../../img/./IB_Payment/ScrollGroup4.png"
          spinner-color="white"
          style="
            height: 15rem;
            width: 15rem;
            margin-top: 4rem;
            filter: brightness(-1000033333);
          "
        />
      </center>
      <center>
        <h1
          class="pl-5 pr-5 ml-5 mr-5 fw-300 text-danger-300 font-xssss mb-4"
          style="
            font-size: 2rem;
            width: 80%;
            font-weight: 400;

            line-height: 3rem;
            letter-spacing: -0.01562em;
            /* border: 1px solid black !important; */
            color: #00a00b !important;
          "
        >
          Your Payment Was Successful !
        </h1>
        <p
          style="
            width: 70%;
            color: rgb(65, 65, 65);
            /* text-align: justify;   text-justify: inter-word; */
          "
          class="pl-5 pr-5 ml-5 mr-5 fw-300 text-danger-300 font-xssss mb-4"
        >
          Your Payment of ₹{{ this.amount }}.00 has been SuccessFul Payment
          receipt sent to your email
        </p>
        <!-- <a v-bind:href="'/CreativeBuy'" style="" class="text-dark  ">
          <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-arrow-left"
              viewBox="0 0 16 16"
            >
              <path
                fill-rule="evenodd"
                d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"
              />
            </svg>
         Go to Creative
        </a> -->

        <div
          style="
            border: 1px solid black !important;
            width: 50%;
            margin-top: 4rem;
            padding: 3px 3px 3px 3px;
            background-color: #2f518a;
            color: white;
          "
        >
          <!-- <i class="fa-solid fa-arrow-left" style="width: 20px;"></i> -->

          <a
            v-bind:href="'/CreativeBuy'"
            class="fw-900"
            style="font-size: 1.2rem; color: white"
          >
            <svg
              id="Layer_2"
              data-name="Layer 2"
              xmlns="http://www.w3.org/2000/svg"
              width="30"
              height="22"
              style="padding-top: 5px"
              viewBox="0 0 339.195 250.71"
            >
              <path
                id="Path_7376"
                data-name="Path 7376"
                d="M134.476,256.705a13.477,13.477,0,0,1-9.33-3.635L6.881,140.275a12.129,12.129,0,0,1,0-17.8L125.146,9.682a13.651,13.651,0,0,1,18.66,0,12.177,12.177,0,0,1,0,17.8L34.739,131.376l109.066,103.9a12.129,12.129,0,0,1,0,17.8A13.477,13.477,0,0,1,134.476,256.705Z"
                transform="translate(-2.994 -5.996)"
                fill="#fff"
              />
              <path
                id="Path_7377"
                data-name="Path 7377"
                d="M329.076,41.281H16.043a13.141,13.141,0,0,1,0-26.281H329.076a13.141,13.141,0,0,1,0,26.281Z"
                transform="translate(-2.924 97.24)"
                fill="#fff"
              />
            </svg>
            &nbsp;GO TO CREATIVE SCREENS
          </a>
        </div>
        <div style="margin-top: 15%"></div>
      </center>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "AfterBuyCreative",
  methods: {},
  mounted() {
    this.id = this.$route.params.id;
    this.user_id = this.$route.params.user_id;
    this.cegst = this.$route.params.cgst;
    this.segst = this.$route.params.sgst;
    this.discount = this.$route.params.discount;
    this.amount = this.$route.params.amount_pay;
    console.log("hello", this.cgst, this.amount);

    this.subscribe = JSON.parse(localStorage.getItem("copondetails"));
    if (this.subscribe) {
      this.coupon_code = this.text;
    } else {
      this.coupon_code = "";
    }

    axios
      .post("https://api.infinitybrains.com/public/api/paymentstatusupdate", {
        user_id: this.user_id,
        payment_status: "1",
        product_id: this.id,
        cgst: this.cegst,
        sgst: this.sgst,
        discount: this.discount,
        amount: this.amount,
      })
      .then((result) => {
        console.log(result.data);
      });
  },
};
</script>

<style>
* {
  align-items: center;
  justify-content: center;
}
body {
  background-color: rgb(236, 235, 235);
}

.container {
  /* background-image: url('../../img/./IB_Payment/Group2262.png'); */
  background-image: url("../../img/./IB_Payment/Group12262.svg");
  border-radius: 10px;
  background-color: rgb(255, 255, 255);
  width: 40rem;
  /* border: 1px solid black !important; */
  margin-top: 2rem;
  height: fit-content;
}
.hadder {
}
</style>
