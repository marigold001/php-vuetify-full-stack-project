<template>
  <div class="recipes">
     <RecipesPage :dataResponse="dataResponse" />
  </div>
</template>

<script>
import RecipesPage from "../components/core/RecipesPage"
export default {
  components: {RecipesPage},
  props: ["dataResponse"],
  data() {
    return {

    }
  },
  // mounted() {
  //   window.scrollTo(220,220)
  // }

}
</script>
