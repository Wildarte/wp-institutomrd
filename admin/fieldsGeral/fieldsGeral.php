<?php

add_submenu_page(
    'theme-options',
    'Geral',
    'Geral',
    'manage_options',
    'options_geral',
    'callback_geral'
);

function callback_geral(){
    ?>

        <div>

            <?php settings_errors(); ?>
            <h1>Configurações de e-mail</h1>
            <form action="options.php" method="post">
                <?php

                    settings_fields("geral_section");

                    do_settings_sections("options_geral");

                    submit_button();

                ?>
            </form>

        </div>

    <?php
}

function fields_email_contato(){

    add_settings_section('contato_section','','display_emailcontato_options_content','options_geral');

    add_settings_field('show_email_contato', 'E-mail para contato', 'display_email_contato', 'options_geral', 'contato_section');


    register_setting('geral_section','show_email_contato');

}
add_action('admin_init','fields_email_contato');

function display_emailcontato_options_content(){
    ?>
        <hr>
        <h2>E-mail para contato</h2>
    <?php
}

function display_email_contato(){
    ?>
        <input type="email" name="show_email_contato" id="show_email_contato" value="<?= get_option('show_email_contato') ?>">
    <?php
}


function fields_telefone_contato(){

    add_settings_section('contato_section','','display_telefonecontato_options_content','options_geral');

    add_settings_field('show_telefone_contato', 'E-mail para contato', 'display_telefone_contato', 'options_geral', 'contato_section');


    register_setting('geral_section','show_telefone_contato');

}
add_action('admin_init','fields_telefone_contato');

function display_telefonecontato_options_content(){
    ?>
        <hr>
        <h2>E-mail para contato</h2>
    <?php
}

function display_telefone_contato(){
    ?>
        <input type="text" name="show_telefone_contato" id="show_telefone_contato" value="<?= get_option('show_telefone_contato') ?>">
    <?php
}



function fields_social(){
    
    add_settings_section('social_section', '', 'display_social_options', 'options_geral');

    add_settings_field('show_facebook', 'facebook', 'display_facebook', 'options_geral', 'social_section');
    add_settings_field('show_instagram', 'instagram', 'display_instagram', 'options_geral', 'social_section');

    register_setting('geral_section', 'show_facebook');
    register_setting('geral_section', 'show_instagram');

}
add_action('admin_init','fields_social');

function display_social_options(){
    ?>
        <hr>
        <h2>Redes Sociais</h2>
    <?php
}

function display_facebook(){
    ?>
        <input type="url" name="show_facebook" id="show_facebook" value="<?= get_option('show_facebook') ?>">
    <?php
}
function display_instagram(){
    ?>
        <input type="url" name="show_instagram" id="show_instagram" value="<?= get_option('show_instagram') ?>">
    <?php
}


?>