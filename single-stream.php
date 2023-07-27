<?php get_header() ?>
<?php get_template_part('template-parts/page-header') ?>
<div class="one_trans">
    <div class="container">
        <div class="one_trans_teams">
            <div class="one_team">
                <div class="team_name">
                    <?php the_field('item-1') ?>
                </div>
                <img src="<?php the_field('logo-1') ?>" alt="<?php the_field('item-1') ?>">
            </div>
            <span>
                :
            </span>
            <div class="one_team">
                <div class="team_name">
                    <?php the_field('item-2') ?>
                </div>
                <img src="<?php the_field('logo-2') ?>" alt="<?php the_field('item-2') ?>">
            </div>
        </div>
        <div class="date_time">
            <?php the_field('date') ?>
            <br>
            <?php the_field('time') ?>
        </div>
        <a class="watch_online" href="#">
            WATCH ONLINE
        </a>
        <br>
        <?php the_content() ?>
    </div>
</div>
<?php get_footer() ?>