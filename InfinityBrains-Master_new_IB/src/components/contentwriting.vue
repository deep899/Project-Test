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
        <img src="../img/contentmarketing.jpg" />
      </q-card>
    </div>

    <div class="col-md-5 col-sm-12 q-ma-lg text-center">
      <p class="text-weight-bold text-h5 text-center">Content Writing</p>
      <p>
        Writing content is a process of planning, reviewing and publishing in
        digital form. It’s a way of generating content in the digital world. The
        content should be appealing to the target audience and trustworthy as
        well. We are here to assist you to get clients with our proficient
        content writers.
      </p>
    </div>
  </div>
</template>

<script>
import { ref } from "vue";

export default {
  name: "contentwriting",
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
