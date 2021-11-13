<template>
    <v-container>
      <v-row justify="center">
          <v-dialog
          v-model="dialog"
          max-width="600px"
          >
            <template v-slot:activator="{on}">
              <v-btn  v-on="on" text tile small class="styleOne"> <v-icon small>mdi-plus</v-icon> Add a recipe <v-icon small>mdi-plus</v-icon></v-btn>
            </template>
            <v-card>
              <v-card-text v-if="errors.length">
                      <strong>Please correct the following errors</strong>
                      <v-card-text 
                      v-for="(error,index) in errors" 
                      :key="index">
                      {{error}}
                      </v-card-text>
                    </v-card-text>
              <v-card-title>
                <span class="styleOne">ADD A RECIPE</span>
              </v-card-title>
              <v-card-text>
                <v-container>
                  <v-row>
                    <v-col cols="6">
                      <v-text-field label="Recipe Name" placeholder="Add recipe name" v-model="recipeName"></v-text-field>
                    </v-col>
                    <v-col cols="6">
                      <v-text-field label="ImageURL" placeholder="Add image url" v-model="recipeImageURL"></v-text-field>
                    </v-col>
                    <v-col cols="12">
                      <v-select
                      :items="items"
                      v-model="difficulty"
                      label="Select difficulty"
                      dense
                      ></v-select>
                    </v-col>
                    <v-col cols="10">
                      <v-card-subtitle>
                        Preparation time (minutes)
                      </v-card-subtitle>
                      <v-slider
                      v-model="preparation_time"
                      min="0"
                      max="300"
                      ></v-slider>
                    </v-col>
                      <v-col cols="2">
                          <v-text-field
                          v-model="preparation_time"
                          hide-details
                          single-line
                          type="number"
                          style="width: 60px"
                          ></v-text-field>
                      </v-col>
                      <v-col cols="12">
                        <v-card-subtitle>
                          Additional information
                        </v-card-subtitle>
                        <v-textarea rows="2" label="Instructions" v-model="description"></v-textarea>
                      </v-col>
                      <v-col>
                        <v-card-actions>
                          <v-btn @click="submitRecipe" outlined tile class="styleOne"> <v-icon>mdi-plus</v-icon> ADD RECIPE </v-btn>
                        </v-card-actions>
                      </v-col>
                  </v-row>
                </v-container>
              </v-card-text>
            </v-card>      
          </v-dialog>
      </v-row>

        <!-- Content of the page, content is received from app.vue as a prop -->
        <v-row>
          <v-col
          v-for="(recipe,index) in dataResponse"
          v-bind:key="index"
          cols="12"
          lg="4"
          md="6"
          sm="6"
          
          >
            <a name="top"></a>
            <v-card
            class="ma-2"
            flat
            tile
            >
              <v-tooltip right max-width="350px">
                <template v-slot:activator="{on}">
                  <router-link :to="'recipes/' + recipe.id">
                  <v-img v-on="on" max-height="195.7px" :src="recipe.img">
                  </v-img>
                  </router-link>
                </template>
                <v-card-text>{{recipe.description}}</v-card-text>
              </v-tooltip>
               <v-card-title class="styleOne">{{recipe.title.split("-").join(" ").toUpperCase()}}</v-card-title>
                    <v-rating background-color="blue" color="yellow" small></v-rating>
              <v-card-subtitle>{{recipe.difficulty}}</v-card-subtitle>
              <v-card-text>{{recipe.preparation_time}} - (minutes)</v-card-text>               
            </v-card>
          </v-col>
      </v-row>
    </v-container>
</template>

<script>
import axios from "axios"
export default {
    name: "RecipesPage",
    props:["dataResponse"],
    data() {
        return {
            dr: {},
            info: null,
            recipeName: '',
            recipeImageURL: '',
            errors: [],
            recipes: [],
            dialog: false,
            regexp: '',
            newRecipes: [],
            addRecipeName: '',
            addImage: '',
            recipesData: [],
            slider: 0,
            difficulty: null,
            items: ['Easy', 'Medium', 'Hard'],
            preparation_time: 0,
            description: '',
            id: this.dataResponse.id
            
        }
    },
    methods: {
      submitRecipe: function(e) {
        this.errors = [];
        if(!this.recipeName) {
          this.errors.push("Recipe name required")
        }
        if(!this.recipeImageURL) {
          this.errors.push("ImageURL required")
        }
        if(this.recipeName && this.recipeImageURL) {
          // Regular expression for testing if a string is an URL
            this.regexp = /^(?:(?:https?|ftp):\/\/)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})))(?::\d{2,5})?(?:\/\S*)?$/;
          if(this.regexp.test(this.recipeImageURL)) {
            this.dataResponse.push({
              id: this.dataResponse.length,
              title: this.recipeName,
              img: this.recipeImageURL,
              difficulty: this.difficulty,
              preparation_time: this.preparation_time,
              description: this.description
            })
            axios.post("http://localhost:8087/recipes", {
            recipesData: {
                id: this.dataResponse.length - 1,
                title: this.recipeName,
                img: this.recipeImageURL,
                difficulty: this.difficulty,
                preparation_time: this.preparation_time,
                description: this.description
            }
            })
            .then(function(response) { 
              console.log(response)
            })
            .catch(function (error) {
              console.log(error)
            })
           alert("Post added, you can find it at the bottom of the page")
           this.recipeName = ''
           this.recipeImageURL = ''
           this.difficulty = ''
           this.preparation_time = 0
           this.description = ''
          } else {
            this.errors.push("Must be a valid URL")
          }
          return true;
        }
        e.preventDefault();
      }
      
    },
    mounted() {
      // window.scrollTo(100,100)
    }
}
</script>