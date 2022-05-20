<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import UserDashboard from '@/Layouts/UserDashboard.vue';

</script>

<template>
    <UserDashboard>
        <Head title="Dashboard" />

        <main class="h-full overflow-y-auto z-30">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Make Orders
            </h2>

            <div class="bg-gray-800 px-4 py-10">
                <form action="#">
                    <div class="flex justify-center space-x-16">
                        <label
                            class="inline-flex items-center text-gray-600 dark:text-gray-400"
                        >
                            <input
                                type="radio"
                                class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                name="writing"
                                value="Writing"
                            />
                            <span class="ml-2">Writing</span>
                        </label>

                        <label
                            class="inline-flex items-center text-gray-600 dark:text-gray-400"
                        >
                            <input
                                type="radio"
                                class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                name="editing"
                                value="Editing"
                            />
                            <span class="ml-2">Editing</span>
                        </label>
                    </div>

                    <label class="block">
                        <span class="text-gray-400 pt-4 pb-2 block font-semibold">Topic</span>
                        <input
                            class="block w-full mt-1 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Main Idea"
                        />
                    </label>

                    <div class="flex justify-between py-10">
                        <div class="w-1/5">
                            <span class="text-gray-700 dark:text-gray-400 pb-2 block font-semibold">Pages</span>

                            <div class="flex items-center justify-center ">
                                <div class="grid grid-cols-3 border border-purple-400">
                                    <button
                                        class="text-4xl flex justify-center items-center text-gray-200"
                                        type="button"
                                    >-</button>
                                    <input 
                                        type="text" 
                                        name="essayNumber"
                                        class="py-3 text-center focus:border-purple-400 focus:outline-none focus:shadow-outline-purple-400" 
                                    />
                                    <button 
                                        class="text-4xl flex justify-center items-center text-gray-200"
                                        type="button"
                                    >+</button>
                                </div>
                            </div>

                            <span class="text-gray-400 pb-2 block font-semibold pt-2">
                                550 words
                            </span>
                            <span class="text-gray-400 pb-2 block font-semibold">
                                double spacing
                            </span>
                        </div>
                        <label class="block mt-4 w-[60%]">
                            <span class="text-gray-700 dark:text-gray-400">Detailed Instructions</span>
                            <textarea
                                class="block w-full mt-1 dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                rows="10"
                                placeholder="Requirements like formatting style, references, structure, etc"
                            ></textarea>
                        </label>
                    </div>

                    <div class="border-2 border-dashed border-purple-400 bg-gray-700 w-1/3 mx-auto flex justify-center">
                        <input type="file" name="essay" id="essay" class="bg-gray-700 py-6 text-gray-200 cursor-pointer">
                    </div>

                    <button
                        class="px-8 py-3 mx-auto inline-block font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                    >
                        Next
                    </button> 
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
