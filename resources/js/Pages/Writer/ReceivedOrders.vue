<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Dashboard from '@/Layouts/WriterDashboard.vue';
import Notification from '@/Components/Notification.vue';
import Pagination from '@/Components/Pagination.vue';

const props = defineProps({
  orders : Object,
});

</script>

<template>
    <div v-if="$page.props.flash.message" class="absolute top-8 right-10 z-40">
        <Notification :message="$page.props.flash.message" />
    </div>
    <Dashboard>
        <Head title="Received Orders" />
        <main class="h-full overflow-y-auto z-30">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Here are your orders, you can accept or reject
            </h2>

            <div>
            <div class="w-full overflow-hidden rounded-lg shadow-xs pb-10">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-300 dark:bg-gray-800"
                    >
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
                    <tr v-for="order in orders.data" :key="order.id" class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3 text-sm">
                        <Link :href="route('order.details.writer', order.id)">
                            {{ order.order.orderId }}
                        </Link>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{ order.order.topic }}
                      </td>
                      <td class="px-4 py-3 text-xs">
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
                        {{ order.order.created_at }}
                      </td>
                      <td class="px-4 py-3">
                        <div class="flex items-center space-x-4 text-sm">
                          <Link
                            class="flex items-center justify-between px-2 py-2 text-sm font-semibold leading-5 text-purple-600 rounded-lg dark:text-green-200 dark:bg-green-700 focus:outline-none focus:shadow-outline-gray"
                            aria-label="Edit"
                            onclick="return confirm('Do you want to accept this order?')"
                            :href="route('accept.order', order.id)"
                          >
                            Accept
                          </Link>
                          <Link
                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-red-700 focus:outline-none focus:shadow-outline-gray"
                            aria-label="Delete"
                            onclick="return confirm('Do you want to reject this order?')"
                            :href="route('reject.order', order.id)"
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
                          </Link>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div
                  class="flex justify-center items-center mt-6 px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
              >
                  <Pagination :links="orders.links" />
              </div>
            </div>
            </div>
          </div>
        </main>
       
    </Dashboard>
</template>