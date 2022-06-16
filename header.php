<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php print_r(get_template_directory_uri()); ?>/images/logo.svg">
    <title>Сто Фортуна</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php print_r(get_template_directory_uri()); ?>/style.css">
    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(88870778, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/88870778" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
    <?php wp_head();?>
</head>

<body>

    <header>
        <a href="<?php echo get_home_url();?>">
            <img class="logo" src="<?php
    echo wp_get_attachment_image_url(carbon_get_theme_option( 'site_logo' ));
?>">
        </a>
        <nav>
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="<?php echo get_home_url();?>#usl" class="nav-link">
                        Услуги
                    </a>

                </li>
                <li class="nav-item">
                    <a href="<?php print_r(get_template_directory_uri()); ?>/about" class="nav-link">
                        О нас
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php print_r(get_template_directory_uri()); ?>/contacts" class="nav-link">
                        Контакты
                    </a>
                </li>
            </ul>
        </nav>
        <a href="<?php print_r(get_template_directory_uri()); ?>/contacts" class="call-btn">
            Позвонить
        </a>
        <div class="menu_small_icon">
            <div class="stick1"></div>
            <div class="stick2"></div>
            <div class="stick3"></div>
        </div>
        <div class="burger-menu">
            <div class="menu_small_item">
                <a href="#usl" class="bm-link">
                    Услуги
                </a>
            </div>
            <div class="menu_small_item">
                <a href="<?php print_r(get_template_directory_uri()); ?>/about" class="nav-link">
                    О нас
                </a>
            </div>
            <div class="menu_small_item">
                <a href="<?php print_r(get_template_directory_uri()); ?>/contacts" class="nav-link">
                    Контакты
                </a>
            </div>
            <div class="menu_small_item">
                <a href="<?php print_r(get_template_directory_uri()); ?>/contacts" class="nav-link">
                    Позвонить
                </a>
            </div>
        </div>
    </header>