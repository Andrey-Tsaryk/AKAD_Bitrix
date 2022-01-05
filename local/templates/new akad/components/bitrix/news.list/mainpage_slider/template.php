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

<?php if(!empty($arResult['ITEMS'])): ?>
	<div class="site-hero">

	<?php foreach ($arResult['ITEMS'] as $arItem): ?>
		<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
		<ul class="slides id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<li>
				<div><span class="small-title uppercase montserrat-text"><?= isset($arItem['NAME']) ? $arItem['NAME'] : ' ' ?></span></div>
				<div class="big-title uppercase montserrat-text"><?= isset($arItem['PREVIEW_TEXT']) ? $arItem['PREVIEW_TEXT'] : ' ' ?></div>
				<?php if(!empty($arItem['DETAIL_TEXT'])): ?>
				<p><?=$arItem['DETAIL_TEXT']; ?></p>
				<?php endif; ?>
			</li>			
		</ul>
	<?php endforeach; ?>	
	</div>

<?php endif; ?>
	 