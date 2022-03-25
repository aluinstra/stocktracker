<template>
    <div>
        <div class="row my-4">
            <div class="col-12 col-xl-12 col-lg-3 mb-4 mb-lg-0">
                <div class="card">
                    <h5 class="card-header">Stock edit {{ stock.name }}</h5>
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        {{ stockData.id }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input
                                            type="text"
                                            v-model="stockData.name"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input
                                            type="text"
                                            v-model="stockData.ticker_symbol"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input
                                            type="text"
                                            v-model="stockData.ISIN"
                                        />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <button type="button" @click="submitEditing()">
                Submit
            </button>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            stockData: {}
        };
    },
    methods: {
        submitEditing() {
            this.$store.dispatch("stocksModule/Update", this.stockData);

            this.$router.push({ name: "StockIndex" });
        }
    },
    computed: {
        stock() {
            const data = this.$store.getters["stocksModule/getById"](
                parseInt(this.$route.params.id)
            );
            if (!data) {
                return {};
            }
            this.stockData = JSON.parse(JSON.stringify(data));
            return data;
        }
    },
    mounted() {
        this.$store.dispatch("stocksModule/setAll");
    }
};
</script>
