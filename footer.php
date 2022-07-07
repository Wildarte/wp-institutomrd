<footer class="footer container_full">
        <div class="footer_content container d-flex">
            <div class="logo_footer">
                <img src="assets/img/Brand.png" alt="">
            </div>

            <div class="menu_footer">
                <h3>Menus</h3>
                <ul>
                    <li>
                        <a href="<?= $url ?>#quemsomos">Quem Somos</a>
                    </li>
                    <li>
                        <a href="<?= $url ?>#projetos">Projetos</a>
                    </li>
                    <li>
                        <a href="<?= $url ?>#acontece">Acontece</a>
                    </li>
                    <li>
                        <a href="<?= $url ?>#voluntario">Seja volutário</a>
                    </li>
                    <li>
                        <a href="#">Transparência</a>
                    </li>
                    <li>
                        <a href="#">Política de Privacidade</a>
                    </li>
                </ul>
            </div>

            <div class="contato_footer">

                <h3>Contato</h3>

                <ul>
                    <li>
                        <p><i class="bi bi-geo-alt"></i> Sebastião Maria da Silva, 166 - Átila de Paiva</p>
                    </li>
                    <li>
                        <a href="tel:+5531999511778"><i class="bi bi-telephone"></i> (31) 9 9951-1778</a>
                    </li>
                    <li>
                        <a href="mailto:faleconosco@marcosrdias.com.br"><i class="bi bi-envelope"></i> faleconosco@marcosrdias.com.br</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="footer_bottom_content container">
                <p>© 2022 Insituto MRD Designed by MRD</p>

                <ul class="social_footer">
                    <li>
                        <a href="https://www.facebook.com/institutomrd" target="_blank"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/institutomrd" target="_blank"><i class="bi bi-instagram"></i></a>
                    </li>
                </ul>
            </div>
            
        </div>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js"></script>

    <!-- wp footer -->
    <?php wp_footer() ?>
    <!-- wp footer -->
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                loop:true,
                margin:10,
                autoplay:true,
                autoplayTimeout:4000,
                autoplayHoverPause:true,
                responsive:{
                    0:{
                        items:1,
                        margin: 20,
                        nav: true,
                        loop: true
                    }
                }
            });
        });



        
    </script>

</body>
</html>