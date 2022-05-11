<script setup>

import { Link } from '@inertiajs/inertia-vue3';

</script>
<template>
    <footer class="bg-indigo-900 text-white">
        <div class="w-5/6 mx-auto py-12">
            <div class="flex py-10">
                <div class="pr-12">
                    <h1 class="text-3xl font-bold">Essay</h1>
                </div>
                <div class="w-1/3 px-4">
                    <ul class="space-y-3">
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
                <h1 class="text-xl font-bold">Company</h1>
                <ul class="flex space-x-8 py-5 justify-center text-sm">
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
                    <li>
                        <Link :href="route('faq')" class="hover:underline">
                            FAQ
                        </Link>
                    </li>
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
                <div class="w-1/3 mx-auto text-center font-bold">
                    <p>2022 Essay.com All rights reserved</p>
                    <span>Edusson</span>
                </div>
            </div>
        </div>
    </footer>
</template>