<template>
    <div>
        <v-row justify="center">
            <v-btn  text class="ma-14 styleOne hover_effect_btn" to="/posts">Go Back</v-btn>
            <v-col cols="10">
                <v-card tile outlined style="margin-top: 25px;">
                  <v-img max-height="40vh" :src="postsResponse[$route.params.post].img"></v-img>
                  <v-card-title style="word-break: break-word" class="styleTwo">{{postsResponse[$route.params.post].title}}</v-card-title>
                </v-card>
            </v-col>
        </v-row>
        <v-row>
            <v-col
            >
                <v-card outlined>
                    <v-card-title>{{postsResponse[$route.params.post].subtitle}}</v-card-title>
                    <v-card-text class="pa-4 borderLine styleTwo">{{postsResponse[$route.params.post].chapter}}</v-card-text>
                    <v-card-text class="pa-4 borderLine styleTwo">{{postsResponse[$route.params.post].chapter_two}}</v-card-text>
                    <v-card-text class="pa-4 borderLine styleTwo">{{postsResponse[$route.params.post].chapter_three}}</v-card-text>
                </v-card>
            </v-col>
        </v-row>
    </div>
</template>

<script>
import axios from "axios"
export default {
    name: "PostsMoreInfo",
    props:["postsResponse"],
    data() {
        return {
          testing: []
        }
    },
    mounted() {
        axios.get('http://localhost:8087/api/posts')
        .then(response => { this.testing = response.data.reverse()
        console.log(response.data)
        })
        .catch(error => {console.log(error)})

        console.log(this.postsResponse)
    }
}
</script>

<style lang="scss" scoped>

.hover_effect_btn:hover {
    background-color: rgb(100,100,100);
    color: #fff;
}

@media only screen and (min-width: 1200px) {

    .styleTwo {
        font-size: 18px;
    }
}
</style>