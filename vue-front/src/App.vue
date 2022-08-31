<template>
  <v-app>
    <v-container>
      
      <Header />

        <v-main>

            <router-view :key="$route.fullpath" :dataResponse="this.recipes" :postsResponse="this.posts"  />

        </v-main>

      <CookieBanner />
      <Footer/>
    </v-container>
  </v-app>
</template>

<script>
import axios from "axios"
import Header from "./components/Header"
import Footer from "./components/Footer"
import CookieBanner from "./components/CookieBanner"
export default {
  name: 'App',
  components: {
    Header,
    Footer,
    CookieBanner
  },
  props:{
    dataResponse: {type: Object},
    postsResponse: {type:Object}
  },
  data() {
    return {
      recipes: [],
      posts: []
    }
  },
  mounted() {
    axios.get("http://localhost:8087/api/recipes")
    .then( response => { 
      this.recipes = response.data.reverse()
     }).catch( error => {
       console.log(error)
     })

    axios.get('http://localhost:8087/api/posts')
    .then(response => { this.posts = response.data.reverse()
    })
    .catch(error => {console.log(error)})
  }

};
</script>

<style lang="scss">
// Styles
.html {
  font-size: 18px;
}

p {
  font-size: 1rem;
  line-height: 27px;
}
.styleOne {
  font-family: "Montserrat", sans-serif;
  font-weight: bold;
}
.styleTwo {
  font-family: "EB Garamond";
  font-weight: bold;
}
.addingBorder {
  border-top: 1.5px solid rgb(231, 231, 231);
}
.borderLine {
  border-bottom: 1.5px solid rgb(231,231,231);
}
.fadedBackground {
  background: rgba(224,224,224,0.8);
  padding: 15px;
  margin: 25px 15px 0px 25px;
  color: rgba(0,0,0,1);
  font-size: 18pt;
  font-family: "montserrat", sans-serif;
  line-height: 100%;
}
.sizeAdjust {
  font-size: 16px;
}

.v-btn {
  font-weight: bold;
}
</style>