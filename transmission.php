<?php
/*
Template Name: Transmission
*/
?>

   
<?php get_header(); ?>

<main>
            <div class="container6">
                <div class="grid-p">
                    <h1>Ремонт трансмиссии</h1>
                    <img src="<?php print_r(get_template_directory_uri()); ?>/images/transm.png">
                    <div class="def">
                        <p>
                            Трансмиссия легковых автомобилей нуждается в периодическом обслуживании. Она находится под
                            влиянием множества негативных факторов – неправильный выжим сцепления, излишне быстрый
                            разгон, попадание в многочисленные дорожные ямы, агрессивная манера езды. Всё это приводит к
                            появлению неисправностей </p>
                        <p>
                            Ремонт трансмиссии легковых автомобилей включает:
                            Проверку свободного хода педалей;
                            Замену износившихся шестерней в коробке передач;
                            Замену элементов сцепления;
                            Замену износившихся узлов в карданной передаче и крестовине дифференциала.

                        </p>
                    </div>
                    <div class="sign">
                        <p>Текущий ремонт трансмиссии начинается с проверки состояния всех её узлов.
                            Специалисты проверяют наличие утечек технических жидкостей и масел, изучают наличие
                            посторонних звуков, оценивают правильность переключения передач, отслеживают наличие
                            скрежета, проверяют работу сцепления и работоспособность подвески с оценкой степени её
                            износа.
                        </p>
                        <h2 style="color: #FF6B00;">Вот лишь некоторые признаки, указывающие на проблемы с трансмиссией:
                        </h2>
                        <ul class="list-p">
                            <li>
                                Сложности с переключением передач;
                            </li>
                            <li>
                                Западание педали сцепления;
                            </li>
                            <li>
                                Наличие хруста при поворотах;
                            </li>
                            <li>
                                Наличие люфта полуосей;
                            </li>
                            <li>
                                Скрежет при переключении скоростей;
                            </li>
                            <li>
                                Посторонние звуки из механизма сцепления;

                            </li>
                            <li>
                                Видны протечки масла из коробки передач;
                            </li>
                            <li>
                                При передвижении по сложным участкам слышны металлические стуки.
                            </li>
                            <li>
                                Ремонт трансмиссии переднеприводного автомобиля включает работы по проверке ШРУСов. В
                                заднеприводных моделях проверяется механизмы подключения мостов.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <section>
                <div class="price price-4">
                    <a href="#form" style="display: inline-block; text-decoration: none;">

                    <div class="price-item">
                        Замена сцепления
                        <?php echo carbon_get_post_meta( get_the_ID(), 'zam_scep' ); ?>
                    </div>
                </a>
                    <a href="#form" style="display: inline-block; text-decoration: none;">

                    <div class="price-item">
                        Замена карданного вала 
                        <?php echo carbon_get_post_meta( get_the_ID(), 'zam_kard' ); ?>
                    </div>
                </a>
                    <a href="#form" style="display: inline-block; text-decoration: none;">

                    <div class="price-item">
                        Замена маховика 
                        <?php echo carbon_get_post_meta( get_the_ID(), 'zam_mah' ); ?>
                    </div>
                </a>
                    <a href="#form" style="display: inline-block; text-decoration: none;">

                    <div class="price-item">
                        Переборка АКПП 
                        <?php echo carbon_get_post_meta( get_the_ID(), 'perebor_akpp' ); ?>
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
                                    <option>Замена сцепления</option>
                                    <option>Замена карданного вала</option>
                                    <option>Замена маховика</option>
                                    <option> Переборка АКПП</option>
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