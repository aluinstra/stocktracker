import axios from "axios";

/**
 * @type {import("vuex").Module<{all:{id:number}[]}>}
 */
export const ordersModule = {
    namespaced: true,
    state: () => ({ all: [] }),
    getters: {
        getAll: state => state.all,
        getById: state => id => state.all.find(item => item.id === id) || {}
    },
    mutations: {
        SET_ALL: (state, payload) => (state.all = payload)
    },
    actions: {
        async setAll({ commit }) {
            const { data } = await axios.get("api/orders");
            commit("SET_ALL", data);
        },
        async deleteStock({ commit }, id) {
            await axios.delete("api/orders/" + id);
            commit("SET_ALL", data);
        },
        async Update({ commit }, payload) {
            const { data } = await axios.post(
                `api/orders/${payload.id}`,
                payload
            );
            commit("SET_ALL", data);
        },
        async Create({ commit }, payload) {
            const { data } = await axios.post("/api/orders/create", payload);
            commit("SET_ALL", data);
        }
    }
};
