<?php get_header(); ?>

<main id="main-content" style="padding:40px;">
  <?php
  if ( have_posts() ) :
      while ( have_posts() ) : the_post();
          ?>
          <article <?php post_class(); ?>>
              <h2><?php the_title(); ?></h2>
              <div><?php the_content(); ?></div>
          </article>
          <?php
      endwhile;
  else :
      echo '<p>No content found.</p>';
  endif;
  ?>
</main>

<?php get_footer(); ?>
