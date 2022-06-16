<?php
/*
Template Name: Rulevoe
*/
?>

   
<?php get_header(); ?>
<main>
        <div class="container6">
            <div class="grid-p">
                <h1 class="rul-h">Ремонт рулевого управления</h1>
                <img src="<?php print_r(get_template_directory_uri()); ?>/images/rul.png">
                <div class="def">
                    <p>
                        Под рулевым управлением подразумевают комплекс механизмов, отвечающих за связь между рулевым
                        колесом и колесами авто. Рулевое управление относят к самым важным системам автомобиля.
                    <p>
                        Под рулевым управлением подразумевают комплекс механизмов, отвечающих за связь между рулевым
                        колесом и колесами авто. Рулевое управление относят к самым важным системам автомобиля.
                    </p>
                    <p>
                        Поломки рулевого управления, как и тормозной системы, относят к наиболее серьезным
                        неисправностям. После повсеместного внедрения на современных авто реечного рулевого механизма
                        список возможных поломок рулевого управления стал намного короче.
                    </p>
                </div>
                <div class="sign">
                    <h2 style="color: #FF6B00;">Наиболее распространенными поломками рулевого управления являются:
                    </h2>
                    <ul class="list-p">
                        <li>
                            выход из строя подшипника рулевого вала;
                        </li>
                        <li>
                            износ передающей пары;
                        </li>
                        <li>
                            износ или разрушение шарниров наконечников рулевых тяг;
                        </li>
                        <li>
                            разгерметизация рулевого механизма.
                        </li>
                        <li>
                            Чаще всего встречается выход из строя шарового шарнира наконечника рулевой тяги.
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <section>
            <div class="price price-4">
                <a href="#form" style="display: inline-block; text-decoration: none;">
                <div class="price-item">
                    Замена маятника 
                    <?php echo carbon_get_post_meta( get_the_ID(), 'zam_mayt' ); ?>
                </div>
            </a>
                <a href="#form" style="display: inline-block; text-decoration: none;">
                <div class="price-item">
                    Замена рулевой колонки 
                    <?php echo carbon_get_post_meta( get_the_ID(), 'zam_kolon' ); ?>
                </div>
            </a>
                <a href="#form" style="display: inline-block; text-decoration: none;">
                <div class="price-item">
                    Замена рулевой рейки 
                    <?php echo carbon_get_post_meta( get_the_ID(), 'zam_rejki' ); ?>
                </div>
            </a>
                <a href="#form" style="display: inline-block; text-decoration: none;">
                <div class="price-item">
                    Замена рулевой машинки 
                    <?php echo carbon_get_post_meta( get_the_ID(), 'zam_masch' ); ?>
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
                                <option> Замена маятника</option>
                                <option>Замена рулевой колонки</option>
                                <option> Замена рулевой рейки</option>
                                <option>Замена рулевой машинки</option>
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