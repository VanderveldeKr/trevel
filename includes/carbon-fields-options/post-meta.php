<?php

if (!defined('ABSPATH')) {
    exit;
  }  

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Contacts start
Container::make( 'post_meta', 'Контент на странице' )
    ->show_on_page(51)
    
    ->add_tab( 'Контакты', [
        Field::make( 'text', 'contact_title', 'Заголовок' ),
        Field::make( 'text', 'contact_name', 'Название компании' ),

        Field::make( 'text', 'contact_phone', 'Телефон' )
        ->set_width(33),
        Field::make( 'text', 'contact_phone_two', 'Телефон формата +381629353660' )
        ->set_width(33),
        Field::make( 'image', 'contact_phone_img', 'Картинка телефон' )
        ->set_width(33),

        Field::make( 'text', 'contact_mail', 'Электронная почта' )
        ->set_width(50),
        Field::make( 'image', 'contact_mail_img', 'Картинка почта' )
        ->set_width(50),

        Field::make( 'text', 'contact_adress', 'Адрес' ),
        Field::make( 'complex', 'contact_social', 'Социальные сети' )
        ->set_max(5)
        ->add_fields([
          Field::make( 'text', 'contact_social_link', 'Ссылка' )
          ->set_width(50)
          ->help_text('Ссылка должна быть полная'),
          Field::make( 'image', 'contact_social_img', 'Картинка' )
          ->set_width(50),
         ])
    ]);
// Contacts end

// Privacy policy start
Container::make( 'post_meta', 'Контент на странице' )
->show_on_page(3)

    ->add_tab( 'Политика ', [
        Field::make( 'complex', 'policy_block', 'Добавить блок' )
        ->add_fields([
          Field::make( 'text', 'policy_paragraph', 'Название пункта(пункт)' ),
          Field::make( 'rich_text', 'policy_text', 'Описание пункта' ),
          ])
          ->help_text('Заголовок фиксированый - выводится из заголовка страницы. | Не забывайте выравнивать по левому краю')
    ]);
// Privacy policy end

// Services start
Container::make( 'post_meta', 'Контент на странице Услуги' )
    ->show_on_page(44)
    
    ->add_tab( 'Основная информация', [
        Field::make( 'text', 'services_title', 'Заголовок' ),
        Field::make( 'textarea', 'services_subtitle', 'Подзаголовок | Текст' )
        ->help_text('Не забывайте выравнивать по левому краю'),
        Field::make( 'text', 'services_subtitle_footer', 'Текст | Подвал страницы' ),
    ])
    ->add_tab( 'Карточка услуг', [
        Field::make( 'complex', 'services_block', 'Карточка услуги' )
        ->add_fields([
          Field::make( 'text', 'services_block_title', 'Карточка. Заголовок' ),
          Field::make( 'rich_text', 'services_block_text', 'Карточка. Текст' ),
          Field::make( 'image', 'services_img', 'Карточка. Картинка' ),
         ])
    ]);
// Services end

// About start
Container::make( 'post_meta', 'Контент на странице О нас' )
    ->show_on_page(38)
    
    ->add_tab( 'Блок с текстом', [
        Field::make( 'complex', 'about_block', 'О нас. Блок' )
        ->add_fields([
          Field::make( 'text', 'about_block_title', 'О нас. Заголовок' ),
          Field::make( 'rich_text', 'about_block_text', 'О нас. Текст' ),
         ])
    ]);
// About end

// Insights start
Container::make( 'post_meta', 'Контент на странице Insights' )
    ->show_on_page(126)
    
    ->add_tab( 'Основная информация', [
      Field::make( 'text', 'insights_title', 'Заголовок' ),
      Field::make( 'rich_text', 'insights_subtitle', 'Подзаголовок | Текст' ),
      Field::make( 'text', 'search_title', 'Заголовок Поиска' ),
      Field::make( 'text', 'search_one', 'Поиск по:' )
      ->set_width(50),
      Field::make( 'text', 'search_two', 'Поиск по:' )
      ->set_width(50),
    ])
    ->add_tab( 'Карточки', [
      Field::make( 'association', 'catalog_cards', 'Карточка' )
      ->set_types( [
          [
              'type'      => 'post',
              'post_type' => 'cards',
          ]
       ] ),
    ]);
// Insights end

// Case studies start
Container::make( 'post_meta', 'Контент на странице Case studies' )
    ->show_on_page(47)
    
    ->add_tab( 'Основная информация', [
      Field::make( 'text', 'insights_title', 'Заголовок' ),
      Field::make( 'rich_text', 'insights_subtitle', 'Подзаголовок | Текст' ),
      Field::make( 'text', 'search_title', 'Заголовок Поиска' ),
      Field::make( 'text', 'search_one', 'Поиск по:' )
      ->set_width(50),
      Field::make( 'text', 'search_two', 'Поиск по:' )
      ->set_width(50),
    ])
    ->add_tab( 'Карточки', [
      Field::make( 'association', 'catalog_cards', 'Карточка' )
      ->set_types( [
          [
              'type'      => 'post',
              'post_type' => 'cards',
          ]
       ] ),
    ]);
// Case studies end

// Home start
Container::make( 'post_meta', 'Контент на странице Главная' )
    ->show_on_page(6)
    ->add_tab( 'Основная информация', [
        Field::make( 'text', 'home_subtitle', 'Подзаголовок | внизу страницы' ),
      ])

    ->add_tab( 'Тип блока №1', [
        Field::make( 'complex', 'home_block_one', 'Конетент в блоке' )
        ->add_fields([
          Field::make( 'text', 'home_block_title_card', 'Заголовок блока' ),
          Field::make( 'rich_text', 'home_block_text_card', 'Текст в блоку' ),

          Field::make( 'image', 'home_block_img_card', 'Картинка блока' )
          ->set_width(50),
          Field::make( 'color', 'my_color', 'Цвет блока' )
          ->set_width(50),

          Field::make("checkbox", "home_block_headen_btn", "Показать кнопку?")
          ->set_width(33),
          Field::make( 'text', 'home_block_text_btn', 'Текст кнопки' )
          ->set_width(33),
          Field::make( 'text', 'home_block_link_btn', 'Ссылка кнопки' )          
          ->help_text('На какую страницу должна вести кнопка')
          ->set_width(33),
         ])
    ])

    ->add_tab( 'Тип блока №2', [
        Field::make( 'complex', 'home_block_two', 'Конетент в блоке' )
        ->add_fields([
          Field::make( 'text', 'home_block_title_card', 'Заголовок блока' ),
          Field::make( 'rich_text', 'home_block_text_card', 'Текст в блоку' ),

          Field::make( 'image', 'home_block_img_card', 'Картинка блока' )
          ->set_width(50),
          Field::make( 'color', 'my_color_two', 'Цвет блока' )
          ->set_width(50),

          Field::make("checkbox", "home_block_headen_btn", "Показать кнопку?")
          ->set_width(33),
          Field::make( 'text', 'home_block_text_btn', 'Текст кнопки' )
          ->set_width(33),
          Field::make( 'text', 'home_block_link_btn', 'Ссылка кнопки' )          
          ->help_text('На какую страницу должна вести кнопка')
          ->set_width(33),
         ])    
    ])

    ->add_tab( 'Слайдер', [
        Field::make( 'text', 'home_slider_title', 'Заголовок блока' ),
        Field::make( 'complex', 'home_slider', 'Карточка в слайдере' )
        ->add_fields([
          Field::make( 'text', 'home_slider_title_card', 'Заголовок слайда' ),
          Field::make( 'image', 'home_slider_img_card', 'Картинка слайда' ),
          Field::make("checkbox", "home_slider_headen_btn", "Показать кнопку?")
          ->set_width(33),
          Field::make( 'text', 'home_slider_text_btn', 'Текст кнопки' )
          ->set_width(33),
          Field::make( 'text', 'home_slider_link_btn', 'Ссылка кнопки' )          
          ->help_text('На какую страницу должна вести кнопка')
          ->set_width(33),
         ])
    ]);
// Home end