<nav x-data="{ scrolled: false }" 
    @scroll.window="scrolled = (window.pageYOffset > 20) ? true : false"
    :class="{ 'shadow-lg border-none': scrolled, 'shadow-sm': !scrolled }"
    class="sticky top-0 z-50 w-full bg-white transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="font-bold text-xl">MyBrand</a>
            </div>

            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <a href="#" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-900">
                    Dashboard
                </a>
                <a href="#" class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 hover:text-gray-700">
                    Projects
                </a>
            </div>
        </div>
    </div>
</nav>