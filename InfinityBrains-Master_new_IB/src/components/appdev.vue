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
        <img src="../img/appdev.jpg" />
      </q-card>
    </div>

    <div class="col-md-5 col-sm-12 q-ma-lg text-center">
      <p class="text-weight-bold text-h5 text-center">App Development</p>
      <p>
        This includes iOS and Android apps. With the help of this, we provide a
        range of mobile app development services, including personalised mobile
        development on iOS or Android platforms. the development of
        cross-platform applications, the design of user experiences and the
        integration of new mobile interfaces such as chat and voice
      </p>
    </div>
  </div>
</template>

<script>
import { ref } from "vue";

export default {
  name: "appdev",
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
