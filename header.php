<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eat Pray Travel With Saya</title>
    <?php wp_head(); ?>
</head>
<body>
<?php
  $header_social = carbon_get_theme_option('header-social');
?>
<header>
        <div class="container">
            <div class="header-wrapper">
                <div class="logo logo-mobile">
                    <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'site_logo_one' )); ?>" alt="Логотип карты + самолет">
                </div>
                <div class="header-social header-social__desktop">
                    <ul>
                    <?php if ($header_social) : ?>
                        <?php foreach ($header_social as $attribute) : ?>
                            <li><a Target = "_blank" href="<?php echo $attribute['header_icon_link']; ?>"><img loading="lazy" src="<?php echo wp_get_attachment_image_url($attribute['header_icon'], 'full'); ?>" alt="Иконка"></a></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </div>
                <div class="logo">
                    <img src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'site_logo_two' )); ?>" alt="Eat Pray Travel With Saya">

                    <div class="header-social header-social__mobile">
                        <ul>
                            <?php if ($header_social) : ?>
                                <?php foreach ($header_social as $attribute) : ?>
                                    <li><a Target = "_blank" href="<?php echo $attribute['header_icon_link']; ?>"><img loading="lazy" src="<?php echo wp_get_attachment_image_url($attribute['header_icon'], 'full'); ?>" alt="Иконка"></a></li>
                                <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="burger-menu" style="z-index: 999;">
            <a style="background:<?php echo carbon_get_theme_option( 'header_icon_color' ); ?>;" href="#" class="burger-menu_button">
              <span class="burger-menu_lines"></span>
            </a>
            
            <nav style="background:<?php echo carbon_get_theme_option( 'header_icon_background' ); ?>;" class="burger-menu_nav home__block-text">
              <a href="#home" class="burger-menu_link">Главная</a>
              <a href="#tours" class="burger-menu_link">Туры</a>
              <a href="#about" class="burger-menu_link">Познакомимся?</a>
              <a href="#contact" class="burger-menu_link">Контакты</a>
              <a href="#video" class="burger-menu_link">Видеогалерея</a>
            </nav>
            <div class="burger-menu_overlay"></div>
        </div>
    </header>