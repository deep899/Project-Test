<template>
  <q-layout view="lHh Lpr lFf">
    <transition
      appear
      enter-active-class="animated animate__fadeInDown animate__slower 3s"
      leave-active-class="animated fadeOut"
    >
      <q-header>
        <!-- bg-#66b6d2 -->
        <!-- linear-gradient(to right, #008dba, #012a71) -->
        <q-toolbar id="toolbar" class="tooolbars" style="background-color: transparent; z-index: 50; margin-bottom: -100%; margin-top: 0%;">
          <q-toolbar-title>
            <a href="/" class="gt-xs">
              <q-img scoped
              id="my-image"
               class="BgImages"
                src="./../assets/img/Ib_logo.png"
                style="border: 250px;  width: 250px; height: 100%; margin-left: 50px ;margin-top: 0.5%;"
              ></q-img>
            </a>
          </q-toolbar-title>

          <div
            class="gt-xs links"
            v-for="(link, index) in essentialLinks"
            :key="index"
            v-ripple="{ color: 'yellow' }"
          >
            <router-link
              style="
              color: white; 
              /* color: #012A71;  */
              
              margin-top: 50%;"
              class="q-mr-lg primary text-h6 header-links links  text-weight-bold "
              v-bind:to="link.link"
              tag="button"
              >{{ link.title }}</router-link
            >
          </div>

          <div class="lt-sm">
            <q-btn
              flat
              dense
              round
              @click="leftDrawerOpen = !leftDrawerOpen"
              icon="menu"
              aria-label="menu"
            >
            </q-btn>
          </div>
        </q-toolbar>
      </q-header>
    </transition>

    <q-drawer v-model="leftDrawerOpen" bordered>
      <q-list>
        <q-item-label header> Menu </q-item-label>

        <EssentialLink
          v-for="link in essentialLinks"
          :key="link.title"
          v-bind="link"
        />
      </q-list>
    </q-drawer>

    <q-page-container>
      <router-view />
    </q-page-container>
  </q-layout>
</template>

<script>
import { defineComponent, ref } from "vue";
import EssentialLink from "components/EssentialLink.vue";

const linksList = [
  {
    title: "HOME",
    icon: "home",
    link: "/",
  },
  {
    title: "SERVICE",
    icon: "code",
    link: "Services",
  },
  {
    title: "PORTFOLIO",
    icon: "chat",
    link: "portfolio",
  },
  {
    title: "CAREER",
    icon: "record_voice_over",
    link: "career",
  },
  {
    title: "ABOUT",
    icon: "rss_feed",
    link: "aboutus",
  },
  {
    title: "CONTACT US",
    icon: "public",
    link: "contactus",
  },
];

export default defineComponent({
  name: "MainLayout",

  components: {
    EssentialLink,
  },

  setup() {
    const leftDrawerOpen = ref(false);

    return {
      essentialLinks: linksList,
      leftDrawerOpen,
      toggleLeftDrawer() {
        leftDrawerOpen.value = !leftDrawerOpen.value;
      },
    };
  },
 mounted() {
  const img = document.querySelector('#my-image');

window.addEventListener('scroll', () => {
  const threshold = 200; // Change this value to adjust when the image changes

  if (window.scrollY > threshold) {
    img.src = './../assets/img/new_image.png';
  } else {
    img.src = './../assets/img/Ib_logo.png';
  }
});


  var toolbar = document.querySelector('.tooolbars');
  document.querySelectorAll('.links > a');
  var links = document.querySelectorAll('.links > a');
  window.addEventListener('scroll', function() {
    // Get the current scroll position
    var scrollPosition = window.pageYOffset;

    // Check if the user is at the top of the page
    if (scrollPosition === 0) {
      toolbar.style.backgroundColor = "transparent";
      toolbar.style.marginTop = 0;
      links.forEach(link => {
        link.style.color = 'white';
      });
    }

    // Check if the user has scrolled down from the top
    if (scrollPosition > 0) {
      toolbar.style.backgroundColor = "white";
      toolbar.style.marginTop = 0;
      toolbar.style.color= "#012A71";
      links.forEach(link => {
        link.style.color = '#012A71';
      });
    }
  });


  // var toolbar = document.querySelector('.tooolbars');
  // var links = document.querySelector('.links');
  // window.addEventListener('scroll', function() {
  //   // Get the current scroll position
  //   var scrollPosition = window.pageYOffset;

  //   // Check if the user is at the top of the page
  //   if (scrollPosition === 0) {
  //     toolbar.style.backgroundColor = "transparent";
      
     
  //     toolbar.style.marginTop = 0;
     
      
  //   }

  //   // Check if the user has scrolled down from the top
  //   if (scrollPosition > 0) {
  //     toolbar.style.backgroundColor = "white";
  //     toolbar.style.marginTop = 0;
  //     toolbar.style.color= "blue";
  //   }
  // });
}

});



</script>
