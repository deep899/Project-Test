<template>
  <div class="q-pa-md col-md-2 col-xs-12">
    <h5 class="text-red" style="text-align: left; margin-left: 5.5%;">QUICK LINKS</h5>

    <div class="" style="width: 100%;   text-align: left;">
  <router-link to="/">
    <q-btn flat rounded color="white" style="font-size: 0.83rem;" class="q-mr-5" label="Home" />
  </router-link>
</div>

<div class="" style="width: 100%;   text-align: left; display: inline-block;">
  <router-link to="/Services">
    <q-btn flat rounded color="white" style="font-size: 0.83rem;" class="q-mr-5" label="Service" />
  </router-link>
</div>

<div class="" style="width: 100%;   text-align: left; display: inline-block;">
  <router-link to="/portfolio">
    <q-btn flat rounded color="white" style="font-size: 0.83rem;" class="q-mr-5" label="Portfolio" />
  </router-link>
</div>

<div class="" style="width: 100%;   text-align: left; display: inline-block;">
  <router-link to="/career">
    <q-btn flat rounded color="white" style="font-size: 0.83rem;" class="q-mr-5" label="Career" />
  </router-link>
</div>

<div class="" style="width: 100%;   text-align: left; display: inline-block;">
  <router-link to="/aboutus">
    <q-btn flat rounded color="white" style="font-size: 0.83rem;" class="q-mr-5" label="About" />
  </router-link>
</div>

<div class="" style="width: 100%;   text-align: left; display: inline-block;">
  <router-link to="/contactus">
    <q-btn flat rounded color="white" style="font-size: 0.83rem;" class="q-mr-5" label="Contact" />
  </router-link>
</div>

  </div>
</template>

<script>
export default {
  name: "ExpertService",
};
</script>

<style scoped>
.text-red {
  text-align: left;
  font-size: 22px;
  font-weight: bold;
  color: #E86D6D;
  font: normal normal normal 22px/27px Impact;
  margin-bottom: 10px;
  letter-spacing: 0px;
}
</style>
