<?php get_header(); ?>

<style>
  /* Grid Background */
  .bg-grid {
    background-image:
      linear-gradient(90deg, rgba(255,255,255,0.08) 1px, transparent 1px),
      linear-gradient(rgba(255,255,255,0.08) 1px, transparent 1px);
    background-size: 60px 60px;
  }
</style>

<main class="min-h-screen bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-500 bg-grid py-16 px-6">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            
            <article class="max-w-3xl mx-auto bg-white/90 backdrop-blur-md rounded-2xl shadow-lg hover:shadow-2xl transition-shadow duration-300 overflow-hidden">
                
                <!-- Post Header with Gradient -->
                <div class="bg-gradient-to-r from-indigo-500 to-purple-600 p-8 text-white">
                    <h1 class="text-4xl font-extrabold tracking-tight mb-2"><?php the_title(); ?></h1>
                    <p class="text-sm opacity-80">
                        <?php echo get_the_date(); ?> • <?php the_author(); ?>
                    </p>
                </div>

                <!-- Post Content -->
                <div class="p-8 text-gray-700 leading-relaxed">
                    <?php the_content(); ?>
                </div>

                <!-- Included Page Content -->
                <?php
                $page_slug = get_post_meta(get_the_ID(), 'include_page_slug', true); // custom field
                if ($page_slug) {
                    $page = get_page_by_path($page_slug);
                    if ($page) {
                        echo '<div class="m-8 p-6 bg-gray-50 rounded-xl shadow-inner border border-gray-100">';
                        echo '<h2 class="text-2xl font-semibold text-indigo-600 mb-4">Related Content</h2>';
                        echo apply_filters("the_content", $page->post_content);
                        echo '</div>';
                    }
                }
                ?>

                <!-- Footer with tags & categories -->
                <div class="p-6 border-t bg-gray-50 flex flex-wrap gap-3 text-sm">
                    <div class="flex items-center gap-2">
                        <span class="font-semibold text-gray-600">Tags:</span>
                        <?php the_tags('<span class="px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full text-xs">','</span><span class="px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full text-xs">','</span>'); ?>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="font-semibold text-gray-600">Category:</span>
                        <?php the_category(', '); ?>
                    </div>
                </div>

            </article>

        <?php endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>
