<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Dashboard from '@/Layouts/WriterDashboard.vue';

const props = defineProps({
  orders : Object,

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
                                        <th class="px-4 py-3">Topic</th>
                                        <th class="px-4 py-3">Old File</th>
                                        <th class="px-4 py-3">New File</th>
                                        <th class="px-4 py-3">Status</th>
                                        <th class="px-4 py-3">Initial Date</th>
                                        <th class="px-4 py-3">Final Date</th>
                                        <th class="px-4 py-3">Actions</th>
                                    </tr>
                                </thead>
                                <tbody
                                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                                >
                                    <tr v-for="order in orders" :key="order.id" class="text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3 text-sm">
                                            <Link :href="route('order.details.writer', order.id)">
                                                {{ order.order.orderId }}
                                            </Link>
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            {{ order.order.topic }}
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            <div v-if="order.order.oldFile" class="flex justify-between">
                                                <Link
                                                    :href="route('view.file', order.order.id)"
                                                >
                                                    <img src="/images/view.png" alt="View">
                                                </Link>
                                            </div>
                                            <span v-else>NULL</span>
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            <div v-if="order.newFile" class="flex justify-between">
                                                <Link
                                                    :href="route('view.file', order.id)"
                                                >
                                                    <img src="/images/view.png" alt="View">
                                                </Link>
                                            </div>
                                            <span v-else>NULL</span>
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            <span
                                                v-if="order.completed"
                                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                                            >
                                                Completed
                                            </span>
                                            <span v-else
                                                class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600"
                                            >
                                                Pending
                                            </span>
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            {{ order.order.created_at }}
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            {{ order.date_submitted ?? 'NULL' }}
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            <Link :href="route('upload.order', order.id)" class="flex items-center justify-center p-4 bg-gray-800 hover:bg-gray-900 transition duration-300 rounded-lg text-sm shadow-xs font-semibold text-green-200">
                                                Add new File
                                            </Link>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div
                            class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <span class="flex items-center col-span-3">
                            Showing 21-30 of 100
                            </span>
                            <span class="col-span-2"></span>
                            <!-- Pagination -->
                            <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                            <nav aria-label="Table navigation">
                                <ul class="inline-flex items-center">
                                <li>
                                    <button
                                    class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                                    aria-label="Previous"
                                    >
                                    <svg
                                        aria-hidden="true"
                                        class="w-4 h-4 fill-current"
                                        viewBox="0 0 20 20"
                                    >
                                        <path
                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                        clip-rule="evenodd"
                                        fill-rule="evenodd"
                                        ></path>
                                    </svg>
                                    </button>
                                </li>
                                <li>
                                    <button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                    >
                                    1
                                    </button>
                                </li>
                                <li>
                                    <button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                    >
                                    2
                                    </button>
                                </li>
                                <li>
                                    <button
                                    class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple"
                                    >
                                    3
                                    </button>
                                </li>
                                <li>
                                    <button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                    >
                                    4
                                    </button>
                                </li>
                                <li>
                                    <span class="px-3 py-1">...</span>
                                </li>
                                <li>
                                    <button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                    >
                                    8
                                    </button>
                                </li>
                                <li>
                                    <button
                                    class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                    >
                                    9
                                    </button>
                                </li>
                                <li>
                                    <button
                                    class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                    aria-label="Next"
                                    >
                                    <svg
                                        class="w-4 h-4 fill-current"
                                        aria-hidden="true"
                                        viewBox="0 0 20 20"
                                    >
                                        <path
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"
                                        fill-rule="evenodd"
                                        ></path>
                                    </svg>
                                    </button>
                                </li>
                                </ul>
                            </nav>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </main>
       
    </Dashboard>
</template>