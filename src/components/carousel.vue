<template>
  <div class="">
    <q-carousel
      animated
      v-model="slide"
      navigation
      infinite
      :autoplay="autoplay"
      arrows
      transition-prev="slide-right"
      transition-next="slide-left"
      @mouseenter="autoplay = false"
      @mouseleave="autoplay = true"
      height="92vh"
      style="width: 100%"
    >
      <q-carousel-slide
        :name="1"
        img-src="~/src/img/Group_carousel.jpg"
        class="carousel"
      >
        <div class="row">
          <div
            class="col-4 col-md-4 col-xs-12 text-white q-ml-xl absolute-left"
            style="
              display: flex;
              flex-direction: column;
              justify-content: center;
              align-items: center;
            "
          >
            <h1
              style="
                margin-bottom: 0px;
                margin-top: 0px;
                font-size: 74px;
                font-family: Impact, Haettenschweiler, 'Arial Narrow Bold',
                  sans-serif;
                font-weight: bold;
              "
            >
              Multifaceted <br />
              Innovators
            </h1>
            <p
              class="carousel-text text-h5 q-pl-xl text-weight-bold q-pt-lg"
              style="padding-left: 80px"
            >
              We are the trailblazers with expertise in various fields. Being
              with us will allow you to get acquainted with advancement and
              expansion.
            </p>
          </div>
        </div>
      </q-carousel-slide>
      <q-carousel-slide
        :name="2"
        img-src="~/src/img/Group_carousel.jpg"
        class="carousel"
      >
        <div class="row">
          <div
            class="col-4 col-md-4 col-xs-12 text-white q-ml-xl absolute-left"
            style="
              display: flex;
              flex-direction: column;
              justify-content: center;
              align-items: center;
            "
          >
            <h1 style="margin-bottom: 0px; margin-top: 0px; text-weight-bold">
              Versatile <br />
              Innovators
            </h1>
            <p
              class="carousel-text text-h5 q-pl-xl text-weight-bold q-pt-lg"
              style="padding-left: 80px"
            >
              We Deliver Websites,Mobile App,Hybrid Apps,Software,Digital
              Marketing,SAP
            </p>
          </div>
        </div>
      </q-carousel-slide>
      <q-carousel-slide
        :name="3"
        img-src="~/src/img/Group_carousel.jpg"
        class="carousel"
      >
        <div class="row">
          <div
            class="col-4 col-md-4 col-xs-12 text-white q-ml-xl absolute-left"
            style="
              display: flex;
              flex-direction: column;
              justify-content: center;
              align-items: center;
            "
          >
            <h1 style="margin-bottom: 0px; margin-top: 0px; text-weight-bold">
              Versatile <br />
              Innovators
            </h1>
            <p
              class="carousel-text text-h5 q-pl-xl text-weight-bold q-pt-lg"
              style="padding-left: 80px"
            >
              We Deliver Websites,Mobile App,Hybrid Apps,Software,Digital
              Marketing,SAP
            </p>
          </div>
        </div>
      </q-carousel-slide>
      <q-carousel-slide
        :name="4"
        img-src="~/src/img/Group_carousel.jpg"
        class="carousel"
      >
        <div class="row">
          <div
            class="col-4 col-md-4 col-xs-12 text-white q-ml-xl absolute-left"
            style="
              display: flex;
              flex-direction: column;
              justify-content: center;
              align-items: center;
            "
          >
            <h1 style="margin-bottom: 0px; margin-top: 0px; text-weight-bold">
              Versatile <br />
              Innovators
            </h1>
            <p
              class="carousel-text text-h5 q-pl-xl text-weight-bold q-pt-lg"
              style="padding-left: 80px"
            >
              We Deliver Websites,Mobile App,Hybrid Apps,Software,Digital
              Marketing,SAP
            </p>
          </div>
        </div>
      </q-carousel-slide>
    </q-carousel>
  </div>
</template>

<script>
import { ref } from "vue";

export default {
  setup() {
    return {
      slide: ref(1),
      autoplay: ref(true),
    };
  },
};
</script>
