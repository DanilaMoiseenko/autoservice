<footer>
        <div class="container5">
            <div class="foot-item">
                <h1 style="text-decoration: none">Разделы сайта</h1>
                <p class="underline">
                    <a href="<?php echo get_home_url();?>#usl">
                        Услуги
                    </a>
                </p>
                <p class="underline"> <a href="<?php print_r(get_template_directory_uri()); ?>/about">
                        О нас
                    </a></p>
                <p class="underline">
                    <a href="<?php print_r(get_template_directory_uri()); ?>/contacts">
                        Контакты
                    </a>
                </p>
            </div>
            <div class="foot-item">
                <h1 class="underline" style="text-decoration: none">Информация</h1>
                <p>2022. Информация на сайте<br> не является публичной офертой.</p>
                <p class="underline">
                    <a href="<?php print_r(get_template_directory_uri()); ?>/confid.html" style="text-decoration:none;color:white">
                        Политика конфиденциальности<br> и правила обработки персональных данных 
                </p>
                </a>
                </p>
            </div>
            <div class="foot-item">
                <h1 class="underline" style="text-decoration: none">Адрес</h1>
                <p><?php
    echo carbon_get_theme_option( 'site_adress');
?><br>
                    Тел.: <?php
    echo carbon_get_theme_option( 'site_phone');
?>
                </p>
                <?php
    echo carbon_get_theme_option( 'site_map');
?>
                <!-- <div class='yandmap' style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/org/fortuna_1/13543937317/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Фортуна-1</a><a href="https://yandex.ru/maps/39/rostov-na-donu/category/car_dealership/184105322/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Автосалон в Ростове‑на‑Дону</a><iframe src="https://yandex.ru/map-widget/v1/-/CCUBaUxXWA" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>            </div> -->
            </div>

        </div>
        <p class="company">
            © СТО “Фортуна” , 2022
        </p>
    </footer>
 <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    <script src="<?php print_r(get_template_directory_uri()); ?>/anime.min.js"></script>
    <script src="<?php print_r(get_template_directory_uri()); ?>/script.js"></script>


    <?php wp_footer(); ?>
</body>

</html>