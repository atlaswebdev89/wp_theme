<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Заказать корпусную мебель в Бресте | NKN-Mebel</title>
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
            <?php get_template_part('template-parts/navigation');?>
    </div>
    <div class="nav-bg light"></div>
</nav>
<!--End Block -->