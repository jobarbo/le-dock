<?php
/*
Template Name: Projet
*/

// Load header.php
get_header(); ?>


<?php $hero = get_field('hero'); ?>
<section class="projet-hero">
    <div class="projet-hero__container">
        <div class="projet-hero__image-container">
            <img src="<?= $hero['image']['url'] ?>" alt="Image">
        </div>
    </div>
    <div class="projet-hero__wave">
        <svg id="projet-hero__wave-svg" data-name="projet-hero__wave-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2761 307.79">
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


<?php $info =  get_field('content') ?>
<section class="projet-info">
    <div class="projet-info__container">
        <div class="projet-info__content">
            <h2 class="projet-info__title"><?= $info['title'] ?></h2>
            <p class="projet-info__text"><?= $info['text'] ?></p>
        </div>
        <div class="projet-info__services">
            <h5 class="projet-info__services-title"><?= $info['list_title'] ?></h5>
            <ul class="projet-info__services-list">
                <?php
                $categories = get_the_category();
                foreach ($categories as $category) : ?>
                    <li class="projet-info__services-item"><?= $category->name ?></li>
                <?php endforeach; ?>
            </ul>
        </div>


    </div>
</section>

<?php $gallery = get_field('gallery') ?>
<section class="projet-gallery">
    <div class="projet-gallery__container">

        <div data-masonry class="projet-gallery__list">
            <?php foreach ($gallery['list'] as $image) : ?>
                <div data-masonry-item class="projet-gallery__item">
                    <img src="<?= $image['image']['url'] ?>" alt="Image">
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- make a section that features the previous and next project -->
<?php
// if the is a previous post show it else show last post
$prev_post = get_previous_post();
$next_post = get_next_post();
if (!$prev_post) {
    $args = array(
        'post_type' => 'projet',
        'posts_per_page' => 1,
        'order' => 'DESC',
        'orderby' => 'date',
        'post_status' => 'publish',
        'post__not_in' => array(get_the_ID())
    );
    $last_post = get_posts($args);
    $prev_post = $last_post[0];
}
if (!$next_post) {
    $args = array(
        'post_type' => 'projet',
        'posts_per_page' => 1,
        'order' => 'ASC',
        'orderby' => 'date',
        'post_status' => 'publish',
        'post__not_in' => array(get_the_ID())
    );
    $first_post = get_posts($args);
    $next_post = $first_post[0];
}
?>

<?php
// get the previous and next post acf fields
$prev_post_acf = get_field('hero', $prev_post->ID);
$next_post_acf = get_field('hero', $next_post->ID);
?>
<section class="projet-navigation">
    <div class="projet-navigation__container">
        <div class="projet-navigation__prev">
            <div class="projet-navigation__prev-image">
                <img src="<?= $prev_post_acf['image']['url'] ?>" alt="Image">
            </div>
            <div class="projet-navigation__overlay projet-navigation__overlay--prev">

            </div>
            <?php if ($prev_post) : ?>
                <a href="<?= get_permalink($prev_post->ID) ?>" class="projet-navigation__link">
                    <div class="projet-navigation__link-container">
                        <h5 class="projet-navigation__link-nav"><span>Projet précédent</span></h5>
                        <h4 class="projet-navigation__link-name"><span><?= $prev_post->post_title ?></span></h4>
                    </div>
                </a>
            <?php endif; ?>
        </div>
        <div class="projet-navigation__next">
            <div class="projet-navigation__next-image">
                <img src="<?= $next_post_acf['image']['url'] ?>" alt="Image">
            </div>
            <div class="projet-navigation__overlay projet-navigation__overlay--next">

            </div>
            <?php if ($next_post) : ?>
                <a href="<?= get_permalink($next_post->ID) ?>" class="projet-navigation__link">
                    <div class="projet-navigation__link-container">
                        <h5 class="projet-navigation__link-nav"><span>Projet suivant</span></h5>
                        <h4 class="projet-navigation__link-name"><span><?= $next_post->post_title ?></span></h4>
                    </div>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php

get_template_part('modules/md-contact'); ?>



<?php get_footer(); ?>