<template>
    <div>
        <v-row justify="center">
            <v-col cols="10">
                <v-card tile outlined>
                  <v-img max-height="40vh" :src="postsResponse[$route.params.post].img"></v-img>
                  <v-card-title class="styleTwo">{{postsResponse[$route.params.post].title}}</v-card-title>
                </v-card>
            </v-col>
            <v-btn outlined text class="ma-4 styleOne" to="/posts">Go Back</v-btn>
        </v-row>
        <v-row>
            <v-col
            >
                <v-card outlined>
                    <v-card-subtitle>{{postsResponse[$route.params.post].subtitle}}</v-card-subtitle>
                    <v-card-text class="pa-4 borderLine">{{postsResponse[$route.params.post].chapter}}</v-card-text>
                    <v-card-text class="pa-4 borderLine">{{postsResponse[$route.params.post].chapter_two}}</v-card-text>
                    <v-card-text class="pa-4 borderLine">{{postsResponse[$route.params.post].chapter_three}}</v-card-text>
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