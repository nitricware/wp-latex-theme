<div class="grid grid-pad">
    <div class="col-2-3">
        <div class="container">
            <article class="blog-post">
                <h1 class="post-title"><?php the_title(); ?></h1>
                <h2 class="post-meta"><?php the_author(); ?></h2>
                <h2 class="post-meta"><?php the_date(); ?></h2>
		        <?php the_content( __( 'weiterlesen <span class="meta-nav">&rarr;</span>', 'wp-latex-theme' ) ); ?>
	            <?php edit_post_link(); ?>
            </article>
        </div>
    </div>
    <div class="col-1-3">
        <div class="container">
            <div class="post-teaser">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar Widgets") ) : ?>
				<?php endif;?>
            </div>
        </div>
    </div>
</div>
    