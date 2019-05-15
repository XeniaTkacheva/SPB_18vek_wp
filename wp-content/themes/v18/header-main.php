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
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#d0ad4a">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="theme-color" content="#ffffff">

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
            <a href="#" class="main-header__logo0"><img src="<?php echo esc_url(V18_IMG_DIR . '/logo-0-1@1x.jpg'); ?>" srcset="<?php echo esc_url(V18_IMG_DIR . '/logo-0-1@2x.jpg'); ?>  2x" alt="Логотип 18 век" class="main-header__image" width="75" height="78"></a>
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
				<a href="<?php echo esc_url('https://spbu.ru'); ?>" class="main-header__logo2" target="_blank">
					<img src="<?php echo esc_url( V18_IMG_DIR . '/logo-big.svg'); ?>" alt="Логотип СПбГУ" width="94" height="27">
				</a>
				<a href="<?php echo esc_url('https://phil.spbu.ru'); ?>" class="main-header__logo3" target="_blank">
					<img src="<?php echo esc_url(V18_IMG_DIR . '/logo-wht.png'); ?>" alt="Логотип ФилФак" width="126" height="33">
				</a>
			</div>
			<div class="main-header__heading">
				<h1 class="main-header__title">Русский <br><span class="main-header__num">XVIII</span> век<span class="dot">.</span></h1>
				<h2 class="main-header__subtitle">*Научно-исследовательский филологический семинар</h2>
				<a href="<?php echo esc_url(get_template_directory_uri() . '/publications?#publications'); ?>" class="main-header__btn button">Перейти к публикациям</a>
			</div>
		</div>
	</div>

</header>
<main class="page-main">
