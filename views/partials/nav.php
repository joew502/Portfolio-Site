<nav class="bg-[#ff914d]">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <a href="/" class="px-3 py-2 text-2xl font-medium text-white" aria-current="page"><b>Joe Wilson's</b> Portfolio</a>
            </div>
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4 float-right">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="/" class="rounded-md bg-[#ff690D] px-3 py-2 text-sm font-bold text-white" aria-current="page">Home</a>
                    <a href="/cv" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-[#ffB88C] hover:text-white">CV</a>
                    <a href="/projects" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-[#ffB88C] hover:text-white">Projects</a>
                    <a href="/contact" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-[#ffB88C] hover:text-white">Contact</a>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-[#ff690D] p-2 text-white hover:bg-[#ffB88C] hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!-- Menu open: "hidden", Menu closed: "block" -->
                    <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!-- Menu open: "block", Menu closed: "hidden" -->
                    <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="/" class="block rounded-md bg-[#ff690D] px-3 py-2 text-base font-medium text-white" aria-current="page">Home</a>
            <a href="/cv" class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-[#ffB88C] hover:text-white">CV</a>
            <a href="/projects" class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-[#ffB88C] hover:text-white">Projects</a>
            <a href="/contact" class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-[#ffB88C] hover:text-white">Contact</a>
        </div>
    </div>
</nav>