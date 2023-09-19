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
        <q-toolbar id="toolbar" class="tooolbars" style=" z-index: 50; margin-bottom: -100%; margin-top: 0%;">
          <q-toolbar-title>
            <a href="/" class="gt-xs">
              <img scoped
              id="my-image"
               class="BgImages"
                src="./../assets/img/Ib_logo.png"
                alt="./../../src/assets/img/logo_blue.png"
                style=" width: 11vw; margin-left: 50px ;margin-top: 1%; margin-bottom: 0%;"
              />
              <img scoped
              id="my-image"
               class="BgImages"
               
                src="./../../src/assets/img/logo_blue.png"
                alt=""
                style="display: none; width: 11vw; margin-left: 50px ;margin-top: 1%; margin-bottom: 0%;"
              />
            </a>
          </q-toolbar-title>

          <div class="gt-xs links" v-for="(link, index) in essentialLinks" :key="index" v-ripple="{ color: 'yellow' }">
  <router-link
    class="q-mr-lg primary text-h11 header-links text-weight-bold"
    :style="{ color: (scrollPosition === 0 ? (hoverIndex === index ? 'red' : '#012A71') : '#012A71') }"
  
    v-bind:to="link.link"
    tag="button"
    active-class="router-link-active"
    @mouseover="hoverIndex = index"
    @mouseout="hoverIndex = null"
   
  >
    {{ link.title }}
  </router-link>
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
import { useStore } from 'vuex';
import { computed } from 'vue'; 

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
  // {
  //   title: "CAREER",
  //   icon: "record_voice_over",
  //   link: "career",
  // },
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
  data() {
  return {
    hoverIndex: null,
    scrollPosition: 0,

  };
},


watch: {
  scrollPosition(newPosition) {
    // Update the link color whenever the scroll position changes
    this.$nextTick(() => {
      this.hoverIndex = null;
    });
  },
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
  beforeUnmount() {
    window.removeEventListener('scroll', this.handleScroll);
  },computed: {
    linkColor() {
      const store = useStore();
      return store.state.color1;
    },
    handleScroll() {
      const store = useStore();
      const img = document.querySelector('#my-image');
      const toolbar = document.querySelector('.toolbars'); // Fixed typo
      const links = document.querySelectorAll('.links > a');

      return () => {
        const scrollPosition = window.pageYOffset;
        
        if (window.innerWidth > 940) {
          if (scrollPosition === 0) {
            toolbar.style.backgroundColor = store.state.backGroundColor;
            img.src = store.state.imageSrc; // Original logo image
            toolbar.style.boxShadow = 'none';
            links.forEach(link => {
                    link.style.color = store.state.color1;
                  });
          } else {
            toolbar.style.backgroundColor = 'white';
            toolbar.style.boxShadow = '0px 3px 6px #2F508A';
            img.src = `${window.location.origin}/img/logo_blue.ca47717c.png`; // New logo image
            toolbar.style.color = '#012A71';
            links.forEach(link => {
              link.style.color = '#012A71';
            });
          }
        } else {
          toolbar.style.backgroundColor = 'white';
          toolbar.style.boxShadow = '0px 3px 6px #2F508A';
          img.src = `${window.location.origin}/img/logo_blue.ca47717c.png`; // New logo image
          toolbar.style.color = '#012A71';
          links.forEach(link => {
            link.style.color = '#012A71';
          });
        }
      };
    },
  },

  mounted() {
        
    const store = useStore();
    const img = document.querySelector('#my-image');
    const toolbar = document.querySelector('.tooolbars'); // Typo: should be '.toolbars'
    const links = document.querySelectorAll('.links > a');
    links.forEach(link => {
            link.style.color = "white";
          });
    const handleScroll = () => {
      const scrollPosition = window.pageYOffset;
      const threshold = 200; // Change this value to adjust when the image changes

      if (window.innerWidth > 940) {
        if (scrollPosition === 0) {
          // store.commit('setBackGroundColor', 'transparent');
          toolbar.style.backgroundColor = store.state.backGroundColor;
          // store.commit('setimageSrc', `${window.location.origin}/img/Ib_logo.446e007b.png`);
          img.src = store.state.imageSrc; // Original logo image
          toolbar.style.boxShadow = 'none';
          links.forEach(link => {
            link.style.color = store.state.color1;
          });
        } else {
          toolbar.style.backgroundColor = 'white';
          toolbar.style.boxShadow = '0px 3px 6px #2F508A';
          img.src = `${window.location.origin}/img/logo_blue.ca47717c.png`; // New logo image
          toolbar.style.color = '#012A71';
          links.forEach(link => {
            link.style.color = '#012A71';
          });
        }
      } else {
        toolbar.style.backgroundColor = 'white';
        toolbar.style.boxShadow = '0px 3px 6px #2F508A';
        img.src = `${window.location.origin}/img/logo_blue.ca47717c.png`; // New logo image
        toolbar.style.color = '#012A71';
        links.forEach(link => {
          link.style.color = '#012A71';
        });
      }
    };

    window.addEventListener('scroll', handleScroll);



    
  }
});



</script>
<style scoped>
</style>