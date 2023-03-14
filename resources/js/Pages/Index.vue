<script setup>
import { Head, Link, router } from "@inertiajs/vue3";
import TopBar from "@/Components/TopBar.vue";
import Button from "primevue/button";
import InputText from "primevue/inputtext";
import Tooltip from "primevue/tooltip";
import Footer from "@/Components/Footer.vue";

defineProps({
    data: {
        default: () => [],
        type: Array,
        required: true,
    },
    log: {
        default: () => [],
        type: Array,
        required: true,
    },
});
</script>
<script>
export default {
    directives: {
        tooltip: Tooltip,
    },
    components: { Link },
};
</script>
<style lang="scss" scoped></style>

<template>
    <Head title="Home" />
    <TopBar />
    <div class="px-[25px] md:px-[70px] mt-32 font-arabic">
        <div class="grid gap-10 md:grid-cols-4 grid-cols-none">
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
                    <img src="/al-quran.png" class="w-[150px]" alt="" />
                    <span class="capitalize font-bold text-[30px] text-center"
                        >tafsir Al-Qur'an digital</span
                    >
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
            </div>
        </div>
        <div class="mt-9">
            <div
                class="capitalize text-[15px] font-bold flex items-center gap-2"
            >
                <i class="pi pi-angle-double-right"></i>
                <span>daftar surah</span>
            </div>
            <hr class="h-1 bg-[#c6c1c1] rounded-lg" />
            <div class="grid grid-cols-none md:grid-cols-3 gap-4 py-3">
                <Link
                    v-for="item in data"
                    :href="route('web.detail-surah', { surah: item.id })"
                >
                    <div
                        class="p-1.5 bg-white border border-[#466970] rounded-lg flex gap-4 items-center transition ease-in-out delay-150 duration-300 hover:shadow-md hover:scale-[1.02]"
                    >
                        <div
                            class="w-[35px] flex justify-center items-cente p-1.5"
                            style="background-image: url(/icon_number.svg)"
                        >
                            <span
                                class="p-1.5 m-0 font-bold text-[12px] leading-4 text-center"
                                >{{ item.number }}</span
                            >
                        </div>
                        <div class="flex-1">
                            <div class="capitalize font-bold">
                                {{ item.name_latin }}
                                <small class="font-normal"
                                    >({{ item.name_id }})</small
                                >
                            </div>
                            <div
                                class="capitalize flex items-center gap-2 text-[10px]"
                            >
                                {{ item.place }}
                                <i
                                    class="pi pi-bookmark-fill"
                                    style="font-size: 6px"
                                ></i>
                                {{ item.ayat_count }} ayat
                            </div>
                        </div>
                        <div class="font-bold text-[15px]">
                            {{ item.name_arab }}
                        </div>
                    </div>
                </Link>
            </div>
        </div>
    </div>
    <Footer />
</template>
