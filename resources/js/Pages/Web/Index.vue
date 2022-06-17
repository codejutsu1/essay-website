<script setup>
import Footer from '@/Components/Footer.vue';
import Links from '@/Components/Links.vue'
import { Head, Link } from '@inertiajs/inertia-vue3';
import Work from '@/Components/Work.vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
})
</script>

<template>
    <Head title="Welcome" />
    
    <header class="h-[650px] md:h-[550px] bg-fixed bg-center bg-no-repeat bg-cover relative bg-[url('/images/hero.jpg')] z-30">
        <div class="absolute inset-0 bg-gradient-to-r from-indigo-700"></div>
       <Links :num="500" />

       <div class="flex justify-center items-center h-full">
            <div class="z-20 relative md:w-3/5 w-5/6">
                <h1 class="text-5xl font-bold text-center text-white">Get a unique essay!</h1>
                <p class="text-2xl font-semibold py-3 text-white text-center">Hire our professional writer to save time</p>
                <div class="flex justify-center">
                    <Link :href="route('login')" class="inline-block mt-5 px-8 py-4 rounded-md text-center tracking-wider text-white font-bold bg-gradient-to-br from-pink-500 to-indigo-500 hover:translate-x-4 transition duration-300">Hire Writer</Link>
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
        
        <section class="bg-[#FDF7E9]">
            <div class="py-12">
                <div class="mx-auto w-full md:w-5/6">
                    <h1 class="text-4xl font-semibold text-center">Check out our most recent customer reviews</h1>
                    <div class="w-5/6 md:w-3/5 mx-auto py-10 my-12 md:flex bg-white px-4 rounded-md shadow-xl">
                        <div class="px-2 flex justify-center md:justify-start">
                            <div class="text-center">
                                <img src="/images/user.png" alt="A user" loading="lazy">
                                <p class="font-semibold">Customer-34858509</p>
                                <span class="text-xs text-gray-300 font-semibold">May 16, 2021</span>
                            </div>
                        </div>
                        <div class="px-2">
                            <div>
                                <div class="flex items-center space-x-2">
                                    <img src="/images/star.png" alt="star rating" loading="lazy" width="30">
                                    <img src="/images/star.png" alt="star rating" loading="lazy" width="30">
                                    <img src="/images/star.png" alt="star rating" loading="lazy" width="30">
                                    <img src="/images/star.png" alt="star rating" loading="lazy" width="30">
                                    <img src="/images/star.png" alt="star rating" loading="lazy" width="30">
                                    <h1 class="pl-2 font-bold text-xl text-gray-500">Global Expert</h1>
                                </div>
                            </div>
                            <p class="pt-5 pb-10 font-semibold text-lg">
                                Went beyond what my expectations were! Had a last minute order for a long 
                                literature review and it was completed on time and no corrections were needed. 
                                Followed the topic and instructions and couldn't have asked for a better job!
                            </p>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <Link :href="route('login')" class="inline-block mt-5 px-8 py-4 rounded-md text-center tracking-wider text-white font-bold bg-purple-500 hover:translate-x-4 hover:bg-purple-700 transition duration-300">Order Now</Link>
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

                <div class="md:grid grid-cols-3 py-12 justify-center">
                    <div class="border-2 rounded-[100%] flex flex-col items-center justify-center h-[300px] w-[300px] bg-pink-500">
                        <div>
                            <img src="/images/essay.svg" alt="Essay Writing" loading="lazy" width="150">
                        </div>
                        <p class="pt-5 font-semibold text-xl text-white">Essay</p>
                    </div>
                    <div class="border-2 rounded-[100%] flex flex-col items-center justify-center h-[300px] w-[300px] bg-purple-500">
                        <div>
                            <img src="/images/research.svg" alt="Research Paper" loading="lazy" width="150">
                        </div>
                        <p class="pt-5 font-semibold text-xl text-white">Research Paper</p>
                    </div>
                    <div class="border-2 rounded-[100%] flex flex-col items-center justify-center h-[300px] w-[300px] bg-indigo-500">
                        <div>
                            <img src="/images/assignment.svg" alt="Assignment" loading="lazy" width="150">
                        </div>
                        <p class="pt-5 font-semibold text-xl text-white">Assignment</p>
                    </div>
                </div>

                <div class="rounded-2xl my-6 py-5 bg-[#FDF7E9]">
                    <div class="w-5/6 mx-auto">
                        <ul class="md:flex list-disc list-inside space-y-8 md:space-y-0 space-x-0 md:space-x-10 justify-center items-center">
                            <li>Narrative</li>
                            <li>Descriptive</li>
                            <li>Expository</li>
                            <li>Persuasive</li>
                            <li class="list-none">
                                <a href="#" class="inline-block ml-5 px-8 py-4 rounded-md text-center tracking-wider text-white font-bold bg-purple-500 hover:translate-x-4 hover:bg-purple-700 transition duration-300">Order Now</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

       <Work />

        <!-- About Us -->

        <section class="py-12">   
            <div class="w-5/6 mx-auto">
                <div>
                    <h1 class="text-4xl font-bold text-center">About Our Solutions in Details</h1>
                </div>
                <div class="py-10">
                    <p class="text-lg font-semibold">
                        Do you feel juggling work, studying, exams, and a personal life can sometimes feel a little bit overwhelming? 
                        You’re not alone, a lot of students do. College life these days is demanding and requires a lot of time, 
                        which you sometimes might not have. That’s where Edusson can help you. 
                        We are a dedicated essay writing service that can help you put together a top-quality essay.
                    </p>
                </div>
                <div class="flex justify-center">
                    <Link :href="route('login')" class="inline-block mt-5 px-8 py-4 rounded-md text-center tracking-wider text-white font-bold bg-purple-500 hover:translate-x-4 hover:bg-purple-700 transition duration-300">Read More</Link>
                </div>
            </div>
        </section>

        <!-- Hire Writers -->

        <section class="bg-[#FDF7E9]">
            <div class="py-12">
                <div class="w-5/6 md:grid grid-cols-3 mx-auto gap-10">
                    <div>
                        <h1 class="text-3xl font-bold text-center">Are you a professional writer?</h1>
                        <p class="py-10 font-semibold">
                            We are always looking for talented writers and academic experts to join our team
                        </p>
                        <Link :href="route('login')" class="inline-block w-full px-8 py-4 rounded-md text-center tracking-wider text-white font-bold bg-purple-500 hover:translate-x-4 hover:bg-purple-700 transition duration-300">Become a writer</Link>
                    </div>
                    <div class="pt-10 md:pt-0">
                        <h1 class="text-2xl font-bold">Core requirements</h1>
                        <ul class="p-4 space-y-4">
                            <li class="flex items-center">
                                <div class="w-[10%]">
                                    <img src="/images/list-star.png" alt="Listing Star" loading="lazy" width="50">
                                </div>
                                <p  class="font-semibold pl-1 w-[90%]">Bachelors degree from an accredited educational institution</p>
                            </li>
                            <li  class="flex items-center">    
                                <div class="w-[10%]">
                                    <img src="/images/list-star.png" alt="Listing Star" loading="lazy" width="50">
                                </div>
                                <p class="font-semibold pl-1 w-[90%]">Excellent communication skills</p>
                            </li>
                            <li  class="flex items-center">
                                <div class="w-[10%]">
                                    <img src="/images/list-star.png" alt="Listing Star" loading="lazy" width="50">
                                </div>
                                <p class="font-semibold pl-1 w-[90%]">Proficiency in the particular area of study</p>
                            </li>
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

