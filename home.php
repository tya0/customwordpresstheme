<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  	<div class="container">
	  	<div class="content-most-recent">
			
	  	</div>
	
		<div class="content-all-posts clearfix">
		    <div class="content">
		    		<?php get_template_part( 'loop', 'index' );	?>
		    </div> <!--/.content -->

	   		<?php get_sidebar(); ?>
		</div>
  	</div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>