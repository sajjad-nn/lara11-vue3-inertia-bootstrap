<template>
    <front>

        <Head title="products" />

        <div v-if="$page.props.flash.message" class="alert bg-success mx-5 py-2 px-4">
            {{ $page.props.flash.message }}
        </div>

        <div class="card">
            <div class="card-header d-flex justify-content-between mt-3 align-items-center">
                <h5 class="">products</h5>

                <Link class="btn btn-dark" :href="route('product.create')">create</Link>
               

            </div>
            <div class="card-body">
                <table class="table table-striped align-middle">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr v-for="(item, index) in products" :key="index">
                            <td>{{ item.id }}</td>
                            <td>{{ item.name }}</td>
                            <td>{{ item.price }}</td>

                            <td >
                         

                                <Link class="btn btn-sm btn-secondary" :href="route('product.edit',item.id)">edit</Link>
                                <!-- <Link class="btn btn-sm btn-secondary" :href="route('product.show')">show</Link> -->
                                <button class="btn btn-sm btn-danger" type="submit" @click="deleteProduct(item.id)">delete</button>
                             

                          



                             



                            </td>
                        </tr>

                    </tbody>
                </table>



            </div>
        </div>
    </front>


</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import front from '@/Layouts/frontlayout.vue';
import { Link, useForm } from '@inertiajs/vue3';
defineProps({
    products: Array
});
const form =useForm({});

const deleteProduct = (productId) =>{
    if(confirm('are you sure you want delete this data')){
        form.delete(route('product.destroy',productId))
    }

};


</script>

<style></style>