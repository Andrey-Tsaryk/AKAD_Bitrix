<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<?php if(empty($arResult['ALL_ITEMS'])) return; ?>

            <div class="menu">
				<nav class="desktop-nav">
					<ul class="first-level">
						<?php foreach($arResult['ALL_ITEMS'] as $arItem): ?>

							<?php if($arItem['SELECTED']): ?>
						<li><a href="<?=$arItem['LINK']; ?>" class="animsition-link"><?=$arItem['TEXT']; ?></a></li>

						<?php else: ?>
							<li><a href="<?=$arItem['LINK']; ?>"><?=$arItem['TEXT']; ?></a></li>
							
						<?php endif; ?>	
						<?php endforeach; ?>
					</ul>	
				</nav>
      		</div>