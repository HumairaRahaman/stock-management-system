<script setup>
import {ref, reactive} from "vue";
import {Head} from "@inertiajs/vue3";
import Navbar from "@/Components/Navbars/AdminNavbar.vue";
import Table from "@/Components/Cards/CardTable.vue";

const props = defineProps({
  products: {},
});
</script>

<template>
  <Head title="Product"/>
  <div class="container mx-auto px-4 h-full">
    <Navbar></Navbar>
    <Table :products="products"></Table>
  </div>
</template>
