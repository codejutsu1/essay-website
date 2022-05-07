<script setup>
import Footer from '@/Components/Footer.vue';
import Links from '@/Components/Links.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';


</script>
<template>
    <Head title="How it is done on Essay?" />
    
    <header class="border-2 h-[600px]">
        <Links />

        <div class="w-3/5 mx-auto h-full flex items-center justify-center">
            <div>
                <h1 class="text-4xl font-semibold text-center">Steps to follow to get your Essay done</h1>

                <div>

                </div>
            </div>
        </div>
    </header>

    <main>
        <section>
            <div class="py-12 w-5/6 mx-auto">
                <h1 class="font-semibold text-4xl text-center">How to use Essay</h1>
                <p class="py-5">
                    If you’ve made the decision to order a paper from us, but don't know how to go about the process,
                     then you’ve come to the right place. 
                    It is an easy procedure that takes up very little of your time, than you can possibly imagine!
                </p>
                
                <div class="flex justify-center">
                    <a href="#" class="px-5 py-3 rounded-md border-2 inline-block">
                        Read more
                    </a>
                </div>
            </div>
        </section>

        <section>
            <div class="py-12 w-5/6 mx-auto">
                <h1 class="font-semibold text-4xl text-center">Feel free to contact us at any time</h1>
                <div class="grid grid-cols-2 gap-7 justify-center py-8">
                    <div>
                        <h1 class="font-semibold text-2xl text-center">Email for customer:</h1>
                        <p class="py-5 text-center">support@essay.com</p>
                    </div>

                    <div>
                        <h1 class="font-semibold text-2xl text-center">Email for writers:</h1>
                        <p class="py-5 text-center">writer@essay.com</p>
                    </div>
                </div>
                <div class="flex justify-center">
                    <a href="#" class="px-5 py-3 rounded-md border-2 inline-block">Live Chat</a>
                </div>
            </div>
        </section>
    </main>

    <Footer />
</template>