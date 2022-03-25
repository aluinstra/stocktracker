<template>
    <div>
        <div class="row my-4">
            <div class="col-12 col-xl-12 col-lg-3 mb-4 mb-lg-0">
                <div class="card">
                    <h5 class="card-header">Stock Create</h5>
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <input
                                            type="text"
                                            :placeholder="name_plcHolder"
                                            v-model="stockData.name"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input
                                            type="text"
                                            :placeholder="
                                                tickerSymbol_plcHolder
                                            "
                                            v-model="stockData.ticker_symbol"
                                        />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input
                                            type="text"
                                            :placeholder="isinNumber_plcHolder"
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
            <button type="button" @click="createStock">Submit</button>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            stockData: {
                name: "",
                ticker_symbol: "",
                ISIN: ""
            },
            name_plcHolder: "company name",
            tickerSymbol_plcHolder: "ticker symbol",
            isinNumber_plcHolder: "ISIN number"
        };
    },
    methods: {
        createStock() {
            this.$store.dispatch("stocksModule/Create", this.stockData);
            console.log(this.stockData);
            this.$router.push({ name: "Account" });
        }
    }
};
</script>
