<script setup>
import {ref,reactive} from "vue";
import {Head} from "@inertiajs/vue3";
import Navbar from "@/Components/Navbars/AdminNavbar.vue";
import Table from "@/Components/Cards/CategoryTable.vue";


const props = defineProps({
  product_types: {},
});



</script>

<template>
    <Head title="Category"/>
    <div class="container mx-auto px-4 h-full">
        <Navbar></Navbar>
        <Table :product_types="product_types"></Table>
    </div>
</template>
