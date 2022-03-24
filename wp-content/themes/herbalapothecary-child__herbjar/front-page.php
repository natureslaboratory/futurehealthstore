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
                    <p class="c-carousel__small-heading">The HerbJar</p>
                    <h1 class="c-carousel__heading">Additive-Free Skincare</h1>
                    <p class="c-carousel__description">Enjoy the regenerative and anti-ageing benefits of healthy and nourishing ingredients, with zero exposure to potentially harmful chemicals.</p>
                    <a href="/about-us/" aria-label="About Us"><button class="c-button">About Us</button></a>
                </div>
            </div>
        </div>
        <div class="c-promises">
            <div class="c-promises__promise">
                <i class="fas fa-leaf"></i>
                <div>
                    <h2>Natural</h2>
                    <p>No Chemical Additives</p>
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
                    <h2>Help &amp; Support</h2>
                    <p>Get In Touch With Our Team</p>
                </div>
            </div>
        </div>
        <div class="c-specials quad">
            <a class="c-specials__option" href="/product-category/sensitive-skin-cleansers/" style="background-image: url(/wp-content/uploads/2021/11/IMG_3694_preview.jpg)">
                <h2 class="large">Dry Skin</h2>
                <button class="c-button">Shop Now</button>
            </a>
            <a class="c-specials__option" href="/product-category/sensitive-skin-cleansers/" style="background-image: url(/wp-content/uploads/2021/11/IMG_3694_preview.jpg)">
                <h2 class="large">Normal Skin</h2>
                <button class="c-button">Shop Now</button>
            </a>
            <a class="c-specials__option" href="/product-category/sensitive-skin-cleansers/" style="background-image: url(/wp-content/uploads/2021/11/IMG_3694_preview.jpg)">
                <h2 class="large">Oily Skin</h2>
                <button class="c-button">Shop Now</button>
            </a>
            <a class="c-specials__option" href="/product-category/sensitive-skin-cleansers/" style="background-image: url(/wp-content/uploads/2021/11/IMG_3694_preview.jpg)">
                <h2 class="large">Mature Skin</h2>
                <button class="c-button">Shop Now</button>
            </a>
        </div>
        <div class="c-specials">
            <a class="c-specials__option" href="/product-category/sensitive-skin-cleansers/" style="background-image: url(/wp-content/uploads/2021/11/IMG_3694_preview.jpg)">
                <h2>Sensitive Skin Cleansers</h2>
                <h3>Explore our range of natural skin cleansers.</h3>
                <p>Formulated for sensitive skin.</p>
                <button class="c-button">Shop Now</button>
            </a>
            <a class="c-specials__option" href="/product-category/food-drink/" style="background-image: url(/wp-content/uploads/2021/11/AdobeStock_61195340-scaled.jpeg)">
                <h2>Sensitive Skin Moisturisers</h2>
                <h3>Lock-in moisture with our natural creams.</h3>
                <p>Create for people with sensitive skin.</p>
                <button class="c-button">Shop Now</button>
            </a>
        </div>
        <div class="c-specials">
            <a class="c-specials__option" href="/product-category/vitamins-supplements/" style="background-image: url(/wp-content/uploads/2021/11/AdobeStock_90653578-scaled.jpeg)">
                <h2>Male Skincare</h2>
                <h3>Skincare just for male skin.</h3>
                <p>Totally natural, no additives or fragrances.</p>
                <button class="c-button">Shop Now</button>
            </a>
            <a class="c-specials__option" href="/product-category/vitamins-supplements/propolis/" style="background-image: url(/wp-content/uploads/2021/11/Whole_Health_Range-scaled.jpg)">
                <h2>Discover Your Skin Type</h2>
                <h3>Not sure what skin type you have?</h3>
                <p>Check out our handy guide.</p>
                <button class="c-button">Find My Skin Type</button>
            </a>
        </div>
    </div>


</main><!-- #main -->

<?php
get_footer();
