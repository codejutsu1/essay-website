<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import UserDashboard from '@/Layouts/UserDashboard.vue';
import { ref, reactive, computed } from 'vue';
import { Inertia } from '@inertiajs/inertia'

const formStep = ref(1);
const btnDisable = ref(true);

const form = reactive({
    mode: null,
    topic: null,
    essay_number: 2,
    instructions: null,
    document: null,
    email: 'user@email.com',
    amount: 2700,
    currency: 'NGN',
    channels: ['card']
});



function btnEnable(){
    return btnDisable.value = false
}

function nextStep(){
    if(form.mode == 'Writing' && form.topic == null || form.essay_number == 0 || form.instructions == null){
        return btnDisable.value = true
    }

    if(form.mode == 'Editing' && form.topic == null || form.essay_number == 0 || form.instructions == null || form.document == null){
        return btnDisable.value = true
    }

    formStep.value++;
}

function prevStep(){
    formStep.value--;
}


const totalPagesAmount = computed(() => {
    return form.essay_number * 15
});

const totalAmount = computed(() => {
    return (form.essay_number * 15) - 3
});

const totalPages = computed(() => {
    return form.essay_number * 275
});

function onlyNumber($event) {
    let keyCode = ($event.keyCode ? $event.keyCode : $event.which);
    if ((keyCode < 48 || keyCode > 57) && keyCode !== 46) { // 46 is dot
        $event.preventDefault();
    }
    return btnDisable.value = false;
}

function increaseButton(){
    form.essay_number++
}

function decreaseButton(){
    form.essay_number--
}

function submit() {
    Inertia.post(route('pay'), form);
    // console.log(form);    
}

</script>

<template>
    <UserDashboard>
        <Head title="Make Order" />

        <main class="h-full overflow-y-auto z-30">
          <div class="container px-6 mx-auto grid">
            <h2
              class="mt-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Make Orders
            </h2>

            <h3
                class="my-6 text-xl font-semibold text-gray-700 dark:text-gray-100 text-center"
                v-if="formStep == 1"
            >
                1. Complete the following information
            </h3>

            <h3
                class="my-6 text-xl font-semibold text-gray-700 dark:text-gray-100 text-center"
                v-if="formStep == 2"
            >
                2. CheckOut
            </h3>

            <div class="bg-gray-800 px-4 py-10">
                <form action="#" @submit.prevent="submit">
                    <div v-show="formStep == 1">
                        <div class="flex justify-center space-x-16">
                            <label
                                class="inline-flex items-center text-gray-600 dark:text-gray-400"
                                for="writing"
                            >
                                <input
                                    type="radio"
                                    class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                    value="Writing"
                                    name="writing"
                                    v-model="form.mode"
                                    @click="btnEnable"
                                />
                                <span class="ml-2">Writing</span>
                            </label>

                            <label
                                class="inline-flex items-center text-gray-600 dark:text-gray-400"
                                for="editing"
                            >
                                <input
                                    type="radio"
                                    class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                    value="Editing"
                                    name="editing"
                                    v-model="form.mode"
                                    @click="btnEnable"
                                />
                                <span class="ml-2">Editing</span>
                            </label>
                        </div>

                        <label class="block">
                            <span class="text-gray-400 pt-4 pb-2 block font-semibold">Topic</span>
                            <input
                                class="block w-full mt-1 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                placeholder="Main Idea"
                                v-model="form.topic"
                                @keypress="btnEnable"
                            />
                        </label>

                        <div class="flex justify-between py-10">
                            <div class="w-1/5">
                                <span class="text-gray-700 dark:text-gray-400 pb-2 block font-semibold">Pages</span>

                                <div class="flex items-center justify-center ">
                                    <div class="grid grid-cols-3 border border-purple-400">
                                        <button
                                            class="text-4xl flex justify-center items-center text-gray-200"
                                            type="button"
                                            @click="decreaseButton"
                                            
                                        >-</button>
                                        <input 
                                            type="text" 
                                            @keypress="onlyNumber"
                                            class="py-3 text-center focus:border-purple-400 focus:outline-none focus:shadow-outline-purple-400" 
                                            v-model="form.essay_number"
                                        />
                                        <button 
                                            class="text-4xl flex justify-center items-center text-gray-200"
                                            type="button"
                                            @click="increaseButton"
                                        >+</button>
                                    </div>
                                </div>

                                <span class="text-gray-400 pb- 2 block font-semibold pt-2">
                                    {{ totalPages ?? 'No' }} words
                                </span>
                                <span class="text-gray-400 pb-2 block font-semibold">
                                    double spacing
                                </span>
                            </div>
                            <label class="block mt-4 w-[60%]">
                                <span class="text-gray-700 dark:text-gray-400">Detailed Instructions</span>
                                <textarea
                                    class="block w-full mt-1 dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                    rows="10"
                                    placeholder="Requirements like formatting style, references, structure, etc"
                                    v-model="form.instructions"
                                    @keypress="btnEnable"
                                ></textarea>
                            </label>
                        </div>

                        <div class="border-2 border-dashed border-purple-400 bg-gray-700 w-1/3 mx-auto flex justify-center">
                            <input type="file" name="essay" @keypress="btnEnabled" id="essay" class="bg-gray-700 py-6 text-gray-200 cursor-pointer" @input="form.document = $event.target.files[0]">
                        </div>

                        <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                            {{ form.progress.percentage }}%
                        </progress>
    
                    </div>

                    
                    <div class="flex justify-between" v-show="formStep == 2">
                        <div class="bg-gray-900 w-1/3 py-6 px-3 rounded-md">
                            <div>
                                <span class="text-gray-200 text-sm">Topic</span>
                                <p class="font-bold text-2xl text-gray-100">{{ form.topic }}</p>
                            </div>
                            <div class="pt-4">
                                <span class="text-gray-200">Pages</span>
                                <p class="font-bold text-2xl text-gray-100">{{ form.essay_number }} pages / {{ totalPages }} words</p>
                            </div>
                            <div class="pt-4">
                                <span class="text-gray-200">Type</span>
                                <p class="font-bold text-2xl text-gray-100">{{ form.mode }}</p>
                            </div>
                            <div class="pt-4">
                                <span class="text-gray-200">Instructions</span>
                                <p class="font-bold text-2xl text-gray-100">{{ form.instructions }}</p>
                            </div>
                        </div>

                        <div class="bg-gray-900 py-6 px-4 rounded-md">
                            <div>
                                <h1 class="font-bold text-3xl text-gray-100">Order Summary</h1>

                                <div class="flex pt-5 justify-between text-semibold text-gray-300 text-xl">
                                    <p>Price</p>
                                    <span>${{ totalAmount }}</span>
                                </div>

                                <div class="flex justify-between font-semibold text-gray-400 pl-3">
                                    <p>{{ form.essay_number }} pages * $15.00</p>
                                    <span>${{ totalPagesAmount }}</span>
                                </div>

                                <div class="flex justify-between font-semibold text-green-100 pl-3">
                                    <p>Discount</p>
                                    <span>
                                        -$3.00
                                    </span>
                                </div>

                                <div class="flex justify-between font-semibold text-green-100 mt-5 py-5 border-t border-b border-t-gray-200 border-b-gray-200">
                                    <p>Plagiarism report</p>
                                    <span>Free <span class="line-through">$12.00</span></span>
                                </div>
                                <div class="flex justify-between border-b border-b-gray-200 py-5 font-semibold text-2xl text-gray-100">
                                    <p>Order Total</p>
                                    <span>${{ totalAmount }}</span>
                                </div>
                                <div class="text-gray-200 my-10 px-16">
                                    <p class="text-center">The funds will be held back in your account until you recieve the order.</p>
                                </div>
                                <div>
                                    <input  
                                        type="submit" 
                                        :disabled="form.processing"
                                        class="px-8 cursor-pointer py-3 mx-auto w-full font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" value="Add Funds">
                                </div>

                                <div>
                                    <input type="hidden"  v-model="form.email"/>
                                    <input type="hidden" v-model="form.amount" />
                                    <input type="hidden" v-model="form.currency" />
                                    <input type="hidden" v-model="form.channels" />
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="flex justify-end mt-8">
                          <button
                            :class="{'opacity-50 cursor-not-allowed': btnDisable }"
                            class="px-8 py-3 inline-block font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                            @click="nextStep"
                            type="button"
                            v-if="formStep == 1"
                            :disabled="btnDisable"

                        >
                            Next
                        </button>
                        <button 
                            @click="prevStep" 
                            type="button" 
                            class="px-8 cursor-pointer py-3 inline-block font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                            v-if="formStep == 2"
                        >
                            Previous
                        </button>
                    </div>
                </form>
            </div>
          </div>
        </main>

    </UserDashboard>
</template>

<style>
  main{
    display: block;
  }
</style>