<script setup>
import { Head } from '@inertiajs/vue3'
import Login from './auth/Login.vue'
</script>

<template>
  <Head title="Bienvenido" />
  <div class="flex h-screen">
    <!-- Imagen o video a la izquierda -->
    <div class="w-1/2 relative hidden md:block">
      <img src="/images/3094352.jpg" class="w-full h-full object-cover" />
      <div class="absolute top-10 left-50 bg-black/60 text-white p-6 rounded-xl max-w-md">
        <h2 class="text-3xl font-bold mb-2">Bienvenido a [tenant_name].</h2>
        <p>[tenant_text].</p>
      </div>
    </div>

    <!-- Formulario de login a la derecha -->
    <div class="w-full md:w-1/2 flex items-center justify-center bg-white">
      <div class="w-full max-w-md p-6">
        <Login />
      </div>
    </div>
  </div>
</template>
