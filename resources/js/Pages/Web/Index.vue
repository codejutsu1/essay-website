<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
})
</script>

<template>
    <Head title="Welcome" />
    
    <header class="h-[550px] bg-hero bg-fixed bg-center bg-no-repeat bg-cover flex justify-center items-center bg-gradient-to-l from-blue-500 to-cyan-500">
        <!-- <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="text-sm text-gray-700 underline">
                Dashboard
            </Link>

            <template v-else>
                <Link :href="route('login')" class="text-sm text-gray-700 underline">
                    Log in
                </Link>

                <Link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-gray-700 underline">
                    Register
                </Link>
            </template>
        </div> -->

        <div class="border-2">
            <h1 class="text-5xl font-bold text-center">Get a unique essay!</h1>
            <p class="text-2xl font-semibold py-3">Hire our professional writer to save time</p>
            <a href="#" class="inline-block mt-5 px-8 py-4 border-2 rounded-md w-full text-center font-semibold">Hire Writer</a>

            <div class="mt-5">
                <div class="grid grid-cols-3 gap-5">
                    <div>
                        <p>Easy Process</p>
                    </div>
                    <div>
                        <p>24/7 on Demand</p>
                    </div>
                    <div>
                        <p>Timesaver</p>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <main>
        <!-- Testimonial Section -->
        
        <section>
            <div>
                <div>
                    <h2>Check out our most recent customer reviews</h2>
                    <div>
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
                    <a href="#">Order Now</a>
                </div>
            </div>
        </section>

        <!-- Steps to get Essay done -->
        <section>
            <div>
                <div>
                    <h1>Steps to follow to get your Essay done</h1>

                    <div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Services -->

        <section>
            <div>
                <div>
                    <h1>Our Services</h1>
                    <p>Our Expertise Covers...</p>
                </div>

                <div>
                    <div>
                        Essay
                    </div>
                </div>
            </div>
        </section>

        <!-- About Us -->

        <section>   
            <div>
                <div>
                    <h1>About Our Solutions in Details</h1>
                </div>
                <div>
                    <p>
                        Do you feel juggling work, studying, exams, and a personal life can sometimes feel a little bit overwhelming? 
                        You’re not alone, a lot of students do. College life these days is demanding and requires a lot of time, 
                        which you sometimes might not have. That’s where Edusson can help you. 
                        We are a dedicated essay writing service that can help you put together a top-quality essay.
                    </p>
                </div>
                <div>
                    <a href="#">Read More</a>
                </div>
            </div>
        </section>

        <!-- Hire Writers -->

        <section>
            <div>
                <div>
                    <div>
                        <h1>Are you a professional writer</h1>
                        <p>
                            We are always looking for talented writers and academic experts to join our team
                        </p>
                        <a href="#">Become a writer</a>
                    </div>
                    <div>
                        <h1>Core requirements</h1>
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

    <footer>
        <div>
            <div>
                <div>
                    <h1>Essay</h1>
                </div>
                <div>
                    <ul>
                        <li>
                            <a href="mailto:support@essay.com">support@esssay.com</a>
                        </li>
                        <li>
                            <a href="tel:+22100000000">+22100000000</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h1>We accept: </h1>
                </div>
            </div>
            <div>
                <h1>Company</h1>
                <ul>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Testimonials</a>
                    </li>
                    <li>
                        <a href="#">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#">FAQ</a>
                    </li>
                    <li>
                        <a href="#">How it works</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                    <li>
                        <a href="#">We are hiring</a>
                    </li>
                    <li>
                        <a href="#">Terms and Conditions</a>
                    </li>
                    <li>
                        <a href="#">Acceptable Use Policy</a>
                    </li>
                </ul>
            </div>
            <div>
                <div>
                    <div>

                    </div>
                </div>
                <div>
                    <p>2022 Essay.com All rights reserved</p>
                    <span>Edusson</span>
                </div>
            </div>
        </div>
    </footer>
       
</template>

