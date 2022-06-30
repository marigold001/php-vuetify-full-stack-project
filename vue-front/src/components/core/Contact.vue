<template>
  <div  style="margin-top: 30px;">
    <v-card flat>
      <div class="d-flex">
        <div>
          <v-card-text class="styleTwo mt-6 mb-n4">
            Aside from writing recipes for the Classic Gravy blog, I also create
            online cooking videos, consult restaurants and food companies on
            recipe development and food innovation, lead wellness retreats,
            classes, and host workshops internationally.
          </v-card-text>
          <v-card-text class="styleTwo mb-n2">
            For more information or questions about how we can work together,
            send an email to info@classicgravy.org
          </v-card-text>
          <v-card-text class="borderLine pb-6 styleTwo mb-4">
            For freelance writers, please note that I only publish my own posts
            on Classic Gravy.
          </v-card-text>

          <v-card-title class="styleOne">
            PRIVATE AND GROUP COOKING CLASSES
          </v-card-title>
          <v-card-text class="borderLine pb-6  styleTwo mb-4">
            I do a limited number of cooking classes in private homes each year.
            These range from families to groups of friends that get together for
            a day of hands-on learning and lots of fun! I tailor each class to
            your needs, meeting all skill levels, dietary preferences and
            personal interests. For booking inquiries, please send an email to
            info@classicgravy.org.
          </v-card-text>
        </div>
        <v-img
          width="20%"
          class="mt-4 mr-4 adjusting_height_md_img hide_img_sm"
          src="https://i.imgur.com/h4UAvEc.jpg"
        ></v-img>
      </div>
      <v-card-title class="styleOne"
        >COOKING DEMONSTRATIONS, LECTURES AND WORKSHOPS</v-card-title
      >
      <v-card-text class="borderLine pb-6  styleTwo mb-4">
        If you are organizing a food related event and want to pull from my 10+
        years of experience with healthy cooking, recipe development, and
        cookbook writing, feel free to get in touch at info@classicgravy.org
      </v-card-text>
      <ContactForm />
      <v-card-title class="styleOne">WELLNESS RETREATS</v-card-title>
      <v-card-text class="borderLine pb-6  styleTwo mb-4"
        >Golden Circle Retreats offer a unique opportunity to nourish your body
        and soul in a week-long immersion program that will leave you vibrant
        and inspired! Plant-based cooking classes, nutrition workshops, yoga,
        dancing, meditation (and lots of delicious food) nourish you from the
        inside out, in the beauty and solitude of nature. I have developed the
        program with my dear friend Mikkala Marilyn Kissi from Living Yolates.
        The week is called called Wild Heart High Spirit and we keep it to a
        small group of just women. Read more here!</v-card-text
      >
      <v-card-title class="styleOne">RECIPE DEVELOPMENT</v-card-title>
      <v-card-text class="borderLine pb-6  styleTwo mb-4"
        >I have been recipe developing for over 10 years. I have worked for a
        number of companies, each one presenting a unique challenge for me to
        either take a classic product in a healthier, whole food direction, or
        to create something completely new from scratch! Past clients include
        both large, international food producers and smaller, local
        companies.</v-card-text
      >
      <v-card-text class="mt-6 mb-4 styleTwo"
        >If you have any questions about my services, rates, audience or other
        information, please write to info@classicgravy.org to learn more.
        Thanks!</v-card-text
      >
    </v-card>
  </div>
</template>

<script>
import ContactForm from "../ContactForm";
export default {
  name: "Contact",
  components: {
    ContactForm,
  },
  props: ["dataResponse"],
  data() {
    return {};
  },
};
</script>

<style lang="scss" scoped>
// Chaning a general styly for this page only
.styleTwo {
  font-size: 13pt;
  color: rgba(0, 0, 0, 0.6);
}
.styleOne {
  word-break: break-word;
}
@media only screen and (max-width: 800px) {
  .adjusting_height_md_img {
    height: 300px;
  }
}

@media only screen and (max-width: 500px) {
  .hide_img_sm {
    display: none;
  }
}
</style>
