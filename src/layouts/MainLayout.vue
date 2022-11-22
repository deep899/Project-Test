/* eslint-disable */
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
        <q-toolbar class="" style="background: white">
          <q-toolbar-title>
            <a href="/" class="gt-xs">
              <q-img scoped
                src="~/src/img/IB_logo_for_web.png"
                style="border: 250px;  width: 250px; height: 100%; margin-left: 50px"
              ></q-img>
            </a>
          </q-toolbar-title>

          <div
            class="gt-xs"
            v-for="(link, index) in essentialLinks"
            :key="index"
            v-ripple="{ color: 'yellow' }"
          >
            <router-link
              style="color: #012a71"
              class="q-mr-lg primary text-h6 header-links text-weight-bold"
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
});
</script>
