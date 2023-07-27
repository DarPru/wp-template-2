  <?php get_header() ?>
  <div class="home_inner d-flex flex-column align-items-start justify-content-end">
    <div class="parallax_background main_screen_img parallax-window" style="background-image: url(/wp-content/themes/template-2/img/page_bg.png); background-position: center;  background-size: cover; background-repeat: no-repeat;"></div>
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h1 class="home_text_inner"><span> <?php  print_r( get_queried_object()->name ); ?></span></h1>
        </div>
      </div>
    </div>
  </div>

  <div class="streams_cnt">
    <div class="container">
        <?php
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
      $the_query = new WP_Query( array(
        'posts_per_page' => 30,
        'paged'          => $paged,
        'post_type' => 'post',
        'category_name' => 'stream' 
      ) );

while( $the_query->have_posts() ){
  $the_query->the_post();
  ?>
  <div class="one_stream">
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
  <?php
}?>
</div><?php
wp_reset_postdata();


$big = 999999999; 
?><div class="nav-links"><div class="navigation pagination"><?php
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
<?php get_footer() ?>