<?php
/*
Template Name: Legal
*/

get_header(); ?>

<section class="legal">
    <div class="legal__container">
        <?= get_field('legal_content'); ?>
    </div>
</section>


<?php get_footer(); ?>