<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script>
		history.scrollRestoration = "manual"
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php
	$header = get_field('header', 'option');
	$navigation = get_field('header_nav', 'option'); ?>
	<div data-scroll-container class="page-wrapper">
		<header data-scroll-section class="header">
			<div class="header__container">
				<div class="header__logo">
					<a href="<?php echo get_home_url(); ?>">
						<img src="<?= $header['logo'] ?>" alt="Logo">
					</a>
				</div>
				<nav class="header__nav">
					<ul class="header__list">
						<?php foreach ($navigation['nav_list'] as $nav) : ?>
							<li class="header__item">
								<a href="<?= $nav['nav_item']['url'] ?>" class="header__link"><?= $nav['nav_item']['title'] ?></a>
							</li>
						<?php endforeach; ?>
					</ul>

				</nav>
			</div>


		</header>
		<main data-scroll-container>