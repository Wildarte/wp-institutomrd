<?php $request = "http://localhost/sites/institutomrd"; ?>
<?php $index = $_SERVER["PHP_SELF"]; ?>

<?php
    $url = "";
    if(!mb_stripos($index, 'index')){
        $url = $request;
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/galle.css">
    <link rel="stylesheet" href="assets/css/post.css">
    <title>Instituto MRD</title>
</head>
<body>
    
    <header class="header continer_full">
        <div class="top_header container_full">

        </div>
        <div class="bottom_header container_full">
            <div class="bottom_header_content container">
                <div class="header_logo">
                    <a href="<?= $request ?>">
                        <img src="assets/img/Brand.png" alt="">
                    </a>
                </div>
                <div class="btn_menu">
                    <i class="bi bi-list"></i>
                </div>
                <nav class="menu">
                    <div class="header_logo_mobile">
                        <a href="<?= $request ?>">
                            <img src="assets/img/Brand.png" alt="">
                        </a>
                        <i class="bi bi-x-lg" id="close_menu"></i>
                    </div>
                    <ul class="menu_list">
                        <li class="animate__animated animate__fadeInDown">
                            <a href="<?= $url ?>#quemsomos">Quem Somos</a>
                        </li>
                        <li class="animate__animated animate__fadeInDown">
                            <a href="<?= $url ?>#projetos">Projetos</a>
                        </li>
                        <li class="animate__animated animate__fadeInDown">
                            <a href="<?= $url ?>#acontece">Acontece</a>
                        </li>
                        <li class="animate__animated animate__fadeInDown">
                            <a href="<?= $url ?>#voluntario">Seja voluntário</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>