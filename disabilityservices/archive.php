<?php get_header(); ?>

<main class="container mx-auto py-12 px-4">
    <h1 class="text-4xl font-bold mb-8">Blog</h1>

    <?php if (have_posts()) : ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php while (have_posts()) : the_post(); ?>
                <article class="bg-white shadow rounded p-6">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium', ['class' => 'rounded mb-4']); ?>
                        <?php endif; ?>
                        <h2 class="text-2xl font-semibold mb-2"><?php the_title(); ?></h2>
                    </a>
                    <p class="text-gray-600 text-sm mb-4">By <?php the_author(); ?> on <?php the_time('F j, Y'); ?></p>
                    
                    <!-- Post Excerpt -->
                    <p class="mb-4"><?php the_excerpt(); ?></p>

                    <!-- Include Page Snippet Dynamically -->
                    <?php
                    $page_slug = get_post_meta(get_the_ID(), 'include_page_slug', true);
                    if ($page_slug) {
                        $page = get_page_by_path($page_slug);
                        if ($page) {
                            $page_content = wp_trim_words($page->post_content, 25, '...'); // limit to 25 words
                            echo '<div class="included-page-snippet p-4 bg-gray-50 rounded mb-4">';
                            echo apply_filters('the_content', $page_content);
                            echo '</div>';
                        }
                    }
                    ?>
                    
                    <a href="<?php the_permalink(); ?>" class="text-blue-600 hover:underline">Read More</a>
                </article>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p>No blog posts found.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
