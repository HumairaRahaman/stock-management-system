<script setup>
import AuthenticatedLayout from '@/Layout/Auth.vue';
import Sidebar from "@/Components/Sidebar/Sidebar.vue";
import Navbar from "@/Components/Navbars/AuthNavbar.vue";
import HeaderStats from "@/Components/Headers/HeaderStats.vue";
import Footer from "@/Components/Footers/FooterAdmin.vue";
import CardLineChart from "@/Components/Cards/CardLineChart.vue";
import CardBarChart from "@/Components/Cards/CardBarChart.vue";
// import CardPageVisits from "@/Components/Cards/CardPageVisits.vue";
// import CardSocialTraffic from "@/Components/Cards/CardSocialTraffic.vue";

import {Head, Link} from '@inertiajs/vue3';
import Chart from 'chart.js/auto';
import {onMounted} from "vue";

onMounted(() => {
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
})
onMounted(() => {
    const pie = document.getElementById('myPie');

    new Chart(pie, {
        type: 'pie',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of hhhh',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
})


</script>

<template>
    <Head title="Dashboard"/>
    <template>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
    </template>

    <div>
        <sidebar></sidebar>
        <div
            class="relative md:ml-64 bg-blueGray-100"
        >
            <header-stats></header-stats>
        </div>
    </div>

    <div>
    </div>
    <div>
        <div class="flex flex-wrap justify-center ">
            <div class="w-full xl:w-4/12 mb-12 xl:mb-0 px-4">
                <card-line-chart/>
            </div>
            <div class="w-full xl:w-4/12 px-4">
                <card-bar-chart/>
            </div>
        </div>
        <Footer></Footer>
    </div>
    <!--   <AuthenticatedLayout>-->
    <!--        <template #header>-->
    <!--            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>-->
    <!--        </template>-->

    <!--        <div>-->
    <!--            <sidebar></sidebar>-->
    <!--            <div-->
    <!--                class="relative md:ml-64 bg-blueGray-100"-->
    <!--            >-->
    <!--&lt;!&ndash;                <Navbar></Navbar>&ndash;&gt;-->
    <!--                <header-stats></header-stats>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </AuthenticatedLayout>-->
</template>
