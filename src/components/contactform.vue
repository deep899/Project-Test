<template>
  <div class="contactusform q-pa-md" style="max-width: 400px; margin: auto">
    <q-form @submit="onSubmit" @reset="onReset" class="q-gutter-md">
      <q-input
        filled
        v-model="name"
        label="Full Name"
        hint="Name and surname"
        lazy-rules
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
      />
      <q-input
        filled
        v-model="email"
        label="Enter Your Email address*"
        lazy-rules
        :rules="[
          (val) => (val !== null && val !== '') || 'Please Type Your Email',
          (val) => isValidEmail(val) || 'Please type Valid email address',
        ]"
        hint="Enter valid email"
      ></q-input>

      <q-input
        filled
        type="text"
        v-model="age"
        label="Queries"
        hint="Post your Queries/Questions"
        lazy-rules
        :rules="[
          (val) => (val !== null && val !== '') || 'Please type your queries',
          (val) => (val > 0 && val < 100) || 'Please type your valid queries',
        ]"
      />

      <div>
        <q-btn label="Submit" type="submit" color="primary" />
        <q-btn
          label="Reset"
          type="reset"
          color="primary"
          flat
          class="q-ml-sm"
        />
      </div>
    </q-form>
  </div>
</template>
<script>
import { useQuasar } from "quasar";
import { ref } from "vue";
export default {
  name: "contactform",

  setup() {
    const $q = useQuasar();
    const name = ref(null);
    const age = ref(null);
    const email = ref(null);

    return {
      email,
      name,
      age,

      onSubmit() {
        $q.notify({
          color: "green-4",
          textColor: "white",
          icon: "cloud_done",
          message: "Submitted",
        });
      },

      onReset() {
        email.value = null;
        name.value = null;
        age.value = null;
      },
    };
  },
  methods: {
    isValidEmail(val) {
      const emailPattern =
        /^(?=[a-zA-Z0-9@._%+-]{6,254}$)[a-zA-Z0-9._%+-]{1,64}@(?:[a-zA-Z0-9-]{1,63}\.){1,8}[a-zA-Z]{2,63}$/;
      return emailPattern.test(val) || "Invalid email";
    },
  },
};
</script>
