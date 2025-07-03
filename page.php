<?php

/**
 * The template for displaying all single pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package YourThemeName // Replace 'YourThemeName' with your actual theme name
 */

get_header(); // Loads your theme's header.php
include "pages/components/article-header.php"; 
?>

<main id="primary" class="site-main">
    <?php
    // Start the WordPress Loop.
    if (have_posts()) :
        while (have_posts()) :
            the_post(); // Sets up post data for each post in the loop.
    ?>

            <section class="mx-auto max-w-4xl px-4 py-20 md:py-24">
                <p class="mb-3 text-center text-xs font-semibold text-[var(--guide-me-lime)] uppercase lg:pt-20">
                    <?php
                    // You can hardcode a general page descriptor or use a custom field.
                    // For example, if you want "Our Page" on every page, just put it here.
                    // Or, you could use a custom field: echo get_post_meta( get_the_ID(), 'page_tagline', true );
                    echo 'Page'; // Default text for a page, adjust as needed.
                    ?>
                </p>
                <h1 class="font-lighter mt-2 mb-4 px-4 text-center text-4xl text-pretty text-[#252726] md:mb-12 md:px-0 md:text-6xl lg:mb-24">
                    <?php the_title(); // Displays the title of the current page. 
                    ?>
                </h1>

                <div class="space-y-12 divide-y divide-gray-200">
                    <div class="flex flex-col items-start gap-8 pb-8 lg:flex-row">
                        <div class="flex-1">
                            <div class="prose max-w-none text-gray-700 leading-relaxed">
                                <?php
                                // Displays the main content of the page from the WordPress editor.
                                the_content();
                                ?>
                            </div>
                        </div>
                    </div>

                    <?php
                    // Optionally, you can add custom sections here based on the page's content
                    // or custom fields. For example, if a page has "contact_info" custom field.
                    // if ( get_post_meta( get_the_ID(), 'has_contact_form', true ) ) {
                    //     // Include contact form specific HTML here
                    // }

                    // Example of how you might include different sections based on a custom field
                    // if ( get_post_meta( get_the_ID(), 'show_team_members', true ) ) {
                    //     // You would typically have a dedicated template part for team members
                    //     // or a shortcode, but for demonstration:
                    //     // echo '<div>This is where team members would be displayed if enabled.</div>';
                    // }
                    ?>

                </div><!-- .space-y-12 -->

            </section>

    <?php
        endwhile; // End of the loop.
    else :
        // If no content is found, include a 'no content' template part.
        // get_template_part( 'template-parts/content', 'none' );
        echo '<p class="text-center py-20">Sorry, no page content found.</p>';
    endif;
    ?>

</main><!-- #main -->

<?php
get_footer(); // Loads your theme's footer.php
?>