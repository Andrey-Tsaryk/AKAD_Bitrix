<? if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>

<!DOCTYPE html>
<html>
<head>

	<?php
	use \Bitrix\Main\Page\Asset;
	$APPLICATION->ShowHead();
	?>

	<title><?php $APPLICATION->ShowTitle(); ?></title>

	<?php
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/bootstrap.min.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/ionicons.min.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/flexslider.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/animsition.min.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/animate.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/style.css");
	?>

<?php
	Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
	?>

	<!-- META TAGS -->
	<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH; ?>/assets/img/favicon.ico">
	<meta name="author" content="Amine Akhouad">
	<meta name="description" content="AKAD is a creative and modern template for digital agencies">

</head>
<body class="animsition">

	<div id="#panel">
	<?php $APPLICATION->ShowPanel(); ?>
	</div>

	<!-- HEADER  -->
	<header class="main-header">
		<div class="container">
			<div class="logo">
				<a href="/"><img src="<?=SITE_TEMPLATE_PATH; ?>/assets/img/logo.png" alt="logo"></a>
			</div>

			<?$APPLICATION->IncludeComponent("bitrix:menu", "header_menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"COMPONENT_TEMPLATE" => "catalog_horizontal",
		"MENU_THEME" => "site",	// Тема меню
	),
	false
);?>

			<!-- <div class="menu">
				
				<nav class="desktop-nav">
					<ul class="first-level">
						<li><a href="index.html" class="animsition-link">Home</a></li>
						<li><a href="about.html" class="animsition-link">about us</a></li>
						<li><a href="services.html" class="animsition-link">services</a></li>
						<li><a href="">portfolio</a>
							<ul class="second-level">
								<li><a href="portfolio-1.html" class="animsition-link">portfolio list</a></li>
								<li><a href="single-project.html" class="animsition-link">single project 1</a></li>
								<li><a href="single-project-2.html" class="animsition-link">single project 2</a></li>
							</ul>
						</li>
						<li><a href="">blog</a>
							<ul class="second-level">
								<li><a href="blog-1.html" class="animsition-link">posts list</a></li>
								<li><a href="single-post.html" class="animsition-link">single post</a></li>
							</ul>
						</li>
						<li><a href="contact.html" class="animsition-link">contact us</a></li>
					</ul>
				</nav>
				
				<nav class="mobile-nav"></nav>
				<div class="menu-icon">
					<div class="line"></div>
					<div class="line"></div>
					<div class="line"></div>
				</div>
			</div> -->
		</div>
	</header>