<!-- Upcoming & Latest -->
<div class="upcoming_latest">
    <div class="container">
        <div class="row">
            <!-- Upcoming Events -->
            <div class="col-xl-12">
                <div class="section_title_container">
                    <div class="section_title light">
                        <h2>
                            <?php the_field('best_title') ?>
                        </h2>
                    </div>
                    <div class="section_subtitle">
                        <h3>
                            <?php the_field('best_subtitle') ?>
                        </h3>
                    </div>
                </div>
                <div class="custom_list_a">
                    <ul>
                        <?php 
                      $args = [
                      'taxonomy'      => [ 'post_tag' ], 
                      'hide_empty'    => true,
                      'number'        => '8'                  
                    ];
                        $terms = get_terms( $args );
                        foreach( $terms as $term ){
                          ?>
                        <li class="d-flex flex-row align-items-center justify-content-start">
                            <div class="custom_list_image"><img src="<?php the_field('tax_img',  $term->taxonomy . '_' . $term->term_id); ?>" alt="<?php  print_r( $term->name ); ?>"></div>
                            <div class="custom_list_title_container">
                                <div class="custom_list_title"><a href="<?php echo get_term_link( $term ) ?>">
                                        <?php  print_r( $term->name ); ?></a></div>
                            </div>
                            <div class="custom_list_link ml-auto"><a href="<?php echo get_term_link( $term ) ?>">Watch</a></div>
                        </li>
                        <?php
                        }
                         ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>