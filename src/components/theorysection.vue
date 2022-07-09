<template>
  <div class="row q-mt-lg">
    <div class="col-md-5 col-sm-12 q-ml-lg">
      <img class="q-mt-lg" src="../img/Aboutus.png" style="width: 70%" />
    </div>
    <div class="col-md-6 col-sm-12">
      <ul class="q-pa-lg q-mt-lg">
        <p class="text-h4 text-center text-indigo-7">{{ heading }}</p>
        <li>
          {{ para1 }}
        </li>
        <li>{{ para2 }}</li>
        <li>
          {{ para3 }}
        </li>
        <li>{{ para4 }}</li>
        <li>
          {{ para5 }}
        </li>
        <li>
          {{ para6 }}
        </li>
        <li>
          {{ para7 }}
        </li>
      </ul>
    </div>
  </div>
</template>
<script>
export default {
  name: "thoerysection",
  props: {
    img: {
      type: String,
    },
    heading: {
      type: String,
    },
    para1: {
      type: String,
    },
    para2: {
      type: String,
    },
    para3: {
      type: String,
    },
    para4: {
      type: String,
    },
    para5: {
      type: String,
    },
    para6: {
      type: String,
    },
    para7: {
      type: String,
    },
  },
};
</script>
