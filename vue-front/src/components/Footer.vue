<template>
    <div>
        <v-footer
        tile
        color="#fff"
        >
            <v-card
            class="flex"
            text
            flat
            >
                <v-card-title class="styleOne addingBorder mt-2">LET'S CONNECT</v-card-title>
                <v-btn
                v-for="(icon,index) in socialIcons"
                :key="index"
                :href="icon.link"
                text
                target="_blank"
                class="mb-6"
                >
                <v-icon
                size="20px"
                
                >{{icon.iconName}}</v-icon>
                </v-btn>
                <v-btn  class="mb-6" text href="mailto:neven.josipovic.sae@gmail.com">
                    <v-icon size="20px">mdi-mail</v-icon>
                </v-btn>
                <v-card-actions>
                    <v-card-text class="text-center styleTwo addingBorder pt-6">
                        Copyright - &copy; {{ new Date().getFullYear() }} <strong>Classic Gravy</strong> <br> {{companyMail}}
                    </v-card-text>
                    <v-btn
                    text
                    title="Go to top"
                    @click="$vuetify.goTo(0)"
                    >
                        <v-icon>mdi-chevron-up</v-icon>
                    </v-btn>
                </v-card-actions>
            </v-card>
        </v-footer>
    </div>
</template>

<script>
export default {
    name:"Footer",
    data() {
        return {
            socialIcons:
                [
                    {name:"facebook", iconName:'mdi-facebook', link:"https://www.facebook.com/ClassicGravy-101879294976793"},
                    {name:"instagram", iconName:'mdi-instagram', link:"https://www.instagram.com/classicgravy__/"},
                    {name:"pinterest", iconName:'mdi-pinterest', link:"https://www.pinterest.com/classicgravy/"}
                ],
                
                urls: [],
                companyName: "ClassicGravy",
                companyMail: "info@classicgravy.com"
            }
        },
        // Credit @ Nikola Lukić
        mounted() {
            for(var i = 0; i < this.socialIcons.length; i++) {
                this.urls[i] = "https://www." + this.socialIcons[i].name + ".com/" + this.companyName;
            }
        }
}
</script>

<style lang="scss">

</style>