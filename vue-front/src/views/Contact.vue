<template>
    <div class="contact">
        <Contact  />
    </div>
</template>

<script>
import Contact from "../components/core/Contact"
export default {
    components: {Contact},
    props:["dataResponse"],
    data() {
        return {

        }
    }
}
</script>