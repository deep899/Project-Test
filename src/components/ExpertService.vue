<template>
  <div class="q-pa-md col-md-2 col-xs-12">
    <h5 class="text-red" style="text-align: left; margin-left: 5.5%;">Expert Service</h5>

    <div class="" style="width: 100%;   text-align: left;">
      <div class="q-xs-d-block q-sm-d-inline-block q-md-d-inline-block" style="width: 100%;   text-align: left;">
        <router-link to="/Services">
          <q-btn flat rounded color="white" class="q-mr-5 q-xs-font-size-10 q-sm-font-size-12 q-md-font-size-14" label="Digital Marketing" />
        </router-link>
      </div>
      
      <div class="q-xs-d-block q-sm-d-inline-block q-md-d-inline-block" style="width: 100%;   text-align: left;">
        <router-link to="/Services">
          <q-btn flat rounded color="white" class="q-mr-5 q-xs-font-size-10 q-sm-font-size-12 q-md-font-size-14" label="Content Marketing" />
        </router-link>
      </div>

      <router-link to="/Services">
        <q-btn flat rounded color="white" class="q-mr-5 q-xs-font-size-10 q-sm-font-size-12 q-md-font-size-14" label="SEO" />
      </router-link>
    </div>

    <div class="q-xs-d-block q-sm-d-inline-block q-md-d-inline-block" style="width: 100%;   text-align: left;">
      <router-link to="/Services">
        <q-btn flat rounded color="white" class="q-mr-5 q-xs-font-size-10 q-sm-font-size-12 q-md-font-size-14" label="Website Development" />
      </router-link>
    </div>

    <div class="q-xs-d-block q-sm-d-inline-block q-md-d-inline-block" style="width: 100%;   text-align: left;">
      <router-link to="/Services">
        <q-btn flat rounded color="white" class="q-mr-5 q-xs-font-size-10 q-sm-font-size-12 q-md-font-size-14" label="Mobile Development" />
      </router-link>
    </div>

    <div class="q-xs-d-block q-sm-d-inline-block q-md-d-inline-block" style="width: 100%;   text-align: left;">
      <router-link to="/Services">
        <q-btn flat rounded color="white" class="q-mr-5 q-xs-font-size-10 q-sm-font-size-12 q-md-font-size-14" label="Hybrid Development" />
      </router-link>
    </div>

    <div class="q-xs-d-block q-sm-d-inline-block q-md-d-inline-block" style="width: 100%;   text-align: left;">
      <router-link to="/Services">
        <q-btn flat rounded color="white" class="q-mr-5 q-xs-font-size-10 q-sm-font-size-12 q-md-font-size-14" label="Graphics/UI/UX Design" />
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

.q-btn {
  font-size: 0.83rem;
}

@media screen and (max-width:1900px) {
  .text-red {
    font-size: 18px;
  }

  .q-btn {
    font-size: 0.75rem;
  }
}
</style>

