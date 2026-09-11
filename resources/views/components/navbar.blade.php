<nav class="fixed top-0 left-0 right-0 z-50 border-b border-[#f1dfdc] bg-[#fffaf8]/95 backdrop-blur-md">
    <div class="mx-auto max-w-7xl px-5 lg:px-8">

        <div class="flex items-center justify-between py-4">

            {{-- Logo --}}
            <a href="#home" class="flex items-center gap-2">
                <div class="flex h-10 w-10 items-center justify-center rounded-full bg-[#f6d7d2] text-xl">
                    🌸
                </div>

                <span class="text-xl font-bold tracking-tight text-[#4a3434]">
                    Fuzzy <span class="text-[#c97878]">Fleur</span>
                </span>
            </a>

            {{-- Desktop Navigation --}}
            <div class="hidden items-center gap-8 md:flex">
                <a href="#home" class="text-sm font-medium transition hover:text-[#c97878]">
                    Home
                </a>

                <a href="#features" class="text-sm font-medium transition hover:text-[#c97878]">
                    Features
                </a>

                <a href="#pricing" class="text-sm font-medium transition hover:text-[#c97878]">
                    Pricing
                </a>

                <a href="#testimonials" class="text-sm font-medium transition hover:text-[#c97878]">
                    Testimonials
                </a>

                <a href="#contact" class="text-sm font-medium transition hover:text-[#c97878]">
                    Contact
                </a>
            </div>

            {{-- Desktop Buttons --}}
            <div class="hidden items-center gap-3 md:flex">
                <a href="#" class="rounded-full px-4 py-2 text-sm font-medium hover:bg-[#f8e8e5]">
                    Sign In
                </a>

                <a href="#pricing"
                   class="rounded-full bg-[#c97878] px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-[#b86666] hover:shadow-md">
                    Get Started
                </a>
            </div>

            {{-- Mobile Menu Button --}}
            <button
                id="mobile-menu-button"
                type="button"
                class="rounded-lg p-2 text-2xl text-[#493636] md:hidden"
                aria-label="Open navigation menu"
            >
                ☰
            </button>

        </div>

        {{-- Mobile Navigation --}}
        <div id="mobile-menu" class="hidden border-t border-[#f1dfdc] pb-5 pt-4 md:hidden">

            <div class="flex flex-col gap-2">

                <a href="#home"
                   class="rounded-xl px-4 py-3 text-sm font-medium hover:bg-[#f8e8e5]">
                    Home
                </a>

                <a href="#features"
                   class="rounded-xl px-4 py-3 text-sm font-medium hover:bg-[#f8e8e5]">
                    Features
                </a>

                <a href="#pricing"
                   class="rounded-xl px-4 py-3 text-sm font-medium hover:bg-[#f8e8e5]">
                    Pricing
                </a>

                <a href="#testimonials"
                   class="rounded-xl px-4 py-3 text-sm font-medium hover:bg-[#f8e8e5]">
                    Testimonials
                </a>

                <a href="#contact"
                   class="rounded-xl px-4 py-3 text-sm font-medium hover:bg-[#f8e8e5]">
                    Contact
                </a>

                <div class="mt-2 flex gap-2">
                    <a href="#"
                       class="flex-1 rounded-full border border-[#e5c9c5] px-4 py-3 text-center text-sm font-semibold text-[#704d4d]">
                        Sign In
                    </a>

                    <a href="#pricing"
                       class="flex-1 rounded-full bg-[#c97878] px-4 py-3 text-center text-sm font-semibold text-white">
                        Get Started
                    </a>
                </div>

            </div>

        </div>

    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const button = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');

        button.addEventListener('click', function () {
            menu.classList.toggle('hidden');
        });

        menu.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                menu.classList.add('hidden');
            });
        });
    });
</script>