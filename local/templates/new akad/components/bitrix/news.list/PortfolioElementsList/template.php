<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>



<!-- all works -->
<!-- <div class="col-md-9"> -->
	        <?php if(!empty($arResult["ITEMS"])) : ?>
				<div class="row portfolio_container">

				<?php foreach($arResult["ITEMS"] as $arItem) : ?>
					<!-- single work -->
					<div class="col-md-4 photography">
						<a href="<?= isset($arItem['SECTION_NAME']) ? $arItem['SECTION_NAME'] : '' ?>" class="portfolio_item wow fadeInUp">
							<img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $arItem['PREVIEW_PICTURE']['ALT'] ?>">
							<div class="portfolio_item_hover">
								<div class="item_info">
									<span><?=$arItem['NAME'] ?></span>
									<em>photography</em>
								</div>
							</div>
						</a>
						<?php endforeach; ?>
					</div>
		    <?php endif; ?>			
					

					
