<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="latest-post">
      <?php

        $args = array( 'posts_per_page' => 1 );

        $myposts = new WP_Query( $args );
        while($myposts->have_posts()) {
           $myposts->the_post() ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>             
                  
              <img src="<?php echo hackeryou_get_thumbnail_url( $post ); ?>" alt="">
              <div class="blog-content">
                <h3>
                <?php the_time('d-m-Y'); ?> 
                </h3>
                <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
                  <h2 class="entry-title"><?php the_title(); ?></h2>
                </a>
              </div>
            </article>

        <?php } 
        wp_reset_postdata();?>

    </div> 

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>