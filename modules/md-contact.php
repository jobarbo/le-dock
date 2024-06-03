<?php $contact = get_field('contact', 'options'); ?>

<section data-contact class="contact" id="contact">
    <div data-contact-container class="contact__wave-container">
        <svg class="contact__wave-svg" id="contact__wave-svg-1" data-name="contact__wave-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2761 307.79">
            <defs>
                <style>
                    .waveblue {
                        fill: #0d1c30;
                        stroke-width: 0px;
                    }
                </style>
            </defs>
            <path class="waveblue" d="M2531.4,24.99h0c-150.12,33.15-307.34,33.15-457.46,0l-.59-.13c-149.75-33.06-306.55-33.15-456.35-.25l-3.43.75c-149.79,32.9-306.6,32.82-456.35-.25l-.59-.13c-150.12-33.14-307.34-33.14-457.46,0l-.59.13c-149.75,33.06-306.55,33.15-456.35.25l-3.43-.75C160.45,7.4,80.18-.76,0,.08v307.71h2761V.14c-77.13-.06-154.26,8.22-229.6,24.85Z" />
        </svg>
        <svg class="contact__wave-svg" id="contact__wave-svg-2" data-name="contact__wave-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2761 307.79">
            <defs>
                <style>
                    .waveblue {
                        fill: #0d1c30;
                        stroke-width: 0px;
                    }
                </style>
            </defs>
            <path class="waveblue" d="M2531.4,24.99h0c-150.12,33.15-307.34,33.15-457.46,0l-.59-.13c-149.75-33.06-306.55-33.15-456.35-.25l-3.43.75c-149.79,32.9-306.6,32.82-456.35-.25l-.59-.13c-150.12-33.14-307.34-33.14-457.46,0l-.59.13c-149.75,33.06-306.55,33.15-456.35.25l-3.43-.75C160.45,7.4,80.18-.76,0,.08v307.71h2761V.14c-77.13-.06-154.26,8.22-229.6,24.85Z" />
        </svg>
    </div>

    <div data-contact-container class="contact__container">
        <div class="contact__content">
            <h2 data-contact-title class="contact__title"><?= $contact['title'] ?></h2>
            <p data-contact-text class="contact__text"><?= $contact['text'] ?></p>
        </div>
        <div data-contact-form class="contact__form">
            <?= do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]') ?>
        </div>
    </div>

</section>