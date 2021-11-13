<template>
  <div class="home">
      <LandingPage :dataResponse="dataResponse"/>
  </div>
</template>

<script>
// @ is an alias to /src
import LandingPage from "../components/core/LandingPage"

export default {
  name: 'Home',
  components: {
    LandingPage
  },
  props:["dataResponse"],
  
  data() {
    return {

    }
  }
}
</script>
