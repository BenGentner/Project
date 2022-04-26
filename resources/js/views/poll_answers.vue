<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th>User</th>
                <th v-for="possible_answer in poll_possible_answer" v-text="possible_answer.title"></th>
            </tr>
            </thead>

            <tbody>
            <tr v-for="answer in poll_answers">
                <th v-text="answer.username"></th>
                <td v-for="possible_answer in poll_possible_answer">
                        <div v-if="answer.answer_id === possible_answer.id" >x</div>
                </td>
            </tr>
            </tbody>
        </table>
        <!--    <a class="pr-4" :href="'answer_poll/' + poll.url">Answer</a>-->
        <a :href="'/main/answer_poll/' + poll.url">Answer</a>
    </div>

</template>

<script type="module">
export default {
    name: "poll_answers",

    props: ['poll', 'poll_possible_answer', 'poll_answers', 'users']
}
</script>

<style scoped>

</style>
