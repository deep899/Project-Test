<template>
    <div>
      <header>
        <h1 class="title">T-Shirts & Shirts Shop</h1>
        <p class="subtitle">Discover the Latest Styles</p>
        <a class="cta-button" :style="{ backgroundColor: selectedColor }" href="#">Shop Now</a>
      </header>
      <div class="client-reviews">
        <h2 class="section-title">Customer Reviews</h2>
        <div class="review-slider">
          <div class="review-card" v-for="review in clientReviews" :key="review.id">
            <p class="review-text">{{ review.text }}</p>
            <p class="review-author">- {{ review.author }}</p>
          </div>
        </div>
      </div>
      <div class="container">
        <h2 class="section-title">Featured Products</h2>
        <div class="dish-slider">
          <div class="dish-card" v-for="product in products" :key="product.id">
            <img :src="product.image" :alt="product.name" class="product-image" />
            <h3 class="product-name">{{ product.name }}</h3>
            <p class="product-description">{{ product.description }}</p>
          </div>
        </div>
      </div>
      <footer :style="{ backgroundColor: selectedColor }">
        <div class="container">
          <p :style="{ backgroundColor: selectedColor }">&copy; 2023 yourshopname.com. All rights reserved.</p>
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
            text: "Great quality and fast delivery! I love my new shirts.",
            author: "John Doe",
          },
          {
            id: 2,
            text: "The T-shirts are so comfortable, and they have a perfect fit.",
            author: "Jane Smith",
          },
          {
            id: 3,
            text: "The variety of designs is impressive. I keep coming back for more.",
            author: "Alice Johnson",
          },
          {
            id: 4,
            text: "Their customer service is excellent, and the shirts are stylish.",
            author: "Bob Wilson",
          },
        ],
  
        products: [
          {
            id: 1,
            name: "Classic White T-Shirt",
            description: "A versatile and timeless piece for your wardrobe.",
            image: "https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcTN6LeNxWVQ9eYAUoBwRMnzQjhcFRFNA-6b3LR5bCaZOW_5XacaSR-bSvEsyxCDe0cIuoV3inL1ZP2KD5oEb2FdjytdfYpEuOxrc2EvSSVretISxxo_5dw11A",
          },
          {
            id: 2,
            name: "Graphic Print Shirt",
            description: "Express your style with unique graphic designs.",
            image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnAl5p__AS1fS0TAO_w8UM0PDJ4OmuLsRMag&usqp=CAU",
          },
          {
            id: 3,
            name: "Striped Polo Shirt",
            description: "A classic choice for a smart-casual look.",
            image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_o0mFjrLfyV-yQOwgECqLPq5U6Ykd0J0utw&usqp=CAU",
          },
         
        ],
      };
    },
    computed: {
      selectedColor() {
        return this.$store.state.magaswala_color; // Replace with your color state
      },
    },
  };
  </script>
  
  
  <style scoped>
 /* Base styles for all screen sizes */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f2f2f2;
}

header {
  background: url("https://img.freepik.com/free-photo/shirt-mockup-concept-with-plain-clothing_23-2149448749.jpg?w=1060&t=st=1699079897~exp=1699080497~hmac=48916d9a8522aa486f891e5a762fbcf723840476d3d3ae2637491fc8086373b6") center/cover no-repeat;
  text-align: center;
  color: #fff;
  padding: 10vh 0; /* Adjust padding for header */
}

.title {
  font-size: 48px;
  margin: 0;
}

.subtitle {
  font-size: 24px;
  margin: 10px 0; /* Add some spacing between title and subtitle */
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

.review-card {
  background-color: #fff;
  border-radius: 5px;
  padding: 20px;
  margin: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  text-align: center;
}

.review-card p {
  margin: 0;
  font-size: 18px;
}

.review-author {
  font-size: 16px;
  margin-top: 10px;
}

/* Responsive styles for smaller screens (up to 768px) */
@media screen and (max-width: 768px) {
  header {
    padding: 5vh 0; /* Adjust padding for header on smaller screens */
  }

  .title {
    font-size: 36px;
  }

  .subtitle {
    font-size: 20px;
    margin: 5px 0;
  }

  .cta-button {
    padding: 12px 24px;
    font-size: 18px;
  }

  .review-card {
    font-size: 16px;
    padding: 15px;
  }

  .review-author {
    font-size: 14px;
  }
}

/* Responsive styles for very small screens (up to 480px) */
@media screen and (max-width: 480px) {
  .title {
    font-size: 32px;
  }

  .subtitle {
    font-size: 18px;
    margin: 3px 0;
  }

  .cta-button {
    padding: 10px 20px;
    font-size: 16px;
  }

  .review-card {
    font-size: 14px;
    padding: 10px;
  }

  .review-author {
    font-size: 12px;
  }
}

  </style>
  