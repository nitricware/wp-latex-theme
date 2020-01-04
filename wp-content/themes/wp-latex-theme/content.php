<article class="blog-post">
    <h1 class="post-title"><?php the_title(); ?></h1>
    <h2 class="post-meta"><?php the_author(); ?></h2>
    <h2 class="post-meta"><?php the_date(); ?></h2>
    <?php the_content( __( 'weiterlesen <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
</article>