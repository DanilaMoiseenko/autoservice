<?php
/*
Template Name: Main
*/
?>

   
<?php get_header(); ?>

   <main>
        <section class="wrapper-main">
            <div class="container1">
                <h1 class="big-title">
                    СТО <br>
                    ФОРТУНА
                </h1>
                <p class="title-text">
                <?php echo carbon_get_post_meta( get_the_ID(), 'top_info' ); ?>
                </p>
                <a class="record-btn" href="#rec">

                    Записаться на консультацию

                </a>
            </div>
        </section>
        <section class="wrapper-service" id="usl">
            <div class="container2">
                <h1>Услуги</h1>
                <div class="grid-service">
                    <div class="service-item">
                        <a href="<?php print_r(get_template_directory_uri()); ?>/dvigatel.html">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/service1.png">
                        </a>

                        <p>
                            <a href="<?php print_r(get_template_directory_uri()); ?>/dvigatel">
                                Двигатель
                            </a>
                        </p>
                    </div>
                    <div class="service-item">
                        <a href="transmission.html">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/service2.png">
                        </a>

                        <p>
                            <a href="<?php print_r(get_template_directory_uri()); ?>/transmission">
                                Трансмиссия
                            </a>
                        </p>
                    </div>
                    <div class="service-item">
                        <a href="<?php print_r(get_template_directory_uri()); ?>/vihlop.html">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/service3.png">
                        </a>

                        <p>
                            <a href="<?php print_r(get_template_directory_uri()); ?>/vihlop.html">
                                Выхлопная <br>
                                система
                            </a>
                        </p>

                    </div>
                    <div class="service-item">
                        <a href="<?php print_r(get_template_directory_uri()); ?>/podveska.html">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/service4.png">
                        </a>

                        <p>
                            <a href="<?php print_r(get_template_directory_uri()); ?>/podveska.html">
                                Подвеска
                            </a>
                        </p>
                    </div>
                    <div class="service-item">
                        <a href="<?php print_r(get_template_directory_uri()); ?>/tormoz.html">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/service5.png">
                        </a>

                        <p>
                            <a href="<?php print_r(get_template_directory_uri()); ?>/tormoz.html">
                                Тормозная <br>
                                система
                            </a>
                        </p>

                    </div>
                    <div class="service-item">
                        <a href="<?php print_r(get_template_directory_uri()); ?>/rul.html">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/service6.png">
                        </a>

                        <p>
                            <a href="<?php print_r(get_template_directory_uri()); ?>/rul.html">
                                Рулевое <br>
                                управление
                            </a>
                        </p>
                    </div>
                    <div class="service-item">
                        <a href="<?php print_r(get_template_directory_uri()); ?>/diagnos">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/service7.png">
                        </a>
                        <p>
                            <a href="<?php print_r(get_template_directory_uri()); ?>/diagnos">
                                Диагностика <br>
                                автомобиля
                            </a>
                        </p>
                    </div>
                    <div class="service-item">
                        <a href="<?php print_r(get_template_directory_uri()); ?>/toplivo.html">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/service8.png">
                        </a>
                        <p>
                            <a href="<?php print_r(get_template_directory_uri()); ?>/toplivo.html">
                                Топливная <br>
                                система
                            </a>
                        </p>

                    </div>
                </div>
            </div>
        </section>
        <section class="wrapper-serv">
            <div class="container3">
                <h1>Обслуживаем марки автомобилей</h1>
                <div class="grid-serv">
                    <div class="first-row">
                        <div class="serv-item">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/auto1.png">
                        </div>
                        <div class="serv-item">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/auto2.png">
                        </div>
                        <div class="serv-item">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/auto3.png">
                        </div>
                        <div class="serv-item">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/auto4.png">
                        </div>
                        <div class="serv-item">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/auto5.png">
                        </div>
                        <div class="serv-item no-border-right">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/auto6.png">
                        </div>
                    </div>
                    <div class="second-row">
                        <div class="serv-item">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/auto7.png">
                        </div>
                        <div class="serv-item">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/auto8.png">
                        </div>
                        <div class="serv-item">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/auto9.png">
                        </div>
                        <div class="serv-item">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/auto10.png">
                        </div>
                        <div class="serv-item">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/auto11.png">
                        </div>
                        <div class="serv-item no-border-right">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/auto12.png">
                        </div>
                    </div>
                    <div class="third-row">
                        <div class="serv-item">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/auto13.png">
                        </div>
                        <div class="serv-item">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/auto14.png">
                        </div>
                        <div class="serv-item">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/auto15.png">
                        </div>
                        <div class="serv-item">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/auto16.png">
                        </div>
                        <div class="serv-item">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/auto17.png">
                        </div>
                        <div class="serv-item no-border-right">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/auto18.png">
                        </div>
                    </div>
                    <div class="fourth-row">
                        <div class="serv-item">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/auto19.png">
                        </div>
                        <div class="serv-item">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/auto20.png">
                        </div>
                        <div class="serv-item">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/auto21.png">
                        </div>
                        <div class="serv-item">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/auto22.png">
                        </div>
                        <div class="serv-item">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/auto23.png">
                        </div>
                        <div class="serv-item no-border-right">
                            <img src="<?php print_r(get_template_directory_uri()); ?>/images/auto24.png">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="rec">
            <div class="container4">
                <form id='main-form' action="<?php print_r(get_template_directory_uri()); ?>/mail.php" method="post">
                    
                <div class="grid-app">
                    <h1>Оставьте заявку на нашем сайте</h1>
                    <div class="fio">
                        <p>Ваше ФИО:</p>
                        <input type="text" required name='user_name' placeholder="Иванов Иван" class="connect-inp">
                    </div>
                    <div class="tel">
                        <p>Ваш телефон</p>
                        <input type="text" required name='user_phone' placeholder="+7 (951) 353-66-99" class="connect-inp">
                    </div>
                    <div class="comm">
                        <p>Комментарий</p>
    
                        <textarea name="user_comment"  class="comm-inp" cols="24" rows="4"></textarea>
                    </div>
                    <button class="disc" type="submit" name="otprav">
                        Узнать
                    </button>
                    <div class="rules">

                        <input type="checkbox" checked required>
                        <span>
                            Нажимая на кнопку, вы соглашаетесь с <span class='underline'>
                                <a href="<?php print_r(get_template_directory_uri()); ?>/confid.html" style="text-decoration:none;color:black">
                                    политикой
                                конфиденциальности
                                </a>
                            </span>
                             и
                              <span class='underline'>
                                <a href="<?php print_r(get_template_directory_uri()); ?>/confid.html" style="text-decoration:none;color:black">  
                                правилами обработки персональных
                                данных
                            </a>
                            </span>
                        </span>
                    </div>
                </div>
</form>
            </div>
        </section>
    </main>


    <?php get_footer(); ?>