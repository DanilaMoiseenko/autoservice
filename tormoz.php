<?php
/*
Template Name: Tormoz
*/
?>

   
<?php get_header(); ?>

<main>
        <div class="container6">
            <div class="grid-p">
                <h1 class="rul-h">Ремонт тормозной системы</h1>
                <img src="<?php print_r(get_template_directory_uri()); ?>/images/tormoz.png">
                <div class="def">
                    <p>
                        Тормозная система является одной из важнейших в машине, она в первую очередь отвечает за
                        безопасность. Замена тормозных колодок это регулярная и обязательная процедура, их состояние
                        влияет на качество и скорость торможения, длину тормозного пути. Средний срок службы тормозных
                        колодок на автомобилях с МКПП-30-50000 км, АКПП – 25-30000 км.
                    <p>
                        К сожалению невозможно точно сказать когда потребуется замена – срок службы сильно зависит от
                        стиля вождения, качества дорог, погодных условий. Тормозные диски изнашиваются медленнее
                        колодок. Как правило, замена дисков совпадает со второй сменой колодок.
                    </p>

                </div>
                <div class="sign">
                    <h2 style="color: #FF6B00;">Признаки износа тормозных колодок и тормозных дисков:

                    </h2>
                    <ul class="list-p">
                        <li>
                            автомобиль тормозит слишком слабо или очень резко;
                        </li>
                        <li>
                            при нажатии на тормоз ощущаются «биения», стук;
                        </li>
                        <li>
                            появление пыли и металлической стружки на колодках;
                        </li>
                        <li>
                            скрип, свист тормозов;
                        </li>
                        <li>
                            снижение уровня тормозной жидкости;
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <section>
            <div class="price price-4">
                <a href="#form" style="display: inline-block; text-decoration: none;">
                <div class="price-item" style="font-size: 20px;">
                    Замена колодок 
                    <?php echo carbon_get_post_meta( get_the_ID(), 'zam_kolok' ); ?>
                </div>
            </a>
                <a href="#form" style="display: inline-block; text-decoration: none;">
                <div class="price-item" style="font-size: 20px;">
                    Замена барабана  
                    <?php echo carbon_get_post_meta( get_the_ID(), 'zam_barab' ); ?>
                </div>
            </a>
                <a href="#form" style="display: inline-block; text-decoration: none;">
                <div class="price-item" style="font-size: 20px;">
                    Замена тормозного диска 
                    <?php echo carbon_get_post_meta( get_the_ID(), 'zam_disk' ); ?>
                 </div>
                </a>
                 <a href="#form" style="display: inline-block; text-decoration: none;">
                <div class="price-item" style="font-size: 20px;">
                    Прокачка тормозной системы 
                    <?php echo carbon_get_post_meta( get_the_ID(), 'zam_ts' ); ?>
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
                                <option> Замена колодок </option>
                                <option> Замена барабана</option>
                                <option> Замена тормозного диска</option>
                                <option>Прокачка тормозной системы</option>
                            </select>
                        </form>
                    </div>
                   <button class="disc-p" type="submit" name="otprav">
                        Узнать
                    </button>
                    <div class="rules-p">

                        <input type="checkbox" checked required>
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