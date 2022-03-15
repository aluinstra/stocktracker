<template>
    <div>
        <NavBar />
        <SideBar />
        <router-view />
    </div>
</template>

<script>
import SideBar from "../js/components/SideBar.vue";
import NavBar from "../js/components/Nav.vue";

export default {
    components: {
        NavBar,
        SideBar
    }
};
</script>

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
