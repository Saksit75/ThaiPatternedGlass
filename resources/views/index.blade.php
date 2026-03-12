@extends('layouts.main')
{{-- GA4 + Facebook Pixel + TikTok Pixel --}}
@section('title', 'หน้าแรก')
@section('main-content')
    <x-carousel />

    <div class="container mx-auto flex flex-col gap-8 py-16 px-4">

        {{-- สินค้า --}}
        <section class="flex flex-col gap-8" data-aos="fade-up">
            <div class="flex flex-col items-center gap-2">
                <h2 class="text-3xl sm:text-4xl font-bold text-center text-gray-800">สินค้า</h2>
                <div class="w-12 h-1 bg-blue-500 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @for ($i = 0; $i < 3; $i++)
                    <div data-aos="zoom-in" data-aos-delay="{{ $i * 100 }}">
                        <x-card image="/images/products/p-{{ ($i % 3) + 1 }}.jpg" alt="กระจกลายไทย"
                            title="สินค้า {{ $i + 1 }}" content="รายละเอียดสินค้า {{ $i + 1 }}" />
                    </div>
                @endfor
            </div>
        </section>

        <hr class="border-gray-100">

        {{-- ตัวอย่างผลงาน --}}
        <section class="flex flex-col gap-8" data-aos="fade-up">
            <div class="flex flex-col items-center gap-2">
                <h2 class="text-3xl sm:text-4xl font-bold text-center text-gray-800">ตัวอย่างผลงาน</h2>
                <div class="w-12 h-1 bg-blue-500 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @for ($i = 0; $i < 3; $i++)
                    <div data-aos="zoom-in" data-aos-delay="{{ $i * 100 }}">
                        <x-card image="/images/products/p-{{ ($i % 3) + 1 }}.jpg" alt="กระจกลายไทย"
                            title="ตัวอย่างผลงาน {{ $i + 1 }}" content="รายละเอียด {{ $i + 1 }}" />
                    </div>
                @endfor
            </div>
        </section>

        <hr class="border-gray-100">

        {{-- บทความ --}}
        <section class="flex flex-col gap-8" data-aos="fade-up">
            <div class="flex flex-col items-center gap-2">
                <h2 class="text-3xl sm:text-4xl font-bold text-center text-gray-800">บทความ</h2>
                <div class="w-12 h-1 bg-blue-500 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @for ($i = 0; $i < 3; $i++)
                    <div data-aos="zoom-in" data-aos-delay="{{ $i * 100 }}">
                        <x-card image="/images/products/p-{{ ($i % 3) + 1 }}.jpg" alt="กระจกลายไทย"
                            title="บทความ {{ $i + 1 }}" content="รายละเอียด {{ $i + 1 }}" />
                    </div>
                @endfor
            </div>
        </section>

        <hr class="border-gray-100">

        {{-- ใบรับรอง --}}
        <section class="flex flex-col gap-8" data-aos="fade-up">
            <div class="flex flex-col items-center gap-2">
                <h2 class="text-3xl sm:text-4xl font-bold text-center text-gray-800">ใบรับรอง</h2>
                <div class="w-12 h-1 bg-blue-500 rounded-full"></div>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 place-items-center justify-center">
                @for ($i = 0; $i < 7; $i++)
                    <img data-aos="zoom-in" data-aos-delay="{{ $i * 100 }}"
                        src="/images/cer/c-{{ ($i % 4) + 1 }}.jpg" alt="ใบรับรอง {{ $i + 1 }}"
                        class="w-full h-auto rounded-xl shadow-sm hover:shadow-md transition-shadow duration-200">
                @endfor
            </div>
        </section>

    </div>
@endsection
