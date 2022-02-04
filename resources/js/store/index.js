import Vue from "vue";
import Vuex from "vuex";
import { stocksModule } from "./modules/stocks";
import { ordersModule } from "./modules/orders";

Vue.use(Vuex);

export default new Vuex.Store({
    state: {},
    mutations: {},
    getters: {},
    actions: {},
    modules: { stocksModule, ordersModule }
});
