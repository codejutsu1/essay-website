<script setup>

import { Link } from '@inertiajs/inertia-vue3';
// import { before } from 'laravel-mix';
import { ref, onMounted} from 'vue';

const scrollFromTop = ref(false);



    function scroll(){
        return window.pageYOffset;
    }

onMounted(()=> {
    scroll();
    window.addEventListener('scroll', scroll());
});


</script>

<template>
<!-- bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-400 -->
     <div>
         <div class="w-5/6 mx-auto flex justify-between relative z-30">
            <div class="flex items-center">
                <h1 class="font-semibold text-xl tracking-wide">
                    <Link :href="route('home')">
                        Global Expert
                    </Link>
                </h1>
            </div>
        
            <nav class="flex text-white font-bold">
                <ul class="flex items-center">
                    <Link :href="route('home')" class="px-6 py-4 hover:text-black transition ease-in-out duration-300">
                        Home
                    </Link>
                    <Link :href="route('about')" class="px-6 py-4 hover:text-black transition ease-in-out duration-300">
                        About Us
                    </Link>
                    <Link :href="route('contact')" class="px-6 py-4 hover:text-black transition ease-in-out duration-300">
                        Contact Us
                    </Link>
                    <Link :href="route('works')" class="px-6 py-4 hover:text-black transition ease-in-out duration-300">
                        How It works
                    </Link>
                    <Link :href="route('writers')" class="px-6 py-4 hover:text-black transition ease-in-out duration-300">
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
     </div>

</template>