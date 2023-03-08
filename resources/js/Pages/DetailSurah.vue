<script setup>
import { Head } from "@inertiajs/vue3";
import TopBar from "@/Components/TopBar.vue";
import Footer from "@/Components/Footer.vue";

defineProps({
    data: {
        default: () => [],
        type: Array,
        required: true,
    },
    surah: {
        default: () => [],
        type: Array,
        required: true,
    },
});
</script>

<template>
    <Head title="Detail Surah Al-Fatihah" />
    <TopBar />
    <div class="mt-20 font-arabic w-full px-36">
        <div
            class="capitalize text-[40px] font-bold flex justify-center items-center gap-10"
        >
            <i class="pi pi-bookmark"></i>
            surah {{ surah.name_latin }} <i class="pi pi-bookmark"></i>
        </div>
        <hr class="my-3" />
        <div v-for="item in data">
            <div class="grid gap-3">
                <div class="flex gap-5">
                    <div>
                        <div
                            class="mt-1 flex justify-center items-center p-2 bg-no-repeat w-[35px] h-[41px]"
                            style="
                                background-image: url(/icon_number.svg);
                                background-size: cover;
                            "
                        >
                            <span
                                class="p-1.5 m-0 font-bold text-[12px] leading-normal text-center"
                                >{{ item.number }}</span
                            >
                        </div>
                    </div>
                    <div class="grid gap-4 w-full">
                        <div
                            class="text-end font-medium text-[27px] leading-[2.5]"
                        >
                            {{ item.text_arab }}
                        </div>
                        <div class="text-lg font-roboto">
                            {{ item.text_id }}
                        </div>
                    </div>
                </div>
                <div class="flex gap-2">
                    <button
                        class="px-3 py-2 ml-14 bg-[#466970] text-[15px] flex items-center text-white w-max rounded-lg hover:bg-slate-400 hover:shadow-md hover:scale-[1.02]"
                    >
                        <i class="pi pi-file mr-1"></i> salin</button
                    ><button
                        class="px-3 py-2 bg-[#466970] text-[15px] flex items-center text-white w-max rounded-lg hover:bg-slate-400 hover:shadow-md hover:scale-[1.02]"
                    >
                        <i class="pi pi-caret-right"></i>
                    </button>
                </div>
            </div>
            <hr class="my-4" />
        </div>
    </div>
    <Footer />
</template>

<script>
export default {};
</script>
