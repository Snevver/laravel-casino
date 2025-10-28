<script setup>
    import { ref, computed, onMounted, onBeforeUnmount } from 'vue';
    import LogoutButton from "@/Components/LogoutButton.vue";
    import ApplicationLogo from '@/Components/ApplicationLogo.vue';
    import GamemodeMenu from '@/Components/GamemodeMenu.vue';
    import Devider from '@/Components/Devider.vue';

    const logoContainer = ref(null);
    const mouseX = ref(0);
    const mouseY = ref(0);

    let targetX = 0;
    let targetY = 0;
    let animationFrameId = null;

    const handleMouseMove = (e) => {
    if (!logoContainer.value) return;

    const rect = logoContainer.value.getBoundingClientRect();
    const centerX = rect.left + rect.width / 2;
    const centerY = rect.top + rect.height / 2;

    // Target positions normalized to -1..1 range
    targetX = (e.clientX - centerX) / (rect.width / 2);
    targetY = (e.clientY - centerY) / (rect.height / 2);
    };

    const handleMouseLeave = () => {
    targetX = 0;
    targetY = 0;
    };

    // 🔁 Smooth animation loop
    const animate = () => {
    // Lerp toward target — higher = snappier
    const lerpFactor = 1; // Try 0.5 or 1 for faster snap
    mouseX.value += (targetX - mouseX.value) * lerpFactor;
    mouseY.value += (targetY - mouseY.value) * lerpFactor;

    animationFrameId = requestAnimationFrame(animate);
    };

    onMounted(() => {
    animationFrameId = requestAnimationFrame(animate);
    });

    onBeforeUnmount(() => {
    cancelAnimationFrame(animationFrameId);
    });

    const logoStyle = computed(() => ({
    transform: `
        perspective(800px)
        rotateY(${mouseX.value * 45}deg)
        rotateX(${mouseY.value * -45}deg)
        scale(${1 + Math.abs(mouseX.value * 0.25)})
        translateZ(40px)
    `,
    transition: 'transform 0.05s ease-out', // adds subtle stickiness
    }));
</script>

<template>
    <!-- Left sidebar: fixed and full viewport height -->
    <div class="fixed left-0 top-0 z-40 flex flex-col items-center justify-between text-center h-screen w-64 bg-black border-r border-gray-800">
        <div class="w-full px-4 pt-6 flex flex-col items-center">
            <!-- Logo with hover-only fun effects (no clickability) -->
            <div class="relative mt-4">
                <div 
                    class="group inline-block relative"
                    @mousemove="handleMouseMove"
                    @mouseleave="handleMouseLeave"
                    ref="logoContainer"
                >
                    <ApplicationLogo
                        class="h-36 w-auto mx-auto transition-all duration-50 transform will-change-transform"
                        :style="logoStyle"
                    />
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
            <LogoutButton />
        </div>
    </div>
</template>

<style scoped>
/* styling handled with Tailwind utility classes in the template */
</style>
