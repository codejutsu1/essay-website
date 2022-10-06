<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Dashboard from '@/Layouts/WriterDashboard.vue';

const props = defineProps({
  total_orders: Number,
  pending_orders: Number,
  completed_orders: Number,
  rejected_orders: Number
})

</script>

<template>
    <Dashboard>
        <Head title="Dashboard" />

        <main class="h-full overflow-y-auto z-30">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Dashboard
            </h2>
      
            <!-- Cards -->
            <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
              <!-- Card -->
              <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
              >
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                  >
                    Total Orders
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                  >
                    {{ total_orders }}
                  </p>
                </div>
              </div>
              <!-- Card -->
              <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
              >
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                  >
                    Pending Orders
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                  >
                    {{ pending_orders }}
                  </p>
                </div>
              </div>
              <!-- Card -->
              <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
              >
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                  >
                    Completed Orders
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                  >
                    {{ completed_orders }}
                  </p>
                </div>
              </div>
              <!-- Card -->
              <div
                class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
              >
                <div>
                  <p
                    class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
                  >
                    Rejected Orders
                  </p>
                  <p
                    class="text-lg font-semibold text-gray-700 dark:text-gray-200"
                  >
                    {{ rejected_orders }}
                  </p>
                </div>
              </div>
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
