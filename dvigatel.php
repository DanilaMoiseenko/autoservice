<?php
/*
Template Name: Dvigatel
*/
?>

   
<?php get_header(); ?>

<main>
        <div class="container6">
            <div class="grid-p">
                <h1>Ремонт двигателя</h1>
                <img src="<?php print_r(get_template_directory_uri()); ?>/images/dvigatel.png" class="dvig">
                <div class="def">
                    <p>
                        Капитальный ремонт - это максимально возможное обновление (восстановление и/или замена) всех
                        узлов и агрегатов двигателя, что позволяет вернуть эксплуатационные и ресурсные показатели,
                        максимально приближенные к заводским. Это сложный и ответственный процесс, который предполагает
                        полную разборку двигателя с учетом его снятия с автомобиля.
                    </p>
                </div>
                <div class="sign">
                    <h2 style="color: #FF6B00;">Признаки некорректной работы двигателя, на которые стоит обратить внимание:
                    </h2>
                    <ul class="list-p">
                        <li>
                            Увеличился расход моторного масла (также как и внезапное повышение уровня масла).
                        </li>
                        <li>
                            Ошибка «Check Engine» на приборной панели.
                        </li>
                        <li>
                            Дым из выхлопной трубы становится сизого или синего цвета.
                        </li>
                        <li>
                            Потеря мощности, машина хуже ускоряется.
                        </li>
                        <li>
                            Стучание, гул, другие посторонние звуки при работе мотора.
                        </li>
                        <li>
                            Перегрев двигателя.

                        </li>
                        <li>
                            Повышенный расход топлива.
                        </li>
                        <li>
                            Двигатель плохо запускается, работает неровно, обороты на холостом ходу не устанавливаются.
                        </li>
                        <li>
                            Снижение уровня охлаждающей жидкости без видимых причин

                        </li>
                        <li>
                            Следы масла на выхлопной трубе.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <section>
            <div class="price">
                <a href="#form" style="display: inline-block; text-decoration: none;">
                    <div class="price-item" >
                        Капитальный ремонт 
                        <?php echo carbon_get_post_meta( get_the_ID(), 'kap_remont' ); ?>
                    </div>
                </a>
                <a href="#form" style="display: inline-block; text-decoration: none;">
                    <div class="price-item" >
                        Замена цепи 
                        <?php echo carbon_get_post_meta( get_the_ID(), 'zam_cepi' ); ?>
                    </div>
            </a>
            <a href="#form" style="display: inline-block; text-decoration: none;">
                <div class="price-item" >
                    Замена распредвала 
                    <?php echo carbon_get_post_meta( get_the_ID(), 'zam_raspred' ); ?>
                </div>
            </a>
            <a href="#form" style="display: inline-block; text-decoration: none;">
                <div class="price-item" >
                    Замена масла 
                    <?php echo carbon_get_post_meta( get_the_ID(), 'zam_masla' ); ?>
                </div>
            </a>
            <a href="#form" style="display: inline-block; text-decoration: none;">
                <div class="price-item" >
                    Замена свечей 
                    <?php echo carbon_get_post_meta( get_the_ID(), 'zam_svech' ); ?>
                </div>
            </a>
            <a href="#form" style="display: inline-block; text-decoration: none;">
                <div class="price-item" >
                    Замена поршневых колец 
                    <?php echo carbon_get_post_meta( get_the_ID(), 'zam_kolec' ); ?>
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
                            <select name="user_usl" class="connect-inp-p" id="dvig-form" required>
                                <option value="" disabled selected hidden>Выбор услуги</option>
                                <option >Капитальный ремонт</option>
                                <option > Замена цепи</option>
                                <option >Замена распредвала</option>
                                <option >  Замена масла</option>
                                <option > Замена свечей</option>
                                <option > Замена поршневых колец</option>
                            </select>
                        </form>
                    </div>
                     <button class="disc-p" type="submit" name="otprav">
                        Узнать
                    </button>
                    <div class="rules-p">

                        <input type="checkbox" required checked>
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
        let list = document.querySelectorAll('#dvig-form option')
        let btns = document.querySelectorAll('.price-item')
        for(let i =0; i< btns.length; i++){
            btns[i].addEventListener('click',()=>{
                list[i+1].selected = true
            })
        }
    </script>


    <?php get_footer(); ?>