<template>
  <!-- Navbar -->
  <nav
    class="absolute bg-cyan-200 rounded-bl-lg shadow rounded-br-lg bg-opacity-25 top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4"
  >
    <div
      class="w-full mx-autp items-start flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4"
    >
<!--        v-if="$page.props.auth.user"-->
      <!-- Brand -->
        <div class="flex  space-x-4 basis-[45%] ">
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="text-sky-800 hover:text-white  hover:bg-sky-300 hover:px-2 hover:py-2 hover:rounded hover:shadow hover:duration-300 hover:delay-150 transition duration-700 ease-in-out  md:text-md text-sm uppercase hidden lg:inline-block font-semibold"
            >Dashboard
            </Link
            >
            <Link
                v-if="$page.props.auth.user"
                :href="route('product')"
                class="text-sky-800 hover:text-white  hover:bg-sky-300 hover:px-2 hover:py-2 hover:rounded hover:shadow hover:duration-300 hover:delay-150 transition duration-700 ease-in-out  md:text-md text-sm uppercase hidden lg:inline-block font-semibold"
            >Products
            </Link
            >
            <Link
                v-if="$page.props.auth.user"
                :href="route('stock')"
                class="text-sky-800 hover:text-white  hover:bg-sky-300 hover:px-2 hover:py-2 hover:rounded hover:shadow hover:duration-300 hover:delay-150 transition duration-700 ease-in-out  md:text-md text-sm uppercase hidden lg:inline-block font-semibold"
            >Stock
            </Link
            >
            <Link
                v-if="$page.props.auth.user"
                :href="route('logout')"
                method="post"
                class="text-white  bg-sky-300 px-2 py-2 rounded shadow hover:duration-300 hover:delay-150 transition duration-700 ease-in-out  md:text-md text-sm uppercase hidden lg:inline-block font-semibold"
            >Logout
            </Link
            >
            <Link
                v-if="!$page.props.auth.user"
                :href="route('login')"
                class="text-white  bg-sky-300 px-2 py-2 rounded shadow hover:duration-300 hover:delay-150 transition duration-700 ease-in-out  md:text-md text-sm uppercase hidden lg:inline-block font-semibold"
            >Login
            </Link
            >
            <Link
                :href="route('register')"
                v-if="!$page.props.auth.user"
                class="text-white  bg-sky-300 px-2 py-2 rounded shadow hover:duration-300 hover:delay-150 transition duration-700 ease-in-out  md:text-md text-sm uppercase hidden lg:inline-block font-semibold"
            >Register
            </Link
            >
        </div>
        <div>
           <h2 class="text-indigo-600 text-xl font-semibold ">Stock Management</h2>
        </div>

    </div>
  </nav>
  <!-- End Navbar -->
</template>

<script setup>
import UserDropdown from "@/Components/Dropdowns/UserDropdown.vue";
import {Link} from "@inertiajs/vue3";
defineProps({
    canLogin: {
        type: Boolean,
    },
    canLogout: {
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
