<template>
  <div>
    <v-row>
      <v-col md="5" cols="12" class="text-center">
        <v-card tile flat >
          <v-card-title class="ml-4 font_f_title font_size_xs justify-center">Classic Gravy</v-card-title>
          <p class="styleOne">Eat well, feel well, that is the policy here. We will display
            recipes that are healthy, period. We like the feeling the food we
            eat gives us so we appreciate healthy food even more than for how much tasty
            it is and good for your body.</p>
        </v-card>
      </v-col>
      <v-col md="7" cols="12">
        <v-card tile flat>
          <v-img height="400px" :src="mainArticle.img" class="mx-14">
            <v-card-title style="word-break:break-word;" class="ml-5 mt-4 fadedBackground"
              >{{ mainArticle.title }}
              <v-btn to="/posts" class="my-2 ml-sm-4">SEE MORE POSTS</v-btn>
            </v-card-title>
          </v-img>
        </v-card>
      </v-col>
    </v-row>

    <v-row justify="center">
      <v-col class="text-center" cols="12">
        <div class="styleOne titleStyling">Tested Recipes</div>
      </v-col>
    </v-row>
    <v-row>
      <v-col
        v-for="(recipe, i) in featured_recipes"
        :key="i"
        cols="12"
        sm="4"
        class="text-center"
      >
        <v-card tile flat class="ml-auto mr-auto" width="300px">
          <router-link :to="'recipes/' + recipe.id">
            <v-img class="justify-center" :src="recipe.img"></v-img>
          </router-link>
          <v-card-title class="styleOne">{{
            recipe.title
              .split("-")
              .join(" ")
              .toUpperCase()
          }}</v-card-title>
        </v-card>
      </v-col>
    </v-row>
    <v-row justify="center">
      <v-col class="text-center" cols="12">
        <v-btn to="/recipes" outlined class="styleOne">More Recipes</v-btn>
      </v-col>
    </v-row>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "LandingPage",
  props: ["dataResponse"],
  data() {
    return {
      featured_recipes: [],
      mainArticle: {
        title: "Nutritional Values of Common Foods",
        img:
          "https://images.pexels.com/photos/1630588/pexels-photo-1630588.jpeg?auto=compress&cs=tinysrgb&w=1600",
      },
    };
  },
  mounted() {
    axios
      .get("http://localhost:8087/api/featured_recipes")
      .then((response) => {
        this.featured_recipes = response.data;
      })
      .catch((error) => console.log(error));
  },
};
</script>

<style lang="scss" scoped>
.titleStyling {
  font-size: 30px;
  margin-top: 15px;
}
.styleOne {
  word-break: break-word;
}

.font_f_title {
  font-family: "Julius Sans One", sans-serif;
  font-size: 70px;
  line-height: 90%;
  word-break: break-word;
}

.word_break_text {
  word-break: break-word;
}

@media only screen and (max-width: 743) {
    .change_margin_btn {
        margin-left: 5px;
    }
}
</style>
