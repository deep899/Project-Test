<template>
  <div class="q-pa-md">
    <table class="table" border="2px">
      <tr>
        <th>Technology</th>
        <th>Working hourse</th>
        <th>Experience</th>
        <th>Qualification</th>
        <th>Opnings</th>
        <th>Required Skills</th>
        <th>Apply Now</th>
      </tr>
      <tr v-for="item in list" v-bind:key="item.id">
        <td>{{ item.Position }}</td>
        <td>Working hourse</td>
        <td>{{ item.Experience }}</td>
        <td>Qualification</td>
        <td>{{ item.vacancy }}</td>
        <td>{{ item.description }}</td>
        <td><PopUp /></td>
      </tr>
    </table>
  </div>
</template>
<script>
import axios from "axios";
import { ref } from "vue";
import PopUp from "./PopUp.vue";
// import { ref } from "vue";
// import { response } from "express";

export default {
  name: "carrertable",
  data() {
    return {
      // medium: ref(false),
      list: [],
    };
  },
  setup() {},
  async mounted() {
    let result = await axios.get(
      "https://uatapi.infinitybrains.com/public/api/showvacancy"
    );
    console.warn(result.data.data);
    this.list = result.data.data;
  },
  components: { PopUp },
};
</script>

<style>
.my-sticky-header-table {
  /* height or max-height is important */

  height: 310px;
  width: 70vw;
}

.q-table__top,
.q-table__bottom,
thead tr:first-child th {
  /* bg color is important for th; just specify one */
  background-color: #303f9f !important;
  color: whitesmoke;
}

thead tr th {
  position: sticky;
  z-index: 1;
}
thead tr:first-child th {
  top: 0;
}

/* this is when the loading indicator appears */
.q-table--loading thead tr:last-child th {
  /* height of all previous header rows */
  top: 48px;
}
</style>
