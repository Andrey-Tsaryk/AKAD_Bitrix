<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("CONTACT US");
?>

<!-- HERO SECTION  -->
<div class="site-hero_2">
		<div class="page-title">
			<div class="big-title montserrat-text uppercase">Contact us</div>
			<div class="small-title montserrat-text uppercase">home / contact</div>
		</div>
	</div>

	

	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
				

				<?$APPLICATION->IncludeComponent("bitrix:main.feedback", "main_feedback", Array(
	"EMAIL_TO" => "tsaryk.job.it@gmail.com",	// E-mail, на который будет отправлено письмо
		"EVENT_MESSAGE_ID" => "",	// Почтовые шаблоны для отправки письма
		"OK_TEXT" => "Спасибо, ваше сообщение отправлено.",	// Сообщение, выводимое пользователю после отправки
		"REQUIRED_FIELDS" => array(	// Обязательные поля для заполнения
			0 => "NAME",
			1 => "EMAIL",
			2 => "OBJECT",
			3 => "MESSAGE",
		),
		"USE_CAPTCHA" => "N",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>


					<!-- <div class="row">
						<form action="#" method="post">
							<div class="col-md-6">
								<div class="input_1" style="margin-bottom:30px">
									<input type="text" name="name">
									<span>your name</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input_1" style="margin-bottom:30px">
									<input type="text" name="email">
									<span>your email</span>
								</div>
							</div>
							<div class="col-md-12">
								<div class="input_1" style="margin-bottom:30px">
									<input type="text" name="object">
									<span>object</span>
								</div>
							</div>
							<div class="col-md-12">
								<div class="textarea_1" style="margin-bottom:30px">
									<textarea name="message"></textarea>
									<span>message</span>
								</div>
							</div>
							<div class="col-md-12">
								<a href="#" class="btn green"><span>send</span></a>
							</div>
						</form>
					</div> -->

					<?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	"",
	Array(
		"API_KEY" => "",
		"CONTROLS" => array("ZOOM"),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:53.89709144146355;s:10:\"yandex_lon\";d:25.297895080157613;s:12:\"yandex_scale\";i:19;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:25.297803885051113;s:3:\"LAT\";d:53.89708193652647;s:4:\"TEXT\";s:22:\"Здесь я живу\";}}}",
		"MAP_HEIGHT" => "846",
		"MAP_ID" => "",
		"MAP_WIDTH" => "555",
		"OPTIONS" => array("ENABLE_SCROLL_ZOOM")
	)
);?>

	<h4 class="montserrat-text uppercase" style="margin-top:100px"><?$APPLICATION->IncludeComponent(
	"bitrix:main.include","",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH . "/includes/footer_contact.php"
	));?></h4>

	<p><?$APPLICATION->IncludeComponent("bitrix:main.include","",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH . "/includes/footer_text.php"
	));?></p>
					
	<p>
	<?$APPLICATION->IncludeComponent("bitrix:main.include","",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH . "/includes/footer_address.php"
	));?><br/>

	<?$APPLICATION->IncludeComponent("bitrix:main.include","",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH . "/includes/footer_phone.php"
	));?> <br/>

	<div><?$APPLICATION->IncludeComponent("bitrix:main.include","",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_TEMPLATE_PATH . "/includes/footer_email.php"
	));?></div>
	</p>

					<ul class="social-icons" style="margin-top:30px;">
						<li>
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",
						Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_TEMPLATE_PATH . "/includes/facebook.php"
						));?>
						</li>
						<li>
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",
						Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_TEMPLATE_PATH . "/includes/twitter.php"
						));?>
						</li>
						<li>
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",
						Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_TEMPLATE_PATH . "/includes/youtube.php"
						));?>
						</li>
						<li>
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",
						Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_TEMPLATE_PATH . "/includes/linkedin.php"
						));?>
						</li>
						<li>
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",
						Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_TEMPLATE_PATH . "/includes/pinterest.php"
						));?>
						</li>
						<li><?$APPLICATION->IncludeComponent("bitrix:main.include","",
						Array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_TEMPLATE_PATH . "/includes/instagram.php"
						));?>
						</li>
					</ul>
				</div><!-- end col -->
				<!-- Map -->
				<div class="col-md-6">
					<div id="map" style="width:100%"></div>
				</div>
				<!-- /Map -->
			</div>
		</div>
	</section>


	<!-- newsletter -->
	<section class="green-section wow fadeInUp" style="padding:50px 0">
		<div class="container">
			<div class="col-md-6 col-sm-12">
				<div class="row">
					<span class="white-text montserrat-text uppercase" style="font-size:30px;display:block;">
						you think we're cool? let's work together
					</span>
					<a href="#" class="btn white" style="margin-top:30px"><span>get in touch</span></a>
				</div>
			</div>

			<div class="col-md-6 col-sm-12">
				<div class="row">
					<div class="white-section" style="padding:20px">
						<span class="montserrat-text uppercase" style="font-size:24px">stay informed with our newsletter</span>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.
						</p>
						<form action="#" method="post">
							<div class="input_1">
								<input type="text" name="email">
								<span>your email</span>
							</div>
							<button type="submit" class="btn green" style="margin-top:20px"><span>send</span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>