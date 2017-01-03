<?php get_header(); ?>

<div id="content" class="container">

<!-- Display each post until there are no more posts -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php get_template_part('content'); ?>
<?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts!'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>