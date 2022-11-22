<template>
  <q-btn label="Medium" color="primary" @click="medium = true" />
  <!-- <q-dialog v-model="medium"> -->
  <!-- <q-card style="width: 700px; max-width: 80vw">
      <q-card-section>
        <div class="text-h6">Medium</div>
      </q-card-section>

      <q-card-section class="q-pt-none">
        Click/Tap on the backdrop.
      </q-card-section>

      <q-card-actions align="right" class="bg-white text-teal">
        <q-btn flat label="OK" v-close-popup />
      </q-card-actions>
    </q-card>
  </q-dialog> -->

  <q-dialog v-model="medium" class="mainCard">
    <q-card style="width: 700px; max-width: 80vw">
      <q-card-section style="margin: 0; padding: 0; box-sizing: border-box">
        <ApplyVaccienceyForm />
      </q-card-section>
      <!-- <q-card-actions align="right" class="bg-white text-teal">
        <q-btn flat label="OK" v-close-popup />
      </q-card-actions> -->
    </q-card>
  </q-dialog>
</template>
<script>
import { ref } from "vue";
import ApplyVaccienceyForm from "./ApplyVaccienceyForm.vue";
export default {
  data() {
    return {
      medium: ref(false),
    };
  },
  components: { ApplyVaccienceyForm },
};
</script>
<style scoped>
</style>