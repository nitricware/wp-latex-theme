<!--
    This `page.php` displays pages.
    
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
				<?php the_content(); ?>
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
