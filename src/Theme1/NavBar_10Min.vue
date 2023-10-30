<template>
  <div>
    <nav class="navbar" :class="{ 'sticky': isSticky }" ref="navbar">
      <div class="navbar-logo">
        <a href="/">
          <img :src="require(`./../../src/Theme1/10_Min_assets/img/${logoSrc}`)" :alt="logoAlt" />
        </a>
      </div>
      <div class="navbar-buttons" :class="{ active: isNavbarActive }">
        <ul>
          <li v-for="(item, index) in navItems" :key="index">
            <router-link :to="item.link" :class="{ 'sticky-button': isSticky }" class="header-link">{{ item.label
            }}</router-link>
          </li>
        </ul>
      </div>
      <button class="navbar-toggler" @click="toggleNavbar">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <!-- Side Navbar (hidden by default) -->
      <div class="side-navbar de-navbar" :class="{ 'active': isNavbarActive }">
        <button class="close-button" @click="closeNavbar">Menu</button>
        <ul>
          <li v-for="(item, index) in sideNavItems" :key="index">
            <router-link :to="item.link" class="side-link">
              <div class="nav-icons">
                <i :class="item.iconClass" style="display: contents;"></i>
              </div>
              {{ item.label }}
            </router-link>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</template>

<script>
export default {
  props: {
    logoSrc: String,
    logoAlt: String,
    navItems: Array,
  },
  data() {
    return {
      isNavbarActive: false,
      isSticky: false,
      sideNavItems: [
        { label: 'Home', link: '/', iconClass: 'fa fa-home' },
        { label: 'About', link: '/about', iconClass: 'fa fa-info-circle' },
        { label: 'Services', link: '/services', iconClass: 'fa fa-cogs' },
        { label: 'Portfolio', link: '/portfolio', iconClass: 'fa fa-briefcase' },
        { label: 'Contact', link: '/contact', iconClass: 'fa fa-envelope' },
      ],
    };
  },
  methods: {
    toggleNavbar() {
      this.isNavbarActive = !this.isNavbarActive;
    },
    closeNavbar() {
      this.isNavbarActive = false;
    },
    handleScroll() {
      // Determine if the user has scrolled down
      this.isSticky = window.scrollY > this.$refs.navbar.offsetHeight;
    },
  },
  mounted() {
    // Listen to the scroll event and call handleScroll
    window.addEventListener('scroll', this.handleScroll);
  },
  beforeUnmount() {
    // Remove the scroll event listener when the component is unmounted
    window.removeEventListener('scroll', this.handleScroll);
  },
};
</script>

<style scoped>
/* Basic styles for the navbar */
.navbar {
  background-color: transparent;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 20px;
  position: fixed;
  z-index: 1;
  width: 100%;
  transition: background-color 0.3s ease-in-out;
}

.sticky {
  background-color: white;
  /* Add the background color when sticky */
  box-shadow: 0px 2px 4px rgba(192, 190, 190, 0.1);
  /* Optional shadow effect */
}

/* Style for sticky buttons and all buttons */
.sticky-button {
  color: rgb(1, 42, 113) !important;
  /* Set the text color for buttons when sticky */
}

.navbar-logo img {
  max-width: 193px;
  /* Adjust the logo size as needed */
}

.navbar-buttons ul {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
}

.navbar-buttons li {
  margin-right: 20px;
}

.navbar-buttons a {
  color: whitesmoke;
  text-decoration: none;
  font-weight: 700;
  font-family: 'Oxygen', sans-serif;
  font-size: 1.125rem;
}

.navbar-toggler {
  background: none;
  border: none;
  cursor: pointer;
  padding: 0;
}

.navbar-toggler span {
  background-color: #fff;
  height: 3px;
  width: 24px;
  display: block;
  margin: 2px 0;
  transition: transform 0.3s ease-in-out;
}

@media (min-width: 769px) {
  .navbar-toggler {
    display: none;
  }
}

/* Styles for the side navbar */
.side-navbar {
  display: none;

}

.close-button {
  text-decoration: none;
  background: none;
  border: none;
  font-weight: 700;
  font-family: 'Oxygen', sans-serif;
  font-size: 1.125rem;
  top: 0;
  text-align: end;
  left: -6px;
  margin-left: 17px;
  position: relative;
}

.side-navbar.active {
  left: 0;
  /* Show the side navbar on screen */
}

.side-navbar ul {
  list-style: none;
  padding: 0;
  margin: 20px;
}

.side-navbar li {
  margin-bottom: 43px;
}

.side-link {
  color: black;
  text-decoration: none;
  font-weight: 700;
  font-family: 'Oxygen', sans-serif;
  font-size: 1.125rem;
  padding: 0 2.125rem;
}

.nav-icons {
  position: absolute;
  left: 1.125rem;
}

@media (max-width: 768px) {

  /* Hide sticky styles on screens less than 768px */
  .navbar.sticky {
    background-color: transparent;
    box-shadow: none;
  }

  .navbar.sticky .navbar-buttons a.sticky-button {
    color: whitesmoke !important;
  }

  .navbar.sticky .navbar-toggler span {
    background-color: #fff;
  }

  .side-navbar {
    display: flex;
    flex-direction: column;
    height: 100%;
    width: 250px;
    position: inherit;
    right: 0;
    top: 0;
    left: -250px;
    border: none;
    z-index: 1;
    transform: scaleY(0);
    transform-origin: top;
    background-color: white;
    overflow-y: auto;
    transition: left 0.3s ease-in-out;
  }

  .side-navbar.active {
    transform: scaleY(1);
  }

  .side-navbar ul {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-end;
    /* Change to a column layout */
  }

  .side-link li {
    margin-right: 0;
    margin-bottom: 10px;
    /* Add spacing between items */
  }

  .navbar-toggler {
    display: block;
  }

  .navbar-logo {
    display: none;
  }

  .navbar {
    direction: rtl;
  }

  .navbar-buttons {
    display: none;
  }
}
</style>
