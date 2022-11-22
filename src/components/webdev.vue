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
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime sed
        accusantium nulla blanditiis optio sit fuga enim a laudantium tenetur,
        fugiat atque illo inventore quis ducimus. Voluptas doloremque velit
        itaque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
        sed accusantium nulla blanditiis optio sit fuga enim a laudantium
        tenetur, fugiat atque illo inventore quis ducimus. Voluptas doloremque
        velit itaque?
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
