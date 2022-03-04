import Vue from "vue";
import VueRouter from "vue-router";

import Account from "../pages/Account.vue";
import StockCreate from "../pages/StockCreate.vue";
import StockIndex from "../pages/StockIndex.vue";

import OrderCreate from "../pages/OrderCreate.vue";

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
            component: StockCreate
        },
        {
            path: "/stock/index",
            name: "StockIndex",
            component: StockIndex
        },
        {
            path: "/order/create",
            name: "OrderCreate",
            component: OrderCreate
        }
    ]
});
