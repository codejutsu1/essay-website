<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Dashboard from '@/Layouts/AdminDashboard.vue';

const props = defineProps({
    orderDetails: Object,
    completeOrder: Object
});
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
      
                <div class="bg-gray-800 px-6 py-10 w-3/5 mx-auto rounded-md">
                    <ul class="text-lg text-gray-200 font-semibold tracking-wider">
                        <li class="flex justify-between pb-6 border-b border-b-gray-100">
                            <span>Order Id</span>
                            <span>{{ orderDetails.orderId }}</span>
                        </li>
                        <li class="flex justify-between py-4 border-b border-b-gray-100">
                            <span>Writer</span>
                            <span v-if="completeOrder">
                                <span>{{ completeOrder.user.name }}</span>
                            </span>
                            <span v-else>NULL</span>
                        </li>
                        <li class="flex justify-between py-4 border-b border-b-gray-100">
                            <span>User</span>
                            <span>{{ orderDetails.user.name }}</span>
                        </li>
                        <li class="flex justify-between py-4 border-b border-b-gray-100">
                            <span>Topic</span>
                            <span>{{ orderDetails.topic }}</span>
                        </li>
                        <li class="flex justify-between py-4 border-b border-b-gray-100">
                            <span>Type</span>
                            <span>{{ orderDetails.mode }}</span>
                        </li>
                        <li class="flex justify-between py-4 border-b border-b-gray-100">
                            <span>Pages</span>
                            <span>{{ orderDetails.essay_number }} Pages / {{ orderDetails.essay_number * 275 }} Words</span>
                        </li>
                        <li class="flex justify-between py-4 border-b border-b-gray-100">
                            <span>Instructions</span>
                            <span>{{ orderDetails.instructions }}</span>
                        </li>
                        <li class="flex justify-between py-4 border-b border-b-gray-100">
                            <span>Assigned</span>
                            <span>{{ orderDetails.assigned ? 'Yes' : 'No' }}</span>
                        </li>
                        <li class="flex justify-between py-4 border-b border-b-gray-100">
                            <span>Status</span>
                            <span v-if="completeOrder">
                                <span v-if="completeOrder.completed">Completed</span>
                                <span v-else-if="completeOrder.completed == 0">Rejected</span>
                                <span v-else>Pending</span>
                            </span>
                            <span v-else>NULL</span>
                        </li>
                        <li class="flex justify-between py-4 border-b border-b-gray-100">
                            <span>Date Sent</span>
                            <span>{{ orderDetails.created_at }}</span>
                        </li>
                        <li class="flex justify-between py-4 border-b border-b-gray-100">
                            <span>Date Received</span>
                            <div v-if="completeOrder">
                                <span>{{ completeOrder.date_submitted ?? 'NUll' }}</span>
                            </div>
                            <span v-else>NULL</span>
                        </li>
                        <li class="flex justify-between py-4 border-b border-b-gray-100">
                            <span>Old File</span>
                            <div v-if="orderDetails.oldFile" class="flex justify-between">
                                <Link
                                    :href="route('view.file.admin', orderDetails.id)"
                                >
                                    <img src="/images/view.png" alt="View">
                                </Link>
                            </div>
                            <span v-else>NULL</span>
                        </li>
                        <li class="flex justify-between py-4 border-b border-b-gray-100">
                            <span>New File</span>
                            <div v-if="completedOrder">
                                <div v-if="completeOrder.newFile" class="flex justify-between">
                                    <Link
                                        :href="route('view.new.file.admin', completeOrder.id)"
                                    >
                                        <img src="/images/view.png" alt="View">
                                    </Link>
                                </div>
                                <span v-else>NULL</span>
                            </div>
                            <span v-else>NULL</span>
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
