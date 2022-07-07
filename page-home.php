
<?php
// Template Name: Home
get_header();

?>
    <main>

        <section class="hero">
            <div class="hero_content container_full">

               
                <div class="owl-carousel m-carousel">
                    <?php
                        $banners = get_post_meta( get_the_ID(), 'list_banners', true );


                        foreach($banners as $banner):
                    ?>
        
                    <div class="item_banner">
                        <img src="<?= $banner['banner_img'] ?>" alt="">
                        <a href="<?= $banner['link_banner'] ?>"></a>
                    </div>
                    
                    <?php endforeach; ?>
                
            </div>
        </section>

        <section class="hist container_full" id="quemsomos">
            <div class="hist_content container d-flex">
                <div class="hist_left f-50 animate__animated animate__lightSpeedInLeft">
                    <h3 class="subtitle-default">quem somos</h3>
                    <h2 class="title_hist title-default">Nossa História</h2>
                    <p class="desc-default">O Instituto MRD nasceu do sonho de proporcionar a crianças e adolescentes oportunidades para que possam crescer e ter um futuro melhor.</p>

                    <section class="cards_hist">
                        <article class="card_simple">
                            <div>
                                <img src="<?= get_template_directory_uri() ?>/assets/img/arrow-red.png" alt="">
                            </div>
                            <div class="card_simple_info">
                                <h3>Missão</h3>
                                <p>Melhorar a vida das pessoas que passarem pelo nosso caminho por meio do amor e do acolhimento.</p>
                            </div>
                        </article>
                        <article class="card_simple">
                            <div>
                                <img src="<?= get_template_directory_uri() ?>/assets/img/arrow-green.png" alt="">
                            </div>
                            <div class="card_simple_info">
                                <h3>Visão</h3>
                                <p>Fazer a diferença na vida de pessoas que carecem do nosso amor e cuidado.</p>
                            </div>
                        </article>
                        <article class="card_simple">
                            <div>
                                <img src="<?= get_template_directory_uri() ?>/assets/img/arrow-purple.png" alt="">
                            </div>
                            <div class="card_simple_info">
                                <h3>Valores</h3>
                                <p>Ética, responsabilidade social; dinamismo; transparência; e relacionamento com respeito e amor ao próximo.</p>
                            </div>
                        </article>
                    </section>
                    <div class="bottom_hist">
                        <a class="link_hist" href="<?= $request ?>/quem-somos.php">Saiba mais ></a>
                    </div>
                </div>

                <div class="hist_right f-50">
                    <img class="hist_main_img" src="<?= get_post_meta( get_the_ID(), 'img_quem_somos', true ) ?>" alt="">
                    <img class="hist_float_img" src="<?= get_template_directory_uri() ?>/assets/img/dot.png" alt="">
                </div>
            </div>
        </section>

        <section class="wedo container_full d-flex">
            
            <div class="wedo_left f-50">
                <img src="<?= get_template_directory_uri() ?>/assets/img/we_do.jpg" alt="">
            </div>

            <div class="wedo_right f-50 animate__animated animate__lightSpeedInRight">
                <h3 class="subtitle-default">O que fazemos</h3>
                <h2 class="title_wedo title-default">Mudando Realidades
                    Diariamente</h2>
                <p class="desc-default">Implementamos ações voltadas para o crescimento socioeducativo de crianças, adolescentes e jovens assistidos. Damos suporte para que possam crescer amparados, com oportunidade de terem uma profissão e uma vida melhor.</p>
                
                <section class="cards_wedo d-flex">
                    <article class="card_wedo f-50 b-bot-red"> 
                        <img src="<?= get_template_directory_uri() ?>/assets/img/arrow-red.png" alt="">
                        <p>Respeito e acolhimento</p>
                    </article>
                    <article class="card_wedo f-50 b-bot-yellow">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/arrow-yellow.png" alt="">
                        <p>Comprometimento</p>
                    </article>
                    <article class="card_wedo f-50 b-bot-green">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/arrow-green.png" alt="">
                        <p>Responsabilidade social</p>
                    </article>
                    <article class="card_wedo f-50 b-bot-purple">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/arrow-purple.png" alt="">
                        <p>Transparência</p>
                    </article>
                </section>

            </div>

        </section>

        <section class="impacto container_full">
            <div class="impacto_content container">
                <h3 class="subtitle-default">marcas a serem superadas</h3>
                <h2 class="title-default">Impacto social</h2>

                <ul class="numbers_impacto">
                    <li>
                        <h3 class="isOnScreen" id="count1">53</h3>
                        <p>crianças impactadas</p>
                    </li>
                    <li>
                        <h3 class="isOnScreen" id="count2">10</h3>
                        <p>Projetos desenvolvidos</p>
                    </li>
                    <li>
                        <h3 class="isOnScreen" id="count3">16</h3>
                        <p>Comunidades impactadas</p>
                    </li>
                    <li>
                        <h3 class="isOnScreen" id="count4">20</h3>
                        <p>Voluntários
                            envolvidos</p>
                    </li>
                </ul>
            </div>
        </section>

        <section class="conteudo container_full" id="acontece">
            <header class="header_conteudo">
                <h3 class="subtitle-default">ACONTECE</h3>
                <h2 class="title-default">Blog / Notícias / Eventos</h2>
            </header>

            <section class="posts container d-flex">
                <article class="card_post">
                    <a href="<?= $request ?>/page-interna.php">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/post1.jpeg" alt="">

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
                        <img src="<?= get_template_directory_uri() ?>/assets/img/post2.jpeg" alt="">

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
                        <img src="<?= get_template_directory_uri() ?>/assets/img/post3.jpeg" alt="">

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

        <section class="pilares container_full">
            <div class="pilares_content container">
                <h3 class="subtitle-default">nossos pilares</h3>
                <h2 class="title_pilares title-default">Buscando transformar vidas</h2>
                <p class="desc_pilares desc-default">Conheça melhor as áreas de atuação do Instituto MRD e entenda como transformamos a vida de crianças, adolescentes e jovens.</p>

                <section class="cards_pliares d-flex">
                    <article class="card_pilares b-bot-red">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/arrow-red.png" alt="">
                        <div class="card_pilares_info">
                            <h3>Acolhimento</h3>
                            <p>Abraçar, ouvir as histórias e mostrar o quanto estes jovens são importantes. O apoio estimula capacidades socioemocionais, como a empatia.</p>
                        </div>
                       
                    </article>
                    <article class="card_pilares b-bot-green">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/arrow-green.png" alt="">
                        <div class="card_pilares_info">
                            <h3>Saúde</h3>
                            <p>Atuar em parceria com profissionais especializados para oferecer suporte psicológico a crianças e adolescentes.</p>
                        </div>
                    </article>
                    <article class="card_pilares b-bot-blue">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/arrow-blue.png" alt="">
                        <div class="card_pilares_info">
                            <h3>Capacitação Profissional</h3>
                            <p>Atuar para ajudar a construir uma porta de entrada para o mercado de trabalho, desenvolvendo habilidades que renderão bons frutos.</p>
                        </div>
                    </article>
                    <article class="card_pilares b-bot-orange">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/arrow-orange.png" alt="">
                        <div class="card_pilares_info">
                            <h3>Esporte</h3>
                            <p>Favorer a inclusão social por meio do esporte. As atividades ajudam a melhorar comportamentos, estimulam o raciocínio e muito mais.</p>
                        </div>
                    </article>
                    <article class="card_pilares b-bot-yellow">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/arrow-yellow.png" alt="">
                        <div class="card_pilares_info">
                            <h3>Educação</h3>
                            <p>Atuar para fortalecer a base educacional, além de aperfeiçoar e potencializar habilidades e competências.</p>
                        </div>
                    </article>
                    <article class="card_pilares b-bot-purple">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/arrow-purple.png" alt="">
                        <div class="card_pilares_info">
                            <h3>Arte</h3>
                            <p>Fortalecer habilidades, trabalhando a percepção, os sentidos, a criatividade e o raciocínio lógico. Abrimos novas maneiras de enxergar o mundo.</p>
                        </div>
                    </article>
                </section>
            </div>
        </section>


        <section class="projetos container_full" id="projetos">
            <div class="projetos_content container_full">
                <header class="header_projetos container">
                    <h3 class="subtitle-default">Projetos</h3>
                    <h2 class="title-default">Nossos Projetos</h2>
                    <p class="desc-default">Em cada comunidade, em cada rua, em cada casa, buscamos sempre impactar a vida das pessoas e deixar uma marca realmente transformadora, começando por um sorriso.</p> 
                </header>
                
                <section class="cards_projetos container_full">
                    <article class="card_projetos bg-blue">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/card.png" alt="">
                        <div class="card_projetos_info bg-blue">
                            <h4>Lar de Idosos de Matozinhos</h4>
                            <p>Doações de materiais de limpeza e outros itens.</p>
                        </div>
                    </article>
                    <article class="card_projetos bg-red">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/card3.png" alt="">
                        <div class="card_projetos_info bg-red">
                            <h4>São José da Lapa</h4>
                            <p>Apoio financeiro para ajudar na socialização das crianças e em despesas de casa; cursos de capacitaçãoo; atendimento psicológico e outros.</p>
                        </div>
                    </article>
                    <article class="card_projetos bg-yellow">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/card2.png" alt="">
                        <div class="card_projetos_info bg-yellow">
                            <h4>Manoel Brandão</h4>
                            <p>Assistência a crianças da região. Aulas, merendas, cestas básicas, apoio financeiro para combustível e outros gastos.</p>
                        </div>
                    </article>
                    <article class="card_projetos bg-green">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/card4.jpg" alt="">
                        <div class="card_projetos_info bg-green">
                            <h4>Diversos</h4>
                            <p>Festas de Natal e Dia das Crianças; donativos para famílias vulneráveis; ajuda em reforma de casa; entre outros.</p>
                        </div>
                    </article>
                </section>
            </div>
        </section>

        <section class="ofer container_full">

            <div class="ofer_content container d-flex">
                <div class="ofer_left f-50">
                    <header class="header_ofer">
                        <h3 class="subtitle-default">atividades</h3>
                        <h2 class="title-default">O que oferecemos</h2>
                        <p class="desc-default">O Instituto MRD conta com uma sede preparada para receber crianças e adolescentes que vivem em estado de vulnerabilidade social. Confira nossos cursos e atendimentos!</p>
                    </header>
                    
                    
                    <section class="icons_oferes d-flex">
                        <article class="card_ofer">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/icon1.png" alt="">
                            <P>Aula de Reforço</P>
                        </article>
                        <article class="card_ofer">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/icon2.png" alt="">
                            <P>Aula de Inglês</P>
                        </article>
                        <article class="card_ofer">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/icon3.png" alt="">
                            <P>Aula de Música</P>
                        </article>
                        <article class="card_ofer">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/icon4.png" alt="">
                            <P>Aula de Jiu-Jitsu</P>
                        </article>
                    </section>
                </div>

                <div class="ofer_right f-50 d-flex">
                    <article class="icons_ofer">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/card_ofer1.jpg" alt="">
                        <h3 class="desc-default">INFORMÁTICA</h3>
                    </article>
                    <article class="icons_ofer">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/card_ofer2.jpg" alt="">
                        <h3 class="desc-default">ATENDIMENTO ODONTOLÓGICO</h3>
                    </article>
                    <article class="icons_ofer">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/card_ofer3.jpg" alt="">
                        <h3 class="desc-default">ATENDIMENTO JURÍDICO</h3>
                    </article>
                    <article class="icons_ofer">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/card_ofer4.jpg" alt="">
                        <h3 class="desc-default">ATENDIMENTO PSICOLÓGICO</h3>
                    </article>
                </div>
            </div>

        </section>

        <section class="oferes container_full">
            <div class="oferes_content container d-flex">
                <div class="oferes_left">
                    <h3 class="subtitle-default">faça parte</h3>
                    <h2 class="title_oferes title-default">Seja um voluntário</h2>
                    <p class="desc-default">Escolha uma área do seu interesse para ajudar quem precisa.</p>
                </div>
    
                <div class="oferes_right">
                    <article class="card_oferes">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/card_oferes1.jpg" alt="">
                        <h3 class="desc-default">Professor de Português</h3>
                    </article>
                    <article class="card_oferes">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/card_oferes2.jpg" alt="">
                        <h3 class="desc-default">Professor de Matemática</h3>
                    </article>
                    <article class="card_oferes">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/card_oferes3.jpg" alt="">
                        <h3 class="desc-default">Monitor</h3>
                    </article>
                    <article class="card_oferes">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/card_oferes4.jpg" alt="">
                        <h3 class="desc-default">Professor de artes marciais</h3>
                    </article>
                    <article class="card_oferes">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/card_oferes5.jpg" alt="">
                        <h3 class="desc-default">Professor de Inglês</h3>
                    </article>
                    <article class="card_oferes">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/card_oferes6.jpg" alt="">
                        <h3 class="desc-default">Professor de  música</h3>
                    </article>
                </div>
            </div>
            
        </section>


        <section class="contact_form container d-flex" id="voluntario">
            <p class="desc-default">Preencha o formulário, escolha uma área do seu interesse e comece a fazer parte dessa mudança.</p>
            <form action="" class="form">
                <div id="return_form_one" style="width: 100%; text-align: center; color: var(--color-green)">
                </div>
                <div class="form_group">
                    <label for="name">Nome:</label>
                    <input type="text" name="nome" id="nomeFormOne">
                </div>
                <input type="hidden" name="_subject" id="_subject" value="Contato do site">
                <div class="form_group">
                    <label for="telefone">Telefone:</label>
                    <input type="text" name="telefone" id="telefoneFormOne">
                </div>
                <div class="form_group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="emailFormOne">
                </div>
                <div class="form_group">
                    <label for="area">Área de interesse:</label>
                    <select name="area_interesse" id="areaFormOne">
                        <option value=""></option>
                        <option value="artes">Artes</option>
                        <option value="odontologia">Atendimento Odontológico</option>
                        <option value="psicologico">Atendimento Psicológico</option>
                        <option value="juridico">Atendimento Jurídico</option>
                        <option value="profissional">Capacitação profissional</option>
                        <option value="educacao">Educação</option>
                        <option value="esportes">Esportes</option>
                        <option value="outros">Outros</option>
                    </select>
                </div>
                <button class="btn-gray" type="submit" id="sendForm">Enviar</button>
            </form>
        </section>

        <section class="our container_full">
            <div class="container d-flex">
                <div class="our_left f-50">
                    <h3 class="subtitle-default">Nosso cantinho</h3>
                    <h2 class="title_our title-default">Conheça a nossa história e a nossa casa</h2>
                    <p class="desc-default">O Instituto MRD nasceu do sonho de proporcionar a crianças e adolescentes oportunidades para que possam crescer e ter um futuro melhor. Atuamos para impactar e transformar a vida desses jovens por meio de acolhimento, educação, arte, saúde, esporte e capacitação profissional. Tudo isso movido pela mesma força: o amor ao próximo.</p>
                </div>

                <div class="our_right f-50">
                    <div class="container_video">
                        <video id="myVideo" src="<?= get_post_meta( get_the_ID(), 'video_nosso_caminho', true ) ?>" oncontextmenu="return false;">
                        </video>
                        <span class="play_video" onclick="execVideo()">
                            <i class="bi bi-play-fill"></i>
                        </span>
                    </div>

                    <script>

                        var vid = document.getElementById("myVideo");
                        var icon_play = document.querySelector('.play_video i');

                        let videoPlay = false;
                        function execVideo(){

                            if(videoPlay){
                                vid.pause();
                                videoPlay = false;
                                icon_play.classList.replace("bi-pause-fill", "bi-play-fill");
                            }else{
                                vid.play();
                                videoPlay = true;
                                icon_play.classList.replace("bi-play-fill", "bi-pause-fill");
                            }

                        }
                    </script>
                </div>
            </div>

            <div class="our_gallery container d-flex">
                <div class="top_gallery">
                    <span id="close_modal_gallery">
                        <i class="bi bi-x-lg"></i>
                    </span>
                </div>
                <!-- 
                <div class="our_gallery_left f-50">
                    <img src="assets/img/frame.png" alt="">
                </div>
                 -->
                 <div class="our_gallery_right d-flex">
                    <?php
                        $imgs_gall = get_post_meta( get_the_ID(), 'list_images_gallery', 1 );

                        foreach($imgs_gall as $img_gall):
                    ?>
                    <div class="card_gallery">
                        <img src="<?= $img_gall ?>" alt="">
                    </div>

                    <?php endforeach ?>

                    <!-- 
                    <div class="card_gallery">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/bloco2.jpeg" alt="">
                    </div>
                    <div class="card_gallery">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/bloco3.jpeg" alt="">
                    </div>
                    <div class="card_gallery">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/bloco4.jpeg" alt="">
                    </div>
                    <div class="card_gallery">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/bloco.jpeg" alt="">
                    </div>
                    <div class="card_gallery">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/bloco6.jpeg" alt="">
                    </div>
                     -->
                </div>
            </div>

        
        </section>

        <section class="testi container_full">
            <header class="header_testi container">
                <h3 class="subtitle-default">O que dizem sobre nós</h3>
                <h2 class="title-default">Muito mais do que palavras</h2>
                <p class="desc-default">Veja o que as pessoas estão falando do Instituto MRD.</p>
            </header>

            <div class="testi container_full">
                <div class="row_testi_top d-flex">
                    <article class="item_testi">
                        <div class="card_testi">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/testi-def.jpg" alt="">
                            <div class="testi_desc">
                                <i class="bi bi-quote"></i>
                                <p>“Nós, as crianças do Bairro Manuel Brandão, viemos expressar nossa gratidão e agradecimentos ao Instituto MRD por ter nos proporcionado tamanho evento e alegria!”</p>
                                <strong>Comunidade do Bairro Manuel Brandão</strong>
                            </div>
                        </div>
                        
                    </article>
                    <article class="item_testi d-flex">
                        <div class="card_testi d-flex" style="flex-direction: column;">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/testimonial.jpg" alt="">
                            <!-- 
                            <div class="testi_desc">
                                <i class="bi bi-quote"></i>
                                <p>“Não há nada melhor do que ver o sorriso no rosto das crianças. Essas ações realmente transformam vidas. Estão de parabéns!”</p>
                                <strong>Carlos Eduardo</strong>
                            </div>
                             -->
                             <div class="testi_desc not-show-on-desktop">
                                <i class="bi bi-quote"></i>
                                <p>“Quando você se torna voluntário é muito mais sério do que um trabalho remunerado, pois é o mesmo que você dizer ‘estou disposto a fazer parte do processo de transformação’. O Instituto promove exatamente isso: transformação!”</p>
                                <strong>Carlos Eduardo</strong>
                            </div>
                        </div>
                        <div class="testi_show ocult-testi" style="margin-top: -40px;">
                            <p class="desc-default" style="font-size: .9em;">“Quando você se torna voluntário é muito mais sério do que um trabalho remunerado, pois é o mesmo que você dizer ‘estou disposto a fazer parte do processo de transformação’. O Instituto promove exatamente isso: transformação!”</p>
                            <p>
                                ⭐⭐⭐⭐⭐
                            </p>
                            <p class="desc-default" style="color: #333;">
                            Marcos Macedo
                            </p>
                        </div>
                        
                    </article>
                    <article class="item_testi">
                        <div class="card_testi">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/testi3.jpeg" alt="">
                            <div class="testi_desc" style="width: 320px;">
                                <i class="bi bi-quote"></i>
                                <p style="font-size: .85em;">“Eu tenho um imenso prazer em ajudar as pessoas e, claro, construir e nutrir este relacionamento com crianças e adolescentes é fundamental. Considero que uma oportunidade como esta nos permite estimular e promover o interesse desses jovens em se aproximarem mais da educação, da arte, do esporte e da capacitação profissional para alcançarem um futuro melhor. Como voluntário, tento fazer a minha parte para que as crianças possam ser as verdadeiras protagonistas das mudanças que desejam ver no mundo!”</p>
                                <strong>Alfeu Wartully</strong>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="row_testi_bottom d-flex">
                    
                    <article class="item_testi">
                        <div class="card_testi">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/testi7.png" alt="">
                            <div class="testi_desc">
                                <i class="bi bi-quote"></i>
                                <p>“O Instituto MRD vem, valorosamente, contribuindo na efetivação dos serviços prestados na unidade de acolhimento institucional (lar das Crianças), auxiliando significativamente no desenvolvimento saudável das crianças acolhidas!”</p>
                                <strong>Marco Cruz</strong>
                            </div>
                        </div>
                    </article>
                    
                    <article class="item_testi">
                        <div class="card_testi">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/testi5.png" alt="">
                            <div class="testi_desc">
                                <i class="bi bi-quote"></i>
                                <p>“Quero agradecer o Dr. Marcos, o fundador do Instituto MRD, por me ajudar com cestas básicas, fraldas e leite para meus filhos. É um anjo que Deus enviou. Que o senhor coloque sua mãos e abençõe vocês cada dia mais. Que o Instituto nunca acabe e que venha prosperar a cada dia mais.”</p>
                                <strong>Luziene, bairro Aparecida.</strong>
                            </div>
                        </div>
                    </article>
                    <article class="item_testi">
                        <div class="card_testi">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/testi4.png" alt="">
                            <div class="testi_desc">
                                <i class="bi bi-quote"></i>
                                <p>“Meus agradecimentos ao instituto MRD que nos apoiaram na festa das crianças, e contribuiu muito nesse dia tão especial na nossa comunidade ( vila independência segunda seção).”</p>
                                <strong>Natanael Garcias (Tatá Barber Shop)</strong>
                            </div>
                        </div>
                    </article>
                    
                    <article class="item_testi">
                        <div class="card_testi">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/testi6.png" alt="">
                            <div class="testi_desc">
                                <i class="bi bi-quote"></i>
                                <p>“Uma frase so não vai dar para expressar tamanha gratidão!”</p>
                                <strong>Alexandra de Cássia Correia Pires da Cruz</strong>
                            </div>
                        </div>
                    </article>
                    
                </div>
            </div>
        </section>

        <section class="form_bottom container_full">
            <div class="form_bottom_content container d-flex">

                <div class="form_board">
                    <h3 class="subtitle-default">contato</h3>
                    <h2 class="title-default">Fale com o Instituto MRD e faça parte da mudança!</h2>
                    <p class="desc-default">Temos uma equipe cheia de amor para atendê-lo. Adoramos receber mensagens, envie a sua para o nosso time!</p>

                    <form action="" class="form" method="post">
                        <div id="return_form_two" style="width: 100%; text-align: center; color: var(--color-green)">
                            
                        </div>
                        <div class="form_group">
                            <label for="name">Nome:</label>
                            <input type="text" name="nome" id="nomeFormTwo">
                        </div>
                        <div class="form_group">
                            <label for="telefone">Telefone:</label>
                            <input type="text" name="telefone" id="telefoneFormTwo">
                        </div>
                        <div class="form_group">
                            <label for="email">Email:</label>
                            <input type="text" name="email" id="emailFormTwo">
                        </div>
                        <div class="form_group">
                            <label for="area_atuação">Assunto:</label>
                            <select name="" id="areaFormTwo">
                                <option value=""></option>
                                <option value="doacoes">Doações</option>
                                <option value="nossos_projetos">Nossos projetos</option>
                                <option value="seja_voluntario">Seja um voluntário</option>
                                <option value="outros">Outros</option>
                            </select>
                        </div>
                        <button class="btn-gray" type="submit" id="sendForm2">Enviar</button>
                    </form>
                </div>

            </div>
            <div>

            </div>
        </section>

    </main>

<?php get_footer() ?>
   