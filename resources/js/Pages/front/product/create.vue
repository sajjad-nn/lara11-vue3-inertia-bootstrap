<template>
    <front>


        <Head title="create" />

        
        <section class="bg-light p-3 p-md-4 p-xl-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
                        <div class="card border-0 shadow-sm rounded-4">
                            <div class="card-body p-3 p-md-4 p-xl-5">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-5">
                                            <h3>create:</h3>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <form @submit.prevent="saveProduct()">
                                <div class="row gy-3 overflow-hidden">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <div class="mt-2 text-danger" v-if="errors.name">{{ errors.name }}</div>
                                            <input type="text" v-model="form.name" class="form-control" name="email"
                                                id="email" placeholder="name" >


                                            <label for="email" class="form-label">product name:</label>






                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <div class="mt-2 text-danger" v-if="errors.price">{{ errors.price }}</div>

                                            <input type="text" v-model="form.price" class="form-control" name="password"
                                                id="password" value="" placeholder="price">

                                            <label for="password" class="form-label">product price:</label>





                                        </div>
                                    </div>


                                    <div class="col-3 mx-auto mb-1 ">
                                        <div class="d-flex">
                                            <Link class="btn btn-sm btn-danger" :href="route('product.index')">back
                                            </Link>

                                            <button class="btn bsb-btn-2xl btn-primary" :disabled="form.processing" type="submit">
                                                <span v-if="form.processing">save...</span>
                                                <span v-else>save</span>

                                                save
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>

        </section>





    </front>


</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import front from '@/Layouts/frontlayout.vue';
import { Link, useForm } from '@inertiajs/vue3';

defineProps({
    errors: Object
});

const form = useForm({
    name: '',
    price: ''

});
const saveProduct = () => {
    const res = form.post(route('product.store'));
    if (res) {
        form.reset()
    }

};



</script>

<style></style>