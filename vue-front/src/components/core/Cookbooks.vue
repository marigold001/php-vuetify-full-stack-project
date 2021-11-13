<template>
    <div>
        <v-row>
            <v-col>
        <v-img src="https://i.imgur.com/pHl1GBo.jpg" height="40vh" class="mt-5"></v-img>

            </v-col>

        </v-row>

        <v-row>
            <v-col>
                <v-card
                v-for="(book,index) in cookbooks"
                :key="index"
                class="borderLine"
                flat
                
                >
                    <div class="d-flex ">
                        <div>
                            <v-card-title class="styleTwo">{{book.title}}</v-card-title>
                            <v-card-subtitle class="styleTwo">{{book.subtitle}}</v-card-subtitle>
                            <v-card-text class="styleOne">
                                {{book.text}}
                            </v-card-text>
                        </div>
                        <v-img  max-width="140px" max-height="200px" class="d-none d-sm-block mt-6 mb-6" :src="book.img"></v-img>
                    </div>
                </v-card>
            </v-col>
        </v-row>
    </div>
</template>

<script>
import axios from "axios"
export default {
    name: "Cookbooks",
    props: ["dataResponse"],
    data() {
        return {
            cookbooks: []
        }
    },
    mounted() {
        axios.get("http://localhost:8087/api/cookbooks")
    .then( response => { 
      this.cookbooks = response.data
      // console.log(response.data)
     }).catch( error => {
       console.log(error)
     })
    }
}
</script>