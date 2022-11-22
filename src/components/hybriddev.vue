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
        <img src="../img/Hybrid.jpg" />
      </q-card>
    </div>

    <div class="col-md-5 col-sm-12 q-ma-lg text-center">
      <p class="text-weight-bold text-h5 text-center">Hybrid Development</p>
      <p>
        The development of hybrid mobile applications is a programming approach
        for mobile devices that combines the forces of native programming with
        the development of HTML5 mobile applications. It includes FLUTTER, REACT
        NATVE, and ANGULAR JS. To construct a hybrid mobile app, developers
        write the core of the app as an HTML5 mobile app and then place a native
        device around it
      </p>
    </div>
  </div>
</template>

<script>
import { ref } from "vue";

export default {
  name: "hybriddev",
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
