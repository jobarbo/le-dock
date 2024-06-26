</div>
<?php
$footer = get_field('footer', 'option');
$pages = get_field('footer_nav', 'option');
?>
<footer class="footer">
  <div class="footer__image-container">
    <img src="<?= $footer['image']['url'] ?>" alt="Image">
  </div>
  <div id="location" class="footer__container">
    <div class="footer__top">
      <div class="footer__logo-container">
        <a href="<?php echo get_home_url(); ?>">
          <img src="<?= $footer['footer_logo']['url'] ?>" alt="Logo">
        </a>
      </div>
      <div class="footer__content">
        <div class="footer__info">
          <p class="footer__address"><?= $footer['address']  ?></p>
          <a href="<?= $footer['phone']['url']  ?>" class="footer__phone"><?= $footer['phone']['title']  ?></a>
          <a href="<?= $footer['email']['url']  ?>" class="footer__email"><?= $footer['email']['title']  ?></a>
        </div>
        <div class="footer__pages">
          <h4 class="footer__list-title"><?= $footer['pages_title'] ?></h4>
          <ul class="footer__list footer__list--pages">
            <?php foreach ($pages['nav_list'] as $page) : ?>
              <li class="footer__list-item">
                <a href="<?= $page['nav_item']['url'] ?>" class="footer__list-link"><?= $page['nav_item']['title'] ?></a>
              </li>
            <?php endforeach; ?>
          </ul>

        </div>
        <div class="footer__socials">
          <h4 class="footer__list-title"><?= $footer['socials_title'] ?></h4>
          <ul class="footer__list footer__list--socials">
            <?php foreach ($footer['social_list'] as $social) : ?>
              <li class="footer__list-item">
                <a href="<?= $social['link']['url'] ?>" class="footer__list-link">
                  <?= $social['link']['title'] ?>
                </a>
              </li>
            <?php endforeach; ?>

        </div>
      </div>
    </div>
    <hr>
    <div class="footer__bottom">

      <ul class="footer__legal-list">
        <?php foreach ($footer['legal_list'] as $legal) : ?>
          <li class="footer__legal-item">
            <a href="<?= $legal['link']['url'] ?>" class="footer__legal-link"><?= $legal['link']['title'] ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
      <p class="footer__copyright">
        <?= $footer['copyright'] ?>
      </p>


    </div>

</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>