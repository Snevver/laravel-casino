<template>
    <!-- Full viewport gradient border -->
    <div class="fixed inset-0 pointer-events-none z-50">
        <!-- Top border -->
        <div class="absolute left-0 right-0 top-0 h-4 blur-md opacity-70 bg-gradient-to-r from-purple-400 via-pink-500 to-red-500"></div>
        <!-- Bottom border -->
        <div class="absolute left-0 right-0 bottom-0 h-4 blur-md opacity-70 bg-gradient-to-r from-purple-400 via-pink-500 to-red-500"></div>
        <!-- Left border -->
        <div class="absolute top-0 bottom-0 left-0 w-4 blur-md opacity-70 bg-gradient-to-b from-purple-400 via-pink-500 to-red-500"></div>
        <!-- Right border -->
        <div class="absolute top-0 bottom-0 right-0 w-4 blur-md opacity-70 bg-gradient-to-b from-purple-400 via-pink-500 to-red-500"></div>
    </div>
</template>