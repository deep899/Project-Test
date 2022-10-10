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
        <img src="../img/uiux.jpg" />
      </q-card>
    </div>

    <div class="col-md-5 col-sm-12 q-ma-lg text-center">
      <p class="text-weight-bold text-h5 text-center">UI/UX Designing</p>
      <p>
        UI alludes to the screens, buttons, toggles, icons, and other visual
        segments that you interact with when using a website, app, or other
        electronic devices. While, UX alludes to the entire interaction you have
        with a product, including how you think about the interaction.
      </p>
    </div>
  </div>
</template>

<script>
import { ref } from "vue";

export default {
  name: "uiux",
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
