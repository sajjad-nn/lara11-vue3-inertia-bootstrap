<template>


  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">laravel11</a>




      <ul class="navbar-nav me-auto mb-2 mb-lg-0">


        <li class="nav-item">
          <Link :href="route('Home')" class="nav-link active">

          Home
          </Link>
        </li>

        <li class="nav-item">
          <Link :href="route('product.index')" class="nav-link active">

          products
          </Link>
        </li>



        <li class="nav-item">
          <Link :href="route('contact')" class="nav-link active">

          contact
          </Link>
        </li>



        <li class="nav-item">
          <Link :href="route('about')" class="nav-link active">
          about us
          </Link>
        </li>






      </ul>
      <ul class="navbar-nav me-3  border border-primary  border-1 rounded-1 mb-1  g-5">

        <li class="nav-item">
          <Link :href="route('register')" class="nav-link active">
          register
          </Link>
        </li>

        <li class="nav-item">
          <Link :href="route('login')" class="nav-link active">

          Log in
          </Link>
        </li>



      </ul>



    </div>
  </nav>



</template>

<script setup>
import { Link } from '@inertiajs/vue3';
defineProps({
  canLogin: {
    type: Boolean,
  },
  canreg: {
    type: Boolean,
  },
  canRegister: {
    type: Boolean,
  },
  laravelVersion: {
    type: String,
    required: true,
  },
  phpVersion: {
    type: String,
    required: true,
  },
});
</script>

<style></style>