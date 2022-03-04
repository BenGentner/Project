<template>
    <div>
        <div v-for="poll in polls">
            <a :href="'poll/' + poll.url" v-text="poll.title"></a>
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
