<template>
  <div style="margin-bottom: 20px;">
    <!-- Social Links -->
    <v-row>
      <v-col>
        <v-btn
          v-for="(icon, index) in social_links"
          :key="index"
          text
          target="_blank"
          :href="icon.link"
          style="margin-top: 15px;"
        >
          <v-icon size="20px">{{ icon.icon }}</v-icon>
        </v-btn>
      </v-col>
    </v-row>
    <v-row align="center" justify="center">
      <v-col class="text-center">
        <v-card flat>
          <v-img
            :src="logo"
            class="ml-auto mr-auto"
            max-height="100px"
            max-width="100px"
          ></v-img>
          <div class="text-center styleTwo">{{ title }}</div>
          <v-menu>
            <v-list>
              <v-list-item
                v-for="(item, index) in menu_items"
                :key="index"
                :to="item.href"
                >{{ item.name }}</v-list-item
              >
            </v-list>
          </v-menu>
        </v-card>
      </v-col>
    </v-row>
    <v-app-bar color="#fff" flat class="hidden-sm-and-down">
      <v-row class="test" justify="space-between">
        <v-col
          class="text-center font-weight-bold"
          v-for="(item, index) in menu_items"
          :key="index"
        >
          <v-btn class="try" text :to="item.href">{{ item.name }}</v-btn>
        </v-col>
      </v-row>
    </v-app-bar>
    <v-toolbar flat class="hidden-md-and-up">
      <v-menu>
        <template v-slot:activator="{ on }">
          <v-row>
            <v-col class="text-center">
              <v-btn outlined tile v-on="on" color="#9d9d9d" class="styleOne hover_effect_menu">
                <v-icon class="hover_color_menu">mdi-menu</v-icon>
              </v-btn>
            </v-col>
          </v-row>
        </template>
        <v-list v-for="(item, index) in menu_items" :key="index">
          <v-btn :to="item.href" class="try" block text>{{ item.name }}</v-btn>
        </v-list>
      </v-menu>
    </v-toolbar>
  </div>
</template>

<style lang="scss">
.test {
  border-bottom: 2px solid rgb(231, 231, 231) !important;
}
.try {
  font-family: "Montserrat";
}
.fontChange {
  font-family: "EB Garamond";
  color: rgb(100, 100, 100);
}
.text-center {
  margin-top: 15px;
}

.hover_effect_menu:hover {
  background-color: rgb(100, 100, 100);
  color: #fff !important;
  transition: 0.3s;
}
</style>

<script>
export default {
  name: "Header",
  props: ["dataResponse"],
  data() {
    return {
      logo: "https://i.imgur.com/W3qmTbB.png",
      title: "How to make healthy choices every day",
      social_links: [
        {
          icon: "mdi-facebook",
          link: "https://www.facebook.com/ClassicGravy-101879294976793",
        },
        {
          icon: "mdi-instagram",
          link: "https://www.instagram.com/classicgravy__/",
        },
        {
          icon: "mdi-pinterest",
          link: "https://www.pinterest.com/classicgravy/",
        },
        { icon: "mdi-email", link: "mailto:neven.josipovic.sae@gmail.com" },
      ],
      menu_items: [
        { name: "HOME", href: "/" },
        { name: "RECIPES", href: "/recipes" },
        { name: "COOKBOOKS", href: "/cookbooks" },
        { name: "POSTS", href: "/posts" },
        { name: "ABOUT", href: "/about" },
        { name: "CONTACT", href: "/contact" },
      ],
    };
  },
};
</script>
