<div class="col postcard js-postcard">
    <div class="text-decoration-none">
        <div class="card h-100 overflow-hidden rounded-0 border-0">
            <a href="<?php the_permalink(); ?>" class="">
                <div class=""></div>
                <?php the_post_thumbnail('medium_large', array(
                    'class' => 'card-img-top rounded-0 img-fluid'
                )); ?>
            </a>
            <!-- <img src="images/Hero_v1_blog2.jpg" alt="Physio Therapy" class=""> -->
            <div class="card-body pt-3 p-0">
                <a href="<?php the_permalink();?>">
                    <h6 class="card-title"><?php the_title(); ?></h6>
                </a>
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
                
                <span class="sub-head text-black-50"> | <?php echo get_the_date( 'M d, Y' ); ?></span>
            </div>
        </div>
    </div>
</div>