<?php
/**
 * Template Name: Product Listing
 */

get_header();

$args = array(
    'post_type' => 'product',
    'posts_per_page' => -1,
);

$query = new WP_Query($args);

if ($query->have_posts()) :
?>
    <div class="product-section">
        <div class="container">
            <h2>আমাদের পণ্য</h2>
            <div class="product-grid">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="product-item">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                        <h3><?php the_title(); ?></h3>
                        <span class="price"><?php echo get_post_meta(get_the_ID(), 'price', true); ?></span>
                        <a href="#" class="add-to-cart">Add to Cart</a>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php else : ?>
    <p>No products found.</p>
<?php endif;

get_footer();
?>
