@props([
    'href' => '#',
    'variant' => 'primary'
])

<a href="{{ $href }}"
   class="{{ $variant === 'primary'
        ? 'bg-[#c97878] text-white hover:bg-[#b86666]'
        : 'border border-[#e5c9c5] bg-white text-[#704d4d] hover:bg-[#fdf0ed]' }}
        inline-flex items-center justify-center rounded-full px-6 py-3 text-sm font-semibold shadow-sm transition hover:-translate-y-0.5">
    {{ $slot }}
</a>