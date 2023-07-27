<!-- News -->
<div class="news">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container">
                    <div class="section_title">
                        <h2><?php the_field('news_title') ?></h2>
                    </div>
                    <div class="section_subtitle">
                        <h3><?php the_field('news_subtitle') ?></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row news_row">
            <?php $the_query = new WP_Query( array(
              'posts_per_page' => 3,
              'post_type' => 'post',
              'category_name' => 'blog'  
            ) ); 
            while( $the_query->have_posts() ){
              $the_query->the_post();
              ?>
            <div class="col-lg-4">
                <div class="news_post">
                    <div class="news_post_image">
                         <?php the_post_thumbnail() ?>
                    </div>
                    <div class="news_post_content">
                        <div class="tags">
                            <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                                <li><?php the_category(); ?></li>
                            </ul>
                        </div>
                        <div class="news_post_title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
                        <div class="news_post_text">
                            <p><?php the_excerpt() ?></p>
                        </div>
                    </div>
                </div>
            </div>
           <?php } wp_reset_postdata();?>
        </div>
    </div>
</div>