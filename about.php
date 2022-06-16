<?php
/*
Template Name: About
*/
?>



<?php get_header(); ?>





<main>
        <h1 class="about-tit">О нас</h1>

        <div class="slide-wrap">
            <div class="slider">
                <div class="item">
                    <div class="slide-item">
                        <div class="slider-text">
                            <h1>
                                <!-- СТО “ ФОРТУНА” -->
                                <?php echo carbon_get_post_meta( get_the_ID(), 'title_slide1' ); ?>
                            </h1>
                            <p>
                                <!-- это команда профи, которая знает свое дело и поможет вам с техническим обслуживанием
                                автомобилей в Ростове-на-Дону. -->
                                <?php echo carbon_get_post_meta( get_the_ID(), 'text_slide1' ); ?>

                            </p>
                        </div>

                        <img src="<?php
    echo wp_get_attachment_image_url(carbon_get_post_meta( get_the_ID(), 'img_slide1' ));
?>" class="slide-photo">

                    </div>
                </div>
                <div class="item">
                    <div class="slide-item">
                        <div class="slider-text">
                            <h1>
                                <!-- МЫ не просто сервис МЫ те кто : -->
                                <?php echo carbon_get_post_meta( get_the_ID(), 'title_slide2' ); ?>
                            </h1>
                            <ul>
                                <!-- <li>
                                    имеем опыт специалистов 20 лет;
                                </li>
                                <li>
                                    делаем качественный ремонт автомобилей;
                                </li>
                                <li>
                                    используем качественные запчасти у проверенных дилеров, которые находятся в шаговой
                                    достпности от нашего сервиса.
                                </li> -->
                                <?php echo carbon_get_post_meta( get_the_ID(), 'text_slide2' ); ?>
                            </ul>
                        </div>

                        <img src="<?php
    echo wp_get_attachment_image_url(carbon_get_post_meta( get_the_ID(), 'img_slide2' ));
?>" class="slide-photo">
                    </div>
                </div>

                <div class="item">
                    <div class="slide-item">
                        <div class="slider-text">
                            <h1>
                                <!-- Что еще хотелось бы сказать о нас: -->
                                <?php echo carbon_get_post_meta( get_the_ID(), 'title_slide3' ); ?>
                            </h1>
                            <ul>
                                <!-- <li>
                                    не навязываем выдуманных работ;

                                </li>
                                <li>
                                    не обманываем наших уважаемых клиентов;

                                </li>
                                <li>
                                    не создаем вид бурной деятельности, пока клиент находится в зоне ожидания;

                                </li>
                                <li>
                                    не снимаем ваши запчасти и не заменяем их на б/у, пока автомобиль находится у нас на
                                    обслуживании.

                                </li> -->
                                <?php echo carbon_get_post_meta( get_the_ID(), 'text_slide3' ); ?>
                            </ul>
                        </div>

                        <img src="<?php
    echo wp_get_attachment_image_url(carbon_get_post_meta( get_the_ID(), 'img_slide3' ));
?>" class="slide-photo">
                    </div>
                </div>
                <div class="item">
                    <div class="slide-item">
                        <div class="slider-text">
                            <h1>
                                <!-- Вот спектр ремонтных услуг, за которыми вы можете обратиться к нам в сервис: -->
                                <?php echo carbon_get_post_meta( get_the_ID(), 'title_slide4' ); ?>
                            </h1>
                            <ul>
                                <!-- <li>
                                    двигатель и все сопутствующие работы;

                                </li>
                                <li>
                                    выхлопная система;


                                </li>
                                <li>
                                    техническое обслуживание автомобиля;


                                </li>
                                <li>
                                    подвеска, тормозная система и рулевое управление;


                                </li>
                                <li>
                                    топливная система;



                                </li>
                                <li>
                                    трансмиссия;


                                </li> -->
                                <?php echo carbon_get_post_meta( get_the_ID(), 'text_slide4' ); ?>
                            </ul>
                        </div>

                        <img src="<?php
    echo wp_get_attachment_image_url(carbon_get_post_meta( get_the_ID(), 'img_slide4' ));
?>" class="slide-photo">



                    </div>
                </div>

                <a class="prev" onclick="minusSlide()"><img src="<?php print_r(get_template_directory_uri()); ?>/images/left.png"></a>
                <a class="next" onclick="plusSlide()"><img src="<?php print_r(get_template_directory_uri()); ?>/images/right.png"></a>
            </div>

            <!-- <div class="slider-dots"> -->
                <!-- <span class="slider-dots_item" onclick="currentSlide(1)">
                    <img src="<?php print_r(get_template_directory_uri()); ?>/images/slide-act.png">
                </span>
                <span class="slider-dots_item" onclick="currentSlide(2)">
                    <img src="<?php print_r(get_template_directory_uri()); ?>/images/pay1.png">
                </span>
                <span class="slider-dots_item" onclick="currentSlide(3)">
                    <img src="<?php print_r(get_template_directory_uri()); ?>/images/slide-nact.png">
                </span>
                <span class="slider-dots_item" onclick="currentSlide(4)">
                    <img src="<?php print_r(get_template_directory_uri()); ?>/images/slide-nact.png">
                </span> -->
              
                    <!-- <img  class="slider-dots_item" onclick="currentSlide(1)" src="<?php print_r(get_template_directory_uri()); ?>/images/slide-act.png">
             
               
                    <img class="slider-dots_item" onclick="currentSlide(2)" src="<?php print_r(get_template_directory_uri()); ?>/images/slide-nact.png">
              
              
                    <img class="slider-dots_item" onclick="currentSlide(3)" src="<?php print_r(get_template_directory_uri()); ?>/images/slide-nact.png">
               
                
                    <img class="slider-dots_item" onclick="currentSlide(4)" src="<?php print_r(get_template_directory_uri()); ?>/images/slide-nact.png">
               
               
            </div> -->
        </div>
        <div class="pay">
            <h1 class="pay-tit">Способы оплаты</h1>
            <ul class="pay-list">
                <li>
                    <h1 style="color: #FF6B00;">
                        Оплата на расчетный счет организации
                    </h1>
                    <img src="<?php print_r(get_template_directory_uri()); ?>/images/pay1.png" style="height: 250px;">
                </li>
                <li>
                    <h1 style="color: #FF6B00;">
                        Наличная оплата
                    </h1>
                    <img src="<?php print_r(get_template_directory_uri()); ?>/images/pay2.png" style="height: 250px;">
                </li>
                <li>
                    <h1 style="color: #FF6B00;">
                        Безналичная оплата
                    </h1>
                    <img src="<?php print_r(get_template_directory_uri()); ?>/images/pay3.png" style="height: 250px;">
                </li>
            </ul>
        </div>

    </main>







<?php get_footer(); ?>