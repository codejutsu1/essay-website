<script setup>
import Footer from '@/Components/Footer.vue';
import Links from '@/Components/Links.vue';
import Work from '@/Components/Work.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
})
</script>

<template>
    <header class="h-[600px] md:h-[400px] bg-fixed bg-center bg-no-repeat bg-cover relative bg-[url('/images/about.jpg')] z-30">
        <div class="absolute inset-0 bg-indigo-700 opacity-60 md:opacity-0 md:bg-gradient-to-r from-indigo-700"></div>
        <Links />

        <div class="w-5/6 mx-auto flex items-center h-full">
            <div class="w-full md:w-2/5 z-20 relative text-white">
                <h1 class="text-6xl font-bold">About Us</h1>
                <p class="py-5 text-xl font-semibold">
                    We are an online service providing Personalised Essay Writing Suggestions. 
                    You can use this service as a mean to improve your writing skills alongside
                     with Peer Proofreading and On-campus Writing advisory.
                </p>
            </div>
        </div>
    </header> 

    <main>
        <section>
            <div class="py-12">
                <div class="md:grid grid-cols-2 gap-10 w-5/6 mx-auto">
                    <div>
                        <h1 class="text-3xl font-bold">Problem</h1>
                        <p class="py-5 font-semibold">
                            Students often struggle with the basics of constructing a written argument. 
                            “Students would come to writing instructors with the critical thinking skills,” Oli Raw says, 
                            “but they didn’t understand how to put their thoughts into a structure, or vice versa.”
                        </p>
                    </div>
                    <div>
                        <h1 class="text-3xl font-semibold">Solution</h1>
                        <p class="py-5 font-semibold">
                            Annotated assignment - this service allows you to upload your assignment or sections of 
                            your project to the platform and get feedback from a professional coach, which can help you
                             improve your paper. 
                            The chosen coach will send you back your paper as a .doc file with additional text comments that advice 
                            on the clarity, organisation, style and language of your work.
                        </p>
                    </div>
                </div>
                <div class="flex justify-center">
                    <a href="#" class="inline-block mt-5 px-8 py-4 rounded-md text-center tracking-wider text-white font-bold bg-purple-500 hover:translate-x-4 hover:bg-purple-700 transition duration-300">Start Now</a>
                </div>
            </div>
        </section>

        <Work />
    </main>

    <Footer />   
</template>