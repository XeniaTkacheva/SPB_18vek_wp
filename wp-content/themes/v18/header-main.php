<?php
/**
 * The header for front-page of the theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package v18
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body<?php body_class(); ?>>
<div class="modal-overlay"></div>

<header class="main-header">
	<div class="main-header__wrapper">
		<button class="main-header__nav-toggle nav-toggle nav-toggle--off" type="button">
			<span class="visually-hidden">Открыть меню</span>
		</button>
		<nav class="main-header__nav">
			<a href="#" class="main-header__logo1">XVIII <span class="dot">.</span></a>

			<?php
                wp_nav_menu( array(
                    'theme_location' => 'top-menu',
                    'menu_id'        => 'primary-menu',
                    'menu_class'     => 'main-header__list site-list site-list--on default-list'
                    )
                );
			?>


		</nav>
		<div class="main-header__container">
			<div class="main-header__logos">
				<a class="main-header__logo2">
					<img src="<?php echo esc_url( V18_IMG_DIR . '/logo-big.svg'); ?>" alt="Логотип СПбГУ" width="94" height="27">
				</a>
				<a class="main-header__logo3">
					<img src="<?php echo esc_url(V18_IMG_DIR . '/logo-wht.png'); ?>" alt="Логотип ФилФак" width="126" height="33">
				</a>
			</div>
			<div class="main-header__heading">
				<h1 class="main-header__title">Русский <br><span class="main-header__num">XVIII</span> век<span class="dot">.</span></h1>
				<h2 class="main-header__subtitle">*Научно-исследовательский филологический семинар</h2>
				<a href="#" class="main-header__btn button">Перейти к публикациям</a>
			</div>
		</div>
	</div>

</header>
<main class="page-main">
