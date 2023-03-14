<script setup>
import { Head } from "@inertiajs/vue3";
import TopBar from "@/Components/TopBar.vue";
import Footer from "@/Components/Footer.vue";
import { useToast } from "primevue/usetoast";
import Toast from "primevue/toast";

defineProps({
    surah: {
        default: () => [],
        type: Array,
        required: true,
    },
    ayat: {
        default: () => [],
        type: Array,
        required: true,
    },
    tafsir: {
        default: () => [],
        type: Array,
        required: true,
    },
});
const $toast = useToast();
async function clipboard(text) {
    await navigator.clipboard.writeText(text);
    $toast.add({
        severity: "success",
        summary: "Success Copy",
        detail: "Text Copied",
        life: 3000,
    });
}
</script>

<template>
    <Head title="Detail Tafsir Surah Al-Fatihah" />
    <TopBar />
    <Toast style="width: -webkit-fill-available; left: 20px" />
    <div class="px-[25px] sm:px-36 mt-24 font-sans">
        <div class="grid">
            <div
                class="capitalize text-[30px] sm:text-[40px] text-center font-bold flex justify-center items-center gap-10"
            >
                <i class="pi pi-bookmark"></i>
                tafsir surah {{ surah.name_latin }} {{ surah.number }}:{{
                    ayat.number
                }}
                <i class="pi pi-bookmark"></i>
            </div>
            <hr class="my-3" />
            <div class="grid gap-3">
                <span class="capitalize flex items-center font-bold text-[25px]"
                    >ayat
                    <button
                        class="px-2 bg-[#466970] text-[15px] ml-2 flex items-center text-white w-max rounded-lg hover:bg-slate-400 hover:shadow-md hover:scale-[1.02]"
                        @click="clipboard(ayat.text_arab)"
                    >
                        <i class="pi pi-file mr-1"></i> salin
                    </button></span
                >
                <div
                    class="flex font-arabic justify-end font-medium text-[27px] leading-[2.5]"
                >
                    {{ ayat.text_arab }}
                </div>
                <span class="capitalize flex items-center font-bold text-[25px]"
                    >terjemahan
                    <button
                        class="px-2 bg-[#466970] text-[15px] ml-2 flex items-center text-white w-max rounded-lg hover:bg-slate-400 hover:shadow-md hover:scale-[1.02]"
                        @click="clipboard(ayat.text_id)"
                    >
                        <i class="pi pi-file mr-1"></i> salin
                    </button></span
                >
                <div class="text-[18px]">
                    {{ ayat.text_id }}
                </div>
                <span class="capitalize flex items-center font-bold text-[25px]"
                    >tafsir
                    <button
                        class="px-2 bg-[#466970] text-[15px] ml-2 flex items-center text-white w-max rounded-lg hover:bg-slate-400 hover:shadow-md hover:scale-[1.02]"
                        @click="clipboard(ayat.text)"
                    >
                        <i class="pi pi-file mr-1"></i> salin
                    </button></span
                >
                <div class="text-[18px]">
                    {{ tafsir.text }}
                </div>
            </div>
        </div>
    </div>
    <Footer />
</template>

<script>
export default {};
</script>
