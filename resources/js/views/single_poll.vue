<template>
    <div>
        <h1 v-text="$attrs.data.title"></h1>

        <div v-for="answer in $attrs.data.answers">
            <input id="option" type="checkbox"  ></input>
            <label for="option" v-text="answer.title"></label>
        </div>


        <button class="button is-primary">Sumbit</button>
    </div>

</template>

<script>
export default {
    name: "single_poll",

    data() {
        return {

        }
    },
}
</script>

<style scoped>

</style>
