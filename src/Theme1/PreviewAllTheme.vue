<template>
  <div>
    <Home />
  </div>
  <div>
    <div class="mainContainer">
      <div class="container bgImgContainer" :style="{ backgroundImage: 'url(' + backgroundImageUrl + ')' }">
      </div>

      <!-- Icons for different screen sizes -->
      <!-- Icons for different screen sizes -->
      <div class="screen-icons">
        <button @click="setScreenSize('laptop')">
          <font-awesome-icon :icon="['fas', 'laptop']" />
        </button>
        <button @click="setScreenSize('tablet')">
          <font-awesome-icon :icon="['fas', 'tablet-alt']" />
        </button>
        <button @click="setScreenSize('phone')">
          <font-awesome-icon :icon="['fas', 'mobile-alt']" />
        </button>
      </div>

      <div class="grid-container">
        <!-- Left Side: Color Picker and Image Uploader -->
        <div class="left-side" :style="{ width: responsiveLeftWidth }">
          <!-- Image Uploader -->
          <!-- <div class="upload-image-container">
            <h6 class="heading-6">Upload Company Logo</h6>
            <label class="upload-image">
              <div class="upload-icon">
                <img src="./../Theme1/10_Min_assets/img/download.png" alt="download.png" srcset="">
              </div>
              <p>Drag and drop file here</p>
              <input type="file" @change="handleImageUpload" accept="image/*" />
            </label>
          </div> -->

          <!-- Display the selected image -->
          <!-- Color Picker -->
          <div class="color-picker-images">
            <h6 class="heading-6">Select Theme</h6>
            <div class="color-rows">
              <div v-for="(color, index) in colorArray" :key="index" class="color-selector">
                <label
                  :style="{ backgroundColor: color.colorselect, padding: '1.2vh', paddingLeft: '2vh', paddingRight: '2vh' }">
                  <input type="radio" :id="'color' + index" v-model="selectedColor"
                    @change="colorChange(color.colorselect)" :value="color" />
                </label>
              </div>
            </div>
          </div>

          <!-- <div class="color-picker-row">
              <img :src="colorImg1" alt="Selected Color" />

              <label for=""  style="background-color: black; padding: 1.2vh; padding-left: 2.5vh;">&nbsp;</label> -->
          <!-- <img :src="colorImg2" alt="Selected Color" />
              <img :src="colorImg3" alt="Selected Color" />
              <img :src="colorImg4" alt="Selected Color" />
              <img :src="colorImg5" alt="Selected Color" />
              <img :src="colorImg6" alt="Selected Color" />
            </div>
            <div class="color-picker-row">
              <img :src="colorImg7" alt="Selected Color" />
              <img :src="colorImg8" alt="Selected Color" />
              <img :src="colorImg9" alt="Selected Color" />
              <img :src="colorImg10" alt="Selected Color" />
              <img :src="colorImg11" alt="Selected Color" />
              <img :src="colorImg12" alt="Selected Color" /> -->
          <!-- </div>
          </div> -->


        </div>

        <!-- Right Side: Card Display -->
        <div class="right-side">
          <div :style="{ width: responsiveRightWidth }">
            <!-- Display content based on screen size -->
            <div class="card" v-if="selectedScreenSize === 'laptop'">
              <!-- <p>Laptop Content</p> -->
              <div class="card-content">
                <div class="scrollable-content">
                  <!-- Render the component directly -->
                  <component :is="themeComponent" />
                </div>
              </div>
            </div>
            <div class="card" v-else-if="selectedScreenSize === 'tablet'">
              <!-- <p>Tablet Content</p> -->
              <div class="card-content">
                <div class="scrollable-content">
                  <!-- Render the component directly -->
                  <component :is="themeComponent" />
                </div>
              </div>
            </div>
            <div class="card" v-else>
              <!-- <p>Mobile Content</p> -->
              <div class="card-content">
                <div class="scrollable-content">
                  <!-- Render the component directly -->
                  <component :is="themeComponent" />

                </div>

              </div>
            </div>

            <!-- <div class="card">
            <img :src="selectedImage" alt="Selected Image" />
          </div> -->
            <!-- <div class="card">
            <img :src="themefirstimg" alt="Selected Image" />
          </div>
          <div class="card">
            <img :src="themefirstimg" alt="Selected Image" />
          </div> -->
          </div>
          <button @click="continueToCategories" class="btnContinue">{{ continueButtonLabel }}</button>

        </div>

      </div>


    </div>
  </div>
</template>

<script>
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { library } from '@fortawesome/fontawesome-svg-core';
import { faMobileAlt, faTabletAlt, faLaptop } from '@fortawesome/free-solid-svg-icons';
import axios from './../axios'
import Home from './Home.vue';

library.add(faMobileAlt, faTabletAlt, faLaptop);
// console.log("Icon name:", faMobile);

export default {
  props: {
    themeName: {
      type: String,
      required: true,
    },
  },

  data() {
    return {
      backgroundImageUrl: require('./../../src/Theme1/10_Min_assets/img/wave2.png'), // Set the background image dynamically
      selectedColor: '#ffffff', // Store the selected color
      selectedImage: null,
      colorArray: ['black', 'red', 'blue', 'green', 'orange'],
      selectedColor: '',
      UploadImage: require('./../../src/Theme1/10_Min_assets/img/download.png'),
      colorImg1: require('./../../src/Theme1/10_Min_assets/img/01 (1).png'),
      colorImg2: require('./../../src/Theme1/10_Min_assets/img/01 (2).png'),
      colorImg3: require('./../../src/Theme1/10_Min_assets/img/01 (3).png'),
      colorImg4: require('./../../src/Theme1/10_Min_assets/img/01 (4).png'),
      colorImg5: require('./../../src/Theme1/10_Min_assets/img/01 (5).png'),
      colorImg6: require('./../../src/Theme1/10_Min_assets/img/01 (6).png'),
      colorImg7: require('./../../src/Theme1/10_Min_assets/img/01 (7).png'),
      colorImg8: require('./../../src/Theme1/10_Min_assets/img/01 (8).png'),
      colorImg9: require('./../../src/Theme1/10_Min_assets/img/01 (9).png'),
      colorImg10: require('./../../src/Theme1/10_Min_assets/img/01 (10).png'),
      colorImg11: require('./../../src/Theme1/10_Min_assets/img/01 (11).png'),
      colorImg12: require('./../../src/Theme1/10_Min_assets/img/01 (12).png'),
      continueButtonLabel: 'Continue',
      themeComponent: null, // Initialize themeComponent
      themefirstimg: require('./../../src/Theme1/10_Min_assets/img/wave.png'),
      selectedScreenSize: 'laptop', // Default screen size
    };
  },
  computed: {
    // Computed property to dynamically adjust left and right side widths
    // responsiveLeftWidth() {
    //
    //   if (this.selectedScreenSize === 'laptop') {
    //     return '30%';
    //   } else if (this.selectedScreenSize === 'tablet') {
    //     return '40%';
    //   } else {
    //     return '100%';
    //   }
    // },
    responsiveRightWidth() {
      // Set the right side width based on the selected screen size
      if (this.selectedScreenSize === 'laptop') {
        return '100%'; // Adjust as needed
      } else if (this.selectedScreenSize === 'tablet') {
        return '55%'; // Adjust as needed
      } else {
        return '35%'; // For phone, take full width
      }
    },
  },

  methods: {

    colorChange(color) {

      // alert(color);
      localStorage.setItem('color', color);
      this.$store.commit('setMagaswalaColor', color);

    },

    // Handle image upload and set the selectedImage data property
    handleImageUpload(event) {
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = () => {
          this.selectedImage = reader.result;
        };
        reader.readAsDataURL(file);
      }
    },

    setScreenSize(screenSize) {
      // Update the selected screen size
      this.selectedScreenSize = screenSize;
    },

    continueToCategories() {

      this.$router.push('/10M_website/previewalltheme/paymentscreen/17');//Uat2.0
      // this.$router.push('/10M_website/previewalltheme/paymentscreen/6');//Uat1.0
    },
  },

  async mounted() {
    // const themeName = this.$route.params.themeName;
    // // Now, you have the selected themeName, and you can use it to load and display the theme content.
    // this.loadThemeContent(themeName);
    try {
      const themeName = this.$route.params.themeName;
      // localStorage.setItem('theme_name' , themeName  );
      // Dynamically import the theme component based on the themeName
      const themeModule = await import(`./../../src/Theme2/${themeName}.vue`);
      // Set the imported component as a data property
      this.themeComponent = themeModule.default;
      this.cate_id = localStorage.getItem('categories_id');
      this.sub_id = localStorage.getItem('subcategories_id');
      axios.get(`https://uatinfinitybackend.infinitybrains.com/api/categoryasSubcategory_colorselect?catagories_id=${this.cate_id}&subcatagories_id=${this.sub_id}`).then((res) => {

        this.colorArray = res.data.colorData;
        console.log(res.data.colorData);

      })

    } catch (error) {
      // Handle errors (e.g., theme not found)
      console.error(`Error loading theme: ${error}`);
    }
  },

  components: {
    Home,
    FontAwesomeIcon,
  },
};
</script>

<style scoped>
/* Add CSS styles for the color picker, image uploader, and card display as needed */

.container {
  text-align: center;
  margin-bottom: 20px;
  padding: 53px;
}

.bgImgContainer {
  background-image: url('{{ backgroundImageUrl }}');
  /* Use double curly braces for dynamic values */
  background-position: bottom;
  /* height: 8rem; */
}

.screen-icons {
  display: flex;
  justify-content: center;
  align-items: center;
}

.screen-icons button {
  height: 50px;
  width: 40px;
  /* margin: 12px; */
  cursor: pointer;
  border: none;
  background-color: whitesmoke;
}

/* Responsive styles */
@media (max-width: 768px) {
  .grid-container {
    flex-direction: column;
  }

  .responsive-left,
  .responsive-right {
    width: 100%;
  }
}

/* Update styles for 1/2 grid layout */
@media (min-width: 769px) {
  .responsive-left {
    flex: 1;
    padding: 20px;
    max-width: 30%;
  }

  .responsive-right {
    flex: 2;
    padding: 20px;
  }
}

.grid-container {
  display: flex;
  justify-content: space-between;
  padding: 33px;
  height: 80vh;
}

.left-side {
  position: relative;
  top: -5rem;
}

.right-side {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  width: 100%;
}

/* Update styles for 1/2 grid layout */
@media (min-width: 769px) {
  .left-side {
    flex: 1;
    padding: 20px;
    max-width: 30%;
    /* Adjust the max-width to control the width of the left side */
  }

  .right-side {
    flex: 2;
    /* Adjust the flex value to control the width of the right side */
    padding: 20px;
  }

  .color-picker-row {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
  }
}

@media (max-width: 392px) {
  .color-picker-row {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
  }
}

.upload-image-container {
  text-align: center;
}

.heading-6 {
  font-size: 16px;
  font-weight: bold;
  margin-bottom: 10px;
  text-align: start;
  color: #5b75a2;
}

.upload-image {
  border: 2px dashed #ccc;
  padding: 20px;
  display: inline-block;
  cursor: pointer;
  width: 100%;
}

.upload-icon {
  /* width: 50px;
  height: 50px; */
  background: url('{{ UploadImage }}') center center no-repeat;
  /* Use double curly braces for dynamic values */
  background-size: cover;
  margin-bottom: 10px;
}

/* Hide the file input */
.upload-image input[type="file"] {
  display: none;
}

.color-picker-images {
  display: flex;
  flex-direction: column;

}

.color-picker-row {
  display: flex;
  margin: 0;
}

.color-picker-row img {
  margin: 6px;
}

.btnContinue {
  background-color: #2f518a;
  font-size: 1.5rem;
  color: white;
  border: none;
  padding: 5px 20px;
  margin-top: 3rem;


  cursor: pointer;
  width: 170px;

}

.card {
  border: 1px solid #ccc;
  padding: 10px;
  background-color: white;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  height: 33rem;
  overflow: hidden;
}

.card-content {
  display: flex;
  flex-direction: column;
  height: 100%;
}

.scrollable-content {
  flex: 1;
  overflow: auto;
}

.card img {
  max-width: 100%;
  height: auto;
}

.color-rows {
  display: flex;
  flex-wrap: wrap;
  margin: -1.2vh;
  /* Adjust the negative margin to compensate for padding */
}

.color-selector {
  flex: 1 0 25%;
  /* Each color selector takes up 25% of the row */
  padding: 1.2vh;
  box-sizing: border-box;
  /* Ensure padding doesn't affect the total width */
}

.color-selector {
  display: flex;
  justify-content: space-between;
}

.selected-color span {
  display: inline-block;
  width: 20px;
  height: 20px;
  border: 1px solid #000;
}
</style>
