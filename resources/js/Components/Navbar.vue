<script setup>
    import NavbarMenu from '@/Components/NavbarMenu.vue';
    import ApplicationLogo from '@/Components/ApplicationLogo.vue';
    import GamemodeMenu from '@/Components/GamemodeMenu.vue';
    import Devider from '@/Components/Devider.vue';
</script>

<template>
    <!-- Left sidebar: non-fixed block so layout grid can place it beside content -->
    <div class="flex flex-col items-center justify-between text-center min-h-screen w-64 bg-black border-r border-gray-800">
        <div class="w-full px-4 pt-6 flex flex-col items-center">
            <!-- Logo -->
            <div class="relative mt-4">
                <div class="group inline-block relative">
                    <a href="/">
                        <ApplicationLogo class="h-36 w-auto mx-auto" />
                    </a>
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

        <!-- Navbar menu -->
        <div class="w-full gap-2 px-4 pb-6">
            <NavbarMenu />
        </div>
    </div>
</template>
