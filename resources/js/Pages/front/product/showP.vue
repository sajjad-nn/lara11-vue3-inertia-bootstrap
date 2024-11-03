<template>
    <front>


        <Head title="show" />



         <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body p-3 p-md-4 p-xl-5">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-5">
                            <h3>show:</h3>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row gy-3 overflow-hidden">
                <div class="col-12">
                    <p>{{ product.name }}</p>
                </div>
                <div class="col-12">
                    <p>{{ product.price }}</p>
                </div>


            </div>



        </div>
  
 




    </front>


</template>

<script setup>
 import { Head } from '@inertiajs/vue3';
 import front from '@/Layouts/frontlayout.vue';


 defineProps({
 

     product: Object,
 });




</script>

<style></style>