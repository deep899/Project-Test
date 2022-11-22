<template>
  <div class="text-center q-pa-md col-md-2 col-xs-12">
    <h5 class="text-red">Infinity Brains</h5>
    <p class="text-white">{{ lorem }}</p>
  </div>
</template>
<script>
export default {
  name: "infinityabout",
  props: {
    lorem: {
      type: String,
    },
  },
};
</script>
