@props([
    'icon',
    'title',
    'description'
])

<div class="group rounded-3xl border border-[#f0dfdc] bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl">
    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#f9e4e1] text-2xl transition group-hover:scale-105">
        {{ $icon }}
    </div>

    <h3 class="mt-5 text-lg font-semibold text-[#493636]">
        {{ $title }}
    </h3>

    <p class="mt-2 text-sm leading-6 text-[#806f6f]">
        {{ $description }}
    </p>
</div>