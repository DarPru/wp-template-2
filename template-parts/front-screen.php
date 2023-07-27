  <div class="home">
    <!-- Home Slider -->
    <div class="home_slider_container">
      <div class="owl-carousel owl-theme home_slider">
         <div class="home_slide">
          <div class="background_image" style="background-image:url(/wp-content/themes/template-2/img/main_pic.png)"></div>
              <div class="home_container">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-10">
                      <div class="home_content">
                        <div class="home_text d-flex flex-row align-items-center justify-content-start">
                          <div><?php the_field('fs_number') ?></div>
                          <span><?php the_field('fs_text') ?></span>
                        </div>
                        <div class="next_match">
                          <div>
                            <div class="next_match_home">
                              <a href="#">All videos</a>
                            </div>
                            <div class="next_match_guest">
                              <a href="#">Online</a>
                            </div>
                          </div>                    
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </div>
    </div>
  </div>
  <div class="breaking_news d-flex flex-row align-items-start justify-content-start">
    <div class="breaking_news_title text-right"><?php the_field('ms_title') ?></div>
    <div class="breaking_news_content">
      <div class="breaking_news_slider_container">
        <div style="display: flex;  align-items: center;" class="owl-carousel owl-theme breaking_news_slider">
              <?php
                  while( have_rows('main_slider') ) : the_row();?>
                      <div class="breaking_news_slide"> <?php the_sub_field('ms_field'); ?></div>                 
                  <?php  endwhile;?>  
        </div>
      </div>
    </div>
  </div>
