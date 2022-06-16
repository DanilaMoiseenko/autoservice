<?php
/*
Template Name: Diagnostica
*/
?>

   
<?php get_header(); ?>

<main>
        <div class="container6">
            <div class="grid-p">
                <h1 class="rul-h">Диагностика</h1>
                <img src="<?php print_r(get_template_directory_uri()); ?>/images/tormoz.png">
                <div class="def">
                    <p>
                        Диагностика автомобиля проводится, когда требуется выявить поломки на ранней стадии, что
                        помогает владельцам сэкономить на последующем ремонте. Еще таким способом сужается круг поиска
                        скрытой неисправности, от которой страдает комфортность управления авто. Для покупателя
                        техническая проверка позволяет узнать состояние ключевых узлов до совершения сделки, чтобы быть
                        уверенным в оправданности вложения или иметь обоснованные причины для торга. Рассмотрим, что
                        входит в диагностику автомобиля.

                    </p>

                </div>
                <div class="sign">
                    <p>
                        Во время процедуры мастер осматривает инструментальным путем элементы авто, оценивает износ,
                        функциональность и люфты между деталями. Некоторые параметры проверяет специальная программа в
                        компьютере, присоединяемая к ЭБУ машины через соответствующий разъем.
                    </p>
                    <p>
                        Если при езде слышен стук, вой, лязганье или чрезмерная вибрация, то диагностировать требуется
                        ходовую часть. Нестабильная работа ДВС на холостом ходу, сложные утренние запуски двигателя,
                        потеря мощности или функционирование не на всех цилиндрах нуждаются в проведении компьютерной
                        диагностики мотора. Визг при торможении, наличие вокруг диска металлической стружки, удлинение
                        тормозного пути, сильные вибрации при нажатии на педаль тормоза требуют проверки системы
                        тормозов.
                    </p>
                    <p>
                        Сколько времени занимает диагностика автомобиля, зависит от вида работ. Например, определить
                        состояние ходовой части можно за 20-40 минут. Считывание ошибок ЭБУ и выявление неполадок в
                        системе зажигания занимает около 30 минут. Есть комплексная диагностика, длящаяся один час, но
                        тогда Вы получаете полную картину по всем ключевым узлам машины, включая оптику, электрику,
                        кузов, систему охлаждения и кондиционирования.
                    </p>
                </div>

            </div>
        </div>
        <section>
            <div class="price price-2">
                <a href="#form" style="display: inline-block; text-decoration: none;">
                <div class="price-item">
                    Диагностика 1 узла 
                    <?php echo carbon_get_post_meta( get_the_ID(), 'diag_1' ); ?>
                </div>
            </a>
                <a href="#form" style="display: inline-block; text-decoration: none;">
                <div class="price-item">
                    Диагностика всех узлов 
                    <?php echo carbon_get_post_meta( get_the_ID(), 'diag_all' ); ?>
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
                            <select  name='user_usl' class="connect-inp-p" required>
                                <option value="" disabled selected hidden>Выбор услуги</option>
                                <option>Диагностика 1 узла </option>
                                <option>Диагностика всех узлов</option>
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
                </form>
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