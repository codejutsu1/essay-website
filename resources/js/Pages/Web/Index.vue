<script setup>
import Footer from '@/Components/Footer.vue';
import Links from '@/Components/Links.vue'
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
})
</script>

<template>
    <Head title="Welcome" />
    
    <header class="h-[550px] bg-hero bg-fixed bg-center bg-no-repeat bg-cover relative bg-[url('/images/hero.jpg')] z-30">
        <div class="absolute inset-0 bg-gradient-to-r from-indigo-700"></div>
       <Links />

       <div class="flex justify-center items-center h-full">
            <div class="z-30 absolute w-3/5">
                <h1 class="text-5xl font-bold text-center text-white">Get a unique essay!</h1>
                <p class="text-2xl font-semibold py-3 text-white text-center">Hire our professional writer to save time</p>
                <div class="flex justify-center">
                    <a href="#" class="inline-block mt-5 px-8 py-4 rounded-md text-center tracking-wider text-white font-bold bg-gradient-to-br from-pink-500 to-indigo-500 hover:translate-x-4 transition duration-300">Hire Writer</a>
                </div>

                <div class="mt-5">
                    <div class="grid grid-cols-3 gap-5 justify-center pt-14">
                        <div>
                            <div class="flex justify-center">
                                <img src="/images/process.png" alt="Process" width="30">
                            </div>
                            <p class="text-center text-white font-bold pt-3">Easy Process</p>
                        </div>
                        <div>
                            <div class="flex justify-center">
                                <img src="/images/demand.png" alt="Demand" width="30">
                            </div>
                            <p class="text-center text-white font-bold pt-3">24/7 on Demand</p>
                        </div>
                        <div>
                            <div class="flex justify-center">
                                <img src="/images/time.png" alt="Timesaver" width="30">
                            </div>
                            <p class="text-center text-white font-bold pt-3">Timesaver</p>
                        </div>
                    </div>
                </div>
            </div>
       </div>

    </header>

    <main>
        <!-- Testimonial Section -->
        
        <section>
            <div class="py-12">
                <div class="mx-auto w-5/6">
                    <h1 class="text-4xl font-semibold text-center">Check out our most recent customer reviews</h1>
                    <div class="w-3/5 mx-auto py-10">
                        <div>
                        </div>
                        <div>
                            <p>
                                Went beyond what my expectations were! Had a last minute order for a long 
                                literature review and it was completed on time and no corrections were needed. 
                                Followed the topic and instructions and couldn't have asked for a better job!
                            </p>
                        </div>
                    </div>
                    <div class="flex justify-center">
                         <a href="#" class="inline-block px-4 py-2 rounded-md border-2 mx-auto">Order Now</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Steps to get Essay done -->
        <section>
            <div class="py-12">
                <div class="w-5/6 mx-auto">
                    <h1 class="text-4xl font-semibold text-center">Steps to follow to get your Essay done</h1>

                    <div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Services -->

        <section class="py-12">
            <div class="w-5/6 mx-auto">
                <div>
                    <h1 class="text-4xl font-semibold text-center">Our Services</h1>
                    <p class="text-2xl font-semibold text-center">Our Expertise Covers...</p>
                </div>

                <div>
                    <div>
                        Essay
                    </div>
                </div>
            </div>
        </section>

        <!-- About Us -->

        <section class="py-12">   
            <div class="w-5/6 mx-auto">
                <div>
                    <h1 class="text-4xl font-semibold text-center">About Our Solutions in Details</h1>
                </div>
                <div class="py-10">
                    <p>
                        Do you feel juggling work, studying, exams, and a personal life can sometimes feel a little bit overwhelming? 
                        You’re not alone, a lot of students do. College life these days is demanding and requires a lot of time, 
                        which you sometimes might not have. That’s where Edusson can help you. 
                        We are a dedicated essay writing service that can help you put together a top-quality essay.
                    </p>
                </div>
                <div class="flex mx-auto">
                    <a href="#" class="inline-block px-4 py-2 rounded-md border-2 mx-auto">Read More</a>
                </div>
            </div>
        </section>

        <!-- Hire Writers -->

        <section>
            <div class="py-12">
                <div class="w-5/6 grid grid-cols-3 mx-auto">
                    <div>
                        <h1 class="text-3xl font-semibold text-center">Are you a professional writer</h1>
                        <p class="py-10">
                            We are always looking for talented writers and academic experts to join our team
                        </p>
                        <a href="#" class="inline-block px-4 py-2 rounded-md border-2 mx-auto">Become a writer</a>
                    </div>
                    <div>
                        <h1 class="text-2xl font-semibold text-center">Core requirements</h1>
                        <ul>
                            <li>bullshits</li>
                        </ul>
                    </div>
                    <div>

                    </div>
                </div>
            </div>
        </section>

    </main>
    
    <Footer />
</template>

