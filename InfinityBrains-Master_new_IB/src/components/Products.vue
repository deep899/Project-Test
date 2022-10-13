<template>
<div class="mainContainer">
    <!-- <div class="row product" v-for="item in list" :key="item.id"> -->

      <table  class="" >
    <div class="w-50 row product" v-for="item in listdef" v-bind:key="item.id">
        <!-- <router-link to={{item.id}}>
        <img
          class="col-sm-6 col-xs-12 self-center text-center"
          :src="item.product_image"
          alt=""
          style="width: 35rem; margin-left: 7rem; margin-top: 7rem"
      />

        {{item.id}}
    </router-link> -->
        <!-- <router-link to="{ name: 'category/edit', params: { categoryId: {{ category.id }} }" class="dropdown-item"> -->

          <router-link :to="'/'+item.name">

                <td>
            <img class="col-sm-6 col-xs-12 self-center text-center" :src="item.product_image" alt="" style="width: 35rem; margin-left: 7rem; margin-top: 7rem" />
          </td>


          </router-link>

        <div class="col-2 text-center col-md-6 col-xs-12" style="margin-top: 5rem">
          <!-- <td>           </td>
          <td>           </td>
          <td>           </td>
          <td>           </td>
          <td>           </td>
          <td>           </td>
          <td>           </td>
          <td>           </td>
          <td>           </td>
          <td>           </td>

          <td>           </td>
          <td>           </td>
          <td>           </td>
          <td>           </td>
          <td>           </td>
          <td>           </td>
          <td>           </td>
          <td>           </td> -->



          <td>
          <h4 class="
            product-sub-heading
            text-indigo-6 text-weight-bold
            text-align-last:
            justify
          " style="
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold',
              sans-serif;
          ">
                {{ item.name }}
            </h4>
            <p class="product-desc text-body2" style="width: 60%; margin-left: 176px; text-align: left">
                {{ item.desc }}
            </p>
          </td>
          <tr></tr>
            <!-- <td>           </td>
            <td>           </td>
            <td>           </td>
            <td>           </td>
            <td>           </td>
            <td>           </td>
            <td>           </td>
            <td>           </td>
            <td>           </td>
            <td>           </td>
            <td>           </td>
            <td>           </td>
            <td>           </td>
            <td>           </td>
            <td>           </td>
            <td>           </td>
            <td>           </td>
            <td>           </td>
            <td>           </td>
            <td>           </td>
            <td>           </td>
            <td>           </td>
            <td>           </td>
            <td>           </td>
            <td>           </td>
            <td>           </td>
            <td>           </td>

  -->

        </div>

    </div>
  </table>
</div>
</template>

<script>
import {
    defineComponent,
    VueElement
} from "vue";
import axios from "axios";

export default defineComponent({
    name: "products",
    data() {
        return {
            listdef: [],
            listdef1: [],
            list1: [],
            list2: [],
            list3: [],
            responseData: [],
            UrlStringobject: []
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

        // let result = await axios.get(

        //     "https://uatapi.infinitybrains.com/public/api/show/8"
        // );
        // //console.warn(result.data.data);
        // this.list1 = result.data.data;

        // let result2 = await axios.get(
        //   "https://uatapi.infinitybrains.com/public/api/show/9"
        // );
        //#########################################################################################################################
        // this is information Is important to know about it
        // Axios url Element : resultfinal

        // Bind data Form Axios to :this.listdef
        //#########################################################################################################################
        //################################################################# This Axios Is Redirect All Data #######################

        let resultfinal = await axios.get("https://uatapi.infinitybrains.com/public/api/show");
        this.listdef = resultfinal.data.data;

        //################################################################# This Axios Is Redirect All Data #######################

        let resultfinal1 = await axios.get("https://uatapi.infinitybrains.com/public/api/show");
        //console.warn(result.data.data);
        this.listdef1 = resultfinal1.data.data;

        console.warn(this.listdef.data.id);
        this.$routes.push({
            name: "hrms"
        });

    },

});
</script>

<style scoped>
.mainContainer {

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
table {
   border-spacing: 33px;
   width:117em;



  margin-left: auto;
  margin-right: auto;
}

</style>
