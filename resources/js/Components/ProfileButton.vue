<script setup>
import { Inertia } from '@inertiajs/inertia';

function goToProfile() {
    Inertia.get(route('profile'));
}

</script>

<template>
    <button @click="goToProfile">
        profile
    </button>
</template>   