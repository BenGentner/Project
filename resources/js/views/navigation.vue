<template>
    <nav class="flex pt-3 relative">
        <ul>
            <nav_element class="p-6 py-3" v-for="nav_element in nav_elements"
                         v-bind:data="nav_element"
                         v-bind:key="nav_element.id"
            ></nav_element>
        </ul>

    </nav>

</template>

<script>

import Nav_element from "./nav_element";
export default {
    name: "navigation.vue",
    components: {Nav_element},
    data() {
        return {
            nav_elements: []
        }
    },

    created() {
        axios.get("/nav")
            .then(response => this.nav_elements = response.data);
    },
}
</script>

