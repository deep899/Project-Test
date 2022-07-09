<template>
  <div class="mainContainer">
    <!-- <div class="row product" v-for="item in list" :key="item.id"> -->

    <!-- =============================================product1============================================ -->
    <div class="row product">
      <router-link to="/hrms">
        <img
          class="col-sm-6 col-xs-12 self-center text-center"
          :src="list1.product_image"
          alt=""
          style="width: 35rem; margin-left: 7rem; margin-top: 7rem"
      /></router-link>
      <div
        class="col-2 text-center col-md-6 col-xs-12"
        style="margin-top: 5rem"
      >
        <h4
          class="
            product-sub-heading
            text-indigo-6 text-weight-bold
            text-align-last:
            justify
          "
          style="
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold',
              sans-serif;
          "
        >
          {{ list1.name }}
        </h4>
        <p
          class="product-desc text-body2"
          style="width: 60%; margin-left: 176px; text-align: left"
        >
          {{ list1.desc }}
        </p>
      </div>
    </div>

    <!-- =============================================product2============================================ -->
    <div class="row product2">
      <router-link to="/IBsalesforce">
        <img
          class="col-sm-6 col-xs-12 self-center text-center"
          :src="list2.product_image"
          alt=""
          style="width: 35rem; margin-left: 7rem; margin-top: 7rem"
      /></router-link>
      <div
        class="col-2 text-center col-md-6 col-xs-12"
        style="margin-top: 5rem"
      >
        <h4
          class="
            product-sub-heading
            text-indigo-6 text-weight-bold
            text-align-last:
            justify
          "
        >
          {{ list2.name }}
        </h4>
        <p
          class="product-desc text-body2"
          style="width: 60%; margin-left: 176px; text-align: left"
        >
          {{ list2.desc }}
        </p>
      </div>
    </div>
    <!-- =============================================product3============================================ -->
    <div class="row product3">
      <router-link to="/festivalCreative">
        <img
          class="col-sm-6 col-xs-12 self-center text-center"
          :src="list3.product_image"
          alt=""
          style="width: 35rem; margin-left: 7rem; margin-top: 7rem"
      /></router-link>
      <div
        class="col-2 text-center col-md-6 col-xs-12"
        style="margin-top: 5rem"
      >
        <h4
          class="
            product-sub-heading
            text-indigo-6 text-weight-bold
            text-align-last:
            justify
          "
        >
          {{ list3.name }}
        </h4>
        <p
          class="product-desc text-body2"
          style="width: 60%; margin-left: 176px; text-align: left"
        >
          {{ list3.desc }}
        </p>
      </div>
    </div>
  </div>
</template>

<script>
import { defineComponent } from "vue";
import axios from "axios";
export default defineComponent({
  name: "products",
  data() {
    return {
      list1: [],
      list2: [],
      list3: [],
    };
  },
  props: {
    img: {
      type: String,
    },
    name: {
      type: String,
    },
    prod_descr: {
      type: String,
    },
  },
  async mounted() {
    let result = await axios.get(
      "https://uatapi.infinitybrains.com/public/api/show/8"
    );
    console.warn(result.data.data);
    this.list1 = result.data.data;

    let result2 = await axios.get(
      "https://uatapi.infinitybrains.com/public/api/show/9"
    );
    console.warn(result2.data.data);
    this.list2 = result2.data.data;

    let result3 = await axios.get(
      "https://uatapi.infinitybrains.com/public/api/show/10"
    );
    console.warn(result3.data.data);
    this.list3 = result3.data.data;
  },
});
</script>
<style scoped>
.mainContainer {
  display: grid;
  grid-template-rows: 1fr 1fr 1fr;
  /* grid-template-rows: 10% 1fr 1fr 10%; */
}
row product1 {
  grid-row: 1/2;
}
row product2 {
  grid-row: 2/3;
}
row product3 {
  grid-row: 3/4;
}
</style>