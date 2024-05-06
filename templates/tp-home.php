<?php
/*
Template Name: Accueil
*/

get_header(); ?>

<?php $hero = get_field('hero'); ?>
<section class="hero">
    <div class="hero__video">
        <video data-hero-video autoplay muted loop src="<?= $hero['video']['url'] ?>"></video>
    </div>
    <div data-hero-container class="hero__container">
        <div data-hero-text class="hero__title-container">
            <h1 class="hero__title"><?= $hero['title'] ?></h1>
            <div class="splide">
                <div class="splide__track">
                    <ul class="hero__word-slider splide__list">
                        <?php foreach ($hero['word_list'] as $word) : ?>
                            <li data-word-slide class="hero__word splide__slide">
                                <?= $word['word'] ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

        </div>
        <div class="hero__controls">
            <div class="hero__button-container">
                <button data-hero-play class="hero__button hero__button--play"><?= $hero['play_label'] ?></button>
                <button data-hero-close class="hero__button hero__button--back hero__button--hidden"><?= $hero['back_label'] ?></button>

            </div>
            <div data-hero-volume class="hero__volume hero__volume--hidden">
                <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31 27" width="31" height="27">
                    <title>volume</title>
                    <style>
                        .s0 {
                            fill: #f0f2f0
                        }
                    </style>
                    <path id="&lt;Compound Path&gt;" fill-rule="evenodd" class="s0" d="m13.2 26.2l-6.7-6.1h-6v-13.2h6l6.7-6.8zm-10.8-7.9h4.8l4.1 3.7v-17.2l-4 4.1h-4.9z" />
                    <path id="&lt;Path&gt;" class="s0" d="m21.8 13.2c0-2.3-1.2-4.3-3-5.5l-1.4 1.4c1.5 0.8 2.5 2.4 2.5 4.1 0 1.8-1 3.4-2.5 4.2l1.4 1.4c1.8-1.2 3-3.3 3-5.6z" />
                    <path id="&lt;Path&gt;" class="s0" d="m26.6 13.2c0-3.4-1.6-6.5-4.1-8.5l-1.4 1.3c2.2 1.7 3.5 4.3 3.5 7.2 0 3-1.3 5.6-3.5 7.3l1.4 1.3c2.5-2 4.1-5.1 4.1-8.6z" />
                    <path id="&lt;Path&gt;" class="s0" d="m29.1 13.2c0 4-1.8 7.6-4.6 10l1.3 1.3c3.2-2.7 5.2-6.8 5.2-11.3 0-4.5-2-8.5-5.2-11.2l-1.3 1.3c2.8 2.4 4.6 6 4.6 9.9z" />
                </svg>
            </div>
        </div>


    </div>
    <div class="hero__wave">
        <svg id="hero__wave-svg" data-name="hero__wave-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2761 307.79">
            <defs>
                <style>
                    .wave {
                        fill: #f0f2f0;
                        stroke-width: 0px;
                    }
                </style>
            </defs>
            <path class="wave" d="M2531.4,24.99h0c-150.12,33.15-307.34,33.15-457.46,0l-.59-.13c-149.75-33.06-306.55-33.15-456.35-.25l-3.43.75c-149.79,32.9-306.6,32.82-456.35-.25l-.59-.13c-150.12-33.14-307.34-33.14-457.46,0l-.59.13c-149.75,33.06-306.55,33.15-456.35.25l-3.43-.75C160.45,7.4,80.18-.76,0,.08v307.71h2761V.14c-77.13-.06-154.26,8.22-229.6,24.85Z" />
        </svg>
    </div>
</section>

<?php $about = get_field('about'); ?>
<section class="about">
    <div class="about__container">
        <div class="about__content">
            <h2 class="about__title"><?= $about['title'] ?></h2>
            <p class="about__text"><?= $about['text'] ?></p>
        </div>
        <div class="about__image">
            <img src="<?= $about['image']['url'] ?>" alt="Image">
        </div>
    </div>
</section>

<?php $projects = get_field('project'); ?>
<section class="projects">
    <div class="projects__container">
        <h2 class="projects__title"><?= $projects['title'] ?></h2>
        <div class="projects__slider splide">
            <div class="projects__slider-track splide__track">
                <div class="projects__list splide__list">
                    <!-- load content from custom post type here -->

                    <?php
                    $args = array(
                        'post_type' => 'projet',
                        'posts_per_page' => 10,
                        'orderby' => 'date',
                        'order' => 'ASC'
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            $permalink = get_permalink($query->ID);
                            $name = get_the_title($query->ID);
                            $hero = get_field('hero', $query->ID);
                            $content = get_field('content', $query->ID);
                            $gallery = get_field('gallery', $query->ID); ?>
                            <div data-project-slide class="projects__item splide__slide">
                                <div class="projects__image">
                                    <img src="<?= $hero['image']['url']  ?>" alt="Image">
                                    <div class="projects__image-overlay">
                                        <a href="<?= $permalink ?>" class="projects__image-link button">Voir le projet</a>
                                    </div>
                                </div>
                                <div class="projects__content">
                                    <p class="projects__year"><?= $content['year'] ?></p>
                                    <h3 class="projects__name"><?= $content['title'] ?></h3>
                                    <p class="projects__description"><?= $content['text'] ?></p>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    wp_reset_postdata(); ?>


                </div>
            </div>
        </div>

    </div>
    <div class="projects__logo-container splide">
        <div class="splide__track">
            <ul class="projects__logo-list splide__list">
                <?php
                foreach ($projects['logo_list'] as $logo) : ?>
                    <li data-logo-slide class="projects__logo-item splide__slide">
                        <div class="projects__logo-item-container">
                            <img src="<?= $logo['logo']['url'] ?>" alt="Logo">
                        </div>

                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>
</section>

<?php $services = get_field('services'); ?>
<section class="services">
    <div class="services__container">
        <ul data-services-list class="services__list">
            <?php foreach ($services['list'] as $service) : ?>
                <li class="services__item">
                    <p class="service"><?= $service['item'] ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
        <div data-services-cloud class="services__cloud"></div>
    </div>

</section>

<?php $talents = get_field('talents'); ?>

<section class="talents splide">
    <div class="talents__container">
        <h2 class="talents__title"><?= $talents['title'] ?></h2>
        <div class="talents__track splide__track">
            <div class="talents__list splide__list">
                <?php foreach ($talents['list'] as $talent) : ?>
                    <div data-talents-slide class="talents__item splide__slide">
                        <div class="talents__image">
                            <img style="height: 350px; width:350px" src="<?= $talent['pfp']['url'] ?>" alt="Image">
                        </div>
                        <div class="talents__content">
                            <p class="talents__position"><?= $talent['position'] ?></p>
                            <h3 class="talents__name"><?= $talent['name'] ?></h3>
                            <p class="talents__text"><?= $talent['bio'] ?></p>
                            <p class="talents__quote"> <?= $talent['quote'] ?> </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="talents__wave-container">
        <svg id="footer__white-wave-svg" data-name="footer__white-wave-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2761 307.79">
            <defs>
                <style>
                    .wave {
                        fill: #f0f2f0;
                        stroke-width: 0px;
                    }
                </style>
            </defs>
            <path class="wave" d="M2531.4,24.99h0c-150.12,33.15-307.34,33.15-457.46,0l-.59-.13c-149.75-33.06-306.55-33.15-456.35-.25l-3.43.75c-149.79,32.9-306.6,32.82-456.35-.25l-.59-.13c-150.12-33.14-307.34-33.14-457.46,0l-.59.13c-149.75,33.06-306.55,33.15-456.35.25l-3.43-.75C160.45,7.4,80.18-.76,0,.08v307.71h2761V.14c-77.13-.06-154.26,8.22-229.6,24.85Z" />
        </svg>

    </div>
</section>


<?php

get_template_part('modules/md-contact'); ?>


<?php get_footer(); ?>