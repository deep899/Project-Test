<template>
  <div style="margin-top: 5%">
    <div class="container" style="width: 80%; margin: 0 auto">
      <div
        v-for="(item, index) in listdef"
        :key="item.id"
        class="row"
        style="height: 60vh; max-height: fit-content"
      >
        <div
          v-if="index % 2 == 0"
          class="col-md-6 col-sm-12"
          style="display: flex; align-items: center; justify-content: right"
        >
          <router-link :to="'/' + item.id">
            <img
              style="
                height: 40vh;
                width: 60vh;
                max-width: 100%;
                max-height: 100%;
                margin-left: -23%;
              "
              :src="item.product_image"
              :alt="item.name"
            />
          </router-link>
        </div>
        <div class="col-md-6 col-sm-12" style="">
          <div
            class="row"
            style="margin-left: 10%; max-width: 100%; max-height: fit-content"
          >
            <h3 class="col-12 nameProduct" style="margin-top: 10vh">
              {{ item.name }}
            </h3>
            <!-- <p class="  col-12" style="width:80%; justify-content: left;">{{ item.desc }}</p> -->
            <p
              class="col-12"
              style="
                width: 80%;
                font-size: 1rem;
                margin-top: -2%;
                justify-content: left;
                max-height: fit-content;
              "
            >
              <!-- The human resources management system (HRMS) is a classic solution for managing any company or firm. It constructs a pliable schedule as per the suitability of the company. It provides easy access to all employees without hampering the work engagements of the team members.  -->
              {{ item.short_desc }}
            </p>
          </div>
        </div>
        <div
          v-if="index % 2 !== 0"
          class="col-md-6 col-sm-12"
          style="display: flex; align-items: center"
        >
          <router-link :to="'/' + item.id">
            <img
              style="
                height: 40vh;
                width: 60vh;
                margin-left: 10%;
                max-width: 100%;
                max-height: 100%;
              "
              :src="item.product_image"
              :alt="item.name"
            />
          </router-link>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      listdef: [],
    };
  },

  mounted() {
    this.getProductList();
  },

  methods: {
    async getProductList() {
      const resultfinal = await axios.get(
        "https://api.infinitybrains.com/public/api/showproduct"
      );
      this.listdef = resultfinal.data.data;
    },
  },
};
</script>

<style>
/* Optional CSS styles */
.nameProduct {
  color: #012a71;
  color: #012a71;
  font-family: Impact, Bold, sans-serif;
  font-family: Impact, Haettenschweiler, "Arial Narrow Bold", sans-serif;
}
</style>
