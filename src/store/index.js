// store/index.js
import { createStore } from 'vuex';

const store = createStore({
  state: {
    message: "Hello, From Vuex",
    backGroundColor:"transparent",
    imageSrc:`${window.location.origin}/img/Ib_logo.446e007b.png`,
    color1:'#012A71',
    userId:0,
    sgst:0,
    cgst:0,
    totalAmount:0,
    discount:0,
    couponCode:'',
    product:0,
    firstName:'',
    lastName:'',
    busName:'',
    busgstNumber:'',
    email:'',
    password:'',
    


   },
  mutations: {
    setMessage(state, newMessage) {
      state.message = newMessage;
    },
    setBackGroundColor(state, newColor) {
        state.backGroundColor = newColor;
      },
      setimageSrc(state, imageSrc) {
        state.imageSrc = imageSrc;
      },
      changeColor(state , color1){
        state.color1 = color1;
      },
      setUserId(state, userId) {
        state.userId = userId;
      },
      setSGST(state, sgst) {
        state.sgst = sgst;
      },
      setCGST(state, cgst) {
        state.cgst = cgst;
      },
      setTotalAmount(state, totalAmount) {
        state.totalAmount = totalAmount;
      },
      setDiscount(state, discount) {
        state.discount = discount;
      },
      setCouponCode(state, couponCode) {
        state.couponCode = couponCode;
      },
      setProduct(state, product) {
        state.product = product;
      }

      
  },
  actions: {},
  getters: {}
});

export default store;
