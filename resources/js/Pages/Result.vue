<script setup>
import { Head, Link } from "@inertiajs/vue3";
import TopBar from "@/Components/TopBar.vue";
import InputText from "primevue/inputtext";
import Button from "primevue/button";
import Tooltip from "primevue/tooltip";
import Footer from "@/Components/Footer.vue";

defineProps({
    data: {
        default: () => [],
        type: Array,
        required: true,
    },
    result: {
        default: () => "",
        required: true,
    },
    log: {
        default: () => [],
        type: Array,
        required: true,
    },
});
</script>

<template>
    <Head title="Search Results" />
    <TopBar />
    <div class="px-[25px] md:px-[70px] mt-32 font-arabic">
        <div class="grid gap-10 md:grid-cols-4">
            <div class="hidden md:block">
                <div
                    class="box-border w-full shadow-md rounded-lg bg-[#73959c5b] mt-3"
                >
                    <div
                        class="capitalize px-3 py-1 bg-[#46697075] rounded-t-lg text-center font-bold text-[18px]"
                    >
                        pencarian populer
                    </div>
                    <div class="p-3 h-[200px] overflow-auto">
                        <ul class="grid gap-1 list-none">
                            <li
                                v-for="item in log"
                                class="rounded-lg p-1 bg-[#4f798169] hover:bg-[#46697796]"
                                v-tooltip.top="item.text"
                            >
                                <button
                                    @click="
                                        router.get(route('web.result'), {
                                            search: item.text,
                                        })
                                    "
                                    class="text-[13px] subpixel-antialiased w-full text-start line-clamp-1"
                                >
                                    &#9755;
                                    <span class="font-bold">{{
                                        item.text
                                    }}</span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-span-2">
                <div class="grid justify-items-center">
                    <div class="w-full">
                        <form :action="route('web.result')">
                            <div class="p-inputgroup">
                                <InputText
                                    placeholder="cari topik"
                                    name="search"
                                />
                                <Button
                                    type="submit"
                                    icon="pi pi-search"
                                    class="p-button-secondary"
                                />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mt-3 font-sans">
                    <span class="capitalize text-[18px]"
                        >{{ data?.ayats?.length ?? 0 }} hasil pencarian untuk '
                        <span class="font-bold"> {{ result }} </span> '</span
                    >
                    <hr class="h-[2px] rounded-lg bg-[#35414174]" />
                    <div class="mt-2">
                        <div v-if="data == null" class="h-[358px]">
                            <div
                                class="grid place-content-center place-items-center pt-10 text-neutral-400 opacity-60"
                            >
                                <i class="pi pi-ban text-[70px]"></i>
                                <span class="text-[20px]">no data</span>
                            </div>
                        </div>
                        <div v-else v-for="ayat of data.ayats">
                            <div class="grid gap-3">
                                <Link
                                    :href="
                                        route('web.detail-tafsir', {
                                            ayat: ayat.id,
                                        })
                                    "
                                    class="capitalize text-[16px] text-[#1e6f8d] font-bold flex items-center"
                                    ><i
                                        class="pi pi-angle-double-right mr-1"
                                    ></i>
                                    surah {{ ayat.surah.name_latin }}
                                    {{ ayat.surah.number }}:{{ ayat.number }}
                                </Link>
                                <div
                                    class="ml-5 flex justify-end font-arabic font-medium leading-[70px] line-clamp-1 text-[25px]"
                                >
                                    {{ ayat.text_arab }}
                                </div>
                                <div class="ml-5 grid">
                                    <span class="capitalize text-[16px]"
                                        >terjemahan</span
                                    >
                                    <span>
                                        {{ ayat.text_id }}
                                    </span>
                                </div>
                                <div class="ml-5 grid">
                                    <span class="capitalize text-[16px]"
                                        >tafsir</span
                                    >
                                    <span class="line-clamp-2">{{
                                        ayat.tafsir.text
                                    }}</span>
                                </div>
                                <Link
                                    :href="
                                        route('web.detail-tafsir', {
                                            ayat: ayat.id,
                                        })
                                    "
                                    class="ml-5 p-3 py-1 bg-[#466970] text-white w-max rounded-lg hover:bg-slate-400 hover:shadow-md hover:scale-[1.02]"
                                >
                                    Detail</Link
                                >
                            </div>
                            <hr class="my-4" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Footer />
</template>

<script>
export default {
    directives: {
        tooltip: Tooltip,
    },
    components: { Link },
};
</script>
