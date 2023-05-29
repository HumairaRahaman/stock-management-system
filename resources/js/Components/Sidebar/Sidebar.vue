<template>
  <nav
    class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6"
  >
    <div
      class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto"
    >
      <!-- Toggler -->
      <button
        class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none  rounded border border-solid border-transparent"
        type="button"
        v-on:click="toggleCollapseShow('bg-white m-2 py-3 px-6')"
      >
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>

      </button>
      <!-- Brand -->

        <Link
            v-if="$page.props.auth.user"
            :href="route('dashboard')"
            class="text-xl font-bold text-amber-500"
        >
            <a
            >
                Dashboard
            </a>
        </Link>
      <ul class="md:hidden items-center flex flex-wrap list-none">
        <li class="inline-block relative">

        </li>
        <li class="inline-block relative">

        </li>
      </ul>
      <!-- Collapse -->
      <div
        class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded"
        v-bind:class="collapseShow"
      >
          <!-- Collapse header -->
        <div
          class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200"
        >
          <div class="flex flex-wrap">
            <div class="w-full flex justify-end">
              <button
                type="button"
                class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                v-on:click="toggleCollapseShow('hidden')"
              >
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->

        <!-- Heading -->
        <h6
          class="md:min-w-full text-cyan-500 font-semibold text-md text-blueGray-500  uppercase font-bold block pt-1 pb-4 no-underline"
        >
          Admin Layout Pages
        </h6>
        <!-- Navigation -->

        <ul class="md:flex-col md:min-w-full flex flex-col list-none">

          <li class="items-center">
            <Link
                v-if="$page.props.auth.user"
                :href="route('addProduct')"
            >
              <a
                  class=" text-pink-600 text-md font-semibold"
              >
                Add Product
              </a>
            </Link>
          </li>
          <li class="items-center">
            <Link
                v-if="$page.props.auth.user"
                :href="route('stock')"
            >
              <a
                  class=" text-indigo-600 text-md font-semibold"
              >
                  Check Stock
              </a>
            </Link>
          </li>


        </ul>

        <!-- Divider -->
        <!-- Navigation -->

        <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
          <li class="items-center">

              <Link
                  :href="route('logout')"
                  method="post"
                  class="text-dark text-sm uppercase hidden lg:inline-block font-semibold"
              >
                  <a
                      class=" text-lime-600 text-md font-semibold ">Logout</a>

              </Link
              >
          </li>

        </ul>

      </div>
    </div>
  </nav>
</template>
); }

<script setup>
import { ref } from 'vue';
// import NotificationDropdown from "@/Components/Dropdowns/NotificationDropdown.vue";
// import UserDropdown from "@/Components/Dropdowns/UserDropdown.vue";
import {Link} from "@inertiajs/vue3";

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

const collapseShow = ref('hidden');

function toggleCollapseShow(classes) {
    collapseShow.value = classes;
}
</script>




