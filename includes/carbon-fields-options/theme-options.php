<?php 

if (!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;
Container::make( 'theme_options', 'Основные настройки' )
  ->add_tab( 'Шапка сайта', [
      Field::make( 'image', 'site_logo_one', 'Логотип №1' )
      ->set_width(50),
      Field::make( 'image', 'site_logo_two', 'Логотип №2' )
      ->set_width(50),
      Field::make( 'complex', 'header-social', 'Социальные сети' )
      ->add_fields([
        Field::make( 'image', 'header_icon', 'Иконка' )
        ->help_text('Только формат SVG)')
        ->set_width(50),
        Field::make( 'text', 'header_icon_link', 'Ссылка' )
        ->help_text('Ссылка или Телефон(Формат tel:+7) или E-mail(Формат mailto:mail@mail.ru)')
        ->set_width(50),
      ]),
      Field::make( 'color', 'header_icon_color', 'Цвет Кнопки' )
      ->set_width(50),
      Field::make( 'color', 'header_icon_background', 'Фон Меню' )
      ->set_width(50),
  ]) 
  ->add_tab( 'Подвал сайта', [
    Field::make( 'text', 'footer_hoz', 'Кому принадлежит сайта' ),
    Field::make( 'text', 'footer_politic', 'Политика Конфиденциальности' ),
    Field::make( 'text', 'footer_prav', 'Права' ),
  ]) 
  ->add_tab( 'Главная', [
    Field::make( 'image', 'home-background', 'Фоновая картинка' ),
    Field::make( 'text', 'home-title', 'Заголовок' ),
    Field::make( 'rich_text', 'home-subtitle', 'Подзаголовок' )
      ->set_rows(4),
    Field::make( 'text', 'home_text_btn', 'Кнопка' )
    ->set_width(50),
    Field::make( 'color', 'home_color_btn', 'Цвет кнопки' )
    ->set_width(50),
    Field::make( 'text', 'home_slogan', 'Слоган' ),
    Field::make( 'complex', 'home_slider', 'Карточки с Видео' )
      ->add_fields([
      Field::make( 'text', 'home_slider_title_card', 'Название видео' ),
      Field::make( 'file', 'home_slider_img_card', 'Видео слайда' ),
      ]),
  ])
  ->add_tab( 'Туры', [
    Field::make( 'text', 'tours_title', 'Заголовок' ),
    Field::make( 'complex', 'tours_slider', 'Карточка Тура' )
      ->add_fields([
        Field::make( 'image', 'tours_background', 'Фоновая картинка' ),
        Field::make( 'text', 'tours_slider_title_card', 'Заголовок тура' )
        ->set_width(50),
        Field::make( 'textarea', 'tours_slider_subtitle_card', 'Подзаголовок тура' )
        ->set_rows(4)
        ->set_width(50),
        Field::make( 'text', 'tours_text_btn', 'Кнопка' )
        ->set_width(33),
        Field::make( 'text', 'tours_link_btn', 'Ссылка кнопки' )
        ->set_width(33),
        Field::make( 'color', 'tours_color_btn', 'Цвет кнопки' )
        ->set_width(33),
        Field::make( 'text', 'tours_where', 'Место тура\заголовок' ),
        Field::make( 'complex', 'tours_thesis', 'Тезисы тура' ) 
          ->add_fields([ 
            Field::make( 'text', 'tours_thesis_text', 'Тезисы тура' )
            ->set_width(50),
          ]),
        Field::make( 'complex', 'tours_galery', 'Фотографии из тура\не больше 6' ) 
          ->add_fields([ 
            Field::make( 'image', 'tours_galery_img', 'Фото из тура' )
            ->set_width(50),
            Field::make( 'text', 'tours_galery_text', 'Место на фото или Подпись' )
            ->set_width(50),
          ]),
        ]),
  ])
  ->add_tab( 'О Нас', [
    Field::make( 'text', 'about_title', 'Заголвоок' ),
    Field::make( 'textarea', 'about_subtitle', 'Подзаголовок' ),
    Field::make( 'image', 'about_image_1', 'Блок №1' )
    ->set_width(50),
    Field::make( 'textarea', 'about_subtitle_1', 'Текст' )
    ->set_width(50),
    Field::make( 'image', 'about_image_2', 'Блок №2' )
    ->set_width(50),
    Field::make( 'textarea', 'about_subtitle_2', 'Текст' )
    ->set_width(50),
    Field::make( 'image', 'about_image_3', 'Блок №3' )
    ->set_width(50),
    Field::make( 'textarea', 'about_subtitle_3', 'Текст' )
    ->set_width(50),
    Field::make( 'image', 'about_image_4', 'Блок №4' )
    ->set_width(50),
    Field::make( 'textarea', 'about_subtitle_4', 'Текст' )
    ->set_width(50),
    Field::make( 'image', 'about_image_5', 'Блок №5' )
    ->set_width(50),
    Field::make( 'textarea', 'about_subtitle_5', 'Текст' )
    ->set_width(50),
    Field::make( 'image', 'about_image_6', 'Блок №6' )
    ->set_width(50),
    Field::make( 'textarea', 'about_subtitle_6', 'Текст' )
    ->set_width(50),
    Field::make( 'image', 'about_image_7', 'Блок №7' )
    ->set_width(50),
    Field::make( 'textarea', 'about_subtitle_7', 'Текст' )
    ->set_width(50),


  ])
  ->add_tab( 'Контакты', [
    Field::make( 'image', 'contact_image', 'Фоновое изображение' ),
    Field::make( 'text', 'contact_title', 'Заголвоок' ),
    Field::make( 'textarea', 'contact_subtitle', 'Подзаголовок' ),
    Field::make( 'text', 'contact_text_btn', 'Кнопка' )
    ->set_width(50),
    Field::make( 'color', 'contact_color_btn', 'Цвет кнопки' )
    ->set_width(50),
    Field::make( 'file', 'contact_politic', 'Файл Политика Конфиденциальности' ),
  ]) 
  ->add_tab( 'Все Видео', [
    Field::make( 'complex', 'video_slider', 'Карточки с Видео' )
      ->add_fields([
        Field::make( 'file', 'video_slider_img_card', 'Видео слайда' )
      ]),
  ]) 

?>