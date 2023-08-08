<template>
  <div class="main-Container1" style="margin-top: 0%">
    <img
      class="imag34"
      style="
        object-fit: contain;
        width: fit-content;
        height: 100%;

        margin-top: 29%;

        position: absolute;
      "
      src="./../../src/assets/BackGround/pgb3.png"
    />
    <img
      class="imag34"
      style="
        object-fit: contain;
        width: fit-content;
        height: 40%;

        top: 160%;
        right: 0;
        position: absolute;
      "
      src="./../../src/assets/BackGround/pgb2.png"
    />
    <img
      class="imag34"
      style="
        object-fit: contain;
        width: fit-content;
        height: 20%;

        top: 275%;
        right: 0;
        position: absolute;
      "
      src="./../../src/assets/BackGround/pgb12.png"
    />
    <div v-if="container1" class="container container1" style="width: 100%">
      <div
        v-for="(item, index) in listdef"
        :key="item.id"
        style="display: flex; align-items: center; justify-content: center"
      >
        <div class="row" v-if="index % 2 == 0">
          <div
            id="firstCondition1"
            class="col-md-6 col-sm-12"
            style="
              display: flex;
              height: 70vh;
              align-items: center;
              justify-content: end;
            "
          >
            <router-link :to="'/' + item.id">
              <img
                style="
                  object-fit: contain;
                  width: fit-content;
                  height: 42.8vh;
                  max-width: 100%;
                "
                :src="item.product_image"
                :alt="item.name"
              />
            </router-link>
          </div>
          <div
            class="col-md-6 col-sm-12 col-lg-6"
            style="
              align-items: center;
              display: flex;
              justify-content: center;
              position: relative;
            "
          >
            <div class="firstDiv" style="">
              <span
                class="nameProduct"
                style="
                  font-size: 5vh;
                  line-height: 4vh;
                  display: inline;
                  top: 0;
                  max-width: 100%;
                "
              >
                {{ item.name }}
              </span>

              <p class="longDiscription" style="">{{ item.short_desc }}</p>
              <p class="price" style="">
                Price : <span style="font-size: 1vw">₹</span>
                {{ this.formatNumber(item.price) }}/-
              </p>
            </div>
          </div>
        </div>

        <div class="row" v-if="index % 2 !== 0">
          <div class="col-md-6 col-sm-12 col-lg-6 secondDiv" style="">
            <div style="width: 80%; height: 30.8vh; padding-left: 0.2%">
              <span class="nameSecond nameProduct" style="">
                {{ item.name }}
              </span>

              <p class="longDiscription" style="">{{ item.short_desc }}</p>
              <p class="price" style="">
                Price : <span style="font-size: 1vw">₹</span>
                {{ this.formatNumber(item.price) }}/-
              </p>
            </div>
          </div>

          <div
            class="col-md-6 col-sm-12"
            style="
              display: flex;
              height: 70.8vh;
              align-items: center;
              justify-content: start;
            "
          >
            <router-link :to="'/' + item.id">
              <img
                class="secondImage"
                style=""
                :src="item.product_image"
                :alt="item.name"
              />
            </router-link>
          </div>
        </div>
      </div>
    </div>
    <div
      v-else
      class="container container2"
      style="width: 100%; margin-bottom: 30%"
    >
      <div
        v-for="(item, index) in listdef"
        :key="item.id"
        style="display: flex; align-items: center; justify-content: center"
      >
        <div class="row">
          <div
            class="col-md-6 col-sm-12"
            style="
              display: flex;
              height: 50.8vh;
              align-items: center;
              justify-content: start;
            "
          >
            <router-link :to="'/' + item.id">
              <img
                class="secondImage"
                style=""
                :src="item.product_image"
                :alt="item.name"
              />
            </router-link>
          </div>

          <div class="col-md-6 col-sm-12 col-lg-6 secondDiv" style="">
            <div style="width: 80%; height: 30.8vh; padding-left: 0.2%">
              <span class="nameSecond nameProduct" style="">
                {{ item.name }}
              </span>

              <p class="longDiscription" style="">{{ item.short_desc }}</p>
              <p class="price" style="">
                Price : <span style="font-size: 1vw">₹</span>
                {{ this.formatNumber(item.price) }}/-
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import { ref, onMounted, onUnmounted } from "vue";
import { useStore } from "vuex";

export default {
  data() {
    return {
      listdef: [],
      container1: false,
    };
  },
  setup() {
    const isVisible = ref(false);
    const store = useStore();

    onMounted(() => {
      isVisible.value = true;
      // Apply the lines of code when the component becomes visible
      store.commit("setBackGroundColor", "transparent");
      store.commit(
        "setimageSrc",
        `${window.location.origin}/img/Ib_logo.446e007b.png`
      );
      store.commit("changeColor", "white");
    });

    onUnmounted(() => {
      isVisible.value = false;
    });

    // ... Other component logic ...

    return {
      isVisible,
      // ... Other properties ...
    };
  },
  mounted() {
    // const store = userDetails();
    // store.commit('setBackGroundColor', 'transparent');
    // store.commit('setimageSrc', `${window.location.origin}/img/Ib_logo.446e007b.png`);
    this.getProductList();
    this.checkScreenSize();
    // Add an event listener to monitor window resize
    window.addEventListener("resize", this.checkScreenSize);
  },
  beforeDestroy() {
    // Remove the event listener when the component is destroyed
    window.removeEventListener("resize", this.checkScreenSize);
  },

  methods: {
    async getProductList() {
      const resultfinal = await axios.get(
        "https://api.infinitybrains.com/public/api/showproduct"
      );
      this.listdef = resultfinal.data.data;
    },
    checkScreenSize() {
      // Update the isAbove940 flag based on window width
      this.container1 = window.innerWidth > 940;
    },
    formatNumber(number) {
      number = number.toString().replace(/\D/g, "");
      let formattedNumber = "";
      let commaCount = 0;

      for (let i = number.length - 1; i >= 0; i--) {
        formattedNumber = number[i] + formattedNumber;
        commaCount++;

        if (commaCount === 3 && i > 0) {
          formattedNumber = "," + formattedNumber;
          commaCount = 0;
        }
      }

      return formattedNumber;
    },
  },
};
</script>

<style>
@keyframes fadeInFromTop {
  0% {
    opacity: 0;
    transform: translateY(-10px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes fadeInFromLeft {
  0% {
    opacity: 0;
    transform: translateX(-10px);
  }
  100% {
    opacity: 1;
    transform: translateX(0);
  }
}

/* Apply animations to rows based on index */
.row:nth-child(odd) {
  animation: fadeInFromTop 0.5s ease-in-out;
}

.row:nth-child(even) {
  animation: fadeInFromLeft 0.5s ease-in-out;
}

/* Media query for smaller screens */
@media (max-width: 940px) {
  /* Adjust the animation for smaller screens if needed */
  .row:nth-child(odd) {
    animation: fadeInFromLeft 0.5s ease-in-out;
  }

  .row:nth-child(even) {
    animation: fadeInFromTop 0.5s ease-in-out;
  }
}
/* Optional CSS styles */
.nameProduct {
  color: #012a71;
  color: #012a71;
  font-family: Impact, Bold, sans-serif;
  font-family: Impact, Haettenschweiler, "Arial Narrow Bold", sans-serif;
}
.firstDiv {
  width: 80%;
  height: 42.8vh;
  padding-left: 5%;
}
.secondImage {
  object-fit: contain;
  width: fit-content;
  height: 42.8vh;
  margin-left: 10%;
  max-width: 100%;
}
.secondDiv {
  align-items: center;
  padding-left: 8%;
  display: flex;
  justify-content: center;
  position: relative;
}
.nameSecond {
  font-size: 5vh;
  line-height: 4vh;
  display: inline;
  top: 0;
  max-width: 100%;
}
.firstCondition {
  display: flex;
  height: 70vh;
  align-items: center;
  justify-content: end;
}
.longDiscription {
  width: 80%;
  margin-top: 4.5%;
  font-size: 1.2vw;

  max-height: fit-content;
}

.price {
  font-size: 1.2vw;
  font-weight: 900 bolder;
  margin-top: -1.5%;
}
@media (max-width: 940px) {
  .longDiscription {
    width: 100%;
    margin-top: 4.5%;
    font-size: 4.3vw;

    max-height: fit-content;
  }
  .imag34 {
    display: none;
  }
  #firstCondition1 {
    height: 50vh;
  }
  .secondDiv {
    align-items: center;
    padding-left: 0%;
    display: flex;
    justify-content: center;
    position: relative;
  }
  .secondImage {
    margin-left: 0;
  }
  .firstDiv {
    width: 80%;
    height: 42.8vh;
    padding-left: 0%;
  }
  .nameSecond {
    font-size: 4.5vh;
    line-height: 4vh;
    display: inline;
    top: 0;
    max-width: 80%;
  }
  .row .col-md,
  .col {
    height: 50vh;
  }
  .price {
    font-size: 5.2vw;
    font-weight: 900 bolder;
    margin-top: -1.5%;
  }
}
</style>
