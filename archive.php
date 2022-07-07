
<?php get_header() ?>

    <main>
        <section class="header_bg container_full">
            <h3 class="subtitle-default color-green">O que há de novo</h3>
            <h2 class="title-default"><?= the_archive_title() ?></h2>
        </section>

        <section class="conteudo container" style="padding: 40px 10px 80px;">
            <header class="header_conteudo">
                <section class="cards_categorias d-flex">

                    <a href="<?= home_url() ?>/blog" class="card_cat bg-gray d-flex">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/vector.png" alt="">
                        <p>Todos</p>
                    </a>

                <?php

                    if(is_category()):

                    $cat = get_the_category()[0];
                    

                    $class_color = "";

                        switch($cat->slug):
                            case "blog":
                                $class_color = "bg-yellow";
                            break;
                            case "noticias":
                                $class_color = "bg-purple";
                            break;
                            case "eventos":
                                $class_color = "bg-blue";
                            break;
                            default:
                                $class_color = "";
                        endswitch;
                    
                ?>

                    <a href="#" class="card_cat <?= $class_color ?> d-flex">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/vector.png" alt="">
                        <p><?= $cat->name; ?></p>
                    </a>
                    
                <?php endif; ?>

                </section>
                
            </header>

            <section class="posts container d-flex">

                <?php

                    if(have_posts()):
                        while(have_posts()):
                            the_post();

                ?>


                <article class="card_post">
                    <a href="<?= get_the_permalink() ?>">
                        <img src="<?= get_the_post_thumbnail_url(null, 'medium') ?>" alt="">

                        <div class="post_info">

                            <h3><?= get_the_title() ?></h3>
                            <p><?= get_the_excerpt() ?>…</p>
                            
                            <p style="color: #333; margin-top: 10px;">Saiba mais</p>

                        </div>
                
                        <p class="post_bottom"> <time><?= get_the_date("j F") ?></time> <!--  <span>03</span> comentários --> </p>

                        <?php

                            switch(get_the_category()[0]->slug):
                                case "blog":
                                    $class_color = "bg-yellow";
                                break;
                                case "noticias":
                                    $class_color = "bg-purple";
                                break;
                                case "eventos":
                                    $class_color = "bg-blue";
                                break;
                                default:
                                    $class_color = "";
                            endswitch;

                        ?>

                        <span class="post_cat <?= $class_color ?>"><?= get_the_category()[0]->name; ?></span>
                    </a>
                </article>

                <?php endwhile; endif; ?>
                
            </section>

            <div class="btn_more_post">
                
                <?= previous_posts_link( '<span class="btn-gray" href="">Voltar</span>' ) ?>
                <?= next_posts_link( '<span class="btn-gray" href="">Ver mais</span>' ) ?>

            </div>
            

        </section>
    </main>
<?php get_footer() ?>