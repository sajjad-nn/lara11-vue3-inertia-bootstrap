<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Link, useForm } from '@inertiajs/vue3';
import { Head } from '@inertiajs/vue3';
import front from '@/Layouts/frontlayout.vue';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <front>

        <Head title="login page" />
        <section class="bg-light p-3 p-md-4 p-xl-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
                        <div class="card border-0 shadow-sm rounded-4">
                            <div class="card-body p-3 p-md-4 p-xl-5">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-5">
                                            <h3>Log in</h3>
                                        </div>
                                    </div>
                                </div>
                                <div v-if="status" class="mb-4 text-sm font-medium text-green-600">
                                    {{ status }}
                                </div>
                                <form @submit.prevent="submit">
                                    <div class="row gy-3 overflow-hidden">
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="email" v-model="form.email" class="form-control"
                                                    name="email" id="email" placeholder="name@example.com" required>
                                                <label for="email" class="form-label">Email</label>

                                                <!-- <InputLabel for="email" class="form-label" value="Email" />

                                                <TextInput id="email" type="email" class="form-control"
                                                    v-model="form.email" required autofocus autocomplete="username" /> -->

                                                <InputError class="mt-2" :message="form.errors.email" />



                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="password"  v-model="form.password" class="form-control" name="password"
                                                    id="password" value="" placeholder="Password" required>
                                                <label for="password" class="form-label">Password</label>

                                                <!-- <InputLabel for="password" class="form-label" value="Password" />

                                                <TextInput id="password" type="password" class="form-control"
                                                    v-model="form.password" required autocomplete="current-password" /> -->

                                                <InputError class="mt-2" :message="form.errors.password" />



                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    name="remember_me" id="remember_me">
                                                <label class="form-check-label text-secondary" for="remember_me">
                                                    Keep me logged in
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button class="btn bsb-btn-2xl btn-primary" type="submit">

                                                    Log in now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="row">
                                    <div class="col-12">
                                        <hr class="mt-5 mb-4 border-secondary-subtle">
                                        <div
                                            class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end">
                                            <p>Don't have an account?<router-link to="/register">sing up</router-link>
                                            </p>
                                            <a href="#!" class="link-secondary text-decoration-none">Forgot password</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </front>


   
</template>
