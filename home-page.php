<?php
/*
Template Name: Главная

*/
?>
<?php  get_header(); ?>
  <!-- Шапка -->
    <div class="container">
        <header style="background-image: url(<?php the_field('background-image'); ?>);>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10 align-self-center">
                    <h4 class="text-uppercase"><?php the_field('title_site');?></h4>
                    <p><?php the_field('discription_site');?></p>
                </div>
                <div class="col-lg-4 col-md-10 text-center align-self-center">
                    <form action="">
                        <div>
                            <span class="text-uppercase">Оставьте Заявку прямо Сейчас</span>
                            <input type="text" placeholder="Имя">
                            <input type="tel" placeholder="Телефон">
                            <button type="submit" class="btn text-uppercase">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </header>
    </div>
    <!-- Популярные Товары -->
    <div class="container popcat" style="background-image:url(<?php the_field('background_catalog'); ?>)">
        <div class="row">
            <div class="col text-center text-uppercase">
                <div class="div title">
                    <h4>Популярные Категории</h4>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <a href="">
                    <p class="text-uppercase">Глухие</p>
                    <img src="<?php the_field('img_cat_1'); ?>" class="img-fluid img-thumbnail" alt="">
                </a>
            </div>
            <div class="col-md-3">
                <a href="">
                    <p  class="text-uppercase">Со Стеклом</p>
                    <img src="<?php the_field('img_cat_2'); ?>" class="img-fluid img-thumbnail" alt="">
                </a>
            </div>
            <div class="col-md-3">
                <a href="">
                    <p class="text-uppercase">На Заказ</p>
                    <img src="<?php the_field('img_cat_3'); ?>" class="img-fluid img-thumbnail" alt="">
                </a>
            </div>
        </div>
    </div>

    <!-- Преимущества -->
    <div class="container adv text-center text-white" style="background-image:url(<?php the_field('background_adv'); ?>)">
        <div class="row justify-content-center">

            <div class="col-10 col-sm-10 col-md-5 col-lg-2">
                <img src="<?php the_field('icon_adv_1'); ?>" class="img-fluid" alt="">
                <h6 class="text-uppercase"><?php the_field('title_adv_1'); ?></h6>
                <p><?php the_field('description_adv_1'); ?></p>
            </div>

            <div class="col-10 col-sm-10 col-md-5 col-lg-2">
                <img src="<?php the_field('icon_adv_2'); ?>" class="img-fluid" alt="">
                <h6 class="text-uppercase"><?php the_field('title_adv_2'); ?></h6>
                <p><?php the_field('description_adv_2'); ?></p>
            </div>

            <div class="col-10 col-sm-10 col-md-5 col-lg-2">
                <img src="<?php the_field('icon_adv_3'); ?>" class="img-fluid" alt="">
                <h6 class="text-uppercase"><?php the_field('title_adv_3'); ?></h6>
                <p><?php the_field('description_adv_3'); ?></p>
            </div>

            <div class="col-10 col-sm-10 col-md-5 col-lg-2">
                <img src="<?php the_field('icon_adv_4'); ?>" class="img-fluid" alt="">
                <h6 class="text-uppercase"><?php the_field('title_adv_4'); ?></h6>
                <p><?php the_field('description_adv_4'); ?></p>
            </div>
            
        </div>
    </div>

    <!-- популярные товары -->
    <div class="container popgoods" style="background-image:url(<?php the_field('background_catalog'); ?>)">
        <div class="row">
           <div class="col text-center text-uppercase">
            <div class="title">
                <h4>поулярные товары</h4>
            </div>
           </div>
        </div>
        <div class="row text-center justify-content-center">
        <?php 
            $args = array(
                'post_type'=> 'doors',
                'numberposts'=> 8,
            );
            $p = get_posts($args);
            foreach ($p as $post) {
                setup_postdata ($post);
                ?>

                <div class="col-10 col-sm-10 col-md-5 col-lg-3">
                <img src="<?php the_field('image_door'); ?>" alt="" class="img-thumbnail img-fluid">
                <h6 class="text-uppercase text-bold"><?php the_title(); ?></h6>
                <p><?php the_field('price_door');?> рублей</p>
                <button class="btn text-uppercase">Подробнее</button>
            </div>
            <?php } wp_reset_postdata(); ?>
        </div>
        <div class="row  text-center justify-content-center">
            <div class="col">
                <button class="btn-lg btn-inverse text-uppercace">Перейти в Каталог</button>
            </div>

        </div>
    </div>
    <!--Размер -->
    <div class="container form_zamer text-white" style="background-image:url(<?php the_field('background_zamer'); ?>)">
        <div class="row text-center justify-content-center">
            <div class="col-10 col-md-10 col-sm-10 col-lg-3 align-self-center ">
                <div class="text-left">
                    <h5 class="text-uppercase">Закажите Замер</h5>
                    <p>Наши специалисты подберут все необходимые параметры</p>
                </div>
                <form action="" class="text-center">
                    <div class="">
                        <input type="text" placeholder="Имя">
                        <input type="text" placeholder="Адрес">
                        <input type="tel" placeholder="Телефон">
                        <button class="btn text-uppercase">Заказать Замер</button>
                    </div>
                </form>
            </div>
            <div class="col-5 col-md-5 col-lg-3 align-self-center">
                <img src="<?php the_field('icon_zamer_1') ?> " alt="" class="img-fluid">
                <h6 class="text-uppercase"><?php the_field('title_zamer_1') ?></h6>
                <p><?php the_field('description_zamer_1') ?></p>
            </div>
            <div class="col-5 col-sm-5 col-md-5 col-lg-3 align-self-center">
                <img src="<?php the_field('icon_zamer_2') ?>" alt="" class="img-fluid">
                <h6 class="text-uppercase"><?php the_field('title_zamer_2') ?></h6>
                <p><?php the_field('description_zamer_2') ?></p>
            </div>
        </div>
    </div>
    <!--отзывы  -->
    <div class="container reviews">
        <div class="row">
            <div class="col text-center text-uppercase">
                <div class="title">
                    <h4>Отзывы</h4>
                </div>
            </div>
        </div>
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-9 col-sm-9 col-9">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">Глухая Дверь</h4>
                            <p class="card-text">Очень хорошая и качественная дверь, установили быстро</p>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-9 col-sm-9 col-9">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">Глухая Дверь</h4>
                            <p class="card-text">Очень хорошая и качественная дверь, установили быстро</p>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-9 col-sm-9 col-9">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">Глухая Дверь</h4>
                            <p class="card-text">Очень хорошая и качественная дверь, установили быстро</p>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-9 col-sm-9 col-9">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">Глухая Дверь</h4>
                            <p class="card-text">Очень хорошая и качественная дверь, установили быстро</p>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-9 col-sm-9 col-9">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">Глухая Дверь</h4>
                            <p class="card-text">Очень хорошая и качественная дверь, установили быстро</p>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-9 col-sm-9 col-9">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">Глухая Дверь</h4>
                            <p class="card-text">Очень хорошая и качественная дверь, установили быстро</p>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    </div>
    <!-- Футер -->
<?php get_footer(); ?>