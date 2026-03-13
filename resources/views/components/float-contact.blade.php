    <div class="flex flex-col items-center gap-2" x-data="{ open: false }">

        <div x-show="open" x-transition class="flex flex-col items-center gap-2 mb-3">

            <a href="#" class="bg-white px-3 py-1 rounded shadow">Line</a>
            <a href="#" class="bg-white px-3 py-1 rounded shadow">Facebook</a>
            <a href="#" class="bg-white px-3 py-1 rounded shadow">Tel</a>
        </div>
        <div @click="open=!open" @click.away="open = false"
            class="w-20 h-20 group flex items-center gap-2 px-4 py-3 rounded-full
        bg-blue-500/80 backdrop-blur-md border border-white/30
        shadow-lg shadow-blue-500/30
        text-white font-medium
        hover:bg-blue-600 transition-all duration-300">


            <span class="text-xs">ติดต่อเรา</span>
        </div>
    </div>
