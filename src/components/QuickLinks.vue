<template>
  <div class="text-center q-pa-md col-md-3 col-xs-12">
    <h5 class="text-red">Quick Links</h5>
    <div class="row">
      <div
        class="
          col-md-5 col-xs-10
          text-center
          align-items-cente
          justify-content-center
          q-mx-xl
        "
      >
        <div class="text-center">
          <router-link to="/">
            <q-btn flat rounded color="white" class="q-mr-5" label="Home" />
          </router-link>

          <router-link to="/Services">
            <q-btn flat rounded color="white" class="q-mr-5" label="Services" />
          </router-link>

          <router-link to="/contactus">
            <q-btn
              flat
              rounded
              color="white"
              class="q-mr-5"
              label="Portfolio"
            />
          </router-link>

          <router-link to="/aboutus">
            <q-btn flat rounded color="white" class="q-mr-5" label="Career" />
          </router-link>

          <router-link to="/portfolio">
            <q-btn flat rounded color="white" class="q-mr-5" label="About" />
          </router-link>

          <router-link to="/career">
            <q-btn flat rounded color="white" class="q-mr-5" label="Contact" />
          </router-link>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "quicklink",
};
</script>
