<template>
    <div class="posts">
        <Posts :dataResponse="dataResponse" />
    </div>
</template>

<script>
import Posts from "../components/core/Posts"
export default {
    components: {Posts},
    props:["dataResponse"],
    data() {
        return {

        }
    }
}
</script>