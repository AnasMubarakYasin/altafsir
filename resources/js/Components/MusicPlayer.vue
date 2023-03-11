<template>
    <audio
        ref="audio"
        :src="src"
        @ended="onAudioEnded"
        @playing="stopOtherAudio"
    ></audio>
    <button
        class="px-3 py-2 bg-[#466970] text-[15px] flex items-center text-white w-max rounded-lg hover:bg-slate-400 hover:shadow-md hover:scale-[1.02]"
        @click="togglePlay"
    >
        <!-- {{ isPlaying  ? return(<i class="pi pi-file mr-1"></i>) : "Play" }} -->
        <i v-if="isPlaying" class="pi pi-pause"></i>
        <i v-else class="pi pi-play"></i>
    </button>
</template>

<script>
export default {
    name: "MusicPlayer",
    props: {
        src: String,
    },
    data() {
        return {
            isPlaying: false,
        };
    },
    methods: {
        togglePlay() {
            if (this.isPlaying) {
                this.$refs.audio.pause();
            } else {
                this.$refs.audio.play();
            }
            this.isPlaying = !this.isPlaying;
        },
        onAudioEnded() {
            this.isPlaying = false;
        },
        stopOtherAudio() {
            const audios = document.getElementsByTagName("audio");
            for (let i = 0; i < audios.length; i++) {
                if (audios[i] !== this.$refs.audio) {
                    audios[i].pause();
                    audios[i].currentTime = 0;
                }
            }
        },
    },
};
</script>
