<?php
/*
Template Name: Главная
*/
?>

<?php
  $home_slider = carbon_get_theme_option('home_slider');
  $tours_slider = carbon_get_theme_option('tours_slider');
  $video_slider = carbon_get_theme_option('video_slider');
?>

<?php get_header(); ?>

        <section class="home" id="home">
            <img class="home-background" src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'home-background'), 'full'); ?>" srcset="<?php echo convertToWebpSrc(wp_get_attachment_image_url(carbon_get_theme_option( 'home-background'), 'full')); ?>" alt="Заставка главная">
            <div class="container">
                <div class="home-wrapper">
                    <div class="home-content">
                        <div class="home-title">
                            <h1><?php echo carbon_get_theme_option( 'home-title' ); ?></h1>
                        </div>
                        <div class="home-subtitle">
                            <?php echo carbon_get_theme_option( 'home-subtitle' ); ?>
                        </div>
                        <div class="home-btn">
                            <div class="home-btn__wrapper">
                                <a href="#contact" style="background:<?php echo carbon_get_theme_option( 'home_color_btn' ); ?>;"><?php echo carbon_get_theme_option( 'home_text_btn' ); ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="home-slogan__group">
                        <div class="home-slogan">
                            <p><?php echo carbon_get_theme_option( 'home_slogan' ); ?></p>
                        </div>
                        <div class="home-video">
                            <div class="swiper swiper_video">

                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <?php if ($home_slider) : ?>
                                        <?php foreach ($home_slider as $attribute) : ?>
                                            <div class="swiper-slide">
                                                <div class="video-slide">
                                                    <video src="<?php echo wp_get_attachment_url($attribute['home_slider_img_card']); ?>" muted autoplay loop controls></video>
                                                </div>
                                                <div class="name__video-slide">
                                                    <p><?php echo $attribute['home_slider_title_card']; ?></p>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                </div>
                                <?php endif; ?>
                                
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="upcoming-tours" id="tours">
            <div class="container">
                <div class="upcoming-tours__title-goup">
                    <div class="upcoming-tours__title">
                        <h2><?php echo carbon_get_theme_option( 'tours_title' ); ?></h2>
                    </div>
                    <div class="upcoming-tours__slider">

                    </div>
                </div>
            </div>

            <div class="upcoming-tours__group-card">
                <div class="swiper swiper_tours">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?php if ($tours_slider) : ?>
                            <?php foreach ($tours_slider as $attribute) : ?>
                                <div class="swiper-slide">                                
                                    <div class="swiper_tours-content">
                                        <img loading="lazy" src="<?php echo wp_get_attachment_image_url($attribute['tours_background'], 'full'); ?>" srcset="<?php echo convertToWebpSrc(wp_get_attachment_image_url($attribute['tours_background'], 'full')); ?>" alt="Фото из тура">
                                        <div class="container">
                                            <div class="swiper_tours-content__wrapper">
                                                <div class="swiper_tours-info">
                                                    <h3><?php echo $attribute['tours_slider_title_card']; ?></h3>
                                                    <p><?php echo $attribute['tours_slider_subtitle_card']; ?></p>
                                                    <div class="home-btn">
                                                        <a style="background:<?php echo $attribute['tours_color_btn']; ?>;" Target = "_blank" href="<?php echo $attribute['tours_link_btn']; ?>"><?php echo $attribute['tours_text_btn']; ?></a>
                                                    </div>
                                                </div>
                                                <div class="swiper_tours-detals">
                                                    <h3><?php echo $attribute['tours_where']; ?></h3>
                                                    <ul>                                                      
                                                        <?php $tours_thesis = $attribute['tours_thesis'] ?>
                                                        <?php if ($tours_thesis) : ?>
                                                            <?php foreach ($tours_thesis as $sub_field) : ?>
                                                                <li><?php echo $sub_field['tours_thesis_text']; ?></li>
                                                            <?php endforeach; ?>
                                                    </ul>
                                                    <?php endif; ?>
                                                    <p>и т.д</p>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="swiper_tours-galery">
                                            <?php $tours_galery = $attribute['tours_galery'] ?>
                                            <?php if ($tours_galery) : ?>
                                                <?php foreach ($tours_galery as $subs_field) : ?>
                                                    <div class="swiper_tours-galery_img">
                                                        <img loading="lazy" src="<?php echo wp_get_attachment_image_url($subs_field['tours_galery_img'], 'full'); ?>" srcset="<?php echo convertToWebpSrc(wp_get_attachment_image_url($subs_field['tours_galery_img'], 'full')); ?>" alt="Фото Байкала">
                                                        <span><?php echo $subs_field['tours_galery_text']; ?></span>
                                                    </div>
                                                <?php endforeach; ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                    </div>
                    <?php endif; ?>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

        </section>

        <section class="about" id="about">
            <div class="container">
                <div class="about-title__group">
                    <div class="about-title">
                        <h3>Познакомимся?</h3>
                    </div>
                    <div class="about-subtitle">
                        <p>Человек мира и знаток гостиничной «начинки»</p>
                    </div>
                </div>

                <div class="about-content">
                    <ul>
                        <li class="keks">
                            <img loading="lazy" src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'about_image_1'), 'full'); ?>" width="100%" height="100%" srcset="<?php echo convertToWebpSrc(wp_get_attachment_image_url(carbon_get_theme_option( 'about_image_1'), 'full')); ?>" alt="Фото организитора">
                            <span><?php echo carbon_get_theme_option( 'about_subtitle_1' ); ?></span>
                        </li>
                        <li>
                            <img loading="lazy" src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'about_image_2'), 'full'); ?>" width="100%" height="100%" srcset="<?php echo convertToWebpSrc(wp_get_attachment_image_url(carbon_get_theme_option( 'about_image_2'), 'full')); ?>" alt="Фото организитора">
                            <span><?php echo carbon_get_theme_option( 'about_subtitle_2' ); ?></span>
                        </li>
                        <li>
                            <img loading="lazy" src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'about_image_3'), 'full'); ?>" width="100%" height="100%" srcset="<?php echo convertToWebpSrc(wp_get_attachment_image_url(carbon_get_theme_option( 'about_image_3'), 'full')); ?>" alt="Фото организитора">
                            <span><?php echo carbon_get_theme_option( 'about_subtitle_3' ); ?></span>
                        </li>
                        <li>
                            <img loading="lazy" src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'about_image_4'), 'full'); ?>" width="100%" height="100%" srcset="<?php echo convertToWebpSrc(wp_get_attachment_image_url(carbon_get_theme_option( 'about_image_4'), 'full')); ?>" alt="Фото организитора">
                            <span><?php echo carbon_get_theme_option( 'about_subtitle_4' ); ?></span>
                        </li>
                        <li>
                            <img loading="lazy" src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'about_image_5'), 'full'); ?>" width="100%" height="100%" srcset="<?php echo convertToWebpSrc(wp_get_attachment_image_url(carbon_get_theme_option( 'about_image_5'), 'full')); ?>" alt="Фото организитора">
                            <span><?php echo carbon_get_theme_option( 'about_subtitle_5' ); ?></span>
                        </li>
                        <li>
                            <img loading="lazy" src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'about_image_6'), 'full'); ?>" width="100%" height="100%" srcset="<?php echo convertToWebpSrc(wp_get_attachment_image_url(carbon_get_theme_option( 'about_image_6'), 'full')); ?>" alt="Фото организитора">
                            <span><?php echo carbon_get_theme_option( 'about_subtitle_6' ); ?></span>
                        </li>
                        <li class="keks">
                            <img loading="lazy" src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'about_image_7'), 'full'); ?>" width="100%" height="100%" srcset="<?php echo convertToWebpSrc(wp_get_attachment_image_url(carbon_get_theme_option( 'about_image_7'), 'full')); ?>" alt="Фото организитора">
                            <span><?php echo carbon_get_theme_option( 'about_subtitle_7' ); ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="contact" id="contact">
            <div class="container">
                <div class="contact-wrapper">
                    <img loading="lazy" src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'contact_image'), 'full'); ?>" srcset="<?php echo convertToWebpSrc(wp_get_attachment_image_url(carbon_get_theme_option( 'contact_image'), 'full')); ?>" alt="Фото заставка">
                    <div class="contact-content">
                        <div class="contact-title_group">
                            <h3><?php echo carbon_get_theme_option( 'contact_title' ); ?></h3>
                            <p><?php echo carbon_get_theme_option( 'contact_subtitle' ); ?></p>
                        </div>
                    </div>
                    <div class="contact-form">
                        <form class="form-contact form-send" method="post" action="mail.php">
                            <div class="form-contact__wrapper">
                                <label>
                                    <input class="input-form input-form__contact" placeholder="Имя" type="text" name="name" required>
                                </label>
                                <label>
                                    <input class="input-form phone input-form__contact" placeholder="Телефон" type="phone" name="phone" required>
                                </label>
                                <label>
                                    <input class="input-form input-form__contact" placeholder="Мессенджер" type="text" name="messenger">
                                </label>
    
                                <input type="text" name="form-name" value="Форма Звонка" hidden>
                    
                                <div class="personality">
                                    <input class="custom-checkbox" type="checkbox" required name="cheese" id="cheese" />
                                    <label for="cheese">
                                        <p>Я даю свое согласие на обработку персональных данных и соглашаюсь с <a Target = "_blank" href="<?php echo wp_get_attachment_url( carbon_get_theme_option('contact_politic') );?>">политикой конфиденциальности</a></p>  
                                    </label>
                                </div>
                            </div>

                            <button class="form-btn decortion-btn send-form" type="button" style="background:<?php echo carbon_get_theme_option( 'contact_color_btn' ); ?>;"><?php echo carbon_get_theme_option( 'contact_text_btn' ); ?></button>

                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="all-video" id="video">
            <div class="swiper slider-vedeo">
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php if ($video_slider) : ?>
                        <?php foreach ($video_slider as $attribute) : ?>
                            <div class="swiper-slide">
                                <video src="<?php echo wp_get_attachment_url($attribute['video_slider_img_card']); ?>" muted loop controls></video>
                            </div>
                        <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>


              </div>
        </section>

<?php get_footer(); ?>