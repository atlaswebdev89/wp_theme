<?php get_header(); ?>
<?php the_post();?>
<div id="wrap">
    <section id="desc-text-btn-quartbg" class="light pt-200 pb-50 text-left">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="header-h1">
                        <h1 data-aos="fade-down" data-aos-easing="none" data-aos-duration="500" data-aos-delay="0" class="pt-125"><?php the_title();?></h1>
                    </div>
                    <?php the_content();?>
                </div>
            </div>
        </div>
        <div class="bg"></div>
    </section>
    <?php
    //Получим slug текущей страницы
    $slug = get_post_field( 'post_name');
    get_template_part("template-parts/$slug", 'content');
    ?>
    <!--Footer block -->
    <?php get_footer(); ?>
    <!--End Footer Block -->

