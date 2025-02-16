<?php get_header(); ?>

<main>
    <section id="archiveQanda" class="archiveQanda u-contentWidth">
        <h1 class="u-headingLv1">Q&A</h1>

        <?php
        $paged = max(1, get_query_var('paged', 1));

        $args = array(
            'post_type'      => 'qanda',
            'posts_per_page' => 8,
            'paged'          => $paged,
        );

        $the_query = new WP_Query($args);
        ?>

        <?php if ($the_query->have_posts()) : ?>
            <ul class="archiveQanda__container">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li class="archiveQanda__item">

                        <button class="archiveQanda__tabTextQuestion acdn_close">Q：<?php the_field('question'); ?></button>
                        <div class="archiveQanda__tabTextAnswer acdn_close">
                            <ul>
                                <li>
                                    <p>A：<?php the_field('answer'); ?></p>
                                </li>
                            </ul>
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


    </section>
</main>

<?php get_footer(); ?>