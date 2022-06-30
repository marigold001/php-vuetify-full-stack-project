<template>
  <div>
    <v-row>
      <v-col>
        <v-card outlined tile>
          <v-img
            class="mt-4 ml-8"
            max-width="30%"
            :src="dataResponse[$route.params.recipe].img"
          ></v-img>
          <v-card-subtitle>
            <v-icon>mdi-timer-outline</v-icon>
            {{ dataResponse[$route.params.recipe].preparation_time }} - m |
            {{ dataResponse[$route.params.recipe].difficulty }}
          </v-card-subtitle>
          <v-card-title class="styleOne">
            {{
              dataResponse[$route.params.recipe].title
                .split("-")
                .join(" ")
                .toUpperCase()
            }}
          </v-card-title>
          <v-card-text class="styleTwo sizeAdjust">
            {{ dataResponse[$route.params.recipe].description }}
          </v-card-text>
            <v-card-title>
                Ingredients:
            </v-card-title> 
          <v-card-text>
            {{dataResponse[$route.params.recipe].ingredients}}
          </v-card-text>
        </v-card>
      </v-col>
     
      <v-btn to="/recipes" text class="ma-4 styleOne">Go Back</v-btn>
    </v-row>
    <v-row>
        <v-card-title class="styleOne ml-8">SEE MORE RECIPES</v-card-title>
        <v-card flat style="display: grid; grid-template-columns: 1fr 1fr 1fr;">
          <v-list v-for="(data, i) in dataResponse" :key="i" class="ml-6">
          <v-col cols="1">
              <v-list-item class="borderLine ml-6">
                <router-link
                  class="styleTwo"
                  :to="'/recipes/' + data.id"
                  @click.prevent="scrollOnClick"
                >
                  <v-list-item-avatar>
                    <v-img :src="data.img"></v-img>
                  </v-list-item-avatar>
                  <v-list-item-content>
                    <v-list-item-title class="styleTwo">
                      {{
                        data.title
                          .split("-")
                          .join(" ")
                          .toUpperCase()
                      }}
                    </v-list-item-title>
                  </v-list-item-content>
                </router-link>
              </v-list-item>
          </v-col>
          </v-list>
        </v-card>
    </v-row>
  </div>
</template>

<script>
export default {
  name: "RecipesMoreInfo",
  props: ["dataResponse"],
  data() {
    return {
      // selectedRecipe: $route.params.recipe
    };
  },
  methods: {
    scrollOnClick: function() {
      window.scrollTo(0, 0);
      console.log();
    },
  },
  mounted() {
    this.scrollOnClick();
  },
};
</script>
