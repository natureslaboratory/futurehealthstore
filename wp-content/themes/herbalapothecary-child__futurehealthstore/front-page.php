<?php

/**
 * Template Name: Home Page 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package futurehealthtore
 */

get_header();
?>
<main id="primary" class="site-main site-main--home">
    <div class="c-home">
        <div class="c-carousel">
            <div class="c-carousel__overlay">
                <div class="c-carousel__content">
                    <p class="c-carousel__small-heading">Ethical Goods, Traded Fairly</p>
                    <h2 class="c-carousel__heading">Future Health Store</h2>
                    <p class="c-carousel__description">We're a not-for-profit community interest company. We never charge more than RRP.</p>
                    <a href="/about-us/" aria-label="About Us"><button class="c-button">Find Out More</button></a>
                </div>
            </div>
        </div>
        <div class="c-promises">
            <div class="c-promises__promise">
                <i class="fas fa-capsules"></i>
                <div>
                    <h2>Reliable</h2>
                    <p>Products You Can Trust</p>
                </div>
            </div>
            <div class="c-promises__promise">
                <i class="fas fa-truck"></i>
                <div>
                    <h2>Home Delivery</h2>
                    <p>Straight To Your Door</p>
                </div>
            </div>
            <div class="c-promises__promise">
                <i class="far fa-credit-card"></i>
                <div>
                    <h2>Secure Payment</h2>
                    <p>100% Secure via Card</p>
                </div>
            </div>
            <div class="c-promises__promise">
                <i class="far fa-comments"></i>
                <div>
                    <h2>Support</h2>
                    <p>Get In Touch With Our Team</p>
                </div>
            </div>
        </div>
        <div class="c-specials">
            <a class="c-specials__option" href="/product-category/natural-skincare/" style="background-image: url(/wp-content/uploads/2021/11/IMG_3694_preview.jpg)">
                <h2>Natural Skincare</h2>
                <h3>Explore our range of natural skincare from leading brands.</h3>
                <p>Shop Weleda, Faith in Nature & Sweet Cecily's.</p>
                <button class="c-button">Shop Now</button>
            </a>
            <a class="c-specials__option" href="/product-category/food-drink/" style="background-image: url(/wp-content/uploads/2021/11/AdobeStock_61195340-scaled.jpeg)">
                <h2>Food & Drink</h2>
                <h3>Delicious herbal teas & coffee, wholefoods & snacks.</h3>
                <p>Take care of your body from the inside out.</p>
                <button class="c-button">Shop Now</button>
            </a>
        </div>
        <a href="/product-category/natural-skincare/sweet-cecilys/" class="c-calculator-banner" style="background-image: url(/wp-content/uploads/2021/11/SC0017-0018-Grouped-scaled.jpg)">
            <h2>Sweet Cecily's<br><strong>Natural Skincare</strong></h2>
            <div>
                <p><strong>Ethically produced natural products</strong></p>
                <p>Hand and face creams, lip balms, body butters and more.</p>
                <p>Treat your skin well this winter!</p>
            </div>
        </a>
        <div class="c-specials">
            <a class="c-specials__option" href="/product-category/vitamins-supplements/" style="background-image: url(/wp-content/uploads/2021/11/AdobeStock_90653578-scaled.jpeg)">
                <h2>Vitamins & Supplements</h2>
                <h3>Give your health and wellbeing a boost.</h3>
                <p>Choose from a wide range of health supplements.</p>
                <button class="c-button">Shop Now</button>
            </a>
            <a class="c-specials__option" href="/product-category/vitamins-supplements/propolis/" style="background-image: url(/wp-content/uploads/2021/11/Whole_Health_Range-scaled.jpg)">
                <h2>Propolis Healthcare</h2>
                <h3>Explore the BeeVital Propolis range.</h3>
                <p>Give your immunity a natural boost this winter.</p>
                <button class="c-button">Shop Now</button>
            </a>
        </div>
        <a href="/product-category/herbal-remedies/" class="c-calculator-banner text-white" style="background-image: url(/wp-content/uploads/2021/11/AdobeStock_2498696831-scaled.jpeg)">
            <h2>Herbal Remedies<br><strong>The Power of Plants</strong></h2>
            <div>
                <p><strong>Explore herbal remedies from A. Vogel & Others</strong></p>
                <p>Help your body cope with the demands of life.</p>
                <p>Naturally strengthen your immune system.</p>
            </div>
        </a>
        <?php

        function renderCards($cardList, $customClass = "")
        { ?>
            <div class="c-cards <?= $customClass ?>">
                <?php foreach ($cardList as $c) { ?>
                    <div class="c-card">
                        <div class="c-card__image-container">
                            <img src="<?= $c["image"] ?>" alt="<?= $c["image_alt"] ?>" loading="lazy">
                        </div>
                        <h3><?= $c["title"] ?></h3>
                        <?= $c["description"] ?>
                        <a class="c-button" href="<?= $c["button_link"] ?>"><?= $c["button_label"] ?></a>
                    </div>
                <?php } ?>
            </div>
        <?php }
        $certCards = [
            [
                "title" => "Herb Mark",
                "description" => "<p>Herbal Apothecary are part of the BHMA's
                                            Herb Mark Scheme. This scheme is
                                            designed to ensure the quality and safety of
                                            herbal products by requiring manufacturers
                                            of herbal products to adopt a common
                                            Quality Management System. Herbal
                                            Apothecary are one of a small selection of
                                            herbal remedy manufacturers who currently
                                            meet this standard.</p>",
                "button_label" => "More about Quality",
                "button_link" => "/quality",
                "image" => "/assets/herbmark.svg",
                "image_alt" => "Herbmark Logo"
            ],
            [
                "title" => "Organic Certification",
                "description" =>
                "<p>
                            Herbal Apothecary are a producer of organic
                            products and as such have been awarded
                            organic certification. Our range of organic
                            tinctures and herbs sit alongside our nonorganic
                            products.
                        </p>
                        <p>
                            We believe organic products are better for
                            growers, better for the environment and
                            ultimately better for consumers.
                        </p>
                        ",
                "button_label" => "Why Organic is Better",
                "button_link" => "/organic",
                "image" => "/assets/organic.svg",
                "image_alt" => "Organic Certification Logo"
            ],
            [
                "title" => "ISO 9001:2015",
                "description" =>
                "<p>
                            At Herbal Apothecary we continually assess
                            our business systems and processes as
                            part of our ISO 9001 QMS. As a result, our
                            business undergoes a process of continual
                            improvement.
                        </p>
                        <p>
                            Our systems are designed to help us
                            identify potential problems before they arise,
                            ensuring the quality of our products.
                        </p>
                        ",
                "button_label" => "Manufacturing Innovation",
                "button_link" => "/manufacturing",
                "image" => "/assets/ISO.svg",
                "image_alt" => "ISO Logo"
            ],
            [
                "title" => "Living Wage Employer",
                "description" =>
                "<p>
                            We pay all our staff the Living Wage. This is
                            a higher rate than the standard minimum
                            wage and reflects the actual cost of living.
                            As well as this, Herbal Apothecary provide
                            paid compassionate leave, holiday
                            allowances which increase each year and a
                            paid volunteering day to give our staff the
                            opportunity to support community initiatives
                            of their choice.
                        </p>
                        ",
                "button_label" => "About our Company",
                "button_link" => "/about-us",
                "image" => "/assets/livingwage.svg",
                "image_alt" => "Living Wage Employer Logo"
            ]
        ];


        //renderCards($certCards);
        ?>

        <div class="c-newsletter">
            <div>
                <h3>Sign Up for our Mailing List</h3>
                <form class="c-newsletter__signup" action="https://buttondown.email/api/emails/embed-subscribe/herbalapothecary" method="post" target="popupwindow" onsubmit="window.open('https:\//buttondown.email/herbalapothecary', 'popupwindow')" class="embeddable-buttondown-form">
                    <label for="bd-email" style="font-weight:700">Enter your email</label>
                    <input type="email" name="email" id="bd-email" />
                    <input type="hidden" value="1" name="embed" />
                    <input type="submit" value="Sign Up!" class="c-button" />
                </form>
            </div>
            <div class="c-socials__wrapper">
                <h3>Follow Us on Social Media</h3>
                <div class="c-socials">
                    <a aria-label="Our Facebook Page" target="_blank" rel="noreferrer" href="https://www.facebook.com/futurehealthstore/"><i class="fab fa-facebook-square"></i></a>
                    <a aria-label="Our Twitter Page" target="_blank" rel="noreferrer" href="https://twitter.com/herbalapoth?lang=en"><i class="fab fa-twitter-square"></i></a>
                    <a aria-label="Our Instagram Page" target="_blank" rel="noreferrer" href="https://www.instagram.com/futurehealthstore/"><i class="fab fa-instagram-square"></i></a>
                </div>
            </div>
        </div>

        <div class="c-home-categories">
            <h2>Product Categories</h2>
            <?php
            // $args = [
            //     'post_type' => ["product"],
            //     'meta_key' => 'total_sales',
            //     'orderby' => 'meta_value_num',
            //     'order' => 'desc',
            //     'posts_per_page' => 12
            // ];

            // $popular_products = new WP_Query($args);

            // if ($popular_products->have_posts()) :
            //     while ($popular_products->have_posts()) :
            //         $popular_products->the_post();
            //         get_template_part('template-parts/product-thumbnail');
            //     endwhile;
            // endif;

            // wp_reset_postdata();
            echo get_template_part("template-parts/product-categories", "categories");
            ?>
        </div>
        <?php

        $featureCards = [
            [
                "title" => "Evidence",
                "description" => "
                <p>
                At Herbal Apothecary we seek to produce natural medicines of the highest quality. We
                manufacture under ISO9001:2015 and Organic certification and according to HACCP
                and GMP principles. We are supported in our work by highly qualified scientific
                personnel.
                </p>",
                "button_label" => "More about Evidence",
                "button_link" => "/evidence",
                "image" => "/assets/evidence.webp",
                "image_alt" => "Scientific Equipment"
            ],
            [
                "title" => "Access",
                "description" =>
                "<p>
                    We believe that natural medicine will have a huge part to play in the healthcare of the
                    21st Century. We are committed to ensuring the long term viability and availability of
                    herbal medicine, to ensure as many people as possible can benefit from the potentially
                    life changing treatments this tradition has to offer.
                </p>
                ",
                "button_label" => "More about Access",
                "button_link" => "/access",
                "image" => "/assets/access.webp",
                "image_alt" => "Wooden gate in field"
            ],
            [
                "title" => "Sustainability",
                "description" =>
                "<p>
                    We believe that truly sustainable businesses must consider all aspects of their operating
                    processes and strive to create long lasting benefits for customers, employees, the
                    community and the wider environment.
                </p>
                ",
                "button_label" => "More about Sustainability",
                "button_link" => "/sustainability",
                "image" => "/assets/sustainability.webp",
                "image_alt" => "Plant shoot"
            ],
            [
                "title" => "Quality",
                "description" =>
                "<p>
                    With more than 30 years of experience, our Technical Team continues its commitment to
                    ensuring our product safety and quality systems are to the highest standards.
                    Experienced chemists, pharmacists, and herbal experts work on the analysis of the
                    goods in our modern in-house laboratory.
                </p>
                ",
                "button_label" => "More about Quality",
                "button_link" => "/quality",
                "image" => "/assets/quality.webp",
                "image_alt" => "Scientific Equipment"
            ]
        ];

        //renderCards($featureCards, "c-cards--wide");



        ?>

    </div>


</main><!-- #main -->

<?php
get_footer();
