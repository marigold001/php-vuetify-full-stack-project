<template>
    <div>
        <v-row>
            <v-col>
                <v-card tile flat>
                    <v-img height="400px"  :src="mainArticle.img">
                        <v-card-title class="ml-5 mt-4 fadedBackground">{{mainArticle.title}}</v-card-title>
                    </v-img>
                    
                </v-card>
            </v-col>
        </v-row>

        <v-row>
            <v-col
            v-for="(post,index) in posts"
            :key="index"
             md="4"
             cols="12"
             >
                    <router-link :to="'posts/' + post.id">
                    <v-img class="test" height="250px"  :src="post.img">
                        <v-card-title class="fadedBackground changingFont"><strong>{{post.title}}</strong></v-card-title>

                    </v-img>
                    </router-link>
            </v-col>
        </v-row>
                <!-- <v-carousel hide-delimiters>
                    <v-carousel-item
                    v-for="(item,index) in posts"
                    :key="index"
                    :src="item.img"
                    >
                    <div class="fadedBackground">
                        <div>{{item.title}}</div>
                    </div>
                    </v-carousel-item>
                </v-carousel> -->
    </div>
</template>

<script>
import axios from "axios"
export default {
    name: "Posts",
    props: ["dataResponse"],
    data() {
        return {
            mainArticle: {
                title: "Nutritional Values of Common \n Foods",
                img: "https://i.imgur.com/TYdvnDn.jpg"
            },
            posts:[]
        }
    },
    mounted() {
        axios.get('http://localhost:8087/api/posts')
    .then(response => {this.posts = response.data.reverse()
      })
    .catch(error => {console.log(error)})
    },
    methods: {
        changeSize () {
            
        }
    }
}
</script>

<style lang="scss" scoped>

.changingFont {
    font-size: 16px !important;
}
// .test:hover {
//     height: 200px;
//     width: 150px;
// }
</style>
