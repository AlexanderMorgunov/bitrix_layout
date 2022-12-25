<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <?php $APPLICATION->ShowHead()?>
    <title><?php $APPLICATION->ShowTitle() ?></title>
    <?php
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH .'/css/style.css'); 
        Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0" />');
    ?>
  </head>
  <body>
        <?php $APPLICATION->ShowPanel();?>
    <header class="header">
      <nav class="navbar_header">

  <?$APPLICATION->IncludeComponent("bitrix:menu", "menu_top", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "top",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"COMPONENT_TEMPLATE" => "blue_tabs"
	),
	false
);?>
      </nav>
      <div class="main_banner">
        <div class="main_banner_container">
          <h1 class="main_banner_offer_header">Лови выгоду <br />от 16 785 &#8381</h1>
          <h2 class="main_banner_offer_text">
            Специальные цены <br />
            на двери в июле
          </h2>
          <button class="main_banner_btn">Подробнее<img src="<?=SITE_TEMPLATE_PATH?>/img/svg/row_right_white.svg" alt="row"></button>
        </div>
        <div class="dash_container">
          <button class="dash_gray"></и>
          <button class="dash_dark"></button>
          <button class="dash_gray"></button>
        </div>
        <?$APPLICATION->IncludeComponent("bitrix:menu", "menu_right", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "right",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>
      </div>
    </header>
    <main>