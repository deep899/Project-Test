<template>
  <div>
    <Home />
  </div>

  <div class="mainContainer">
    <div class="container bgImgContainer" :style="{ 'background-image': 'url(' + backgroundImageUrl + ')' }">
      <h2 class="headin-2">{{ pageTitle }}</h2>
      <h4 class="headin-4">{{ pageSubtitle }}</h4>
    </div>

    <div class="container secondDiv" style="flex-direction: column;">
      <div class="select-categories">
        <h3 class="heading-3">Select Your Categories</h3>
        <h6 class="heading-6">Tell Us What Would You Like To Accomplish With Your Websites</h6>
      </div>

      <!-- <div>
        <table>
          <tr v-for="(row, rowIndex) in grid" :key="rowIndex">
            <td v-for="(cell, cellIndex) in row" :key="cellIndex">
              <input type="radio" v-model="selectedCategory" :value="cell.id" :id="cell.id"
                @change="radioChanged(cell)" />
              <label :for="cell.id">{{ cell.label }}</label>
            </td>
          </tr>
        </table>

      </div> -->

      <!-- <div style="width: 100%;">
        <table style="margin-bottom: 5%;">
          <tr v-for="(row, rowIndex) in grid" :key="rowIndex" >
          <td style="border: 2px solid rgb(210, 210, 210);" >
            <input type="radio" v-model="selectedCategory" :value="row.id" :id="row.id"
                @change="radioChanged(row)" />
              <label :for="row.id" class="custom-checkbox">{{ row.name }}</label>
          </td>
        </tr>
        </table>
      </div> -->

      <div>
        <table>
          <tr>
            <td v-for="(row, rowIndex) in grid" :key="rowIndex" style="width: 30vh; margin-bottom: 010%;">
              <input type="radio" style="" v-model="selectedCategory" :value="row.id" :id="row.id"
                @change="radioChanged(row)" />
              <label :for="row.id" class="custom-checkbox">{{ row.name }}</label>
            </td>
          </tr>
        </table>

      </div>



      <router-link :to="'/10M_website/pickdesign/'+ selectedCategory" class="btnContinue">{{ continueButtonLabel
              }}</router-link>

    </div>
  </div>
</template>

<script>
import Home from './Home.vue';
import axios from './../axios'

export default {
  data() {
    return {
      pageTitle: 'Your Site\'s, Your Rules',
      pageSubtitle: 'Make your websites/App in 10 Minutes',
      continueButtonLabel: 'Continue',
      businessName: '',

      backgroundImageUrl: require('./../../src/Theme1/10_Min_assets/img/wave.png'), // Set the background image dynamically

      grid: [
        [
          { id: 'category1', label: 'Sell Online' },
          { id: 'category2', label: 'Promote Myself' },
          { id: 'category3', label: 'Food And Beverage' }
        ],
        [
          { id: 'category4', label: 'Write & Publish' },
          { id: 'category5', label: 'Informational' },
          { id: 'category6', label: 'Other' }
        ],
      ],
      selectedCategory: null,
    };
  },

  methods: {
    radioChanged(cell) {
      // Handle radio button change here
      console.log(`Selected Category: ${cell.label}`);
    },
    // Function to navigate to the categories route when the "Continue" button is clicked
    continueToCategories() {


      if (this.selectedCategory) {
        // Use Vue Router to navigate to the "categories" route with the selected category
        this.$store.commit('setCategory_id', this.selectedCategory);
        localStorage.setItem('category_id', this.selectedCategory);
        this.$router.push({ name: 'pickdesign', params: { category: this.selectedCategory } }); // add after the name, params: { category: this.selectedCategory }
      }
      else {
        // Show an error message or alert if no category is selected
        alert('Please select a category before continuing.');
      }
    },
  },
  mounted() {

    axios.get('https://uatinfinitybackend.infinitybrains.com/api/admin/catagories').then((res) => {

      console.log(res.data.data);
      this.grid = res.data.data

    }).catch((error) => {


      alert(error.response.data.message)


    });


  },
  components: { Home, }
};
</script>


<style scoped>
/* Base styles for your elements */

.mainContainer {
  max-width: 100%;
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
  background-size: cover;
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
  color: blue;
  text-align: center;
  padding: 20px;
}

.heading-3 {
  margin: 0 auto;
  color: #012a71;
  font-weight: 700;
  font-size: 2.125rem;
}

.heading-6 {
  font-size: 13px;
  font-weight: 900;
  line-height: 2rem;
  color: #5b75a2;
}

/* Styles for the radio buttons */

table {
  width: 100%;
  max-width: 63%;
  /* Adjust the maximum width as needed */
  margin: 0 auto;
  border-collapse: separate;
  /* Separate borders for cells */
  border-spacing: 18px;
  /* Add space between rows and columns */
}

td {
  text-align: start;
  border: 1px solid #ccc;
  padding: 17px;
  margin: 0;
  /* Remove cell margin to control spacing through border-spacing */
}

/* Apply additional styles for smaller screens if needed */
@media (max-width: 768px) {
  table {
    border-spacing: 5px;
    /* Reduce spacing on smaller screens */
  }
}

input[type="radio"] {
  display: none;
  /* Hide the default radio buttons */
}

.custom-checkbox {
  display: block;
  position: relative;
  color: #8b8888;
  padding-left: 25px;
  cursor: pointer;
}

.custom-checkbox::before {
  content: "";
  display: inline-block;
  width: 20px;
  height: 20px;
  border: 2px solid #ccc;
  background-color: white;
  position: absolute;
  left: 0;
  top: 50%;
  transform: translateY(-50%);
}

input[type="radio"]:checked+label.custom-checkbox::before {
  content: '\2714';
  display: block;
  width: 20px;
  height: 20px;
  text-align: center;
  line-height: 20px;
  background-color: transparent;
  color: green;
  position: absolute;
  top: 50%;
  left: 0;
  /* background-color: #012a71; */
  /* border-color: #012a71; */
}

.btnContinue {
  background-color: #2f518a;
  font-size: 1.5rem;
  color: white;
  border: none;
  padding: 10px 20px;
  cursor: pointer;
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

  table {
    width: 100%;
  }

  td {
    padding: 5px;
    /* Adjust padding for smaller screens */
  }

  label {
    padding-left: 20px;
  }

  .btnContinue {
    width: 100%;
  }
}

@media (max-width: 440px) {

  .headin-2 {
    position: relative;
    top: 53px;
  }

  .headin-4 {
    position: relative;
    top: 23px;
  }

  .container {
    padding-top: 1px;
  }

  .category-row {
    display: flex;
    flex-wrap: wrap;
    /* justify-content: space-between; */
    border-spacing: 5px;
  }

  .category-cell {
    width: calc(100%);
    /* Display 2 columns with some spacing between them */

    /* Add vertical spacing between rows */
  }
}
</style>
