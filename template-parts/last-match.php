<!-- Results -->
<div class="results">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container">
                    <div class="section_title text-center">
                        <h1>
                            <?php   the_field('lm_title') ?>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row results_row">
            <div class="col">
                <div class="results_title_container text-center">
                    <div class="results_title">
                        <h2>
                            <?php   the_field('lm_subtitle') ?>
                        </h2>
                    </div>
                    <div class="results_subtitle">
                        <h3>
                            <?php   the_field('lm_subtext') ?>
                        </h3>
                    </div>
                </div>
                <?php
                $text1 = get_field('lm_item1_text'); 
                $text2 = get_field('lm_item2_text'); 
                $the_query = new WP_Query( array(
                  'posts_per_page' => 1,
                  'post_type' => 'post',
                  'category_name' => 'stream',
                  'orderby' => 'date',
                ) );

                while( $the_query->have_posts() ){
                  $the_query->the_post();
                  ?>
                <div class="results_container d-flex flex-row align-items-start justify-content-start">
                    <div class="result text-right">
                        <div class="result_content d-flex flex-row align-items-end justify-content-center">
                            <div class="one_team">
                                <div class="team_name">
                                    <?php the_field('item-1') ?>
                                </div>
                                <img src="<?php the_field('logo-1') ?>" alt="<?php the_field('item-1') ?>">
                            </div>
                        </div>
                        <div class="result_text text-left">
                            <p>
                                <?php echo $text1  ?>
                            </p>
                        </div>
                        <div class="button results_button to_left"><a href="#">Watch</a></div>
                    </div>
                    <div class="result text-left">
                        <div class="result_content d-flex flex-row align-items-end justify-content-center">
                            <div class="one_team">
                                <div class="team_name">
                                    <?php the_field('item-2') ?>
                                </div>
                                <img src="<?php the_field('logo-2') ?>" alt="<?php the_field('item-2') ?>">
                            </div>
                        </div>
                        <div class="result_text text-right">
                            <p>
                                <?php   echo $text2 ?>
                            </p>
                        </div>
                        <div class="button results_button to_right"><a href="<?php  the_permalink() ?>">Read more</a></div>
                    </div>
                </div>
                <?php
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</div>