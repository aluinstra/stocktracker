import axios from "axios";

/**
 * @type {import("vuex").Module<{all:{id:number}[]}>}
 */
export const stocksModule = {
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
            const { data } = await axios.get("api/stocks");
            commit("SET_ALL", data);
        },
        async deleteStock({ commit }, id) {
            await axios.delete("api/stocks/" + id);
            commit("SET_ALL", data);
        },
        async Update({ commit }, payload) {
            const { data } = await axios.post(
                `api/stocks/${payload.id}`,
                payload
            );
            commit("SET_ALL", data);
        },
        async Create({ commit }, payload) {
            const { data } = await axios.post("/api/stocks/create", payload);
            commit("SET_ALL", data);
        }
    }
};
