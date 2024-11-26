<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

?>

<div data-elementor-type="archive" data-elementor-id="7211" class="elementor catalogo-virtual elementor-location-archive" data-elementor-settings="[]">
    <div class="elementor-inner">
        <div class="elementor-section-wrap">

            <section class="elementor-element catalogo-vitual-section elementor-section-content-middle elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle elementor-section elementor-top-section" data-id="459c9be5" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;shape_divider_bottom&quot;:&quot;tilt&quot;}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-shape elementor-shape-bottom" data-negative="false">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                        <path class="elementor-shape-fill" d="M0,6V0h1000v100L0,6z"></path>
                    </svg> </div>
                <div class="elementor-container elementor-column-gap-wider">
                    <div class="elementor-row">
                        <div class="elementor-element elementor-element-22230ea elementor-column elementor-col-100 elementor-top-column" data-id="22230ea" data-element_type="column">
                            <div class="elementor-column-wrap  elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <section class="elementor-element elementor-element-2be47a6b elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="2be47a6b" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-element elementor-element-6acf107 elementor-column elementor-col-100 elementor-inner-column" data-id="6acf107" data-element_type="column">
                                                    <div class="elementor-column-wrap  elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-59aef1ca elementor-widget elementor-widget-heading" data-id="59aef1ca" data-element_type="widget" data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <h1 class="elementor-heading-title elementor-size-default">catálogo</h1>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-14f54f32 elementor-widget elementor-widget-heading" data-id="14f54f32" data-element_type="widget" data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <h5 class="elementor-heading-title elementor-size-default">virtual</h5>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-2ba9583c elementor-widget elementor-widget-divider" data-id="2ba9583c" data-element_type="widget" data-widget_type="divider.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-divider">
                                                                        <span class="elementor-divider-separator">
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="elementor-element elementor-element-2ac18ac elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle elementor-section elementor-top-section" data-id="2ac18ac" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-row">
                        <div class="elementor-element elementor-element-7fda433 elementor-column elementor-col-100 elementor-top-column" data-id="7fda433" data-element_type="column">
                            <div class="elementor-column-wrap  elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-a265140 elementor-widget elementor-widget-heading" data-id="a265140" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Catálogos de Automação Industrial</h2>
                                        </div>
                                    </div>
                                    <section class="elementor-element elementor-element-5da5f9ae elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="5da5f9ae" data-element_type="section">

                                        	<?php
                                        	$total_posts = $GLOBALS[ 'wp_query' ]->post_count;
                                        	$count_posts = 0;
                                        	// tks_debug( $count );
                                        	while ( have_posts() ) : the_post(); ?>

                                        		<?php
                                        			$post_id = get_the_ID();
                                        			$pdf_url = get_field( 'field_5968fde1d368a' )[ 'url' ];
                                        		?>

                                        		<?php // tks_debug( $pdf_url ); ?>

                                        		<?php if( $count_posts % 4 == 0 ) : ?>
                                        			<div class="elementor-container elementor-column-gap-default">
		                                            	<div class="elementor-row">
                                        		<?php endif; ?>

	                                                <div class="elementor-element elementor-element-37d58a4a elementor-column elementor-col-25 elementor-inner-column" data-id="37d58a4a" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
	                                                    <div class="elementor-column-wrap  elementor-element-populated">
	                                                        <div class="elementor-background-overlay"></div>

	                                                        <div class="elementor-widget-wrap" style="padding-bottom: 40px;">

	                                                            <div class="elementor-element elementor-element-6684bc8d elementor-hidden-phone elementor-widget elementor-widget-image" data-id="6684bc8d" data-element_type="widget" data-widget_type="image.default">
	                                                                <div class="elementor-widget-container">
	                                                                    <div class="elementor-image">

	                                                                        <img width="44" height="57" alt="" data-src="<?php echo TKS_URL; ?>images/icon-pdf-1.png" class="attachment-large size-large ls-is-cached lazyloaded" src="<?php echo TKS_URL; ?>images/icon-pdf-1.png"><noscript><img width="44" height="57" alt="" data-src="<?php echo TKS_URL; ?>images/icon-pdf-1.png" class="attachment-large size-large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="44" height="57" alt="" data-src="<?php echo TKS_URL; ?>images/icon-pdf-1.png" class="attachment-large size-large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="44" height="57" alt="" data-src="<?php echo TKS_URL; ?>images/icon-pdf-1.png" class="attachment-large size-large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="44" height="57" src="<?php echo TKS_URL; ?>images/icon-pdf-1.png" class="attachment-large size-large" alt="" /></noscript> </div>
	                                                                </div>

	                                                            </div>

	                                                            <div class="elementor-element elementor-element-5fab10ec elementor-widget elementor-widget-heading" data-id="5fab10ec" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
	                                                                <div class="elementor-widget-container">
	                                                                    <h3 class="elementor-heading-title elementor-size-xl"><?php the_title(); ?></h3>
	                                                                </div>
	                                                            </div>

	                                                            <?php if( $pdf_url ) : ?>

		                                                            <div class="elementor-element elementor-element-23554487 elementor-align-center elementor-widget elementor-widget-button" data-id="23554487" data-element_type="widget" data-widget_type="button.default" style="position: absolute; bottom: 0;">
		                                                                <div class="elementor-widget-container">
		                                                                    <div class="elementor-button-wrapper">

		                                                                        <a href="<?php echo $pdf_url; ?>" class="elementor-button elementor-size-xs elementor-animation-grow" role="button" target="_blank">
		                                                                            <span class="elementor-button-content-wrapper">
		                                                                                <span class="elementor-button-icon elementor-align-icon-left">
		                                                                                    <i aria-hidden="true" class="fas fa-angle-right"></i> </span>
		                                                                                <span class="elementor-button-text">download</span>
		                                                                            </span>
		                                                                        </a>

		                                                                    </div>
		                                                                </div>
		                                                            </div>
		                                                            <!--/.elementor-widget-button -->

		                                                        <?php endif; ?>

	                                                        </div>
	                                                        <!-- /.elementor-widget-wrap -->

	                                                    </div>
	                                                </div>

                                        		<?php if( ( $count_posts % 4 == 3 ) || ( $count_posts == ( $total_posts - 1 ) ) ) : ?>
	            	                            		</div>
	        	                                		<!-- /.elementor-row -->
			                                        </div>
        	                                		<!-- /.elementor-container -->
	                                        		<?php //tks_debug( 'fechou' ); ?>
                                        		<?php endif; ?>

	                                            <?php $count_posts++; ?>

                                        	<?php endwhile ?>

                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="elementor-element elementor-element-2822a35 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="2822a35" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-element elementor-element-1a5aa55 elementor-column elementor-col-100 elementor-top-column" data-id="1a5aa55" data-element_type="column">
                            <div class="elementor-column-wrap">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<?php get_footer();