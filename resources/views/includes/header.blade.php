<div class="mx-auto w-full justify-center fixed z-50 bg-wood-100 duration-50">
    <div class="mx-auto w-full flex flex-col lg:flex-row lg:items-center lg:justify-between px-8 py-3 md:px-12 max-w-6xl 2xl:max-w-7xl"
        x-data="{ open: false }">
        <div class="items-center flex justify-between flex-row">
            <a class="items-center font-bold inline-flex text-black font-serif text-2xl" href="/">
                smart core
            </a>
            <button class="focus:outline-none focus:shadow-outline md:hidden" @click="open = !open">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                        d="M4 6h16M4 12h16M4 18h16" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    </path>
                    <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" d="M6 18L18 6M6 6l12 12"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                </svg>
            </button>
        </div>
        <nav :class="{ 'flex': open, 'hidden': !open }"
            class="flex-col items-center flex-grow hidden lg:flex lg:flex-row gap-3 lg:gap-6 lg:justify-start text-sm text-black">
            <a class="hover:text-salmon-600 lg:ml-auto" href="/overview">
                Представление
            </a>
            <a class="hover:text-salmon-600" href="/style">Стайлгайд
            </a>
            <a class="inline-flex justify-center py-1 px-6 h-10 items-center text-sm font-light tracking-wide focus:outline-none bg-black text-white hover:bg-mist-900 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-mist-600 active:bg-mist-700 active:text-white/80 disabled:opacity-30 disabled:hover:bg-mist-600"
                href="/contact">
                Свяжитесь с нами
            </a>
        </nav>
    </div>
</div>
