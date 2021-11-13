<template>
    <div>
      <v-row justify="center">
          <v-col cols="8">
         <v-card width="500px" outlined tile>
         <v-img height="40vh" position="left" contain class="mt-4 ml-8" :src="dataResponse[$route.params.recipe].img"></v-img>
             <v-card-subtitle>
                <v-icon>mdi-timer-outline</v-icon>  {{dataResponse[$route.params.recipe].preparation_time}} - m | {{dataResponse[$route.params.recipe].difficulty}}
             </v-card-subtitle>
             <v-card-title class="styleOne">
                 {{dataResponse[$route.params.recipe].title.split("-").join(" ").toUpperCase()}}
             </v-card-title>
             <v-card-text class="styleTwo sizeAdjust">
                 {{dataResponse[$route.params.recipe].description}}
             </v-card-text>
         </v-card>
          </v-col> 
         <v-btn to="/recipes" text class="ma-4 styleOne">Go Back</v-btn>
      </v-row>
    <v-card flat>
        <v-card-title class="styleOne ml-8">SEE MORE RECIPES</v-card-title>
      <v-list
      v-for="(data,i) in dataResponse"
      :key="i"
      class="ml-6"
      >
        <v-list-item class="borderLine ml-6" @click="scrollOnClick">
            <router-link class="styleTwo"  :to="data.id">
            <v-list-item-avatar>
                <v-img :src="data.img"></v-img>
            </v-list-item-avatar>
            <v-list-item-content>
                <v-list-item-title class="styleTwo">
                    {{data.title.split("-").join(" ").toUpperCase()}}
                </v-list-item-title>
            </v-list-item-content>

            </router-link>
        </v-list-item>
      </v-list>

    </v-card>
    </div>
</template>

<script>
export default {
    name: "RecipesMoreInfo",
    props: ["dataResponse"],
    data() {
        return {
            // selectedRecipe: $route.params.recipe
        }
    },
    methods: {
        scrollOnClick:function() {
            window.scrollTo(0,0)
        } 

    },
    mounted() {
        this.scrollOnClick()
    }
}
</script>