<script setup>
import Footer from '@/Components/Footer.vue';
import Links from '@/Components/Links.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';


</script>

<template>
    <Head title="FAQ" />

    <header class="h-[400px] border-2">
        <Links />

        <div class="w-5/6 mx-auto flex items-center h-full">
            <div class="w-2/5">
                <h1 class="text-4xl font-semibold">FAQ</h1>
                <p class="py-5">
                    We are an online service providing Personalised Essay Writing Suggestions. 
                    You can use this service as a mean to improve your writing skills alongside with Peer 
                    Proofreading and On-campus Writing advisory.
                </p>
            </div>
        </div>
    </header> 

    <main>
        <section>
                        <div class="w-5/6 mx-auto p-2 grid grid-cols-3 justify-center -mt-20">
                <div class="flex items-center justify-center border-b-2 p-8">
                    <p>Accredited Service</p>
                </div>
                <div class="flex items-center justify-center border-b-2 p-8">
                    <p>Easy process</p>
                </div>
                <div class="flex items-center justify-center border-b-2 p-8">
                    <p>Timesaver</p>
                </div>
                <div class="flex items-center justify-center p-8">
                    <p>24/7 on demand</p>
                </div>
                <div class="flex items-center justify-center p-8">
                    <p>100% private</p>
                </div>
                <div class="flex items-center justify-center p-8">
                    <p>Original work</p>
                </div>
            </div>
        </section>

        <section>
            <div class="py-12 w-5/6 mx-auto">
                <div class="p-4">
                    <div>
                        <h1>How does this service work?</h1>
                    
                    </div>
                    <div>
                        <p class="mb-2">
                            We have made our services hassle-free and user-friendly for both our clients requiring writing services and for our service providers
                        </p>
                        
                        <p class="mb-2 font-bold">
                            For clients requiring the services of an academic writer:
                        </p>

                        <p class="mb-2">
                            Describe your writing requirements and then post your job. Writers that are interested in completing this job will then have the opportunity to bid on your project. To help you make your decision, you will have the opportunity to check their previous experience, ratings, and feedback. Once you choose the writer you deem most suitable for the job, you will deposit payment for the order. The writer will then complete the assignment and deliver the finished product to you.
                        </p>

                        <p class="mb-2 font-bold">
                            For writers:
                        </p>

                        <p class="mb-2">
                            You will have the opportunity to view the job postings on the site, including writers' reviews of the clients making the orders. If the job requirements, rating, and reviews suit you then you can make a bid on the job. If the client believes that you would be suitable for the job, they will assign it to you.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <Footer />

</template>