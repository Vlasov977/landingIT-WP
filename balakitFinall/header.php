<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package balakIT
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Include Bootstrap 4 with CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'balakit' ); ?></a>

	<header id="masthead" class="header">
		<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
			<p>Business<br /> Development</p>
		</a>
		

		<div class="header__buttons">
			<div class="header__button-container">
				<a href="#contact" class="header__button"><span class="mobile-hide">КОНТАКТЫ</span>
					<span class="header__button-icon">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="31" height="31" viewBox="0 0 31 31"><defs><path fill="transparent" id="jtboa" d="M1419.176 91.324c0-7.662 7.662-15.324 15.324-15.324s15.324 7.662 15.324 15.324c0 7.663-7.662 15.325-15.324 15.325s-15.324-7.662-15.324-15.325z"/><path id="jtbob" d="M1433.124 80.649c2.488-.667 4.902 8.343 2.414 9.01a4.664 4.664 0 0 1-2.414-9.01z"/><path id="jtboc" d="M1436.055 91.59c2.488-.667 4.902 8.343 2.414 9.01a4.664 4.664 0 0 1-2.414-9.01z"/><path id="jtboe" d="M1430.66 85.922l1.467 5.477 1.48 5.525c.104.386-.026.757-.29.828-.265.07-.563-.185-.666-.572 0 0-1.186-2.655-1.923-5.406-.737-2.75-1.025-5.596-1.025-5.596-.104-.386.026-.757.29-.828.265-.07.563.185.666.572z"/><clipPath id="jtbod"><use fill="#fff" xlink:href="#jtboa"/></clipPath><clipPath id="jtbof"><use fill="#fff" xlink:href="#jtbob"/></clipPath><clipPath id="jtbog"><use fill="#fff" xlink:href="#jtboc"/></clipPath></defs><g><g transform="translate(-1419 -76)"><use fill="#fff" xlink:href="#jtboa"/><use fill="#fff" fill-opacity="0" stroke="#fff" stroke-miterlimit="50" stroke-width="3" clip-path="url(&quot;#jtbod&quot;)" xlink:href="#jtboa"/></g><g transform="translate(-1419 -76)"><use fill="#fff" xlink:href="#jtboe"/></g><g transform="translate(-1419 -76)"><use fill="transparent" xlink:href="#jtbob"/><use fill="#fff" fill-opacity="0" stroke="#fff" stroke-miterlimit="50" stroke-width="2" clip-path="url(&quot;#jtbof&quot;)" xlink:href="#jtbob"/></g><g transform="translate(-1419 -76)"><use fill="transparent" xlink:href="#jtboc"/><use fill="#fff" fill-opacity="0" stroke="#fff" stroke-miterlimit="50" stroke-width="2" clip-path="url(&quot;#jtbog&quot;)" xlink:href="#jtboc"/></g></g></svg>
					</span>
				</a>
				<button  class="header__button header__button-menu"><span class="mobile-hide">МЕНЮ</span>
					<span class="header__button-icon">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="31" height="31" viewBox="0 0 31 31"><defs><path fill="transparent" id="bgoka" d="M1628.176 91.324c0-7.662 7.662-15.324 15.324-15.324s15.324 7.662 15.324 15.324c0 7.663-7.662 15.325-15.324 15.325s-15.324-7.662-15.324-15.325z"/><path id="bgokc" d="M1634.69 88.681c0-.44.44-.88.88-.88h15.86c.44 0 .88.44.88.88s-.44.881-.88.881h-15.86c-.44 0-.88-.44-.88-.88z"/><path id="bgokd" d="M1634.69 93.968c0-.44.44-.881.88-.881h15.86c.44 0 .88.44.88.88 0 .441-.44.882-.88.882h-15.86c-.44 0-.88-.44-.88-.881z"/><clipPath id="bgokb"><use fill="#fff" xlink:href="#bgoka"/></clipPath></defs><g><g transform="translate(-1628 -76)"><use fill="#fff" xlink:href="#bgoka"/><use fill="#fff" fill-opacity="0" stroke="#fff" stroke-miterlimit="50" stroke-width="3" clip-path="url(&quot;#bgokb&quot;)" xlink:href="#bgoka"/></g><g transform="translate(-1628 -76)"><use fill="#fff" xlink:href="#bgokc"/></g><g transform="translate(-1628 -76)"><use fill="#fff" xlink:href="#bgokd"/></g></g></svg>
					</span>
				</button >
			</div>
		</div>
	</header><!-- #masthead -->
	<nav id="menu" class="menu">
		<ul class="menu__list">
			<li><a href="#services">Пакет услуг</a></li>
			<li><a href="#about">О нас</a></li>
			<li><a href="#statistic">Мы в цифрах</a></li>
			<li><a href="#portfolio">Примеры работ</a></li>
			<li><a href="#schema-work">Схема работы</a></li>
		</ul>
		<button class="header__button header__button-close"><span class="mobile-hide">Закрыть</span>
			<span class="header__button-icon">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="31" height="31" viewBox="0 0 31 31"><defs><path fill="transparent" id="zd68a" d="M1641.176 989.324c0-7.662 7.662-15.324 15.324-15.324s15.324 7.662 15.324 15.324c0 7.663-7.662 15.325-15.324 15.325s-15.324-7.662-15.324-15.325z"/><path id="zd68c" d="M1650.623 982.623c.311-.312.934-.312 1.246 0l11.214 11.214c.312.312.312.935 0 1.246-.311.312-.934.312-1.246 0l-11.214-11.214c-.312-.312-.312-.935 0-1.246z"/><path id="zd68d" d="M1650.623 995.083c-.312-.311-.312-.934 0-1.246l11.214-11.214c.312-.312.935-.312 1.246 0 .312.311.312.934 0 1.246l-11.214 11.214c-.312.312-.935.312-1.246 0z"/><clipPath id="zd68b"><use fill="#fff" xlink:href="#zd68a"/></clipPath></defs><g><g transform="translate(-1641 -974)"><use fill="#fff" xlink:href="#zd68a"/><use fill="#fff" fill-opacity="0" stroke="#fff" stroke-miterlimit="50" stroke-width="3" clip-path="url(&quot;#zd68b&quot;)" xlink:href="#zd68a"/></g><g transform="translate(-1641 -974)"><use fill="#fff" xlink:href="#zd68c"/></g><g transform="translate(-1641 -974)"><use fill="#fff" xlink:href="#zd68d"/></g></g></svg>
			</span>
		</button>
	</nav>

	<main>