<?php get_header(); ?>

<main>
    <section id="style" class="style u-contentWidth">
        <h1 class="u-headingLv1">HAIR STYLE</h1>

        <?php
        $paged = max(1, get_query_var('paged', 1));

        $args = array(
            'post_type'      => 'style',
            'posts_per_page' => 6,
            'paged'          => $paged,
        );

        $the_query = new WP_Query($args);
        ?>

        <?php if ($the_query->have_posts()) : ?>
            <ul class="hairStyleCatalog__container">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li class="hairStyleCatalog__card">
                        <div class="hairStyleCatalog__thumbnail">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium_large'); ?>

                            <?php else : ?>
                                <img src="https://placehold.jp/16px/999/ffffff/352x198.png?text=No%20Image" alt="noimage">
                            <?php endif; ?>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>

            <div class="pagination">
                <?php
                echo paginate_links(array(
                    'total'     => $the_query->max_num_pages,
                    'current'   => $paged,
                    'prev_text' => '« 前へ',
                    'next_text' => '次へ »'
                ));
                ?>
            </div>

        <?php else : ?>
            <p>投稿が見つかりませんでした。</p>
        <?php endif; ?>

        <?php
        wp_reset_postdata();
        ?>

        <div class="modal__container">
            <div class="modal__wrap"><img src="" class="modal__img"></div>
        </div>

    </section>
</main>

<?php get_footer(); ?>