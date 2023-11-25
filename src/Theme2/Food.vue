<template>
   <nav class="navbar"  :style="{ backgroundColor: selectedColor }" >
      <div class="logo">
𝖋𝖔𝖔𝖉𝖘
</div>
      <div class="menu-toggle" @click="toggleMenu">&#9776;</div>
      <div class="menu" :class="{ 'menu-open': isMenuOpen }">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">favourites</a></li>
          <li><a href="#">Add to Cart</a></li>
        
        </ul>
      </div>
    </nav>
    <div>
      <header>
        <h1 class="title">Delicious Food</h1>
        <p class="subtitle">Experience the Taste of Paradise</p>
        <label @click="scrollToSection()"   class="cta-button"   :style="{ backgroundColor: selectedColor }" >Order Now</label>
      </header>
      <div class="client-reviews">
    <h2 class="section-title">Client Reviews</h2>
    <Carousel :autoplay="true" :autoplaySpeed="4000" :infinite="true" :arrows="true">
      <Slide v-for="review in clientReviews" :key="review.id">
        <div class="review-card">
          <p class="review-text">{{ review.text }}</p>
          <p class="review-author">- {{ review.author }}</p>
        </div>
      </Slide>
    </Carousel>
  </div>
  <div class="container">
      <h2 class="section-title">Featured Dishes</h2>
      <Carousel :autoplay="true" :autoplaySpeed="4000" :infinite="true" :arrows="true">
        <!-- <Slide v-for="dish in dishes" :key="dish.id">
          <div class="dish-card">
            <img :src="dish.image" :alt="dish.name" class="dish-image" />
            <h3 class="dish-name">{{ dish.name }}</h3>
            <p class="dish-description">{{ dish.description }}</p>
            
        <label class="cta-button1"  @click="addToBucket(dish)"  :style="{ backgroundColor: selectedColor }" > Add to Bucket</label>

          </div>
        </Slide> -->
        <div class="dish-row " id="section1" v-for="(row, index) in Math.ceil(dishes.length / 4)" :key="index">
        <div class="dish-card" v-for="(dish, dishIndex) in dishes.slice(index * 4, (index + 1) * 4)" :key="dishIndex">
          <img :src="dish.image" :alt="dish.name" class="dish-image" />
          <h3 class="dish-name">{{ dish.name }}</h3>
          <p class="dish-description">{{ dish.description }}</p>
          <button @click="addToBucket(dish)" class="add-to-bucket-button">Add to Bucket</button>
        </div>
        </div>
      </Carousel>
    </div>


      <footer  :style="{ backgroundColor: selectedColor }" >
      <div class="container"  :style="{ backgroundColor: selectedColor }">
        <p  :style="{ backgroundColor: selectedColor }" >&copy; 2023 infinitybrains.com. All rights reserved.</p>
      </div>
    </footer>
    </div>
  </template>
  
  <script>
  import { Carousel, Slide } from 'vue-Carousel';

  export default {
    data() {
      return {
        isMenuOpen: false,
        clientReviews: [
        {
          id: 1,
          text: "Amazing food and great service! I keep coming back for more.",
          author: "John Doe",
        },
        {
          id: 2,
          text: "The best pizza in town. I highly recommend it!",
          author: "Jane Smith",
        },
        {
          id: 3,
          text: "I've never had sushi this fresh. It's a delight!",
          author: "Alice Johnson",
        },
        {
          id: 4,
          text: "Their chocolate cake is a must-try. Heavenly!",
          author: "Bob Wilson",
        },
      ],
    
        dishes: [
          {
            id: 1,
            name: "Pasta Carbonara",
            description: "Creamy pasta with bacon and cheese.",
            image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcToZiUUsDXBrMmKWEw-c_BQ2cP-8pmZUjL4TNY8delEHYf3PLRAeR4BN7GfYPX3wjXEVr0&usqp=CAU",
          },
          {
            id: 2,
            name: "Pizza",
            description: "Classic pizza with tomato, mozzarella, and basil.",
            image: "https://t2.gstatic.com/images?q=tbn:ANd9GcQ8xM9urfeDyUCOW3fAfBh5KUmDZWHu0uZ-RiWwAQsMkwU68ELfcJKJcYWPuCG_2jTRyeDpTQ",
          },
          {
            id: 3,
            name: "Sushi Platter",
            description: "Fresh and delicious sushi selection.",
            image: "https://t4.ftcdn.net/jpg/06/05/83/35/360_F_605833578_EbcLZohjgPGAaRYUOrQF2Bn2DjApUedc.jpg",
          },
          {
            id: 4,
            name: "Chocolate Cake",
            description: "Decadent chocolate cake with a rich flavor.",
            image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPsZ3Bbjo4SWUDRglk9yA_y380WYafvgU1AA&usqp=CAU",
          },
        ],
      };
    },
    computed: {
    selectedColor() {
      return this.$store.state.magaswala_color;
    },
  },
  methods: {
    toggleMenu() {
      this.isMenuOpen = !this.isMenuOpen;
    },
    scrollToSection(){
     
      const sectionElement = document.getElementById('section1');
    if (sectionElement) {
      window.scrollTo({
        top: sectionElement.offsetTop - 50, // Adjust the offset as needed
        behavior: 'smooth',
      });
    }
    },
    async handleSubdomain() {
      const API_BASE_URL = 'https://api.infinitybrains.com/api';

      try {
        const subdomain = window.location.hostname.split('.');
        console.log('hello', subdomain[0]);
        const user = subdomain[0];
        const response = await fetch(`${API_BASE_URL}/Searching?domain_name=${user}`);
        const data = await response.json();

        // const subcategoryName = data.Subcategory.sub_category_details.sub_category_name;
        this.$store.commit('setMagaswalaColor',  data.data.color_select);

        // if (subcategoryName) {
        //   this.$router.push(`/${subcategoryName}`);
        // }
        // else{
        //   this.$router.push(`/`);
        // }
      } catch (error) {
        console.error('Error fetching subcategory info:', error);
        
      }
    },
    extractSubdomain(url) {
      const match = url.match(/^(?:https?:\/\/)?([^\/]+)\./);
      return match ? match[1] : null;
    },
    checkSubdomainOnLoad() {
      if (!this.$data.isHandleSubdomainExecuted) {
        this.$data.isHandleSubdomainExecuted = true;

        const currentUrl = window.location.href;
        const subdomain = this.extractSubdomain(currentUrl);

        if (subdomain) {
          console.log(`Subdomain ${subdomain} in URL ${currentUrl} exists!`);
          this.handleSubdomain();
        } else {
          console.error(`No subdomain found in URL ${currentUrl}`);
        }
      }
    },
  },
    mounted(){

      this.checkSubdomainOnLoad();


    }

  };
  </script>
  
  <style scoped>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
  }
  
  header {
    background: url("https://st3.depositphotos.com/1194063/15070/i/450/depositphotos_150709644-stock-photo-various-herbs-and-spices.jpg") center/cover no-repeat;
    text-align: center;
    color: #fff;
    padding: 100px 0;
  }
  
  .title {
    font-size: 48px;
    margin: 0;
  }
  
  .subtitle {
    font-size: 24px;
    margin: 20px 0;
  }
  
  .cta-button {
    display: inline-block;
    background-color: #e74c3c;
    color: #fff;
    padding: 15px 30px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 20px;
    margin-top: 20px;
  }

  .cta-button1 {
    display: inline-block;
    background-color: #e74c3c;
    color: #fff;
    padding: 15px 30px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 20px;
    margin-top: 20px;
  }
/* Common styles for all screen sizes */
.dish-row {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 20px;
  background-color: #333;
  color: #fff;
}

.logo {
  font-size: 1.5em;
}

.menu-toggle {
  font-size: 1.5em;
  cursor: pointer;
  display: none;
}

.menu {
  display: flex;
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
}

.menu li {
  margin-right: 20px;
}

.menu a {
  text-decoration: none;
  color: #fff;
  font-weight: bold;
}

/* Media Query for Responsive Design */
@media (max-width: 768px) {
  .menu {
    display: none;
    flex-direction: column;
    position: absolute;
    top: 60px;
    left: 0;
    right: 0;
    background-color: #333;
    z-index: 1;
  }

  .menu-open {
    display: flex;
  }

  .menu-toggle {
    display: block;
  }

  .navbar {
    flex-direction: column;
  }
}

.dish-card {
  width: calc(25% - 20px);
  margin: 10px;
  box-sizing: border-box;
  background-color: #fff;
  border-radius: 5px;
  padding: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  text-align: center;
}

/* Media query for tablet screens */
@media (max-width: 768px) {
  .dish-card {
    width: calc(33.33% - 20px);
  }
}

/* Media query for phone screens */
@media (max-width: 576px) {
  .dish-card {
    width: calc(50% - 20px);
  }
}

  
  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
  }
  
  .section-title {
    font-size: 36px;
    margin-bottom: 20px;
  }
  
  .dish-card {
    background-color: #fff;
    border-radius: 5px;
    padding: 20px;
    margin: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
  }
  
  .dish-image {
    max-width: 25vh;
    height: auto;
    border-radius: 5px;
    margin-bottom: 20px;
    width: 100%;
  }
  
  .dish-name {
    font-size: 24px;
  }
  
  .dish-description {
    font-size: 18px;
  }

  footer {
  background-color: #333;
  color: #fff;
  padding: 20px 0;
  text-align: center;
}

footer p {
  margin: 0;
  font-size: 16px;
}
.client-reviews {
  background-color: #f2f2f2;
  padding: 40px 0;
  text-align: center;
}

.section-title {
  font-size: 36px;
}

.review-Slider {
  display: flex;
  flex-wrap: nowrap;
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  -webkit-overflow-scrolling: touch;
  margin: 20px 0;
  padding: 20px;
}


.review-slider {
  display: flex;
  flex-wrap: nowrap;
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  -webkit-overflow-scrolling: touch;
  margin: 20px 0;
  padding: 20px;
  white-space: nowrap;
  /* Add styles for horizontal scrolling here */
  overflow-y: hidden;
  /* Hide vertical scrollbar */
}

.review-card {
  flex: 0 0 calc(50% - 20px);
  background-color: #fff;
  border-radius: 5px;
  margin: 10px;
  padding: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  text-align: center;
  scroll-snap-align: start;
  display: inline-block;
  /* Make review cards display inline to enable horizontal layout */
}

.review-card p {
  margin: 0;
  font-size: 18px;
}

.review-author {
  font-size: 16px;
  margin-top: 10px;
}
  </style>
  