<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '../components/PlaceholderPattern.vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Principal',
        href: '/dashboard',
    },
];
</script>

<template>
  <Head title="Principal" />

  <AppLayout :breadcrumbs="breadcrumbs">
    <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">

      <!-- Tarjeta de la inmobiliaria -->
      <div class="bg-white rounded-2xl shadow-md p-6 max-w-4xl mx-auto">
        <div class="flex flex-col lg:flex-row items-center gap-6">
          <div class="flex justify-center lg:w-1/3">
            <img
              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAYcklEQ..."
              alt="Logo Inmobiliaria"
              class="w-48 h-auto object-contain"
            />
          </div>
          <div class="flex-1 text-center lg:text-left">
            <h2 class="text-2xl font-semibold text-gray-800 mb-2">Nombre de la Inmobiliaria</h2>
            <p class="text-gray-600 mb-1">Dirección: Calle Ficticia 123, Ciudad</p>
            <p class="text-gray-600 mb-1">Teléfono: (123) 456-7890</p>
            <p class="text-gray-600">Email: contacto@inmobiliaria.com</p>
          </div>
        </div>
      </div>

      <!-- Tarjetas de información -->
      <div class="grid gap-4 md:grid-cols-3">
        <div class="bg-white rounded-2xl shadow-md p-6 flex flex-col items-center justify-center text-center">
          <h3 class="text-lg font-semibold text-gray-700 mb-2">Cantidad de Consorcios</h3>
          <p class="text-2xl font-bold text-gray-900">[n]</p>
        </div>
        <div class="bg-white rounded-2xl shadow-md p-6 flex flex-col items-center justify-center text-center">
          <h3 class="text-lg font-semibold text-gray-700 mb-2">Cantidad de Propietarios</h3>
          <p class="text-2xl font-bold text-gray-900">[n]</p>
        </div>
        <div class="bg-white rounded-2xl shadow-md p-6 flex flex-col items-center justify-center text-center">
          <h3 class="text-lg font-semibold text-gray-700 mb-2">Cantidad de Envíos</h3>
          <p class="text-2xl font-bold text-gray-900">[n]</p>
        </div>
      </div>
      
    </div>
  </AppLayout>
</template>
