<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Dashboard from '@/Layouts/AdminDashboard.vue';
import Pagination from '@/Components/Pagination.vue';
import { ref } from 'vue';

const props = defineProps({
  completedOrders : Object,
  rejectedOrders: Object,
});


const showTable = ref(true);

function completedOrder(){
  showTable.value = true
}

function rejectedOrder(){
  showTable.value = false
}


</script>

<template>
    <Dashboard>
        <Head title="Conpleted Orders" />

        <main class="h-full overflow-y-auto z-30">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Orders
            </h2>
      
            
            <div class="grid gap-6 mb-8 md:grid-cols-2">
                <button type="button" @click="completedOrder" :class="{'bg-gray-900 text-gray-200': showTable, 'text-gray-400' : !showTable }" class="flex items-center justify-center p-4 bg-gray-800 hover:bg-gray-900 transition duration-300 rounded-lg shadow-xs text-lg font-semibold">
                    Completed Orders
                </button>

                <button type="button" @click="rejectedOrder" :class="{'bg-gray-900 text-gray-200': !showTable, 'text-gray-400': showTable }" class="flex items-center justify-center p-4 bg-gray-800 hover:bg-gray-900 transition duration-300 rounded-lg shadow-xs text-lg font-semibold">
                    Rejected Orders
                </button>
            </div>

            <div v-show="showTable">
                 <h4
                class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
                >
                Completed Orders
                </h4>
                <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                        class="font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-300 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3">User-ID</th>
                            <th class="px-4 py-3">Order-ID</th>
                            <th class="px-4 py-3">Writer</th>
                            <th class="px-4 py-3">Topic</th>
                            <th class="px-4 py-3">Date</th>
                            <th class="px-4 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody
                        class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                    >
                        <tr v-for="order in completedOrders.data" :key="order.id" class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <Link :href="route('user.details', order.order.user_id)">
                                        <p class="font-semibold">{{ order.order.user.name }}</p>
                                    </Link>
                                </div>
                            </td>
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
                                {{ order.order.topic }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ order.order.created_at }}
                            </td>
                            <td>
                                <Link 
                                    class="flex items-center justify-center p-4 bg-gray-800 hover:bg-gray-900 transition duration-300 rounded-lg text-sm shadow-xs font-semibold text-green-200"
                                    :href="route('assign.orders', order.order.id)"
                                >
                                    Reassign
                                </Link>
                            </td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                <div
                    class="flex justify-center items-center mt-6 px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
                >
                    <Pagination :links="completedOrders.links" />
                </div>
                </div>
            </div>

            <div v-show="!showTable">
                 <h4
                class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
                >
                    Rejected Orders
                </h4>
                <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                        class="font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-300 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3">User-ID</th>
                            <th class="px-4 py-3">Order-ID</th>
                            <th class="px-4 py-3">Writer</th>
                            <th class="px-4 py-3">Topic</th>
                            <th class="px-4 py-3">Date</th>
                            <th class="px-4 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody
                        class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                    >
                        <tr v-for="order in rejectedOrders.data" :key="order.id" class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                <Link :href="route('user.details', order.order.user_id)">
                                    <p class="font-semibold">{{ order.order.user.name }}</p>
                                </Link>
                                </div>
                            </td>
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
                                {{ order.order.topic }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ order.order.created_at }}
                            </td>
                            <td>
                               <Link 
                                    class="flex items-center justify-center p-4 bg-gray-800 hover:bg-gray-900 transition duration-300 rounded-lg text-sm shadow-xs font-semibold text-green-200"
                                    :href="route('assign.orders', order.order.id)"
                                >
                                    Reassign
                                </Link>
                            </td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                <div
                    class="flex justify-center items-center mt-6 px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
                >
                    <Pagination :links="rejectedOrders.links" />
                </div>
                </div>
            </div>
          </div>
        </main>
       
    </Dashboard>
</template>