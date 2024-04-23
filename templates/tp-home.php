<?php
/*
Template Name: Accueil
*/

get_header(); ?>

<?php $hero = get_field('hero'); ?>
<section class="hero">
    <div class="hero__video">
        <?= $hero['video']; ?>
    </div>
    <div class="hero__container">
        <div class="hero__title-container">
            <h1 class="hero__title"><?= $hero['title'] ?></h1>
            <ul class="hero__word-slider">
                <?php foreach ($hero['word_list'] as $word) : ?>
                    <li class="hero__word"><?= $word['word'] ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="hero__button-container">
            <button class="hero__button hero__button--play"><?= $hero['play_label'] ?></button>
            <button class="hero__button hero__button--back"><?= $hero['back_label'] ?></button>
        </div>

    </div>
    <div class="hero__waves">
        <svg id="Layer_8" data-name="Layer 8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2761 307.79">
            <defs>
                <style>
                    .cls-1 {
                        fill: #f0f2f0;
                        stroke-width: 0px;
                    }
                </style>
            </defs>
            <path class="cls-1" d="M2531.4,24.99h0c-150.12,33.15-307.34,33.15-457.46,0l-.59-.13c-149.75-33.06-306.55-33.15-456.35-.25l-3.43.75c-149.79,32.9-306.6,32.82-456.35-.25l-.59-.13c-150.12-33.14-307.34-33.14-457.46,0l-.59.13c-149.75,33.06-306.55,33.15-456.35.25l-3.43-.75C160.45,7.4,80.18-.76,0,.08v307.71h2761V.14c-77.13-.06-154.26,8.22-229.6,24.85Z" />
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
        <div class="projects__list">
            <!-- load content from custom post type here -->
        </div>
    </div>
    <div class="projects__logo-container">
        <ul class="projects__logo-list">
            <?php
            foreach ($projects['logo_list'] as $logo) : ?>
                <li class="projects__logo-item">
                    <img src="<?= $logo['logo']['url'] ?>" alt="Logo">
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<?php $services = get_field('services'); ?>
<section class="services">
    <div class="services__container">
        <ul class="services__list">
            <?php foreach ($services['list'] as $service) : ?>
                <li class="services__item">
                    <p class="service"><?= $service['item'] ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<?php $talents = get_field('talents'); ?>

<section class="talents">
    <div class="talents__container">
        <h2 class="talents__title"><?= $talents['title'] ?></h2>
        <div class="talents__list">
            <?php foreach ($talents['list'] as $talent) : ?>
                <div class="talents__item">
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
</section>


<?php $contact = get_field('contact'); ?>

<section class="contact">
    <div class="contact__container">
        <div class="contact__content">
            <h2 class="contact__title"><?= $contact['title'] ?></h2>
            <p class="contact__text"><?= $contact['text'] ?></p>
        </div>
        <div class="contact__form">
            <!-- load contact form here -->
        </div>
    </div>


    <?php get_footer(); ?>