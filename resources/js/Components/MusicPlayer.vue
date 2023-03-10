<template>
    <div>
        <audio ref="audio" :src="src"></audio>
        <button
            class="px-3 py-2 bg-[#466970] text-[15px] flex items-center text-white w-max rounded-lg hover:bg-slate-400 hover:shadow-md hover:scale-[1.02]"
            @click="togglePlay"
        >
            {{ playing ? "Pause" : "Play" }}
        </button>
    </div>
</template>

<script>
export default {
    name: "MusicPlayer",
    props: {
        src: String,
    },
    data() {
        return {
            playing: false,
        };
    },
    methods: {
        togglePlay() {
            if (this.playing) {
                this.$refs.audio.pause();
            } else {
                this.$refs.audio.play();
            }
            this.playing = !this.playing;
        },
    },
};
</script>
