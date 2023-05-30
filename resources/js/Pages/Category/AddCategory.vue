<script setup>
import  Navbar from '@/Components/Navbars/AdminNavbar.vue';
import {ref,reactive} from "vue";
import {Head} from "@inertiajs/vue3";
const product_type = ref('');
const product_item = ref('');
const show = ref(false);
const add_quantity = ref('');
const quantity = ref('');
const row = reactive([
    { product_type : 0, product_item: 0, add_quantity: 0, quantity: 0}
])
const productTypeList = ref([{type: 'Computer', item: 'laptop'}, {type: 'Headphone', item: 'iPot'}, {
    type: 'Phone',
    item: 'iPhone'
}]);
const productItemList = ref([{text: 'en', lang: 'english'}, {text: 'de', lang: 'deutsch'}, {
    text: 'it',
    lang: 'italian'
}]);

const addRow = () => {
    show.value = true;
    row.push({  product_type : '', product_item: '', add_quantity: '', quantity: ''})
}

const removeRow = (index) =>{
    if(row.length > 1){
        row.splice(index,1)
    }
}

const changeProductType = () => {
    console.log("Called>>>>", product_type.value);
};
const changeProductItem = () => {

    console.log("Called>>>>", product_item.value);
};
const submit = () =>{
    console.log('hi');
}



</script>

<template>
    <Head title=" Product-Inventory"/>
    <div class="container   mx-auto px-4 h-full">
        <Navbar></Navbar>
        <div class="flex content-center items-center mt-24 justify-center h-full">
            <div class="w-full lg:w-full px-4">
                <div
                    class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0"
                >
                    <div class="rounded-t mb-0 px-6 py-6">
                        <div class="text-center mb-3">
                            <h6 class="text-amber-600 text-2xl font-bold">
                                 Category
                            </h6>
                        </div>
                        <hr class="mt-6 border-b-1 border-blueGray-300"/>
                    </div>
                    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">

                        <form @submit.prevent="submit" class="w-full ">
                            <div >
                                <div v-for="item,index in row" :key="item" class="w-full flex space-x-6 justify-between">

                                    <div class="relative w-full mb-3">
                                        <label
                                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password"
                                        >
                                            Name
                                        </label>
                                        <input

                                            type="text"
                                            class=" px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-emerald-600 border border-emerald-600 w-full ease-linear transition-all duration-150"
                                            placeholder="name"
                                        />
                                    </div>
                                    <div class="relative w-full mb-3">
                                        <label
                                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlFor="grid-password"
                                        >
                                            Description
                                        </label>
                                        <input

                                            type="number"
                                            class=" px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring-emerald-600 border border-emerald-600 w-full ease-linear transition-all duration-150"
                                            placeholder="description"
                                        />
                                    </div>

                                    <div v-if="show===true" class="text-center mt-6">
                                        <button
                                            @click="removeRow(index)"
                                            class="bg-blueGray-800 text-white  active:bg-white bg-red-600 font-semibold text-sm hover:text-red-600 hover:bg-white active:text-red-700 hover:border hover:border-red-600 active:border active:border-red-600 uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                                            type="button"
                                        >
                                            Delete
                                        </button>
                                    </div>
                                </div>
                                <div class="text-end mt-6">
                                    <button
                                        @click="addRow"
                                        class="bg-blueGray-800 text-white  active:bg-white bg-green-600 font-semibold text-sm hover:text-green-600 hover:bg-white active:text-green-700 hover:border hover:border-green-600 active:border active:border-green-600 uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-1/6 ease-linear transition-all duration-150"
                                        type="button"
                                    >
                                        Add More
                                    </button>
                                </div>
                            </div>
                            <div class="text-center mt-6">
                                <button
                                    class="bg-blueGray-800 text-white  active:bg-white bg-cyan-600 font-semibold text-sm hover:text-cyan-600 hover:bg-white active:text-cyan-700 hover:border hover:border-cyan-600 active:border active:border-cyan-600 uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-1/6 ease-linear transition-all duration-150"
                                    type="button"
                                >
                                    Save
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
