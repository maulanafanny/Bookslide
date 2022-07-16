import Chart from "chart.js/auto";
import { toInteger } from "lodash";

const books = document.getElementById('books').innerText;
const users = document.getElementById('users').innerText;
const transactions = document.getElementById('transactions').innerText;
const sold = document.getElementById('sold').innerText;

const ctx = document.getElementById("dashChart").getContext("2d");
const myChart = new Chart(ctx, {
    type: "bar",
    data: {
        labels: ["Buku", "User", "Transaksi", "Terjual"],
        datasets: [
            {
                label: "Total Keseluruhan",
                data: [books, users, transactions, sold],
                backgroundColor: [
                    "rgba(255, 99, 132, 0.2)",
                    "rgba(108, 117, 125, 0.2)",
                    "rgba(54, 162, 235, 0.2)",
                    "rgba(75, 192, 192, 0.2)",
                ],
                borderColor: [
                    "rgba(255, 99, 132, 1)",
                    "rgba(108, 117, 125, 1)",
                    "rgba(54, 162, 235, 1)",
                    "rgba(75, 192, 192, 1)",
                ],
                borderWidth: 1,
            },
        ],
    },
    options: {
        animations: {
            y: {
                duration: 3000,
                from: toInteger(sold)
            }
        },
        scales: {
            y: {
                beginAtZero: true,
            },
        },
    },
});
