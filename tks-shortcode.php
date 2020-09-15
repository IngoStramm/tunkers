<?php

add_shortcode( 'tks-produto-cmb', 'tks_produto_cmb_shortcode' );

function tks_produto_cmb_shortcode() {

	$post_id = get_the_ID();
	$meta = get_post_meta( $post_id, '', true );
	$servicos = get_field( 'field_595a3ac4bc75f', $post_id );
	$vantagens = get_field( 'field_5919dfd953158', $post_id );
	$aplicacoes = get_field( 'field_591ef94ab14ff', $post_id );
	$especificacoes = get_field( 'field_5919bf66319b8', $post_id );
	$youtube_id = get_field( 'field_596fd9a667f2d', $post_id );
	$youtube_texto = get_field( 'field_596fdc877ff3c', $post_id );
	$arquivos = get_field( 'field_5919bc72030a1', $post_id ); // peb_documentos_download_tipo

	// tks_debug( $meta );

	$output = '
	<div data-elementor-type="section" data-elementor-id="7183" class="elementor elementor-7183" data-elementor-settings="[]">
	    <div class="elementor-inner">
	        <div class="elementor-section-wrap">
	            <section class="elementor-element elementor-element-67568ea7 elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="67568ea7" data-element_type="section">
	                <div class="elementor-container elementor-column-gap-wide">
	                    <div class="elementor-row">
	                        <div class="elementor-element elementor-element-40531e55 elementor-column elementor-col-50 elementor-top-column" data-id="40531e55" data-element_type="column">
	                            <div class="elementor-column-wrap  elementor-element-populated">
	                                <div class="elementor-widget-wrap">';

    if( $servicos ) :
	
		$output .= '
	                                    <div class="tks-tab">
		                                    <div class="elementor-element elementor-element-173aef8 elementor-widget elementor-widget-heading" data-id="173aef8" data-element_type="widget" data-widget_type="heading.default">
		                                        <div class="elementor-widget-container">
		                                            <h2 class="elementor-heading-title elementor-size-default">
		                                            	<a href="#" class="tks-tab-link tks-tab-status-closed" data-tks-tab-id="tks-tab-servico">
		                                            		<i class="tks-tab-icon  fas fa-plus"></i> ' . __( 'SERVIÇOS TÜNKERS', 'tks' ) . 
	                                            		'</a>
	                                            	</h2>
		                                        </div>
		                                    </div>';

			$output .= '
		                                    <div class="tks-tab-content tks-tab-content-closed tks-tab-servico elementor-element elementor-element-64a21c6 elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list" data-id="64a21c6" data-element_type="widget" data-widget_type="icon-list.default">
		                                        <div class="elementor-widget-container">
		                                            <ul class="elementor-icon-list-items">';

	        foreach( $servicos as $servico ) :

				$output .= '
		                                                <li class="elementor-icon-list-item">
		                                                    <span class="elementor-icon-list-icon">
		                                                        <i aria-hidden="true" class="fas fa-square-full"></i> </span>
		                                                    <span class="elementor-icon-list-text">' . $servico[ 'peb_servicos_do_produto_texto' ] . '</span>
		                                                </li>';

	        endforeach;

			$output .= '
		                                            </ul>
		                                        </div>
		                                    </div>
	                                    </div>
	                                    <!-- ./tks-tab -->';

    endif;

    if( $vantagens ) :
	
	$output .= '
	                                    <div class="tks-tab">
		                                    <div class="elementor-element elementor-element-9db7392 elementor-widget elementor-widget-divider" data-id="9db7392" data-element_type="widget" data-widget_type="divider.default">
		                                        <div class="elementor-widget-container">
		                                            <div class="elementor-divider">
		                                                <span class="elementor-divider-separator">
		                                                </span>
		                                            </div>
		                                        </div>
		                                    </div>
		                                    <div class="elementor-element elementor-element-80f9abb elementor-widget elementor-widget-heading" data-id="80f9abb" data-element_type="widget" data-widget_type="heading.default">
		                                        <div class="elementor-widget-container">
		                                            <h2 class="elementor-heading-title elementor-size-default">
		                                            	<a href="#" class="tks-tab-link tks-tab-status-closed" data-tks-tab-id="tks-tab-vantagem">
		                                            			<i class="tks-tab-icon fas fa-plus"></i> ' . __( 'Vantagens', 'tks' ) . 
	                                            			'</a>
                                            			</h2>
		                                        </div>
		                                    </div>
		                                    <div class="tks-tab-content tks-tab-content-closed tks-tab-vantagem elementor-element elementor-element-4076ebb elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list" data-id="4076ebb" data-element_type="widget" data-widget_type="icon-list.default">
		                                        <div class="elementor-widget-container">
		                                            <ul class="elementor-icon-list-items">';

	        foreach( $vantagens as $vantagem ) :

	        	$output .= '
		                                                <li class="elementor-icon-list-item">
		                                                    <span class="elementor-icon-list-icon">
		                                                        <i aria-hidden="true" class="fas fa-square-full"></i> </span>
		                                                    <span class="elementor-icon-list-text">' . $vantagem[ 'peb_vantagens_do_produto_texto' ] . '</span>
		                                                </li>';
	            endforeach;

	        $output .= '
		                                            </ul>
		                                        </div>
		                                    </div>
										</div>
										<!-- ./tks-tab -->';
    endif;

    if( $aplicacoes ) :

		$output .= '

	                                    <div class="tks-tab">
		                                    <div class="elementor-element elementor-element-9cfc092 elementor-widget elementor-widget-divider" data-id="9cfc092" data-element_type="widget" data-widget_type="divider.default">
		                                        <div class="elementor-widget-container">
		                                            <div class="elementor-divider">
		                                                <span class="elementor-divider-separator">
		                                                </span>
		                                            </div>
		                                        </div>
		                                    </div>
		                                    <div class="elementor-element elementor-element-990c2cb elementor-widget elementor-widget-heading" data-id="990c2cb" data-element_type="widget" data-widget_type="heading.default">
		                                        <div class="elementor-widget-container">
		                                            <h2 class="elementor-heading-title elementor-size-default">
		                                            <a href="#" class="tks-tab-link tks-tab-status-closed" data-tks-tab-id="tks-tab-aplicacao">
		                                            		<i class="tks-tab-icon fas fa-plus"></i> ' . __( 'Aplicações', 'tks' ) .
	                                            		'</a>
                                            		</h2>
		                                        </div>
		                                    </div>
		                                    <div class="tks-tab-content tks-tab-content-closed tks-tab-aplicacao elementor-element elementor-element-4c99e1e elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list" data-id="4c99e1e" data-element_type="widget" data-widget_type="icon-list.default">
		                                        <div class="elementor-widget-container">
		                                            <ul class="elementor-icon-list-items">';

	        foreach( $aplicacoes as $aplicacao ) :

				$output .= '
		                                                <li class="elementor-icon-list-item">
		                                                    <span class="elementor-icon-list-icon">
		                                                        <i aria-hidden="true" class="fas fa-square-full"></i> </span>
		                                                    <span class="elementor-icon-list-text">' . $aplicacao[ 'peb_aplicacoes_do_produto_texto' ] . '</span>
		                                                </li>';
	        endforeach;

			$output .= '
		                                            </ul>
		                                        </div>
		                                    </div>
	                                    </div>
	                                    <!-- ./tks-tab -->';

    endif;

    if( $especificacoes ) :

		$output .= '
	                                    <div class="elementor-element elementor-element-90bf40d elementor-widget elementor-widget-divider" data-id="90bf40d" data-element_type="widget" data-widget_type="divider.default">
	                                        <div class="elementor-widget-container">
	                                            <div class="elementor-divider">
	                                                <span class="elementor-divider-separator">
	                                                </span>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="elementor-element elementor-element-b956215 elementor-widget elementor-widget-heading" data-id="b956215" data-element_type="widget" data-widget_type="heading.default">
	                                        <div class="elementor-widget-container">
	                                            <h2 class="elementor-heading-title elementor-size-default">&gt; ' . __( 'especificações técnicas', 'tks' ) . '</h2>
	                                        </div>
	                                    </div>
	                                    <section class="elementor-element elementor-element-9108ae3 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="9108ae3" data-element_type="section">
	                                        <div class="elementor-container elementor-column-gap-default">
	                                            <div class="elementor-row">
	                                                <div class="elementor-element elementor-element-a301cd7 elementor-column elementor-col-100 elementor-inner-column" data-id="a301cd7" data-element_type="column">
	                                                    <div class="elementor-column-wrap  elementor-element-populated">
	                                                        <div class="elementor-widget-wrap">
	                                                            <div class="elementor-element elementor-element-e7cbd1a elementor-widget elementor-widget-text-editor" data-id="e7cbd1a" data-element_type="widget" data-widget_type="text-editor.default">
	                                                                <div class="elementor-widget-container">
	                                                                    <div class="elementor-text-editor elementor-clearfix">
	                                                                        <table>
	                                                                            <tbody>';

        foreach( $especificacoes as $especificacao ) :

			$output .= '
	                                                                                <tr>
	                                                                                    <td class="espec">' . $especificacao[ 'peb_especificacao_tecnica_especificacao' ] . '</td>
	                                                                                    <td class="valor">' . $especificacao[ 'peb_especificacao_tecnica_valor' ] . '</td>
	                                                                                </tr>';
        endforeach;

        $output .= '

	                                                                            </tbody>
	                                                                        </table>
	                                                                    </div>
	                                                                </div>
	                                                            </div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </section>';
    endif;

    $output .= '
	                                </div>
	                            </div>
	                        </div>';

	$output .= '
	                        <div class="elementor-element elementor-element-435eec3f elementor-column elementor-col-50 elementor-top-column" data-id="435eec3f" data-element_type="column">
	                            <div class="elementor-column-wrap  elementor-element-populated">
	                            	<div class="elementor-widget-wrap">';

    if( $arquivos ) :

    	$output .= '
	                                    <div class="elementor-element elementor-element-91cf73f elementor-widget elementor-widget-heading" data-id="91cf73f" data-element_type="widget" data-widget_type="heading.default">
	                                        <div class="elementor-widget-container">
	                                            <h2 class="elementor-heading-title elementor-size-default">&gt; ' . __( 'DOWNLOAD', 'tks' ) . '</h2>
	                                        </div>
	                                    </div>
	                                    <div class="elementor-element elementor-element-7172be2 elementor-widget elementor-widget-accordion" data-id="7172be2" data-element_type="widget" data-widget_type="accordion.default">
	                                        <div class="elementor-widget-container">
	                                            <div class="elementor-accordion" role="tablist">
	                                                <div class="elementor-accordion-item">';

	                                                $count_tabs = 1;
	                                                foreach( $arquivos as $arquivo ) :
	                                                	// tks_debug( $arquivo );

			$output .= '
	                                                    <div id="elementor-tab-title-' . $count_tabs . '" class="elementor-tab-title elementor-active" data-tab="' . $count_tabs . '" role="tab" aria-controls="elementor-tab-content-' . $count_tabs . '">
	                                                        <span class="elementor-accordion-icon elementor-accordion-icon-left" aria-hidden="true">
	                                                            <span class="elementor-accordion-icon-closed"><i class="fas fa-plus"></i></span>
	                                                            <span class="elementor-accordion-icon-opened"><i class="fas fa-minus"></i></span>
	                                                        </span>
	                                                        <a href="">' . $arquivo[ 'peb_documentos_download_tipo' ] . '</a>
	                                                    </div>
	                                                    <div id="elementor-tab-content-' . $count_tabs . '" class="elementor-tab-content elementor-clearfix elementor-active" data-tab="' . $count_tabs . '" role="tabpanel" aria-labelledby="elementor-tab-title-' . $count_tabs . '" style="display: block;">';

	                                                    foreach( $arquivo[ 'peb_documentos_download_arquivos_desse_tipo' ] as $item ) :

				$output .= '	                                                    	
	                                                        <p><a href="' . $item[ 'peb_documentos_download_arquivo' ][ 'url' ] . '" target="_blank" rel="noopener">' . $item[ 'peb_documentos_download_titulo' ] . '</a></p>';

	                                                    endforeach;

			$output .= '
	                                                    </div>';

	                                                	$count_tabs++;

                                                    endforeach;

		$output .= '	                                                    
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>';
    endif;

    if( $youtube_id ) :

    	$output .= '
	                                    <div class="elementor-element elementor-element-73ae239 elementor-aspect-ratio-11 elementor-widget elementor-widget-video" data-id="73ae239" data-element_type="widget" data-settings="{&quot;aspect_ratio&quot;:&quot;11&quot;}" data-widget_type="video.default">
	                                        <div class="elementor-widget-container">
	                                            <div class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline">
	                                                <iframe class="elementor-video-iframe" allowfullscreen="" src="https://www.youtube.com/embed/' . $youtube_id . '?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=0&amp;rel=0&amp;modestbranding=0"></iframe> </div>
	                                        </div>
	                                    </div>';

        if( $youtube_texto ) :

        	$output .= '
	                                    <div class="elementor-element elementor-element-00db34c elementor-widget elementor-widget-text-editor" data-id="00db34c" data-element_type="widget" data-widget_type="text-editor.default">
	                                        <div class="elementor-widget-container">
	                                            <div class="elementor-text-editor elementor-clearfix">
	                                                <p>' . $youtube_texto . '</p>
	                                            </div>
	                                        </div>
	                                    </div>';
    	endif;

    endif;

    /* $output .= '
	                                    <div class="elementor-element elementor-element-1b97a0a elementor-align-justify elementor-widget elementor-widget-button" data-id="1b97a0a" data-element_type="widget" data-widget_type="button.default">
	                                        <div class="elementor-widget-container">
	                                            <div class="elementor-button-wrapper">
	                                                <a href="#" class="elementor-button-link elementor-button elementor-size-lg" role="button">
	                                                    <span class="elementor-button-content-wrapper">
	                                                        <span class="elementor-button-text">DOWNLOAD DO CATÁLOGO</span>
	                                                    </span>
	                                                </a>
	                                            </div>
	                                        </div>
	                                    </div>'; */

	$output .= '	                                    
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </section>
	        </div>
	    </div>
	</div>
	';

	return $output;

}

add_shortcode( 'tks-product-cat-title', 'tks_product_cat_title' );

function tks_product_cat_title() {

	$output = '';

	$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
	$parent = get_term_by( 'id', $term->parent, get_query_var( 'taxonomy' ) );
	if( $parent ) :
		$output .= '<h5 class="tk-product-parent-cat-title">' . $parent->name . '</h5>';
	endif;
	
	$output .= '<h1 class="tk-product-cat-title">' . get_the_archive_title() . '</h1>';

	return $output;

}
add_shortcode( 'tks-menu-parent-cat', 'tks_menu_parent_cat' );

function tks_menu_parent_cat() {

	$output = '';

	$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
	$parent = get_term_by( 'id', $term->parent, get_query_var( 'taxonomy' ) );
	if( $parent ) :
		$pagina_referencia = get_field( 'pagina-de-referencia', $term );
		$pagina_link = get_permalink( $pagina_referencia );
		if( $pagina_referencia ) :
			$output .= '
				<div class="elementor-button-wrapper tk-parent-cat-menu">
					<a href="' . get_permalink( $pagina_referencia ) . '" class="elementor-button-link elementor-button elementor-size-lg" role="button">
								<span class="elementor-button-content-wrapper">
								<span class="elementor-button-icon elementor-align-icon-left">
									<i aria-hidden="true" class="fas fa-grip-horizontal"></i>
								</span>
								<span class="elementor-button-text">MENU ' . $pagina_referencia->post_title . '</span>
				</span>
							</a>
				</div>
			';
		endif;
	endif;
	
	return $output;

}

add_shortcode( 'tks-product-tax-search-form', 'tks_product_tax_search_form' );

function tks_product_tax_search_form() {

	$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

	if( !$term )
		return;

	$parent = get_term_by( 'id', $term->parent, get_query_var( 'taxonomy' ) );

	if( !$parent )
		return;

	$childs = get_terms( array(
		'taxonomy'		=> 'cat_produto',
		'parent'		=> $parent->term_id,
		'hide_empty'	=> true

	) );

	if( !$childs )
		return;

	// tks_debug( $childs );

	$output = '';

	$output .= '
		<div class="searchandfilter tk-pesquisa-produto">
			<div>
				<ul>
					<li>
						<select id="tk-product-cat">
							<option value="" selected="selected">' . __( 'Selecione uma categoria', 'tks' ) . '</option>';

				foreach( $childs as $child ) :

					$output .= '
							<option value="' . $child->term_id . '"';

					// if( $term->term_id == $child->term_id )
					// 	$output .= ' selected="selected"';

					$output .= '>' . $child->name . '</option>';
				endforeach;

		$output .= '
						</select>
					</li>

					<li>
						<select id="tk-product-list">
							<option id="tk-product-list-placeholder" value="">' . __( 'Pesquisar...', 'tks' ) . '</option>
						</select>
					</li>';

		$output .=	'
					<li>
						<a href="#" class="tk-pesquisa-produto-submit-btn">Pesquisar</a>
					</li>
				</ul>
			</div>
		</div>
	';
	return $output;
}

add_shortcode( 'tks-catalogo', 'tks_catalogo' );

function tks_catalogo() {

	$cats = get_terms( 'categoria_de_catalogo_virtual', 
		array(
			'hide_empty' => true
		) 
	);

	// tks_debug( $cats );
	// term_id, name, count

	if( !$cats || empty( $cats ) )
		return;

	$upload_dir = wp_upload_dir();
	// tks_debug( $upload_dir );

	$args = array(
		'post_type'			=> 'peb_catalogo_virtual',
		'post_status'		=> 'publish',
		'nopaging'			=> true,
		'orderby'			=> 'menu_order',
		'order'				=> 'ASC'
	);

	$query = new WP_Query( $args );

	$catalogos = array();
	$total_posts = 0;

	if ( $query->have_posts() ) :

		$total_posts = $query->post_count;

		while ( $query->have_posts() ) : $query->the_post();

			$catalogos[] = array(
				'post_ID'			=> get_the_ID(),
				'post_title'		=> get_the_title(  ),
				'terms'				=> get_the_terms( get_the_ID(), 'categoria_de_catalogo_virtual' ),
				'download'			=> get_field( 'field_5968fde1d368a', get_the_ID() )
			);

	    endwhile;

	endif;

	wp_reset_postdata();

	// tks_debug( $total_posts );

	echo '<div class="tks-catalogos elementor elementor-7226">';

	foreach( $cats as $cat ) :

		$total_cat = $cat->count;

		// tks_debug( $total_cat );

		echo '

			<h2 class="tks-catalogos-cat-title">' . $cat->name . '</h2>';

		$count_catalogo = 0;

		foreach( $catalogos as $catalogo ) :

			// tks_debug( $catalogo[ 'terms' ] );

			foreach( $catalogo[ 'terms' ] as $term ) :

				if( $cat->term_id == $term->term_id ) :


					// tks_debug( $catalogo[ 'download' ] );

					if( $count_catalogo % 4 == 0 ) :

						echo '<section class="elementor-element elementor-element-55454ad5 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="55454ad5" data-element_type="section">

								<div class="elementor-container elementor-column-gap-default">';

						echo 		'<div class="elementor-row">';

					endif;

					// tks_debug( $catalogo[ 'post_title' ] );

					echo '
					<div class="elementor-element elementor-element-28a524f8 elementor-column elementor-col-25 elementor-inner-column" data-id="28a524f8" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
								
						<div class="elementor-column-wrap  elementor-element-populated">

							<div class="elementor-background-overlay"></div>

							<div class="elementor-widget-wrap">

								<div class="elementor-element elementor-element-4de68018 elementor-hidden-phone elementor-widget elementor-widget-image" data-id="4de68018" data-element_type="widget" data-widget_type="image.default">

									<div class="elementor-widget-container">

										<div class="elementor-image">

											<img width="44" height="57" alt="" data-src="' . TKS_URL . '/images/icon-pdf-1.png" class="attachment-large size-large ls-is-cached lazyloaded" src="' . TKS_URL . '/images/icon-pdf-1.png"><noscript><img width="44" height="57"   alt="" data-src="' . TKS_URL . '/images/icon-pdf-1.png" class="attachment-large size-large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />

											<noscript>

												<img width="44" height="57"   alt="" data-src="' . TKS_URL . '/images/icon-pdf-1.png" class="attachment-large size-large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="44" height="57"   alt="" data-src="' . TKS_URL . '/images/icon-pdf-1.png" class="attachment-large size-large lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="44" height="57" src="' . TKS_URL . '/images/icon-pdf-1.png" class="attachment-large size-large" alt="" />

											</noscript>

										</div>
										<!-- /.elementor-image -->

									</div>
									<!-- ./elementor-widget-container -->

								</div>
								<!-- ./elementor-widget-container -->

								<div class="elementor-element elementor-element-4f7e080f elementor-widget elementor-widget-heading" data-id="4f7e080f" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">

									<div class="elementor-widget-container">
										<h3 class="elementor-heading-title elementor-size-xl">' . $catalogo[ 'post_title' ] . '</h3>
									</div>
									<!-- ./elementor-widget-container -->

								</div>
								<!-- ./elementor-element -->

								<div class="elementor-element elementor-element-5ff20dcb elementor-align-center elementor-widget elementor-widget-button" data-id="5ff20dcb" data-element_type="widget" data-widget_type="button.default">
									
									<div class="elementor-widget-container">
										
										<div class="elementor-button-wrapper">';

										if( $catalogo[ 'download' ][ 'url' ] ) :

											echo '
											
											<a href="' . $catalogo[ 'download' ][ 'url' ] . '" target="_blank" class="elementor-button-link elementor-button elementor-size-xs elementor-animation-grow" role="button">
												
												<span class="elementor-button-content-wrapper">

													<span class="elementor-button-icon elementor-align-icon-left">
														<i aria-hidden="true" class="fas fa-angle-right"></i>
													</span>
													<!-- ./elementor-button-icon -->

													<span class="elementor-button-text">download</span>

												</span>
												<!-- ./elementor-button-content-wrapper -->

											</a>
											<!-- ./elementor-button-link -->';

										endif;

										echo '

										</div>
										<!-- ./elementor-button-wrapper -->

									</div>
									<!-- ./elementor-widget-container -->

								</div>
								<!-- ./elementor-element -->

							</div>
							<!-- ./elementor-widget-wrap -->

						</div>
						<!-- ./elementor-column-wrap -->

					</div>
					<!-- ./elementor-element -->';

					if( $count_catalogo % 4 == 3 || ( $count_catalogo + 1 ) == $total_cat ) :

						echo '
								</div>
								<!-- ./elementor-row -->';

						echo '
							</div>
							<!-- .elementor-container -->

						</section>';

					endif;

					$count_catalogo++;
				
				endif;

			endforeach;

		endforeach;

	endforeach;

	echo '
		</div>
		<!-- ./tks-catalogos -->';

}