<template>
    <div>
        <h1>Edit {{ order.id }}</h1>
        <div>
            <table class="table">
                <tbody>
                    <tr>
                        <td>
                            {{ orderData.id }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" v-model="orderData.stock_id" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <multiselect
                                v-model="orderData.trading_exchange"
                                :options="trading_Exchanges"
                                :multiple="false"
                                :close-on-select="false"
                                :clear-on-select="false"
                                :preserve-search="true"
                                placeholder="Pick some"
                            >
                            </multiselect>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input
                                type="text"
                                v-model="orderData.stock_amount"
                            />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input
                                type="text"
                                v-model="orderData.total_price"
                            />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input
                                type="text"
                                v-model="orderData.trading_fee"
                            />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input
                                type="text"
                                v-model="orderData.execution_date"
                            />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <button type="button" @click="submitEditing()">
                Submit
            </button>
        </div>
    </div>
</template>

<script>
import Multiselect from "vue-multiselect";
export default {
    components: { Multiselect },
    data() {
        return {
            orderData: {},
            trading_Exchanges: ["EAM", "NSY", , "NDQ"]
        };
    },
    methods: {
        submitEditing() {
            this.$store.dispatch("ordersModule/Update", this.orderData);

            this.$router.push({ name: "OrderIndex" });
        }
    },
    computed: {
        order() {
            const data = this.$store.getters["ordersModule/getById"](
                parseInt(this.$route.params.id)
            );
            if (!data) {
                return {};
            }
            this.orderData = JSON.parse(JSON.stringify(data));
            return data;
        }
    },
    mounted() {
        this.$store.dispatch("ordersModule/setAll");
    }
};
</script>
