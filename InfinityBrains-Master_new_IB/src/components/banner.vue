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
      heading: "CONTACT US",
      text1: "We always love to hear words from you,",
      text2: "feeling pride to help you with your",
    };
  },
};
</script>
<style>
.contactusbanner {
  text-align: center;
}
</style>
