<?php
/*
Template Name: Шаблон страницы КАТАЛОГ
*/
?>
<?php get_header();?>
    <div id="wrap">
    <section id="gallery-list-4col-2" class="light pt-200 pb-md-50 text-left">
        <div class="container text-center">
            <div class="row">
                <div class="header-h1">
                    <h1 class="text-center pt-125" data-aos="fade-down" data-aos-easing="none" data-aos-duration="500" data-aos-delay="0">Каталог проектов мебели</h1>
                </div>

                <div class="col-md-12 mb-40">
                    <div class="header-h2 header-h2-center ">
                        <h2>фото мебели</h2>
                    </div>

                </div>
                <div class="col-md-12 text-center">
                    <p class="mb-60">В нашей работе мы пытаемся использовать только самые современные, удобные и интересные решения. Применяем только качественные и надежные материалы. </p>
                </div>
            </div>
            <?php
                global $post;
                $page_children = get_posts(array
                                                (
                                                'numberposts' => -1,
                                                'post_type' => 'page',
                                                'post_parent' => get_the_ID(),
                                                'orderby' => 'menu_order'//Сортировать по дате
                                                )
                        );    
                    if($page_children):                      
                        foreach ($page_children as $post):
                            setup_postdata($post);?>
                                <div class="col-md-4">
                                            <span class="caption"><strong><?php the_title();?></strong></span>
                                                <a href="<?php the_permalink();?>" class="gallery-box gallery-style-2"><?php the_post_thumbnail();?></a>
                                        </div>
                      <?php  endforeach;              
                    endif;
                wp_reset_postdata();       
            ?>

            <div class="col-md-12  text-center mt-30">
                <a class="btn-primary btn aos-init aos-animate mb-25" data-aos="fade-up" data-aos-easing="none" data-aos-duration="500" data-aos-delay="0" href="#" data-toggle="modal" data-target="#message_form">
                                    <span>
                                        <strong>
                                            <i class="icon-pencil22 icon-color"></i>
                                            Оставить заявку
                                        </strong>
                                    </span>
                </a>

            </div>
        </div>

        <div class="bg"></div>
    </section>

<?php get_footer(); ?>