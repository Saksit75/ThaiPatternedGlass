@props([
    'image' => '',
    'alt' => '',
    'title' => '',
    'content' => '',
])

<div class="relative w-full h-full flex flex-col transform hover:scale-105 transition-all duration-300 ease-out ">
    <img src="{{ $image }}" alt="{{ $alt }}" class="object-cover h-64 w-full rounded-box">
    <div
        class="absolute bottom-0 right-0 flex flex-col w-full px-4 py-2 shadow-lg bg-linear-to-l from-white dark:from-green-400/10 via-white/75 to-transparent rounded-br-box">
        <h2 class="text-lg font-semibold text-end">{{ $title }}</h2>
        <p class="text-sm text-gray-600 text-end">{{ $content }}</p>
    </div>
</div>
