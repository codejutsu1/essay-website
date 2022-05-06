<script setup>

import { Link } from '@inertiajs/inertia-vue3';

</script>

<template>
     <div class="w-5/6 mx-auto flex justify-between">
            <div class="flex items-center">
                <h1 class="font-semibold text-xl tracking-wide">
                    <Link :href="route('home')">
                        Essay
                    </Link>
                </h1>
            </div>
        
            <nav class="flex">
                <ul class="flex items-center">
                    <Link :href="route('home')" class="px-6 py-4">
                        Home
                    </Link>
                    <Link :href="route('about')" class="px-6 py-4">
                        About Us
                    </Link>
                    <Link :href="route('contact')" class="px-6 py-4">
                        Contact Us
                    </Link>
                    <Link :href="route('works')" class="px-6 py-4">
                        How It works
                    </Link>
                    <Link :href="route('writers')" class="px-6 py-4">
                        For Writers
                    </Link>
                </ul>
                <div v-if="canLogin" class="hidden px-6 py-4 sm:block">
                    <Link v-if="$page.props.auth.user" :href="route('dashboard')">
                        Dashboard
                    </Link>

                    <template v-else>
                        <Link :href="route('login')">
                            Log in
                        </Link>

                        <Link v-if="canRegister" :href="route('register')" class="px-6 py-4">
                            Register
                        </Link>
                    </template>
                </div>
            </nav>
        </div>

</template>