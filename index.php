<!DOCTYPE html>
<html <?php language_attributes() ?>>
    <head>
        <title><?php bloginfo('title') ?><?php bloginfo('description') ? ' - ' . bloginfo('description') : '' ?></title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Onest:wght@100..900&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>

		<?php wp_head() ?>


        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css" />
    </head>
    <body <?php body_class() ?>>
        <div class="menu">
            <nav class="navbar navbar-expand-lg">
                <div class="container py-md-4">
                    <a class="navbar-brand" href="landing.html">Kerapy</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
					<?php 
					wp_nav_menu( array(
						'theme_location'  => 'primary',
						'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
						'container'       => 'div',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'bs-example-navbar-collapse-1',
						'menu_class'      => 'navbar-nav mx-auto mb-2 mb-lg-0 gap-md-4',
						'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						'walker'          => new WP_Bootstrap_Navwalker(),
					) );
					?>
                    <div>
						<a href="#" class="btn btn-outline-dark">Contact Us</a>
					</div>
                </div>
            </nav>
        </div>
        <div class="blog-head py-5">
            <div class="container py-md-4">
                <div class="row">
                    <div class=" col d-flex flex-column align-items-center justify-content-center">
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
                    <div class="col">
                        <a href="blog_single.html" class="text-decoration-none">
                            <div class="card h-100 overflow-hidden rounded-0 border-0">
                                <img src="<?php echo get_template_directory_uri() ?>/images/Hero_v1_blog.jpg" alt="Manual Therapy" class="card-img-top rounded-0 img-fluid">
                                <div class="card-body pt-3 p-0">
                                    <h6 class="card-title">How to optimize images loading (complete guide)</h6>
                                    <h6 class="sub-head text-black-50">Therapy | July 20, 2024</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="blog_single.html" class="text-decoration-none">
                            <div class="card h-100 overflow-hidden rounded-0 border-0">
                                <img src="<?php echo get_template_directory_uri() ?>/images/Hero_v1_blog2.jpg" alt="Physio Therapy" class="card-img-top rounded-0 img-fluid">
                                <div class="card-body pt-3 p-0">
                                    <h6 class="card-title">How to design your site footer like we did</h6>
                                    <h6 class="sub-head text-black-50">Therapy | July 20, 2024</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="blog_single.html" class="text-decoration-none">
                            <div class="card h-100 overflow-hidden rounded-0 border-0">
                                <img src="<?php echo get_template_directory_uri() ?>/images/Hero_v1_blog3.jpg" alt="Sport Injuries" class="card-img-top rounded-0 img-fluid">
                                <div class="card-body pt-3 p-0">
                                    <h6 class="card-title">Caring is the new marketing like we did </h6>
                                    <h6 class="sub-head text-black-50">Therapy | July 20, 2024</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5 py-5">
                    <div class="col">
                        <a href="blog_single.html" class="text-decoration-none">
                            <div class="card h-100 overflow-hidden rounded-0 border-0">
                                <img src="<?php echo get_template_directory_uri() ?>/images/Hero_v1_blog.jpg" alt="Manual Therapy" class="card-img-top rounded-0 img-fluid">
                                <div class="card-body pt-3 p-0">
                                    <h6 class="card-title">How to optimize images loading (complete guide)</h6>
                                    <h6 class="sub-head text-black-50">Therapy | July 20, 2024</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="blog_single.html" class="text-decoration-none">
                            <div class="card h-100 overflow-hidden rounded-0 border-0">
                                <img src="<?php echo get_template_directory_uri() ?>/images/Hero_v1_blog2.jpg" alt="Physio Therapy" class="card-img-top rounded-0 img-fluid">
                                <div class="card-body pt-3 p-0">
                                    <h6 class="card-title">How to design your site footer like we did</h6>
                                    <h6 class="sub-head text-black-50">Therapy | July 20, 2024</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="blog_single.html" class="text-decoration-none">
                            <div class="card h-100 overflow-hidden rounded-0 border-0">
                                <img src="<?php echo get_template_directory_uri() ?>/images/Hero_v1_blog3.jpg" alt="Sport Injuries" class="card-img-top rounded-0 img-fluid">
                                <div class="card-body pt-3 p-0">
                                    <h6 class="card-title">Caring is the new marketing like we did </h6>
                                    <h6 class="sub-head text-black-50">Therapy | July 20, 2024</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5">
                    <div class="col">
                        <a href="blog_single.html" class="text-decoration-none">
                            <div class="card h-100 overflow-hidden rounded-0 border-0">
                                <img src="<?php echo get_template_directory_uri() ?>/images/Hero_v1_blog.jpg" alt="Manual Therapy" class="card-img-top rounded-0 img-fluid">
                                <div class="card-body pt-3 p-0">
                                    <h6 class="card-title">How to optimize images loading (complete guide)</h6>
                                    <h6 class="sub-head text-black-50">Therapy | July 20, 2024</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="blog_single.html" class="text-decoration-none">
                            <div class="card h-100 overflow-hidden rounded-0 border-0">
                                <img src="<?php echo get_template_directory_uri() ?>/images/Hero_v1_blog2.jpg" alt="Physio Therapy" class="card-img-top rounded-0 img-fluid">
                                <div class="card-body pt-3 p-0">
                                    <h6 class="card-title">How to design your site footer like we did</h6>
                                    <h6 class="sub-head text-black-50">Therapy | July 20, 2024</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="blog_single.html" class="text-decoration-none">
                            <div class="card h-100 overflow-hidden rounded-0 border-0">
                                <img src="<?php echo get_template_directory_uri() ?>/images/Hero_v1_blog3.jpg" alt="Sport Injuries" class="card-img-top rounded-0 img-fluid">
                                <div class="card-body pt-3 p-0">
                                    <h6 class="card-title">Caring is the new marketing like we did </h6>
                                    <h6 class="sub-head text-black-50">Therapy | July 20, 2024</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <footer class="text-white pt-5">
            <div class="container py-md-4">
                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                        <h5 class="footer-list-header">Contact</h5>
                        <ul class="list-unstyled">
                            <li class="mb-3 footer-list-item">
                                <a href="#" class="text-white"><span><i class="fas fa-map-marker-alt pe-3"></i></span>ABC Street, New York, USA</a>
                            </li>
                            <li class="mb-3 footer-list-item">
                                <a href="#" class="text-white"><span><i class="fas fa-phone pe-3"></i></span>+123 4465 696</a>
                            </li>
                            <li class="mb-3 footer-list-item">
                                <a href="#" class="text-white"><span><i class="fas fa-envelope pe-3"></i></span>infochiropactor@gmail.com</a>
                            </li>
                            <li class="mb-3 footer-list-item">
                                <a href="#" class="text-white social-icon"><i class="fab fa-x"></i></a>
                                <a href="#" class="text-white social-icon"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="text-white social-icon"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="text-white social-icon"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                        <h5 class="footer-list-header">Pages</h5>
                        <ul class="list-unstyled">
                            <li class="mb-3 footer-list-item"><a href="index.html" class="text-white">Home</a></li>
                            <li class="mb-3 footer-list-item"><a href="about_v1.html" class="text-white">About</a></li>
                            <li class="mb-3 footer-list-item"><a href="service.html" class="text-white">Service</a></li>
                            <li class="mb-3 footer-list-item"><a href="contact_v1.html" class="text-white">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                        <h5 class="footer-list-header">CMS Pages</h5>
                        <ul class="list-unstyled">
                            <li class="mb-3 footer-list-item"><a href="blog.html" class="text-white">Blog</a></li>
                            <li class="mb-3 footer-list-item"><a href="#" class="text-white">Privacy Policy</a></li>
                            <li class="mb-3 footer-list-item"><a href="#" class="text-white">Terms & Conditions</a></li>
                            <li class="mb-3 footer-list-item"><a href="#" class="text-white">Refund Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="footer-list-header">Newsletter</h5>
                        <div>
                            <input type="text" class="footer-input" placeholder="Email">
                            <button class="col-12 btn primary-button">Subscribe</button>
                        </div>
                    </div>
                </div>
                <hr class="bg-light mt-5">
                <div class="d-flex flex-column flex-md-row align-items-center justify-content-between pb-3">
                    <div class="d-flex align-items-center">
                        <a href="#" class="bottom-link">Privacy Policy</a>
                        <a href="#" class="bottom-link ms-3">Terms & Conditions</a>
                        <a href="#" class="bottom-link ms-3">Cookie Settings</a>
                    </div>
                    <div>
                        <p class="text-white mb-0">2024 Elegance In Code. All right reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous" ></script>

		<?php wp_footer() ?>
    </body>
</html>