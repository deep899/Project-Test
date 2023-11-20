<template>
  <div>
    <Home />
  </div>
  <div class="mainContainer">
    <div class="container bgImgContainer" :style="{ backgroundImage: 'url(' + backgroundImageUrl + ')' }">
    </div>
    <div class="content-pic-design">
      <div class="headingCont">
        <h4 class="heading-4">Pick A Design</h4>
        <h5 class="heading-5">Select one of these homepage options to get started.</h5>
      </div>
      <!-- Navbar -->
      <div class="navbar">
        <button v-for="(button, index) in navBarData" :key="index" @click="handleButtonClick(button.id)">
          <!-- {{ button.label }} -->
        </button>
      </div>

      <!-- Displayed Cards -->
      <div class="card-container">
        <div v-for="(card, index) in cardData" :key="index" class="card card-small-mobile"
          @click="handleCardClick(card.sub_category_name, card.subcategories_id)">
          <div class="card-item-img">
            <!-- Update the image source -->
            <img :src="card.subcategories_template" alt="Card Image" class="card-image" />
          </div>
          <div class="card-item-heading">
            <!-- Display the card heading -->
            <h5>{{ card.sub_category_name }}</h5>
          </div>
        </div>
      </div>

      <!-- Pagination Controls -->
      <div class="pagination">
        <!-- Previous Button -->
        <button @click="prevPage" :disabled="currentPage === 0" class="prev-btn">&#8592;</button>

        <!-- Page Number -->
        <div class="page-number">{{ currentPage + 1 }}</div>

        <!-- Next Button -->
        <button @click="nextPage" :disabled="currentPage === pageCount - 1" class="next-btn">&#8594;</button>
      </div>
    </div>
  </div>
</template>

<script>
import Home from './Home.vue';
import axios from './../axios'

export default {
  data() {
    return {
      backgroundImageUrl: require('./../../src/Theme1/10_Min_assets/img/wave2.png'), // Set the background image dynamically
      navBarData: [
        { id: 1, label: "Sell Online" },
        { id: 2, label: "Blog" },
        { id: 3, label: "Portfolio" },
        { id: 4, label: "Food" },
        { id: 5, label: "About" },
        { id: 6, label: "Magazine" },
        { id: 7, label: "Art & Design" },
        { id: 8, label: "Restaurant" },
      ],
      category_id: 0,
      cardData: [],
      // Add the following properties for pagination
      currentPage: 0, // Track the current page
      pageSize: 9, // Number of cards per page
    };
  },
  created() {
    // Access the category data passed from the previous page
    this.category_id = this.$route.params.category_id;
  },
  computed: {
    // Add a computed property for the total number of pages
    pageCount() {
      return Math.ceil(this.cardData.length / this.pageSize);
    },
    // Add a computed property to get the cards for the current page
    visibleCards() {
      const start = this.currentPage * this.pageSize;
      const end = start + this.pageSize;
      return this.cardData.slice(start, end);
    },
  },

  mounted() {

    axios.get('https://uatinfinitybackend.infinitybrains.com/api/admin/subcatagories/' + this.$route.params.id).then((res) => {

      console.log(res.data.data.subcategories);

      this.cardData = res.data.data.subcategories


    }).catch();

  },
  methods: {
    handleButtonClick(buttonNumber) {
      // Handle button click events here
      console.log(`Button ${buttonNumber} clicked.`);
    },
    continueToCategories() {
      this.$router.push({ name: 'pickdesign' });
    },
    // Add a method to go to the next page
    nextPage() {
      if (this.currentPage < this.pageCount - 1) {
        this.currentPage++;
      }
    },
    // Add a method to go to the previous page
    prevPage() {
      if (this.currentPage > 0) {
        this.currentPage--;
      }
    },
    handleCardClick(themeName, id) {
      localStorage.setItem('subcategory_name', themeName);
      localStorage.setItem('subcategories_id', id);
      localStorage.setItem('categories_id', this.$route.params.id);

      // Now you have the themeNumber, and you can use it as needed
      console.log(`Card with  ${themeName} clicked.`);

      // Use router.push to navigate to the previewtheme1 route with the themeNumber parameter
      // console.log("click card's");
      this.$router.push({ name: 'previewalltheme', params: { themeName } });
    },
  },
  components: { Home }
};

</script>

<style scoped>
/* Basic styles for the navbar */
.mainContainer {
  max-width: 100%;
  box-sizing: border-box;
}

.container {
  text-align: center;
  margin-bottom: 20px;
  padding: 53px;
}

.bgImgContainer {
  background-position: bottom;
}

.content-pic-design {
  padding: 0 10.5rem;
}

.headingCont {
  padding: 0 2rem;
}

.heading-4 {
  font-weight: 600;
  font-size: 2.5rem;
  margin-bottom: 0.5rem;
}

.heading-5 {
  color: #7c7c7c;
  font-weight: 500;
  margin-top: -0.5rem;
  font-size: 1rem;
}

.navbar {
  background: transparent;
  color: white;
  padding: 10px;
  display: flex;
  align-items: center;
  flex-wrap: wrap;
}

/* Style for navbar buttons */
.navbar button {
  background-color: transparent;
  color: black;
  border: none;
  padding: 10px 20px;
  margin: 0.5rem;
  cursor: pointer;
  font-size: 1rem;
}

.navbar button:hover {
  background-color: black;
  color: whitesmoke;
}

/* Container for cards */
.card-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  padding: 0 30px;
}

/* Style for individual cards */
.card {
  /* width: calc(50% - 1rem); */
  /* background-color: #f4f4f4; */
  margin: 0.5rem;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  text-align: center;
  overflow: hidden;
}

/* Style for card images */
/* .card-item-img img {
  max-width: 100%;
  height: 17rem;
} */

.card-image {
  width: 100%;
  height: 100%;
  object-fit: none;
}

/* Style for card headings */
.card-item-heading h5 {
  font-size: 1rem;
  margin: 0;
  text-align: start;
}

.pagination {
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 20px 0;
}

.prev-btn,
.next-btn {
  background-color: transparent;
  color: black;
  border: none;
  cursor: pointer;
  font-size: 2.125rem;
}

.prev-btn:hover,
.next-btn:hover {
  box-shadow: 2px 2px #fbf5f5;
}

.page-number {
  font-size: 1rem;
  margin: 0 10px;
  border-radius: 50%;
  width: 28px;
  background-color: #2b74e3;
  text-align: center;
}

@media screen and (max-width: 1200px) {
  .content-pic-design {
    padding: 0 5rem;
  }
}

@media screen and (max-width: 992px) {
  .content-pic-design {
    padding: 0 2rem;
  }
}

@media screen and (max-width: 768px) {
  .content-pic-design {
    padding: 0 1rem;
  }
}

@media screen and (max-width: 562px) {
  .content-pic-design {
    padding: 0 0.5rem;
  }
}

@media screen and (max-width: 762px) {
  .navbar {
    justify-content: flex-start;
  }

  .card-container {
    padding: 0 1rem;
  }
}

@media screen and (max-width: 562px) {
  .card-small-mobile {
    width: calc(100% - 1rem) !important;
  }
}

@media screen and (max-width: 955px) {
  .card {
    width: calc(50% - 1rem);
  }
}

@media screen and (min-width: 955px) {
  .card {
    width: calc(33.33% - 1rem);
  }
}
</style>
