<template>
  <div class="mainContainer">
    <div class="container bgImgContainer" :style="{ backgroundImage: 'url(' + backgroundImageUrl + ')' }">
    </div>
    <div>
      <h2>Contact Form</h2>
      <form @submit.prevent="submitForm" class="contact-form">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" v-model="formData.name" required />
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" v-model="formData.email" required />
        </div>
        <div class="form-group">
          <label for="message">Message:</label>
          <textarea id="message" v-model="formData.message" rows="4" required></textarea>
        </div>
        <button type="submit">Submit</button>
      </form>
    </div>
    <div>
      <h2>Contact Form</h2>
      <form @submit.prevent="submitForm" class="contact-form">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" v-model="formData.name" required />
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" v-model="formData.email" required />
        </div>
        <div class="form-group">
          <label for="message">Message:</label>
          <textarea id="message" v-model="formData.message" rows="4" required></textarea>
        </div>
        <button type="submit">Submit</button>
      </form>
    </div>
  </div>
</template>

<script>
import Home from './../../src/Theme1/Home.vue';

export default {
  data() {
    return {
      backgroundImageUrl: require('./../../src/Theme1/10_Min_assets/img/wave.png'), // Set the background image dynamically
      formData: {
        name: '',
        email: '',
        message: ''
      }
    };
  },
  methods: {
    submitForm() {
      // You can access form data in this.formData
      // Send the form data to your backend or perform any necessary actions here
      console.log('Form Data:', this.formData);
      // Clear the form after submission
      this.formData.name = '';
      this.formData.email = '';
      this.formData.message = '';
    }
  },
  components: { Home }
};
</script>

<style scoped>
.container {
  text-align: center;
  margin-bottom: 20px;
  padding: 53px;
}

.bgImgContainer {
  background-image: url('{{ backgroundImageUrl }}');
  /* Use double curly braces for dynamic values */
  background-position: bottom;
}

.contact-form {
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  font-weight: bold;
}

input[type="text"],
input[type="email"],
textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

button {
  background-color: #007BFF;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}

/* Responsive styles */
@media (max-width: 768px) {
  .contact-form {
    padding: 10px;
  }

  .form-group {
    margin-bottom: 10px;
  }

  label {
    font-size: 16px;
  }

  input[type="text"],
  input[type="email"],
  textarea {
    padding: 8px;
  }

  button {
    padding: 8px 16px;
  }
}
</style>
