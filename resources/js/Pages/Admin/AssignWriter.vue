<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Dashboard from '@/Layouts/AdminDashboard.vue';
import Notification from '@/Components/Notification.vue';
import Pagination from '@/Components/Pagination.vue';


const props = defineProps({
  writers: Object,
  id: String,
});


</script>

<template>
    <Dashboard>
        <Head title="Assign to a Writer" />

        <main class="h-full overflow-y-auto z-30">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Here are list of all writers
            </h2>
      
            <div>
            <div class="w-full overflow-hidden rounded-lg shadow-xs pb-10">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-300 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">Name</th>
                      <th class="px-4 py-3">Completed Orders</th>
                      <th class="px-4 py-3">Pending Orders</th>
                      <th class="px-4 py-3">Rejected Orders</th>
                      <th class="px-4 py-3">Total Orders</th>
                      <th class="px-4 py-3">Actions</th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                    <tr v-for="writer in writers.data" :key="writer.id" class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <div>
                            <p class="font-semibold">{{ writer.name }}</p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        0
                      </td>
                      <td class="px-4 py-3 text-sm">
                        10
                      </td>
                      <td class="px-4 py-3 text-xs">
                        2
                      </td>
                      <td class="px-4 py-3 text-xs">
                        12
                      </td>
                      <td class="px-4 py-3">
                        <div class="flex items-center space-x-4 text-sm">
                          <Link
                            class="flex items-center justify-between px-2 py-2 text-sm font-semibold leading-5 dark:text-white dark:bg-green-600 focus:outline-none focus:shadow-outline-gray"
                            aria-label="Edit"
                            onclick="return confirm('Confirm you want to assign to this writer?')"
                            :href="route('assign.writers', {'writerId' : writer.id, 'id': id})"
                          >
                            Assign
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
                  <Pagination :links="writers.links" />
              </div>
            </div>
            </div>
          </div>
        </main>
       
    </Dashboard>
</template>