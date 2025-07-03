<section class="mx-auto max-w-6xl px-6 py-12 lg:px-8">
    <div class="relative mx-auto overflow-hidden rounded-2xl">
        <img 
            src="<?php echo get_template_directory_uri() . "/assets/img/see-how-it-works.webp" ?>"
            alt="Preview"
            loading="lazy"
            class="aspect-video h-auto w-full object-cover" />

        <button
            id="openModalButton"
            class="absolute bottom-12 left-1/2 flex -translate-x-1/2 transform cursor-pointer items-center gap-2 rounded-full bg-black/10 px-3 py-1.5 text-sm tracking-widest text-nowrap text-[var(--guide-me-citron)] uppercase transition hover:opacity-80 md:bottom-24 md:px-8 md:py-6"
            style="backdrop-filter: saturate(180%) blur(20px)">
            <svg
                width="32"
                height="33"
                viewBox="0 0 32 33"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="size-8">
                <g clip-path="url(#clip0_35_1545)">
                    <path
                        d="M16 28.5C22.6274 28.5 28 23.1274 28 16.5C28 9.87258 22.6274 4.5 16 4.5C9.37258 4.5 4 9.87258 4 16.5C4 23.1274 9.37258 28.5 16 28.5Z"
                        stroke="white"
                        stroke-linecap="round"
                        stroke-linejoin="round"></path>
                    <path
                        d="M21.5 16.5L13.5 11.5V21.5L21.5 16.5Z"
                        stroke="white"
                        stroke-linecap="round"
                        stroke-linejoin="round"></path>
                </g>
                <defs>
                    <clipPath id="clip0_35_1545">
                        <rect
                            width="32"
                            height="32"
                            fill="white"
                            transform="translate(0 0.5)"></rect>
                    </clipPath>
                </defs>
            </svg>
            See how it works
        </button>
    </div>

    <div
        id="videoModal"
        class="fixed inset-0 z-50 hidden items-center justify-center p-6">
        <div
            class="absolute inset-0 bg-black/30 backdrop-blur-sm transition-opacity duration-300 ease-in-out">
        </div>

        <div
            id="modalContent"
            class="relative mx-auto h-full w-full max-w-6xl origin-center transform rounded-2xl px-6 py-12 opacity-0 transition-all duration-500 ease-in-out lg:px-8">
            <button
                id="closeModalButton"
                class="absolute top-15 right-14 z-50 cursor-pointer text-3xl text-white opacity-0 transition-opacity duration-300 ease-in-out"
                aria-label="Close">&times;</button>
            <video
                id="videoPlayer"
                src="https://www.w3schools.com/html/mov_bbb.mp4"
                controls
                class="aspect-video h-full w-full rounded-2xl object-cover"></video>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const openModalButton = document.getElementById("openModalButton");
            const closeModalButton = document.getElementById("closeModalButton");
            const videoModal = document.getElementById("videoModal");
            const modalContent = document.getElementById("modalContent");
            const videoPlayer = document.getElementById("videoPlayer");
            const overlay = videoModal?.querySelector(".bg-black\\/30");

            function getButtonPosition(button) {
                const rect = button.getBoundingClientRect();
                return {
                    x: rect.left + rect.width / 2,
                    y: rect.top + rect.height / 2,
                };
            }

            function openModal() {
                if (videoModal && modalContent && openModalButton && overlay) {
                    videoModal.classList.remove("hidden");
                    videoModal.classList.add("flex");

                    const buttonPosition = getButtonPosition(openModalButton);

                    modalContent.style.transformOrigin = `${buttonPosition.x}px ${buttonPosition.y}px`;
                    modalContent.style.transform = "scale(0)";
                    modalContent.style.opacity = "0";
                    overlay.style.opacity = "0";

                    void modalContent.offsetWidth;

                    modalContent.style.transform = "scale(1)";
                    modalContent.style.opacity = "1";
                    overlay.style.opacity = "1";

                    if (closeModalButton) {
                        setTimeout(() => {
                            closeModalButton.style.opacity = "1";
                        }, 300);
                    }
                }
            }

            function closeModal() {
                if (videoModal && modalContent && videoPlayer && overlay) {
                    if (closeModalButton) {
                        closeModalButton.style.opacity = "0";
                    }

                    modalContent.style.transform = "scale(0)";
                    modalContent.style.opacity = "0";
                    overlay.style.opacity = "0";

                    setTimeout(() => {
                        videoModal.classList.add("hidden");
                        videoModal.classList.remove("flex");
                        videoPlayer.pause();
                        videoPlayer.currentTime = 0;
                        modalContent.style.transformOrigin = "center";
                    }, 500);
                }
            }

            if (openModalButton) {
                openModalButton.addEventListener("click", openModal);
            }

            if (closeModalButton) {
                closeModalButton.addEventListener("click", closeModal);
            }

            if (videoModal) {
                videoModal.addEventListener("click", function(event) {
                    if (event.target === overlay) {
                        closeModal();
                    }
                });
            }

            document.addEventListener("keydown", function(event) {
                if (
                    event.key === "Escape" &&
                    videoModal &&
                    !videoModal.classList.contains("hidden")
                ) {
                    closeModal();
                }
            });
        });
    </script>
</section>