<template>
  <!-- Navbar -->
  <nav
    class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4"
  >
    <div
      class="w-full mx-autp items-start flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4"
    >
<!--        v-if="$page.props.auth.user"-->
      <!-- Brand -->
        <div class="flex justify-between basis-[20%] ">
            <Link
                :href="route('dashboard')"
                class="text-dark text-sm uppercase hidden lg:inline-block font-semibold"
            >Dashboard
            </Link
            >
            <Link
                :href="route('addProduct')"
                class="text-dark text-sm uppercase hidden lg:inline-block font-semibold"
            >Add Product
            </Link
            >
            <Link
                :href="route('stock')"
                class="text-dark text-sm uppercase hidden lg:inline-block font-semibold"
            >Check Stock
            </Link
            >
            <Link
                :href="route('logout')"
                method="post"
                class="text-dark text-sm uppercase hidden lg:inline-block font-semibold"
            >Logout
            </Link
            >
        </div>
        <div>
            <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
                <user-dropdown />
            </ul>
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
