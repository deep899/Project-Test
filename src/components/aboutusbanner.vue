<template>
  <div class="aboutusbanner" style="height: 90vh; padding-top: 320px">
    <p
      class="text-center center text-align-center text-h3 text-white text-weight-bold"
    >
      {{ heading }}
    </p>
    <p class="text-center text-h5 text-white">
      {{ text1 }}
    </p>
    <p class="text-center text-h5 text-white">
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
      heading: "ABOUT INFINITYBRAINS",
      text1: "We are a group of passionate people,",
      text2:
        "who have come together with an aim to create impactful value-driven software solutions.",
    };
  },
};
</script>
<style>
.contactusbanner {
  text-align: center;
}
</style>
