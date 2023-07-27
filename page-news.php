
<?php get_header() ?>
<?php get_template_part('template-parts/page-header') ?>
<!-- Blog -->
<div class="blog">
    <div class="container">
        <div class="row">
            <!-- Blog Posts -->
            <div class="col-lg-9">
                <div class="blog_posts">
                       <?php
                    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

                      $the_query = new WP_Query( array(
                        'posts_per_page' => 30,
                        'paged'          => $paged,
                        'post_type' => 'post',
                        'category_name' => 'blog' 
                      ) );

                while( $the_query->have_posts() ){
                  $the_query->the_post();
                  ?>

                    <div class="blog_post">
                        <div class="blog_post_image">
                            <?php the_post_thumbnail() ?>
                        </div>
                        <div class="blog_post_content">
                            <div class="tags">
                                <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                                    <li><?php the_category(); ?></li>
                                </ul>
                            </div>
                            <div class="blog_post_title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
                            <div class="blog_post_text">
                                <p><?php the_excerpt() ?></p>
                            </div>
                        </div>
                    </div>
                  <?php }
                    wp_reset_postdata();

                    $big = 999999999; 
                    ?>
                  </div>
                    <div class="nav-links"><div class="navigation pagination"><?php
                    echo paginate_links( array(
                      'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                      'current' => max( 1, get_query_var('paged') ),
                      'total'   => $the_query->max_num_pages,
                      'prev_text'    => __('<'),
                      'next_text'    => __('>')
                    ) );
                    ?>
                    </div>
                    </div>

                </div>
             <?php get_sidebar() ?>
            </div>
        </div>
    </div>

<?php get_footer() ?>