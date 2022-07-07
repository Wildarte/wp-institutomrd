<?php

function cmb2_quemsomos_page(){

    //====================== quem somos ===========================================================
    $cmb2_quem_somos = new_cmb2_box([
        'title' => 'Imagem Quem Somos',
        'id' => 'img_quem_somos',
        'object_types' => 'page',
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-quemsomos.php'
        ],
        'closed' => true
        
    ]);
    $cmb2_quem_somos->add_field([
        'name'    => 'Imagem "Quem Somos"',
        'desc'    => '',
        'id'      => 'img_quem_somos_page',
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



    //====================== Galeria ===========================================================
     $cmb2_quem_somos = new_cmb2_box([
        'title' => 'Galeria',
        'id' => 'galle_title',
        'object_types' => 'page',
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-quemsomos.php'
        ],
        'closed' => true
        
    ]);
    $cmb2_quem_somos->add_field([
        'name' => 'Imagens da seção "Galeria "',
        'desc' => 'Insira aqui as imagens da seção "Galeria"',
        'id'   => 'galeria_quemsomos_page',
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
    //====================== Galeria ===========================================================


}
add_action('cmb2_admin_init', 'cmb2_quemsomos_page');


?>