<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Dashboard from '@/Layouts/AdminDashboard.vue';


const props = defineProps({
    user: Object,
});

const destroy = (id) => {
  if(confirm('Are you sure?')){
    Inertia.delete(route('users.destroy', id));
  }

  return { destroy }
}

</script>

<template>
    <Dashboard>
        <Head title="Order Details" />

        <main class="h-full overflow-y-auto z-30">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              User Details
            </h2>
      
                <div class="bg-gray-800 px-6 py-10 w-full md:w-3/5 mx-auto rounded-md">
                    <ul class="text-lg text-gray-200 font-semibold tracking-wider">
                        <li class="flex justify-between pb-6 border-b border-b-gray-100">
                            <span>Name</span>
                            <span>{{ user.name }}</span>
                        </li>
                        <li class="flex justify-between py-4 border-b border-b-gray-100">
                            <span>Email</span>
                            <span>{{ user.email }}</span>
                        </li>
                        <li class="flex justify-between py-4 border-b border-b-gray-100">
                            <span>Role</span>
                            <span>{{ user.role_id == 2 ? 'User' : 'Writer' }}</span>
                        </li>
                        <li class="flex justify-between py-4 border-b border-b-gray-100">
                            <span>Suspend</span>
                            <span>{{ user.suspend ? 'Yes' : 'No' }}</span>
                        </li>
                        <li class="flex justify-between py-4 border-b border-b-gray-100">
                            <span>Completed Orders</span>
                            <span>5</span>
                        </li>
                        <li class="flex justify-between py-4 border-b border-b-gray-100">
                            <span>Pending Orders</span>
                            <span>2</span>
                        </li>
                        <li class="flex justify-between py-4 border-b border-b-gray-100">
                            <span>Rejected Orders</span>
                            <span>0</span>
                        </li>
                        <li class="flex justify-between py-4 border-b border-b-gray-100">
                            <span>Total Orders</span>
                            <span>7</span>
                        </li>
                        <li class="flex justify-between py-4 border-b border-b-gray-100">
                            <span>Created at</span>
                            <span>{{ user.created_at }}</span>
                        </li>
                        <li class="flex justify-between py-4 border-b border-b-gray-100">
                            <button type="button" class="px-8 cursor-pointer py-3 inline-block font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Suspend</button>
                            <button @click="destroy(user.id)" type="button" class="px-8 cursor-pointer py-3 inline-block font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">Delete</button>
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
