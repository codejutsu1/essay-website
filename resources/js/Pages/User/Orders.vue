<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import UserDashboard from '@/Layouts/UserDashboard.vue';
import Pagination from '@/Components/Pagination.vue';

const props = defineProps({
    orders: Object,
});

</script>

<template>
    <UserDashboard>
        <Head title="Your Orders" />

        <main class="h-full overflow-y-auto z-30">
          <div class="container px-6 mx-auto grid">
            <h2
              class="mt-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Your Orders
            </h2>

            <div class="w-full overflow-hidden rounded-lg shadow-xs py-10">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-300 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">Order-ID</th>
                      <th class="px-4 py-3">Topic</th>
                      <th class="px-4 py-3">Mode</th>
                      <th class="px-4 py-3">Status</th>
                      <th class="px-4 py-3">Old File</th>
                      <th class="px-4 py-3">New File</th>
                      <th class="px-4 py-3">Date Sent</th>
                      <th class="px-4 py-3">Date Received</th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                    <tr v-for="order in orders.data" :key="order.id" class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3 text-sm">
                        {{ order.order.orderId }}
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{ order.order.topic }}
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{ order.order.mode }}
                        <p>( {{ order.order.essay_number }} Pages )</p>
                      </td>
                      <td class="px-4 py-3 text-xs">
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
                      <td class="px-4 py-3 text-xs">
                        <div v-if="order.order.oldFile" class="flex justify-between">
                            <Link
                                :href="route('view.file.user', order.order.id)"
                            >
                                <img src="/images/view.png" alt="View">
                            </Link>
                        </div>
                        <span v-else>NULL</span>
                      </td>
                      <td class="px-4 py-3 text-xs">
                        <div v-if="order.newFile" class="flex justify-between">
                            <Link
                                :href="route('view.new.file.user', order.id)"
                            >
                                <img src="/images/view.png" alt="View">
                            </Link>
                        </div>
                        <span v-else>NULL</span>
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
                  <Pagination :links="orders.links" />
              </div>
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
