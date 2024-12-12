<?php 
global $kerapy_option;
$featured_img_visibility = $kerapy_option['featured_image_visibility'];
$category_visibility = $kerapy_option['category_visibility'];
$date_visibility = $kerapy_option['date_visibility'];
$excerpt_visibility = $kerapy_option['excerpt_visibility'];

?>
<div class="col postcard js-postcard">
    <div class="text-decoration-none">
        <div class="card h-100 overflow-hidden rounded-0 border-0">
            <?php 
                if($featured_img_visibility == '1'){
            ?>
            <div class="blog-card2 bg-light">
                <a href="<?php the_permalink(); ?>" class="">
                        <?php the_post_thumbnail('medium_large', array(
                        'class' => 'card-img-top blog-card2 rounded-0 img-fluid'
                    )); ?>
                </a>
            </div>
            <?php } ?>
            <div class="card-body pt-3 p-0">
                <a href="<?php the_permalink();?>">
                    <h6 class="card-title all-heading-color"><?php the_title(); ?></h6>
                </a>
                <?php 
                        if($excerpt_visibility == '1'){
                ?>
                <p class="py-2">
                    <?php echo kerapy_excerpt($kerapy_option['excerpt_length']); ?>
                </p>
                <?php } ?>
                <div class="d-flex gap-1">
                    <?php 
                        if($category_visibility == '1'){
                    ?>
                    <?php 
                        $count = 0;
                        $cats = get_the_category();
                        if( ! empty($cats) ){
                            foreach( $cats as $cat){
                                $count++;
                                ?>
                                <a class="sub-head text-black-50" href="<?php echo get_category_link($cat->term_id);?>">
                                    <?php echo esc_html($cat->name); ?>
                                </a> 
                            <?php   
                                if( $count == 1){
                                    break;
                                }
                            }
                        }
                    ?>
                    <?php } ?>
                    
                    <?php 
                        if($category_visibility == '1' && $date_visibility == '1'){
                    ?>
                    <div class="sub-head text-black-50">
                    |
                    </div>
                    <?php } ?>
                    <?php 
                        if($date_visibility == '1'){
                    ?>
                    <span class="sub-head text-black-50">
                    <?php echo get_the_date( 'M d, Y' ); ?></span>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
