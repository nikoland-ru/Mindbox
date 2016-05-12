<?php

	/**
	 * FOOTER TEMPLATE
	 */

?>

	<?php get_template_part("layouts/page-utils"); ?>

	<?php get_template_part("layouts/overlay-search"); ?>
	<?php get_template_part("layouts/overlay-media"); ?>

<footer class="footer-wr">

	<div class="footer">
		<div class="wrapper">
			<div class="footer__top">

				<div class="footer__soc-wr">

					<a href="https://habrahabr.ru/company/mindbox/" target="_blank" class="footer__soc-item">
						<div class="footer__soc-item-img">
							<span class="iconic iconic--habr"></span>
						</div>
                        <span class="footer__soc-item-txt">
                            Блог на хабре
                        </span>
					</a>
					<a href="https://www.facebook.com/mindbox.msk/" target="_blank" class="footer__soc-item" draggable="false">
						<div class="footer__soc-item-img">
							<span class="iconic iconic--fb-round"></span>
						</div>
                        <span class="footer__soc-item-txt">
                            Мы в Facebook
                        </span>
					</a>

				</div>

			</div>

			<div class="footer__main">
				<div class="footer__logo-col">
					<a href="/" class="footer__logo">
						<img src="http://mindbox.pro-7.ru/wp-content/themes/mindbox/images/logo-wh.png" alt="">
					</a>
				</div>
				<div class="footer__nav-cols">
					<div class="footer__nav-col">
						<h6 class="h6">
							Маркетинг
						</h6>
						<ul id="menu-marketing" class="footer__nav-list"><li id="menu-item-49" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-49"><a href="http://#">Обучающие презентации</a></li>
							<li id="menu-item-50" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-50"><a href="http://#">Блог</a></li>
							<li id="menu-item-51" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-51"><a href="http://#">О нас пишут</a></li>
						</ul>                    </div>

					<div class="footer__nav-col">
						<h6 class="h6">
							О компании
						</h6>
						<ul id="menu-o-kompanii" class="footer__nav-list"><li id="menu-item-55" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-55"><a href="/company">История</a></li>
							<li id="menu-item-56" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-56"><a href="http://mindbox.pro-7.ru/documents">Документы</a></li>
							<li id="menu-item-57" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-57"><a href="/company#jobs">Вакансии</a></li>
						</ul>                    </div>

				</div>

				<div class="footer__copyright">
					<p class="footer__copyright-title">
						MindBox © 2016
					</p>
					<p class="footer__copyright-txt">
						Mindbox — российская
						ИТ-компания и бутиковое
						аналитическое агентство.
					</p>
				</div>

				<div class="footer__dev">
					Разработка сайта — <a href="http://nikoland.ru" target="_blank">Студия Nikoland</a>
				</div>
			</div>
		</div>
	</div>
</footer>


<div class="side-popup js-side-popup" data-popup-name="demo">

	<div class="side-popup__wr side-popup__main">
		<form class="js-form" action="/wp-admin/admin-ajax.php?action=demo-form">
			<h4 class="h3-l">
				Запрос на подключение
			</h4>

			<div class="form-row">
				<div class="form-row__content-col ">
					<div class="form-row__content">
						<div class="input-cont">
							<input name="demo[name]" type="text" class="input" placeholder="Ваше имя" required>
						</div>
					</div>
				</div>
			</div> <!-- form-row -->

			<div class="form-row">
				<div class="form-row__content-col ">
					<div class="form-row__content">
						<div class="input-cont">
							<input name="demo[email]" type="email" class="input" placeholder="E-mail" required>
						</div>
					</div>
				</div>
			</div> <!-- form-row -->

			<div class="form-row">
				<div class="form-row__content-col ">
					<div class="form-row__content">
						<div class="input-cont">
							<input name="demo[tel]" type="tel" class="input" placeholder="Телефон" required>
						</div>
					</div>
				</div>
			</div> <!-- form-row -->

			<div class="form-row">
				<div class="form-row__content-col ">
					<div class="form-row__content">
						<div class="input-cont">
							<textarea name="demo[desc]" class="input" rows="5" placeholder="Краткая постановка задачи" required></textarea>
						</div>
					</div>
				</div>
			</div> <!-- form-row -->

			<div class="form-row form-row--submit">

				<div class="form-row__content-col">
					<div class="form-row__content">
						<button type="submit" class="btn btn--default btn--default-green">
							Отправить запрос
						</button>
					</div>
				</div>
			</div> <!-- form-row--inline -->

			<div class="form-all-msg js-form__all-msg">

			</div>

		</form>

	</div>

	<div class="side-popup__wr side-popup__bottom">
		<div class="person">
            <span class="person__ava">
                <img src="http://mindbox.pro-7.ru/wp-content/themes/mindbox/images/userfiles/person.jpg" alt="">
            </span>

			<p class="person__quote">
				«Этим запросом я займусь лично»
			</p>

			<div class="person__desc-wr">
				<p class="person__name">
					Иван Боровиков
				</p>
				<p class="person__post">
					Управляющий партнер
				</p>
			</div>
		</div>

	</div>

	<!--<span class="iconic iconic--cross2 side-popup__cross js-side-popup_closer"></span>-->

	<div class="popup-cross side-popup__cross js-side-popup_closer">
		<svg viewBox="0 0 30 30" preserveAspectRatio="none">
			<g>
				<polyline  points="27.504,3.486 15.004,15.969 14.034,14.997 26.534,2.514 	"/>
				<polyline  points="15.974,15.017 3.474,27.5 2.504,26.529 15.004,14.046 	"/>
				<polyline  points="3.484,2.506 15.966,15.007 14.995,15.977 2.512,3.476 	"/>
				<polyline  points="15.013,14.038 27.496,26.538 26.525,27.508 14.042,15.008 	"/>
			</g>
		</svg>
	</div>
</div>

	<?php wp_footer(); ?>
	
	<script src="<?= get_stylesheet_directory_uri(); ?>/assets/js/lib.js"></script>
	<script src="<?= get_stylesheet_directory_uri(); ?>/assets/js/app.js"></script>
</body>
</html>
