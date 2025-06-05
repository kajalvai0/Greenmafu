<?php
/**
 * Template Name: Cart Page
 */

get_header();

$cart_items = WC()->cart->get_cart();

if (!empty($cart_items)) :
?>
    <div class="cart-section">
        <div class="container">
            <h2>আপনার কার্ট</h2>
            <ul class="cart-items">
                <?php foreach ($cart_items as $cart_item_key => $cart_item) : ?>
                    <li>
                        <img src="<?php echo wp_get_attachment_url($cart_item['data']->get_image_id()); ?>" alt="<?php echo $cart_item['data']->get_name(); ?>" width="100">
                        <span><?php echo $cart_item['data']->get_name(); ?></span>
                        <span><?php echo wc_price($cart_item['data']->get_price()); ?></span>
                        <button type="button" class="remove-item" data-cart-item-key="<?php echo esc_attr($cart_item_key); ?>">Remove</button>
                    </li>
                <?php endforeach; ?>
            </ul>
            <a href="<?php echo wc_get_checkout_url(); ?>" class="checkout-btn">Checkout</a>
        </div>
    </div>
<?php else : ?>
    <div class="cart-section">
        <div class="container">
            <h2>আপনার কার্ট খালি</h2>
        </div>
    </div>
<?php endif;

get_footer();
?>
