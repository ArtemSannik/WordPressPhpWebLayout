<footer class="container">
        <div class="row text-center">
            <div class="col">
            <? wp_nav_menu( [
                            'container'       => 'menu',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'nav justify-content-center',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<menu id="%1$s" class="%2$s">%3$s</menu>',
                            'depth'           => 0,
                            'walker'          => '',
                        ] ); ?>
                <!-- <menu class="nav justify-content-center">
                    <li class="nav-item"><a href="" class="nav-link text-uppercase active">Главная</a></li>
                    <li class="nav-item"><a href="" class="nav-link text-uppercase">О компании</a></li>
                    <li class="nav-item"><a href="" class="nav-link text-uppercase">наши работы</a></li>
                    <li class="nav-item"><a href="" class="nav-link text-uppercase">Каталог</a></li>
                    <li class="nav-item"><a href="" class="nav-link text-uppercase">контакты</a></li>
                </menu> -->
                <p class="text-uppercase">Политика конфиденциальности<span>&copy;</span>Dvery-zhovner.ru</p>
            </div>
        </div>
    </footer>
   
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery-3.6.1.min.js"></script>
    <script src="/js/index.js"></script>
    <?php wp_footer(); ?>
</body>

</html>