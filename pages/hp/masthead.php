<section class="relative isolate flex flex-col overflow-hidden">
    <?php
    $theme_base_path = get_template_directory();

    $navbar_path = $theme_base_path . '/pages/components/hp-navbar.php';

    include $navbar_path;
    ?>

    <div class="absolute inset-0 -z-10 size-full">
        <img
            src="<?php echo get_template_directory_uri() . "/assets/img/guide-masthead.png" ?>"
            class="absolute inset-0 size-full object-cover"
            alt="GuideMe Masthead" />
        <div
            class="absolute inset-0 size-full min-h-full bg-gradient-to-b from-black/30 to-black/30">
        </div>
    </div>

    <div
        class="absolute top-48 left-[28%] z-10 hidden -translate-x-1/2 -translate-y-1/2 transform gap-4 lg:flex">
        <div class="flex items-center gap-2 font-light tracking-widest uppercase">
            <span class="text-xs text-white">Problem solving</span>
            <div
                class="flex items-center justify-center rounded-full bg-white/30 p-2">
                <div class="aspect-square h-2 w-2 rounded-full bg-white"></div>
            </div>
        </div>
    </div>
    <div
        class="absolute top-72 right-[25%] z-10 hidden -translate-x-1/2 -translate-y-1/2 transform gap-4 lg:flex">
        <div class="flex items-center gap-2 font-light tracking-widest uppercase">
            <div
                class="flex items-center justify-center rounded-full bg-white/30 p-2">
                <div class="aspect-square h-2 w-2 rounded-full bg-white"></div>
            </div>
            <span class="text-xs text-white">Information <br />gathering</span>
        </div>
    </div>

    <div
        class="absolute right-[40%] bottom-52 z-10 hidden translate-x-1/2 -translate-y-1/2 transform gap-4 lg:flex">
        <div class="flex items-center gap-2 font-light tracking-widest uppercase">
            <div
                class="flex items-center justify-center rounded-full bg-white/30 p-2">
                <div class="aspect-square h-2 w-2 rounded-full bg-white"></div>
            </div>
            <span class="text-xs text-white">Communication <br /> skills</span>
        </div>
    </div>

    <div class="z-10 mx-auto w-full max-w-6xl px-6 lg:px-8">
        <div class="!ml-0 max-w-xl pt-64 pb-28 sm:pt-48 lg:pt-64 xl:pt-84">
            <div>
                <h1
                    class="text-3xl leading-snug font-semibold tracking-tight text-balance text-white sm:text-5xl">
                    Smarter HR decisions through VR-driven skill assesments
                </h1>
                <div class="mt-10 flex">
                    <a
                        href="#"
                        class="rounded-full bg-white px-8 py-6 text-base text-[var(--guide-me-lime)] uppercase shadow-lg hover:bg-gray-200">
                        See how it works</a>
                </div>
            </div>
        </div>
    </div>
</section>