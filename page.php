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
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-sm-12">
                        <h3 class="center-text-mobile">Available FeverAll® Products</h3>
                    </div>
                </div>
                <div class="row " id="bs-3col-layout">
                    <div class="col-lg-8 col-lg-offset-2 col-sm-12 col-xs-12">
                        <!--BOX 1-->
                        <div class="col-lg-4 three-col-section col-sm-12 col-xs-12 testmargin box" id="infant-box">
                            <div class="col-sm-8 col-xs-8">
                                <span class="box-heading">Infants</span><br />
                                <span class="box-sub-heading">6 months - 36 months</span>
                            </div>
                            <div class="col-sm-4 col-xs-4">
                                <img src="http://feverall.dev/wp-content/uploads/2016/10/seal-purple.png" width="50" class="img-responsive">
                            </div>
                            <div class="col-sm-9 col-xs-9">
                                <p>
                                    FeverAll® Infants’ Strength is the only acetaminophen labeled for infants
                                    as young as 6 months
                                    of age.
                                </p>
                            </div>
                            <div class="col-sm-12 col-xs-12 styled-link">
                                <p class="more-link"><a href="/products#infants">Learn More &gt;</a></p>
                                <img src="http://feverall.dev/wp-content/uploads/2016/10/box-infant.png" width="90" class="img-responsive children-image">
                            </div>
                        </div>
                        <!--End BOX 1-->
                        <!--BOX 2-->
                        <div class="col-lg-4 three-col-section col-sm-12 testmargin box" id="children-box">
                            <div class="col-sm-6 col-xs-6">
                                <span class="box-heading">Children</span><br />
                                <span class="box-sub-heading">3 years - 6 years</span>
                            </div>
                            <div class="col-sm-9 col-xs-9">
                                <p>
                                    FeverAll® Children’s Strength is a
                                    reliable alternative to oral forms of acetaminophen when
                                    children are ill, nauseous
                                    or irritable.
                                </p>
                            </div>
                            <div class="col-sm-12 col-xs-12 styled-link" >
                                <p class="more-link"><a href="/products#infants">Learn More &gt;</a></p>
                                <img src="http://feverall.dev/wp-content/uploads/2016/10/box-children.png" width="90" class="img-responsive children-image">
                            </div>
                        </div>
                        <!--End BOX 2-->
                        <!--BOX 3-->
                        <div class="col-lg-4 three-col-section col-sm-12 testmargin box" id="jr-box">
                            <div class="col-sm-6 col-xs-6">
                                <span class="box-heading">Jr. Strength</span><br />
                                <span class="box-sub-heading">6 years - 12 years</span>
                            </div>
                            <div class="col-sm-9 col-xs-9">
                                <p>
                                    FeverAll® Jr. Strength is an effective
                                    option when your child is ill,
                                    vomiting or simply can’t
                                    tolerate taking
                                    medication orally.
                                </p>
                            </div>
                            <div class="col-sm-12 col-xs-12 styled-link" >
                                <p class="more-link"><a href="/products#infants">Learn More &gt;</a></p>
                                <img src="http://feverall.dev/wp-content/uploads/2016/10/box-junior.png" width="90" class="img-responsive children-image">
                            </div>
                        </div>
                        <!--End BOX 3-->
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
