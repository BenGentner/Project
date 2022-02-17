<template>

        <a :href="'/main/' + $attrs.data.url">{{$attrs.data.name}}</a>

</template>

<script>
export default {
    name: "nav_element",

    data() {
        return {

        }
    }
}
</script>

