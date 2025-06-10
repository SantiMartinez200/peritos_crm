<script setup lang="ts">
import { reactive } from 'vue'
import axios from 'axios'
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Publicaciones',
        href: '/create-post',
    },
];

interface CarPostForm {
  titulo: string
  descripcion: string
  marca: string
  modelo: string
  anio: number | null
  kilometros: number | null
  precio: number | null
}

const form = reactive<CarPostForm>({
  titulo: '',
  descripcion: '',
  marca: '',
  modelo: '',
  anio: null,
  kilometros: null,
  precio: null
})

const guardarPost = async () => {
  try {
    await axios.post('/api/car-posts', form)
    alert('Post guardado correctamente')
    // Opcional: resetear el formulario
    form.titulo = ''
    form.descripcion = ''
    form.marca = ''
    form.modelo = ''
    form.anio = null
    form.kilometros = null
    form.precio = null
  } catch (error) {
    console.error(error)
    alert('Error al guardar el post')
  }
}
</script>

<template>
  <Head title="Publicaciones" />
  <AppLayout :breadcrumbs="breadcrumbs">
    <form @submit.prevent="guardarPost" class="max-w-3xl mx-auto p-6 bg-white rounded shadow space-y-6 pt-4">

      <input
        v-model="form.titulo"
        placeholder="Título"
        required
        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500"
      />
      
      <textarea
        v-model="form.descripcion"
        placeholder="Descripción"
        required
        rows="4"
        class="w-full px-4 py-2 border border-gray-300 rounded resize-none focus:outline-none focus:ring-2 focus:ring-indigo-500"
      ></textarea>
      
      <div class="grid grid-cols-2 gap-4">
        <input
          v-model="form.marca"
          placeholder="Marca"
          required
          class="px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500"
        />
        <input
          v-model="form.modelo"
          placeholder="Modelo"
          required
          class="px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500"
        />
      </div>
      
      <div class="grid grid-cols-3 gap-4">
        <input
          type="number"
          v-model.number="form.anio"
          placeholder="Año"
          required
          class="px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500"
        />
        <input
          type="number"
          v-model.number="form.kilometros"
          placeholder="Kilómetros"
          required
          class="px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500"
        />
        <input
          type="number"
          v-model.number="form.precio"
          placeholder="Precio"
          required
          class="px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500"
        />
      </div>
      
      <button
        type="submit"
        class="w-full bg-indigo-600 text-white py-3 rounded hover:bg-indigo-700 transition-colors duration-200"
      >
        Guardar
      </button>
      
    </form>
  </AppLayout>
</template>

