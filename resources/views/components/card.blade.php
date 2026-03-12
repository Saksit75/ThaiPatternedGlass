@props([
    'image' => '',
    'alt' => '',
    'title' => '',
    'content' => '',
])

<div class="w-full h-full flex flex-col transform hover:scale-105 transition-all duration-300 ease-out">
    <img src="{{ $image }}" alt="{{ $alt }}" class="object-cover h-64 w-full rounded-t-2xl">
    <div class="flex flex-col bg-white backdrop-blur-md border border-white/30 px-4 py-2 rounded-b-2xl shadow-lg">
        <h2 class="text-lg font-semibold">{{ $title }}</h2>
        <p class="text-sm text-gray-600">{{ $content }}</p>
    </div>
</div>
