<script setup>
import { Head } from "@inertiajs/vue3";
import TopBar from "../../Components/TopBar.vue";
import InputText from "primevue/inputtext";
import Button from "primevue/button";
import Tooltip from "primevue/tooltip";
import Foother from "../../Components/Foother.vue";
</script>

<template>
    <Head title="Search Results" />
    <TopBar />
    <div class="px-[70px] mt-32">
        <div class="grid gap-10 grid-cols-4">
            <div>
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
                                class="rounded-lg p-1 bg-[#4f798169] hover:bg-[#46697796]"
                                v-tooltip.top="'Lorem, ipsum dolor sit am...'"
                            >
                                <a
                                    href=""
                                    class="text-[13px] subpixel-antialiased"
                                    >&#9755;
                                    <span class="font-bold"
                                        >Lorem, ipsum dolor sit am...</span
                                    ></a
                                >
                            </li>
                            <li
                                class="rounded-lg p-1 bg-[#4f798169] hover:bg-[#46697796]"
                                v-tooltip.top="'Lorem, ipsum dolor sit am...'"
                            >
                                <a
                                    href=""
                                    class="text-[13px] subpixel-antialiased"
                                    >&#9755;
                                    <span class="font-bold"
                                        >Lorem, ipsum dolor sit am...</span
                                    ></a
                                >
                            </li>
                            <li
                                class="rounded-lg p-1 bg-[#4f798169] hover:bg-[#46697796]"
                                v-tooltip.top="'Lorem, ipsum dolor sit am...'"
                            >
                                <a
                                    href=""
                                    class="text-[13px] subpixel-antialiased"
                                    >&#9755;
                                    <span class="font-bold"
                                        >Lorem, ipsum dolor sit am...</span
                                    ></a
                                >
                            </li>
                            <li
                                class="rounded-lg p-1 bg-[#4f798169] hover:bg-[#46697796]"
                                v-tooltip.top="'Lorem, ipsum dolor sit am...'"
                            >
                                <a
                                    href=""
                                    class="text-[13px] subpixel-antialiased"
                                    >&#9755;
                                    <span class="font-bold"
                                        >Lorem, ipsum dolor sit am...</span
                                    ></a
                                >
                            </li>
                            <li
                                class="rounded-lg p-1 bg-[#4f798169] hover:bg-[#46697796]"
                                v-tooltip.top="'Lorem, ipsum dolor sit am...'"
                            >
                                <a
                                    href=""
                                    class="text-[13px] subpixel-antialiased"
                                    >&#9755;
                                    <span class="font-bold"
                                        >Lorem, ipsum dolor sit am...</span
                                    ></a
                                >
                            </li>
                            <li
                                class="rounded-lg p-1 bg-[#4f798169] hover:bg-[#46697796]"
                                v-tooltip.top="'Lorem, ipsum dolor sit am...'"
                            >
                                <a
                                    href=""
                                    class="text-[13px] subpixel-antialiased"
                                    >&#9755;
                                    <span class="font-bold"
                                        >Lorem, ipsum dolor sit am...</span
                                    ></a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-span-2">
                <div class="grid justify-items-center">
                    <div class="w-full">
                        <form :action="route('beranda.result')">
                            <div class="p-inputgroup">
                                <InputText placeholder="cari topik" />
                                <Button
                                    type="submit"
                                    icon="pi pi-search"
                                    class="p-button-secondary"
                                />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mt-3">
                    <span class="capitalize text-[18px]"
                        >hasil pencarian untuk '<span class="font-bold"
                            >result</span
                        >'</span
                    >
                    <hr class="h-[2px] rounded-lg bg-[#35414174]" />
                    <div class="mt-2">
                        <div class="grid gap-3">
                            <a
                                :href="route('beranda.detail-tafsir')"
                                class="capitalize text-[16px] text-[#1e6f8d] font-bold flex items-center"
                                ><i class="pi pi-angle-double-right mr-1"></i>
                                surah al-fatihah</a
                            >
                            <div
                                class="flex justify-end font-medium text-[25px]"
                            >
                                .... اَلْحَمْدُ لِلّٰهِ رَبِّ الْعٰلَمِيْنَۙ
                            </div>
                            <div class="ml-5 grid">
                                <span class="capitalize text-[16px]"
                                    >terjemahan</span
                                >
                                <span
                                    >Segala puji bagi Allah, Tuhan1) semesta
                                    alam ....</span
                                >
                            </div>
                            <div class="ml-5 grid">
                                <span class="capitalize text-[16px]"
                                    >tafsir</span
                                >
                                <span
                                    >Pada ayat di atas, Allah memulai firman-Nya
                                    dengan menyebut “Basmalah” untuk mengajarkan
                                    kepada hamba-Nya agar memulai suatu
                                    perbuatan...</span
                                >
                            </div>
                            <a
                                :href="route('beranda.detail-tafsir')"
                                class="ml-5 p-3 py-1 bg-[#466970] text-white w-max rounded-lg hover:bg-slate-400 hover:shadow-md hover:scale-[1.02]"
                                >Detailnya</a
                            >
                        </div>
                        <hr class="my-4" />
                        <div class="grid gap-3">
                            <a
                                :href="route('beranda.detail-tafsir')"
                                class="capitalize text-[16px] text-[#1e6f8d] font-bold flex items-center"
                                ><i class="pi pi-angle-double-right mr-1"></i>
                                surah al-fatihah</a
                            >
                            <div
                                class="flex justify-end font-medium text-[25px]"
                            >
                                .... اَلْحَمْدُ لِلّٰهِ رَبِّ الْعٰلَمِيْنَۙ
                            </div>
                            <div class="ml-5 grid">
                                <span class="capitalize text-[16px]"
                                    >terjemahan</span
                                >
                                <span
                                    >Segala puji bagi Allah, Tuhan1) semesta
                                    alam ....</span
                                >
                            </div>
                            <div class="ml-5 grid">
                                <span class="capitalize text-[16px]"
                                    >tafsir</span
                                >
                                <span
                                    >Pada ayat di atas, Allah memulai firman-Nya
                                    dengan menyebut “Basmalah” untuk mengajarkan
                                    kepada hamba-Nya agar memulai suatu
                                    perbuatan...</span
                                >
                            </div>
                            <a
                                :href="route('beranda.detail-tafsir')"
                                class="ml-5 p-3 py-1 bg-[#466970] text-white w-max rounded-lg hover:bg-slate-400 hover:shadow-md hover:scale-[1.02]"
                                >Detailnya</a
                            >
                        </div>
                        <hr class="my-4" />
                        <div class="grid gap-3">
                            <a
                                :href="route('beranda.detail-tafsir')"
                                class="capitalize text-[16px] text-[#1e6f8d] font-bold flex items-center"
                                ><i class="pi pi-angle-double-right mr-1"></i>
                                surah al-fatihah</a
                            >
                            <div
                                class="flex justify-end font-medium text-[25px]"
                            >
                                .... اَلْحَمْدُ لِلّٰهِ رَبِّ الْعٰلَمِيْنَۙ
                            </div>
                            <div class="ml-5 grid">
                                <span class="capitalize text-[16px]"
                                    >terjemahan</span
                                >
                                <span
                                    >Segala puji bagi Allah, Tuhan1) semesta
                                    alam ....</span
                                >
                            </div>
                            <div class="ml-5 grid">
                                <span class="capitalize text-[16px]"
                                    >tafsir</span
                                >
                                <span
                                    >Pada ayat di atas, Allah memulai firman-Nya
                                    dengan menyebut “Basmalah” untuk mengajarkan
                                    kepada hamba-Nya agar memulai suatu
                                    perbuatan...</span
                                >
                            </div>
                            <a
                                :href="route('beranda.detail-tafsir')"
                                class="ml-5 p-3 py-1 bg-[#466970] text-white w-max rounded-lg hover:bg-slate-400 hover:shadow-md hover:scale-[1.02]"
                                >Detailnya</a
                            >
                        </div>
                        <hr class="my-4" />
                        <div class="grid gap-3">
                            <a
                                :href="route('beranda.detail-tafsir')"
                                class="capitalize text-[16px] text-[#1e6f8d] font-bold flex items-center"
                                ><i class="pi pi-angle-double-right mr-1"></i>
                                surah al-fatihah</a
                            >
                            <div
                                class="flex justify-end font-medium text-[25px]"
                            >
                                .... اَلْحَمْدُ لِلّٰهِ رَبِّ الْعٰلَمِيْنَۙ
                            </div>
                            <div class="ml-5 grid">
                                <span class="capitalize text-[16px]"
                                    >terjemahan</span
                                >
                                <span
                                    >Segala puji bagi Allah, Tuhan1) semesta
                                    alam ....</span
                                >
                            </div>
                            <div class="ml-5 grid">
                                <span class="capitalize text-[16px]"
                                    >tafsir</span
                                >
                                <span
                                    >Pada ayat di atas, Allah memulai firman-Nya
                                    dengan menyebut “Basmalah” untuk mengajarkan
                                    kepada hamba-Nya agar memulai suatu
                                    perbuatan...</span
                                >
                            </div>
                            <a
                                :href="route('beranda.detail-tafsir')"
                                class="ml-5 p-3 py-1 bg-[#466970] text-white w-max rounded-lg hover:bg-slate-400 hover:shadow-md hover:scale-[1.02]"
                                >Detailnya</a
                            >
                        </div>
                        <hr class="my-4" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Foother />
</template>

<script>
export default {
    directives: {
        tooltip: Tooltip,
    },
};
</script>
