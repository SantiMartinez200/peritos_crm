<script setup lang="ts">
import { Head } from '@inertiajs/vue3';

import AppearanceTabs from '@/components/AppearanceTabs.vue';
import HeadingSmall from '@/components/HeadingSmall.vue';
import { type BreadcrumbItem } from '@/types';

import AppLayout from '@/layouts/AppLayout.vue';
import SettingsLayout from '@/layouts/settings/Layout.vue';

const breadcrumbItems: BreadcrumbItem[] = [
    {
        title: 'Ajustes de apariencia y presentación',
        href: '/settings/appearance',
    },
];
</script>

<template>
    <AppLayout :breadcrumbs="breadcrumbItems">
        <Head title="Apariencia del navegador" />

        <SettingsLayout>
            <div class="space-y-6">
                <HeadingSmall title="Apariencia del navegador" description="Modifica la apariencia del navegador" />
                <AppearanceTabs />
            </div>
        </SettingsLayout>
    </AppLayout>
</template>
