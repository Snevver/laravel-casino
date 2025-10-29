<script setup>

    function goBack() {
        window.history.back();
    }
</script>
<template>
    <button @click="goBack" class="m-8 border border-white px-4 py-2 rounded-xl">
        Go back
    </button>
</template>