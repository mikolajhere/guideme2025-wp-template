// slider_simple.js
// Remove the import statements for Swiper and its modules
// import Swiper from "swiper";
// import { Navigation, Pagination, Autoplay } from "swiper/modules";

// No need for Swiper CSS imports here as they will be enqueued via PHP
// import "swiper/css";
// import "swiper/css/navigation";
// import "swiper/css/pagination";

document.addEventListener("DOMContentLoaded", function () {
  // Swiper and its modules will be available globally if loaded correctly
  const swiper = new Swiper(".testimonials", {
    // Modules are attached to the Swiper global object when loaded from CDN/UMD
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    spaceBetween: 10,
    allowTouchMove: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
  });
});
