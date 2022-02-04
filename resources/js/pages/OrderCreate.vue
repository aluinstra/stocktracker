<template>
    <div>
        <h1>Create Order</h1>
        <div>
            <table class="table">
                <tbody>
                    <tr>
                        <td>
                            <input
                                type="text"
                                :placeholder="stock_id_plcHolder"
                                v-model="orderData.stock_id"
                            />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input
                                type="text"
                                :placeholder="trading_exchange_plcHolder"
                                v-model="orderData.trading_exchange"
                            />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input
                                type="text"
                                :placeholder="stock_amount_plcHolder"
                                v-model="orderData.stock_amount"
                            />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input
                                type="text"
                                :placeholder="total_price_plcHolder"
                                v-model="orderData.total_price"
                            />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input
                                type="text"
                                :placeholder="trading_fee_plcHolder"
                                v-model="orderData.trading_fee"
                            />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input
                                type="date"
                                v-model="orderData.execution_date"
                            />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <button type="button" @click="createOrder">Submit</button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            orderData: {
                stock_id: "",
                trading_exchange: "",
                stock_amount: "",
                total_price: "",
                trading_fee: "",
                execution_date: ""
            },
            stock_id_plcHolder: "TODO from URI",
            trading_exchange_plcHolder: "Choose exchange",
            stock_amount_plcHolder: "Pick amount",
            total_price_plcHolder: "Total price",
            trading_fee_plcHolder: "Trading fee"
        };
    },
    methods: {
        async createOrder() {
            await this.$store.dispatch("ordersModule/Create", this.orderData);
            console.log(this.orderData);
            this.$router.push({ name: "Account" });
        }
    }
};
</script>
