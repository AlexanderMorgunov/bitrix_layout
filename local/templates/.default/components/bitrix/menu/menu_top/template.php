<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
     <ul class="toolbar">
<?foreach($arResult as $arItem):?>

	<?if ($arItem["TEXT"] == "logo"):?>
		<li class="logo">
            <a href="<?=$arItem['LINK'];?>"><img src="<?=SITE_TEMPLATE_PATH?>/img/svg/logo.svg" alt="logo" /></a>
          </li>

	<?elseif($arItem["TEXT"] == "hamburger"): ?>
		  <li>
            <a href="<?=$arItem['LINK'];?>">
              <div class="toolbar_hamburger">
                <div class="toolbar_hamburger_dash"></div>
                <div class="toolbar_hamburger_dash"></div>
              </div>
            </a>
          </li>

	<?elseif($arItem["TEXT"] == "phone"): ?>
		<li class="header_phone_list_item">
            <a class="header_phone" href="tel:+78003335733">8-800-333-57-33</a>
		</li>
		<li><div class="header_phone_and_search_dash"></div></li>

	<?elseif($arItem["TEXT"] == "search"): ?>
		<li>
            <a href="<?=$arItem['LINK'];?>" class="search">
              <img src="<?=SITE_TEMPLATE_PATH?>/img/svg/search-24px.svg" alt="search" />
            </a>
          </li>

	<?else: ?>
		<li>
			<a href="<?=$arItem['LINK'];?>"><?=$arItem['TEXT'];?></a>
		</li>

	<?endif?>

<?endforeach?>

	</ul>
<?endif?>