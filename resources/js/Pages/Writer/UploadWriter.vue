<script setup>
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import Dashboard from '@/Layouts/WriterDashboard.vue';

import { Inertia } from '@inertiajs/inertia'

const props = defineProps({
    errors: Object,
    uploadFile: Object
});

const form = useForm({
  document: props.uploadFile.order.oldFile
});



function submit() {
      Inertia.post(route('upload.file', props.uploadFile.id), {
        _method: 'put',
        document: form.document
      })
    }


</script>

<template>
    <Dashboard>
        <Head title="Upload Order" />

        <main class="h-full overflow-y-auto z-30">
          <div class="container px-6 mx-auto grid">
            <h2
              class="mt-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Upload Order
            </h2>


            <div class="bg-gray-800 px-4 py-10">
                <h1 class="text-center text-4xl font-bold text-gray-200">{{ uploadFile.order.orderId }}</h1>
                <form @submit.prevent="submit">
                    <p class="my-2 text-red-300 text-center"> {{ errors.document }} </p>
                    <div class="border-2 my-4 border-dashed border-purple-400 bg-gray-700 w-1/3 mx-auto flex flex-col justify-center">
                        <input type="file" name="essay" id="essay" class="bg-gray-700 py-6 text-gray-200 cursor-pointer" @input="form.document = $event.target.files[0]">
                    </div>
                    
                    <div class="flex justify-center">
                        <input  
                            type="submit" 
                            class="px-8 cursor-pointer inline-block py-3 mx-auto font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" value="Upload"
                        />
                    </div>
                </form>
            </div>
          </div>
        </main>
    </Dashboard>
</template>

<style>
  main{
    display: block;
  }
</style>
