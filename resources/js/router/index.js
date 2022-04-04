import Vue from "vue";
import VueRouter from "vue-router";

import DashBoard from "../pages/DashBoard.vue";
import StockIndex from "../pages/StockIndex.vue";
import StockCreate from "../pages/StockCreate.vue";
import StockShow from "../pages/StockShow.vue";
import StockEdit from "../pages/StockEdit.vue";

import OrderIndex from "../pages/OrderIndex.vue";
import OrderCreate from "../pages/OrderCreate.vue";
import OrderShow from "../pages/OrderShow.vue";
import OrderEdit from "../pages/OrderEdit.vue";

Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        {
            path: "/",
            name: "DashBoard",
            component: DashBoard
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
            path: "/stock/:id",
            name: "StockShow",
            component: StockShow
        },
        {
            path: "/stock/:id/edit",
            name: "StockEdit",
            component: StockEdit
        },
        {
            path: "/order/create",
            name: "OrderCreate",
            component: OrderCreate
        },
        {
            path: "/order/index",
            name: "OrderIndex",
            component: OrderIndex
        },
        {
            path: "/order/:id",
            name: "OrderShow",
            component: OrderShow
        },
        {
            path: "/order/:id/edit",
            name: "OrderEdit",
            component: OrderEdit
        }
    ]
});
