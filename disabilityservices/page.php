<?php get_header(); ?>

<main class="container mx-auto px-4 py-10">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <article class="prose lg:prose-xl">
                <h1 class="text-3xl font-bold mb-6"><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
        <?php endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>
