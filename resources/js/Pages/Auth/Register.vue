<script setup>
import BreezeButton from '@/Components/Button.vue';
import BreezeGuestLayout from '@/Layouts/Guest.vue';
import BreezeInput from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';
import BreezeValidationErrors from '@/Components/ValidationErrors.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import { ref } from 'vue';

const form = useForm({
    first_name: '',
    last_name: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: false,
    mode: '2'
});

const nameVisible = ref(false);

function writer(){
    nameVisible.value = true
}

function user(){
    nameVisible.value = false
}

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <BreezeGuestLayout>
        <Head title="Register" />

        <BreezeValidationErrors class="mb-4" />

        <form @submit.prevent="submit">
            <div v-if="nameVisible">
                <div>
                    <BreezeLabel for="first_name" value="First Name" />
                    <BreezeInput id="first_name" type="text" class="mt-1 block w-full" v-model="form.first_name" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <BreezeLabel for="last_name" value="Last Name" />
                    <BreezeInput id="last_name" type="text" class="mt-1 block w-full" v-model="form.last_name" required autocomplete="name" />
                </div>
            </div>

            <div class="mt-4">
                <BreezeLabel for="email" value="Email" />
                <BreezeInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <BreezeLabel for="password" value="Password" />
                <BreezeInput id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <BreezeLabel for="password_confirmation" value="Confirm Password" />
                <BreezeInput id="password_confirmation" type="password" class="mt-1 block w-full" v-model="form.password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex justify-between">
                <div class="mt-4 flex">
                    <BreezeInput id="userRole" type="radio" name="role" value="2" class="mr-2" v-model="form.mode" required checked @click="user" />
                    <BreezeLabel for="userRole" value="User" />
                </div>

                <div class="mt-4 flex">
                    <BreezeInput id="writerRole" name="role" type="radio" value="3" class="mr-2" v-model="form.mode" required @click="writer"  />
                    <BreezeLabel for="writerRole" value="Writer" />
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link :href="route('login')" class="underline text-sm text-gray-600 hover:text-gray-900">
                    Already registered?
                </Link>

                <BreezeButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Register
                </BreezeButton>
            </div>
        </form>
    </BreezeGuestLayout>
</template>
