@extends('layouts.main')
@section('main-content')
    <x-carousel />
    <div class="container mx-auto flex flex-col gap-4 py-4">
        <div class="flex items-center justify-center p-6">
            <h1 class="text-6xl">สินค้า</h1>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            @for ($i = 0; $i < 9; $i++)
                <div class="w-full h-full flex flex-col">
                    <img src="/images/products/p-{{ ($i % 3) + 1 }}.jpg" alt="กระจกลายไทย"
                        class="object-cover h-62 rounded-t-box">
                    <div
                        class="flex flex-col bg-white/20 backdrop-blur-md border border-white/30 px-4 py-1.5 rounded-b-2xl shadow-lg">
                        <h2>หมวด 1</h2>
                        <p>อธิบายหมวด 1</p>
                    </div>
                </div>
            @endfor
        </div>

    </div>
@endsection
