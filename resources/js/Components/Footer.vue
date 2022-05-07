<script setup>

import { Link } from '@inertiajs/inertia-vue3';

</script>
<template>
    <footer>
        <div class="w-5/6 mx-auto py-12">
            <div class="grid grid-cols-3 py-10">
                <div>
                    <h1 class="text-2xl font-semibold">Essay</h1>
                </div>
                <div>
                    <ul>
                        <li>
                            <a href="mailto:support@essay.com">support@esssay.com</a>
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
            <div class="py-10">
                <h1 class="text-xl font-semibold">Company</h1>
                <ul class="flex space-x-8 py-5 justify-center">
                    <li>
                        <Link :href="route('about')">
                            About Us
                        </Link>
                    </li>
                    <li>
                        <Link :href="route('about')">
                            Privacy Policy
                        </Link>
                    </li>
                    <li>
                        <a href="#">FAQ</a>
                    </li>
                    <li>
                        <Link :href="route('works')">
                            How It works
                        </Link>
                    </li>
                    <li>
                        <Link :href="route('contact')">
                            Contact Us
                        </Link>
                    </li>
                    <li>
                        <Link :href="route('writers')" class="px-6 py-4">
                            We are hiring
                        </Link>
                    </li>
                    <li>
                        <a href="#">Terms and Conditions</a>
                    </li>
                    <li>
                        <a href="#">Acceptable Use Policy</a>
                    </li>
                </ul>
            </div>
            <div>
                <div>
                    <div>

                    </div>
                </div>
                <div class="w-1/3 mx-auto">
                    <p>2022 Essay.com All rights reserved</p>
                    <span>Edusson</span>
                </div>
            </div>
        </div>
    </footer>
</template>