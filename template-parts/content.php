<div <?php post_class('col'); ?>>
    <a href="<?php the_permalink()?>" class="text-decoration-none">
        <div class="card h-100 overflow-hidden rounded-0 border-0">
            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="Manual Therapy" class="card-img-top rounded-0 img-fluid">
            <div class="card-body pt-3 p-0">
                <h6 class="card-title"><?php the_title()?></h6>
                <h6 class="sub-head text-black-50 d-flex">
                    <?php the_category()?> <span class="mx-2">|</span> <?php echo get_the_date( 'M d, Y' ) ?>
                </h6>
                <div class="post-content">
                    <?php the_content(); ?>
                    <?php wp_link_pages([
                        'before' => '<div class="page-links">' . __('Pages:', 'kerapy'),
                        'after' => '</div>',
                        'link_before' => '<span>',
                        'link_after' => '</span>',
                    ]); ?>
                </div>
            </div>
        </div>
    </a>
</div>