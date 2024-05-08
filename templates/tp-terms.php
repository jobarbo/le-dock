<?php
/*
Template Name: Legal
*/

get_header(); ?>

<?php $legal = get_field('legal'); ?>
<section class="legal">
    <h1 class="legal__title"><?= $legal['title'] ?></h1>
    <div class="legal__container">

        <?= $legal['wysiwyg'] ?>
    </div>
</section>
<?php

get_template_part('modules/md-contact'); ?>

<?php get_footer(); ?>