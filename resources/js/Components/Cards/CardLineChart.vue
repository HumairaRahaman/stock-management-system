<template>
    <div
        class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded"
    >
        <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
            <div class="flex flex-wrap items-center">
                <div class="relative w-full max-w-full flex-grow flex-1">
                    <h6 class="uppercase text-blueGray-400 mb-1 text-xs font-semibold">
                        Performance
                    </h6>
                    <h2 class="text-blueGray-700 text-xl font-semibold">
                        Total orders
                    </h2>
                </div>
            </div>
        </div>
        <div class="p-4 flex-auto">
            <div class="relative h-350-px">
                <canvas id="myPie"></canvas>
            </div>
        </div>
    </div>

</template>
<script>
import Chart from 'chart.js/auto';
import {onMounted} from "vue";

// onMounted(()=>{
//     const ctx = document.getElementById('myPie');
//
//     new Chart(ctx, {
//         type: 'pie',
//         labels: [
//             'Red',
//             'Blue',
//             'Yellow'
//         ],
//         datasets: [{
//             label: 'My First Dataset',
//             data: [300, 50, 100],
//             backgroundColor: [
//                 'rgb(255, 99, 132)',
//                 'rgb(54, 162, 235)',
//                 'rgb(255, 205, 86)'
//             ],
//             hoverOffset: 4
//         }]
//
//         });
//     });
// const config = {
//     type: 'polarArea',
//     data: data,
//     options: {}
// };
// // </block:config>
//
// module.exports = {
//     actions: [],
//     config: config,
// };
</script>
