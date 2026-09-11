@props([
    'name',
    'role',
    'review',
    'initial'
])

<div class="rounded-3xl border border-[#f0dfdc] bg-white p-7 shadow-sm">
    <div class="flex items-center gap-4">
        <div class="flex h-12 w-12 items-center justify-center rounded-full bg-[#f5d8d4] font-semibold text-[#a85e5e]">
            {{ $initial }}
        </div>

        <div>
            <h3 class="font-semibold text-[#493636]">
                {{ $name }}
            </h3>

            <p class="text-sm text-[#8a7676]">
                {{ $role }}
            </p>
        </div>
    </div>

    <div class="mt-5 text-[#c97878]">
        ★★★★★
    </div>

    <p class="mt-4 text-sm leading-7 text-[#706060]">
        “{{ $review }}”
    </p>
</div>