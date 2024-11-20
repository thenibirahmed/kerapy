<?php get_header() ?>
<div class="blog-head py-5">
	<div class="container py-md-4">
		<div class="row">
			<div class="col d-flex flex-column align-items-center justify-content-center">
				<?php get_template_part('template-parts/page-header'); ?>
			</div>
		</div>
		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5 js-post-container">
			<?php while(have_posts()) : the_post() ?>
				<?php get_template_part('template-parts/postcard', get_post_format()); ?>
			<?php endwhile ?>
		</div>
		<?php get_template_part('template-parts/pagination'); ?>
	</div>
</div>  
<?php get_footer() ?>


