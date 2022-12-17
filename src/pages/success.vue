<template>
  <div>
    <body class="text-center mont-font">
      <main class="form-signin">
        <div class="card w-100 shadow-sm rounded border-0 mb-3 ">
          <div v-if="errormas" class="alert alert-success" role="alert">
            {{ errormas }}
          </div>
          <b-img
            style="height: 111px;width: auto;margin-top: 6rem !important; margin-bottom: 2rem !important;"
            center
            src="../../assets/paymentsuses.png"
            alt="Center image"
          ></b-img>

          <h1
            class="text-success fw-600 text-danger-600 font-xl"
            style="color: #00a00b!important;"
          >
            Your Payment Was Successful !
          </h1>
          <p class="pl-5 pr-5 ml-5 mr-5 fw-300 text-danger-300 font-xssss mb-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero
            laboriosam eligendi laudantium numquam itaque! Asperiores ex soluta
            quaerat, reiciendis ab autem modi voluptates odio cum. Rem atque ab
            quam aliquid, possimus non eius nisi ullam aliquam, est molestiae
            voluptate voluptatibus vitae fuga, et commodi tenetur ipsum culpa!
            Accusamus impedit earum consequuntur a nisi laborum nobis laudantium
            nulla fuga vel, eni!
          </p>

          <a
            v-bind:href="'/'"
            style="margin-bottom: 6rem !important;"
            class="text-dark font-xsss fw-600"
            ><svg
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
            Go to Home</a
          >
        </div>
      </main>
    </body>
  </div>
</template>
<script>
import axios from "axios";
export default {
  Name: "success",
  data() {
    return {
      amount_pay:'534',
              products: '9',
              coupon_code: "123",
              sgst: '26.7',
              cgst:'26.7',
              discount:'10',
              id:'8',
              user_id:'36',
      errormas: '',

      errormasss: '',
    };
  },
  methods: {



  },

  mounted() {
    this.id  = this.$route.params.id;
    this.user_id  = this.$route.params.user_id;
    this.cegst  = this.$route.params.cgst;
    this.segst  = this.$route.params.sgst;
    this.discount = this.$route.params.discount;
    this.amount = this.$route.params.amount_pay;
    console.log("hello",this.cgst,this.amount);


    this.subscribe = JSON.parse(localStorage.getItem("copondetails"));
    if (this.subscribe) {
      this.coupon_code = this.text;
    } else {
      this.coupon_code = "";
    }


      axios
        .post("https://uatapi.infinitybrains.com/public/api/paymentstatusupdate", {
          user_id:this.user_id
          ,payment_status:"1"
          ,product_id: this.id
          ,cgst:this.cegst
          ,sgst:this.sgst
          ,discount:this.discount
          ,amount:this.amount


      })
        .then((result) => {


            console.log(result.data);


        });


    if (localStorage.getItem("expireSession")) {
      setTimeout(() => {
        localStorage.removeItem("expireSession");
      }, 10000);
    } else if (!localStorage.getItem("expireSession")) {
      this.$router.push("/");
    }

  },
};
</script>

<style scoped>
body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
}

.form-signin {
  width: 100%;
  max-width: 674px;

  margin: auto;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.content {
  text-align: center;
}

.content h1 {
  font-size: 25px;
  padding-top: 25px;
}

.content a {
  width: 200px;
  height: 35px;
  color: #fff;
  border-radius: 30px;
  padding: 5px 10px;
  background: #f01b1b;
  transition: all ease-in-out 0.3s;
}

.content a:hover {
  text-decoration: none;
  background: #000;
}
</style>
