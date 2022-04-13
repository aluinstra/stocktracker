<template>
    <nav
        id="sidebar"
        class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse"
    >
        <div class="position-sticky">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <router-link class="ms-2" :to="{ name: 'StockIndex' }"
                        >Stock Index</router-link
                    >
                </li>
                <li class="nav-item">
                    <router-link class="ms-2" :to="{ name: 'OrderIndex' }"
                        >Order Index</router-link
                    >
                </li>
                <li class="nav-item">
                    <router-link
                        class="ms-2"
                        :to="{ name: 'PortfolioGrowthChart' }"
                        >Growth Chart</router-link
                    >
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
export default {};
</script>

<style>
a {
    text-decoration: none;
}
</style>
