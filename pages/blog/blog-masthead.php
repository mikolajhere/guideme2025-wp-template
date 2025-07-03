<section class="py-16 lg:py-24">
    <div class="mx-auto max-w-5xl px-4">
        <!-- Header -->
        <div class="mb-12 text-center">
            <p class="mb-3 text-center text-xs font-semibold text-[var(--guide-me-lime)] uppercase lg:pt-20">
                Blog
            </p>
            <h1 class="text-5xl font-light text-gray-800">
                Latest Insights and Stories
            </h1>
        </div>

        <!-- Blog Grid -->
        <div id="blog-posts-grid" class="mb-12 grid grid-cols-1 gap-6 md:grid-cols-2">
            <?php
            // Fetch ALL published posts
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => -1, // Retrieve all posts
                'post_status'    => 'publish',
            );
            $all_blog_posts = new WP_Query($args);

            if ($all_blog_posts->have_posts()) {
                $post_count = 0;
                while ($all_blog_posts->have_posts()) {
                    $all_blog_posts->the_post();
                    $post_count++;

                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    if (!$thumbnail_url) {
                        // Fallback image if no featured image is set
                        $thumbnail_url = get_template_directory_uri() . "/assets/img/default-blog-image.webp";
                    }

                    // Add a class to hide posts beyond the initial 4
                    $hidden_class = ($post_count > 4) ? 'hidden' : '';
            ?>
                    <a href="<?php the_permalink(); ?>"
                        class="blog-post-item relative flex min-h-[400px] flex-col justify-end overflow-hidden rounded-2xl bg-cover hover:opacity-75 bg-center p-8 text-white <?php echo esc_attr($hidden_class); ?>"
                        style="background-image: url('<?php echo esc_url($thumbnail_url); ?>')">
                        <div class="absolute top-6 left-6 flex gap-2 flex-wrap">
                            <?php
                            $post_tags = get_the_tags();
                            if (!empty($post_tags)) {
                                foreach ($post_tags as $tag) {
                                    echo '<span class="geist-mono lowercase rounded-full bg-white/20 px-2 py-1 text-xs font-medium">' . esc_html($tag->name) . '</span>';
                                }
                            }
                            ?>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                        <div class="relative z-10">
                            <h3 class="mb-4 text-2xl leading-tight font-medium">
                                <?php the_title(); ?>
                            </h3>
                            <span class="text-white/90 underline underline-offset-2 transition-colors hover:text-white">
                                Read the article
                            </span>
                        </div>
                    </a>
            <?php
                }
                wp_reset_postdata();
            } else {
                echo '<p>No blog posts found.</p>';
            }
            ?>
        </div>

        <!-- Bottom Button -->
        <div class="text-center">
            <?php
            // Only show the button if there are more than 4 posts
            if ($all_blog_posts->found_posts > 4) :
            ?>
                <button id="show-all-posts"
                    class="cursor-pointer rounded-full border border-[var(--guide-me-lime)] bg-white px-8 py-6 text-base text-[var(--guide-me-lime)] uppercase hover:bg-gray-50">
                    Show all posts
                </button>
            <?php endif; ?>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const showAllButton = document.getElementById('show-all-posts');
        const hiddenPosts = document.querySelectorAll('.blog-post-item.hidden'); // Select posts that are initially hidden

        if (showAllButton && hiddenPosts.length > 0) {
            showAllButton.addEventListener('click', function() {
                // Loop through all hidden posts and remove the 'hidden' class
                hiddenPosts.forEach(function(post) {
                    post.classList.remove('hidden');
                });
                // Hide the "Rozwiń" button after showing all posts
                showAllButton.style.display = 'none';
            });
        } else if (showAllButton) {
            // If there are no hidden posts (meaning 4 or fewer total posts), hide the button
            showAllButton.style.display = 'none';
        }
    });
</script>