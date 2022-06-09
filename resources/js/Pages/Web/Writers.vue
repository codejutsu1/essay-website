<script setup>
import Footer from '@/Components/Footer.vue';
import Links from '@/Components/Links.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';


</script>
<template>
    <Head title="We are hiring freelancer professional writers" />

    <header class="h-screen bg-fixed bg-center bg-no-repeat bg-cover relative bg-[url('/images/writer.jpg')] z-30">
        <div class="absolute inset-0 bg-gradient-to-l from-indigo-700"></div>
        <div class="w-5/6 mx-auto flex justify-between relative z-30 pt-4">
            <div class="flex items-center">
                <h1 class="font-semibold text-xl tracking-wide">
                    <Link :href="route('home')">
                        Global Expert
                    </Link>
                </h1>
            </div>
        
            <div>
                <div v-if="$page.props.canLogin" class="px-6 py-4 sm:block">
                    <Link v-if="$page.props.auth.user" :href="route('dashboard')">
                        Dashboard
                    </Link>

                    <template v-else>
                        <Link :href="route('login')">
                            Log in
                        </Link>
                    </template>
                </div>
            </div>
        </div>

        <div class="h-full flex items-center justify-center">
            <div class="w-full md:w-3/5 z-30 absolute">
                <h1 class="text-5xl font-bold text-center text-white">Welcome to the leading platform for freelance writers</h1>
                <p class="text-2xl font-semibold py-3 text-white text-center">Competitive salaries and a constant stream of assignments guaranteed</p>
                <div class="flex justify-center">
                    <Link :href="route('login')" class="inline-block mt-5 px-8 py-4 rounded-md text-center tracking-wider text-white font-bold bg-gradient-to-tl from-pink-600 to-indigo-500 hover:translate-x-4 transition duration-300">
                        Read more
                    </Link>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section>
            <div class="w-5/6 mx-auto py-2 px-4 grid grid-cols-2 md:grid-cols-3 justify-center z-40 relative -mt-32 bg-white shadow-lg rounded-md">
                <div class="flex items-center justify-center border-b p-5 md:p-12">
                    <p>Hundreds of orders</p>
                </div>
                <div class="flex items-center justify-center border-b md:border-r border-l p-5 md:p-12">
                    <p>Flexible Schedule</p>
                </div>
                <div class="flex items-center justify-center border-b border-r md:border-r-0 p-5 md:p-12">
                    <p>Communication with customers</p>
                </div>
                <div class="flex items-center justify-center border-b md:border-b-0 p-5 md:p-12">
                    <p>Your own price</p>
                </div>
                <div class="flex items-center justify-center border-r md:border-l p-5 md:p-12">
                    <p>Rate your clients</p>
                </div>
                <div class="flex items-center justify-center p-5 md:p-12">
                    <p>Payment twice a month</p>
                </div>
            </div>
        </section>

        <section>
            <div class="py-12">
                <div class="md:flex">
                    <div class="flex justify-center items-center md:w-1/2">
                        <div class="bg-[#FDF7E9] rounded-full flex items-center" style="width:350px; height: 350px">
                            <img src="/images/order.png" alt="A man collecting Orders" >
                        </div>
                    </div>
                    <div class="flex justify-center items-center py-5 md:py-0 md:w-1/2">
                        <div>
                            <h1 class="text-2xl font-bold">Available now</h1>
                            <div class="flex justify-between py-8">
                                <div>
                                    <p class="text-5xl font-bold">5803</p>
                                    <span class="font-semibold">Pages</span>
                                </div>
                                <div>
                                    <p class="text-5xl font-bold">1209</p>
                                    <span class="font-semibold">Orders</span>
                                </div>
                            </div>
                            <Link :href="route('login')" class="inline-block mt-5 px-8 py-4 rounded-md text-center tracking-wider text-white font-bold bg-gradient-to-tl from-pink-600 to-indigo-500 hover:translate-x-4 transition duration-300">Sign up as a writer now</Link>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-fixed bg-center bg-no-repeat bg-cover relative bg-[url('/images/advantage.jpg')] z-30">
            <div class="absolute inset-0 bg-indigo-700 opacity-90"></div>
            <div class="py-12 w-5/6 mx-auto z-30 relative text-white">
                <h1 class="text-center font-bold text-4xl">Advantages of working with us</h1>
                <div class="md:grid grid-cols-2 justify-center space-y-10 md:space-y-0 py-10 gap-16">
                    <div>
                        <h1 class="text-2xl font-bold pb-4">
                            Uninterrupted Workflow
                        </h1>
                        <p>
                            There are hundreds of assignments every day. Choose the ones you want to work on from a huge pool of orders.
                        </p>
                    </div>

                    <div>
                        <h1 class="text-2xl font-bold pb-4">
                            Prompt Payments
                        </h1>
                        <p>
                            Withdraw your funds twice a month to the payment method of your choice. All major payment methods are supported, and no payment is ever going to be delayed.
                        </p>
                    </div>

                    <div>
                        <h1 class="text-2xl font-bold pb-4">
                            24/7 Support
                        </h1>
                        <p>
                            Contact our Support Team any time of day to get help. We have plenty of helpful materials from formatting requirements to paper structure guidelines to cover your writing needs.
                        </p>
                    </div>

                    <div>
                        <h1 class="text-2xl font-bold pb-4">
                            Help For Beginners
                        </h1>
                        <p>
                            Even if you don’t have sufficient statistics or ratings, we’ve got your back! You will still be able to get plenty of orders any time.
                        </p>
                    </div>

                    <div>
                        <h1 class="text-2xl font-bold pb-4">
                            Find Tasks Instantly
                        </h1>
                        <p>
                            We support more than 100 fields of various subjects. Choose the assignments you like out of the available orders and set your own price for each.
                        </p>
                    </div>

                    <div>
                        <h1 class="text-2xl font-bold pb-4">
                            Easy Registration & Career Progression
                        </h1>
                        <p>
                            Apply and pass a short test. It will take less than 15 minutes. Climb the career ladder from the Beginning to Expert level and earn more depending on your experience and performance.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-[#FDF7E9]">
            <div class="flex items-center justify-center py-12">
                <div class="md:w-3/5 text-center">
                    <h1 class="text-4xl font-bold">Simple application process that is both quick and transparent</h1>
                    <p class="font-semibold py-5 text-lg">Global Expert is the platform for college students. So if you are a recent graduate, you are in good company! We currently have 579 freelancers working with us, and that number keeps rising steadily.</p>
                    <Link :href="route('login')" class="inline-block mt-5 px-8 py-4 rounded-md text-center tracking-wider text-white font-bold bg-gradient-to-tl from-pink-600 to-indigo-500 hover:translate-x-4 transition duration-300">Get Started Now</Link>
                </div>
            </div>
        </section>
    </main>

    <Footer />
</template>