<?php get_header(); ?>
<?php 
    while(have_posts()){
        the_post()
?>
<div class="blog-title py-5">
	<div class="container pt-md-4">
		<div class="row px-md-5 pb-5">
			<div class="col">
				<h1 class="text-center"><?php the_title(); ?></h1>
				<h6 class="sub-head text-center">
					<?php 
						the_author();
						?>
						-
						<?php
						echo get_the_date( 'M d, Y' );
						?>
						|
						<?php 
							$count = 0;
							$cats = get_the_category();
							if( ! empty($cats) ){
								foreach( $cats as $cat){
									$count++;
									?>
									<span<?php echo get_category_link($cat->term_id);?>">
										<?php echo esc_html($cat->name); ?>
									</span> 
								<?php   
									if( $count == 1){
										break;
									}
								}
							}
						?>
						|
						<?php
							$comments_number = get_comments_number();
							if ('1' === $comments_number) {
								esc_attr_e('1 Comment', 'kerapy');
							} else {
								echo esc_html__('Comments', 'kerapy') . ' (0' . number_format_i18n($comments_number) . ')';
							}
						?>
						<?php
					?>
				</h6>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<?php 
					if( has_post_thumbnail() ){
						the_post_thumbnail( 'large', [
							'class' => 'img-fluid blog-single-img'
						] );
					}
				?>
				<img src="images/Single_blog_banner.jpg" class="img-fluid" alt="">
			</div>
		</div>
	</div>
</div>
<div class="blog-content">
	<div class="container">
		<div class="row">
			<div class="col">
				<?php the_content(); ?>
			</div>
		</div>
		<?php get_template_part( 'template-parts/postnavigation'); ?>
	</div>
</div>
<?php } ?>


<div class="author py-5">
	<div class="container pb-md-4">
		<div class="row">
			<div class="col-md-1 col-3 author-img ">
				<?php
					echo get_avatar( get_the_author_meta('ID'), '120', '', 'avatar',
						array('class' => '') );
				?>
			</div>
			<div class="col-md-11 col-12">
				<h5><?php echo esc_html__('Written by', 'kerapy');?> 
					<?php the_author(); ?>
				</h5>
				<p><?php echo get_the_author_meta('description'); ?></p>
				<div>
					<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="primary-button">
						<?php echo esc_html__('More Posts by', 'kerapy'); ?> 
						<?php echo get_the_author_meta('display_name'); ?>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
global $kerapy_option;
	$relatedpost = $kerapy_option['related_title'];
?>
<div class="related-post py-5 bg-light">
	<div class="container py-md-4">
		<div class="row">
			<div class="col">
				<div class="d-flex flex-column align-items-center justify-content-center">
					<div>
						<div class="pb-4 d-flex justify-content-between align-items-center">
						<?php 
								if(!empty($relatedpost)){
									?>
									<h1><?php echo esc_html($relatedpost);?></h1>
									<?php
								}?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php get_template_part( 'template-parts/related-posts'); ?>
	</div>
</div>

<div class="comment pb-5">
	<div class="container py-md-4">
		<div class="row py-3">
			<div class="col">
				<div class="m-auto col-12 mt-5 bg-white ">
					<?php
						if ( !post_password_required() ){
							comments_template();
						}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
