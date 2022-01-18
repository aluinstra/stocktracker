import Vue from "vue";
import VueRouter from "vue-router";

import Account from "../pages/Account.vue";
import CreateStock from "../pages/StockImport.vue";

Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        {
            path: "/",
            component: Account
        },
        {
            path: "/stock/create",
            name: "CreateStock",
            component: CreateStock
        }
    ]
});
