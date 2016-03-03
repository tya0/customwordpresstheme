<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<?php while ( have_posts() ) : the_post(); ?>

	<article id=" clearfix post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
      	
       	<img src="<?php echo hackeryou_get_thumbnail_url( $post ); ?>" alt="">
      	<div class="blog-content">
      		<h3>
      		<?php the_time('d-m-Y'); ?> 
	      	</h3>
	        <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
	          <h2 class="entry-title"><?php the_title(); ?></h2>
	       	</a>
			<?php the_excerpt(); ?>
      	</div>
	
		<footer>
				<!-- <p><?php the_tags('Tags: ', ', ', '<br>'); ?> Posted in <?php the_category(', '); ?></p>-->
       
        
			</footer> 

		</article><!-- #post-## -->

		<?php comments_template( '', true ); ?>


<?php endwhile; // End the loop. Whew. ?>

<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <p class="alignleft"><?php next_posts_link('&laquo; Older Entries'); ?></p>
  <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;'); ?></p>
<?php endif; ?>


<?php $my_query = new WP_Query('category_name=mycategory&showposts=1'); ?><?php while ($my_query->have_posts()) : $my_query->the_post(); ?><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a><?php endwhile; ?>