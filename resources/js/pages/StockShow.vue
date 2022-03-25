<template>
    <div>
        <div class="row my-4">
            <div class="col-12 col-xl-12 col-lg-3 mb-4 mb-lg-0">
                <div class="card">
                    <h5 class="card-header">Stock show</h5>
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>id</td>
                                    <td>{{ stock.id }}</td>
                                </tr>
                                <tr>
                                    <td>name</td>
                                    <td>{{ stock.name }}</td>
                                </tr>
                                <tr>
                                    <td>ticker symbol</td>
                                    <td>{{ stock.ticker_symbol }}</td>
                                </tr>
                                <tr>
                                    <td>ISIN</td>
                                    <td>{{ stock.ISIN }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <button type="button" @click="editOrder(stock.id)">
                Edit
            </button>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {};
    },
    methods: {
        editOrder() {
            return this.$router.push({
                name: "StockEdit",
                params: { id: this.$route.params.id }
            });
        }
    },
    computed: {
        stock() {
            return this.$store.getters["stocksModule/getById"](
                parseInt(this.$route.params.id)
            );
        }
    },
    mounted() {
        this.$store.dispatch("stocksModule/setAll");
    }
};
</script>
