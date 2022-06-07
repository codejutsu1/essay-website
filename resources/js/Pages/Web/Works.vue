<script setup>
import Footer from '@/Components/Footer.vue';
import Links from '@/Components/Links.vue';
import Work from '@/Components/Work.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';


</script>
<template>
    <Head title="How it is done on Essay?" />
    
    <header>
        <Links />

        <div class="pt-5">
            <Work />
        </div>
    </header>

    <main>
        <section class="bg-[#FDF7E9]">
            <div class="py-12 w-5/6 mx-auto">
                <h1 class="font-bold text-4xl text-center">How to use Essay</h1>
                <p class="py-5 text-lg font-semibold">
                    If you’ve made the decision to order a paper from us, but don't know how to go about the process,
                     then you’ve come to the right place. 
                    It is an easy procedure that takes up very little of your time, than you can possibly imagine!
                </p>
                
                <div class="flex justify-center">
                    <a href="#" class="inline-block mt-5 px-8 py-4 rounded-md text-center tracking-wider text-white font-bold bg-purple-500 hover:translate-x-4 hover:bg-purple-700 transition duration-300">
                        Read more
                    </a>
                </div>
            </div>
        </section>

        <section>
            <div class="py-12 w-5/6 mx-auto">
                <h1 class="font-bold text-4xl text-center">Feel free to contact us at any time</h1>
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
                <div class="flex justify-center">
                    <a href="#" class="inline-block mt-5 px-8 py-4 rounded-md text-center tracking-wider text-white font-bold bg-gradient-to-br from-pink-500 to-indigo-500 hover:translate-x-4 transition duration-300">Live Chat</a>
                </div>
            </div>
        </section>
    </main>

    <Footer />
</template>