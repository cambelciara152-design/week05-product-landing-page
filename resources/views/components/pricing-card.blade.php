@props([
    'name',
    'price',
    'description',
    'features',
    'featured' => false
])

<div class="{{ $featured ? 'border-[#c97878] ring-2 ring-[#c97878]/20' : 'border-[#f0dfdc]' }} relative flex flex-col rounded-3xl border bg-white p-7 shadow-sm transition hover:-translate-y-1 hover:shadow-xl">

    @if($featured)
        <span class="absolute -top-3 left-1/2 -translate-x-1/2 rounded-full bg-[#c97878] px-4 py-1 text-xs font-semibold text-white">
            Most Popular
        </span>
    @endif

    <h3 class="text-xl font-semibold text-[#493636]">
        {{ $name }}
    </h3>

    <p class="mt-2 text-sm text-[#806f6f]">
        {{ $description }}
    </p>

    <div class="mt-6">
        <span class="text-4xl font-bold text-[#493636]">
            ₱{{ $price }}
        </span>
        <span class="text-sm text-[#806f6f]"> / bouquet</span>
    </div>

    <ul class="mt-6 space-y-3 text-sm text-[#685858]">
        @foreach($features as $feature)
            <li class="flex gap-3">
                <span class="font-semibold text-[#c97878]">✓</span>
                <span>{{ $feature }}</span>
            </li>
        @endforeach
    </ul>

    <a href="#contact"
       class="mt-8 rounded-full {{ $featured ? 'bg-[#c97878] text-white hover:bg-[#b86666]' : 'border border-[#e5c9c5] text-[#704d4d] hover:bg-[#fdf0ed]' }} px-5 py-3 text-center text-sm font-semibold transition">
        Choose {{ $name }}
    </a>
</div>