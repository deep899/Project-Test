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
        class="text-indigo-10 text-center text-center sm-q-gutter-x-md"
        style="background-color: #fcfcfc; padding: 12px; font-family: impact"
      >
        SERVICE OF COMPANY
      </h3>
      <p
        class="text-center para-section text-body1"
        style="padding-left: 150px; padding-right: 150px"
      >
        We provide websites, mobile apps, hybrid apps, digital marketing, SEO,
        and so on. The facilities serve global companies with 100% satisfaction
        and numerical evolution. Our proficient staff has up-todate expertise in
        technology and all possible areas; we update our system regularly. Your
        digital business path with us would be the perfect one. We look forward
        to participating in your evolving business journey. We believe in
        establishing and maintaining longterm relationships with our clients.
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
