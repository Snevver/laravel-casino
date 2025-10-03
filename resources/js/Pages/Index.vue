<script setup>

import { Head, Link } from '@inertiajs/vue3';
import LogoutButton from '@/Components/LogoutButton.vue';

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

    <LogoutButton />
</template>
