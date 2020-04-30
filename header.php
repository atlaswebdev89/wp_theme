<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Заказать корпусную мебель в Бресте | NKN-Mebel</title>
    <meta name="keywords" content="Мебель под заказ Брест, изготовление корпусной мебели, производство мебели по индивиальным проектам, мебель из дсп и мдф, заказать мебель" />
    <meta name="description" content="В NKN-мебель можно заказать изготовление любой корпусной мебели под индивидуальные размеры: кухни, шкафы-купе, мебель для детских и гардеробных комнат." />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <!--END -->
    <?php wp_head() ?>
</head>

<body class="light-page">
<!-- Navigation Block-->
<nav id="nav-logo-2row-2" class="navbar light navbar-fixed-top" style="">
    <div class="container">
        <div class="clearfix">
            <ul class="text-icon-list list-inline navbar-text pull-left">
                <li class=""><i class="icon-phone-incoming icon-color"></i><span><?php the_field('phone');?></span></li>
                <li class=""><i class="icon-clock icon-color"></i><span><?php the_field('time_work');?></span></li>
            </ul>
            <div class="btn-group pull-right hidden-xs">
                <a class="btn btn-success navbar-btn btn-sm dark" href="#" data-target="#request_call" data-toggle="modal"><i class="icon-telephone2 icon-color"></i> Заказать звонок</a>
            </div>
        </div>
        <hr class="mt-0 mb-0" style="opacity: 0.5">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <div class="navbar-brand">
                <?php if( has_custom_logo() ) the_custom_logo(); ?>
            </div>
        </div>
        <!-- Block menu -->
            <?php wp_nav_menu(array(
                                        'theme_location'  => 'main_menu',     // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции
                                        'menu'            => '',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
                                        'container'       => 'div',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
                                        'container_class' => 'navbar-collapse collapse',              // (string) class контейнера (div тега)
                                        'container_id'    => 'navbar',        // (string) id контейнера (div тега)
                                        'menu_class'      => 'nav navbar-nav navbar-right',          // (string) class самого меню (ul тега)
                                        'menu_id'         => '',              // (string) id самого меню (ul тега)
                                        'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
                                        'fallback_cb'     => 'wp_page_menu',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
                                        'before'          => '',              // (string) Текст перед <a> каждой ссылки
                                        'after'           => '',              // (string) Текст после </a> каждой ссылки
                                        'link_before'     => '<span>',              // (string) Текст перед анкором (текстом) ссылки
                                        'link_after'      => '</span>',              // (string) Текст после анкора (текста) ссылки
                                        'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                                        'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
                                    )
                    );
            ?>                
        <!-- End Block Menu -->
    </div>
    <div class="nav-bg light"></div>
</nav>
<!--End Block -->