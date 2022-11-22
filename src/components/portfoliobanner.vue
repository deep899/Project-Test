<template>
  <div class="portfoliobanner" style="height: 90vh; padding-top: 320px">
    <p
      class="text-center center text-align-center text-h3 text-white text-weight-bold"
    >
      {{ heading }}
    </p>
    <p class="text-center text-h5 text-white" style="margin-bottom: 0px">
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
      heading: "WORK DIRECTORY",
      text1: "We deliver website, Mobile App, ",
      text2: "Hybrid Apps, Software, Digital Marketing, SAP.",
    };
  },
};
</script>
<style>
.portfoliobanner {
  text-align: center;
}
</style>
