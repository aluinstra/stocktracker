<template>
    <div>
        <NavBar />
        <SideBar />
        <Footer />
        <router-view />
    </div>
</template>

<script>
import SideBar from "./components/SideBar.vue";
import NavBar from "../js/components/Nav.vue";
import Footer from "../js/components/Footer.vue";

export default {
    components: {
        NavBar,
        SideBar,
        Footer
    }
};
</script>

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
