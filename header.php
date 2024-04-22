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


  <!-- 	<div class="cursor" data-cursor-container>
		<div class="cursor__ball cursor__ball--small" data-cursor-pointer>
			<svg height="32" width="32">
				<circle cx="15" cy="16" r="4" stroke-width="0"></circle>
			</svg>
		</div>
		<div class="cursor__ball cursor__ball--big" data-cursor-pointer>
			<svg>
				<circle cx="50" cy="50" r="40" stroke-width="0"></circle>
			</svg>
		</div>
	</div> -->
  <div data-scroll-container class="page-wrapper">
    <header data-scroll-section class="header"></header>
    <main data-scroll-container>