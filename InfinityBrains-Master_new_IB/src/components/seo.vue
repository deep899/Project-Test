<template>
  <div
    class="
      servicesubsections
      row
      items-start
      flex
      service_section_digital
      product-section
    "
    style="margin: auto; margin-top: 50px; margin-bottom: 50px"
  >
    <div class="col-md-4 col-xs-10 q-ma-auto">
      <q-card class="my-card">
        <img src="../img/seo.jpg" />
      </q-card>
    </div>

    <div class="col-md-5 col-sm-12 q-ma-lg text-center">
      <p class="text-weight-bold text-h5 text-center">SEO Service</p>
      <p>
        Search Engine Optimization (SEO) is a process of improving the quality
        and quantity of traffic to a website or webpage from search engines. It
        targets unpaid traffic instead of direct or fee-based traffic. This is a
        technique to get pages to rank above in search engines such as Google.
      </p>
    </div>
  </div>
</template>

<script>
import { ref } from "vue";

export default {
  name: "seo",
  setup() {
    return {
      tab: ref("one"),
      splitterModel: ref(20),
    };
  },
};
</script>

<style>
div > img {
  width: 50px;
}
</style>
