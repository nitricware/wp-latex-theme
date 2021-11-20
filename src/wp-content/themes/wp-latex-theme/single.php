<!--
    This `single.php` displays posts.
    
    If it wouldn't exist, Wordpress would fall back to
    `singular.php`. But since pages don't need to display
    the same meta information as posts, this file exists.
-->

<?php get_header(); ?>
<div class="grid grid-pad">
    <div class="col-2-3">
        <div class="container">
            <article class="blog-post">
                <h1 class="post-title"><?php the_title(); ?></h1>
                <h2 class="post-meta"><?php the_author_meta('display_name', 1); ?></h2>
                <h2 class="post-meta"><?php echo get_the_time('d.m.Y', get_the_ID()); ?></h2>
		        <?php the_content(); ?>
	            <?php edit_post_link(); ?>
            </article>
        </div>
    </div>
	<?php
		get_sidebar();
	?>
</div>

<?php
	wp_footer();
	get_footer();
?>
    