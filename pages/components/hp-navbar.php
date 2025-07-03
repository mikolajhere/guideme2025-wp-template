<header class="absolute top-0 right-0 left-0 z-20" :class="{ 'top-8 sm:top-11 xl:top-8': document.body.classList.contains('admin-bar') }">
    <div
        class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 xl:px-8"
        x-data="{ mobileMenu: false, languageDropdownOpen: false }">
        <div>
            <a href="/">
                <img
                    src="<?php echo esc_url(get_theme_file_uri('assets/img/svg/guide-log.svg')) ?>"
                    class=" h-10"
                    height="40"
                    alt="GuideMe Logo" />
            </a>
        </div>
        <div class="hidden xl:block">
            <nav>
                <ul
                    class="flex items-center space-x-4 text-sm tracking-widest uppercase">
                    <li>
                        <a href="#what-we-do" class="text-white hover:text-gray-300">What we do?</a>
                    </li>
                    <li>
                        <a href="#why-we-do-this" class="text-white hover:text-gray-300">Why we do this?</a>
                    </li>
                    <li>
                        <a href="#cooperation" class="text-white hover:text-gray-300">Cooperation</a>
                    </li>
                    <li>
                        <a href="/salomon" class="text-white hover:text-gray-300">Salomon</a>
                    </li>
                    <li>
                        <a href="/team" class="text-white hover:text-gray-300">Team</a>
                    </li>
                    <li>
                        <a href="/contact" class="text-white hover:text-gray-300">Contact</a>
                    </li>

                    <li>
                        <a href="/blog" class="text-white hover:text-gray-300">Blog</a>
                    </li>
                    <li class="relative ">
                        <a
                            href="#"
                            class="flex items-center gap-1 text-white hover:opacity-85 uppercase"
                            @click.prevent="languageDropdownOpen = !languageDropdownOpen">
                            <svg
                                width="16"
                                height="16"
                                viewBox="0 0 16 16"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_35_747)">
                                    <path
                                        d="M8 14C11.3137 14 14 11.3137 14 8C14 4.68629 11.3137 2 8 2C4.68629 2 2 4.68629 2 8C2 11.3137 4.68629 14 8 14Z"
                                        stroke="#E2E2E2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        d="M10.5 8C10.5 12 8 14 8 14C8 14 5.5 12 5.5 8C5.5 4 8 2 8 2C8 2 10.5 4 10.5 8Z"
                                        stroke="#E2E2E2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        d="M2.34131 6H13.6588"
                                        stroke="#E2E2E2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        d="M2.34131 10H13.6588"
                                        stroke="#E2E2E2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_35_747">
                                        <rect width="16" height="16" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                            English
                            <svg
                                width="12"
                                height="12"
                                viewBox="0 0 12 12"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                :class="{ 'rotate-180': languageDropdownOpen }"
                                class="transform transition-transform duration-200">
                                <g clip-path="url(#clip0_35_754)">
                                    <path
                                        d="M6 1.875V10.125"
                                        stroke="white"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path
                                        d="M2.625 6.75L6 10.125L9.375 6.75"
                                        stroke="white"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_35_754">
                                        <rect width="12" height="12" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <ul
                            class="absolute top-full mt-2 w-24 rounded bg-gray-800 text-white shadow-lg"
                            x-show="languageDropdownOpen"
                            @click.away="languageDropdownOpen = false"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-95"
                            x-cloak>
                            <li>
                                <a
                                    href="/en"
                                    class="block px-4 py-2 hover:bg-gray-700 uppercase"
                                    @click="languageDropdownOpen = false">English</a>
                            </li>
                            <li>
                                <a
                                    href="/"
                                    class="block px-4 py-2 hover:bg-gray-700 uppercase"
                                    @click="languageDropdownOpen = false">Polish</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a
                            href="/contact"
                            class="flex items-center gap-2 rounded-full bg-white pr-4 text-xs font-semibold whitespace-nowrap text-[var(--guide-me-dark)] shadow-lg hover:opacity-85">
                            <img
                                src="<?php echo esc_url(get_theme_file_uri('assets/img/lukasz-szajda.png')); ?>"
                                class="size-12 rounded-full bg-slate-100 object-cover"
                                alt="Lukasz Szajda" />
                            order demo
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="xl:hidden">
            <button
                class="text-white focus:outline-none"
                @click="mobileMenu = !mobileMenu"
                aria-label="Toggle mobile menu">
                <svg
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path
                        :class="{ 'hidden': mobileMenu, 'block': !mobileMenu }"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16m-16 6h16"></path>
                    <path
                        :class="{ 'block': mobileMenu, 'hidden': !mobileMenu }"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <div
            class="fixed inset-0 z-30 xl:hidden"
            x-cloak
            x-show="mobileMenu"
            x-transition:enter="transition-opacity ease-out duration-300"
            x-transition:leave="transition-opacity ease-in duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            @click.away="mobileMenu = false">
            <div
                class="absolute inset-0 bg-black opacity-50"
                x-transition:enter="transition-opacity ease-out duration-300"
                x-transition:leave="transition-opacity ease-in duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-50"
                x-transition:leave-start="opacity-50"
                x-transition:leave-end="opacity-0">
            </div>

            <div
                class="fixed inset-y-0 right-0 flex w-64 transform flex-col bg-gray-800 p-6 shadow-lg transition duration-300 ease-out"
                x-transition:enter="translate-x-0"
                x-transition:enter-start="translate-x-full"
                x-transition:leave="translate-x-full">
                <div class="mb-4 flex justify-end">
                    <button
                        class="text-white focus:outline-none"
                        @click="mobileMenu = false"
                        aria-label="Close mobile menu">
                        <svg
                            class="h-6 w-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <nav class="flex-grow">
                    <ul class="flex flex-col space-y-4 uppercase">
                        <li>
                            <a
                                href="#what-we-do"
                                class="text-white hover:text-gray-300"
                                @click="mobileMenu = false">What we do?</a>
                        </li>
                        <li>
                            <a
                                href="#why-we-do-this"
                                class="text-white hover:text-gray-300"
                                @click="mobileMenu = false">Why we do this?</a>
                        </li>
                        <li>
                            <a
                                href="#cooperation"
                                class="text-white hover:text-gray-300"
                                @click="mobileMenu = false">Cooperation</a>
                        </li>
                        <li>
                            <a
                                href="/salomon"
                                class="text-white hover:text-gray-300"
                                @click="mobileMenu = false">Salomon</a>
                        </li>
                        <li>
                            <a
                                href="/contact"
                                class="text-white hover:text-gray-300"
                                @click="mobileMenu = false">Contact</a>
                        </li>
                        <li>
                            <a
                                href="/team"
                                class="text-white hover:text-gray-300"
                                @click="mobileMenu = false">Team</a>
                        </li>
                        <li>
                            <a
                                href="/blog"
                                class="text-white hover:text-gray-300"
                                @click="mobileMenu = false">Blog</a>
                        </li>
                        <li x-data="{ languageCollapseOpen: false }">
                            <button
                                class="flex w-full items-center uppercase justify-between text-left text-white hover:text-gray-300"
                                @click="languageCollapseOpen = !languageCollapseOpen">
                                English
                                <svg
                                    width="12"
                                    height="12"
                                    viewBox="0 0 12 12"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    :class="{ 'rotate-180': languageCollapseOpen }"
                                    class="transform transition-transform duration-200">
                                    <g clip-path="url(#clip0_35_754)">
                                        <path
                                            d="M6 1.875V10.125"
                                            stroke="white"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M2.625 6.75L6 10.125L9.375 6.75"
                                            stroke="white"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_35_754">
                                            <rect width="12" height="12" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </button>
                            <ul
                                class="mt-2 ml-4 space-y-2"
                                x-show="languageCollapseOpen"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 max-h-0"
                                x-transition:enter-end="opacity-100 max-h-screen"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="opacity-100 max-h-screen"
                                x-transition:leave-end="opacity-0 max-h-0"
                                x-cloak
                                style="overflow: hidden;">
                                <li>
                                    <a
                                        href="/en"
                                        class="block text-white uppercase hover:text-gray-300"
                                        @click="mobileMenu = false; languageCollapseOpen = false">English</a>
                                </li>
                                <li>
                                    <a
                                        href="/"
                                        class="block text-white uppercase hover:text-gray-300"
                                        @click="mobileMenu = false; languageCollapseOpen = false">Polish</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a
                                href="/contact"
                                class="text mt-4 flex w-fit items-center justify-center gap-2 rounded-full bg-white pr-4 text-sm font-semibold text-[var(--guide-me-dark)] shadow-lg hover:opacity-85"
                                @click="mobileMenu = false">
                                <img
                                    src="<?php echo esc_url(get_theme_file_uri('assets/img/lukasz-szajda.png')); ?>"
                                    class="mr-auto ml-0 size-12 rounded-full bg-slate-100 object-cover"
                                    alt="Lukasz Szajda" />
                                order demo
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>