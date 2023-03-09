<script setup>
import Menubar from "primevue/menubar";
import Button from "primevue/button";
import Dropdown from "primevue/dropdown";
</script>

<template>
    <Menubar class="myMenu">
        <template #start>
            <div class="flex items-center font-arabic">
                <img alt="logo" src="/logo.png" class="mr-2 w-10" />
                <span class="text-logo">al-taqur</span>
            </div>
        </template>
    </Menubar>
</template>

<style lang="scss" scoped>
.myMenu {
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 999;
    @apply bg-white px-3 sm:px-[50px];
}
.text-logo {
    font-weight: bold;
    font-size: 20px;
}
</style>

<script>
export default {
    data() {
        return {
            selectedCity1: null,
            cities: [
                { name: "Indonesia", code: "ID" },
                { name: "English", code: "EN" },
            ],
        };
    },
};
</script>
