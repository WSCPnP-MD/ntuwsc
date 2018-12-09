<?php
/**
 * Page Template
 *
 * @package Page Builder Framework
 */
 
// exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

get_header(); ?>

    <div class="container">
        <button id="getRSP">RSPs</button>
        <button id="getSP">SPs</button>
        <button id="getSC">SCs</button>
        <button id="getAll">All</button>
        <div class="grid">
            <div class="box RSP">
                <div class="box__right">Right → Left</div>
                <div class="box__left">Left → Right</div>
                <div class="box__top">Top → Bottom</div>
                <div class="box__bottom">Bottom → Top</div>
                <div class="box__center">
                  <img src="../wp-content/themes/stand-out/assets/img/rsp-logos/vh.jpg">
                </div>
            </div>
            <div class="box SP">
                <div class="box__right">Right → Left</div>
                <div class="box__left">Left → Right</div>
                <div class="box__top">Top → Bottom</div>
                <div class="box__bottom">Bottom → Top</div>
                <div class="box__center">
                  <img src="../wp-content/themes/stand-out/assets/img/sp-logos/igc.jpg">
                </div>
            </div>
            <div class="box SC">
                <div class="box__right">Right → Left</div>
                <div class="box__left">Left → Right</div>
                <div class="box__top">Top → Bottom</div>
                <div class="box__bottom">Bottom → Top</div>
                <div class="box__center">
                  <img src="../wp-content/themes/stand-out/assets/img/sc-logos/pnp.jpg">
                </div>
            </div>
        </div>
    </div>
	    
<?php get_footer(); ?>