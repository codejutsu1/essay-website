<script setup>

import { Link } from '@inertiajs/inertia-vue3';
import { ref, onMounted} from 'vue';

const navbar = ref(false);


</script>

<template>
<!-- bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-400 -->
    <div>
        <div class="w-5/6 mx-auto flex justify-between pt-5 relative z-30">
            <div class="flex items-center">
                <h1 class="font-semibold text-xl tracking-wide">
                    <Link :href="route('home')">
                        Global Expert
                    </Link>
                </h1>
            </div>
        
            <nav class="hidden md:flex text-white font-bold">
                <ul class="flex items-center">
                    <li>
                        <Link :href="route('home')" class="px-6 py-4 hover:text-black transition ease-in-out duration-300">
                            Home
                        </Link>
                    </li>
                    <li>
                        <Link :href="route('about')" class="px-6 py-4 hover:text-black transition ease-in-out duration-300">
                            About Us
                        </Link>
                    </li>
                    <li>
                        <Link :href="route('contact')" class="px-6 py-4 hover:text-black transition ease-in-out duration-300">
                            Contact Us
                        </Link>
                    </li>
                    <li>
                        <Link :href="route('works')" class="px-6 py-4 hover:text-black transition ease-in-out duration-300">
                            How It works
                        </Link>
                    </li>
                    <li>
                        <Link :href="route('writers')" class="px-6 py-4 hover:text-black transition ease-in-out duration-300">
                            For Writers
                        </Link>
                    </li>
                    <li>
                        <div v-if="$page.props.canLogin" class="hidden px-6 py-4 sm:block">
                            <Link v-if="$page.props.auth.user" :href="route('dashboard')">
                                Dashboard
                            </Link>

                            <template v-else>
                                <Link :href="route('login')">
                                    Log in
                                </Link>

                                <Link v-if="$page.props.canRegister" :href="route('register')" class="px-6 py-4">
                                    Register
                                </Link>
                            </template>
                        </div>
                    </li>
                </ul>   
            </nav>    

             <div class="flex md:hidden">
                <button class="p-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple" @click="navbar = !navbar" aria-label="Menu">
                    <svg class="w-10 h-10 text-white" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </button>

                <div class="w-full h-full z-[60] inset-0 fixed bg-black opacity-60" @click="navbar = false" :class="{'hidden': !navbar, 'block': navbar}"></div>

                <nav :class="{'hidden': !navbar, 'block': navbar}">
                    <ul class="bg-white inset-x-0 z-[100] fixed w-full text-center space-y-6 py-10 rounded-md top-28">
                        <li>
                            <Link :href="route('home')" class="block py-3 hover:text-black transition ease-in-out duration-300">
                                Home
                            </Link>
                        </li>
                        <li>
                            <Link :href="route('about')" class="block py-3 hover:text-black transition ease-in-out duration-300">
                                About Us
                            </Link>
                        </li>
                        <li>
                            <Link :href="route('contact')" class="block py-3 hover:text-black transition ease-in-out duration-300">
                                Contact Us
                            </Link>
                        </li>
                        <li>
                            <Link :href="route('works')" class="block py-3 hover:text-black transition ease-in-out duration-300">
                                How It works
                            </Link>
                        </li>
                        <li>
                            <Link :href="route('writers')" class="block py-3 hover:text-black transition ease-in-out duration-300">
                                For Writers
                            </Link>
                        </li>
                        <li>
                            <div v-if="$page.props.canLogin" class="px-6 py-4 sm:block">
                                <Link v-if="$page.props.auth.user" :href="route('dashboard')">
                                    Dashboard
                                </Link>

                                <template v-else>
                                    <Link :href="route('login')">
                                        Log in
                                    </Link>
                                        <span class="px-3">|</span>
                                    <Link v-if="$page.props.canRegister" :href="route('register')" class="py-4">
                                        Register
                                    </Link>
                                </template>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>      
        </div>
    </div>

</template>