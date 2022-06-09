<script setup>
import Footer from '@/Components/Footer.vue';
import Links from '@/Components/Links.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
})
</script>

<template>
    <header class="h-[600px] md:h-[400px] bg-fixed bg-center bg-no-repeat bg-cover relative bg-[url('/images/about.jpg')] z-30">
        <div class="absolute inset-0 bg-indigo-700 opacity-60 md:bg-gradient-to-r from-indigo-700"></div>
        <Links />

        <div class="w-5/6 mx-auto flex items-center h-full">
            <div class="w-full md:w-2/5 z-20 absolute text-white">
                <h1 class="text-6xl font-bold">Contact Us</h1>
                <p class="py-5 text-xl font-semibold">
                   We are an online service providing Personalised Essay Writing Suggestions. 
                   You can use this service as a mean to improve your writing skills alongside with Peer Proofreading and On-campus Writing advisory.
                </p>
                <a href="#" class="inline-block mb-12 px-8 py-4 rounded-md text-center tracking-wider text-white font-bold bg-gradient-to-br from-pink-500 to-indigo-500 hover:translate-x-4 transition duration-300">Live Chat</a>
            </div>
        </div>
    </header> 

    <main>
        <section>
            <div class="w-5/6 mx-auto py-12">
                <div>
                    <p class="text-center text-lg font-semibold">28 Mariam Juice, second floor, 100, Armenia</p>
                </div>
                <div class="md:grid grid-cols-2 md:w-1/2 mx-auto space-y-3 md:space-y-0 space-x-0 md:space-x-8 pt-10 px-2 md:px-8">
                    <div class="flex flex-row md:flex-col space-x-3 md:space-x-0">
                        <h1 class="text-lg font-bold">Email for customers:</h1>
                        <a href="mailto:support@essay.com" class="text-blue-600 hover:underline">support@essay.com</a>
                    </div>
                    <div class="flex flex-row md:flex-col space-x-1 md:space-x-0">
                        <h1 class="text-lg font-bold">Email for Writers:</h1>
                        <a href="mailto:writers@essay.com" class="text-blue-600 hover:underline">writers@essay.com</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-[#FDF7E9]">
            <div class="py-12 w-5/6 mx-auto">
                <h1 class="text-4xl font-semibold text-center">Our Expertise Cover</h1>
                <div class="py-10 hidden md:block">
                    <div>
                        <ul class="flex text-xl text-purple-600 font-bold justify-between">
                            <li class="py-2 px-7 flex items-center justify-center border border-purple-500 rounded-md">
                                <p>Essay (Any type)</p>
                            </li>
                            <li class="py-2 px-7 flex items-center justify-center border border-purple-500 rounded-md">
                                <p>Assignment</p>
                            </li>
                            <li class="py-2 px-7 flex items-center justify-center border border-purple-500 rounded-md">
                                <p>Case Study</p>
                            </li>
                            <li class="py-2 px-7 flex items-center justify-center border border-purple-500 rounded-md">
                                <p>Research Paper</p>
                            </li>
                            <li class="py-2 px-7 flex items-center justify-center border border-purple-500 rounded-md">
                                <p>Critical Thinking</p>
                            </li>
                            <li class="py-2 px-7 flex items-center justify-center border border-purple-500 rounded-md">
                                <p>Thesis</p>
                            </li>
                        </ul>
                    </div>

                    <div class="pt-5">
                        <ul class="flex text-xl text-purple-600 font-semibold justify-between">
                            <li class="py-2 px-10 flex items-center justify-center border border-purple-500 rounded-md">
                                <p>Term Paper</p>
                            </li>
                            <li class="py-2 px-10 flex items-center justify-center border border-purple-500 rounded-md">
                                <p>Q&A</p>
                            </li>
                            <li class="py-2 px-10 flex items-center justify-center border border-purple-500 rounded-md">
                                <p>Research Proposal</p>
                            </li>
                            <li class="py-2 px-10 flex items-center justify-center border border-purple-500 rounded-md">
                                <p>Article Review</p>
                            </li>
                            <li class="py-2 px-10 flex items-center justify-center border border-purple-500 rounded-md">
                                <p>Annotated Bibliography</p>
                            </li>
                        </ul>
                    </div>

                    <div class="py-5">
                        <ul class="flex text-lg text-purple-600 justify-between">
                            <li class="py-2 px-6 flex items-center justify-center border border-purple-500 rounded-md">
                                <p>Business Plan</p>
                            </li>
                            <li class="py-2 px-6 flex items-center justify-center border border-purple-500 rounded-md">
                                <p>Speech</p>
                            </li>
                            <li class="py-2 px-6 flex items-center justify-center border border-purple-500 rounded-md">
                                <p>Prsentation or Speech</p>
                            </li>
                            <li class="py-2 px-6 flex items-center justify-center border border-purple-500 rounded-md">
                                <p>Capstone Project</p>
                            </li>
                            <li class="py-2 px-6 flex items-center justify-center border border-purple-500 rounded-md">
                                <p>Dissertation</p>
                            </li>
                            <li class="py-2 px-6 flex items-center justify-center border border-purple-500 rounded-md">
                                <p>Coursework</p>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <div class="py-2 text-lg text-purple-600 flex items-center justify-center border border-purple-500 rounded-md">
                            <p>Book/Movie Review</p>
                        </div>
                    </div>
                </div>


                <!-- Mobile View -->
                <div class="py-10 md:hidden">
                    <div>
                        <ul>
                            <li>
                                <div class="flex text-lg text-purple-600 font-bold justify-between">
                                    <li class="p-2 flex items-center justify-center border border-purple-500 rounded-md">
                                        <p>Essay (Any type)</p>
                                    </li>
                                    <li class="p-2 flex items-center justify-center border border-purple-500 rounded-md">
                                        <p>Assignment</p>
                                    </li>
                                </div>
                            </li>
                            <li>
                                <div class="flex text-lg text-purple-600 font-bold justify-between">
                                    <li class="p-2 flex items-center justify-center border border-purple-500 rounded-md">
                                        <p>Case Study</p>
                                    </li>
                                    <li class="p-2 flex items-center justify-center border border-purple-500 rounded-md">
                                        <p>Research Paper</p>
                                    </li>
                                </div>
                            </li>
                            <li>
                                <div class="flex text-lg text-purple-600 font-bold justify-between">
                                    <li class="p-2 flex items-center justify-center border border-purple-500 rounded-md">
                                        <p>Critical Thinking</p>
                                    </li>
                                    <li class="p-2 flex items-center justify-center border border-purple-500 rounded-md">
                                        <p>Thesis</p>
                                    </li>
                                    <li class="p-2 flex items-center justify-center border border-purple-500 rounded-md">
                                        <p>Term Paper</p>
                                    </li>
                                </div>
                            </li>
                            <li>
                                <div class="flex text-purple-600 font-semibold justify-between">
                                    <li class="py-2 px-10 flex items-center justify-center border border-purple-500 rounded-md">
                                        <p>Q&A</p>
                                    </li>
                                    <li class="py-2 px-10 flex items-center justify-center border border-purple-500 rounded-md">
                                        <p>Research Proposal</p>
                                    </li>
                                </div>
                            </li>
                            <li>
                                <div class="flex text-sm text-purple-600 font-semibold justify-between">
                                    <li class="py-2 px-10 flex items-center justify-center border border-purple-500 rounded-md">
                                        <p>Article Review</p>
                                    </li>
                                    <li class="py-2 px-10 flex items-center justify-center border border-purple-500 rounded-md">
                                        <p>Annotated Bibliography</p>
                                    </li>
                                </div>
                            </li>
                            <li>
                                <div class="grid grid-cols-2 text-sm text-purple-600 justify-between">
                                    <li class="py-2 px-6 flex items-center justify-center border border-purple-500 rounded-md">
                                        <p>Business Plan</p>
                                    </li>
                                    <li class="py-2 px-6 flex items-center justify-center border border-purple-500 rounded-md">
                                        <p>Speech</p>
                                    </li>
                                </div>
                            </li>
                            <li>
                                <div class="flex text-lg text-purple-600 justify-between">
                                    <li class="w-full py-2 px-6 flex items-center justify-center border border-purple-500 rounded-md">
                                        <p>Prsentation or Speech</p>
                                    </li>
                                </div>
                            </li>
                            <li>
                                <div class="flex text-sm  text-purple-600 justify-between">
                                    <li class="py-2 px-6 flex items-center justify-center border border-purple-500 rounded-md">
                                        <p>Capstone Project</p>
                                    </li>
                                    <li class="py-2 px-6 flex items-center justify-center border border-purple-500 rounded-md">
                                        <p>Dissertation</p>
                                    </li>
                                </div>
                            </li>
                            <li>
                                <div class="flex text-sm text-purple-600 justify-between">
                                    <li class="py-2 px-6 flex items-center justify-center border border-purple-500 rounded-md">
                                        <p>Coursework</p>
                                    </li>
                                    <li class="py-2 px-6 flex items-center justify-center border border-purple-500 rounded-md">
                                        <p>Book/Movie Review</p>
                                    </li>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <Footer />
</template>