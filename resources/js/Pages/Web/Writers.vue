<script setup>
import Footer from '@/Components/Footer.vue';
import Links from '@/Components/Links.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';


</script>
<template>
    <Head title="We are hiring freelancer professional writers" />

    <header class="border-2 h-screen">
        <div class="w-5/6 mx-auto flex justify-between relative z-30">
            <div class="flex items-center">
                <h1 class="font-semibold text-xl tracking-wide">
                    <Link :href="route('home')">
                        Global Expert
                    </Link>
                </h1>
            </div>
        
            <div>
                <Link>
                    Log In
                </Link>
            </div>
        </div>

        <div class="w-3/5 mx-auto h-full flex items-center justify-center">
            <div>
                <h1 class="text-4xl font-semibold text-center">Welcome to the leading platform for freelance writers</h1>
                <p class="text-center py-5">Competitive salaries and a constant stream of assignments guaranteed</p>
                <div class="flex justify-center">
                    <a href="#" class="px-5 py-3 rounded-md border-2 inline-block">
                        Read more
                    </a>
                </div>

            </div>
        </div>
    </header>

    <main>
        <section>
            <div class="w-5/6 mx-auto p-2 grid grid-cols-3 justify-center -mt-20">
                <div class="flex items-center justify-center border-b-2 p-8">
                    <p>Hundreds of orders</p>
                </div>
                <div class="flex items-center justify-center border-b-2 p-8">
                    <p>Flexible Schedule</p>
                </div>
                <div class="flex items-center justify-center border-b-2 p-8">
                    <p>Communication with customers</p>
                </div>
                <div class="flex items-center justify-center p-8">
                    <p>Your own price</p>
                </div>
                <div class="flex items-center justify-center p-8">
                    <p>Rate your clients</p>
                </div>
                <div class="flex items-center justify-center p-8">
                    <p>Payment twice a month</p>
                </div>
            </div>
        </section>

        <section>
            <div>
                <h1>How To Apply</h1>
                <div>

                </div>
            </div>
        </section>

        <section>
            <div>
                <h1>Career Growth</h1>
                <p>Your earnings will grow along with your experience</p>

                <div>

                </div>
            </div>
        </section>

        <section>
            <div class="py-12 w-5/6 mx-auto">
                <h1>Advantages of working with us</h1>
                <div class="grid grid-cols-2 justify-center ">
                    <div>
                        <h1>
                            Uninterrupted Workflow
                        </h1>
                        <p>
                            There are hundreds of assignments every day. Choose the ones you want to work on from a huge pool of orders.
                        </p>
                    </div>

                    <div>
                        <h1>
                            Prompt Payments
                        </h1>
                        <p>
                            Withdraw your funds twice a month to the payment method of your choice. All major payment methods are supported, and no payment is ever going to be delayed.
                        </p>
                    </div>

                    <div>
                        <h1>
                            24/7 Support
                        </h1>
                        <p>
                            Contact our Support Team any time of day to get help. We have plenty of helpful materials from formatting requirements to paper structure guidelines to cover your writing needs.
                        </p>
                    </div>

                    <div>
                        <h1>
                            Help For Beginners
                        </h1>
                        <p>
                            Even if you don’t have sufficient statistics or ratings, we’ve got your back! You will still be able to get plenty of orders any time.
                        </p>
                    </div>

                    <div>
                        <h1>
                            Find Tasks Instantly
                        </h1>
                        <p>
                            We support more than 100 fields of various subjects. Choose the assignments you like out of the available orders and set your own price for each.
                        </p>
                    </div>

                    <div>
                        <h1>
                            Easy Registration & Career Progression
                        </h1>
                        <p>
                            Apply and pass a short test. It will take less than 15 minutes. Climb the career ladder from the Beginning to Expert level and earn more depending on your experience and performance.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div>
                <h1>Latest Feedback</h1>
                <div>

                </div>
            </div>
        </section>
    </main>

    <Footer />
</template>