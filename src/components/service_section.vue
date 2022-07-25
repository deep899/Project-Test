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
        <img src="../img/digitalmarketing.jpg" />
      </q-card>
    </div>

    <div class="col-md-5 col-sm-12 q-ma-lg text-center">
      <p class="text-weight-bold text-h5 text-center">Digital Marketing</p>
      <p>
        Digital marketing is an aspect of marketing using an online platform. It
        conveys a promotional message to the targeting audience. Infinitybrain
        provides branding, advertising, social media & email marketing.
        Companies can expand their business by promoting it on the internet
      </p>
    </div>
  </div>
</template>

<script>
import { ref } from "vue";

export default {
  name: "service_section",
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
