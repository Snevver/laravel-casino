<script setup>
    import { Head } from '@inertiajs/vue3';
    import CoolBorders from '@/Components/CoolBorders.vue';
    // import GoBackButton from '@/Components/GoBackButton.vue';
    import Navbar from '@/Components/Navbar.vue';
</script>

<template>
    <Head title="Profile" />

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