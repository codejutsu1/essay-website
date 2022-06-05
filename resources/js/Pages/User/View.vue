<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import UserDashboard from '@/Layouts/UserDashboard.vue';

const props = defineProps({
  fileDetails : Object,
});

</script>

<template>
    <UserDashboard>
        <Head title="View order" />

        <main class="h-full overflow-y-auto z-30">
          <div class="container px-6 mx-auto grid">
            <h2
              class="mt-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              If in docx, it will download automatically.
            </h2>
            <div class="bg-gray-800 px-4 py-10 my-10">
                <h1 class="text-3xl pt-2 pb-8 text-white">{{ fileDetails.orderId }}</h1>
                <iframe width="500" height="500" :src="'/storage/document/received/' + fileDetails.oldFile" frameborder="0"></iframe>
            </div>
          </div>
        </main>

    </UserDashboard>
</template>

<style>
  main{
    display: block;
  }
</style>
