<?php
/*
Template Name: Vihlop
*/
?>

   
<?php get_header(); ?>

<main>
        <div class="container6">
            <div class="grid-p">
                <h1>Ремонт выхлопной системы</h1>
                <img src="<?php print_r(get_template_directory_uri()); ?>/images/vihlop.png">
                <div class="def">
                    <p>
                        Глушитель – необходимый элемент выхлопной системы, предназначенный для снижения уровня шума от
                        выходящих газов. Он состоит из металлического корпуса с перегородками и камерами внутри, которые
                        создают сложные каналы. Именно в них звуковые колебания поглощаются до допустимых значений и
                        преобразуются в тепловую энергию.

                    <p>
                        От качества работы глушителя зависит комфорт сидящих в автомобиле людей, а также их безопасность
                        – повышенный шум всегда отвлекает водителя от езды. Нередко эта важная для любого авто деталь
                        приходит в негодность из-за коррозии, ударов по ней или прогорания.


                    </p>
                    <p>
                        Понять, что нужен ремонт или замена глушителя, можно по характерному «реву» из-под днища или
                        капота транспортного средства, а также по утечке отработанных газов.
                    </p>
                </div>
            </div>
        </div>
        <section>
            <div class="price price-4">
                <a href="#form" style="display: inline-block; text-decoration: none;">
                <div class="price-item" style="font-size: 20px;">
                    Замена прокладки 
                    <?php echo carbon_get_post_meta( get_the_ID(), 'zam_prokl' ); ?>
                </div>
            </a>
                <a href="#form" style="display: inline-block; text-decoration: none;">
                <div class="price-item" style="font-size: 20px;">
                    Удаление болтов из коллектора 
                    <?php echo carbon_get_post_meta( get_the_ID(), 'del_bolt' ); ?>
                </div>
            </a>
                <a href="#form" style="display: inline-block; text-decoration: none;">
                <div class="price-item" style="font-size: 20px;">
                    Сварочные работы глушителя 
                    <?php echo carbon_get_post_meta( get_the_ID(), 'svarka' ); ?>
                </div>
            </a>
                <a href="#form" style="display: inline-block; text-decoration: none;">
                <div class="price-item" style="font-size: 20px;">
                    Замена частей глушителя
                    <?php echo carbon_get_post_meta( get_the_ID(), 'zam_glush' ); ?>
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
                                <option>Замена прокладки</option>
                                <option>Удаление болтов из коллектора</option>
                                <option>Сварочные работы глушителя</option>
                                <option> Замена частей глушителя</option>
                            
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