<div class="sidebar">
	<ul class="wrapper">
		<?php  dynamic_sidebar( 'primary-widget-area' ); ?>
		<li class="tag-cloud">
			<h3>TAG CLOUD</h3>
			<ul>
				<?php wp_tag_cloud('smallest=12&largest=10&number=8&'); ?>
			</ul>
		</li>

		<div class="recent-posts ">
		  <h3> Recent Posts </h3>
		  <?php

		    $args = array( 'posts_per_page' => 3 );

		    $myposts = new WP_Query( $args );
		    while($myposts->have_posts()) {
		       $myposts->the_post() ?>
		        <article class="clearfix" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>             
		              
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
		    wp_reset_postdata();?>

		</div>
		<div class="subscribe">
			<div class="wrapper">
				<h3>Subscribe</h3>
				<h4>Follow my latest news</h4>
				<input type="text" class="email" placeholder="Your email"><i class="fa fa-envelope-o"></i>
			</div>
		</div>
	</ul>
</div>
	
