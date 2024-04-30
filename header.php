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
		<header data-scroll-section data-header class="header">
			<div class="header__container">
				<a class="header__logo" href="<?php echo get_home_url(); ?>">
					<img src="<?= $header['logo'] ?>" alt="Logo">
				</a>
				<nav class="header__nav">
					<ul class="header__nav-list header__nav-list--desktop">
						<?php foreach ($navigation['nav_list'] as $nav) : ?>
							<li class="header__nav-item">
								<a href="<?= $nav['nav_item']['url'] ?>" class="header__nav-link"><?= $nav['nav_item']['title'] ?></a>
							</li>
						<?php endforeach; ?>
					</ul>
					<ul data-nav class="header__nav-list header__nav-list--mobile">
						<?php foreach ($navigation['nav_list'] as $nav) : ?>
							<li class="header__nav-item">
								<a href="<?= $nav['nav_item']['url'] ?>" class="header__nav-link"><?= $nav['nav_item']['title'] ?></a>
							</li>
						<?php endforeach; ?>
					</ul>
					<!-- hamburger menu svg -->
					<div data-nav-toggle class="header__hamburger">
						<div class="header__hamburger-line"></div>
						<div class="header__hamburger-line"></div>
						<div class="header__hamburger-line"></div>
					</div>
				</nav>
			</div>


		</header>
		<main data-scroll-container>