<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package balakIT
 */

get_header();
/* Получаю все поля на странице, которые выводяться с помощью ACF */
$custom_fields = get_fields(get_the_ID());
?>
		<section class="main-screen">
			<div id="particles-js"></div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<h1 id="typing">
						<?php 
							$str = get_field('main-screen');
							$split = explode(" ", $str);
							$first = $split[0] . ' ' . $split[1] . ' ';
							$all = array_slice($split, 2, -1);
							$str_out = implode(' ', $all)
						?>
						<span><?php echo $first; ?></span><?php echo $str_out; ?>
						</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 text-center">
						<?php echo do_shortcode( '[contact-form-7 id="18" title="Контактная форма 1"]' ); ?>
					</div>
				</div>
			</div>
		</section>

		<section id="services" class="center-content">
			<div class="card-section">
				<div class="decor-area"></div>
				<div class="services">
					<h3 class="section-title">Пакет <span class="red-text">услуг</span></h3>

					<div id="card-tab-1" class="active-card">
						<?php $descr_1 = get_field('descr-1'); ?>
						<?php echo $descr_1; ?>
					</div>

					<div id="card-tab-2">
						<?php $descr_2 = get_field('descr_2'); ?>
						<?php echo $descr_2; ?>
					</div>

					<div id="card-tab-3">
						<?php $descr_3 = get_field('descr-3'); ?>
						<?php echo $descr_3; ?>
					</div>

					<button data-fancybox data-src="#modal1" href="javascript:;" class="red-button">Выбрать Тариф</button>
					<div style="display: none;" id="modal1">
						<h2>Консультанты открыты для всех ваших вопросов и всегда готовы помочь.<br/> <span class="red-text">Оставьте заявку и мы свяжемся с вами в ближайшее время.</span></h2>

						
						<div class="action-block__form">
							<?php echo do_shortcode( '[contact-form-7 id="43" title="Выбрать тариф"]' ); ?>
						</div> 
					</div>
				</div>


                // modalmobile


				<div class="card-container">
					<div class="services-cards">

						<a href="#card-tab-1" class="services-item-wrapper services-item-wrapper_red active-card">
							<div class="services-item">
								<p class="services-item__title">Landing Page <br /><span>(одностраничный сайт)</span></p>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="services-item__logo" alt="">
								<p class="services-item__price">$ <?php $price_1 = get_field('price-1'); ?>
								<?php echo $price_1; ?></p>
							</div>
						</a>

						<a href="#card-tab-2" class="services-item-wrapper services-item-wrapper_gray">
							<div class="services-item">
								<p class="services-item__title">Landing Page <br /><span>+ Настройка рекламных кампаний</span></p>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="services-item__logo" alt="">
								<p class="services-item__price">$ <?php $price_2 = get_field('price-2'); ?>
								<?php echo $price_2; ?></p>
							</div>
						</a>

						<a href="#card-tab-3" class="services-item-wrapper services-item-wrapper_yellow">
							<div class="services-item">
								<p class="services-item__title">Landing Page <br /><span>+ Настройка рекламных кампаний
								<br />+ Юридическая гарантия результата</span></p>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="services-item__logo" alt="">
								<p class="services-item__price">$ <?php $price_3 = get_field('price-3'); ?>
								<?php echo $price_3; ?></p>
							</div>
						</a>

					</div>
				</div>
			</div>

			<div class="red-separator">
				<img class="red-separator__logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
			</div>

			<div id="about" class="about-us">
				<div class="about-us__img-container">
					<div class="about-us__image">
						<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/laptop.png" alt="">

						<a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
							<div class="about-us__image-btn"></div>
						</a>
						
					</div>
				</div>
				
				<div class="about-us__text-container">
					<div class="about-us__description">
						<h3 class="section-title">О <span class="red-text">нас</span></h3>

						<p class="text-content">
						<?php 
							$str2 = get_field('about_us');
							$split2 = explode(" ", $str2);
							$first2 = $split2[0] . ' ' . $split2[1] . ' ';
							$all2 = array_slice($split2, 2 );
							$str_out2 = implode(' ', $all2)
						?>
						<span class="red-text"><?php echo $first2; ?></span><?php echo $str_out2; ?></p>

					</div>
				</div>
			</div>

			<div id="statistic" class="container-fluid">
				<div class="row">
					<div class="col">
						<div class="statistic-wrapper">
							<div class="statistic">
								<h3 class="section-title text-center">Мы в <span class="red-text">цифрах</span></h3>
								<div class="statistic__number">
									<div class="number-item">
										<span class="number count" data-from="0" data-to="93">0</span>
										<p>Наши партнеры</p>
									</div>
									<div class="number-item">
										<span class="number count2" data-from="0" data-to="78">0</span>
										<p>LANDING PAGE</p>
									</div>
									<div class="number-item">
										<span class="number count3" data-from="0" data-to="279">0</span>
										<p>НАСТРОИЛИ<br />РЕКЛАМНЫХ<br />КАМПАНИЙ</p>
									</div>
									<div class="number-item">
										<span class="number count4" data-from="0" data-to="43800">0</span>
										<p>ПРИВЕЛИ<br />ПОТЕНЦИАЛЬНЫХ<br />КЛИЕНТОВ</p>
									</div>
								</div>
								<span class="decor-line"></span>
								<span class="decor-line decor-line_bottom"></span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-8">
						<div class="action-block">
							<p class="action-text">Хотите заглянуть в будущее?<br/> <span class="red-text">Оставьте заявку и мы просчитаем сколько потенциальных клиентов принесет ваш Landing Page.</span></p>
							<div class="action-block__form">
								<?php echo do_shortcode( '[contact-form-7 id="44" title="Первый екшн блок"]' ); ?>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-4">
					</div>
				</div>
			</div>

			<div id="portfolio" class="container-fluid work">
				<div class="row">
					<div class="col">
						<h3 class="section-title">Примеры <span class="red-text">работ<span class="red-text"></span></h3>
						<div class="our-work">
							<div class="our-work-container">
								<header class="our-work-container__header">
									<div class="our-work-container__header-wrap">
										<ul class="our-work-container__btn-container">
											<li><a href="#tab-1">01</a></li>
											<li><a class="active" href="#tab-2">02</a></li>
											<li><a href="#tab-3">03</a></li>
										</ul>
									</div>
								</header>
								<div id="tab-1" class="our-work-container__content">
									<div class="content-left">
										<h4>Задача 1:</h4>
										<p class="text-content"> <?php echo the_field('zadacha_1'); ?></p>
			
										<h4>Результат1 :</h4>
										<p class="text-content"><?php  echo the_field('result_1'); ?></p>
									</div>
									<div class="content-right">
									</div>
								</div>

								<div id="tab-2" class="our-work-container__content active">
									<div class="content-left">
										<h4>Задача2 :</h4>
										<p class="text-content"><?php echo the_field('zadacha_2'); ?></p>

										<h4>Результат2 :</h4>
										<p class="text-content"><?php  echo the_field('result_2'); ?></p>
									</div>
									<div class="content-right">
									</div>
								</div>

								<div id="tab-3" class="our-work-container__content">
									<div class="content-left">
										<h4>Задача3 :</h4>
										<p class="text-content"><?php echo the_field('zadacha_3'); ?></p>

										<h4>Результат3 :</h4>
										<p class="text-content"><?php  echo the_field('result_3'); ?></p>
									</div>
									<div class="content-right">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="schema-work" class="roadmap">
			<div id="particles-js2"></div>

			<div class="container-fluid">
				<h3 class="section-title">Схема работы</h3>

				<div class="roadmap_slider">

					<div class="roadmap_slider_item right first">
						<h2><?php echo the_field('name_1'); ?></h2>
						<div class="roadmap_scroll" id="roadmap_scroll">
							
							<?php echo the_field('description_1'); ?>
							
						</div>
						<div class="roadmap_number"></div>
					</div>

					<div class="roadmap_slider_item right">
						<h2><?php echo the_field('name_2'); ?></h2>
						<div class="roadmap_scroll" id="roadmap_scroll">
							
							<?php echo the_field('description_2'); ?>
							
						</div>
						<div class="roadmap_number"></div>
					</div>

					<div class="roadmap_slider_item right">
						<h2><?php echo the_field('name_3'); ?></h2>
						
						<div class="roadmap_scroll" id="roadmap_scroll">
							
							<?php echo the_field('description_3'); ?>
							
						</div>
						<div class="roadmap_number"></div>
					</div>

					<div class="roadmap_slider_item right">
						<h2><?php echo the_field('name_4'); ?></h2>
						
						<div class="roadmap_scroll" id="roadmap_scroll">
							
							<?php echo the_field('description_4'); ?>
							
						</div>
						<div class="roadmap_number"></div>
					</div>

					<div class="roadmap_slider_item right last">
						<h2><?php echo the_field('name_5'); ?></h2>

						<div class="roadmap_scroll" id="roadmap_scroll">
							
							<?php echo the_field('description_5'); ?>
							
						</div>
						<div class="roadmap_number"></div>
					</div>

					<div class="roadmap_slider_item right last">
						<h2><?php echo the_field('name_6'); ?></h2>

						<div class="roadmap_scroll" id="roadmap_scroll">
							
							<?php echo the_field('description_6'); ?>
							
						</div>
						<div class="roadmap_number"></div>
					</div>

				</div>
			</div>
		</section>

		<section class="contact">
			<div class="contact__wrapper">
				<div class="contact__action">
					<p class="action-text action-text_second">Есть сайт, но нет клиентов с него?<br/> <span class="red-text">Оставьте на него ссылку и мы проведем анализ и мы найдем решение!</span></p>
					
					<div action="" class="action-block__form">
						<?php echo do_shortcode( '[contact-form-7 id="45" title="Второй екшн блок"]' ); ?>
					</div>
				</div>
			</div>
		</section>

<?php
get_footer();
