<?php
/*
Template Name: Шаблон Single-catalog
*/
?>
<?php get_header();?>       
        <div id="wrap">			
                        <section id="desc-center-slogan-img-text--0" class="light pt-200 pb-125 text-center">
                                    <div class="container" style="">
                                        <div class="header-h1">
                                            <?php the_post();?>
                                            <h1 data-aos="fade-down" data-aos-easing="none" data-aos-duration="500" data-aos-delay="0" class="pt-125"><?php the_title();?></h1>
                                        </div>
                                            <div class="row">
                                            <div class="col-md-12 text-justify pIn"> 
                                                <?php the_content();?>                                                                                  
                                            </div>

                                            </div>
                                    </div>
                                    <div class="bg"></div>
			</section>
            
            <section id="gallery-list-3col-6" class="pt-50 pb-100 dark text-center">
    			<div class="container no-side-pad">
                            <div class="header-h2 header-h2-center mb-40" style="margin-bottom: 30px;">
        			<h2 class="" style="font-size: 20px;"><strong>Фото мебели</strong></h2>
                            </div>
                <!--Гелерея наших работ FancyBox-->
        			<div class="row no-pad gallery">
                                    <div class="col-md-12"> 
                                        
                                            <?php
                                                 //Get the images ids from the post_metadata
                                                 $images = acf_photo_gallery('galereya', get_the_ID() );
                                                 //Check if return array has anything in it
                                                 if( count($images) ): ?>
                                        <div class="masonry">  
                                                   <?php
                                                   //Cool, we got some data so now let's loop over it
                                                   foreach($images as $image):                               
                                                         $caption= $image['caption']; //The caption
                                                         $full_image_url= $image['full_image_url']; //Full size image url                                                       
                                                    ?>                                          
                                                             <div class="item">
                                                                 <a data-fancybox="gallery" href="<?php echo $full_image_url;?>" data-caption="<?php echo $caption;?>" title="<?php echo $title;?>">
                                                                     <img class="img-responsive" src="<?php echo $full_image_url; ?>" alt="<?php echo $title;?>">
                                                                 </a>
                                                             </div>         
                                                     <?php endforeach; ?>
                                        </div>  
                                    
                                        
                                            <?php else: ?>
                                                     <h3 class="text-center">Фото не найдены</h3>
                                                 <?php endif; ?>                                               
                                    </div>                              
                <!-- EndGallery FancyBox -->      
                                    
                                <div class="clearfix"></div>
                                <div class="col-md-12  text-center mt-30 mb-30">
                                    <a class="btn-default btn aos-init aos-animate" data-aos="fade-up" data-aos-easing="none" data-aos-duration="500" data-aos-delay="0" href="/catalog/">
                                        <span>
                                            <strong>
                                               <i class="icon-chevron-left-small icon-color"></i>
                                                Каталог проектов
                                            </strong>
                                        </span>
                                    </a>                
                                </div>
        			<p class="mt-75 compressed-box-50">                                    
                                     Каталог представлен основными вариантами мебели под заказ. 
                                     Многие из этих вариантом мы успешно изготовили
                                     по индивидуальным размерам. 
                                </p>	
    			</div>
                    </div>
                <div class="bg"></div>
	    </section>
            
            
           <section id="action-center-img-text-btn" class="pt-100 pb-100  text-center">
    			<div class="container">
        			<div class="row">
                                    <div class="col-md-12">                                   
                                            <h3 class="mb-50" style="font-size: 36px;">Напишите нам.<br/> Мы ждем ваших заявок.</h3>
                                                <a class="btn btn-success" href="#" data-toggle="modal" data-target="#message_form">
                                                    <i class="icon-envelope2 icon-size-m icon-position-left"></i>
                                                    <span>Оставить заявку<strong> сейчас!</strong></span>
                                                </a>
                                    </div>
        			</div>
    			</div>
                <div class="bg"></div>
	    </section>
<?php get_footer(); ?>