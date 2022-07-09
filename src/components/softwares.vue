<template>
  <div class="col justify-center flex">
    <!-- <div class="q-pa-md row items-start q-gutter-md"> -->
    <q-card class="my-card q-ma-lg">
      <router-link :to="href">
        <q-img :src="img">
          <div class="absolute-bottom text-subtitle2 text-center">
            {{ heading }}
          </div>
        </q-img>
      </router-link>
    </q-card>
    <!-- </div> -->
  </div>
</template>
<script>
export default {
  name: "softwares",

  props: {
    href: {
      type: String,
    },
    img: {
      type: String,
    },
    heading: {
      type: String,
    },
  },
};
</script>
<style>
.my-card {
  width: 100%;
  max-width: 250px;
}
</style>
