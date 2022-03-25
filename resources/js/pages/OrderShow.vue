<template>
    <div>
        <div class="row my-4">
            <div class="col-12 col-xl-12 col-lg-3 mb-4 mb-lg-0">
                <div class="card">
                    <h5 class="card-header">Order Show</h5>
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>id</td>
                                    <td>{{ order.id }}</td>
                                </tr>
                                <tr>
                                    <td>stock ID</td>
                                    <td>{{ order.stock_id }}</td>
                                </tr>
                                <tr>
                                    <td>trading exchange</td>
                                    <td>{{ order.trading_exchange }}</td>
                                </tr>
                                <tr>
                                    <td>stock amount</td>
                                    <td>{{ order.stock_amount }}</td>
                                </tr>
                                <tr>
                                    <td>total price</td>
                                    <td>{{ order.total_price }}</td>
                                </tr>
                                <tr>
                                    <td>trading fee</td>
                                    <td>{{ order.trading_fee }}</td>
                                </tr>
                                <tr>
                                    <td>execution date</td>
                                    <td>{{ order.execution_date }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <button type="button" @click="editOrder(order.id)">
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
                name: "OrderEdit",
                params: { id: this.$route.params.id }
            });
        }
    },
    computed: {
        order() {
            return this.$store.getters["ordersModule/getById"](
                parseInt(this.$route.params.id)
            );
        }
    },
    mounted() {
        this.$store.dispatch("ordersModule/setAll");
    }
};
</script>
