<template>
    <div class="cookbooks">
        <Cookbooks :dataResponse="dataResponse"  />
    </div>
</template>

<script>
import Cookbooks from "../components/core/Cookbooks"
export default {
    components: {Cookbooks},
    props:["dataResponse"],
    data() {
        return {

        }
    }
}
</script>