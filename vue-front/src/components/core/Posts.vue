<template>
  <div>
    <v-row>
      <v-col cols="12" md="6" >
        <v-card tile flat >
          <v-img height="400px" :src="mainArticleTwo.img" class="mx-14 mx-sm-14 mx-md-2 mt-4 hover_effect_post">
            <v-card-title class="fadedBackground">{{
              mainArticleTwo.title
            }}</v-card-title>
          </v-img>
        </v-card>
      </v-col>
      <v-col md="6" cols="12" >
        <v-card tile flat >
          <v-img height="400px" :src="mainArticle.img" class="mx-14 mx-sm-14 mx-md-2 mt-4 hover_effect_post">
            <v-card-title class=" fadedBackground">{{
              mainArticle.title
            }}</v-card-title>
          </v-img>
        </v-card>
      </v-col>
    </v-row>

    <v-row>
      <v-col v-for="(post, index) in posts" :key="index" md="4" cols="12">
        <router-link
          class="text_decoration_reset_anchor"
          :to="'posts/' + post.id"
        >
          <v-img class="test mx-14 mx-sm-14 mx-md-2 hover_effect_post" height="250px" :src="post.img" >
            <v-card-title class="fadedBackground changingFont">{{
              post.title
            }}</v-card-title>
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
import axios from "axios";
export default {
  name: "Posts",
  props: ["dataResponse"],
  data() {
    return {
      mainArticle: {
        title: "Clean Eating a Guide to Whole Foods",
        img:
          "https://images.pexels.com/photos/3730950/pexels-photo-3730950.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
      },
      mainArticleTwo: {
        title: "Nutritional Values of Common \n Foods",
        img:
          "https://images.pexels.com/photos/1630588/pexels-photo-1630588.jpeg?auto=compress&cs=tinysrgb&w=1600",
      },
      posts: [],
    };
  },
  mounted() {
    axios
      .get("http://localhost:8087/api/posts")
      .then((response) => {
        this.posts = response.data.reverse();
      })
      .catch((error) => {
        console.log(error);
      });
  },
  methods: {
    changeSize() {},
  },
};
</script>

<style lang="scss" scoped>
.changingFont {
  font-size: 16px !important;
}

.text_decoration_reset_anchor {
  text-decoration: none;
}

.hover_effect_post:hover {
    transform: scale(1);  
}
.hover_effect_post {
    transform: scale(0.8);
    transition: 0.5s;
}
// .test:hover {
//     height: 200px;
//     width: 150px;
// }
</style>
