import axios from "axios";
// axios.defaults.baseURL = "https://api.infinitybrains.com/public/api/";
axios.defaults.baseURL = "https://uatapi.infinitybrains.com/public/api/";
axios.defaults.headers.common["Authorization"] =
   " Bearer " + localStorage.getItem("token");
export default axios;
