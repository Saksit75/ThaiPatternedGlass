<div data-aos="fade" class="relative w-full h-[90vh] bg-gray-200 overflow-hidden" x-data="{
    currentIndex: 0,
    images: [
        { url: '/images/a.webp', alt: 'กระจกลายพิกุล สีใส' },
        { url: '/images/b.webp', alt: 'กระจกลายพิกุล สีน้ำเงิน' },
        { url: '/images/c.webp', alt: 'กระจกลายโบราณ' },
        { url: '/images/d.webp', alt: 'กระจกลายทันสมัย' },
    ],
    timer: null,
    startInterval() {
        this.stopInterval();
        this.timer = setInterval(() => this.next(), 5000);
    },
    stopInterval() {
        if (this.timer) clearInterval(this.timer);
    },
    next() {
        this.currentIndex = (this.currentIndex + 1) % this.images.length;
        this.startInterval();
    },
    prev() {
        this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
        this.startInterval();
    }
}"
    x-init="startInterval()" @mouseenter="stopInterval()" @mouseleave="startInterval()">
    {{-- เพิ่อไม่ให้รูปเลื่อนเม่อเอาเมาส์ไปชี้ --}}


    <template x-for="(img, index) in images" :key="index">
        <div x-show="currentIndex === index" class="absolute inset-0" x-transition.opacity.duration.1000ms>
            <img :src="img.url" :alt="img.alt" class="w-full h-full object-cover">
        </div>
    </template>

    <button @click="prev()"
        class="cursor-pointer absolute  left-2 md:left-4 top-1/2 -translate-y-1/2 text-white drop-shadow-lg hover:scale-110 transition-transform bg-black/20 backdrop-blur-md border border-white/30 px-2 py-1 md:px-3 md:py-2 rounded-full shadow-lg">
        <span class="mdi mdi-chevron-left text-2xl md:text-4xl"></span>
    </button>

    <button @click="next()"
        class="cursor-pointer absolute  right-2 md:right-4 top-1/2 -translate-y-1/2 text-white drop-shadow-lg hover:scale-110 transition-transform bg-black/20 backdrop-blur-md border border-white/30 px-2 py-1 md:px-3 md:py-2 rounded-full shadow-lg">
        <span class="mdi mdi-chevron-right text-2xl md:text-4xl"></span>
    </button>

    <div class="absolute bottom-4 left-0 right-0 flex justify-center gap-1 text-white drop-shadow-md">
        <div
            class="bg-black/20 backdrop-blur-md border border-white/30 px-3 py-1 rounded-full shadow-lg flex items-center gap-1">
            <template x-for="(img, index) in images" :key="index">
                <span @click="currentIndex = index"
                    class="mdi mdi-circle text-[8px] md:text-[10px] cursor-pointer transition-opacity"
                    :class="currentIndex === index ? 'opacity-100' : 'opacity-40'">
                </span>
            </template>
        </div>
    </div>
</div>
