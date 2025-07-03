<section>
    <div class="bg-[#F8FBEF]">
        <div class="mx-auto max-w-5xl px-4 pt-24 pb-12">
            <span
                class="geist-mono mb-3 block text-xs font-semibold text-[var(--guide-me-lime)] uppercase lg:py-6">
                <?php
                echo "Published " . get_the_date('M j, Y');
                ?>
            </span>
            <h1
                class="pb-8 text-5xl font-medium text-balance text-[var(--guide-me-lime)] lg:leading-14">
                <?php
                echo get_the_title();
                ?>
            </h1>
            <div class="pb-4 text-lg leading-8 text-[#4C4C4C]">
                <p>
                    <?php
                    echo get_the_excerpt();
                    ?>
                </p>
            </div>
            <div class="flex items-center gap-2 md:gap-4 flex-wrap">
                <?php
                $post_tags = get_the_tags();
                if ($post_tags) {
                    foreach ($post_tags as $tag) {
                        echo '<span class="geist-mono rounded-full bg-[#80B30129] px-4 py-3 text-xs font-medium text-[#80B302] uppercase">' . esc_html($tag->name) . '</span>';
                    }
                }
                ?>
            </div>
        </div>
        <div class="mx-auto max-w-7xl px-4 pb-6">
            <img
                src=<?php
                    echo get_the_post_thumbnail_url(get_the_ID(), 'full');
                    ?>
                class="aspect-video size-full max-h-[558px] rounded-2xl object-cover object-center"
                alt="" />
        </div>
    </div>
    <div class="mx-auto max-w-5xl px-4 py-12">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-12 md:gap-8">
            <div class="md:col-span-3">
               
                    <?php
                    // Get post content and extract H2 headings
                    $content = get_the_content();
                    $content = apply_filters('the_content', $content);

                    // Extract H2 headings
                    preg_match_all('/<h2[^>]*>(.*?)<\/h2>/i', $content, $matches);

                    if (!empty($matches[1])) {
                        echo '<div class="rounded-2xl bg-[#F8FBEF] p-6 md:sticky md:top-6"> <span class="geist-mono mb-4 block text-xs font-semibold text-[#80B302] uppercase">Spis treści</span><ul class="space-y-4">';
                        foreach ($matches[1] as $index => $heading) {
                            // Clean the heading text and create slug
                            $clean_heading = strip_tags($heading);
                            $slug = sanitize_title($clean_heading);

                            echo '<li>';
                            echo '<a href="#' . esc_attr($slug) . '" class="font-medium text-[#757575] hover:text-[#252726] transition-colors">' . esc_html($clean_heading) . '</a>';
                            echo '</li>';
                        }
                        echo '</ul></div>';
                    } else {
                        echo '';
                    }
                    ?>
                
            </div>
            <div class="md:col-span-9">
                <article
                    class="[&_blockquote]:relative [&_blockquote]:mb-6 [&_blockquote]:rounded-2xl [&_blockquote]:bg-[#F8FBEF] [&_blockquote]:p-6 [&_blockquote]:pt-16 [&_blockquote]:pl-8 [&_blockquote]:text-center [&_blockquote]:font-normal [&_blockquote]:text-[#252726] [&_blockqpb-8 text-5xl font-medium text-balance text-[var(--guide-me-lime)]uote]:before:absolute [&_blockquote]:before:top-10 [&_blockquote]:before:h-8 [&_blockquote]:before:w-8 [&_blockquote]:before:-translate-y-1/2 [&_blockquote]:before:bg-contain [&_blockquote]:before:bg-center [&_blockquote]:before:bg-no-repeat [&_blockquote>p]:mb-0 [&_h2]:my-12 [&_h2]:text-3xl [&_h2]:font-semibold [&_h2]:text-[#252726] [&_h3]:mt-8 [&_h3]:text-2xl [&_h3]:font-semibold [&_h3]:text-[#252726] [&_p]:mb-6 [&_p]:text-lg [&_li]:text-lg [&_p]:leading-8 [&_p]:text-[#4C4C4C] [&_li]:leading-8 [&_figure>img]:rounded-2xl [&_figure>img]:w-full [&_figure>img]:aspect-video [&_figure>img]:object-cover [&_figure>img]:object-center [&_figure>figcaption]:mt-4 [&_figure>figcaption]:text-center [&_figure>figcaption]:text-sm [&_figure>figcaption]:text-[#757575] 
                     [&_li]:list-disc [&_li]:pl-6 [&_li]:text-[#4C4C4C] [&_ul]:mb-6 [&_ul]:pl-6 [&_ul]:text-[#4C4C4C] [&_ol]:mb-6 [&_ol]:pl-6 [&_ol]:text-[#4C4C4C] [&_a]:text-[#80B302] [&_a:hover]:underline"
                     >
                    <?php
                    // Process content to add IDs to H2 headings
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            $content = get_the_content();
                            $content = apply_filters('the_content', $content);

                            // Add IDs to H2 headings for anchor links
                            $content = preg_replace_callback(
                                '/<h2([^>]*)>(.*?)<\/h2>/i',
                                function ($matches) {
                                    $attributes = $matches[1];
                                    $heading_text = strip_tags($matches[2]);
                                    $slug = sanitize_title($heading_text);

                                    // Check if ID already exists in attributes
                                    if (strpos($attributes, 'id=') === false) {
                                        $attributes .= ' id="' . esc_attr($slug) . '"';
                                    }

                                    return '<h2' . $attributes . '>' . $matches[2] . '</h2>';
                                },
                                $content
                            );

                            echo $content;
                        }
                    }
                    ?>
                </article>
            </div>
        </div>
    </div>
</section>