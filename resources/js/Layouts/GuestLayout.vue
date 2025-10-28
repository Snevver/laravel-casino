<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import WelcomeText from '@/Components/WelcomeText.vue';
import VerticalLine from "@/Components/VerticalLine.vue";
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen flex items-center justify-center bg-black px-6">
        <div class="flex items-center justify-center gap-4">
            <!-- Left: logo + welcome -->
            <div class="flex flex-col items-center justify-center">
                <Link href="/">
                    <ApplicationLogo class="h-40 w-auto fill-current text-gray-500 border rounded-full border-4 border-white" />
                </Link>

                <WelcomeText class="mt-4 text-center" />
            </div>

            <!-- Divider -->
            <VerticalLine />

            <!-- Right: slot / panel -->
            <div class="flex items-center justify-center">
                <div class="w-full max-w-2xl bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 px-10 py-6 sm:rounded-2xl shadow-lg">
                    <slot />
                </div>
            </div>
        </div>
    </div>
</template>