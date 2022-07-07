<?php

function cmb2_home_page(){


    //============================== banner =======================================================
    $cmb2_banners = new_cmb2_box([
        'title' => 'Banners',
        'id' => 'banner_home',
        'object_types' => 'page',
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php'
        ],
        'closed' => false
    ]);

    $banner_group = $cmb2_banners->add_field([
        'id'          => 'list_banners',
        'type'        => 'group',
        'description' => __( 'Generates reusable form entries', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Banner {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Adicionar Banner', 'cmb2' ),
            'remove_button'     => __( 'Remover Banner', 'cmb2' ),
            'sortable'          => true,
            'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ]);

    $cmb2_banners->add_group_field($banner_group, [
        'name'    => 'Imagem do banner',
        'desc'    => 'Inserir imagem do banner',
        'id'      => 'banner_img',
        'type'    => 'file',
        // Optional:
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'Add imagem' // Change upload button text. Default: "Add or Upload File"
        ),
        // query_args are passed to wp.media's library query.
        'query_args' => array(
            //'type' => 'application/pdf', // Make library only display PDFs.
            // Or only allow gif, jpg, or png images
             'type' => array(
                 'image/gif',
                 'image/jpeg',
                 'image/png',
             ),
        ),
        'preview_size' => 'medium', // Image size to use when previewing in the admin.
    ]);

    $cmb2_banners->add_group_field($banner_group, [
        'name' => 'Link do banner',
        'desc' => 'Adicione o link do banner',
        'id' => 'link_banner',
        'type' => 'text_url',
    ]);
    //============================== banner =======================================================









    //====================== quem somos ===========================================================
    $cmb2_quem_somos = new_cmb2_box([
        'title' => 'Quem Somos',
        'id' => 'quem_somos_home',
        'object_types' => 'page',
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php'
        ],
        'closed' => true
        
    ]);
    $cmb2_quem_somos->add_field( array(
        'name' => 'Link da seção quem somos',
        'desc' => '',
        'id' => 'link_quem_somos',
        'type' => 'text_url',
    ) );
    $cmb2_quem_somos->add_field([
        'name'    => 'Imagem da seção "Quem Somos"',
        'desc'    => 'Essa imagem é exibida na seção Quem Somos',
        'id'      => 'img_quem_somos',
        'type'    => 'file',
        // Optional:
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'Add Imagem' // Change upload button text. Default: "Add or Upload File"
        ),
        // query_args are passed to wp.media's library query.
        'query_args' => array(
            //'type' => 'application/pdf', // Make library only display PDFs.
            // Or only allow gif, jpg, or png images
            'type' => array(
                'image/gif',
                'image/jpeg',
                'image/png',
            ),
        ),
        'preview_size' => 'large', // Image size to use when previewing in the admin.
    ]);
    //====================== quem somos ===========================================================








     //====================== Nosso Cantinho ===========================================================
     $cmb2_quem_somos = new_cmb2_box([
        'title' => 'Nosso Cantinho',
        'id' => 'nosso_cantinho_home',
        'object_types' => 'page',
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php'
        ],
        'closed' => true
        
    ]);
    $cmb2_quem_somos->add_field([
        'name'    => 'Vídeo da seção "Nosso Cantinho"',
        'desc'    => 'Aqui você deve adicionar o link do vídeo que está no seu próprio servidor',
        'id'      => 'video_nosso_caminho',
        'type'    => 'text_url'
    ]);
    $cmb2_quem_somos->add_field([
        'name' => 'Imagens da seção "Nosso Cantinho "',
        'desc' => 'Insira aqui as imagens da seção "Nosso Cantinho"',
        'id'   => 'list_images_gallery',
        'type' => 'file_list',
            'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
            'query_args' => array( 'type' => 'image' ), // Only images attachment
        // Optional, override default text strings
        'text' => array(
            'add_upload_files_text' => 'Adicionar fotos', // default: "Add or Upload Files"
            'remove_image_text' => 'Replacement', // default: "Remove Image"
            'file_text' => 'Replacement', // default: "File:"
            'file_download_text' => 'Replacement', // default: "Download"
            'remove_text' => 'Replacement', // default: "Remove"
        ),
    ]);
    //====================== Nosso Cantinho ===========================================================

}
add_action('cmb2_admin_init', 'cmb2_home_page');

?>