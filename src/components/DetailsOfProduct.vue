<template>
  <div class="mainContainer">
    <!-- =======================main product section===================================== -->
    <div class="product">
      <!-- =======================main product Image section===================================== -->
      <div class="img">
        {{ list.product_image }}
      </div>
      <!-- =======================main product Side part section===================================== -->
      <div class="sidePart">
        <div class="name"></div>
        <div class="info"></div>
        <div class="btn"></div>
      </div>
    </div>
    <!-- =======================discription section===================================== -->
    <div class="desc"></div>
    <!-- =======================demo image section===================================== -->
    <div class="demo"></div>
  </div>
</template>
<script>
import { computed } from "@vue/runtime-core";
export default {
  name: DetailsOfProduct,

  data() {
    return {
      list: [],
    };
  },
  async mounted() {
    let result = await axios.get(
      "https://uatapi.infinitybrains.com/public/api/show"
    );
    console.warn(result.data.data);
    this.list = result.data.data;
  },
};
</script>
<style scoped>
/* .mainContainer {
  display: grid;
  grid-template-rows: 1fr 1fr 1fr;
} */
/* <!-- =======================main product section===================================== --> */
/* .product {
  grid-row: 1/2;
} */

/* <!-- =======================discription section===================================== --> */
/* .desc {
  grid-row: 2/3;
} */

/* <!-- =======================demo image section===================================== --> */
/* .demo {
  grid-row: 3/4;
}
</style> */
