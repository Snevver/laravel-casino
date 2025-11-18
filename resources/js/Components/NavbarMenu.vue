<script setup>
// Imports
import { ref } from "vue";
import { Inertia } from "@inertiajs/inertia";

// States
const collapsed = ref(true);
const isLoggingOut = ref(false);

// Logout function
async function logout() {
    Inertia.post(
        route("logout"),
        {},
        {
            onStart() {
                isLoggingOut.value = true;
            },
        }
    );
}
</script>

<template>
    <div
        @click="collapsed = !collapsed"
        class="border border-white rounded-xl transition"
    >
        <div v-if="!collapsed">
            <ul>
                <li class="menu-item menu-item-purple">
                    <a href="/profile"> Profile </a>
                </li>
                <li class="menu-item menu-item-red">
                    <button
                        @click.stop.prevent="logout"
                        :disabled="isLoggingOut"
                        :class="{
                            'opacity-50 cursor-not-allowed': isLoggingOut,
                        }"
                    >
                        <span v-if="isLoggingOut">Logging out...</span>
                        <span v-else>Logout</span>
                    </button>
                </li>
            </ul>
        </div>
        <div class="menu-item menu-item-white">Menu</div>
    </div>
</template>

<style scoped>
.menu-item {
    padding: 0.5rem;
    /* border-radius: 0.75rem; */
    cursor: pointer;
    transition: all 0.3s ease;
}

.menu-item-purple:hover {
    box-shadow: 0 0 30px 15px rgba(168, 85, 247, 0.5);
    background-color: rgba(168, 85, 247, 0.5);
    color: white;
    border-top-left-radius: 0.75rem;
    border-top-right-radius: 0.75rem;
}

.menu-item-red:hover {
    box-shadow: 0 0 30px 15px rgba(239, 68, 68, 0.5);
    background-color: rgba(239, 68, 68, 0.5);
    color: white;
}

.menu-item-white:hover {
    box-shadow: 0 0 30px 15px rgba(243, 244, 246, 0.8);
    background-color: rgba(243, 244, 246, 0.8);
    color: white;
    border-bottom-left-radius: 0.75rem;
    border-bottom-right-radius: 0.75rem;
}
</style>
