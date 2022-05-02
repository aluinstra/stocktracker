<template>
    <div>
        <canvas id="myChart"></canvas>
    </div>
</template>

<script>
import Chart from "chart.js/auto";

export default {
    computed: {
        labels() {
            let accumulatedWealth = 0;
            let executionDates = new Array();
            let labels = new Array();
            let prices = new Array();

            const data = this.$store.getters["ordersModule/getAll"];

            data.forEach(element => {
                let year = element.execution_date.substring(0, 4);
                accumulatedWealth += element.total_price;
                prices.push(accumulatedWealth);
                executionDates.push(element.execution_date);
                if (!labels.includes(year)) {
                    labels.push(year);
                    // console.log(year);
                }
            });
            // fill in intermediate years, because of years without action
            return this.fillWithoutGaps(labels);
        }
    },
    methods: {
        fillWithoutGaps(labels) {
            const min = Math.min(...labels);
            const max = Math.max(...labels);
            console.log(max);
            const years = new Array();
            for (let i = min; i <= max; i++) {
                years.push(i);
            }
            console.log(years);
            return years;
        }
    },
    mounted() {
        console.log("Component mounted.");

        const ctx = document.getElementById("myChart");

        const myChart = new Chart(ctx, {
            type: "line",
            data: {
                labels: this.labels,
                datasets: [
                    {
                        label: "# of Votes",
                        data: [12, 19, 3, 5, 2, 3, 18],
                        // data: this.capitalAccumulation(),
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
