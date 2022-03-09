<template>
    <div>
        <div v-for="poll in polls">
            <h3 v-text="poll.title"></h3>
            <a class="pr-4" :href="'answer_poll/' + poll.url">Answer</a>
            <a :href="'answers_poll/' + poll.url">Show Answers</a>
        </div>
    </div>


</template>

<script>
export default {
    name: "polls",
    data() {
        return {
            polls: []
        }
    },

    created() {
        axios.get("/poll")
            .then(response => this.polls = response.data);
    },
}
</script>

<style scoped>

</style>
