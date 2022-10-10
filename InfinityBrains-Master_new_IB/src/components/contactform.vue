<template>
  <div class="contactusform q-pa-md" style="max-width: 400px; margin: auto">
    <q-form @submit="onSubmit" @reset="onReset" name="myForm" class="q-gutter-md" method="post">
      <q-input
        filled
        v-model="post.name"
        label="Full Name"
        hint="Name and surname"
        lazy-rules
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
      />
      <q-input
        filled
        v-model="post.email"
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
        v-model="post.age"
        label="Queries"
        hint="Post your Queries/Questions"
        lazy-rules
        :rules="[
          (val) => (val !==null && val !== '') || 'Please type your queries',
          (val) => isValidQuery(val) || 'Please type Valid  Query',
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
import axios from 'axios'

export default {
  name: "contactform",


  data(){


    return{

        post:{

          name:'',
          age:'',
          email:''
        }


    }
  },

  setup() {
    const $q = useQuasar();
    const name = ref(null);
    const age = ref(null);
    const email = ref(null);

    return {


      async onSubmit() {
        $q.notify({
          color: "green-4",
          textColor: "white",

          message: "Submitted",




        });

        // let resultfinal = await axios.post("https://uatapi.infinitybrains.com/public/api/show");
        // this.listdef = resultfinal.data.data;
        // console.log("hello frind this new webasite ");

        //https://uatapi.infinitybrains.com/public/api/
        //  axios.post("https://uatapi.infinitybrains.com/public/api/contactdetails",this.post).then((result)=>{

        //     console.warn("newlog",result);

        //  })


        axios.post('https://uatapi.infinitybrains.com/public/api/contactdetails', this.post)
                 .then((res) => {
                     //Perform Success Action
                 })
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
    isValidQuery(val){


      const QueryPattern =
        /^(?=[a-zA-Z0-9@._? %+-]{6,254}$)/;
      return QueryPattern.test(val) || "Invalid Query";


    }
  },

  validate() {
    myForm.value.validate().then(success => {
      if (success) {
        // yay, models are correct
      }
      else {
        // oh no, user has filled in
        // at least one invalid value
      }
    })
  }



};
</script>
