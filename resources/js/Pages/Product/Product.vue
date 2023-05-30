<script setup>
import {ref,reactive} from "vue";
import {Head} from "@inertiajs/vue3";
import Navbar from "@/Components/Navbars/AdminNavbar.vue";
import Table from "@/Components/Cards/CardTable.vue";






</script>

<template>
    <Head title="Product"/>
    <div class="container mx-auto px-4 h-full">
        <Navbar></Navbar>
        <Table></Table>
    </div>
</template>
