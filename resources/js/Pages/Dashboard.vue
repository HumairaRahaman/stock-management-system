<script setup>
import AuthenticatedLayout from '@/Layout/Auth.vue';
import Sidebar from "@/Components/Sidebar/Sidebar.vue";
import Navbar from "@/Components/Navbars/AdminNavbar.vue";
import HeaderStats from "@/Components/Headers/HeaderStats.vue";
import CardLineChart from "@/Components/Cards/CardLineChart.vue";
import CardBarChart from "@/Components/Cards/CardBarChart.vue";
import CardPageVisits from "@/Components/Cards/CardPageVisits.vue";
import CardSocialTraffic from "@/Components/Cards/CardSocialTraffic.vue";

import {Head, Link} from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />
    <div>
        <div class="flex flex-wrap">
            <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
                <card-line-chart />
            </div>
            <div class="w-full xl:w-4/12 px-4">
                <card-bar-chart />
            </div>
        </div>
        <div class="flex flex-wrap mt-4">
            <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
                <card-page-visits />
            </div>
            <div class="w-full xl:w-4/12 px-4">
                <card-social-traffic />
            </div>
        </div>
    </div>
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div>
            <sidebar></sidebar>
            <div
                class="relative md:ml-64 bg-blueGray-100"
            >
                <navbar></navbar>
                <header-stats></header-stats>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
