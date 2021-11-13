<template>
    <div>
        <!-- If there is no cookie show popup -->
        <v-footer app v-if="cookie">
            <v-toolbar-title class="styleOne" style="color: #000;">
                {{cookieNotice}}
            </v-toolbar-title>
            <v-divider></v-divider>
            <v-btn @click="acceptCookie" dark>OK</v-btn>
        </v-footer>
    </div>
</template>

<script>
export default {
    name: "CookieBanner",
    data() {
        return {
            cookieNotice: "This site uses cookies to provide you with a great user experience. By using ClassicGravy you accept our use of cookies",
            cookie: true,
            cookieObj: null,
            cookieValue: 'exists'
        }
    },
    methods: {
        // Makes a new cookie
        acceptCookie: function () {
            this.cookieObj.create('stash', this.cookieValue, 5)
            if(this.cookieObj.read('stash')) {
                this.cookie = false
            } else {
                this.cookie = true
            }
        }
    },
    mounted() {
        this.cookieObj = new this.$cookie
        // If cookie exists hide pop up
        if(this.cookieObj.read('stash')) {
            this.cookie = false
        }
        console.log("Cookie " + this.cookieObj.read('stash'))
    }
}
</script>