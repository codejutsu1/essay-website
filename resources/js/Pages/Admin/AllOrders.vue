<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Dashboard from '@/Layouts/AdminDashboard.vue';
import Pagination from '@/Components/Pagination.vue';

const props = defineProps({
  allOrders: Object
});


</script>

<template>
    <Dashboard>
        <Head title="All Orders" />

        <main class="h-full overflow-y-auto z-30">
            <div class="container px-6 mx-auto grid">
                <h2
                    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
                >
                    All Orders
                </h2>
      
                <div>
                    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full whitespace-no-wrap">
                                <thead>
                                    <tr
                                        class="font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-300 dark:bg-gray-800"
                                    >
                                        <th class="px-4 py-3">Order-ID</th>
                                        <th class="px-4 py-3">Writers ID</th>
                                        <th class="px-4 py-3">Reference ID</th>
                                        <th class="px-4 py-3">Status</th>
                                        <th class="px-4 py-3">Amount</th>
                                        <th class="px-4 py-3">Initial Date</th>
                                        <th class="px-4 py-3">Final Date</th>
                                    </tr>
                                </thead>
                                <tbody
                                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                                >
                                    <tr v-for="order in allOrders.data" :key="order.id" class="text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3 text-sm">
                                            <Link :href="route('order.details', order.order.id)">
                                                {{ order.order.orderId }}
                                            </Link>
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            <Link :href="route('user.details', order.user_id)">
                                                <p class="font-semibold">{{ order.user.name }}</p>
                                            </Link>
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            {{ order.order.referenceId ?? 'NULL'}}
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            <span
                                                v-if="order.completed"
                                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                                            >
                                                Confirmed
                                            </span>
                                            <span
                                                v-else
                                                class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:bg-orange-700 dark:text-orange-100"
                                            >
                                                Pending
                                            </span>
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            ${{ order.order.amount ?? '0.00' }}
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            {{ order.order.created_at }}
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            {{ order.date_submitted ?? 'NULL' }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div
                            class="flex justify-center items-center mt-6 px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <Pagination :links="allOrders.links" />
                        </div>
                    </div>
                </div>
            </div>
        </main>
       
    </Dashboard>
</template>