<template>
  <div>
    <Navbar :logo-src="logoSrc" :logo-redir="logoRedir" :logo-alt="logoAlt" :nav-items="navItems"></Navbar>
    <!-- <img src="./../../src/assets/img/logo_blue.png" alt="" srcset=""> -->
  </div>

  <!-- <Page /> -->
</template>

<script>
import Navbar from "./../Theme1/NavBar_10Min.vue";
// import Page from "./Page.vue";

export default {
  components: {
    Navbar,
    // Page
  },
  data() {
    return {
      logoSrc: "IB_logo_for_web.png",
      logoRedir: '/',
      logoAlt: "Company Logo",
      navItems: [
        { label: "Home", link: "/" },
        { label: "About", link: "/aboutus" },
        { label: "Services", link: "/Services" },
        { label: "Portfolio", link: "/portfolio" },
        { label: "Contact", link: "/contactus" },
      ],
      dropdownLabel: "Dropdown",
      dropdownItems: [
        { label: "Option 1", href: "#" },
        { label: "Option 2", href: "#" },
      ],
    };
  },
};
</script>
