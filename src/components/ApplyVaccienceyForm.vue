<template>
  <div class="mainContainer">
    <div class="mainTxtCon">
      <text class="mainTxt">APPLY NOW!</text>
    </div>
    <div class="subTxtCon">
      <text class="subTxt" style="text-align: center">
        Interested in job? Apply from here.
      </text>
    </div>
    <div class="mainFrm">
      <input
        type="text"
        placeholder="First name"
        class="fn"
        v-model="firstname"
      />
      <input
        type="text"
        placeholder="Last name"
        class="ln"
        v-model="lastname"
      />
      <input type="text" placeholder="Email" class="eml" v-model="email" />
      <input
        type="text"
        placeholder="Location"
        class="lct"
        v-model="location"
      />
      <input
        type="text"
        placeholder="Contact Number"
        class="cn"
        v-model="phoneno"
      />
      <input type="text" placeholder="Address" class="add" v-model="Address" />
      <input
        type="text"
        placeholder="Experiance"
        class="exp"
        v-model="Experiance"
      />
      <input type="file" @change="onFileSelected" />
      <!-- <input
        type="file"
        placeholder="Resume"
        class="rsm"
        @change="onFileSelected1()"
      /> -->
      <input type="text" placeholder="Massage" class="msg" v-model="Message" />
    </div>
    <q-btn label="APPLY NOW" class="apl" v-on:click="applyVacciencey()" />
  </div>
</template>
<script>
import axios from "axios";
export default {
  data() {
    return {
      firstname: "",
      lastname: "",
      email: "",
      location: "",
      phoneno: "",
      Address: "",
      Experiance: "",
      selectedFile: null,
      Message: "",
    };
  },
  methods: {
    async applyVacciencey() {
      let result = await axios.post(
        "https://uatapi.infinitybrains.com/public/api/candidateform/2",
        {
          firstname: this.firstname,
          lastname: this.lastname,
          email: this.email,
          location: this.location,
          phoneno: this.phoneno,
          Address: this.Address,
          Experience: this.Experiance,
          selectedFile: this.selectedFile,
          Message: this.Message,
        }
      );

      console.warn(result);
    },

    onFileSelected(event) {
      this.selectedFile = event.target.files[0];
    },
  },
};
</script>
<style scoped>
.mainContainer {
  display: grid;
  grid-template-rows: 30% 15% 1fr 1fr;

  /* overflow-y: hidden; */
  /* grid-template-columns: 1fr 1fr; */
}

.mainTxtCon {
  background-color: #2f518a;
  /* height: 50%; */
  color: white;
  text-align: center;
  display: flex;
  justify-content: center;
  align-items: center;
  grid-row: 1/2;
}

.subTxtCon {
  /* height: 50%; */
  display: flex;
  align-items: center;
  justify-content: center;
  grid-row: 2/3;
  text-align: center;
}

.subTxt {
  /* margin-top: 1.25rem; */
  text-align: center;
}
.mainCard {
  display: grid;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.apl {
  width: 95%;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  height: 2.5rem;
  background: #2f518a;
  color: white;
  grid-row: 4/5;
}
</style>