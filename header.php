<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Двери</title>
    <?php wp_head(); ?>
</head>

<body>
    <!-- Меню -->
    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="container">
                <?php the_custom_logo(); ?>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <? wp_nav_menu( [
                            'container'       => 'ul',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'navbar-nav mr-auto  mt-lg-0',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => '',
                        ] ); ?>
                </div>
                <span class="number_phone ">+7 (918) 666-26-02</span>

            </div>
        </nav>
    </div>