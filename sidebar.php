<div class="col-lg-3 sidebar_col">
    <div class="sidebar">
        <div class="latest_games">
            <div class="sidebar_title_container">
                <div class="sidebar_title">
                    <h3>Newest streams</h3>
                </div>
            </div>
            <div class="latest_games_container text-center">
                    <?php  $the_query = new WP_Query( array(
                        'posts_per_page' => 3,
                        'post_type' => 'post',
                        'category_name' => 'stream' 
                      ) ); 
                    while( $the_query->have_posts() ){
                          $the_query->the_post();
                          ?>

                <div class="one_stream" data-curdate="1634218568" data-this_date="1606579200">
                    <div class="stream_logos">
                        <img src="<?php the_field('logo-1') ?>" alt="<?php the_field('item-1') ?>" title="<?php the_field('item-1') ?>">
                        <span>:</span>
                        <img src="<?php the_field('logo-2') ?>" alt="<?php the_field('item-2') ?>" title="<?php the_field('item-2') ?>">
                    </div>
                    <div>
                        <a href="<?php the_permalink() ?>" class="watch_online">
                            <span>Watch</span>
                        </a>
                        <div class="stream_time">
                             <?php the_field('date') ?>
                            <br>
                           <?php the_field('time') ?>
                        </div>
                    </div>
                </div>
              <?php }
                wp_reset_postdata(); ?>

            </div>
        </div>
    </div>
</div>