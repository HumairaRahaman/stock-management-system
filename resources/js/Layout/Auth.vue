<template>
  <div>
    <Navbar />
    <main>
      <section class="relative w-full h-full py-40 min-h-screen">
        <div
          class="absolute top-0 w-full h-full bg-blueGray-800 bg-no-repeat bg-full"
          :style="``"
        ></div>
        <router-view />
        <footer-small absolute />
      </section>
    </main>
  </div>
</template>
<script setup>
import Navbar from "@/Components/Navbars/AuthNavbar.vue";
import FooterSmall from "@/Components/Footers/FooterSmall.vue";




</script>
