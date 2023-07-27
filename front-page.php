<?php get_header() ?>
<?php get_template_part('template-parts/front-screen') ?>
<?php get_template_part('template-parts/last-match') ?>
<?php get_template_part('template-parts/best') ?>
<?php get_template_part('template-parts/milestones') ?>
  <div class="player">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="player_content">
             <?php the_content() ?>     
          </div>
        </div>      
      </div>
    </div>
  </div>
<?php get_template_part('template-parts/news') ?>
<?php get_template_part('template-parts/cta') ?>
<?php get_footer() ?>


 