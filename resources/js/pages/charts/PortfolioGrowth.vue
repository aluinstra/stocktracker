<template>
    <div>
        <canvas id="myChart"></canvas>
    </div>
</template>

<script>
import Chart from "chart.js/auto";

export default {
    methods: {
        capitalAccumulation() {
            let accumulatedWealth = 0;
            const data = this.$store.getters["ordersModule/getAll"];

            data.forEach(element => {
                accumulatedWealth += element.stock_amount;
            });
        }
    },
    mounted() {
        console.log("Component mounted.");

        const ctx = document.getElementById("myChart");

        const myChart = new Chart(ctx, {
            type: "line",
            data: {
                labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                datasets: [
                    {
                        label: "# of Votes",
                        // data: [12, 19, 3, 5, 2, 3],
                        data: this.capitalAccumulation(),
                        backgroundColor: ["rgba(255, 99, 132, 0.2)"],
                        borderColor: ["rgba(255, 99, 132, 1)"],
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        myChart;
    }
};
</script>
