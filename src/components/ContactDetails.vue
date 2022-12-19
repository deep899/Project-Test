<template>
  <div class="q-pa-md col-md-4 col-xs-12">
    <h5 class="text-red text-center">Contact</h5>
    <div class="row">
      <div class="col-1">
        <q-icon class="material-icons text-white">account_circle</q-icon>
      </div>
      <div class="col-11">
        <p class="text-white">408,Luxuria Business Hub,Nr Vesu,Surat,Gujarat</p>
      </div>
    </div>
    <div class="row">
      <div class="col-1">
        <q-icon class="material-icons text-white">mail_outline</q-icon>
      </div>
      <div class="col-11">
        <p class="text-white">contact@infinitybrains.com</p>
      </div>
    </div>
    <div class="row">
      <div class="col-1">
        <q-icon class="material-icons text-white">phone_iphone</q-icon>
      </div>
      <div class="col-11">
        <p class="text-white">+91 94267 34485</p>
      </div>
      <div class="col-11"
      >

        <div class="inline" >

          <div class="q-pa-md q-gutter-sm">

            <!-- here below is label  -->

            <q-btn label="Rise Ticket" color="primary" @click="persistent = true" />

    <q-dialog v-model="persistent" persistent transition-show="scale" transition-hide="scale">
      <q-card class="bg-teal text-white" style="width: 300px">

        <q-card-section>
                              <label>Rise Ticket</label>
                          </q-card-section>


        <q-card-section class="q-pt-none">
          <q-input filled v-model="first_name" label="First name *" lazy-rules :rules="[
                              (val) =>
                                (val && val.length > 0) || 'Please type something',
                            ]" />

                                          <q-input filled v-model="email" label="Email *" lazy-rules :rules="[
                              (val) =>
                                (val && val.length > 0) || 'Please type something',
                            ]" />
                                          <q-input filled type="number" v-model="mobile_no" label="Phone no *" lazy-rules :rules="[
                              (val) =>
                                (val && val.length > 0) || 'Please type something',
                            ]" />

        </q-card-section>

        <q-card-actions align="right" class="bg-white text-teal">
          <q-btn flat label="Submit" v-close-popup />
          <q-btn flat label="Close"  v-close-popup />
        </q-card-actions>

      </q-card>
    </q-dialog>
  </div>
        </div>


      </div>




    </div>
  </div>
</template>
<script>
import { ref } from 'vue'
export default {
  name: "contactdetail",

  data(){
    return{

      first_name: "",
      email: "",
      mobile_no: ""

    }
  },

  setup () {
    return {
      persistent: ref(false)
    }
  }
};
</script>
