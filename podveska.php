<?php
/*
Template Name: Podveska
*/
?>

   
<?php get_header(); ?>
<main>
        <div class="container6">
            <div class="grid-p">
                <h1>Ремонт подвески</h1>
                <img src="<?php print_r(get_template_directory_uri()); ?>/images/podveska.png">
                <div class="def">
                    <p>
                        Основное назначение подвески автомобиля: она увеличивает комфорт (плавность хода), устойчивость
                        в движении (способность противодействовать заносам и опрокидыванию) и проходимость машины.
                    </p>
                    <p>
                        Срок службы подвески сильно зависит от качества дорог, стиля вождения, воздействия факторов
                        окружающей среды (морозы, реагенты, осадки).
                    </p>
                </div>
                <div class="sign">
                    <h2 style="color: #FF6B00;">Признаки неисправности элементов подвески: </h2>
                    <ul class="list-p">
                        <li>
                            Автомобиль ведет в одну сторону при движении
                        </li>
                        <li>
                            Ощущается каждый ухаб, кочка на дороге, автомобиль раскачивается – это может указывать на то
                            что амортизаторы или стойки подвески нуждаются в замене
                        </li>
                        <li>
                            Неравномерный износ шин
                        </li>
                        <li>
                            Проседание одного угла машины ниже других
                        </li>
                        <li>
                            При разгоне наблюдается значительный крен автомобиля вперед, назад или вбок
                        </li>
                        <li>
                            Вибрации, отдающие в руль или кузов

                        </li>
                        <li>
                            Большой люфт рулевого колеса
                        </li>
                        <li>
                            Слышны стуки при езде по неровной дороге
                        </li>
                        <li>
                            Машина хуже слушается руля

                        </li>
                        <li>
                            Проблемы с подвеской могут сильно повлиять на вашу способность управлять транспортным
                            средством, особенно при остановке или повороте. Потеря устойчивости в повороте может
                            привести к опрокидыванию автомобиля.

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <section>
            <div class="price">
                <a href="#form" style="display: inline-block; text-decoration: none;">
                <div class="price-item">
                    Замена амортизатора 
                    <?php echo carbon_get_post_meta( get_the_ID(), 'zam_amort' ); ?>
                </div>
            </a>
                <a href="#form" style="display: inline-block; text-decoration: none;">
                <div class="price-item">
                    Замена стабилизатора 
                    <?php echo carbon_get_post_meta( get_the_ID(), 'zam_stab' ); ?>
                </div>
            </a>
                <a href="#form" style="display: inline-block; text-decoration: none;">
                <div class="price-item">
                    Замена балки  
                    <?php echo carbon_get_post_meta( get_the_ID(), 'zam_balk' ); ?>
                </div>
            </a>
                <a href="#form" style="display: inline-block; text-decoration: none;">
                <div class="price-item">
                    Замена ступицы 
                    <?php echo carbon_get_post_meta( get_the_ID(), 'zam_stup' ); ?>
                </div>
            </a>
                <a href="#form" style="display: inline-block; text-decoration: none;">
                <div class="price-item">
                    Замена полуоси 
                    <?php echo carbon_get_post_meta( get_the_ID(), 'zam_polu' ); ?>
                </div>
            </a>
                <a href="#form" style="display: inline-block; text-decoration: none;">
                <div class="price-item">
                    Замена реактивных тяг 
                    <?php echo carbon_get_post_meta( get_the_ID(), 'zam_tyag' ); ?>
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
                        <textarea  name='user_comment' class="comm-inp-p" cols="24" rows="4"></textarea>

                    </div>
                    <div class="choice-p">
                        <p>Выберите услугу:</p>
                        <!-- <input type placeholder="Выбор услуги" class="connect-inp"> -->
                        <form>
                            <select name="user_usl" class="connect-inp-p" required>
                                <option value="" disabled selected hidden>Выбор услуги</option>
                                <option>Замена амортизатора</option>
                                <option>Замена стабилизатора</option>
                                <option>Замена балки</option>
                                <option> Замена ступицы</option>
                                <option>   Замена полуоси</option>
                                <option>Замена реактивных тяг</option>
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