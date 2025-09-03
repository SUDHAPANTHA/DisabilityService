<?php get_header(); ?>

<style>
  /* Custom Hex Colors */
  .bg-primary { background-color: #0065AC; }
  .text-primary { color: #0065AC; }
  .text-accent { color: #31B744; }
  .bg-accent { background-color: #31B744; }
  .bg-accent-dark { background-color: #2A9D8F; }
  .btn-primary { background-color: #0065AC; color: #fff; }
  .btn-primary:hover { background-color: #004080; }

  /* Grid Background */
  .bg-grid {
    background-image:
      linear-gradient(90deg, rgba(255,255,255,0.08) 1px, transparent 1px),
      linear-gradient(rgba(255,255,255,0.08) 1px, transparent 1px);
    background-size: 60px 60px;
  }
</style>

<main class="bg-primary bg-grid min-h-screen py-16">
  <div class="container mx-auto px-4">
    <h1 class="text-4xl font-extrabold mb-12 text-center text-white">
      Blog
    </h1>

    <?php if (have_posts()) : ?>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        <?php while (have_posts()) : the_post(); ?>
          <article class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden mx-auto max-w-md p-6">
            
            <a href="<?php the_permalink(); ?>">
              <h2 class="text-2xl font-bold mb-3 text-primary hover:text-accent transition">
                <?php the_title(); ?>
              </h2>
            </a>

            <p class="text-gray-500 text-sm mb-4">
              By <?php the_author(); ?> on <?php the_time('F j, Y'); ?>
            </p>

            <p class="text-gray-700 mb-6">
              <?php the_excerpt(); ?>
            </p>

            <a href="<?php the_permalink(); ?>" class="inline-block btn-primary px-5 py-2 my-4 rounded-lg font-semibold shadow">
              Read More →
            </a>
          </article>
        <?php endwhile; ?>
      </div>
    <?php else : ?>
      <p class="text-center text-white">No blog posts found.</p>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>
