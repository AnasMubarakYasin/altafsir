<script setup>
import Menubar from "primevue/menubar";
import Button from "primevue/button";
import Dropdown from "primevue/dropdown";
</script>

<template>
    <Menubar class="myMenu">
        <template #start>
            <div class="flex items-center">
                <img alt="logo" src="/logo.png" class="mr-2 w-10" />
                <span class="text-logo">al-taqur</span>
            </div>
        </template>
        <template #end>
            <div class="flex gap-3">
                <Button
                    type="button"
                    icon="pi pi-sun"
                    class="p-button-rounded p-button-secondary p-button-outlined"
                />
                <Dropdown
                    class="dropdown"
                    v-model="selectedCity1"
                    :options="cities"
                    optionLabel="name"
                    optionValue="code"
                    placeholder="Bahasa"
                />
            </div>
        </template>
    </Menubar>
</template>

<style lang="scss" scoped>
.myMenu {
    padding-left: 50px;
    padding-right: 50px;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 999;
    @apply bg-white;
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
