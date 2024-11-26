jQuery(document).ready(function ($) {

    // console.log( 'main.js 14' );

    $('#tk-product-cat').val('').change();
    $('#tk-product-list').val('').change();

    $('#tk-product-cat').change(function () {
        var $select = $(this);
        var selected_cat_id = $select.val();

        if (!selected_cat_id) {
            return;
        }

        var $product_select = $('#tk-product-list');
        var $product_select_option_ph = $('#tk-product-list-placeholder');
        var product_original_text_ph = $product_select_option_ph.text();
        // console.log( 'selected_cat_id: ' + selected_cat_id );

        $product_select_option_ph.prop('disabled', true);
        $product_select_option_ph.text('Carregando...');

        $product_select.find('option').each(function (i) {
            var $option = $(this);
            if ($option.attr('id') !== 'tk-product-list-placeholder') {
                $option.remove();
            }
        });

        $product_select.val('').change();

        var data = {
            'action': 'tks_filtra_produtos_por_cat',
            'cat_id': selected_cat_id
        };
        // We can also pass the url value separately from ajaxurl for front end AJAX implementations
        jQuery.post(ajax_object.ajax_url, data, 'JSON')
            .done(function (response) {

                // console.log( 'Resultado: ' + response.result );

                if (!response.result) {
                    console.log('Erro: ' + response.error);
                } else {

                    for (var i = 0; i < response.produtos.length; i++) {
                        var post_ID = response.produtos[i].post_ID;
                        var post_title = response.produtos[i].post_title;
                        var post_permalink = response.produtos[i].post_permalink;
                        // console.log('Produto: ' + post_ID );
                        // console.log('Produto: ' + post_title );
                        // console.log('Produto: ' + post_permalink );

                        $product_select.append('<option value="' + post_permalink + '">' + post_title + '</option>');

                        // falta adicionar os produtos à lista de produtos do filtro de pesquisa
                    }
                }
            }).always(function () {
                $product_select_option_ph.prop('disabled', false);
                $product_select_option_ph.text(product_original_text_ph);
            });
    });

    $('.tk-pesquisa-produto-submit-btn').click(function (e) {
        e.preventDefault();
        var $btn = $(this);
        var $product_select = $('#tk-product-list');
        var url = $product_select.val();
        if (url) {
            window.location.href = url;
        }
        // console.log('url: ' + url );

    }); // $( '.tk-pesquisa-produto-submit-btn' ).click

    $('.tks-tab').each(function () {
        var $tab = $(this);
        var $link = $tab.find('.tks-tab-link');
        var $icon = $link.find('.tks-tab-icon');
        $($link).click(function (e) {
            e.preventDefault();
            var content_tab_id = $link.attr('data-tks-tab-id');
            var $content = $('.' + content_tab_id);
            if ($content.hasClass('tks-tab-content-closed')) {
                $content.removeClass('tks-tab-content-closed');
                $content.addClass('tks-tab-content-opened');
                $icon.removeClass('fa-plus');
                $icon.addClass('fa-minus');
            } else if ($content.hasClass('tks-tab-content-opened')) {
                $content.removeClass('tks-tab-content-opened');
                $content.addClass('tks-tab-content-closed');
                $icon.removeClass('fa-minus');
                $icon.addClass('fa-plus');
            }
            $content.slideToggle(300);
        }); // $($link).click
    });
});
