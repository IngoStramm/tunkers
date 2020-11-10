<?php

function tks_debug( $debug ) {
	echo '<pre>';
	var_dump( $debug );
	echo '</pre>';
}

// Add a filter to 'template_include' hook
add_filter( 'template_include', 'tks_force_template' );

function tks_force_template( $template ) {
    // If the current url is an archive of any kind
    if( is_archive() && is_post_type_archive( 'peb_catalogo_virtual' ) ) {
        // Set this to the template file inside your plugin folder
        $template = TKS_DIR .'/templates/archive-catalogo-virtual.php';
    }
    // Always return, even if we didn't change anything
    return $template;
}

add_filter( 'get_the_archive_title', 'tks_archive_title' );

function tks_archive_title( $title ) {
    if ( is_category() ) :
        $title = single_cat_title( '', false );
    elseif ( is_tag() ) :
        $title = single_tag_title( '', false );
    elseif ( is_author() ) :
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    elseif ( is_post_type_archive() ) :
        $title = post_type_archive_title( '', false );
    elseif ( is_tax() ) :
        $title = single_term_title( '', false );
    endif;
  
    return $title;
}

add_action( 'wp_ajax_tks_filtra_produtos_por_cat', 'tks_filtra_produtos_por_cat' );
add_action( 'wp_ajax_nopriv_tks_filtra_produtos_por_cat', 'tks_filtra_produtos_por_cat' );

function tks_filtra_produtos_por_cat() {
	$return = array();
	$return[ 'result' ] = true;

	if( !isset( $_POST[ 'cat_id' ] ) || empty( $_POST[ 'cat_id' ] ) ) :
		$return[ 'result' ] = false;
		$return[ 'error' ] = __( 'ID da Categoria não recebido', 'tks' );
	endif;

	$term_id = $_POST[ 'cat_id' ];

	$args = array(
		'post_type'			=> 'peb_produto',
		'post_status'		=> 'publish',
		'nopaging'			=> true,
		'tax_query' 	=> array(
			array(
				'taxonomy'		=> 'cat_produto',
				'field' 		=> 'term_id',
				'terms'			=> $term_id
			)
		)
	);

	$query = new WP_Query( $args );

	$produtos = array();

	if ( $query->have_posts() ) :

		while ( $query->have_posts() ) : $query->the_post();

			$produtos[] = array(
				'post_ID'			=> get_the_ID(),
				'post_title'		=> get_the_title(  ),
				'post_permalink'	=> get_the_permalink(),
			);

	    endwhile;

	    $return[ 'produtos' ] = $produtos;
	else :
		$return[ 'result' ] = false;
		$return[ 'error' ] = __( 'Nenhum produto encontrado', 'tks' );
	endif;

	wp_reset_postdata();

	echo wp_send_json( $return );

	wp_die();
}

add_filter( 'pre_get_posts', 'tks_change_products_per_page' );

function tks_change_products_per_page( $query ) {
    if ( is_admin() || ! $query->is_main_query() ) {
       return;
    }

    if ( is_tax( 'cat_produto' ) || is_post_type_archive( 'peb_produto' ) ) :
       $query->set( 'posts_per_page', -1 );
       $query->set( 'orderby', 'menu_order' );
       $query->set( 'order', 'ASC' );
    endif;


    //    $query->set( 'orderby', 'menu_order' );
    //    $query->set( 'order', 'ASC' );
}

add_action( 'admin_menu', 'tks_remove_menus_editor' );

function tks_remove_menus_editor(){
    global $menu, $submenu;
    remove_menu_page( 'edit-comments.php' );
}

// add_action( 'admin_init', 'tks_post_menu_order' );

function tks_post_menu_order() {
    add_post_type_support( 'post', 'page-attributes' );
}

// Fix para os post ordem do Guttnberg conseguir salvar
// @link: https://gist.github.com/jesgs/e619bfbfe10ad998d8a61ac41cc958a7

/**
 * Add the menu_order property to the post object being saved
 *
 * @param \WP_Post|\stdClass $post
 * @param WP_REST_Request $request
 *
 * @return \WP_Post
 */
function tks_pre_insert_post( $post, \WP_REST_Request $request )
{
    $body = $request->get_body();
    if ( $body ) {
        $body = json_decode( $body );
        if ( isset($body->menu_order ) ) {
            $post->menu_order = $body->menu_order;
        }
    }

    return $post;
}
// add_filter( 'rest_pre_insert_post', 'tks_pre_insert_post', 12, 2 );


/**
 * Load the menu_order property for frontend display in the admin
 *
 * @param \WP_REST_Response $response
 * @param \WP_Post $post
 * @param \WP_REST_Request $request
 *
 * @return \WP_REST_Response
 */
function tks_prepare_post( \WP_REST_Response $response, $post, $request )
{
    $response->data[ 'menu_order' ] = $post->menu_order;

    return $response;
}
// add_filter( 'rest_prepare_post', 'tks_prepare_post', 12, 3 );