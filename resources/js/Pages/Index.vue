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
    <Navbar />

</template>
