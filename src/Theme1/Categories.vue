<template>
  <div>
    <Home />
  </div>

  <div style="height: 100vh;">
    <div class="mainContainer">
      <div class="container bgImgContainer" :style="{ 'background-image': 'url(' + backgroundImageUrl + ')' }">
        <!-- <img :src="backgroundImageUrl" alt="Background Image" /> -->
        <h2 class="headin-2">{{ pageTitle }}</h2>
        <h4 class="headin-4">{{ pageSubtitle }}</h4>
      </div>

      <div class="container secondDiv" style="flex-direction: column;">
        <h3>{{ domainNameHeading }}</h3>
        <div id="inputName">
          <label for="domain">{{ domainNameLabel }}</label>
          <input v-model="domainName" type="text" name="domain" id="domain" :placeholder="domainNamePlaceholder">
        </div>
        <button @click="continueToCategories" class="btnContinue">{{ continueButtonLabel }}</button>
      </div>
    </div>
  </div>
</template>

<script>
// import axios from 'axios'; // Import Axios

import Home from './Home.vue';
import { mapState } from 'vuex';
export default {
  data() {
    return {
      pageTitle: 'Your Site\'s, Your Rules',
      pageSubtitle: 'Make your websites/App in 10 Minutes',
      domainNameHeading: 'First Let\'s Give Your Domain Name',
      domainNameLabel: 'Enter your Domain name',
      domainNamePlaceholder: 'Domain name',
      continueButtonLabel: 'Continue',
      domainName: '',

      backgroundImageUrl: require('./../../src/Theme1/10_Min_assets/img/wave.png'), // Set the background image dynamically
    };
  },
  computed: {
    ...mapState(['domainName']), // Use mapState to map the state property to a local property
  },
  methods: {

    continueToCategories() {
      if (!this.domainName) {

        // Show an alert to enter the business name
        alert('Please enter your Domain name.');
        return; // Don't proceed further
      }
      else{
          
            
            this.$store.commit('setdomainName', this.domainName);
            // console.log("cdjsxk",this.$store.getters.getDomainName);
            this.$router.push({ name: 'selectyourtype' });

      }
      // Make an HTTP POST request to your backend to store the domain name
      // axios.post('http://localhost:3300/api/storeDomainInfo', { domainName: this.domainName })
      //   .then(response => {
      //     console.log('Domain name stored successfully');
      //     this.$router.push({ name: 'selectyourtype' });
      //   })
      //   .catch(error => {
      //     console.error('Error storing domain name:', error);
      //   });
      // Use this.domainName to access the entered domain name
      // You can also perform any data validation here before navigation

      

    },
    // fetchBusinessName() {
    //   axios.get('http://localhost:3300/api/getDomainInfo')
    //     .then((response) => {
    //       this.businessName = response.data.businessName;
    //     })
    //     .catch((error) => {
    //       console.error('Error fetching business name:', error);
    //     });
    // },
  },

  // created() {
  //   this.fetchBusinessName();
  // },
  components: { Home },
};
</script>

<style scoped>
/* Base styles for your elements */

.mainContainer {
  max-width: 100%;
  /* padding: 20px; */
  box-sizing: border-box;
}

.container {
  text-align: center;
  margin-bottom: 20px;
  /* background-color: blue; */
  padding: 53px;
}

.bgImgContainer {
  /* background-image: url(./../Theme1/10\ Min_assets/img/wave.png); */
  background-position: bottom;
  background-repeat: no-repeat;
}

.headin-2 {
  font-weight: bold;
  color: whitesmoke;
}

.headin-4 {
  font-weight: 500;
  font-size: 1.5rem;
  color: whitesmoke;
}

.secondDiv {
  background-color: white;
  text-align: center;
  padding: 20px;
}

.secondDiv h3 {
  color: #012a71;
  font-weight: 700;
}

#inputName {
  display: flex;
  flex-direction: column;
  width: 100%;
}

#inputName label {
  font-size: 1.5rem;
  font-weight: bold;
  color: #5e78a3;
  margin-bottom: 10px;
}

#inputName input {
  font-size: 1.5rem;
  color: #012a71;
  font-weight: 800;
  padding: 10px;
  width: 50%;
  margin: auto;
  margin-bottom: 20px;
  border: 1px solid #ccc;
}

.btnContinue {
  background-color: #2f518a;
  font-size: 1.5rem;
  color: white;
  border: none;
  padding: 10px 20px;
  cursor: pointer;
}

.pagination {
  display: flex;
  justify-content: center;
  align-items: center;
}

/* Responsive styles */
@media screen and (max-width: 768px) {
  .container {
    padding: 10px;
    padding-top: 82px;
  }

  .secondDiv {
    padding: 10px;
  }

  #inputName {
    width: 100%;
  }

  #inputName input {
    width: 100%;
  }

  .btnContinue {
    width: 100%;
  }
}
</style>
