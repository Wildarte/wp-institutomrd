<?php
get_header();
if(have_posts()): while(have_posts()): the_post();
?>

    <main>
        <section class="header_bg container_full">
            <h3 class="subtitle-default color-green">O que há de novo</h3>
            <h2 class="title-default"><?= get_the_category()[0]->name ?></h2>
        </section>

        <section class="content_post container">

            <header class="header_content_post">

                <h2 class="title-default  container-post"><?= get_the_title() ?></h2>

                <div class="bottom_header_post container-post">
                    <time>
                        <i class="bi bi-calendar"></i> <span class="data_post"><?= get_the_date("j \d\\e F \d\\e Y") ?></span>
                    </time>

                    <div class="share_post container-post">
                        Compartilhe este post:

                        <ul class="links_share">
                            <li>
                                <a href="https://www.facebook.com/sharer.php?u=<?= get_the_permalink() ?>"><i class="bi bi-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/intent/tweet?text=<?= get_the_excerpt() ?>&url=<?= get_the_permalink() ?>"><i class="bi bi-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://linkedin.com/shareArticle?mini=true&url=<?= get_the_permalink() ?>&title=<?= get_the_excerpt() ?>"><i class="bi bi-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="" onclick="copyLink(e)" data-link="<?= get_the_permalink() ?>"><i class="bi bi-three-dots"></i></a>
                            </li>
                          
                        </ul>
                    </div>
                </div>

                <div class="excerpt_post_content">
                    <p class="title-default excerpt_text"><?= get_the_excerpt() ?></p>
                </div>

            </header>

            <img class="img_post" src="<?= get_the_post_thumbnail_url(null, 'large') ?>" alt="">

            <div class="container-post body_post">

                <?= get_the_content(); ?>

                
                <p>Curta a nossa página no Facebook e siga o nosso perfil no Instagram! 😉</p>

                
            </div>

            <style>
                .gall-column {
                    float: left;
                    flex-basis: calc(25% - 10px);
                    height: 100%;
                    margin: 5px;
                }
            </style>
        <!-- 
            <div class="board_gallery container-post">
                <div class="gall-container">
                   
                    <img id="expandedImg" src="assets/img/gallery1.jpg" style="width:100%">
                    <div id="imgtext"></div>
                </div>
                  
                
                <div class="gall-row">
                    <div class="gall-column">
                      <img src="assets/img/gallery1.jpg" alt="photo 1" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="gall-column">
                      <img src="https://cdn.pixabay.com/photo/2015/06/22/08/38/children-817368_960_720.jpg" alt="photo2" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="gall-column">
                      <img src="https://cdn.pixabay.com/photo/2016/11/29/11/45/children-1869265_960_720.jpg" alt="photo 3" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="gall-column">
                      <img src="https://cdn.pixabay.com/photo/2014/09/26/09/33/girls-462072_960_720.jpg" alt="photo 4" style="width:100%" onclick="myFunction(this);">
                    </div>
                </div>
            </div>
            -->
            <div class="bottom_header_post container-post" style="justify-content: space-between;">
                <p style="display: flex; justify-content: flex-start">
                    <span>
                        Tags:
                    </span>

                    <ul class="list_tags">
                        <li>
                            <a href="<?= home_url() ?>/blog">Todos</a> 
                        </li>

                        <?php
                            $terms = get_terms([
                                'taxonomy' => 'category',
                                'hide_empty' => false,
                                'orderby' => 'term_id'
                            ]);

                            foreach($terms as $term):
                        ?>

                        <li>
                            <a href="<?= get_category_link($term->term_id); ?>"><?= $term->name ?></a> 
                        </li>

                        <?php endforeach; ?>
                    </ul>
                </p>

                <div class="share_post container-post">
                    Compartilhe este post:

                    <ul class="links_share">
                        <li>
                            <a href="https://www.facebook.com/sharer.php?u=<?= get_the_permalink() ?>"><i class="bi bi-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/intent/tweet?text=<?= get_the_excerpt() ?>&url=<?= get_the_permalink() ?>"><i class="bi bi-twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://linkedin.com/shareArticle?mini=true&url=<?= get_the_permalink() ?>&title=<?= get_the_excerpt() ?>"><i class="bi bi-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="" onclick="copyLink(e)" data-link="<?= get_the_permalink() ?>"><i class="bi bi-three-dots"></i></a>
                        </li>
                        
                    </ul>
                </div>
            </div>
            
            <!-- 
            <div class="info_autor container-post">
                
                <div class="img_thumb">

                </div>

                <div class="auto_text">
                    <h3>Marcos roberto dias</h3>
                    <p>Ut porttitor tempus augue, quis luctus erat dapibus ac. Curabitur eu placerat purus. Vestibulum tempor velit diam, ac ultrices turpis posuere vitae. </p>
                    <ul class="social_autor d-flex">
                        <li>
                            <a href=""><i class="bi bi-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="bi bi-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
             -->

            <section class="related_posts container-post d-flex">
                
                <article class="card_related">
                <?php previous_post_link( '%link &raquo;', '%title', true ); ?>
                    <a href="">
                        <img src="<?= get_previous_image_link() ?>" alt="">
                        <div class="related_post_info">
                            <span>Post Anterior</span>
                            <h3>Quando o sentimento de querer o bem do próximo se transforma em ação</h3>
                        </div>
                    </a>
                </article>
    
                <article class="card_related">
                    <a href="">
                        <img src="assets/img/post2.jpeg" alt="">
                        <div class="related_post_info">
                            <span>Próximo Post</span>
                            <h3>Aulas de reforço para uma educação mais completa</h3>
                        </div>
                    </a>
                </article>
            </section>

            
            <!-- 
            <div class="m-comments container-post">

                <h3 class="title-default">Comentários <span>(6)</span></h3>

                <ul class="list_comments">
                    <li>
                        <img src="assets/img/testi.png" alt="">
                        <div class="comments_info">
                            <h3>Esther Howard</h3>
                            <p>Ut porttitor tempus augue, quis luctus erat dapibus ac. Curabitur eu placerat purus. Vestibulum tempor velit diam, ac ultrices turpis posuere vitae. </p>
                            <div class="comment_time">
                                <time>Aug 18, 2020 at 4:07 am</time> <span>replay</span>
                            </div>
                        </div>
                    </li>

                    <li>
                        <img src="assets/img/testi2.png" alt="">
                        <div class="comments_info">
                            <h3>Esther Howard</h3>
                            <p>Ut porttitor tempus augue, quis luctus erat dapibus ac. Curabitur eu placerat purus. Vestibulum tempor velit diam, ac ultrices turpis posuere vitae. </p>
                            <div class="comment_time">
                                <time>Aug 18, 2020 at 4:07 am</time> <span>replay</span>
                            </div>
                        </div>
                    </li>
                    <ul>
                        <li>
                            <img src="assets/img/testi.png" alt="">
                            <div class="comments_info">
                                <h3>Esther Howard</h3>
                                <p>Ut porttitor tempus augue, quis luctus erat dapibus ac. Curabitur eu placerat purus. Vestibulum tempor velit diam, ac ultrices turpis posuere vitae. </p>
                                <div class="comment_time">
                                    <time>Aug 18, 2020 at 4:07 am</time> <span>replay</span>
                                </div>
                            </div>
                        </li>
    
                        <li>
                            <img src="assets/img/testi2.png" alt="">
                            <div class="comments_info">
                                <h3>Esther Howard</h3>
                                <p>Ut porttitor tempus augue, quis luctus erat dapibus ac. Curabitur eu placerat purus. Vestibulum tempor velit diam, ac ultrices turpis posuere vitae. </p>
                                <div class="comment_time">
                                    <time>Aug 18, 2020 at 4:07 am</time> <span>replay</span>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <li>
                        <img src="assets/img/testi.png" alt="">
                        <div class="comments_info">
                            <h3>Esther Howard</h3>
                            <p>Ut porttitor tempus augue, quis luctus erat dapibus ac. Curabitur eu placerat purus. Vestibulum tempor velit diam, ac ultrices turpis posuere vitae. </p>
                            <div class="comment_time">
                                <time>Aug 18, 2020 at 4:07 am</time> <span>replay</span>
                            </div>
                        </div>
                    </li>

                    <li>
                        <img src="assets/img/testi2.png" alt="">
                        <div class="comments_info">
                            <h3>Esther Howard</h3>
                            <p>Ut porttitor tempus augue, quis luctus erat dapibus ac. Curabitur eu placerat purus. Vestibulum tempor velit diam, ac ultrices turpis posuere vitae. </p>
                            <div class="comment_time">
                                <time>Aug 18, 2020 at 4:07 am</time> <span>replay</span>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
             -->


            <!-- 
            <div class="form_comment container-post">

                <h2 class="title-default">Deixe seu comentário</h2>

                <p class="desc-default">Seu endereço de email não será publicado. Campos obrigatórios estão marcados com *</p>

                <form action="" class="d-flex" style="justify-content: space-between;">
                    <div class="form_group f-50" style="margin: 10px 0;">
                        <label for="name">Nome:</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_group f-50" style="margin: 10px 0;">
                        <label for="telefone">Telefone:</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="form_group f-100" style="margin: 10px 0;">
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="f-100">
                        <label for="savename">
                            <input type="checkbox" name="" id="savename   ">
                            Salve meu nome e email nesse navegador para a próxima vez que eu comentar.
                        </label>
                    </div>
                    <button class="btn-gray" type="submit" style="margin: 10px 0;">Enviar</button>
                </form>

            </div>
             -->
            

        </section>

    </main>

    <?php endwhile; endif; ?>

    <?php get_footer() ?>
