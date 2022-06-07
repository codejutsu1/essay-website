<script setup>

import { Link } from '@inertiajs/inertia-vue3';

</script>
<template>
    <footer class="bg-indigo-900 text-white">
        <div class="w-5/6 mx-auto py-12">
            <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 py-10 text-center">
                <div class="pr-0 md:pr-12">
                    <h1 class="text-3xl font-bold">Global Expert</h1>
                </div>
                <div class="flex justify-center md:w-1/3 px-4">
                    <ul class="space-y-3">
                        <li>
                            <a href="mailto:support@essay.com">support@globalexpert.com</a>
                        </li>
                        <li>
                            <a href="tel:+22100000000">+22100000000</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h1 class="text-xl font-semibold">We accept: </h1>
                </div>
            </div>
            <div class="py-10 text-center">
                <h1 class="text-xl font-bold">Company</h1>
                <ul class="flex flex-col md:flex-row space-y-6 md:space-y-0 space-x-0 md:space-x-8 py-5 justify-center text-sm">
                    <li>
                        <Link :href="route('about')" class="hover:underline">
                            About Us
                        </Link>
                    </li>
                    <li>
                        <Link :href="route('policy')" class="hover:underline">
                            Privacy Policy
                        </Link>
                    </li>
                    <!-- <li>
                        <Link :href="route('faq')" class="hover:underline">
                            FAQ
                        </Link>
                    </li> -->
                    <li>
                        <Link :href="route('works')" class="hover:underline">
                            How It works
                        </Link>
                    </li>
                    <li>
                        <Link :href="route('contact')" class="hover:underline">
                            Contact Us
                        </Link>
                    </li>
                    <li>
                        <Link :href="route('writers')" class="hover:underline">
                            We are hiring
                        </Link>
                    </li>
                    <li>
                        <Link :href="route('terms')" class="hover:underline">
                            Terms and Conditions
                        </Link>
                    </li>
                    <li>
                        <Link :href="route('usePolicy')" class="hover:underline">
                            Acceptable Use Policy
                        </Link>
                    </li>
                </ul>
            </div>
            <div>
                <div>
                    <div>

                    </div>
                </div>
                <div class="md:w-1/3 text-sm md:text-md mx-auto text-center font-bold">
                    <p>2022 GlobalExpert.com All rights reserved</p>
                    <span>Global Expert</span>
                </div>
            </div>
        </div>
    </footer>
</template>