<template>
    <component :is="themeComponent" />
  </template>
  
  <script>
  import axios from '../axios';
  
  export default {
    data() {
      return {
        themeComponent: null,
      };
    },
    mounted() {
      const subdomain = window.location.hostname.split('.');
      axios.get('Searching?domain_name=' + subdomain[0]).then((res) => {
        const themeName = res.data.Subcategory.sub_category_details.sub_category_name;
        const themeModule = import(`./../../src/Theme2/${themeName}.vue`);
  
        themeModule.then((module) => {
          this.themeComponent = module.default;
        });
      });
    },
  };
  </script>
  