<template>
    <div>
        <div class="row my-4">
            <div class="col-12 col-xl-12 col-lg-3 mb-4 mb-lg-0">
                <div class="card">
                    <h5 class="card-header">Order overzicht</h5>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Stock id</th>
                                    <th>Trading exchange</th>
                                    <th>Stock amount</th>
                                    <th>Total price</th>
                                    <th>Trading fee</th>
                                    <th>Execution date</th>
                                    <th>Show</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="order in orders" :key="order.id">
                                    <td>{{ order.id }}</td>
                                    <td>{{ order.stock_id }}</td>
                                    <td>{{ order.trading_exchange }}</td>
                                    <td>{{ order.stock_amount }}</td>
                                    <td>{{ order.total_price }}</td>
                                    <td>{{ order.trading_fee }}</td>
                                    <td>{{ order.execution_date }}</td>
                                    <td>
                                        <button
                                            type="submit"
                                            class="btn btn-outline-warning"
                                            @click="showOrder(order.id)"
                                        >
                                            show
                                        </button>
                                    </td>
                                    <td>
                                        <button
                                            type="submit"
                                            class="btn btn-outline-danger"
                                            @click="deleteOrder(order.id)"
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
        <router-link :to="{ name: 'OrderCreate' }"
            >Create new order</router-link
        >
    </div>
</template>

<script>
export default {
    methods: {
        showOrder(orderId) {
            return this.$router.push({
                name: "OrderShow",
                params: { id: orderId }
            });
        },
        deleteFromDB(orderId) {
            this.$store.dispatch("ordersModule/deleteProduct", orderId);
        }
    },
    computed: {
        orders() {
            return this.$store.getters["ordersModule/getAll"];
        }
    },
    mounted() {
        this.$store.dispatch("ordersModule/setAll");
    }
};
</script>
