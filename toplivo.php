<?php
/*
Template Name: Toplivo
*/
?>

   
<?php get_header(); ?>

<main>
        <div class="container6">
            <div class="grid-p grid-t">
                <h1 class="rul-h">Ремонт топливной системы</h1>
                <img src="<?php print_r(get_template_directory_uri()); ?>/images/toplivo.png">
                <div class="def">
                    <p>
                        Система компонентов, которая отвечает за хранение топлива и подачу топливно-воздушной смеси в
                        цилиндры двигателя. Выход из строя частей топливной системы можно предположить по симптомам или
                        при проведении диагностики двигателя.

                    </p>

                </div>
                <div class="sign">
                    <h2 style="color: #FF6B00;">
                        При возникновении или обнаружении указанных проблем, нужно серьезно задуматься о диагностике
                        топливной системы вашего автомобиля:
                    </h2>
                    <ul class="list-p">
                        <li>
                            двигатель не заводится, хотя стартер крутит;

                        </li>
                        <li>
                            двигатель плохо заводится;
                        </li>
                        <li>
                            двигатель работает неровно, «троит»;
                        </li>
                        <li>
                            явно повысился расход топлива;
                        </li>
                        <li>
                            из выхлопной трубы идет черный дым;
                        </li>
                        <li>
                            при нажатии на педаль газа обороты двигателя не растут;

                        </li>
                        <li>
                            пахнет бензином или соляркой;
                        </li>
                        <li>
                            на приборной панели горит индикатор «проверь двигатель».
                        </li>

                    </ul>
                </div>

            </div>
        </div>
        <section>
            <div class="price price-4">
                <a href="#form" style="display: inline-block; text-decoration: none;">
                <div class="price-item">
                    Замена карбюратора 
                    <?php echo carbon_get_post_meta( get_the_ID(), 'zam_karb' ); ?>
                </div>
            </a>
                <a href="#form" style="display: inline-block; text-decoration: none;">
                <div class="price-item">
                    Замена фильтра 
                    <?php echo carbon_get_post_meta( get_the_ID(), 'zam_filter' ); ?>
                 </div>
                </a>
                 <a href="#form" style="display: inline-block; text-decoration: none;">
                <div class="price-item">
                    Замена бензобака 
                    <?php echo carbon_get_post_meta( get_the_ID(), 'zam_benzo' ); ?>
                 </div>
                </a>
                 <a href="#form" style="display: inline-block; text-decoration: none;">
                <div class="price-item">
                    Замена топливного датчика 
                    <?php echo carbon_get_post_meta( get_the_ID(), 'zam_datch' ); ?>
                </div>
            </a>
            </div>
        </section>
        <section id="rec">
            <div class="container7">
               <form id='main-form' action="<?php print_r(get_template_directory_uri()); ?>/usluga.php" method="post">
                <div class="grid-app-p">
                    <h1 id="form">Оставьте заявку на ремонт автомобиля</h1>
                    <div class="fio-p">
                        <p>Ваше ФИО:</p>
                        <input type="text" required name='user_name' placeholder="Иванов Иван" class="connect-inp-p">
                    </div>
                    <div class="tel-p">
                        <p>Ваш телефон</p>
                        <input type="text" required name='user_phone' placeholder="+7 (951) 353-66-99" class="connect-inp-p">
                    </div>
                    <div class="comm-p">
                        <p>Комментарий</p>
                        <!-- <input type="text" class="comm-inp-p"> -->
                        <textarea   name='user_comment' class="comm-inp-p" cols="24" rows="4"></textarea>

                    </div>
                    <div class="choice-p">
                        <p>Выберите услугу:</p>
                        <!-- <input type placeholder="Выбор услуги" class="connect-inp"> -->
                        <form>
                            <select name="user_usl" class="connect-inp-p" required>
                                <option value="" disabled selected hidden>Выбор услуги</option>
                                <option>Замена карбюратора</option>
                                <option>Замена фильтра</option>
                                <option> Замена бензобака</option>
                                <option>Замена топливного датчика</option>

                            </select>
                        </form>
                    </div>
                   <button class="disc-p" type="submit" name="otprav">
                        Узнать
                    </button>
                    <div class="rules-p">

                        <input type="checkbox" checked>
                        <span>
                            Нажимая на кнопку, вы соглашаетесь с <span class='underline'>
                                <a href="confid.html" style="text-decoration:none;color:black">
                                    политикой
                                конфиденциальности
                                </a>
                            </span>
                             и
                              <span class='underline'>
                                <a href="confid.html" style="text-decoration:none;color:black">  
                                правилами обработки персональных
                                данных
                            </a>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        let list = document.querySelectorAll('option')
        let btns = document.querySelectorAll('.price-item')
        for(let i =0; i< btns.length; i++){
            btns[i].addEventListener('click',()=>{
                list[i+1].selected = true
            })
        }
    </script>


    <?php get_footer(); ?>