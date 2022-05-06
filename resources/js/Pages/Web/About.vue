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
    <header class="h-[400px] border-2">
        <Links />

        <div class="w-5/6 mx-auto flex items-center h-full">
            <div class="w-2/5">
                <h1 class="text-4xl font-semibold">About Us</h1>
                <p class="py-5">
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
                <div class="grid grid-cols-2 w-5/6 mx-auto">
                    <div>
                        <h1 class="text-3xl font-semibold">Problem</h1>
                        <p class="py-5">
                            Students often struggle with the basics of constructing a written argument. 
                            “Students would come to writing instructors with the critical thinking skills,” Oli Raw says, 
                            “but they didn’t understand how to put their thoughts into a structure, or vice versa.”
                        </p>
                    </div>
                    <div>
                        <h1 class="text-3xl font-semibold">Solution</h1>
                        <p class="py-5">
                            Annotated assignment - this service allows you to upload your assignment or sections of 
                            your project to the platform and get feedback from a professional coach, which can help you
                             improve your paper. 
                            The chosen coach will send you back your paper as a .doc file with additional text comments that advice 
                            on the clarity, organisation, style and language of your work.
                        </p>
                    </div>
                </div>
                <div class="flex justify-center">
                    <a href="#" class="px-4 py-8 border-2 rounded-md font-semibold">Start Now</a>
                </div>
            </div>
        </section>

        <Work />
    </main>

    <Footer />   
</template>