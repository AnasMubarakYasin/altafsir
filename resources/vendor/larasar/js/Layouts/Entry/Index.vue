<script setup>
import { inject, ref, provide } from "vue";
import { router } from "@inertiajs/vue3";
import Layout from "./Layout.vue";
import { app } from "@larasar/js/lib/app";

const context = inject("context");

defineProps({
    entries: {
        type: Array,
        default: () => [],
    },
});
const selected_user = ref(null);
function select_user(user = null) {
    selected_user.value = user;
}
function visit(link = "/", data = null) {
    if (data) {
        app().provide("__account__", data);
    }
    router.visit(link);
}
</script>
<template>
    <Layout>
        <div
            class="absolute w-screen h-screen grid pt-10 justify-center items-start bg-gray-50"
        >
            <div class="container grid justify-items-center gap-4">
                <img src="/logo.png" alt="" class="w-16 aspect-square" />
                <h1 class="text-center text-2xl font-bold">Entry Point</h1>
            </div>
            <div class="container grid justify-items-center gap-2 sm:gap-4">
                <Transition>
                    <div
                        v-if="!selected_user"
                        class="flex flex-wrap gap-2 sm:gap-4"
                    >
                        <div
                            v-for="entry of entries"
                            class="relative w-[240px] grid content-start gap-2 p-2 sm:p-4 bg-white text-black rounded-lg shadow-lg"
                        >
                            <h2
                                class="text-center text-lg text-gray-800 font-semibold"
                            >
                                {{ entry.name }}
                            </h2>
                            <div
                                class="grid place-items-center p-4 bg-gray-100 text-gray-800 aspect-square rounded-md"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-20 h-20"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z"
                                    />
                                </svg>
                            </div>
                            <div v-if="entry.guest">
                                <button
                                    class="px-4 py-2 bg-gray-100 font-medium text-base text-gray-900 hover:bg-gray-200 active:bg-gray-300 focus:ring focus:ring-blue-500 rounded-md"
                                    @click="() => visit(entry.visit())"
                                >
                                    <div>Visit</div>
                                </button>
                            </div>
                            <div v-else class="flex flex-wrap gap-2">
                                <button
                                    class="px-4 py-2 bg-gray-100 font-medium text-base text-gray-900 hover:bg-gray-200 active:bg-gray-300 focus:ring focus:ring-blue-500 rounded-md"
                                    @click="() => visit(entry.signup())"
                                >
                                    <div>SignUp</div>
                                </button>
                                <button
                                    class="px-4 py-2 bg-gray-100 font-medium text-base text-gray-900 hover:bg-gray-200 active:bg-gray-300 focus:ring focus:ring-blue-500 rounded-md"
                                    @click="() => visit(entry.signin())"
                                >
                                    <div>SignIn</div>
                                </button>
                                <button
                                    class="px-4 py-2 bg-gray-100 font-medium text-base text-gray-900 hover:bg-gray-200 active:bg-gray-300 focus:ring focus:ring-blue-500 rounded-md"
                                    @click="() => visit(entry.visit())"
                                >
                                    <div>Visit</div>
                                </button>
                                <button
                                    class="px-4 py-2 bg-gray-100 font-medium text-base text-gray-900 hover:bg-gray-200 active:bg-gray-300 focus:ring focus:ring-blue-500 rounded-md"
                                    @click="() => select_user(entry)"
                                >
                                    <div>Accounts</div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div v-else class="grid gap-2 sm:gap-4">
                        <h2
                            class="text-center text-lg text-gray-800 font-semibold"
                        >
                            {{ selected_user.name }}
                        </h2>
                        <div class="flex flex-wrap gap-2 sm:gap-4">
                            <button
                                v-for="account of selected_user.accounts()"
                                class="relative w-[380px] flex items-center content-start gap-4 p-2 sm:p-4 bg-white text-black hover:bg-gray-200 rounded-lg shadow-lg"
                                @click="
                                    () => visit(selected_user.signin(), account)
                                "
                            >
                                <div
                                    class="grid place-items-center p-2 bg-gray-100 text-gray-800 aspect-square rounded-md"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="2"
                                        stroke="currentColor"
                                        class="w-6 h-6"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"
                                        />
                                    </svg>
                                </div>
                                <h3
                                    class="text-center text-base text-gray-800 font-medium"
                                >
                                    {{ account.name }}
                                </h3>
                            </button>
                        </div>
                    </div>
                </Transition>
            </div>
        </div>
    </Layout>
</template>
