<template>
  <div>
    <!-- Your HTML markup here, if needed -->
    <router-view />
  </div>
</template>

<script>
// import axios from 'axios';
// Uncomment this line if you are using Bootstrap styles
// import './css/bootstrap.min.css';
// import store from './store/index'

import { defineComponent } from 'vue'

export default defineComponent({
  name: 'App',
  // store
})

</script>
<style scoped>
.q-layout {
  position: inherit;
}

/* Set background color for all elements inside the component */
* {
  background-color: #ffffff;
}
</style>
