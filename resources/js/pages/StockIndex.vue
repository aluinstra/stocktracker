<template>
    <div>
        <div class="row my-4">
            <div class="col-12 col-xl-12 col-lg-3 mb-4 mb-lg-0">
                <div class="card">
                    <h5 class="card-header">Aandelen overzicht</h5>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Company</th>
                                    <th>Trading exchange</th>
                                    <th>Ticker symbol</th>
                                    <th>ISIN</th>
                                    <th>Show</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="stock in stocks" :key="stock.id">
                                    <td>{{ stock.id }}</td>
                                    <td>{{ stock.name }}</td>
                                    <td>{{ stock.trading_exchange }}</td>
                                    <td>{{ stock.ticker_symbol }}</td>
                                    <td>{{ stock.ISIN }}</td>
                                    <td>
                                        <button
                                            type="submit"
                                            class="btn btn-outline-warning"
                                            @click="showStock(stock.id)"
                                        >
                                            show
                                        </button>
                                    </td>
                                    <td>
                                        <button
                                            type="submit"
                                            class="btn btn-outline-danger"
                                            @click="deleteStock(stock.id)"
                                        >
                                            delete
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <router-link :to="{ name: 'StockCreate' }">Create stock</router-link>
    </div>
</template>

<script>
export default {
    methods: {
        showStock(stockId) {
            return this.$router.push({
                name: "StockShow",
                params: { id: stockId }
            });
        },
        deleteFromDB(stockId) {
            this.$store.dispatch("stocksModule/deleteProduct", stockId);
        }
    },
    computed: {
        stocks() {
            return this.$store.getters["stocksModule/getAll"];
        }
    },
    mounted() {
        this.$store.dispatch("stocksModule/setAll");
    }
};
</script>
