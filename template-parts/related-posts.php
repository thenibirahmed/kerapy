<?php 
global $post;
            
$cats = get_the_category($post->ID);

$ids = array();
foreach( $cats as $cat ){
    $ids[] = $cat->term_id;
}
$rel_post = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'category__in'  => $ids,
    'post__not_in'  => array($post->ID)
));

if( count($ids) > 1 ){
?>
<?php } ?>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5">
            <?php 
            while( $rel_post->have_posts() ){
                $rel_post->the_post();
                ?>
                    <div class="col">
                        <div class="card h-100 border-0 bg-light postcard">
                            <a href="<?php the_permalink(); ?>" class="">
                                <div class=""></div>
                                <?php the_post_thumbnail('medium_large', array(
                                    'class' => 'card-img-top img-fluid rounded-0'
                                )); ?>
                            </a>
                            <div class="card-body p-0">
                                <a href="<?php the_permalink();?>">
                                    <h6 class="card-title pt-4"><?php the_title(); ?></h6>
                                </a>
                                <p>
                                    <?php 
                                        $count = 0;
                                        $cats = get_the_category();
                                        if( ! empty($cats) ){
                                            foreach( $cats as $cat){
                                                $count++;
                                                ?>
                                                <a class="related-postcard rela-card text-black-50" href="<?php echo get_category_link($cat->term_id);?>">
                                                    <?php echo esc_html($cat->name); ?>
                                                </a> 
                                            <?php   
                                                if( $count == 1){
                                                    break;
                                                }
                                            }
                                        }
                                    ?>
                                    
                                    <span class="related-postcard rela-card text-black-50"> | <?php echo get_the_date( 'M d, Y' ); ?></span>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>



