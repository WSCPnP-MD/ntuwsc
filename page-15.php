<?php
/**
 * Page Template
 *
 * @package Page Builder Framework
 */
 
// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

get_header(); ?>

	<main>
        <div class="upper">
            <ol class="breadcrumb">
                <li><a href="#">About Us</a></li>
                <li class="active">Projects</li>
            </ol>
            <iframe id="map" src="https://www.google.com/maps/d/u/0/embed?mid=1Fk2aTDS6tpJfmLevgGkEE1OVtqK7uWul"></iframe>
            <div class="text-holder">
                <div class="text">Insert stuff about what WSC does</div>
            </div>

            <div class="text-holder">
                <div class="text">Insert stuff about WSC organisational structure</div>
            </div>
        </div>
        <section class="wrapper">
            <div class="container-fostrap">
                <div>
                    <!--<img src="https://4.bp.blogspot.com/-7OHSFmygfYQ/VtLSb1xe8kI/AAAAAAAABjI/FxaRp5xW2JQ/s320/logo.png" class="fostrap-logo"/>-->
                    <h1 class="heading">
                        Projects
                    </h1>
                </div>
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <div class="card">
                                    <a class="img-card" href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html">
                                    <img src="https://1.bp.blogspot.com/-Bii3S69BdjQ/VtdOpIi4aoI/AAAAAAAABlk/F0z23Yr59f0/s640/cover.jpg" />
                                </a>
                                    <div class="card-content">
                                        <h4 class="card-title">
                                            <a href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html"> Regular Service Projects
                                        </a>
                                        </h4>
                                        <p class="">
                                            They meet up every week to make the world a better place.
                                        </p>
                                    </div>
                                    <div class="card-read-more">
                                        <a href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html" class="btn btn-link btn-block">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <div class="card">
                                    <a class="img-card" href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                                    <img src="https://3.bp.blogspot.com/-bAsTyYC8U80/VtLZRKN6OlI/AAAAAAAABjY/kAoljiMALkQ/s400/material%2Bnavbar.jpg" />
                                </a>
                                    <div class="card-content">
                                        <h4 class="card-title">
                                            <a href="http://www.fostrap.com/2016/02/awesome-material-design-responsive-menu.html"> Special Projects
                                        </a>
                                        </h4>
                                        <p class="">
                                            They meet up around once every month. They also make the world a better place.
                                        </p>
                                    </div>
                                    <div class="card-read-more">
                                        <a href="https://codepen.io/wisnust10/full/ZWERZK/" class="btn btn-link btn-block">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <div class="card">
                                    <a class="img-card" href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                                    <img src="https://4.bp.blogspot.com/-TDIJ17DfCco/Vtneyc-0t4I/AAAAAAAABmk/aa4AjmCvRck/s1600/cover.jpg" />
                                </a>
                                    <div class="card-content">
                                        <h4 class="card-title">
                                            <a href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html"> Supporting Committees
                                        </a>
                                        </h4>
                                        <p class="">
                                            They ensure that WSC is run properly. They are impact multipliers to those who make the world a better place.
                                        </p>
                                    </div>
                                    <div class="card-read-more">
                                        <a href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html" class="btn btn-link btn-block">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>    

<?php get_footer(); ?>