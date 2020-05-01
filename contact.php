<?php
/*
Template Name: Шаблон страницы КОНТАКТЫ
*/
?>
<?php get_header();?>
<div id="wrap">
			<section id="contact-quartbg-form-text" class="bg-1-color-light light pt-200 pb-md-200 text-left"> 			
    			<div class="container">
        			<div class="row text-center">
                                    <div class="header-h1">
                                        <h1 data-aos="fade-down" data-aos-easing="none" data-aos-duration="500" data-aos-delay="0" class="pt-125">Наши контакты</h1>         			           			
                                    </div>
                                    
            			<div class="col-md-6">
                                    <div class="header-h2 header-h2-center">
                                        <h2 class="mb-50">Контактная информация</h2>
                                    </div>
                			<p class="mb-30 mt-15">Вы можете связаться с нами по указанным ниже контактам</p>
                                            <ul class="text-icon-list">                
                                                <li><i class="icon-at-sign"></i>
                                                    <span>Наша электронная почта: <strong><?php the_field('email');?></strong></span>
                                                </li>
                                                <li><i class="icon-phone-incoming"></i>
                                                    <span>Наш телефон (мтс, viber): <strong><?php the_field('telefon');?></strong></span>
                                                </li>
                                                <li><i class="icon-clock"></i>
                                                    <span>Наши часы работы: <strong><?php the_field('time_work');?></strong></span>
                                                </li>
                                            </ul>
            			</div>
                                    <div class="col-md-6">
                                            <?php get_template_part('template-parts/contact-form', 'content');?>
            			</div>
        			</div>
    			</div>
    			<div class="bg"></div>
			</section>
   <section id="action-center-text-btn-3" class="pt-100 pb-100 light text-center">
    			<div class="container">
        			<div class="row">
            			<div class="col-md-12 flex-md-center">
                                    <h2 class="inline-h"><strong>Не упускайте свой шанс заказать качественную мебель</strong></h2>               			
            			</div>
        			</div>
    			</div>
    			<div class="bg"></div>
			</section>
<?php get_footer();?>