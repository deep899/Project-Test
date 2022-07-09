<template>
  <div
    class="
      servicecompanyabout
      row
      justify-around
      para-section
      text-center
      center
    "
    style="padding-top: 0px"
  >
    <div class="col-md-12 col-sm-10">
      <h3
        class="
          text-indigo-10 text-center text-weight-bold text-center
          sm-q-gutter-x-md
        "
      >
        SERVICE OF COMPANY
      </h3>
      <p
        class="text-center para-section text-body1"
        style="padding-left: 150px; padding-right: 150px"
      >
        Deserunt dolor Lorem reprehenderit excepteur id consequat mollit laboris
        ex elit mollit dolor. Ad nisi voluptate incididunt voluptate dolore
        exercitation commodo consequat excepteur aute exercitation in
        exercitation incididunt. Aute nulla ex qui proident sunt amet eiusmod
        occaecat voluptate nulla eiusmod mollit. Deserunt dolor Lorem
        reprehenderit excepteur id consequat mollit laboris ex elit mollit
        dolor. Ad nisi voluptate incididunt voluptate dolore exercitation
        commodo consequat excepteur aute exercitation in exercitation
        incididunt. Aute nulla ex qui proident sunt amet eiusmod occaecat
        voluptate nulla eiusmod mollit. Deserunt dolor Lorem reprehenderit
        excepteur id consequat mollit laboris ex elit mollit dolor. Ad nisi
        voluptate incididunt voluptate dolore exercitation commodo consequat
        excepteur aute exercitation in exercitation incididunt. Aute nulla ex
        qui proident sunt amet eiusmod occaecat voluptate nulla eiusmod mollit.
      </p>
    </div>
  </div>
</template>

<script>
export default {
  name: "serviceofcompanyabout",
};
</script>

<style>
* {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}
@media only screen and (max-width: 768px) {
  .para-section {
    font-size: 13px;
  }
  h2 {
    font-size: 18px;
  }
}
@media only screen and (max-width: 500px) {
  .para-section {
    text-align: center;
    width: 80vw;
    font-size: 13px;
  }
  h2 {
    font-size: 18px;
  }
  .center {
    margin: auto;
    width: 50%;

    padding: 10px;
  }
}

@media only screen and (max-width: 320px) {
  .para-section {
    font-size: 10px;
  }
  .center {
    margin: auto;
    width: 50%;
    padding: 10px;
  }
}
</style>
