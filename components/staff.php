<section id="staff" class="staff ">
    <div class="staff__headingLv2Wrap  fade-in">
        <h2 class="staff__headingLv2">STAFF</h2>
        <img class="staff__headingImg" src="<?php echo get_template_directory_uri(); ?>/img/titleBackGroundPurple.webp" alt="ペンキ紫の背景1" width="358" height="99" decoding="async">
        <img class="staff__headingImg2" src="<?php echo get_template_directory_uri(); ?>/img/titleBackGroundPurple2.webp" alt="ペンキ紫の背景2" width="108" height="158" decoding="async">
    </div>



    <div class="staff__imgContainer fade-in fade-in-up">
        <?php
        $staff_query = new WP_Query([
            'post_type'      => 'staff',
            'posts_per_page' => 5,
            'orderby'        => 'date',
            'order'          => 'DESC'
        ]);

        if ($staff_query->have_posts()) :
            while ($staff_query->have_posts()) : $staff_query->the_post();
                $staff_archive_link = get_post_type_archive_link('staff');
        ?>
                <a href="<?php echo esc_url($staff_archive_link); ?>" class="staff__imgLink">
                    <?php if (has_post_thumbnail()) :
                        the_post_thumbnail('large', [
                            'style' => '',
                            'decoding' => 'async'
                        ]);
                    endif; ?>
                </a>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;

        ?>
    </div>

    <button class="u-btn fade-in fade-in-up">
        <!-- <a href="<?php echo esc_url(home_url('/')); ?>staff" class="u-btnLink u-btnLink--marginTop"> -->
        <a href="<?php echo esc_url(home_url('/')); ?>staff" class="u-btnLink">
            <img src="<?php echo get_template_directory_uri(); ?>/img/buttonMore.webp" alt="moreボタン" width="172" height="54" decoding="async">
            <p class="u-btnText">MORE</p>
        </a>
    </button>
</section>