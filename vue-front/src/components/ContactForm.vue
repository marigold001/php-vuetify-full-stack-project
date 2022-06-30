<template>
        <!-- Simplified contact form -->
        <div>
            <v-form ref="form">
                <v-row>
                    <v-col class="styleOne" offset="1" cols="11">
                        <h4>Contact Me</h4>
                    </v-col>
                    <v-col cols="9" offset="1" md="5">
                        <v-text-field label="Name" placeholder="Enter your name" v-model="name" :rules="nameRules" required></v-text-field>
                    </v-col>
                    <v-col cols="9" offset="1" offset-sm="1" offset-md="0" md="5">
                        <v-text-field label="Email" placeholder="Enter your email" v-model="email" :rules="emailRules" required></v-text-field>
                    </v-col>

                    <v-col offset="1" cols="10" >
                        <v-text-field placeholder="Write your message" v-model="message"></v-text-field>
                    </v-col>

                    <v-col offset="1" cols="10">
                        <v-btn block outlined  small @click="validate" tile class="styleTwo">SEND</v-btn>
                    </v-col>
                </v-row>
            </v-form>
        </div>
</template>

<script>
import axios from "axios"
export default {
    name: "ContactForm",
    data() {
        return {
            name:"",
            nameRules: [
                v => !!v || "Name is required",
                v => (v && v.length <= 30) || "Name must be less then 30 characters"
            ],
            email:"",
            emailRules: [
                v => !!v || 'E-mail is required',
                v => /.+@.+\..+/.test(v) || 'E-mail must be valid'
            ],
            password: "",
            user_id: "",
            message: "",
            users:[]
        }
    },
    methods: {
        // If the form is valid by :rules, reset the form
        validate() {
            if(this.$refs.form.validate()) {
                axios.post("http://localhost:8087/users", [
                        null,
                        this.name,
                        this.email,
                        this.message
                ])
                .then(function(response) {
                    console.log(response)
                })
                .catch(function(error) {
                    console.log(error)
                })

                this.users.push({
                    name:this.name,
                    email:this.email
                })

                alert("Message succesfuly sent.");
            this.$refs.form.reset() 
            }

        }
    }
}
</script>