<template>
    <div>
        <h1>Create a stock</h1>
        <div>
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
                                :placeholder="tickerSymbol_plcHolder"
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
        <button type="button" @click="createStock">Submit</button>
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
