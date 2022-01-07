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
		<?php if (!empty($arResult['SECTION'])) : 
			

			// echo '<pre>';
			// print_r($arResult);
			// echo '</pre>';
			
			?>
            <div class="col-md-3">
				<div class="row categories-grid wow fadeInLeft">
					<span class="montserrat-text uppercase">choose category</span>

					<nav class="categories">
					
						<ul class="portfolio_filter">
						<?php foreach ($arResult['SECTION'] as $section) : ?>
							<li><a href="" class="active" data-filter=".<?=isset($section['CODE']) ? $section['CODE'] : ' '; ?>"><?=isset($section['NAME']) ? $section['NAME'] : ' '; ?></a></li>
							<?php endforeach; ?>
							
							<!-- <li><a href="" data-filter=".web">webdesign</a></li>
							<li><a href="" data-filter=".logo">logo</a></li>
							<li><a href="" data-filter=".graphics">graphics</a></li>
							<li><a href="" data-filter=".ads">advertising</a></li>
							<li><a href="" data-filter=".fashion">fashion</a></li> -->
						</ul>
						
					</nav>
				</div>
			</div> 
		<?php endif; ?>