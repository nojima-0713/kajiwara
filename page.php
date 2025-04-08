<?php get_header(); ?>
<div class="container">
<main>
<?php while (have_posts()): the_post(); ?>
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
<?php endwhile; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
