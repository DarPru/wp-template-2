<?php get_header() ?>
<div class="container">
<section>
	 <div class="white-space-container">
  <h1><?php echo 'Поиск по запросу: ' . get_search_query(); ?></h1>
        <div class="search_box">
  
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		  <?php if ( has_post_thumbnail() ) the_post_thumbnail(); ?>
		  <span><a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
		  <div class="meta">
		    <p class="search_date">Опубликовано: <?php the_time('j M Y'); ?> в <?php the_time('g:i'); ?></p>
		  </div>
		</span>
		</article>
  <?php endwhile;
  else: echo '<h1>К сожалению, по вашему запросу ничего не найдено</h1>'; endif; ?>  

</div>
</div>
</section>
</div>
<?php get_footer(); ?>