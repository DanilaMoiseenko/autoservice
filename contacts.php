<?php
/*
Template Name: Contacts
*/
?>

   
<?php get_header(); ?>

<main>

<div class="contact-container">
    <h1>Контакты</h1>
    <div class="cont-data">
        <ul class="data-list">
            <li>
                Адрес: <?php
    echo carbon_get_theme_option( 'site_adress');
?>
            </li>
            <li>
                Телефон: <?php
    echo carbon_get_theme_option( 'site_phone');
?>
            </li>
            <li>
                Email: <?php
    echo carbon_get_theme_option( 'site_email');
?>
            </li>
        </ul>
    </div>
    <div class="work-days">
        <h1>Режим работы</h1>
        <div class="schedule">
            Понедельник-Cуббота <br>
            9:00-18:00
        </div>
    </div>
 <form id='main-form' action="<?php print_r(get_template_directory_uri()); ?>/mail.php" method="post">
    <div class="review">
      
        <h1>Оставьте отзыв!</h1>
        <input type="text" class="name-r" required name='user_name' placeholder="Ваше имя:">
        <input type="text" class="num-r" required name='user_phone' placeholder="Ваш номер телефона:">
        <textarea  class="comm-r" cols="24" rows="4" required name='user_comment' placeholder="Комментарий:"></textarea>

        <div class="otziv">
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
            </span> <br>
            <button class="disc-r" style="margin-top:20px"  type="submit" name="otprav">
                Отправить отзыв
            </button>

        </div>
    
    </div></form>
</div>
</main>


    <?php get_footer(); ?>