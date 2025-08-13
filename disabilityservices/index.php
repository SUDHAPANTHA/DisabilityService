<?php get_header(); ?>



<!-- Services Section -->
<!-- <main id="services" class="container mx-auto px-4 py-16">
    <section class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Empowering Lives Through Accessible Services</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            Our mission is to support individuals with disabilities through compassion, accessibility, and respect.
        </p>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="bg-white border rounded-lg p-6 shadow hover:shadow-xl transition">
                <h3 class="text-xl font-semibold text-green-600 mb-3"><?php the_title(); ?></h3>
                <div class="text-gray-700"><?php the_excerpt(); ?></div>
                <a href="<?php the_permalink(); ?>" class="inline-block mt-4 text-green-600 font-semibold hover:underline">
                    Read more →
                </a>
            </article>
        <?php endwhile; else : ?>
            <p class="col-span-3 text-center text-gray-500">No content available.</p>
        <?php endif; ?>
    </section>
</main> -->

<?php get_footer(); ?>
