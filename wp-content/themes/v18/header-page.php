<?php
/**
 * The header for inner-page of the theme
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

<header class="page-header">
	<div class="page-header__wrapper">
		<button class="page-header__nav-toggle nav-toggle nav-toggle--off" type="button">
			<span class="visually-hidden">Открыть меню</span>
		</button>
		<nav class="page-header__nav">
			<a href="#" class="page-header__logo1">XVIII <span class="dot">.</span></a>
			<?php
            wp_nav_menu( array(
                    'theme_location' => 'top-menu',
                    'menu_id'        => 'primary-menu',
                    'menu_class'     => 'main-header__list site-list site-list--on default-list'
                )
            );
			?>
		</nav>
		<div class="page-header__container">
            <a href="<?php echo esc_url('https://18vekspb-old.ru'); ?>" class="page-header__to-old-site button" title="Перейти к прежнему сайту" target="_blank">К старой версии сайта &#8594;</a>

            <div class="page-header__logos">
                <a href="<?php echo esc_url('https://spbu.ru'); ?>" class="main-header__logo2" target="_blank">
					<img src="<?php echo esc_url( V18_IMG_DIR . '/logo-big.svg'); ?>" alt="Логотип СПбГУ" width="94" height="27">
				</a>
                <a href="<?php echo esc_url('https://phil.spbu.ru'); ?>" class="main-header__logo3" target="_blank">
					<img src="<?php echo esc_url(V18_IMG_DIR . '/logo-wht.png'); ?>" alt="Логотип ФилФак" width="126" height="33">
				</a>
			</div>
			<div class="page-header__heading">
				<h1 class="page-header__title">Русский <br><span class="page-header__num">XVIII</span> век<span class="dot">.</span></h1>
				<h2 class="page-header__subtitle">*Научно-исследовательский филологический семинар</h2>
				<a href="<?php echo esc_url(get_template_directory_uri() . '/publications?#publications'); ?>" class="page-header__btn button">Перейти к публикациям</a>
			</div>
		</div>
	</div>
</header>

<main class="inner-page">
