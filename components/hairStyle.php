<section id="hairStyle" class="hairStyle ">
    <div class="hairStyle__headingLv2Wrap  fade-in">
        <h2 class="hairStyle__headingLv2">HAIR STYLE</h2>
        <img class="hairStyle__headingImg" src="<?php echo get_template_directory_uri(); ?>/img/titleBackGroundBlue.webp" alt="ペンキ青の背景1" width="" height="" decoding="async">
        <img class="hairStyle__headingImg2" src="<?php echo get_template_directory_uri(); ?>/img/titleBackGroundBlue2.webp" alt="ペンキ青の背景2" width="" height="" decoding="async">
    </div>



    <div class="swiper fade-in fade-in-up">
        <ul class="swiper-wrapper">
            <?php
            $style_query = new WP_Query([
                'post_type' => 'style',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DESC'
            ]);

            if ($style_query->have_posts()) :
                $count = 0;
                while ($style_query->have_posts()) : $style_query->the_post();
                    $page_number = ceil(++$count / 6);
                    $page_link = $page_number > 1
                        ? get_post_type_archive_link('style') . "page/{$page_number}/"
                        : get_post_type_archive_link('style');
            ?>
                    <li class="swiper-slide">
                        <a href="<?php echo esc_url($page_link); ?>" class="swiper-slideLink">
                            <?php if (has_post_thumbnail()) :
                                the_post_thumbnail('large', [
                                    'style' => 'width:60%; height:auto;',
                                    'decoding' => 'async'
                                ]);
                            endif; ?>
                        </a>
                    </li>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </ul>
        <div class="swiper-pagination"></div>
    </div>

    <button class="u-btn fade-in fade-in-up">
        <a href="<?php echo esc_url(home_url('/style')); ?>" class="u-btnLink">
            <img src="<?php echo get_template_directory_uri(); ?>/img/buttonMore.webp" alt="moreボタン" width="172" height="54" decoding="async">
            <p class="u-btnText">MORE</p>
        </a>
    </button>
</section>