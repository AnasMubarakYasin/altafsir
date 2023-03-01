<script setup>
import Button from "primevue/button";
</script>

<template>
    <div class="bg-[#4669707c] p-5 py-3 flex items-center">
        <span class="font-extrabold text-black"
            >© 2023 - ALL RIGHTS RESERVED | AL-TAFSIR</span
        >
    </div>
    <transition name="back-to-top-fade">
        <div
            class="vue-back-to-top"
            :style="`bottom:${this.bottom};right:${this.right};`"
            v-show="visible"
            @click="backToTop"
        >
            <button
                class="flex items-center justify-center fixed bottom-7 right-7 h-10 w-10 rounded-full bg-slate-600 hover:border hover:scale-110 transition ease-in-out delay-150 duration-300 hover:shadow-md"
            >
                <i class="pi pi-angle-double-up" style="color: white"></i>
            </button>
        </div>
    </transition>
</template>

<style lang="scss" scoped></style>

<script>
export default {
    name: "BackToTop",
    props: {
        visibleoffset: {
            type: [String, Number],
            default: 150,
        },
        visibleoffsetbottom: {
            type: [String, Number],
            default: 0,
        },
        right: {
            type: String,
            default: "30px",
        },
        bottom: {
            type: String,
            default: "40px",
        },
        scrollFn: {
            type: Function,
            default: function (eventObject) {},
        },
    },
    data() {
        return {
            visible: false,
        };
    },
    mounted() {
        window.smoothscroll = () => {
            let currentScroll =
                document.documentElement.scrollTop || document.body.scrollTop;
            if (currentScroll > 0) {
                window.requestAnimationFrame(window.smoothscroll);
                window.scrollTo(
                    0,
                    Math.floor(currentScroll - currentScroll / 5)
                );
            }
        };
        window.addEventListener("scroll", this.catchScroll);
    },
    destroyed() {
        window.removeEventListener("scroll", this.catchScroll);
    },
    methods: {
        /**
         * Catch window scroll event
         * @return {void}
         */
        catchScroll() {
            const pastTopOffset =
                window.pageYOffset > parseInt(this.visibleoffset);
            const pastBottomOffset =
                window.innerHeight + window.pageYOffset >=
                document.body.offsetHeight - parseInt(this.visibleoffsetbottom);
            this.visible =
                parseInt(this.visibleoffsetbottom) > 0
                    ? pastTopOffset && !pastBottomOffset
                    : pastTopOffset;
            this.scrollFn(this);
        },
        /**
         * The function who make the magics
         * @return {void}
         */
        backToTop() {
            window.smoothscroll();
            this.$emit("scrolled");
        },
    },
};
</script>
