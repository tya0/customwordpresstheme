<?php get_header(); ?>

<div class="main">
  <div class="container">
    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php $articleID = the_ID(); ?>" <?php post_class(); ?> >

          <h3><?php the_time('d-m-Y'); ?> </h3>
          <h1 class="entry-title"><?php the_title(); ?></h1>
          
          <?php 
          $categories_list = get_the_category_list();
          echo $categories_list;
           ?>

          <img src="<?php echo hackeryou_get_thumbnail_url( $post ); ?>" alt="">

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

         $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 1, 'post__not_in' => array($post->ID) ) );

         if( $related ) foreach( $related as $post ) {
          echo '<p class="title"> Related Post </p>';
         setup_postdata($post); ?>

           <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>             
                 
             <img src="<?php echo hackeryou_get_thumbnail_url( $post ); ?>" alt="">
             <div class="blog-content">
               <p class="date">
               <?php the_time('d-m-Y'); ?> 
               </p>
               <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
                 <p class="entry-title"><?php the_title(); ?></p>
               </a>
             </div>
           </article>

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