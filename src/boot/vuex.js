// src/boot/vuex.js
import { boot } from 'quasar/wrappers';
import store from 'src/store'; // Path to your Vuex store file

export default boot(({ app }) => {
  app.use(store);
});
