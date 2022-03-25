<template>
    <div>
        <div class="row my-4">
            <div class="col-12 col-xl-12 col-lg-3 mb-4 mb-lg-0">
                <div class="card">
                    <h5 class="card-header">Order Create</h5>
                    <div class="card-body">
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
                                        <div>
                                            <multiselect
                                                v-model="
                                                    orderData.trading_exchange
                                                "
                                                :options="trading_Exchanges"
                                                :multiple="false"
                                                :close-on-select="false"
                                                :clear-on-select="false"
                                                :preserve-search="true"
                                                placeholder="Pick Exchange"
                                            >
                                            </multiselect>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input
                                            type="text"
                                            :placeholder="
                                                stock_amount_plcHolder
                                            "
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
                </div>
            </div>
        </div>
        <div>
            <button type="button" @click="createOrder">Submit</button>
        </div>
    </div>
</template>

<script>
import Multiselect from "vue-multiselect";
export default {
    components: { Multiselect },
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
            trading_fee_plcHolder: "Trading fee",
            trading_Exchanges: ["EAM", "NSY", , "NDQ"],
            selected_Exchange: ""
        };
    },
    methods: {
        async createOrder() {
            await this.$store.dispatch("ordersModule/Create", this.orderData);
            console.log(this.orderData);
            this.$router.push({ name: "OrderIndex" });
        }
    },
    mounted() {
        this.$store.dispatch("stocksModule/setAll");
    }
};
</script>
