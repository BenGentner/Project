<template>
    <div>
        <h1 v-text="$attrs.data.title"></h1>

        <form @submit.prevent="onsubmit()">
            <label>Name: </label>
            <input class="m-2 border-2 border-black" v-model="form.username" placeholder='Bitte Name eingeben'>
            <span class="text-danger"
                  :disabled="form.errors.any()"
                  v-if="form.errors.has('username')"
                  v-text="form.errors.get('username')">
                </span>
            <input type="hidden" name="_token" v-model="form._token">
            <p v-for="(answer, index) in $attrs.data.answers"
               :key="index">

                <input v-bind:id="index" v-model="form.options[index]" type="checkbox" ></input>
                    <label v-bind:id="index" v-text="answer.title"></label>
            </p>

            <button class="button is-primary">Sumbit</button>
        </form>
        <br>
        <a :href="'/main/answers_poll/' + $attrs.data.url">Show Answers</a>
    </div>

</template>

<script>
import Form from "../components/Form";
export default {
    name: "single_poll",

    data() {
        return {
            form: new Form({
                options: Array(this.$attrs.data.answers.length),
                username: '',
                _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }),
        }
    },



    methods: {
        onsubmit() {
            // console.log(this.form._token)
            this.form.post('/poll/' + this.$attrs.data.url+ '/answer')
                .then(success_message => console.log(success_message))
                .catch(error_message => console.log(error_message));
        },

    }
}
</script>

<style scoped>

</style>
