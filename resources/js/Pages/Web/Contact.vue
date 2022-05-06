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
    <header class="h-[400px] border-2">
        <Links />

        <div class="w-5/6 mx-auto flex items-center h-full">
            <div class="w-2/5">
                <h1 class="text-4xl font-semibold">Contact Us</h1>
                <p class="py-5">
                   We are an online service providing Personalised Essay Writing Suggestions. 
                   You can use this service as a mean to improve your writing skills alongside with Peer Proofreading and On-campus Writing advisory.
                </p>
                <a href="#" class="inline-block px-8 py-7 rounded-md border-2">Live Chat</a>
            </div>
        </div>
    </header> 

    <main>
        <section>
            <div class="w-5/6 mx-auto py-12">
                <div>
                    <p class="text-center">28 Mariam Juice, second floor, 100, Armenia</p>
                </div>
                <div class="grid grid-cols-2 justify-center">
                    <div>
                        <h1 class="text-2xl font-semibold">Email for customers:</h1>
                        <p>support@essay.com</p>
                    </div>
                    <div>
                        <h1 class="text-2xl font-semibold">Email for Writers</h1>
                        <p>writers@essay.com</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="py-12">
                <h1 class="text-4xl font-semibold text-center">Our Expertise Cover</h1>
                <div>

                </div>
            </div>
        </section>
    </main>

    <Footer />
</template>