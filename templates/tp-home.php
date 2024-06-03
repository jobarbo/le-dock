<?php
/*
Template Name: Accueil
*/

get_header(); ?>

<?php $hero = get_field('hero'); ?>
<section data-hero class="hero">
    <div class="hero__video">
        <video data-hero-video autoplay muted loop src="<?= $hero['video']['url'] ?>"></video>
    </div>
    <div data-hero-container class="hero__container">
        <div data-hero-text class="hero__title-container">
            <h1 data-hero-title class="hero__title"><?= $hero['title'] ?></h1>
            <div class="swiper mySwiper">
                <ul data-word-slider class="hero__word-slider swiper-wrapper">
                    <?php foreach ($hero['word_list'] as $word) : ?>
                        <li data-word-slide class="hero__word swiper-slide">
                            <?= $word['word'] ?></li>
                    <?php endforeach; ?>
                    <?php foreach ($hero['word_list'] as $word) : ?>
                        <li data-word-slide class="hero__word swiper-slide">
                            <?= $word['word'] ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>
        <div class="hero__controls">
            <div data-hero-button class="hero__button-container">
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
        <svg class="hero__wave-svg" id="hero__wave-svg" data-name="hero__wave-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2761 307.79">
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
        <svg class="hero__wave-svg" id="hero__wave-svg" data-name="hero__wave-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2761 307.79">
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
<section data-about class="about">
    <div class="about__container">
        <div class="about__content">
            <h2 data-about-title class="about__title"><?= $about['title'] ?></h2>
            <p data-about-text class="about__text"><?= $about['text'] ?></p>
        </div>
        <div class="about__image">
            <svg class="about__image-svg" xmlns="http://www.w3.org/2000/svg" width="494.374" height="479.393" viewBox="0 0 494.374 479.393">
                <g id="Group_1" data-name="Group 1" transform="translate(-1027.418 -1135.607)" opacity="0.75">




                    <path data-about-svg class="about__image-path about__image-path--1" id="Path_1" data-name="Path 1" d="M1085.635,1552.714l-17.792,12.885c-2.626-4.83-4.048-3.567-7.191-1.441-3.935,2.66-9.285,4.033-14.128,4.345-6.451.417-13-.724-19.106-1.166,2.349,5.469,16.545,10.659,25.694,8.695.956,2.123.956,2.123-6.435,8.77,5.772,3.468,12.874,1.961,17.734-3.764-2.921-4.982-2.548-5.5,2.164-9.277,5.581-4.473,10.88-9.314,16.1-14.207C1084.095,1556.226,1084.8,1554.134,1085.635,1552.714Z" fill="#d0d2db" fill-rule="evenodd" opacity="0.4" />

                    <path data-about-svg class="about__image-path about__image-path--2" id="Path_2" data-name="Path 2" d="M1151.53,1570.257a33.944,33.944,0,0,0,14.057.958,26.275,26.275,0,0,1,12.084.83,12.7,12.7,0,0,1,3.073,1.5c3.736,2.517,7.42,5.11,11.125,7.672a3.487,3.487,0,0,1-.316,6.08c-2.131,1.089-4.376,1.952-6.574,2.907-.563.244-1.138.46-1.843.743.736,1.459,1.371,2.845,2.136,4.155a2.648,2.648,0,0,0,1.254.848c5.171,2.2,5.3,2.338,9.42-1.293,2.22-1.957,4.909-2.431,7.438-3.467a19.981,19.981,0,0,0,2.662-1.076,4.639,4.639,0,0,1,4.683-.082c4.467,1.977,9.07,3.647,13.56,5.576a7.911,7.911,0,0,1,2.776,2.206c3.348,4.009,6.582,8.113,9.9,12.148a55.09,55.09,0,0,0,3.943,4.363c.438.43,1.27.46,1.922.673a7.861,7.861,0,0,0,.489-1.711c.311-5.864-1.565-11.2-4.414-16.15a134.46,134.46,0,0,0-7.751-11.575,5.492,5.492,0,0,0-3.039-1.719c-3.633-.866-7.315-1.524-10.978-2.259-.365-.073-.734-.131-1.125-.2,1.407-2.832.339-4.979-2.732-5.659a12.469,12.469,0,0,0-6.39.288,2.688,2.688,0,0,1-1.943-.238,34.523,34.523,0,0,1-8.967-7.784,3.187,3.187,0,0,0-2.6-1.153,167.874,167.874,0,0,0-34.117,1.716c-2.588.4-5.166.863-7.749,1.3Z" fill="#d0d2db" opacity="0.4" />

                    <path data-about-svg class="about__image-path about__image-path--3" id="Path_3" data-name="Path 3" d="M1274.036,1500.837c1.135-.207,2.275-.386,3.4-.626a124.132,124.132,0,0,1,21.035-3.065,44.5,44.5,0,0,1,17.422,2.3,55.782,55.782,0,0,1,15.68,9.054c2.2,1.774,4.237,3.751,6.382,5.6.693.6.738,1.22.148,1.779a18.386,18.386,0,0,1-3.263,2.731,49.637,49.637,0,0,1-14.039,5.094,6.692,6.692,0,0,0-1.689.577,3.269,3.269,0,0,0-1.535,4.5,7.247,7.247,0,0,0,1.443,2.137,27.272,27.272,0,0,0,12.284,6.977,12.625,12.625,0,0,0,11.281-2.568,23.674,23.674,0,0,0,6.433-7.934,2.445,2.445,0,0,1,1.179-1.067,41.822,41.822,0,0,0,15.621-9.989,5.627,5.627,0,0,1,5.147-1.883c6.35.763,12.716,1.394,19.075,2.075a13.421,13.421,0,0,0,1.989.18,7.3,7.3,0,0,1,4.141,1.261c5.33,3.219,10.669,6.426,15.973,9.688,3.432,2.111,6.8,4.32,10.215,6.466a14.773,14.773,0,0,0,5.825,2.265,7,7,0,0,0,1.9-.262,6.083,6.083,0,0,0-.428-1.845c-1.122-1.85-2.319-3.658-3.553-5.436-2.147-3.093-4.356-6.144-6.514-9.229-4.324-6.181-10.157-10.688-16.363-14.78-1.724-1.137-3.425-2.329-5.247-3.286a5.866,5.866,0,0,0-3.065-.618c-4.508.378-9.006.887-13.5,1.4-1.885.213-3.753.58-5.639.79a1.56,1.56,0,0,1-1.28-.451c-1.818-3.131-4.873-3.591-8.02-3.731a28.458,28.458,0,0,0-9.721,1.559,2.708,2.708,0,0,1-1.7-.054,32.927,32.927,0,0,1-15.687-12.96,1.751,1.751,0,0,0-1.6-.966c-2.092.064-4.2.031-6.271.292a185.552,185.552,0,0,0-22.813,4.574c-11.291,2.9-22.539,5.966-33.8,8.964-.3.081-.6.19-.9.285Z" fill="#d0d2db" opacity="0.5" />
                    <path data-about-svg class="about__image-path about__image-path--4" id="Path_4" data-name="Path 4" d="M1180.528,1492.879c-5.008-2.8-10.061-5.523-15.023-8.4a40.727,40.727,0,0,0-12.833-4.763c-5.977-1.151-12-2.08-18-3.1-.342-.059-.687-.1-1.1-.157.1-.347.188-.64.277-.932.733-2.387-.052-4.128-2.384-5.079a16.968,16.968,0,0,0-7.653-.884,1.676,1.676,0,0,1-1.65-.751c-4.647-6.005-9.346-11.97-14-17.968-2.912-3.75-6.78-6.341-10.689-8.873-9.495-6.149-19.4-11.591-29.382-16.9a22.363,22.363,0,0,0-2.781-1.051c.152.853.238,1.642.449,2.4a3.115,3.115,0,0,0,.682,1.157c3.779,4.273,7.479,8.62,11.383,12.776,9.418,10.026,18.944,19.951,28.4,29.944a42.816,42.816,0,0,1,3.884,4.658,8.728,8.728,0,0,1,1.191,3.1c.289,1.281-.02,1.7-1.326,1.818-3.206.278-6.421.451-9.632.664-.415.027-.831.035-1.381.057.1.426.172.786.273,1.137,1.831,6.358,6.064,10.469,12.2,12.576a39.509,39.509,0,0,0,7.18,1.4c1.375.2,1.757-.32,1.662-1.708a1.712,1.712,0,0,0-.033-.313c-.794-3.118.476-5.292,3.113-6.857a9.4,9.4,0,0,0,1.559-1.062,2.755,2.755,0,0,1,2.637-.634c3.507.821,7.074,1.464,10.495,2.56a69.752,69.752,0,0,0,18.542,3.3,7.389,7.389,0,0,1,2.691.7,61.069,61.069,0,0,0,22.708,5.093" fill="#d0d2db" opacity="0.5" />
                    <path data-about-svg class="about__image-path about__image-path--5" id="Path_5" data-name="Path 5" d="M1215.907,1395.414l-8.311,3.223c6.327,8.118,14.187,13.082,24.389,13.51,6.378.268,7.251-1.024,6.749-8.752,13.41,15.5,30.236,22.16,49.565,23.8-2.895-2.011-6.026-3.757-8.643-6.082-9.5-8.438-18.935-16.955-28.1-25.746-1.475-1.413-1.461-4.378-2.593-8.151-25.333,2.722-48.711-9.215-73.346-16.925C1186.714,1381.241,1199.829,1389.231,1215.907,1395.414Z" fill="#d0d2db" fill-rule="evenodd" opacity="0.6" />
                    <path data-about-svg class="about__image-path about__image-path--6" id="Path_6" data-name="Path 6" d="M1473.369,1335.673l-62.141,6.428c-1.333-5.762-2.255-9.754-3.55-15.354-22.861,19.721-45.072,7.689-67.229,1.1-6.6-1.962-12.889-4.941-19.639-7.578.4,14.322,13.493,24.093,45.523,34.492l-17.032,13.457c13.811,12.206,24.917,10.436,34.4-3.437,2.858-4.183,9.131-7.069,14.385-8.4,21.428-5.422,43.107-9.846,64.593-15.057C1466.612,1340.368,1470.076,1337.465,1473.369,1335.673Z" fill="#d0d2db" fill-rule="evenodd" opacity="0.7" />

                    <path data-about-svg class="about__image-path about__image-path--7" id="Path_7" data-name="Path 7" d="M1280.936,1275.307c-12.35,5.716-24.6,10-38.78,6.344.982-5.479-2.342-6.444-7.142-5.764-9,1.276-15.445-1.266-19.635-10.355-8.364-18.145-17.687-35.849-26.549-53.767-.689-1.394-.868-3.043-2.345-4.2-6.216,13.223-3.794,25.954.565,38.295,4.281,12.119,9.63,23.861,14.595,35.974-9.377,5.882-17.664-1.279-26.356-2.826-1.1,12.388,3.894,20.251,14.714,23.857,5.327,1.776,10.676,3.487,17.263,5.633-1.106-9.649,4.706-10.769,11.567-13.017,15.637-5.123,31.33-9.036,47.742-10.427C1272.767,1284.53,1278.945,1282.771,1280.936,1275.307Z" fill="#d0d2db" fill-rule="evenodd" opacity="0.7" />

                    <path data-about-svg class="about__image-path about__image-path--8" id="Path_8" data-name="Path 8" d="M1280.649,1137c1.941.122,3.881.293,5.823.359,11.966.4,23.9,1.1,35.662,3.542,9.808,2.036,19.191,5.146,27.567,10.851a94.043,94.043,0,0,1,21.972,21.192c2.88,3.8,5.406,7.861,8.164,11.753.892,1.258.711,2.3-.482,2.97a30.951,30.951,0,0,1-6.449,3.142c-8.173,2.333-16.579,2.813-25.04,2.622a11.3,11.3,0,0,0-3,.258,5.511,5.511,0,0,0-4.342,6.737,12.215,12.215,0,0,0,1.491,4.082,45.987,45.987,0,0,0,17.26,16.412c6.353,3.455,12.961,3.24,19.5.387a39.889,39.889,0,0,0,13.752-10.363,4.127,4.127,0,0,1,2.364-1.266c10.574-1.278,20.575-4.289,29.622-9.988a9.482,9.482,0,0,1,9.185-.986c10.079,3.831,20.237,7.453,30.365,11.154a22.908,22.908,0,0,0,3.181,1.1,12.287,12.287,0,0,1,6.261,3.747c7.412,7.435,14.841,14.853,22.192,22.348,4.757,4.85,9.375,9.836,14.083,14.735a24.906,24.906,0,0,0,8.608,6.074,11.862,11.862,0,0,0,3.223.348,10.262,10.262,0,0,0,.05-3.194c-1.083-3.483-2.306-6.927-3.6-10.338-2.254-5.935-4.627-11.824-6.9-17.75-4.561-11.871-12.271-21.618-20.759-30.839-2.357-2.56-4.656-5.2-7.247-7.51a9.913,9.913,0,0,0-4.764-2.258c-7.529-1.215-15.1-2.212-22.659-3.209-3.172-.418-6.377-.577-9.548-1a2.639,2.639,0,0,1-1.911-1.259c-1.7-5.862-6.512-7.858-11.6-9.366-5.39-1.6-10.95-1.727-16.539-1.405a4.573,4.573,0,0,1-2.753-.777,55.532,55.532,0,0,1-20.393-27.586,2.948,2.948,0,0,0-2.227-2.231c-3.448-.747-6.885-1.659-10.378-2.073a312.346,312.346,0,0,0-39.184-1.8c-19.653.152-39.3.592-58.955.914-.53.009-1.059.066-1.588.1Z" fill="#d0d2db" />
                </g>
            </svg>

        </div>
    </div>
</section>

<?php $projects = get_field('project'); ?>
<section id="projects" class="projects">
    <div class="projects__wrapper">
        <div class="projects__container">
            <h2 data-project-title class="projects__title"><?= $projects['title'] ?></h2>
            <div data-project-slider class="projects__slider splide">
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
    </div>

    <div data-project-logo-container class="projects__logo-container splide">
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
<section data-services id="services" class="services">
    <div class="services__container">
        <ul data-services-list class="services__list">
            <?php foreach ($services['list'] as $service) : ?>
                <li data-services-word class="services__item">
                    <p class="service"><?= $service['item'] ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="services__cloud-container">
            <div data-services-cloud class="services__cloud"></div>
        </div>
    </div>

</section>

<?php $talents = get_field('talents'); ?>

<section data-talents id="talents" class="talents splide">
    <div class="talents__wrapper">
        <div class="talents__container">
            <h2 data-talents-title class="talents__title"><?= $talents['title'] ?><span data-talents-title-highlight class="talents__title-highlight"></span></h2>
            <div class="talents__track splide__track">
                <div class="talents__list splide__list">
                    <?php
                    $i = 1;
                    foreach ($talents['list'] as $talent) : ?>
                        <div data-talents-slide class="talents__item talents__item--<?= $i ?> splide__slide">
                            <div class="talents__image talents__image--<?= $i ?>">
                                <img data-talents-image src="<?= $talent['pfp']['url'] ?>" alt="Image">
                            </div>
                            <div class="talents__content talents__content--<?= $i ?>">
                                <p data-talents-position class="talents__position talents__position--<?= $i ?>"><?= $talent['position'] ?></p>
                                <h3 data-talents-name class="talents__name talents__name--<?= $i ?>"><?= $talent['name'] ?></h3>
                                <p data-talents-text class="talents__text talents__text--<?= $i ?>"><?= $talent['bio'] ?></p>
                                <p data-talents-quote class="talents__quote talents__quote--<?= $i ?>"> <?= $talent['quote'] ?> </p>
                            </div>
                        </div>
                    <?php
                        $i++;
                    endforeach; ?>
                </div>
            </div>
        </div>

    </div>

    <div class="talents__wave-container">
        <svg class="talents__wave-svg" id="talent__white-wave-svg-2" data-name="footer__white-wave-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2761 307.79">
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
        <svg class="talents__wave-svg" id="talent__white-wave-svg-1" data-name="footer__white-wave-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2761 307.79">
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