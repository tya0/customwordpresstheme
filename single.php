<?php get_header(); ?>

<div class="main">
  <div class="container">
    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php $articleID = the_ID(); ?>" <?php post_class(); ?> >

          <?php $postCategory = get_the_category( $articleID ); ?>

          <h1 class="entry-title"><?php the_title(); ?></h1>

          <div class="entry-meta">
            <?php //hackeryou_posted_on(); ?>

          </div><!-- .entry-meta -->

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

          <div class="entry-utility">
            <?php hackeryou_posted_in(); ?>
           
          </div><!-- .entry-utility -->
        </div><!-- #post-## -->
        <div class="social-links">
          <?php wp_nav_menu( array(
            'container' => false,
            'theme_location' => 'social-media-single-post'
          )); ?>

        </div>
        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->

        <div class="related-post">
         
         <?php

         $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );

         if( $related ) foreach( $related as $post ) {
         setup_postdata($post); ?>

          <div>
              <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
         </div>
         
         <?php }

         wp_reset_postdata(); ?>

        </div> <!-- end related post -->

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>