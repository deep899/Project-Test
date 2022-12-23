<template>
  <div
    class="servicesubsections row items-start flex service_section_digital product-section"
    style="margin: auto; margin-top: 50px; margin-bottom: 50px"
  >
    <div class="col-md-4 col-xs-10 q-ma-auto">
      <q-card class="my-card">
        <img src="../img/webdev.jpg" />
      </q-card>
    </div>

    <div class="col-md-5 col-sm-12 q-ma-lg text-center">
      <p class="text-weight-bold text-h5 text-center">Web Development</p>
      <p>
        Web development services assist to create all types of web-based software and ensure a great experience for web users. A speedy progressive web app or an AI-Powered eCommerce store we are experts in everything. Count on our professional custom web development services to create high-performing, intuitive, and secure web products that are able to scale as your business grows.
      </p>
    </div>
  </div>
</template>

<script>
import { ref } from "vue";

export default {
  name: "webdev",
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
