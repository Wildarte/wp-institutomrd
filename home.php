<?php get_header() ?>


    <main>

        <section class="header_bg container_full">
            <h3 class="subtitle-default color-green">O que há de novo</h3>
            <h2 class="title-default">Blog / Notícias / Eventos</h2>
        </section>

        <section class="conteudo container">
            <header class="header_conteudo">
                <h3 class="desc-default">Categorias</h3>

                <section class="cards_categorias d-flex">
                    <a href="" class="card_cat bg-gray d-flex">
                        <img src="assets/img/vector.png" alt="">
                        <p>Todos</p>
                    </a>
                    <a href="" class="card_cat bg-yellow d-flex">
                        <img src="assets/img/vector.png" alt="">
                        <p>Blog</p>
                    </a>
                    <a href="" class="card_cat bg-purple d-flex">
                        <img src="assets/img/vector.png" alt="">
                        <p>Notícias</p>
                    </a>
                    <a href="" class="card_cat bg-blue d-flex">
                        <img src="assets/img/vector.png" alt="">
                        <p>Eventos</p>
                    </a>
                </section>
                
            </header>

            <section class="posts container d-flex">
                <article class="card_post">
                    <a href="<?= $request ?>/page-interna.php">
                        <img src="assets/img/post1.jpeg" alt="">

                        <div class="post_info">

                            <h3>Contando histórias e transformando vidas</h3>
                            <p>Instituto MRD abre suas portas para receber crianças, adolescentes e jovens, oferecendo oportunidades de crescimento pessoal e profissional…</p>
                            
                            <p style="color: #333; margin-top: 10px;">Saiba mais</p>

                        </div>
                
                        <p class="post_bottom"> <time>17 junho</time> <!--  <span>03</span> comentários --> </p>

                        <span class="post_cat bg-purple">Notícias</span>
                    </a>
                </article>

                <article class="card_post">
                    <a href="<?= $request ?>/page-interna2.php">
                        <img src="assets/img/post2.jpeg" alt="">

                        <div class="post_info">

                            <h3>Aulas de reforço para uma educação mais completa</h3>
                            <p>No Instituto MRD, as aulas de reforço para crianças acontecem a partir da alfabetização e vão até o terceiro ano do Ensino Médio...</p>
                            
                            <p style="color: #333; margin-top: 10px;">Saiba mais</p>

                        </div>
                
                        <p class="post_bottom"> <time>20 junho</time><!--  <span>03</span> comentários --> </p>

                        <span class="post_cat bg-yellow">Blog</span>
                    </a>
                </article>

                <article class="card_post">
                    <a href="<?= $request ?>/page-interna3.php">
                        <img src="assets/img/post3.jpeg" alt="">

                        <div class="post_info">

                            <h3>Quando o sentimento de querer o bem do próximo se transforma em ação</h3>
                            <p>Antes de mais nada, você sabe mesmo o que significa ser voluntário?...</p>
                            
                            <p style="color: #333; margin-top: 10px;">Saiba mais</p>

                        </div>
                
                        <p class="post_bottom"> <time>22 junho</time><!--  <span>03</span> comentários --> </p>

                        <span class="post_cat bg-yellow">Blog</span>
                    </a>
                </article>
                
            </section>

            <div class="btn_more_post">
                <a class=" btn-gray" href="<?= $request ?>/page-blog.php">Ver mais</a>
            </div>
            

        </section>

    </main>

<?php get_footer() ?>
