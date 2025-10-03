<script setup>
import { Inertia } from '@inertiajs/inertia';

function logout() {
    Inertia.post(route('logout'));
}
</script>

<template>
    <button @click.prevent="logout" class="bg-red-600 py-2 px-4 rounded-xl m-10">
        Log Out
    </button>
</template>