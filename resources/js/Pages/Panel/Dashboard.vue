<script setup>
import { inject } from "vue";
import Layout from "@larasar/js/Layouts/Panel.vue";
import Stat from "@larasar/js/Components/Stat.vue";
import { symRoundedGroups, symRoundedQueryStats } from "@quasar/extras/material-symbols-rounded";
import { route } from "@larasar/js/lib/ziggy";

const $props = defineProps({
    visitor: {
        default: () => ({ today: {}, yesterday: {} }),
        required: true,
        type: Object,
    },
    searcher: {
        default: () => ({ today: {}, yesterday: {} }),
        required: true,
        type: Object,
    },
});
const context = inject("context");
const panel = context.to_panel();
const store = panel.get_store()();
</script>
<template>
    <Layout>
        <div class="grid grid-cols-3 gap-2 sm:gap-4">
            <Stat
                v-ripple
                title="Visitors Today"
                :store="store"
                :icon="symRoundedGroups"
                :count="visitor.today.length"
                :desc="visitor.yesterday.length + ' yesterday'"
                :href="route('web.panel.analitycs.visitor.index')"
                class="relative cursor-pointer"
            />
            <Stat
                v-ripple
                title="Searcher Today"
                :store="store"
                :icon="symRoundedQueryStats"
                :count="searcher.today.length"
                :desc="searcher.yesterday.length + ' yesterday'"
                :href="route('web.panel.analitycs.searcher.index')"
                class="relative cursor-pointer"
            />
        </div>
    </Layout>
</template>
