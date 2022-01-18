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
                                :placeholder="name"
                                v-model="stockData.name"
                            />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input
                                type="text"
                                :placeholder="purchasePrice"
                                v-model="stockData.purchasePrice"
                            />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input
                                type="text"
                                :placeholder="dateOfPurchase"
                                v-model="stockData.dateOfPurchase"
                            />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input
                                type="text"
                                :placeholder="currentProfit"
                                v-model="stockData.currentProfit"
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
                purchasePrice: "",
                dateOfPurchase: "",
                currentProfit: ""
            },
            name: "company name",
            purchasePrice: "purchase price",
            dateOfPurchase: "date of purchase",
            currentProfit: "current profit"
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
