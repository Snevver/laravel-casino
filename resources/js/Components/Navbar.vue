<script setup>
    import LogoutButton from "@/Components/LogoutButton.vue";
    import ApplicationLogo from '@/Components/ApplicationLogo.vue';
    import GamemodeMenu from '@/Components/GamemodeMenu.vue';
    import Devider from '@/Components/Devider.vue';
    import ProfileButton from '@/Components/ProfileButton.vue';
</script>

<template>
    <!-- Left sidebar: fixed and full viewport height -->
    <div class="fixed left-0 top-0 z-40 flex flex-col items-center justify-between text-center h-screen w-64 bg-black border-r border-gray-800">
        <div class="w-full px-4 pt-6 flex flex-col items-center">
            <!-- Logo -->
            <div class="relative mt-4">
                <div class="group inline-block relative">
                    <ApplicationLogo class="h-36 w-auto mx-auto hover:rotate-180 transition-transform duration-300" />
                </div>
                <div class="relative mt-4">
                    <p class="relative z-10 text-white font-semibold text-lg">Svens Casino</p>
                </div>
            </div>

            <Devider />

            <!-- Gamemode selector directly under divider -->
            <div class="w-full px-4">
                <GamemodeMenu />
            </div>
        </div>

        <!-- Logout button -->
        <div class="w-full px-4 pb-6">
            <Devider class="mx-auto"/>

            <ProfileButton />

            <LogoutButton />
        </div>
    </div>
</template>

<style scoped>
/* styling handled with Tailwind utility classes in the template */
</style>
