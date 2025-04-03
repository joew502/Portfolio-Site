<?php require 'partials/header.php'; ?>
<div class="min-h-full">
    <?php require 'partials/nav.php'; ?>
    <main class="mt-16">
        <div class="bg-[url('/assets/Home-Image-2.png')] bg-cover bg-center h-[300px] sm:h-[400px] lg:h-[500px] xl:h-[600px] 2xl:h-[700px]">
            <div class="bg-black bg-opacity-50 h-full flex items-center justify-center">
                <div class="text-center text-white mx-10 max-w-md sm:max-w-lg lg:max-w-2xl xl:max-w-3xl 2xl:max-w-3xl">
                    <div class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl font-bold">Hi, I'm Joe</div>
                    <div class="text-lg sm:text-xl lg:text-2xl xl:text-3xl 2xl:text-4xl">A software engineer and operations manager with a passion for technology and innovation.</div>
                </div>
            </div>
        </div>
        <div class="mx-auto max-w-lg sm:max-w-5xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="w-full grid grid-cols-1 gap-5 sm:grid-cols-2">
                <a href="/cv" class="w-full block sm:flex justify-center border rounded-lg border-gray-300 shadow-lg p-3 shadow-gray-300 bg-white">
                    <div class="mt-2 sm:mt-0 ml-2 sm:ml-4 flex flex-1 flex-col">
                        <div class="flex justify-between text-base font-medium text-black">
                            <div class="text-xl font-bold">
                                CV
                            </div>
                        </div>
                        <p class="mt-1 text-base text-black">Discover my skills and experience as a Computer Science graduate and Operations Manager.</p>
                    </div>
                </a>
                
                <a href="/services" class="w-full block sm:flex justify-center border rounded-lg border-gray-300 shadow-lg p-3 shadow-gray-300 bg-white">
                    <div class="mt-2 sm:mt-0 ml-2 sm:ml-4 flex flex-1 flex-col">
                        <div class="flex justify-between text-base font-medium text-black">
                            <div class="text-xl font-bold">
                                Services
                            </div>
                        </div>
                        <p class="mt-1 text-base text-black">Explore my software engineering and technical operations services.</p>
                    </div>
                </a>

                <a href="/projects" class="w-full block sm:flex justify-center border rounded-lg border-gray-300 shadow-lg p-3 shadow-gray-300 bg-white">
                    <div class="mt-2 sm:mt-0 ml-2 sm:ml-4 flex flex-1 flex-col">
                        <div class="flex justify-between text-base font-medium text-black">
                            <div class="text-xl font-bold">
                                Projects
                            </div>
                        </div>
                        <p class="mt-1 text-base text-black">Check out my software projects, including web, mobile, and desktop apps.</p>
                    </div>
                </a>

                <a href="/contact" class="w-full block sm:flex justify-center border rounded-lg border-gray-300 shadow-lg p-3 shadow-gray-300 bg-white">
                    <div class="mt-2 sm:mt-0 ml-2 sm:ml-4 flex flex-1 flex-col">
                        <div class="flex justify-between text-base font-medium text-black">
                            <div class="text-xl font-bold">
                                Contact Me
                            </div>
                        </div>
                        <p class="mt-1 text-base text-black">Reach out for job opportunities, freelance work, or a chat about possibilities!</p>
                    </div>
                </a>
    
            </div>
        </div>
    </main>
</div>
<?php require 'partials/footer.php'; ?>