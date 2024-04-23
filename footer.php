</div>
<?php $footer = get_field('footer', 'option'); ?>
<footer class="footer">
  <div class="footer__container">
    <div class="footer__content">
      <div class="footer__logo-container">
        <a href="<?php echo get_home_url(); ?>">
          <img src="<?= $footer['footer_logo']['url'] ?>" alt="Logo">
        </a>
      </div>
      <div class="footer__info">
        <p class="footer__address"><?= $footer['address']  ?></p>
        <a href="<?= $footer['phone']['url']  ?>" class="footer__phone"><?= $footer['phone']['title']  ?></a>
        <a href="<?= $footer['email']['url']  ?>" class="footer__email"><?= $footer['email']['title']  ?></a>
      </div>
    </div>
  </div>

</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>