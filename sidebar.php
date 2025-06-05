<aside class="sidebar">
    <h3>সর্বশেষ পণ্য</h3>
    <ul>
        <?php
        $args = array(
            'post_type'      => 'product',
            'posts_per_page' => 5,
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
        ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </ul>
</aside>
