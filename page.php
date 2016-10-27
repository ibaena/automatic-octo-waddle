<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Feverall
 */

get_header(); ?>

<div id="wrapper">

<div id="primary" class="content-area container-fluid">
        <main id="main" class="site-main " role="main">
            <!-- Start HomePage Slider -->
            <div class="full-bg-slider container">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="http://feverall.dev/wp-content/uploads/2016/10/slider1.jpg" class="img-responsive">
                                </div>
                                <div class="item">
                                    <img src="http://feverall.dev/wp-content/uploads/2016/10/slider2.jpg" class="img-responsive">
                                </div>
                                <div class="item">
                                    <img src="http://feverall.dev/wp-content/uploads/2016/10/slider3.jpg" class="img-responsive">
                                </div>
                                <div class="item">
                                    <img src="http://feverall.dev/wp-content/uploads/2016/10/slider4.jpg" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="add-home-bg">
            <div class="secondary-home-content container-fluid">
                <div class="row " id="bs-3col-layout">
                    <div class="col-lg-8 col-lg-offset-2 col-sm-12">
                        <div class="col-lg-4 three-col-section col-sm-12 testmargin">
                            <img src="http://placehold.it/350x150" class="img-responsive">
                        </div>
                        <div class="col-lg-4 three-col-section col-sm-12 testmargin">
                            <img src="http://placehold.it/350x150" class="img-responsive">
                        </div>
                        <div class="col-lg-4 three-col-section col-sm-12 testmargin">
                            <img src="http://placehold.it/350x150" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="row" id="third-section">
                    <div class="col-lg-6 col-lg-offset-2 col-sm-12">
                        <h2 class="third-section-heading">FeverAll® is a “must-have” for households with babies and children.</h2>
                        <p>
                            FeverAll® is a suppository form of acetaminophen, the common fever remedy known and trusted by pediatricians. Available in 3 strengths for infants or children of different ages, FeverAll® suppositories provide an effective dosing alternative for children who won’t or can’t take medication orally due to nausea, vomiting or irritability. FeverAll® is an official Mommy MD Guides recommended product.
                        </p>
                    </div>
                    <div class="col-lg-2 col-sm-12" id="homepage-description">
                        <img src="http://placehold.it/147x128" class="img-responsive center-img" >
                    </div>
                </div>
                <div class="row" id="coupon-section">
                    <div class="col-lg-8 col-lg-offset-2 col-sm-12">
                        <img src="http://placehold.it/1280px127px" class="img-responsive center-img">
                    </div>
                </div>
            </div>
        </div>

            <!-- End HomePage Slider -->


        </main>
    <!-- #main -->
</div>
<!-- #primary -->

</div>
<?php

get_footer();
