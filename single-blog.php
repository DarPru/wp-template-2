<?php get_header() ?>
<?php get_template_part('template-parts/page-header') ?>
<div class="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <h2><?php the_title() ?></h2>
                <p class="single_news_thumbnail"><?php the_post_thumbnail() ?></p>
                   <?php the_content() ?>
            </div>
           	<?php get_sidebar() ?>
        </div>
    </div>
</div>
<?php get_footer() ?>