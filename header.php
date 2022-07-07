<?php $request = "http://localhost/sites/institutomrd"; ?>
<?php $index = $_SERVER["PHP_SELF"]; ?>

<?php
    $url = "";
    if(!mb_stripos($index, 'index')){
        $url = $request;
    }

?>
<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <!-- wp head -->
    <?php wp_head(); ?>
    <!-- wp head -->
</head>
<body>
    
    <header class="header continer_full">
        <div class="top_header container_full">

        </div>
        <div class="bottom_header container_full">
            <div class="bottom_header_content container">
                <div class="header_logo">
                    <a href="<?= home_url() ?>">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/Brand.png" alt="">
                    </a>
                </div>
                <div class="btn_menu">
                    <i class="bi bi-list"></i>
                </div>
                <nav class="menu">
                    <div class="header_logo_mobile">
                        <a href="<?= home_url() ?>">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/Brand.png" alt="">
                        </a>
                        <i class="bi bi-x-lg" id="close_menu"></i>
                    </div>

                    <?php wp_nav_menu(['theme_location' => 'menu-principal']); ?>
                    
                </nav>
            </div>
        </div>
    </header>