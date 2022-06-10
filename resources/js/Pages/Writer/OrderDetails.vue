<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Dashboard from '@/Layouts/WriterDashboard.vue';

const props = defineProps({
    order: Object,
});

console.log(props.order);
</script>

<template>
    <Dashboard>
        <Head title="Order Details" />

        <main class="h-full overflow-y-auto z-30">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Order Details
            </h2>
      
                <div class="bg-gray-800 px-6 py-10 w-full md:w-3/5 mx-auto rounded-md">
                    <ul class="text-lg text-gray-200 font-semibold tracking-wider">
                        <li class="flex justify-between pb-6 border-b border-b-gray-100">
                            <span>Order Id</span>
                            <span>{{ order.order.orderId }}</span>
                        </li>
                        <li class="flex justify-between py-4 border-b border-b-gray-100">
                            <span>Topic</span>
                            <span>{{ order.order.topic }}</span>
                        </li>
                        <li class="flex justify-between py-4 border-b border-b-gray-100">
                            <span>Type</span>
                            <span>{{ order.order.mode }}</span>
                        </li>
                        <li class="flex justify-between py-4 border-b border-b-gray-100">
                            <span>Pages</span>
                            <span>{{ order.order.essay_number }} Pages / {{ order.order.essay_number * 275 }} Words</span>
                        </li>
                        <li class="flex justify-between py-4 border-b border-b-gray-100">
                            <span>Instructions</span>
                            <span>{{ order.order.instructions }}</span>
                        </li>
                        <li class="flex justify-between py-4 border-b border-b-gray-100">
                            <span>Status</span>
                            <span v-if="order.completed">Completed</span>
                            <span v-else-if="order.completed == 0">Rejected</span>
                            <span v-else>Pending</span>
                        </li>
                        <li class="flex justify-between py-4 border-b border-b-gray-100">
                            <span>Date Sent</span>
                            <span>{{ order.order.created_at }}</span>
                        </li>
                        <li class="flex justify-between py-4 border-b border-b-gray-100">
                            <span>Date Received</span>
                            <span>{{ order.date_submitted ?? 'NULL' }}</span>
                        </li>
                    </ul>
                </div>
          </div>
        </main>

    </Dashboard>
</template>

<style>
  main{
    display: block;
  }
</style>
