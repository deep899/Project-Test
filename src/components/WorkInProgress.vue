<template>
  <img  class="imag34" src="./../../src/assets/BackGround/pgb5.png" style=" 
   
     " alt="">
     <img class="main34" src="./../../src/assets/BackGround/lastpgb.png" style="position: absolute; 
    left: 0;
   margin-top: -5%;
    width: 10%;
   " alt="">
  <div class="row justify-around">
    <div
      class=" scam65  justify-around col-md-6 col-xs-12"
      style="
      
    
      "
    >
      <img src="~/src/img/work_in_progess.png" style="width: 100%" />
    </div>
  </div>
</template>

<script>
export default {
  name: "workInprogress",
};
</script>
<style scoped>

.imag34{
  position: absolute;
  right: 0px;
   margin-top: 10%;
    width: 48%;
    height: 51vh; 
   
}
.scam65{
  margin-top: 150px;
    margin-bottom: 150px;
    width: 76%;
  }
@media (max-width: 940px) {

  .imag34{

      display: none;
  }
  .scam65{
    margin-top: 0px;
    width: 100%;
    margin-bottom: 0px;
  }

}
</style>