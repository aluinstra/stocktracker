<template>
    <div>
        <h1>Show a single stock</h1>
        <div>
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
        <button type="button" @click="editOrder(stock.id)">
            Edit
        </button>
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
