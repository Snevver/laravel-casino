<script setup>

import { Head } from '@inertiajs/vue3';
import Navbar from '@/Components/Navbar.vue';
import CoolBorders from '@/Components/CoolBorders.vue';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
});

</script>

<template>
    <Head title="Home" />
    <CoolBorders />
    <!-- Layout: sidebar + main content -->
    <div class="min-h-screen flex">
        <!-- Sidebar (hidden on small screens) -->
        <aside class="hidden sm:block w-64">
            <Navbar />
        </aside>

        <!-- Main content -->
        <main class="flex-1 p-6">

        </main>
    </div>

</template>
