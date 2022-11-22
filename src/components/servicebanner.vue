<template>
  <div class="service_section row items-center mine">
    <div class="col-12 vertical-middle items-center justify-content-center">
      <h3
        class="text-white text-center"
        style="
          margin-bottom: 24px;
          font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        "
      >
        {{ Title }}
      </h3>
      <p class="text-white text-center text-h5">
        {{ text1 }}
        <br />
        {{ text2 }}
      </p>
    </div>
  </div>
</template>

<script>
export default {
  name: "servicebanner",
  setup() {
    return {
      Title: "SERVICES",
      text1: "We deliver Digital marketing, SEO, Content writing, PHP(Laravel)",
      text2:
        " Mobile app, Hybrid Development service,Graphic Design services, etc.",
    };
  },
};
</script>
<style>
.service_section {
  background: url("~/src/img/banner_background.jpg");
  background-repeat: no-repeat;
  background-size: 100% 80%;
  background-position: center;
  object-fit: cover;

  height: 100vh;
}

@media only screen and (max-width: 600px) {
  .service_section {
    background: url("~/src/img/banner_background.jpg");
    background-repeat: no-repeat;
    background-size: 100% 80%;
    background-position: center;
    background-attachment: fixed;
    object-fit: cover;

    height: 100vh;
  }
}

@media only screen and (max-width: 768px) {
  .service_section {
    background: url("~/src/img/banner_background.jpg");
    background-repeat: no-repeat;
    background-size: 100% 80%;
    background-position: center;
    background-attachment: fixed;
    object-fit: cover;

    height: 100vh;
  }
}
@media only screen and (max-width: 90vh) {
  .service_section {
    background: url("~/src/img/banner_background.jpg");
    background-repeat: no-repeat;
    background-size: 100% 80%;
    background-position: center;
    background-attachment: fixed;
    object-fit: cover;

    height: 100vh;
  }
}

@media only screen and (max-width: 320px) {
  .service_section {
    background: url("~/src/img/banner_background.jpg");
    background-repeat: no-repeat;
    background-size: 100% 80%;
    background-position: center;
    background-attachment: fixed;
    object-fit: cover;

    height: 100vh;
  }
}
</style>
