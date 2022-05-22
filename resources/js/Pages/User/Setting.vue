<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import UserDashboard from '@/Layouts/UserDashboard.vue';

</script>

<template>
    <UserDashboard>
        <Head title="Settings" />

        <main class="h-full overflow-y-auto z-30">
          <div class="container px-6 mx-auto grid">
            <h2
              class="mt-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Settings
            </h2>
            <div class="bg-gray-800 px-4 py-10 my-10">
                <form action="#">
                    <label class="block">
                        <span class="text-gray-400 pt-4 pb-2 block font-semibold">Email</span>
                        <input
                            class="block w-full mt-1 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            value="user@email.com"
                        />
                    </label>

                    <label class="block">
                        <span class="text-gray-400 pt-4 pb-2 block font-semibold">Old Password</span>
                        <input
                            class="block w-full mt-1 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            value="mypass@"
                            type="password"
                        />
                    </label>

                    <label class="block">
                        <span class="text-gray-400 pt-4 pb-2 block font-semibold">New Password</span>
                        <input
                            class="block w-full mt-1 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Input your new password"
                            type="password"
                        />
                    </label>

                    <div class="flex justify-end py-5">
                        <input 
                          type="button" 
                          value="Update"
                          class="px-8 py-3 inline-block font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                        >
                    </div>
                </form>
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
