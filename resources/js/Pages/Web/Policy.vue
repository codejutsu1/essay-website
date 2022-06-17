<script setup>
import Footer from '@/Components/Footer.vue';
import Links from '@/Components/Links.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import { ref } from 'vue';

const navbarColor = ref(true);


</script>

<template>
    <Head title="Privacy Policy" />

   <Links :navbarColor="navbarColor" :num="150" />

    <main>
        <div class="w-[70%] mx-auto py-6">
            <p class="font-semibold">
                Essay Writing Services / Privacy Policy
            </p>

            <h1 class="text-2xl font-bold my-5">Privacy Policy</h1>

            <p class="mb-2 underline">
                This Privacy Policy was last updated on 9th of September 2020.
            </p>

            <p class="mb-2">
                This Privacy Policy (the “Policy”, the “Privacy Policy” or “Our Policy”) determines how we obtain, collect and use information on this website (“We”, the “Website” or “Our Website”) and in course of services provision via the Website (all of the above together referred to as the “Services”).
            </p>

            <p class="mb-2 font-bold">
                1. By visiting this Website or using the Services, you accept rules and conditions described in this Policy, which could be changed over time. Every time, when you visit the Website or use the Services you express your direct consent to Us collecting, using and disclosing information provided by you in accordance with the procedure described in this Policy.
            </p>

            <p class="mb-2 font-bold">
                2. We collect, register or process any of the following general categories of information:
            </p>
        </div>
    </main>

    <Footer />

</template>