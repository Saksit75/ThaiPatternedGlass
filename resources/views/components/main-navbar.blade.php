<nav
    class="font-semibold flex items-center justify-between px-4 py-2 bg-linear-to-b from-gray-400 dark:from-green-400/10 to-transparent z-50">

    <a href="{{ url('/') }}" class="shrink-0">
        <img src="/logos/tpg-logo.png" class="w-16 md:w-20 lg:w-24" alt="TPG Logo">
    </a>

    <div
        class="hidden lg:flex items-center justify-center bg-white/20 backdrop-blur-md border border-white/30 px-4 py-1.5 rounded-full shadow-lg">
        <ul class="flex items-center justify-center  text-sm xl:text-base">
            <li class="relative group px-4 py-1.5">
                <div {{-- class="bg-white/40 backdrop-blur-md border border-white/30 px-4 py-1.5 rounded-full shadow-sm text-blue-800 flex items-center gap-1 cursor-pointer hover:scale-105 hover:text-blue-700 transition-all duration-200"> --}}
                    class=" flex items-center gap-1 cursor-pointer hover:scale-105 hover:text-blue-700 transition-all duration-200">
                    <a href="#">สินค้า</a>
                    <span
                        class="mdi mdi-chevron-down text-sm transition-transform duration-200 group-hover:rotate-180"></span>
                </div>

                <!-- Dropdown -->
                <div
                    class="absolute  left-1/2 -translate-x-1/2 pt-4 pointer-events-none opacity-0 group-hover:opacity-100 group-hover:pointer-events-auto transition-all duration-200 -translate-y-2 group-hover:translate-y-0 z-50">
                    <ul
                        class="bg-white/80 backdrop-blur-xl border border-white/30 rounded-2xl shadow-2xl p-2 flex flex-col gap-1 min-w-44 text-sm text-gray-800">

                        <li>
                            <a href="#"
                                class="flex items-center gap-2 px-4 py-2 rounded-full
                   hover:bg-white/30 hover:backdrop-blur-md hover:border-white/30 hover:shadow
                   transition-all duration-200 group/item">
                                <span
                                    class="mdi mdi-view-grid text-blue-500 group-hover/item:text-blue-700 transition-colors">
                                </span>
                                <span>ผลิตภัณฑ์</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center gap-2 px-4 py-2 rounded-full
                   hover:bg-white/30 hover:backdrop-blur-md
                   transition-all duration-200 group/item">

                                <span
                                    class="mdi mdi-book-open text-blue-500 group-hover/item:text-blue-700 transition-colors">
                                </span>

                                <span>แคตตาล็อก</span>

                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li><a href="{{ url('/project-reference') }}"
                    class="{{ request()->is('project-reference') ? 'bg-white/20 backdrop-blur-md border border-white/30  rounded-full shadow-lg text-blue-800' : '' }} px-4 py-1.5 inline-block hover:scale-105 hover:text-blue-700 transition-all duration-200">ตัวอย่างผลงาน</a>
            </li>
            <li><a href="#"
                    class="px-4 py-1.5 inline-block hover:scale-105 hover:text-blue-700 transition-all duration-200">บทความ</a>
            </li>
            <li><a href="#"
                    class="px-4 py-1.5 inline-block hover:scale-105 hover:text-blue-700 transition-all duration-200">ตัวแทนจำหน่าย</a>
            </li>
            <li><a href="#"
                    class="px-4 py-1.5 inline-block hover:scale-105 hover:text-blue-700 transition-all duration-200">เกี่ยวกับเรา</a>
            </li>
            <li class="relative group">
                <div
                    class=" px-4 py-1.5 flex items-center gap-1 cursor-pointer hover:scale-105 hover:text-blue-700 transition-all duration-200">
                    {{-- class="bg-white/40 backdrop-blur-md border border-white/30 px-4 py-1.5 rounded-full shadow-sm text-blue-800 flex items-center gap-1 cursor-pointer hover:scale-105 hover:text-blue-700 transition-all duration-200"> --}}

                    <a href="#">ติดต่อเรา</a>
                    <span
                        class="mdi mdi-chevron-down text-sm transition-transform duration-200 group-hover:rotate-180"></span>
                </div>

                <!-- Dropdown -->
                <div
                    class="absolute  left-1/2 -translate-x-1/2 pt-4 pointer-events-none opacity-0 group-hover:opacity-100 group-hover:pointer-events-auto transition-all duration-200 -translate-y-2 group-hover:translate-y-0 z-50">
                    <ul
                        class="bg-white/80 backdrop-blur-xl border border-white/30 rounded-2xl shadow-2xl p-2 flex flex-col gap-1 min-w-44 text-sm text-gray-800">

                        <li>
                            <a href="#"
                                class="flex items-center gap-2 px-4 py-2 rounded-full
                   hover:bg-white/30 hover:backdrop-blur-md hover:border-white/30 hover:shadow
                   transition-all duration-200 group/item">
                                <span
                                    class="mdi mdi-view-grid text-blue-500 group-hover/item:text-blue-700 transition-colors">
                                </span>
                                <span>สอบถาม</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center gap-2 px-4 py-2 rounded-full
                   hover:bg-white/30 hover:backdrop-blur-md hover:shadow
                   transition-all duration-200 group/item">

                                <span
                                    class="mdi mdi-book-open text-blue-500 group-hover/item:text-blue-700 transition-colors">
                                </span>

                                <span>ร่วมงานกับเรา</span>

                            </a>
                        </li>

                    </ul>
                </div>
            </li>
        </ul>
    </div>

    <div class="flex items-center gap-2">
        <div class="flex gap-2">
            <span
                class="mdi mdi-magnify text-lg md:text-xl bg-white/20 backdrop-blur-md border border-white/30 px-3 py-1.5 md:px-4 md:py-2 rounded-full shadow-lg cursor-pointer"></span>

            <span
                class="mdi mdi-menu text-lg md:text-xl lg:hidden bg-white/20 backdrop-blur-md border border-white/30 px-3 py-1.5 md:px-4 md:py-2 rounded-full shadow-lg cursor-pointer"></span>
        </div>

        <div
            class="hidden sm:flex items-center gap-2 bg-white/20 backdrop-blur-md border border-white/30 px-4 py-1.5 md:py-2 rounded-full shadow-lg text-sm md:text-base">
            <button class="hover:text-green-500 transition-colors">EN</button>
            <div class="opacity-30">|</div>
            <button class="hover:text-green-500 transition-colors">TH</button>
        </div>
    </div>
</nav>
