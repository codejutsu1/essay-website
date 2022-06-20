<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Dashboard from '@/Layouts/AdminDashboard.vue';
import { ref, onMounted } from 'vue';
import Notification from '@/Components/Notification.vue';
import Pagination from '@/Components/Pagination.vue';

const props = defineProps({
  newOrders : Object,
  pendingOrders: Object,
});

const showTable = ref(true);

function newOrder(){
  showTable.value = true
}

function pendingOrder(){
  showTable.value = false
}

</script>

<template>
  <div v-if="$page.props.flash.message" class="absolute top-8 right-10 z-40">
    <Notification :message="$page.props.flash.message" />
  </div>
    <Dashboard>
        <Head title="List of Orders" />

        <main class="h-full overflow-y-auto z-30">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Orders
            </h2>
      
            
            <div class="grid gap-6 mb-8 md:grid-cols-2">
                <button type="button" @click="newOrder" :class="{'bg-gray-900 text-gray-200': showTable, 'text-gray-400' : !showTable  }" class="flex items-center justify-center p-4 bg-gray-800 hover:bg-gray-900 transition duration-300 rounded-lg shadow-xs text-lg font-semibold">
                    New Orders
                </button>

                <button type="button" @click="pendingOrder" :class="{'bg-gray-900 text-gray-200': !showTable, 'text-gray-400' : showTable  }" class="flex items-center justify-center p-4 bg-gray-800 hover:bg-gray-900 transition duration-300 rounded-lg shadow-xs text-lg font-semibold">
                    Pending Orders
                </button>
            </div>

            <div v-show="showTable">
                 <h4
              class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
            >
              New Orders
            </h4>
            <div class="w-full overflow-hidden rounded-lg shadow-xs pb-10">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-300 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">User-ID</th>
                      <th class="px-4 py-3">Order-ID</th>
                      <th class="px-4 py-3">Topic</th>
                      <th class="px-4 py-3">File</th>
                      <th class="px-4 py-3">Date</th>
                      <th class="px-4 py-3">Actions</th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >

                    <tr v-for="order in newOrders.data" :key="order.user_id" class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div v-if="order.user_id" class="flex items-center text-sm">
                          <Link :href="route('user.details', order.user_id)">
                            <p class="font-semibold">{{ order.user.name }}</p>
                          </Link>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        <Link :href="route('order.details', order.id)">
                          {{ order.orderId }}
                        </Link>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{ order.topic }}
                      </td>
                      <td class="px-4 py-3 text-xs">
                        <div v-if="order.oldFile" class="flex justify-between">
                            <Link
                                :href="route('view.file.admin', order.id)"
                            >
                                <img src="/images/view.png" alt="View">
                            </Link>
                        </div>
                        <span v-else>NULL</span>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{ order.created_at }}
                      </td>
                      <td class="px-4 py-3">
                        <div class="flex items-center space-x-4 text-sm" >
                          <Link
                            class="flex items-center justify-between px-2 py-2 text-sm font-semibold leading-5 text-purple-600 rounded-lg dark:text-green-200 dark:bg-green-700 focus:outline-none focus:shadow-outline-gray"
                            aria-label="Edit"
                            :href="route('assign.orders', order.id)"
                          >
                            Assign
                          </Link>
                          <button
                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-red-700 focus:outline-none focus:shadow-outline-gray"
                            aria-label="Delete"
                          >
                            <svg
                              class="w-5 h-5"
                              aria-hidden="true"
                              fill="currentColor"
                              viewBox="0 0 20 20"
                            >
                              <path
                                fill-rule="evenodd"
                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                clip-rule="evenodd"
                              ></path>
                            </svg>
                          </button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
               
              <div
                class="flex justify-center items-center mt-6 px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
              >
                <Pagination :links="newOrders.links" />
              </div>
            </div>
            </div>

            <div v-show="!showTable">
            <h4
              class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
            >
              Pending Orders
            </h4>
            <div class="w-full overflow-hidden rounded-lg shadow-xs pb-10">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-300 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">Order-ID</th>
                      <th class="px-4 py-3">Writer</th>
                      <th class="px-4 py-3">Topic</th>
                      <th class="px-4 py-3">File</th>
                      <th class="px-4 py-3">Date</th>
                      <th class="px-4 py-3">Actions</th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                     <tr v-for="order in pendingOrders.data" :key="order.id" class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <div>
                            <Link :href="route('order.details', order.order.id)">
                              <p class="font-semibold">{{ order.order.orderId }}</p>
                            </Link>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                          <Link :href="route('user.details', 2)">
                              <p class="font-semibold">{{ order.user.name }}</p>
                          </Link>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{ order.order.topic }}
                      </td>
                      <td class="px-4 py-3 text-xs">
                        <div v-if="order.order.oldFile" class="flex justify-between">
                            <Link
                                :href="route('view.file.admin', order.order.id)"
                            >
                                <img src="/images/view.png" alt="View">
                            </Link>
                        </div>
                        <span v-else>NULL</span>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{ order.order.created_at }}
                      </td>
                      <td class="px-4 py-3">
                        <div class="flex items-center space-x-4 text-sm">
                          <Link
                            class="flex items-center justify-between px-2 py-2 text-sm font-semibold leading-5 text-purple-600 rounded-lg dark:text-green-200 dark:bg-green-700 focus:outline-none focus:shadow-outline-gray"
                            aria-label="Edit"
                            :href="route('assign.orders', order.order.id)"
                          >
                            Reassign
                          </Link>
                          <button
                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-red-700 focus:outline-none focus:shadow-outline-gray"
                            aria-label="Delete"
                          >
                            <svg
                              class="w-5 h-5"
                              aria-hidden="true"
                              fill="currentColor"
                              viewBox="0 0 20 20"
                            >
                              <path
                                fill-rule="evenodd"
                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                clip-rule="evenodd"
                              ></path>
                            </svg>
                          </button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div
                class="flex justify-center items-center mt-6 px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
              >
                <Pagination :links="pendingOrders.links" />
              </div>
            </div>
            </div>
          </div>
        </main>
       
    </Dashboard>
</template>