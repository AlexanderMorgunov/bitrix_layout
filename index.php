<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Door discont");?>
      <div class="compilation">
        <div class="compilation_header"><h2>Подборки</h2></div>
        <div class="carousel_wrapper">
          <button class="arrow"><img src="<?=SITE_TEMPLATE_PATH?>/img/svg/row_left.svg" alt="arrow-left"></button>
          <div class="compilation_carousel_container">
            <div class="slider-inner">
              <div class="slide">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/1.png" alt="slide1" />
              </div>
              <div class="slide">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/2.png" alt="slide2" />
              </div>
              <div class="slide">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/3.png" alt="slide3" />
              </div>
              <div class="slide">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/4.png" alt="slide4" />
              </div>
              <div class="slide">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/5.png" alt="slide5" />
              </div>
            </div>
          </div>
          <button class="arrow"><img src="<?=SITE_TEMPLATE_PATH?>/img/svg/row_right.svg" alt="arrow-right"></button>
        </div>
      </div>
      <div class="request">
        <div class="request_header">
          Поможем подобрать дверь 
        </div>
        <div class="request_input_cycle"></div>
        <div class="request_input_cycle2"></div>

    <?$APPLICATION->IncludeComponent("bitrix:main.feedback", "request_form", Array(
	  "EMAIL_TO" => "morgunowaleks@yandex.ru",	// E-mail, на который будет отправлено письмо
		"EVENT_MESSAGE_ID" => array(	// Почтовые шаблоны для отправки письма
			0 => "7",
		),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",	// Сообщение, выводимое пользователю после отправки
		"REQUIRED_FIELDS" => ["NAME", "PHONE"],
		"USE_CAPTCHA" => "N",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
    "AJAX_MODE" => "Y",
	),
	false
);?>
      </div>
    </main>
    <footer></footer>
  </body>
</html>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>