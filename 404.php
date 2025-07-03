<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package YourThemeName // Replace 'YourThemeName' with your actual theme name
 */

get_header(); // Loads your theme's header.php

include "pages/components/article-header.php"; 
?>

<main id="primary" class="site-main">
    <section class="mx-auto max-w-4xl px-4 py-20 md:py-24 text-center">
        <p class="mb-3 text-center text-xs font-semibold text-[var(--guide-me-lime)] uppercase lg:pt-20">
            Error
        </p>
        <h1 class="font-lighter mt-2 mb-4 px-4 text-center text-4xl text-pretty text-[#252726] md:mb-12 md:px-0 md:text-6xl lg:mb-24">
            Page Not Found
        </h1>

        <div class="space-y-8 divide-y divide-gray-200">
            <div class="flex flex-col items-center gap-8 pb-8">
                <p class="text-gray-700 leading-relaxed text-lg mb-6">
                    Oops! It looks like the page you were looking for doesn't exist.
                    It might have been moved or deleted.
                </p>

                <p class="text-gray-700 leading-relaxed text-lg mb-6">
                    Don't worry, you can try:
                </p>

                <div class="space-y-4">
                    <!-- Option 1: Go to Homepage Button -->
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-flex justify-center rounded-md border border-transparent bg-[var(--guide-me-lime)] px-8 py-3 text-base font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                        Go to Homepage
                    </a>

                    <!-- Option 2: Search Form -->
                    <div class="mt-8">
                        <p class="text-gray-700 text-lg mb-3">Or, try searching for what you need:</p>
                        <?php get_search_form(); // Displays the theme's search form ?>
                    </div>

                    <!-- Option 3: Link to Blog/Services (Optional) -->
                    <?php
                    // You can add links to other important sections of your site
                    // For example, if you have a blog page:
                    // $blog_page_id = get_option( 'page_for_posts' ); // Gets the ID of the page set as the blog page
                    // if ( $blog_page_id ) {
                    //     echo '<p class="text-gray-700 text-lg mt-6">You might also find what you\'re looking for in our <a href="' . esc_url( get_permalink( $blog_page_id ) ) . '" class="text-[var(--guide-me-lime)] hover:underline">Blog</a>.</p>';
                    // }
                    ?>
                </div>
            </div>
        </div>
    </section>
</main><!-- #main -->

<?php
get_footer(); // Loads your theme's footer.php
?>