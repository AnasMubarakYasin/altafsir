<script setup>
import { Head } from "@inertiajs/vue3";
import TopBar from "../../Components/TopBar.vue";
import Foother from "../../Components/Foother.vue";
</script>

<template>
    <Head title="Detail Tafsir Surah Al-Fatihah" />
    <TopBar />
    <div class="px-[200px] mt-24 font-arabic">
        <div class="grid">
            <div
                class="capitalize text-[40px] font-bold flex justify-center items-center gap-10"
            >
                <i class="pi pi-bookmark"></i>
                tafsir surah al-fatihah <i class="pi pi-bookmark"></i>
            </div>
            <hr class="my-3" />
            <div class="grid gap-3">
                <span class="capitalize flex items-center font-bold text-[25px]"
                    >ayat
                    <button
                        class="px-2 bg-[#466970] text-[15px] ml-2 flex items-center text-white w-max rounded-lg hover:bg-slate-400 hover:shadow-md hover:scale-[1.02]"
                    >
                        <i class="pi pi-file mr-1"></i> salin
                    </button></span
                >
                <div class="flex justify-end font-medium text-[35px]">
                    اَلْحَمْدُ لِلّٰهِ رَبِّ الْعٰلَمِيْنَۙ
                </div>
                <span class="capitalize flex items-center font-bold text-[25px]"
                    >terjemahan
                    <button
                        class="px-2 bg-[#466970] text-[15px] ml-2 flex items-center text-white w-max rounded-lg hover:bg-slate-400 hover:shadow-md hover:scale-[1.02]"
                    >
                        <i class="pi pi-file mr-1"></i> salin
                    </button></span
                >
                <div class="text-[18px]">
                    Segala puji bagi Allah, Tuhan1) semesta alam
                </div>
                <span class="capitalize flex items-center font-bold text-[25px]"
                    >tafsir
                    <button
                        class="px-2 bg-[#466970] text-[15px] ml-2 flex items-center text-white w-max rounded-lg hover:bg-slate-400 hover:shadow-md hover:scale-[1.02]"
                    >
                        <i class="pi pi-file mr-1"></i> salin
                    </button></span
                >
                <div class="text-[18px]">
                    Pada ayat di atas, Allah memulai firman-Nya dengan menyebut
                    “Basmalah” untuk mengajarkan kepada hamba-Nya agar memulai
                    suatu perbuatan yang baik dengan menyebut basmalah, sebagai
                    pernyataan bahwa dia mengerjakan perbuatan itu karena Allah
                    dan kepada-Nyalah dia memohonkan pertolongan dan berkah.
                    Maka, pada ayat ini Allah mengajarkan kepada hamba-Nya agar
                    selalu memuji-Nya. Al-ḥamdu artinya pujian, karena kebaikan
                    yang diberikan oleh yang dipuji, atau karena suatu sifat
                    keutamaan yang dimilikinya. Semua nikmat yang telah
                    dirasakan dan didapat di alam ini dari Allah, sebab Dialah
                    yang menjadi sumber bagi semua nikmat. Hanya Allah yang
                    mempunyai sifat-sifat kesempurnaan. Karena itu Allah sajalah
                    yang berhak dipuji. Orang yang menyebut al-ḥamdu lillāh
                    bukan hanya mengakui bahwa puji itu untuk Allah semata,
                    melainkan dengan ucapannya itu dia memuji Allah. Rabb
                    artinya pemilik, pengelola dan pemelihara. Di dalamnya
                    terkandung arti mendidik, yaitu menyampaikan sesuatu kepada
                    keadaan yang sempurna dengan berangsur-angsur. ‘Ālamīn
                    artinya seluruh alam, yakni semua jenis makhluk. Alam itu
                    berjenis-jenis, yaitu alam tumbuh-tumbuhan, alam binatang,
                    alam manusia, alam benda, alam makhluk halus, umpamanya
                    malaikat, jin, dan alam yang lain. Ada mufasir mengkhususkan
                    ‘ālamīn pada ayat ini kepada makhluk-makhluk Allah yang
                    berakal yaitu manusia, malaikat dan jin. Tetapi ini
                    mempersempit arti kata yang sebenarnya amat luas. Dengan
                    demikian, Allah itu Pendidik seluruh alam, tak ada sesuatu
                    pun dari makhluk Allah yang terlepas dari didikan-Nya. Tuhan
                    mendidik makhluk-Nya de-ngan seluas arti kata itu. Sebagai
                    pendidik, Dia menumbuhkan, menjaga, mem-berikan daya
                    (tenaga) dan senjata kepada makhluk itu, guna kesempurnaan
                    hidupnya masing-masing. Siapa yang memperhatikan perjalanan
                    bintang-bintang, menyelidiki kehi-dupan tumbuh-tumbuhan dan
                    binatang di laut dan di darat, mempelajari per-tumbuhan
                    manusia sejak dari rahim ibunya sampai ke masa kanak-kanak,
                    lalu menjadi manusia yang sempurna, tahulah dia bahwa tidak
                    ada sesuatu juga dari makhluk Allah yang terlepas dari
                    penjagaan, pemeliharaan, asuhan dan inayah-Nya.
                </div>
            </div>
        </div>
    </div>
    <Foother />
</template>

<script>
export default {};
</script>
