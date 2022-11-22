<!-- # Infinity_Brains (infinity-brains)

A Quasar Project

## Install the dependencies
```bash
yarn
# or
npm install
```

### Start the app in development mode (hot-code reloading, error reporting, etc.)
```bash
quasar dev
```


### Lint the files
```bash
yarn lint
# or
npm run lint
```



### Build the app for production
```bash
quasar build
```

### Customize the configuration
See [Configuring quasar.config.js](https://v2.quasar.dev/quasar-cli-webpack/quasar-config-js).

<!-- ///////////////////////////////////////////////////////////
thi page for deleting product code

 <!-- =============================================product1============================================ -->
   <!--- <div class="row product">

    --  <table class="table" style="text-align: center;" border="2px" >

               <tr>
                <th>product_name</th>

            </tr>
            <tr v-for="item in listdef" v-bind:key="item.id">

                <th>{{item.name}}</th>

                <router-link to="/IBsalesforce">

                    <img class="col-sm-6 col-xs-12 self-center text-center" :src="item.product_image" alt="" style="width: 35rem; margin-left: 7rem; margin-top: 7rem" />

                </router-link>

            </tr>

            <tr v-for="item in listdef1" v-bind:key="item.id">

                <td v-if="item.id > 2 ">

                    hello

                </td>

                <td v-else>

                    not hello

                </td>

            </tr> -->
<!--
            <!-- <th

                class="
            product-sub-heading
            text-indigo-6 text-weight-bold
            text-align-last:
            justify"
                  >

                        hello

                </th>
####################################################################################################################################



            <tr v-for="item in listdef" v-bind:key="item.id" style="text-align:center ;">

                <th style="text-align:center ;">{{item.name}}

                    <td style="text-align:center ;">
                  {{item.desc}}
                </td>

                </th>

                <th style="text-align: center;">

                  <router-link to="/IBsalesforce">

                    <img :src="item.product_image" alt="" style="width: 35rem; margin-left: 7rem; margin-top: 7rem ; margin-bottom: 7rem" />

                  </router-link>

                  </th>
            </tr>

        </table>s
         <!-- <div   v-for="item in listdef" v-bind:key="item.id" class="col-2 text-center col-md-6 col-xs-12" style="margin-top: 5rem">
            <h4
            class="
            product-sub-heading
            text-indigo-6 text-weight-bold
            text-align-last:
            justify
          ">
                {{ item.name }}
            </h4>
            <p class="product-desc text-body2" style="width: 60%; margin-left: 176px; text-align: left">
                {{ item.desc }}
            </p>

        <router-link to="/IBsalesforce">
            <img class="col-sm-6 col-xs-12 self-center text-center" :src="item.product_image" alt="" style="width: 35rem; margin-left: 7rem; margin-top: 7rem" /></router-link>
          </div>

    </div>

    <!-- =============================================product2============================================ -->
