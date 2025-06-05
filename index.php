<?php get_header(); ?>

<div class="main-content">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>🌱 আপনার সরুজ স্বর্গ তৈরি করুন</h1>
            <p>আপনার বাড়ি এবং বাসাস্থানের জন্য বিশিষ্ট কোয়ালিটি প্রাকৃতিক আবিষ্কার করুন। উদ্যান জীব বোকে রেখে কাজ করার জন্য বিশেষ করে সুন্দর করার জন্য আনন্দ সমৃদ্ধ করে আনো।</p>
            <a href="#learn-more" class="btn">আগামী কাজে যান</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <h2>আমাদের ঠিক অ্যাকশন</h2>
            <div class="feature-grid">
                <div class="feature-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/organic.jpg" alt="Organic">
                    <h3>স্বাস্থ্য বাঁচানো</h3>
                    <p>প্রাকৃতিক উদ্ভিদ, স্বাস্থ্য বাঁচানো</p>
                </div>
                <div class="feature-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reuse.jpg" alt="Reuse">
                    <h3>সাইক্লিং সঙ্গ</h3>
                    <p>লেন্ড, কার্যক্রম উদ্বোধন</p>
                </div>
                <div class="feature-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recycle.jpg" alt="Recycle">
                    <h3>পুনরুৎপাদন সঙ্গ</h3>
                    <p>প্রকল্প, কার্যক্রম উদ্বোধন</p>
                </div>
                <div class="feature-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plant.jpg" alt="Plant">
                    <h3>গাছের সঙ্গ</h3>
                    <p>ব্যাংক, লেন্ডার উদ্বোধন</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Listing -->
    <section class="product-section">
        <div class="container">
            <h2>আমাদের পণ্য</h2>
            <div class="product-grid">
                <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => -1,
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                ?>
                    <div class="product-item">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                        <h3><?php the_title(); ?></h3>
                        <span class="price"><?php echo get_post_meta(get_the_ID(), 'price', true); ?></span>
                        <a href="#" class="add-to-cart">Add to Cart</a>
                    </div>
                <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="contact-section">
        <div class="container">
            <h2>যোগাযোগ করুন</h2>
            <?php include(locate_template('template-parts/contact-form.php')); ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>
