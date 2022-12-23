<template>
  <div class="contactusbanner" style="height: 90vh">
    <p
      class="text-center center text-align-center text-h3 text-white text-weight-bold"
    >
      {{ heading }}
    </p>
    <p class="text-center text-h5 text-white">
      {{ text1 }}
    </p>
    <p class=" text2 text-center  text-h5 text-white">
      {{ text2 }}
    </p>
  </div>
</template>
<script>
export default {
  name: "banner",
  props: {
    heading: {
      type: String,
    },
    text1: {
      type: String,
    },
    text2: {
      type: String,
    },
  },

  setup() {
    return {
      heading: "CAREER AT INFINITY BRAINS",
      text1: "Begin your career with infinity Brains",
      text2: "we offer the best industry experience & career opportunities to grow with us",
    };
  },
};
</script>
<style>
.contactusbanner {
  text-align: center;
}
.text2{
  color: gray;
}
</style>
