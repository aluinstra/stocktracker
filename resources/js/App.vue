<template>
    <div>
        <NavBar />

        <div class="container-fluid">
            <div class="row">
                <SideBar />
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li
                                class="breadcrumb-item active"
                                aria-current="page"
                            >
                                Overview
                            </li>
                        </ol>
                    </nav>
                    <!-- <p>
                        This is the homepage of a simple admin interface which
                        is part of a tutorial written on Themesberg
                    </p>
                    <h1 class="h2">Dashboard</h1> -->
                    <router-view />
                    <Footer />
                </main>
            </div>
        </div>
    </div>
</template>

<script>
import SideBar from "../components/SideBar.vue";
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
