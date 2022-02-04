import Vue from "vue";
import VueRouter from "vue-router";

import Account from "../pages/Account.vue";
import CreateStock from "../pages/StockCreate.vue";
import CreateOrder from "../pages/OrderCreate.vue";

Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        {
            path: "/",
            name: "Account",
            component: Account
        },
        {
            path: "/stock/create",
            name: "StockCreate",
            component: CreateStock
        },
        {
            path: "/order/create",
            name: "OrderCreate",
            component: CreateOrder
        }
    ]
});
