<script setup>
import Table from "@larasar/js/Components/Table.vue";
import { definitions, api } from "@larasar/js/definition/tafsir";

defineProps({
    data: {
        default: () => [],
        type: Array,
        required: true,
    },
});
</script>
<template>
    <Table :data="data" :definitions="definitions" :api="api"></Table>
</template>
