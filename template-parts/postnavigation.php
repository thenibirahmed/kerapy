<?php  
    $prev_post = get_previous_post();
    $next_post = get_next_post(); 
     ?>
     <div class="row">
        <div class="col">
            <div class="d-flex justify-content-between py-4">
                <?php 
                if (!empty( $prev_post )){
                    $id = $prev_post->ID;
                ?>
                    <a href="<?php echo get_the_permalink($id);?>" class="sub-head fw-bold btn p-0">
                    <i class="fas fa-arrow-left"></i> <?php echo esc_html__('Previous Post' , 'kerapy'); ?>
                    </a>
                <?php }else{
                    echo '<div></div>';
                } ?>
                <?php 
                if (!empty( $next_post )){
                    $id = $next_post->ID;
                ?>
                    <a href="<?php echo get_the_permalink($id);?>" class="sub-head fw-bold btn p-0">
                    <?php echo esc_html__('Next Post' , 'kerapy'); ?> <i class="fas fa-arrow-right"></i>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>




