<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="mfeedback">
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if($arResult["OK_MESSAGE"] <> '')
{
	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>

  <form action="<?=POST_FORM_ACTION_URI?>" method="POST">
      <?=bitrix_sessid_post()?>
      
			
      <input class="request-input" type="text" name="user_name" placeholder="Ваше имя" value="<?=$arResult["AUTHOR_NAME"]?>">
      <input class="request-input" type="text" name="user_phone" placeholder="Телефон" value="<?=$arResult["AUTHOR_PHONE"]?>">
      <div class="request-checkbox_wrapper">


              <div class="request-checkbox_container">
                    <input class="request_checkbox" id="checkbox_id" type="checkbox">
                    <label for="checkbox_id"><span></span></label>
                    <div class="request_checkbox_text">
                      Нажимая кнопку "Отправить" я даю своё <sapn class="green-mark">согласие</sapn> на обработку персональных данных и соглашаюсь <span class="green-mark">с условиями и политикой</span> обработки персональных данных
                    </div>
              </div>
                <input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>" class="request_btn"><img src="<?=SITE_TEMPLATE_PATH?>/img/svg/row_right_white.svg" alt="row"></input>
      </div>
                <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
  </form>
</div>