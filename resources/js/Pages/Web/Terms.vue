<script setup>
import Footer from '@/Components/Footer.vue';
import Links from '@/Components/Links.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import { ref } from 'vue';

const navbarColor = ref(true);


</script>

<template>
    <Head title="Terms and Condtion" />

    <Links :navbarColor="navbarColor" :num="150" />

    <main>
         <main>
        <div class="w-[70%] mx-auto">
            <p class="font-semibold">
                Essay Writing Services / Terms and Conditions
            </p>

            <h1 class="text-2xl font-bold my-5 text-center">Terms and Conditions</h1>

            <p class="mb-2 italics">
                These terms and conditions were last updated on 9th of September 2020.
            </p>

            <p class="mb-2 font-bold">
                Who we are?
            </p>

            <p class="mb-2">
                The contents on this website (the "Site") are provided by RATATATA LTD (hereinafter referred to as “We”, “Us”, “Our”), legal entity established under the law of Bulgaria, registered address - 48 Vitosha Boulevard, ground floor, 1000, Sofia, Bulgaria.
            </p>

            <p class="mb-2">
                By using this Site / placing an order / making payment, it is deemed that you have read and agreed to the following Terms and Conditions. These Terms and Conditions include, and hereby incorporate by reference, the Privacy Policy, Acceptable Use Policy and other relevant agreements, located on the Site, as they may be in effect and modified from time to time. If you do not agree to them, do not use the Site or access the services from it.
            </p>

            <p class="mb-2 font-bold">
                How does it work?
            </p>

            <p class="mb-2">
                This Site is an online platform where users (the “Customers”) can find freelance content writers (the “Writers”) who can provide high quality content writing services. As a platform, We ensure delivery of the services by Writers and payment to Writers by Customers. On this Site, Customers can find Writers with the skills required for their particular order, meeting their budget, Turn Around Time and other requirements.
            </p>
        </div>
    </main>
    </main>

    <Footer />

</template>
