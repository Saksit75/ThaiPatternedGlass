@extends('layouts.main')
@section('title', 'ตัวอย่างผลงาน | บริษัท กระจกลวดลายไทย จำกัด')
@section('main-content')
    <div class="container mx-auto p-4 flex flex-col gap-4">
        <div class="flex flex-col items-center gap-2" data-aos="fade-up">
            <h1 class="text-3xl sm:text-4xl font-bold text-center text-gray-800">ตัวอย่างผลงาน</h1>
            <div class="w-12 h-1 bg-blue-500 rounded-full"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @for ($i = 0; $i < 30; $i++)
                <div data-aos="zoom-in" data-aos-delay="{{ $i * 100 }}">
                    <x-overlay-card image="/images/products/p-{{ ($i % 3) + 1 }}.jpg" alt="กระจกลายไทย"
                        title="ผลงาน {{ $i + 1 }}" content="รายละเอียดผลงาน {{ $i + 1 }}" />
                </div>
            @endfor
        </div>
    </div>
@endsection
