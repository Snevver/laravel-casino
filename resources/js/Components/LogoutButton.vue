<script setup>
import { Inertia } from '@inertiajs/inertia';

function logout() {
    Inertia.post(route('logout'));
}
</script>

<template>
    <button @click.prevent="logout" class="w-full h-10 border-t border-t-2 border-gray-800 text-white hover:bg-gray-800 transition duration-300 rounded-b-2xl">
        Log Out
    </button>
</template>