<x-layouts.app title="Fuzzy Fleur | Flowers That Never Fade">

    <x-navbar />

    <main>

        <x-hero />

        {{-- Features --}}
        <section id="features" class="bg-white py-20 lg:py-24">
            <div class="mx-auto max-w-7xl px-5 lg:px-8">

                <div class="mx-auto max-w-2xl text-center">
                    <span class="text-sm font-semibold uppercase tracking-[0.2em] text-[#c97878]">
                        Why Fuzzy Fleur
                    </span>

                    <h2 class="mt-3 text-3xl font-bold text-[#493636] sm:text-4xl">
                        Small details, beautiful memories
                    </h2>

                    <p class="mt-4 text-[#806f6f]">
                        Every flower is thoughtfully crafted to make your gift
                        feel personal and meaningful.
                    </p>
                </div>

                <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

                    <x-feature-card
                        icon="🌸"
                        title="Handmade with Love"
                        description="Each flower is carefully handcrafted with attention to detail."
                    />

                    <x-feature-card
                        icon="✨"
                        title="Long-Lasting Beauty"
                        description="Enjoy beautiful flowers that do not wilt like traditional bouquets."
                    />

                    <x-feature-card
                        icon="🎨"
                        title="Fully Customizable"
                        description="Choose colors, flower styles, and arrangements that match your occasion."
                    />

                    <x-feature-card
                        icon="💝"
                        title="Perfect for Gifts"
                        description="A thoughtful choice for birthdays, anniversaries, graduations, and more."
                    />

                    <x-feature-card
                        icon="💰"
                        title="Affordable"
                        description="Beautiful handmade arrangements at friendly and accessible prices."
                    />

                    <x-feature-card
                        icon="🎁"
                        title="Made to Order"
                        description="Your bouquet is prepared with care based on your selected design."
                    />

                </div>
            </div>
        </section>

        {{-- Product Showcase --}}
        <section id="showcase" class="bg-[#fffaf8] py-20 lg:py-24">
            <div class="mx-auto max-w-7xl px-5 lg:px-8">

                <div class="grid items-center gap-12 lg:grid-cols-2">

                    {{-- Product Information --}}
                    <div>
                        <span class="text-sm font-semibold uppercase tracking-[0.2em] text-[#c97878]">
                            Product Showcase
                        </span>

                        <h2 class="mt-3 text-3xl font-bold text-[#493636] sm:text-4xl">
                            A bouquet made for your moment
                        </h2>

                        <p class="mt-5 max-w-xl leading-7 text-[#806f6f]">
                            From simple single flowers to thoughtful full bouquets,
                            discover handmade pieces designed to make someone smile.
                        </p>

                        {{-- Key Highlights --}}
                        <div class="mt-8 space-y-5">

                            <div class="flex gap-4">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-[#f9e4e1] text-xl">
                                    💐
                                </div>

                                <div>
                                    <h3 class="font-semibold text-[#493636]">
                                        Signature Bouquets
                                    </h3>

                                    <p class="mt-1 text-sm leading-6 text-[#806f6f]">
                                        Carefully arranged fuzzy-wire flowers for birthdays,
                                        anniversaries, and other special occasions.
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-[#eadce8] text-xl">
                                    🌷
                                </div>

                                <div>
                                    <h3 class="font-semibold text-[#493636]">
                                        Single Flowers
                                    </h3>

                                    <p class="mt-1 text-sm leading-6 text-[#806f6f]">
                                        Simple and sweet handmade flowers for everyday
                                        appreciation and small surprises.
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-[#f3e5d0] text-xl">
                                    🎀
                                </div>

                                <div>
                                    <h3 class="font-semibold text-[#493636]">
                                        Custom Gifts
                                    </h3>

                                    <p class="mt-1 text-sm leading-6 text-[#806f6f]">
                                        Personalized arrangements created around your
                                        preferred colors and gift ideas.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- Product Preview --}}
                    <div class="rounded-[2rem] bg-white p-5 shadow-xl shadow-[#8b6666]/10">

                        <div class="rounded-[1.5rem] bg-[#f9e9e5] p-5">

                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-xs font-medium uppercase tracking-[0.18em] text-[#b47b7b]">
                                        Featured Collection
                                    </p>

                                    <h3 class="mt-1 text-xl font-bold text-[#493636]">
                                        Handmade Favorites
                                    </h3>
                                </div>

                                <div class="flex h-10 w-10 items-center justify-center rounded-full bg-white shadow-sm">
                                    🌸
                                </div>
                            </div>

                            {{-- Product Cards --}}
                            <div class="mt-5 grid grid-cols-2 gap-4">

                                <div class="rounded-2xl bg-white p-4 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
                                    <div class="overflow-hidden rounded-xl">
                                        <img
                                            src="https://images.unsplash.com/photo-1496290650525-29188efb34e0?auto=format&fit=crop&w=700&q=85"
                                            alt="Rose bouquet"
                                            class="h-32 w-full object-cover transition duration-500 hover:scale-105"
                                        >
                                    </div>

                                    <h4 class="mt-3 font-semibold text-[#493636]">
                                        Rose Bouquet
                                    </h4>

                                    <p class="mt-1 text-xs text-[#806f6f]">
                                        Handmade flowers
                                    </p>

                                    <p class="mt-2 font-bold text-[#c97878]">
                                        ₱399
                                    </p>
                                </div>

                                <div class="rounded-2xl bg-white p-4 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
                                    <div class="overflow-hidden rounded-xl">
                                        <img
                                            src="https://images.unsplash.com/photo-1716136243839-65d7135ec2e8?auto=format&fit=crop&w=700&q=85"
                                            alt="Tulip bouquet"
                                            class="h-32 w-full object-cover transition duration-500 hover:scale-105"
                                        >
                                    </div>

                                    <h4 class="mt-3 font-semibold text-[#493636]">
                                        Tulip Bouquet
                                    </h4>

                                    <p class="mt-1 text-xs text-[#806f6f]">
                                        Handmade flowers
                                    </p>

                                    <p class="mt-2 font-bold text-[#c97878]">
                                        ₱399
                                    </p>
                                </div>

                                <div class="rounded-2xl bg-white p-4 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
                                    <div class="overflow-hidden rounded-xl">
                                        <img
                                            src="https://images.unsplash.com/photo-1779694540389-2e150caf6590?auto=format&fit=crop&w=700&q=85"
                                            alt="Sunflower bouquet"
                                            class="h-32 w-full object-cover transition duration-500 hover:scale-105"
                                        >
                                    </div>

                                    <h4 class="mt-3 font-semibold text-[#493636]">
                                        Sunflower
                                    </h4>

                                    <p class="mt-1 text-xs text-[#806f6f]">
                                        Single flower
                                    </p>

                                    <p class="mt-2 font-bold text-[#c97878]">
                                        ₱199
                                    </p>
                                </div>

                                <div class="rounded-2xl bg-white p-4 shadow-sm transition hover:-translate-y-1 hover:shadow-md">
                                    <div class="overflow-hidden rounded-xl">
                                        <img
                                            src="https://images.unsplash.com/photo-1680563899402-26c3a712831f?auto=format&fit=crop&w=700&q=85"
                                            alt="Custom flower bouquet"
                                            class="h-32 w-full object-cover transition duration-500 hover:scale-105"
                                        >
                                    </div>

                                    <h4 class="mt-3 font-semibold text-[#493636]">
                                        Custom Mix
                                    </h4>

                                    <p class="mt-1 text-xs text-[#806f6f]">
                                        Personalized bouquet
                                    </p>

                                    <p class="mt-2 font-bold text-[#c97878]">
                                        ₱699
                                    </p>
                                </div>

                            </div>

                            {{-- Mobile Preview / Order Highlight --}}
                            <div class="mt-5 rounded-2xl bg-[#493636] p-5 text-white">

                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-xs uppercase tracking-[0.15em] text-[#f1c5c0]">
                                            Mobile-friendly
                                        </p>

                                        <h4 class="mt-1 font-semibold">
                                            Easy to browse and order
                                        </h4>
                                    </div>

                                    <div class="text-3xl">
                                        📱
                                    </div>
                                </div>

                                <div class="mt-4 flex items-center justify-between rounded-xl bg-white/10 px-4 py-3 text-sm">
                                    <span class="text-[#ead8d5]">
                                        Custom Bouquet
                                    </span>

                                    <span class="font-semibold text-[#f1c5c0]">
                                        ₱699
                                    </span>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </section>

        {{-- Pricing --}}
        <section id="pricing" class="bg-white py-20 lg:py-24">
            <div class="mx-auto max-w-7xl px-5 lg:px-8">

                <div class="mx-auto max-w-2xl text-center">
                    <span class="text-sm font-semibold uppercase tracking-[0.2em] text-[#c97878]">
                        Simple Pricing
                    </span>

                    <h2 class="mt-3 text-3xl font-bold text-[#493636] sm:text-4xl">
                        Choose your perfect bouquet
                    </h2>

                    <p class="mt-4 text-[#806f6f]">
                        Beautiful handmade options for different budgets and occasions.
                    </p>
                </div>

                <div class="mt-12 grid gap-6 lg:grid-cols-3">

                    <x-pricing-card
                        name="Mini"
                        price="199"
                        description="A simple little surprise."
                        :features="[
                            '1–2 handmade flowers',
                            'Simple wrapping',
                            'Choice of flower color',
                            'Gift-ready presentation'
                        ]"
                    />

                    <x-pricing-card
                        name="Classic"
                        price="399"
                        description="Our most-loved arrangement."
                        :featured="true"
                        :features="[
                            '3–5 handmade flowers',
                            'Premium wrapping',
                            'Custom color combination',
                            'Personalized message card'
                        ]"
                    />

                    <x-pricing-card
                        name="Premium"
                        price="699"
                        description="A bigger gesture for someone special."
                        :features="[
                            '6–10 handmade flowers',
                            'Premium bouquet arrangement',
                            'Fully customizable colors',
                            'Personalized message card'
                        ]"
                    />

                </div>

                <p class="mt-8 text-center text-xs text-[#9a8585]">
                    *Prices shown are sample project pricing for demonstration purposes.
                </p>

            </div>
        </section>

        {{-- Testimonials --}}
        <section id="testimonials" class="bg-[#fffaf8] py-20 lg:py-24">
            <div class="mx-auto max-w-7xl px-5 lg:px-8">

                <div class="mx-auto max-w-2xl text-center">
                    <span class="text-sm font-semibold uppercase tracking-[0.2em] text-[#c97878]">
                        Customer Love
                    </span>

                    <h2 class="mt-3 text-3xl font-bold text-[#493636] sm:text-4xl">
                        Loved by flower-givers
                    </h2>

                    <p class="mt-4 text-[#806f6f]">
                        Thoughtful handmade flowers for meaningful moments.
                    </p>
                </div>

                <div class="mt-12 grid gap-6 md:grid-cols-3">

                    <x-testimonial-card
                        name="Sofia Reyes"
                        role="Happy Customer"
                        initial="S"
                        review="The bouquet was so cute and the quality was amazing. It made the perfect birthday gift."
                    />

                    <x-testimonial-card
                        name="Mia Santos"
                        role="Repeat Customer"
                        initial="M"
                        review="I love that the flowers can last for a long time. The custom colors made my gift extra special."
                    />

                    <x-testimonial-card
                        name="Andrea Cruz"
                        role="Customer"
                        initial="A"
                        review="The design was beautiful and the handmade details made the bouquet feel very personal."
                    />

                </div>

            </div>
        </section>

        {{-- CTA --}}
        <section class="px-5 py-20 lg:px-8">
            <div class="mx-auto max-w-7xl overflow-hidden rounded-[2.5rem] bg-[#493636] px-6 py-16 text-center shadow-xl sm:px-12">

                <div class="mx-auto max-w-2xl">

                    <span class="text-sm font-semibold uppercase tracking-[0.2em] text-[#f1c5c0]">
                        Make it memorable
                    </span>

                    <h2 class="mt-4 text-3xl font-bold text-white sm:text-4xl">
                        Give flowers that stay beautiful.
                    </h2>

                    <p class="mx-auto mt-4 max-w-xl text-sm leading-7 text-[#e9d8d5] sm:text-base">
                        Whether it is a celebration or a simple
                        “I’m thinking of you,” Fuzzy Fleur helps you turn
                        your feelings into something beautiful.
                    </p>

                    <div class="mt-8 flex flex-col justify-center gap-3 sm:flex-row">
                        <x-button href="#pricing">
                            Start Your Order
                        </x-button>

                        <a href="#contact"
                        class="inline-flex items-center justify-center rounded-full border border-white/20 px-6 py-3 text-sm font-semibold text-white transition hover:bg-white/10">
                            Contact Us
                        </a>
                    </div>

                </div>

            </div>
        </section>

    </main>

    <x-footer />

</x-layouts.app>