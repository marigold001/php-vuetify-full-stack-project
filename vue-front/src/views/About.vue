<template>
    <div class="about">
        <About  />
    </div>
</template>

<script>
import About from "../components/core/About"
export default {
    components: {About},
    props:["dataResponse"],
    data() {
        return {

        }
    }
}
</script>