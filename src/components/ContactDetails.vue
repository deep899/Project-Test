<template>
  <div class="q-pa-md col-md-4 col-xs-12">
    <h5 class="text-red" style="text-align: left;">Contact</h5>
    <div class="row">
      <div class="col-1">
        <q-icon name="location_on" class=" text-white q-icon--big"></q-icon>
      </div>  
      <div class="col-11">
        <p class="text-white name" style="font-size: 1.1rem;">408,Luxuria Business Hub,Nr Vesu,Surat,Gujarat</p>
      </div>
    </div>
    <div class="row">
      <div class="col-1">
        <q-icon class="material-icons text-white q-icon--big">mail_outline</q-icon>
      </div>
      <div class="col-11">
        <p class="text-white name" style="font-size: 1.1rem;" >contact@infinitybrains.com</p>
      </div>
    </div>
    <div class="row">
      <div class="col-1">
        <q-icon class="material-icons q-icon--big text-white">phone_iphone</q-icon>
      </div>
      <div class="col-11">
        <p class="text-white name" style="font-size: 1.1rem;">+91 94267 34485</p>
      </div>
      <div class="col-11">
        <div class="inline">
          <div class="q-pa-md q-gutter-sm">
            <!-- here below is label  -->
            <q-btn label="RRAISE A TICKET" style="/* UI Properties */
                
text-align: left;
font: normal normal 100 1rem/34px Nunito;
letter-spacing: 0px;
background-color: #FF2B00;
color: #ffffff;
text-transform: uppercase;
opacity: 1;
"  @click="persistent = true" />
            <q-dialog v-model="persistent" persistent transition-show="scale" transition-hide="scale">
              <q-card class="bg-teal text-white" style="max-width: 300px; width: 90vw;">
                <q-card-section>
                  <label >Rise Ticket</label>
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
                  <q-btn flat label="Close" v-close-popup />
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
  data() {
    return {
      first_name: "",
      email: "",
      mobile_no: "",
    };
  },
  setup() {
    return {
      persistent: ref(false),
    };
  },
};
</script>

<style scoped>
  .text-white {
    color: #ffffff;
  }

  .inline {
    display: inline-block;
  }
.name{
  margin-left: 10%;
  top: 5349px;
left: 716px;
width: 284px;
height: 54px;
/* UI Properties */
color: var(--unnamed-color-ffffff);
text-align: left;
font: normal normal normal 20px/27px Nunito;
letter-spacing: 0px;
color: #FFFFFF;
opacity: 1;
}
.q-icon--big {
  font-size: 30px;
}
  @media (max-width: 767px) {
    .col-xs-12 {
      width: 100% !important;
      margin-bottom: 10px;
    }

    .q-pa-md {
      padding: 10px;
    }

    .q-gutter-sm {
      margin-right: 10px;
      margin-bottom: 10px;
    }

    .q-dialog {
      width: 90%;
      max-width: 350px;
    }
  }

  .text-red {
    text-align: left;
  font-size: 22px;
  font-weight: bold;
  color: #E86D6D;
  font: normal normal normal 22px/27px Impact;
  margin-bottom: 10px;
  letter-spacing: 0px;
}
</style>
