<?php

add_shortcode('tks-produto-cmb', 'tks_produto_cmb_shortcode');

function tks_produto_cmb_shortcode()
{

    $post_id = get_the_ID();
    $meta = get_post_meta($post_id, '', true);
    $servicos = get_field('field_595a3ac4bc75f', $post_id);
    $vantagens = get_field('field_5919dfd953158', $post_id);
    $aplicacoes = get_field('field_591ef94ab14ff', $post_id);
    $especificacoes = get_field('field_5919bf66319b8', $post_id);
    $youtube_id = get_field('field_596fd9a667f2d', $post_id);
    $youtube_texto = get_field('field_596fdc877ff3c', $post_id);
    $arquivos = get_field('field_5919bc72030a1', $post_id); // peb_documentos_download_tipo

    // tks_debug( $meta );

    $output = '
        <div class="tks-produto-detalhes">
            <div class="tks-produto-detalhes-col">';
    if ($servicos) {

        $output .= '
                <div class="tks-tab">
                    <h2>
                        <a href="#" class="tks-tab-link tks-tab-status-closed" data-tks-tab-id="tks-tab-servico"><i class="tks-tab-icon  fas fa-plus"></i> ' . __('SERVIÇOS TÜNKERS', 'tks') . '</a>
                    </h2>';
        $output .= '
                    <div class="tks-tab-content tks-tab-content-closed tks-tab-servico">
                        <ul class="tks-square-list">';
        foreach ($servicos as $servico) {
            $output .= '
                            <li>' . $servico['peb_servicos_do_produto_texto'] . '</li>';
        }
        $output .= '
                        </ul>
                    </div>
                </div>
                <!-- ./tks-tab -->';
    }
    if ($vantagens) {
        $output .= '
                <div class="tks-tab">
                    <h2>
                        <a href="#" class="tks-tab-link tks-tab-status-closed" data-tks-tab-id="tks-tab-vantagem"><i class="tks-tab-icon fas fa-plus"></i> ' . __('Vantagens', 'tks') . '</a>
                    </h2>
                    <div class="tks-tab-content tks-tab-content-closed tks-tab-vantagem">
                        <ul class="tks-square-list">';
        foreach ($vantagens as $vantagem) {
            $output .= '
                            <li>' . $vantagem['peb_vantagens_do_produto_texto'] . '</li>';
        }
        $output .= '
                        </ul>
                    </div>
                </div>
                <!-- ./tks-tab -->';
    }
    if ($aplicacoes) {
        $output .= '
                <div class="tks-tab">
                    <h2>
                        <a href="#" class="tks-tab-link tks-tab-status-closed" data-tks-tab-id="tks-tab-aplicacao"><i class="tks-tab-icon fas fa-plus"></i> ' . __('Aplicações', 'tks') . '</a>
                    </h2>
                    <div class="tks-tab-content tks-tab-content-closed tks-tab-aplicacao">
                        <ul class="tks-square-list">';
        foreach ($aplicacoes as $aplicacao) {
            $output .= '
                            <li>' . $aplicacao['peb_aplicacoes_do_produto_texto'] . '</li>';
        }
        $output .= '
                        </ul>
                    </div>
                </div>
                <!-- ./tks-tab -->';
    }
    if ($especificacoes) {
        $output .= '
                <h2>&gt; ' . __('especificações técnicas', 'tks') . '</h2>
                <table class="tks-table">
                    <tbody>';
        foreach ($especificacoes as $especificacao) {
            $output .= '
                        <tr>
                            <td class="espec">' . $especificacao['peb_especificacao_tecnica_especificacao'] . '</td>
                            <td class="valor">' . $especificacao['peb_especificacao_tecnica_valor'] . '</td>
                        </tr>';
        }
        $output .= '
                    </tbody>
                </table>';
    }
    $output .= '
            </div>
            <div class="tks-produto-detalhes-col">';
    if ($arquivos) {
        $output .= '
	        <h2>&gt; ' . __('DOWNLOAD', 'tks') . '</h2>';
        $output .= '<div class="tks-download-box">';
        $count_tabs = 1;
        foreach ($arquivos as $arquivo) {
            $output .= '
            <div class="tks-tab">
                <h3>
                    <a href="#" class="tks-tab-link tks-tab-status-closed" data-tks-tab-id="tks-tab-arquivo-' . $count_tabs . '"><i class="tks-tab-icon fas fa-plus"></i> ' . $arquivo['peb_documentos_download_tipo'] . '</a>
                </h3>
                <div class="tks-tab-content tks-tab-content-closed tks-tab-arquivo-' . $count_tabs . '">
                    <ul class="tks-link-list">';

            foreach ($arquivo['peb_documentos_download_arquivos_desse_tipo'] as $item) {

                $output .= '	                                                    	
                        <li><a href="' . $item['peb_documentos_download_arquivo']['url'] . '" target="_blank">' . $item['peb_documentos_download_titulo'] . '</a></li>';
            }
            $output .= '
                    </ul>
                </div>';
            $count_tabs++;

            $output .= '	                                                    
            </div>';
        }
        $output .= '</div>';
    }
    if ($youtube_id) {
        $output .= '
        <iframe class="tks-video-iframe" allowfullscreen="" src="https://www.youtube.com/embed/' . $youtube_id . '?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=0&amp;rel=0&amp;modestbranding=0"></iframe>
        ';
        if ($youtube_texto) {
            $output .= '
            <p class="tks-video-caption">' . $youtube_texto . '</p>';
        }
    }

    $output .= '
            </div>
        </div>';

    return $output;
}

add_shortcode('tks-product-cat-title', 'tks_product_cat_title');

function tks_product_cat_title()
{

    $output = '';

    $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
    $parent = get_term_by('id', $term->parent, get_query_var('taxonomy'));
    if ($parent) :
        $output .= '<h5 class="tk-product-parent-cat-title">' . $parent->name . '</h5>';
    endif;

    $output .= '<h1 class="tk-product-cat-title">' . get_the_archive_title() . '</h1>';

    return $output;
}
add_shortcode('tks-menu-parent-cat', 'tks_menu_parent_cat');

function tks_menu_parent_cat()
{

    $output = '';

    $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
    $parent = get_term_by('id', $term->parent, get_query_var('taxonomy'));
    if ($parent) :
        $pagina_referencia = get_field('pagina-de-referencia', $term);
        $pagina_link = get_permalink($pagina_referencia);
        if ($pagina_referencia) :
            $output .= '
				<div class="elementor-button-wrapper tk-parent-cat-menu">
					<a href="' . get_permalink($pagina_referencia) . '" class="elementor-button-link elementor-button elementor-size-lg" role="button">
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

add_shortcode('tks-product-tax-search-form', 'tks_product_tax_search_form');

function tks_product_tax_search_form()
{

    $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));

    if (!$term)
        return;

    $parent = get_term_by('id', $term->parent, get_query_var('taxonomy'));

    if (!$parent)
        return;

    $childs = get_terms(array(
        'taxonomy'        => 'cat_produto',
        'parent'        => $parent->term_id,
        'hide_empty'    => true

    ));

    if (!$childs)
        return;

    // tks_debug( $childs );

    $output = '';

    $output .= '
		<div class="searchandfilter tk-pesquisa-produto">
			<div>
				<ul>
					<li>
						<select id="tk-product-cat">
							<option value="" selected="selected">' . __('Selecione uma categoria', 'tks') . '</option>';

    foreach ($childs as $child) :

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
							<option id="tk-product-list-placeholder" value="">' . __('Pesquisar...', 'tks') . '</option>
						</select>
					</li>';

    $output .=    '
					<li>
						<a href="#" class="tk-pesquisa-produto-submit-btn">Pesquisar</a>
					</li>
				</ul>
			</div>
		</div>
	';
    return $output;
}

add_shortcode('tks-catalogo', 'tks_catalogo');

function tks_catalogo()
{

    $cats = get_terms(
        'categoria_de_catalogo_virtual',
        array(
            'hide_empty' => true
        )
    );

    // tks_debug( $cats );
    // term_id, name, count

    if (!$cats || empty($cats))
        return;

    $upload_dir = wp_upload_dir();
    // tks_debug( $upload_dir );

    $args = array(
        'post_type'            => 'peb_catalogo_virtual',
        'post_status'        => 'publish',
        'nopaging'            => true,
        'orderby'            => 'menu_order',
        'order'                => 'ASC'
    );

    $query = new WP_Query($args);

    $catalogos = array();
    $total_posts = 0;

    if ($query->have_posts()) :

        $total_posts = $query->post_count;

        while ($query->have_posts()) : $query->the_post();

            $catalogos[] = array(
                'post_ID'            => get_the_ID(),
                'post_title'        => get_the_title(),
                'terms'                => get_the_terms(get_the_ID(), 'categoria_de_catalogo_virtual'),
                'download'            => get_field('field_5968fde1d368a', get_the_ID())
            );

        endwhile;

    endif;

    wp_reset_postdata();

    // tks_debug( $total_posts );

    echo '<div class="tks-catalogos elementor elementor-7226">';

    foreach ($cats as $cat) :

        $total_cat = $cat->count;

        // tks_debug( $total_cat );

        echo '

			<h2 class="tks-catalogos-cat-title">' . $cat->name . '</h2>';

        $count_catalogo = 0;

        foreach ($catalogos as $catalogo) :

            // tks_debug( $catalogo[ 'terms' ] );

            foreach ($catalogo['terms'] as $term) :

                if ($cat->term_id == $term->term_id) :


                    // tks_debug( $catalogo[ 'download' ] );

                    if ($count_catalogo % 4 == 0) :

                        echo '<section class="elementor-element elementor-element-55454ad5 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section" data-id="55454ad5" data-element_type="section">

								<div class="elementor-container elementor-column-gap-default">';

                        echo         '<div class="elementor-row">';

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
										<h3 class="elementor-heading-title elementor-size-xl">' . $catalogo['post_title'] . '</h3>
									</div>
									<!-- ./elementor-widget-container -->

								</div>
								<!-- ./elementor-element -->

								<div class="elementor-element elementor-element-5ff20dcb elementor-align-center elementor-widget elementor-widget-button" data-id="5ff20dcb" data-element_type="widget" data-widget_type="button.default">
									
									<div class="elementor-widget-container">
										
										<div class="elementor-button-wrapper">';

                    if ($catalogo['download']['url']) :

                        echo '
											
											<a href="' . $catalogo['download']['url'] . '" target="_blank" class="elementor-button-link elementor-button elementor-size-xs elementor-animation-grow" role="button">
												
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

                    if ($count_catalogo % 4 == 3 || ($count_catalogo + 1) == $total_cat) :

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
