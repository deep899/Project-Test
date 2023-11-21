<template>
    <div>
      <header>
        <h1 class="title">Delicious Food</h1>
        <p class="subtitle">Experience the Taste of Paradise</p>
        <label class="cta-button"   :style="{ backgroundColor: selectedColor }" >Order Now</label>
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
          <Slide v-for="dish in dishes" :key="dish.id">
            <div class="dish-card">
              <img :src="dish.image" :alt="dish.name" class="dish-image" />
              <h3 class="dish-name">{{ dish.name }}</h3>
              <p class="dish-description">{{ dish.description }}</p>
            </div>
          </Slide>
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
            image: "https://static.toiimg.com/thumb/84784534.cms?imgsize=468021&width=800&height=800",
          },
          {
            id: 2,
            name: "Pizza",
            description: "Classic pizza with tomato, mozzarella, and basil.",
            image: "https://uatinfinitybackend.pizzahut.io/v1/content/en-in/in-1/images/deal/double-treat-box-ice-cream.9266b8899776fb8755c9262e84a5e2df.1.jpg",
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
            image: "https://mrbrownbakery.com/image/images/TXnSdEsXr1fMSXZSzgiVzTMJFs9Wi4PpJvvLKeNs.jpeg?p=med",
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
  