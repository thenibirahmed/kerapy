<?php get_header() ?>
<div class="blog-head py-5">
	<div class="container py-md-4">
		<div class="row">
			<div class="col d-flex flex-column align-items-center justify-content-center">
				<div>
					<div class="d-flex align-items-center gap-2">
						<div>
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M23.9391 12.0868C15.7482 14.0496 14.0496 15.7482 12.0868 23.9391C12.0804 23.957 12.0685 23.9724 12.053 23.9833C12.0375 23.9942 12.019 24 12 24C11.981 24 11.9625 23.9942 11.947 23.9833C11.9315 23.9724 11.9196 23.957 11.9132 23.9391C9.95041 15.7482 8.25181 14.0496 0.0608537 12.0868C0.0430225 12.0804 0.0276168 12.0685 0.0167294 12.053C0.00584201 12.0375 0 12.019 0 12C0 11.981 0.00584201 11.9625 0.0167294 11.947C0.0276168 11.9315 0.0430225 11.9196 0.0608537 11.9132C8.25181 9.95041 9.95041 8.25181 11.9132 0.0608537C11.9196 0.0430225 11.9315 0.0276168 11.947 0.0167294C11.9625 0.00584201 11.981 0 12 0C12.019 0 12.0375 0.00584201 12.053 0.0167294C12.0685 0.0276168 12.0804 0.0430225 12.0868 0.0608537C14.0496 8.25181 15.7482 9.95041 23.9391 11.9132C23.957 11.9196 23.9724 11.9315 23.9833 11.947C23.9942 11.9625 24 11.981 24 12C24 12.019 23.9942 12.0375 23.9833 12.053C23.9724 12.0685 23.957 12.0804 23.9391 12.0868Z" fill="#0052A8"/>
							</svg>
						</div>
						<div class="divider"></div>
						<div>
							<h6 class="sub-head">Blog & News</h6>
						</div>
						<div class="divider"></div>
						<div>
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M23.9391 12.0868C15.7482 14.0496 14.0496 15.7482 12.0868 23.9391C12.0804 23.957 12.0685 23.9724 12.053 23.9833C12.0375 23.9942 12.019 24 12 24C11.981 24 11.9625 23.9942 11.947 23.9833C11.9315 23.9724 11.9196 23.957 11.9132 23.9391C9.95041 15.7482 8.25181 14.0496 0.0608537 12.0868C0.0430225 12.0804 0.0276168 12.0685 0.0167294 12.053C0.00584201 12.0375 0 12.019 0 12C0 11.981 0.00584201 11.9625 0.0167294 11.947C0.0276168 11.9315 0.0430225 11.9196 0.0608537 11.9132C8.25181 9.95041 9.95041 8.25181 11.9132 0.0608537C11.9196 0.0430225 11.9315 0.0276168 11.947 0.0167294C11.9625 0.00584201 11.981 0 12 0C12.019 0 12.0375 0.00584201 12.053 0.0167294C12.0685 0.0276168 12.0804 0.0430225 12.0868 0.0608537C14.0496 8.25181 15.7482 9.95041 23.9391 11.9132C23.957 11.9196 23.9724 11.9315 23.9833 11.947C23.9942 11.9625 24 11.981 24 12C24 12.019 23.9942 12.0375 23.9833 12.053C23.9724 12.0685 23.957 12.0804 23.9391 12.0868Z" fill="#0052A8"/>
							</svg>
						</div>
					</div>
				</div>
				<div>
					<div class="py-4 pb-md-5 d-flex justify-content-between align-items-center">
						<h2>News & Blog</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5">
			<?php while(have_posts()) : the_post() ?>
				<div class="col">
					<a href="<?php the_permalink() ?>" class="text-decoration-none">
						<div class="card h-100 overflow-hidden rounded-0 border-0">
							<img src="<?php echo get_the_post_thumbnail_url() ?>" alt="Manual Therapy" class="card-img-top rounded-0 img-fluid">
							<div class="card-body pt-3 p-0">
								<h6 class="card-title"><?php the_title() ?></h6>
								<h6 class="sub-head text-black-50 d-flex">
									<?php the_category() ?> <span class="mx-2">|</span> <?php echo get_the_date('M d, Y') ?>
								</h6>
							</div>
						</div>
					</a>
				</div>
			<?php endwhile ?>
		</div>
	</div>
</div>  
<?php get_footer() ?>