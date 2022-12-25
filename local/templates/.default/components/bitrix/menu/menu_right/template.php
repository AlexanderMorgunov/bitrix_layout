<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<nav class="sidebar_container">
	<div class="line_one"></div>
	<div class="line_two"></div>
	<div class="line_three"></div>
	<div class="line_four"></div>
	<ul class="sidebar">
<?foreach($arResult as $arItem):?>

<?if($arItem["TEXT"] == "О нас"):?>
	<li class="rotate_text"><a href="/">О нас</a></li>

<?else :?>
	<li><a href="#"><?=$arItem['TEXT']?></a></li>

<?endif?>
<?endforeach?>
<?endif?>
</ul>
</nav>

