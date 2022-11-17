<template>
<div class="mainContainer">

    <table >

        <div class="col-2 text-center col-md-6 col-xs-12 row product" v-for="item in listdef" v-bind:key="item.id">

            <router-link :to="'/'+item.name">

                <td id="tablecell" style="width: 100%;">
                    <img id="flames" class="col-sm-6 col-xs-12 self-center text-center " :src="item.product_image" alt="" style="width: 30rem;

  max-width: 99%;
  max-height: 99%;

                    margin-left: 7rem; margin-top: 7rem" />
                </td>

            </router-link>

            <div class="col-2 text-center col-md-6 col-xs-12" style="margin-top: 5rem">

                <td id="Ptag">
                    <h4 class="
              product-sub-heading
              text-indigo-6 text-weight-bold
              text-align-last:
              justify
            " style="
              font-family: Impact, Haettenschweiler, 'Arial Narrow Bold',
                sans-serif;

            ">
                        {{ item.name }}
                    </h4>
                    <p class="product-desc text-body2" style=" margin-left: 176px; text-align: left">
                        {{ item.desc }}
                    </p>
                </td>

            </div>

        </div>

    </table>
</div>
</template>


<script>
import {
    defineComponent,
    VueElement
} from "vue";
import axios from "axios";

export default defineComponent({
    name: "products",
    data() {
        return {
            listdef: [],
            listdef1: [],
            list1: [],
            list2: [],
            list3: [],
            responseData: [],
            UrlStringobject: []
        };
    },
    props: {
        img: {
            type: String,
        },
        name: {
            type: String,
        },
        prod_descr: {
            type: String,
        },
    },
    async mounted() {

        // let result = await axios.get(

        //     "https://uatapi.infinitybrains.com/public/api/show/8"
        // );
        // //console.warn(result.data.data);
        // this.list1 = result.data.data;

        // let result2 = await axios.get(
        //   "https://uatapi.infinitybrains.com/public/api/show/9"
        // );
        //#########################################################################################################################
        // this is information Is important to know about it
        // Axios url Element : resultfinal

        // Bind data Form Axios to :this.listdef
        //#########################################################################################################################
        //################################################################# This Axios Is Redirect All Data #######################

        let resultfinal = await axios.get("https://uatapi.infinitybrains.com/public/api/show");
        this.listdef = resultfinal.data.data;

        //################################################################# This Axios Is Redirect All Data #######################

        let resultfinal1 = await axios.get("https://uatapi.infinitybrains.com/public/api/show");
        //console.warn(result.data.data);
        this.listdef1 = resultfinal1.data.data;

        console.warn(this.listdef.data.id);
        this.$routes.push({
            name: "hrms"
        });

    },

});
</script>


<style scoped>
.mainContainer {

    grid-template-rows: 1fr 1fr 1fr;
    /* grid-template-rows: 10% 1fr 1fr 10%; */
}

row product1 {
    grid-row: 1/2;
}

row product2 {
    grid-row: 2/3;
}

row product3 {
    grid-row: 3/4;
}
table {
    border-spacing: 33px;
    min-width: 32%;
    border: 100%;
    margin-right: 15%;
    margin-left: 15%;

    /* table-layout: fixed; */
    /* margin-left: auto;
    margin-right: auto; */
}

@media only screen and (max-width: 4000px) {
  table {
    border: 100%;
    margin-right: 30%;
    margin-left: 25%;
    /* margin-right: %;
    margin-left: 15%; */

    /* table-layout: fixed; */
    /* margin-left: auto;
    margin-right: auto; */
}

}
/* #Ptag{
  width: fit-content;
} */
/* p{
  padding-left: 50%;
} */
@media only screen and (max-width: 3000px) {
  table {
    width: 49%;
    margin-left: 22%;
    margin-right: 30%;
    /* padding-right:1000% ; */
    /* margin-right: 0%;
    margin-left: 25%; */
    /* margin-right: %;
    margin-left: 15%; */

    /* table-layout: fixed; */
    /* margin-left: auto;
    margin-right: auto; */
}
}
@media only screen and (max-width: 2900px) {
  table {
    width: 54%;
    margin-left: 22%;
    margin-right: 30%;
    /* padding-right:1000% ; */
    /* margin-right: 0%;
    margin-left: 25%; */
    /* margin-right: %;
    margin-left: 15%; */

    /* table-layout: fixed; */
    /* margin-left: auto;
    margin-right: auto; */
}
}
@media only screen and (max-width: 2800px) {
  table {
    width: 54.5%;
    margin-left: 22%;
    margin-right: 30%;
    /* padding-right:1000% ; */
    /* margin-right: 0%;
    margin-left: 25%; */
    /* margin-right: %;
    margin-left: 15%; */

    /* table-layout: fixed; */
    /* margin-left: auto;
    margin-right: auto; */
}
}
@media only screen and (max-width: 2600px) {
  table {
    width: 47%;
    margin-left: 22%;
    margin-right: 30%;
    /* padding-right:1000% ; */
    /* margin-right: 0%;
    margin-left: 25%; */
    /* margin-right: %;
    margin-left: 15%; */

    /* table-layout: fixed; */
    /* margin-left: auto;
    margin-right: auto; */
}
}

@media only screen and (max-width: 2700px) {
  table {
    width: 60%;
    margin-left: 20%;
    margin-right: 30%;
    /* padding-right:1000% ; */
    /* margin-right: 0%;
    margin-left: 25%; */
    /* margin-right: %;
    margin-left: 15%; */

    /* table-layout: fixed; */
    /* margin-left: auto;
    margin-right: auto; */
}



}

@media only screen and (max-width: 2400px) {
  table {
    width: 61%;
    /* margin-left: 30%;
    margin-right: 0%; */
    /* padding-right:1000% ; */
    /* margin-right: 0%;
    margin-left: 25%; */
    /* margin-right: %;
    margin-left: 15%; */

    /* table-layout: fixed; */
    /* margin-left: auto;
    margin-right: auto; */
}
}
@media only screen and (max-width: 2300px) {
  table {
    width: 65%;
    /* margin-left: 30%;
    margin-right: 0%; */
    /* padding-right:1000% ; */
    /* margin-right: 0%;
    margin-left: 25%; */
    /* margin-right: %;
    margin-left: 15%; */

    /* table-layout: fixed; */
    /* margin-left: auto;
    margin-right: auto; */
}
}
@media only screen and (max-width: 2200px) {
  table {
    width: 69%;
    /* margin-left: 30%;
    margin-right: 0%; */
    /* padding-right:1000% ; */
    /* margin-right: 0%;
    margin-left: 25%; */
    /* margin-right: %;
    margin-left: 15%; */

    /* table-layout: fixed; */
    /* margin-left: auto;
    margin-right: auto; */
}
}
@media only screen and (max-width: 2100px) {
  table {
    width: 70%;
    /* margin-left: 30%;
    margin-right: 0%; */
    /* padding-right:1000% ; */
    /* margin-right: 0%;
    margin-left: 25%; */
    /* margin-right: %;
    margin-left: 15%; */

    /* table-layout: fixed; */
    /* margin-left: auto;
    margin-right: auto; */
}
}
@media only screen and (max-width: 2000px) {
  table {
    width: 79%;
    margin-left: 15%;
    margin-right: 30%;
    /* padding-right:1000% ; */
    /* margin-right: 0%;
    margin-left: 25%; */
    /* margin-right: %;
    margin-left: 15%; */

    /* table-layout: fixed; */
    /* margin-left: auto;
    margin-right: auto; */
}
}
@media only screen and (max-width: 1900px) {
  table {
    width: 99%;
    margin-left: -100%;
    margin-right: 400%;

    /* padding-right:1000% ; */
    /* margin-right: 0%;
    margin-left: 25%; */
    /* margin-right: %;
    margin-left: 15%; */

    /* table-layout: fixed; */
    /* margin-left: auto;
    margin-right: auto; */
}}
@media only screen and (max-width: 1870px) {
  table {
    width: 80%;
    margin-left: 14%;
    margin-right: 10%;

    /* padding-right:1000% ; */
    /* margin-right: 0%;
    margin-left: 25%; */
    /* margin-right: %;
    margin-left: 15%; */

    /* table-layout: fixed; */
    /* margin-left: auto;
    margin-right: auto; */
}}
@media only screen and (max-width: 1850px) {
  table {
    width: 80%;
    margin-left: 14%;
    margin-right: 10%;

    /* padding-right:1000% ; */
    /* margin-right: 0%;
    margin-left: 25%; */
    /* margin-right: %;
    margin-left: 15%; */

    /* table-layout: fixed; */
    /* margin-left: auto;
    margin-right: auto; */
}}


@media only screen and (max-width: 1800px) {
  table {
    width: 82%;
    margin-left: 14%;
    margin-right: 10%;

    /* padding-right:1000% ; */
    /* margin-right: 0%;
    margin-left: 25%; */
    /* margin-right: %;
    margin-left: 15%; */

    /* table-layout: fixed; */
    /* margin-left: auto;
    margin-right: auto; */
}}


@media only screen and (max-width: 1700px) {
  table {
    width: 86.5%;
    margin-left: 10%;
    /* margin-left: 30%;
    margin-right: 0%; */
    /* padding-right:1000% ; */
    /* margin-right: 0%;
    margin-left: 25%; */
    /* margin-right: %;
    margin-left: 15%; */

    /* table-layout: fixed; */
    /* margin-left: auto;
    margin-right: auto; */
}
}
@media only screen and (max-width: 1600px) {
  table {
    width:100%;
    margin-left: 0%;



    /* margin-left: 30%;
    margin-right: 0%; */
    /* padding-right:1000% ; */
    /* margin-right: 0%;
    margin-left: 25%; */
    /* margin-right: %;
    margin-left: 15%; */

    /* table-layout: fixed; */
    /* margin-left: auto;
    margin-right: auto; */
}
#flames{

  width: 4%;
}

}
@media only screen and (max-width: 1500px) {
  table {
    width:100%;
    margin-left: 0%;



    /* margin-left: 30%;
    margin-right: 0%; */
    /* padding-right:1000% ; */
    /* margin-right: 0%;
    margin-left: 25%; */
    /* margin-right: %;
    margin-left: 15%; */

    /* table-layout: fixed; */
    /* margin-left: auto;
    margin-right: auto; */
}
#flames{

  width: 4%;
}

}
@media only screen and (max-width: 1400px)
{
  table {
    width:90%;
    margin-left: 7%;
}
#tablecell{

width: 100%;
max-width: 480px;
height: auto;
}

}
@media only screen and (max-width: 1300px) {
  table {
    width:90%;
    margin-left: 10%;



    /* margin-left: 30%;
    margin-right: 0%; */
    /* padding-right:1000% ; */
    /* margin-right: 0%;
    margin-left: 25%; */
    /* margin-right: %;
    margin-left: 15%; */

    /* table-layout: fixed; */
    /* margin-left: auto;
    margin-right: auto; */
}
#flames{

  width: 4%;
}
#tablecell{

width: 100%;
max-width: 380px;
height: auto;
}

}

@media only screen and (max-width: 1200px) {
  table {
    width:90%;
    margin-left: 10%;



    /* margin-left: 30%;
    margin-right: 0%; */
    /* padding-right:1000% ; */
    /* margin-right: 0%;
    margin-left: 25%; */
    /* margin-right: %;
    margin-left: 15%; */

    /* table-layout: fixed; */
    /* margin-left: auto;
    margin-right: auto; */
}
  #tablecell{

    width: 100%;
  max-width: 380px;
  height: auto;
  }

}

@media only screen and (max-width: 1100px) {
  table {
    width:100%;
    margin-left: 0%;



    /* margin-left: 30%;
    margin-right: 0%; */
    /* padding-right:1000% ; */
    /* margin-right: 0%;
    margin-left: 25%; */
    /* margin-right: %;
    margin-left: 15%; */

    /* table-layout: fixed; */
    /* margin-left: auto;
    margin-right: auto; */
}
  #tablecell{

    width: 100%;
  max-width: 380px;
  height: auto;
  }

}
@media only screen and (max-width: 1000px) {
  table {
    width:100%;
    margin-left: 0%;



    /* margin-left: 30%;
    margin-right: 0%; */
    /* padding-right:1000% ; */
    /* margin-right: 0%;
    margin-left: 25%; */
    /* margin-right: %;
    margin-left: 15%; */

    /* table-layout: fixed; */
    /* margin-left: auto;
    margin-right: auto; */
}
  #tablecell{

    width: 100%;
  max-width: 280px;
  height: auto;
  }
  #ptag{
    width: 20%;
  }

}
@media only screen and (max-width: 600px) {
  table {
    margin-left: 0%;
    width:-100px;
    min-width: 100%;

    margin-right: 10000px;
  }
  #flames{
    width: fit-content;
    /* margin-right: 20%; */
    padding-right: 40%;
  }
}

@media only screen and (max-width: 400px) {
  table {
    margin-left: 0%;
    min-width: 100%;
    border-spacing: 0px;
  }
  p{
    width: fit-content;
  }
  image{
    width: fit-content;
    background-color: brown;

  }
}

/* table {
    border-spacing: 33px;
    width: 17em;
    /* table-layout: fixed; */
    /* margin-left: auto;
    margin-right: auto;
} */
/* table {
    border-spacing: 33px;
    width: 100%;
    table-layout: fixed;
    margin-left: auto;
    margin-right: auto;
}
th{
  display: block;
  width: 99em;
  align-content: center;
  margin-left: auto;
  margin-right: auto;
}
img{
  width: 100%;
  height: auto;
} */

</style>
