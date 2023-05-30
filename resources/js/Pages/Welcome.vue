<script setup>
import {Head, Link} from '@inertiajs/vue3';
import Footer from '@/Components/Footers/FooterAdmin.vue';
import Navbar from '@/Components/Navbars/AdminNavbar.vue';
import CardLineChart from "@/Components/Cards/CardLineChart.vue";
import CardBarChart from "@/Components/Cards/CardBarChart.vue";
import CardPageVisits from "@/Components/Cards/CardPageVisits.vue";
import CardSocialTraffic from "@/Components/Cards/CardSocialTraffic.vue";


defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    addProduct: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="Welcome"/>
    <div>
<Navbar></Navbar>
    </div>
<!--        <div-->
<!--            class="relative md:ml-64 bg-blueGray-100"-->
<!--        >-->
<!--            <div v-if="canLogin" class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">-->
<!--                <Link-->
<!--                    v-if="$page.props.auth.user"-->
<!--                    :href="route('dashboard')"-->
<!--                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"-->
<!--                >Dashboard-->
<!--                </Link-->
<!--                >-->

<!--                <template v-else>-->
<!--                    <Link-->
<!--                        :href="route('login')"-->
<!--                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"-->
<!--                    >Log in-->
<!--                    </Link-->
<!--                    >-->

<!--                    <Link-->
<!--                        v-if="canRegister"-->
<!--                        :href="route('register')"-->
<!--                        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"-->
<!--                    >Registerhh-->
<!--                    </Link-->
<!--                    >-->
<!--                    <Link-->
<!--                        :href="route('addProduct')"-->
<!--                        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"-->
<!--                    >Add Product-->
<!--                    </Link-->
<!--                    >-->
<!--                    <Link-->
<!--                        :href="route('stock')"-->
<!--                        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"-->
<!--                    >Check Stock-->
<!--                    </Link-->
<!--                    >-->
<!--                    <Link-->
<!--                        v-if="$page.props.auth.user"-->
<!--                        :href="route('logout')"-->
<!--                        methods="post"-->
<!--                        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"-->
<!--                    >Logout-->
<!--                    </Link-->
<!--                    >-->
<!--                </template>-->
<!--            </div>-->
<!--&lt;!&ndash;            <Footer></Footer>&ndash;&gt;-->

<!--&lt;!&ndash;        </div>&ndash;&gt;-->
<!--&lt;!&ndash;        <div>&ndash;&gt;-->
<!--&lt;!&ndash;            <div class="flex flex-wrap">&ndash;&gt;-->
<!--&lt;!&ndash;                <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">&ndash;&gt;-->
<!--&lt;!&ndash;                    <card-line-chart />&ndash;&gt;-->
<!--&lt;!&ndash;                </div>&ndash;&gt;-->
<!--&lt;!&ndash;                <div class="w-full xl:w-4/12 px-4">&ndash;&gt;-->
<!--&lt;!&ndash;                    <card-bar-chart />&ndash;&gt;-->
<!--&lt;!&ndash;                </div>&ndash;&gt;-->
<!--&lt;!&ndash;            </div>&ndash;&gt;-->
<!--&lt;!&ndash;            <div class="flex flex-wrap mt-4">&ndash;&gt;-->
<!--&lt;!&ndash;                <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">&ndash;&gt;-->
<!--&lt;!&ndash;                    <card-page-visits />&ndash;&gt;-->
<!--&lt;!&ndash;                </div>&ndash;&gt;-->
<!--&lt;!&ndash;                <div class="w-full xl:w-4/12 px-4">&ndash;&gt;-->
<!--&lt;!&ndash;                    <card-social-traffic />&ndash;&gt;-->
<!--&lt;!&ndash;                </div>&ndash;&gt;-->
<!--&lt;!&ndash;            </div>&ndash;&gt;-->
<!--        </div>-->
<!--    </div>-->

</template>

<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}

@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
