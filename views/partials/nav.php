<nav class="fixed top-0 w-full bg-[#ff914d]">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <a href="/" class="px-3 py-2 text-2xl font-medium text-white" aria-current="page"><b>Joe Wilson</b>.dev</a>
            </div>
            <div class="hidden md:block">
                <div class="flex items-baseline space-x-4 float-right">
                    <a href="/" class="<?= urlIs("/") ? 'bg-[#ff690D]' : 'hover:bg-[#ffB88C]' ?> rounded-md px-3 py-2 font-medium text-sm text-white">Home</a>
                    <a href="/cv" class="<?= urlIs("/cv") ? 'bg-[#ff690D]' : 'hover:bg-[#ffB88C]' ?> rounded-md px-3 py-2 font-medium text-sm text-white">CV</a>
                    <a href="/projects" class="<?= urlIs("/projects") ? 'bg-[#ff690D]' : 'hover:bg-[#ffB88C]' ?> rounded-md px-3 py-2 font-medium text-sm text-white">Projects</a>
                    <a href="/contact" class="<?= urlIs("/contact") ? 'bg-[#ff690D]' : 'hover:bg-[#ffB88C]' ?> rounded-md px-3 py-2 font-medium text-sm text-white">Contact</a>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button" onclick="toggleMenu()" class="relative inline-flex items-center justify-center rounded-md bg-[#ff690D] p-2 text-white hover:bg-[#ffB88C] focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!-- Menu open: "hidden", Menu closed: "block" -->
                    <svg class="block size-6" id="open-mobile-menu-icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!-- Menu open: "block", Menu closed: "hidden" -->
                    <svg class="hidden size-6" id="close-mobile-menu-icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div class="hidden md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <a href="/" class="<?= urlIs("/") ? 'bg-[#ff690D]' : 'hover:bg-[#ffB88C]' ?> block rounded-md px-3 py-2 font-medium text-base text-white">Home</a>
            <a href="/cv" class="<?= urlIs("/cv") ? 'bg-[#ff690D]' : 'hover:bg-[#ffB88C]' ?> block rounded-md px-3 py-2 font-medium text-base text-white">CV</a>
            <a href="/projects" class="<?= urlIs("/projects") ? 'bg-[#ff690D]' : 'hover:bg-[#ffB88C]' ?> block rounded-md px-3 py-2 font-medium text-base text-white">Projects</a>
            <a href="/contact" class="<?= urlIs("/contact") ? 'bg-[#ff690D]' : 'hover:bg-[#ffB88C]' ?> block rounded-md px-3 py-2 font-medium text-base text-white">Contact</a>
        </div>
    </div>
</nav>
<script src="/scripts/nav.js"></script>
