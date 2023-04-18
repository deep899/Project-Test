<template>
  <div class="">
    <q-carousel
      ref="carousel"
      animated
      v-model="slide"
      infinite
      :autoplay="autoplay"
      height="100vh"
      style= "  width: 100%;  
    
      "
    > 
     
      <q-carousel-slide
        :name="1"
        img-src="./../assets/img/Slider11.jpg"
        class="carousel"
      >
      <!-- <h4 style="max-width: 100%; max-height: 100%; align-items: center; margin-top: 25vh; font-size: 8rem; color: var(--unnamed-color-ffffff); text-align: left;font: normal normal normal 4.5rem/146px Impact;letter-spacing: 0px;color: #FFFFFF;text-shadow: 0px 3px 6px #0000007D;  justify-content: center; display: flex;">Versatile Innovators</h4> -->
      <h4 style="max-width: 100%; max-height: 100%; align-items: center; margin-top: 25vh; font-size: 8rem; color: var(--unnamed-color-ffffff); text-align: left;font: normal normal normal 4.5rem/146px Impact;letter-spacing: 0px;color: #FFFFFF;text-shadow: 0px 3px 6px #0000007D;  justify-content: center; display: flex;">Versatile Innovators</h4>
      <h3 style="max-width: 100%; max-height: 100%; height: fit-content; color: var(--unnamed-color-ffffff); text-align: center; font: normal normal 600 35px/47px Nunito; letter-spacing: 0px; width: 80%; color: #FFFFFF; text-shadow: 0px 3px 6px #00000070; margin-left: 20vh; opacity: 1; margin-top: -10vh;">
          We deliver Websites, Mobile apps, Hybrid apps, Software, Digital Marketing, SEO, etc.
           Services to global businesses, with 100% project delivery success and also complete digital transformation. Our Experts have the skills of the latest technology in every field & keep updating them regularly
        </h3> 
       </q-carousel-slide>
       <q-carousel-slide
        :name="2"
        img-src="./../img/Loading2.png"
        class="carousel"
      >
      <!-- <h4 style="max-width: 100%; max-height: 100%; align-items: center; margin-top: 25vh; font-size: 8rem; color: var(--unnamed-color-ffffff); text-align: left;font: normal normal normal 4.5rem/146px Impact;letter-spacing: 0px;color: #FFFFFF;text-shadow: 0px 3px 6px #0000007D;  justify-content: center; display: flex;">Versatile Innovators</h4> -->
      <h4 style="max-width: 100%; max-height: 100%; align-items: center; margin-top: 25vh; font-size: 8rem; color: var(--unnamed-color-ffffff); text-align: left;font: normal normal normal 4.5rem/146px Impact;letter-spacing: 0px;color: #FFFFFF;text-shadow: 0px 3px 6px #0000007D;  justify-content: center; display: flex;">Digital Transformation</h4>
      <h3 style="max-width: 100%; max-height: 100%; height: fit-content; color: var(--unnamed-color-ffffff); text-align: center; font: normal normal 600 35px/47px Nunito; letter-spacing: 0px; width: 80%; color: #FFFFFF; text-shadow: 0px 3px 6px #00000070; margin-left: 20vh; opacity: 1; margin-top: -10vh;">
        We Provide Technology Transformation, Improving Customer experience by being client-centric, Change management & experience; Strategic & analytical consulting & Cul Talent & leadership. We help you capitalize on opportunities to drive profitable growth, rethink organizational structure and reap the potential of information.
        </h3> 
       </q-carousel-slide>
       <q-carousel-slide
        :name="3"
        img-src="./../img/slidees3.jpg"
        class="carousel"
      >
      <!-- <h4 style="max-width: 100%; max-height: 100%; align-items: center; margin-top: 25vh; font-size: 8rem; color: var(--unnamed-color-ffffff); text-align: left;font: normal normal normal 4.5rem/146px Impact;letter-spacing: 0px;color: #FFFFFF;text-shadow: 0px 3px 6px #0000007D;  justify-content: center; display: flex;">Versatile Innovators</h4> -->
      <h4 style="max-width: 100%; max-height: 100%; align-items: center; margin-top: 25vh; font-size: 8rem; color: var(--unnamed-color-ffffff); text-align: left;font: normal normal normal 4.5rem/146px Impact;letter-spacing: 0px;color: #FFFFFF;text-shadow: 0px 3px 6px #0000007D;  justify-content: center; display: flex;">Why Infinity Brains</h4>
      <h3 style="max-width: 100%; max-height: 100%; height: fit-content; color: var(--unnamed-color-ffffff); text-align: center; font: normal normal 600 2vw/47px Nunito; letter-spacing: 0px; width: 80%; color: #FFFFFF; text-shadow: 0px 3px 6px #00000070; margin-left: 20vh; opacity: 1; margin-top: -10vh;">
        Customer Focused Projects, Convincing Projects that are 100% as the customer wants. The venture of a Well Reputed & Popular Business for 7 years; hence having experience and Trust among the clients & looking to maintain long term goals with our clients. We are all rounders; providing services like SEO friendly Websites, with latest technologies, applications in android, flutter & IOS; and also all kinds of marketing for that
        </h3> 
       </q-carousel-slide>
<!-- 
      <q-carousel-slide
        :name="2"
        img-src="~/src/img/Slider_2.jpg"
        class="carousel"
      >

      </q-carousel-slide>
      <q-carousel-slide
        :name="3"
        img-src="~/src/img/Slider_3.jpg"
        class="carousel"
      >

      </q-carousel-slide> -->
     
    </q-carousel>
    <!-- <div class="custom-buttons"> -->
  
    <q-btn
      class=""
      style="  color: whitesmoke;  margin-top: -5%; margin-left: 1%;   height: fit-content; width: 1vh; border-radius: 100px ;   "
      icon="chevron_left"
      @click="prev()"
    ></q-btn>
      


    <q-btn
      class=""
      style="  color: whitesmoke;  margin-top: -5%; margin-left: 0.5%;  height: fit-content; width: 1vh; border-radius: 100px;   "
      icon="chevron_right"
      @click="next()"
    >
    </q-btn>

    <!-- <q-btn
      class=""
      style="  color: whitesmoke;  margin-top: -10%;   height: fit-content; width: 1vh; border-radius: 100px ; margin-left: 90vh;  "
      icon=""
      @click="scrolldown()"
    > -->
    <div style="border:solid ; margin-top: -5%; margin-left: 100vh; " @click="Downslide()" >
      <div class="chevron"></div>
  <div class="chevron"></div>
  <div class="chevron"></div> 
</div>
  <!-- </q-btn> -->

    <!-- </div> -->
  </div>
</template>

<script>

export default {
  
  data() {
    return {
      slide: 1,
      autoplay: true,
    };
  },
  methods: {
    prev() {
      this.$refs.carousel.prev();
    },
    next() {
      this.$refs.carousel.next();
    },
    Downslide(){

        // window.scrollY
        window.scrollTo(0, 700);
    }
  },
  mounted(){
//    


  }
};
</script>

<style lang="css" scoped>


.custom-buttons {
  display: flex;
  justify-content: space-between;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 100%;
}

.custom-button {
  color: white;
  font-size: 24px;
  opacity: 0.8;
  transition: opacity 0.2s;
}

.custom-button:hover {
  opacity: 1;
}

.chevron {
  position: absolute;
  width: 28px;
  height: 8px;
  opacity: 0;
  transform: scale3d(0.5, 0.5, 0.5);
  animation: move 3s ease-out infinite;
}

.chevron:first-child {
  animation: move 3s ease-out 1s infinite;
}

.chevron:nth-child(2) {
  animation: move 3s ease-out 2s infinite;
}

.chevron:before,
.chevron:after {
  content: ' ';
  position: absolute;
  top: 0;
  height: 100%;
  width: 51%;
  background: #fff;
}

.chevron:before {
  left: 0;
  transform: skew(0deg, 30deg);
}

.chevron:after {
  right: 0;
  width: 50%;
  transform: skew(0deg, -30deg);
}

@keyframes move {
  25% {
    opacity: 1;

  }
  33% {
    opacity: 1;
    transform: translateY(30px);
  }
  67% {
    opacity: 1;
    transform: translateY(40px);
  }
  100% {
    opacity: 0;
    transform: translateY(55px) scale3d(0.5, 0.5, 0.5);
  }
}

.text {
  display: block;
  margin-top: 75px;
  margin-left: -30px;
  font-family: "Helvetica Neue", "Helvetica", Arial, sans-serif;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
  white-space: nowrap;
  opacity: .25;
  animation: pulse 2s linear alternate infinite;
}

@keyframes pulse {
  to {
    opacity: 1;
  }
}
</style>