<template>
  <div class="">
    <q-carousel class="carousel" ref="carousel" animated v-model="slide" infinite :autoplay="autoplay" style="width: 100%;  
    
      ">

      <!-- <q-carousel-slide
      :name="1"
      img-src="./../assets/BackGround/bg1.jpg"
      class="carousel"
    >
    
      <div class="caption-container">
        <img style="position: absolute;" class="bottom-Ft"  src="./../assets/BackGround/bgBk.png" />
        <img class="top-Fit" style=" " src="./../assets/BackGround/bgBk.png" />
        <span class="bgText t1" style="">     INFINITYBRAINS</span>
        <span class="carousel-title">VERSATILE INNOVATORS</span>
        <div class="titleDes">
        <span class="carousel-description">
          We deliver Websites, Mobile apps, Hybrid apps, Software, Digital
          Marketing, SEO, etc.<br/> Services to global businesses, with 100%
          project delivery success and also complete digital transformation.<br/> 
          Our Experts have the skills of the latest technology in every field
          & keep updating them regularly
        </span>
        
      </div>
      <span class="bgText t2">INFINITYBRAINS</span>
      </div>
    </q-carousel-slide> -->
      <q-carousel-slide :name="1" class="carousel">



        <router-link to="/">
          <img src="./../assets/new2023-background/it_matlab_ib.png" style="width:100%;  " alt="">
        </router-link>

      </q-carousel-slide>
      <q-carousel-slide :name="2" class="carousel">

        <router-link to="/10M_website/page">
          <img src="./../assets/new2023-background/10mint.png" style="width:100%;  " alt="">
        </router-link>

      </q-carousel-slide>
      <q-carousel-slide :name="3" class="carousel">

        <router-link to="/14">
          <img src="./../assets/new2023-background/ib_delight.jpg" style="width:100%;max-width: 100;  " alt="">
        </router-link>

      </q-carousel-slide>
      <q-carousel-slide :name="4" class="carousel"> <router-link to="/8">
          <img src="./../assets/new2023-background/ibhrms_1.jpg" style="width:100%;max-width: 100;" alt="">
        </router-link>

      </q-carousel-slide>
      <q-carousel-slide :name="5" class="carousel">

        <router-link to="/9">
          <img src="./../assets/new2023-background/ibsf_10.jpg" style="width:100%;  max-width: 100; " alt="">
        </router-link>

      </q-carousel-slide>

      <q-carousel-slide :name="6" class="carousel">

        <router-link to="/15">
          <img src="./../assets/new2023-background/consu.jpg" style="width:100%;  " alt="">
        </router-link>

      </q-carousel-slide>









      <!-- <q-carousel-slide
      :name="2"
      img-src="./../assets/BackGround/bg2.png"
      class="carousel"
    >
    
      <div class="caption-container">
        <img style="position: absolute;" class="bottom-Ft"  src="./../assets/BackGround/bgBk.png" />
        <img class="top-Fit" style=" " src="./../assets/BackGround/bgBk.png" />
        <span class="bgText t1" style="">     INFINITYBRAINS</span>
        <span class="carousel-title">DIGITAL TRANSFORMATION</span>
        <div class="titleDes">
        <span class="carousel-description" style="font-size: 1.7vw;">
          We Provide Technology Transformation, Improving Customer experience by being client-centric, Change management & experience; Strategic & analytical consulting & Cul Talent & leadership. We help you capitalize on opportunities to drive profitable growth, rethink organizational structure and reap the potential of information.
      
        </span>
        
      </div>
      <span class="bgText t2">INFINITYBRAINS</span>
      </div>
    </q-carousel-slide>
    <q-carousel-slide
      :name="3"
      img-src="./../assets/BackGround/bg2.png"
      class="carousel"
    >
    
      <div class="caption-container">
        <img style="position: absolute;" class="bottom-Ft"  src="./../assets/BackGround/bgBk.png" />
        <img class="top-Fit" style=" " src="./../assets/BackGround/bgBk.png" />
        <span class="bgText t1" style="">     INFINITYBRAINS</span>
        <span class="carousel-title" style="margin-bottom: 1%;">WHY INFINITY BRAINS</span>
        <div class="titleDes">
        <span class="carousel-description" style="font-size: 1.6vw;">
          Customer Focused Projects, Convincing Projects that are 100% as the customer wants. The venture of a Well Reputed & Popular Business for 7 years; hence having experience and Trust among the clients & looking to maintain long term goals with our clients. We are all rounders; providing services like SEO friendly Websites, with latest technologies, applications in android, flutter & IOS; and also all kinds of marketing for that    </span>
        
      </div>
      <span class="bgText t2">INFINITYBRAINS</span>
      </div>
    </q-carousel-slide> -->
      <!-- <q-carousel-slide
      :name="2"
      img-src="./../assets/BackGround/bg1.jpg"
      class="carousel"
    >
    
      <div class="caption-container">
        <span class="bgText t1" style="">INFINITYBRAINS</span>
        <span class="carousel-title">Digital Transformation</span>
        <div class="titleDes">
        <span class="carousel-description">
          We deliver Websites, Mobile apps, Hybrid apps, Software, Digital
          Marketing, SEO, etc.<br/> Services to global businesses, with 100%
          project delivery success and also complete digital transformation.<br/> 
          Our Experts have the skills of the latest technology in every field
          & keep updating them regularly
        </span>
        
      </div>
      <span class="bgText t2">INFINITYBRAINS</span>
      </div>
    </q-carousel-slide>
    <q-carousel-slide
      :name="3"
      img-src="./../assets/BackGround/bg1.jpg"
      class="carousel"
    >
    
      <div class="caption-container">
        <span class="bgText t1" style="">INFINITYBRAINS</span>
        <span class="carousel-title">VERSATILE INNOVATORS</span>
        <div class="titleDes">
        <span class="carousel-description">
          We deliver Websites, Mobile apps, Hybrid apps, Software, Digital
          Marketing, SEO, etc.<br/> Services to global businesses, with 100%
          project delivery success and also complete digital transformation.<br/> 
          Our Experts have the skills of the latest technology in every field
          & keep updating them regularly
        </span>
        
      </div>
      <span class="bgText t2">INFINITYBRAINS</span>
      </div>
    </q-carousel-slide> -->
      <!-- <q-carousel-slide
        :name="2"
        img-src="./../img/Loading2.png"
        class="carousel"
      >
      <h4 style="max-width: 100%; max-height: 100%; align-items: center; margin-top: 25vh; font-size: 8rem; color: var(--unnamed-color-ffffff); font: 8vmin Impact;letter-spacing: 0px;color: #FFFFFF;text-shadow: 0px 3px 6px #0000007D;  justify-content: center; display: flex;">Digital Transformation</h4>
      <h3 style="max-width: 100%; max-height: 100%; height: fit-content; color: var(--unnamed-color-ffffff); text-align: center; font:  600  2vw  Nunito; letter-spacing: 0px; width: 80%; color: #FFFFFF; text-shadow: 0px 3px 6px #00000070; margin-left: 20vh; opacity: 1; margin-top: -10vh;">
        We Provide Technology Transformation, Improving Customer experience by being client-centric, Change management & experience; Strategic & analytical consulting & Cul Talent & leadership. We help you capitalize on opportunities to drive profitable growth, rethink organizational structure and reap the potential of information.
        </h3> 
       </q-carousel-slide>
       <q-carousel-slide
        :name="3"
        img-src="./../img/slidees3.jpg"
        class="carousel"
      >
     <h4 style="max-width: 100%; max-height: 100%; align-items: center; margin-top: 25vh; font-size: 8rem; color: var(--unnamed-color-ffffff); font: 10vmin Impact;letter-spacing: 0px;color: #FFFFFF;text-shadow: 0px 3px 6px #0000007D;  justify-content: center; display: flex;">Why Infinity Brains</h4>
      <h3 style="max-width: 100%; max-height: 100%; height: fit-content; color: var(--unnamed-color-ffffff); text-align: center; font: 600 2vw  Nunito; letter-spacing: 0px; width: 80%; color: #FFFFFF; text-shadow: 0px 3px 6px #00000070; margin-left: 20vh; opacity: 1; margin-top: -10vh;">
        Customer Focused Projects, Convincing Projects that are 100% as the customer wants. The venture of a Well Reputed & Popular Business for 7 years; hence having experience and Trust among the clients & looking to maintain long term goals with our clients. We are all rounders; providing services like SEO friendly Websites, with latest technologies, applications in android, flutter & IOS; and also all kinds of marketing for that
        </h3> 
       </q-carousel-slide> -->
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
    <div style="display: flex;align-items: center;justify-content: center;">
      <q-btn class=""
        style="  color: whitesmoke;  margin-top: -10vh; background-color: #012a71; color: white;     height: fit-content; width: 37px; border-radius: 50% ;  "
        icon="chevron_left" @click="prev()"></q-btn>


      &nbsp;
      &nbsp;
      &nbsp;
      <q-btn class=""
        style="  color: whitesmoke; margin-top: -10vh; background-color: #012a71; color: white;     height: fit-content; width: 37px; border-radius: 50%;  "
        icon="chevron_right" @click="next()">
      </q-btn>
    </div>

    <!-- <q-btn
      class=""
      style="  color: whitesmoke;  margin-top: -10%;   height: fit-content; width: 1vh; border-radius: 100px ; margin-left: 90vh;  "
      icon=""
      @click="scrolldown()"
    > -->
    <!-- <div style="border:solid ; margin-top: -5%; margin-left: 100vh; " @click="Downslide()" > -->
    <!-- <div class="chevron"></div>
  <div class="chevron"></div>
  <div class="chevron"></div> 
</div> -->
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
      // this.$refs.carousel.prev();
      this.slide = (this.slide - 1 + 5) % 5;
    },
    next() {
      this.$refs.carousel.next();
    },
    Downslide() {

      // window.scrollY
      window.scrollTo(0, 700);
    }
  },
  mounted() {
    //    


  }
};
</script>

<style lang="css" scoped>
.carousel {
  height: 85vh;
}

.carousel router-link img::-webkit-scrollbar {
  display: none;
}

.carousel::-webkit-scrollbar {
  display: none;
}



.custom-buttons {
  bottom: 0;
  left: 0;
  width: 100%;
}

.custom-button {
  color: white;
  font-size: 2vw;
  opacity: 0.8;
  transition: opacity 0.2s;
}

.custom-button:hover {
  opacity: 1;
}

.chevron {
  position: absolute;
  bottom: -10%;
  left: 0;
  width: 100%;
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



.caption-container {
  height: 100%;

  width: 100%;
  display: flex;
  flex-direction: column;
  position: relative;
  align-items: center;
  justify-content: center;
  gap: 0;
}

.carousel-title {
  align-items: center;
  text-align: center;
  font: 5vw/146px Impact;
  position: absolute;
  z-index: 1;

  line-height: 6vw;
  margin-bottom: 1%;
  letter-spacing: 0px;
  color: #FFFFFF;
  text-shadow: 0px 3px 6px #0000007D;
  justify-content: center;
  display: flex;
}

.titleDes {
  width: 100%;

  display: flex;
  align-items: center;
  justify-content: center;
}

.carousel-description {
  z-index: 1;
  height: fit-content;
  text-align: center;
  font: 500 1.8vw Nunito;
  /* here responsive font height must be set on responsive manner  */
  letter-spacing: 0px;
  justify-content: center;
  width: 90%;
  color: #FFFFFF;
  text-shadow: 0px 3px 6px #00000070;
}

.bgText {
  color: #FFFFFF;
  width: 100%;
  font: 8vw/146px Impact;

  line-height: 8vw;
}

.t1 {
  /* margin-right: 0 auto; */
  text-align: right;
  margin-bottom: 5%;
  opacity: 0.1;
}

.t2 {
  /* margin-right: 0 auto; */
  text-align: left;
  margin-top: 5%;
  opacity: 0.1;
}

.top-Fit {
  opacity: 0.2;
  top: 0;
  left: 6vh;
  width: 19.5vw;
  z-index: 0;

  position: absolute;
}

.bottom-Ft {
  opacity: 0.2;

  bottom: 0;
  right: 0;
  width: 41.5vh;
  z-index: 0;

  position: absolute;
}

@media (max-width: 960px) {

  .carousel {
    height: 50vh;
  }

  .carousel img {
    height: 70%;
  }

  .carousel-description {

    font: 1.8vw Nunito;
    width: 100%;
  }

  .top-Fit {
    opacity: 0.2;
    top: 0;
    left: 0;
    width: 27vw;
    z-index: 0;
    position: absolute;


  }

  .bottom-Ft {
    opacity: 0.2;
    bottom: 0;
    right: 0;
    overflow: hidden;
    width: 27vw;
    z-index: 0;
    position: absolute;
  }


}
</style>