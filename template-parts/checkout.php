<?php
/**
 * Template Name: Checkout Page
 */

get_header();

?>

<div class="checkout-section">
    <div class="container">
        <h2>Checkout</h2>
        <form action="#" method="POST">
            <input type="text" name="name" placeholder="আপনার নাম" required>
            <input type="email" name="email" placeholder="ইমেইল ঠিকানা" required>
            <textarea name="address" placeholder="ঠিকানা" rows="4" required></textarea>
            <button type="submit" class="btn">Order Now</button>
        </form>
    </div>
</div>

<?php get_footer(); ?>
