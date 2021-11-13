<template>
    <div>
        <v-row>
            <v-col>
                <v-card tile flat>    
                    <v-img height="400px"  :src="mainArticle.img"> 
                        <v-card-title class="ml-5 mt-4 fadedBackground">{{mainArticle.title}} <v-btn to="/posts" class="ml-6">SEE MORE POSTS</v-btn> </v-card-title>
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
                    <v-card-title class="styleOne">{{recipe.title.split("-").join(" ").toUpperCase()}}</v-card-title>
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
import axios from "axios"
export default {
    name: 'LandingPage',
    props:["dataResponse"],
    data() {
        return {
            featured_recipes: [],
            mainArticle: {
                title: "Nutritional Values of Common \n Foods",
                img: "https://i.imgur.com/TYdvnDn.jpg"
            }
        }
    },
    mounted() {
        axios.get("http://localhost:8087/api/featured_recipes")
        .then( response => { this.featured_recipes = response.data } )
        .catch(error => console.log(error))
    }
}
    
</script>

<style lang="scss" scoped>
.titleStyling {
    font-size: 30px;
    margin-top: 15px;
}
.styleOne {
    word-wrap: break-word;
}
</style>