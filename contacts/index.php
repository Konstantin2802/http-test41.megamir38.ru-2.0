<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");?><div class="row contacts" itemscope="" itemtype="http://schema.org/Organization">
	<div class="col-md-12">
		<div class="row contacts">
			<div class="col-md-5">
				<div itemprop="description">
					 <?$APPLICATION->IncludeFile(SITE_DIR."include/contacts-about.php", Array(), Array("MODE" => "html", "NAME" => "Contacts about"));?>
				</div>
			</div>
			<div class="col-md-7">
				<table cellpadding="0" cellspasing="0">
				<tbody>
				<tr>
					<td align="left" valign="top">
 <i class="fa colored fa-map-marker"></i>
					</td>
					<td align="left" valign="top">
 <span class="dark_table">Адрес</span> <br>
 <span itemprop="address"><?$APPLICATION->IncludeFile(SITE_DIR."include/contacts-site-address.php", Array(), Array("MODE" => "html", "NAME" => "Address"));?></span>
					</td>
					<td align="left" valign="top">
 <i class="fa colored fa-phone"></i>
					</td>
					<td align="left" valign="top">
 <span class="dark_table">Телефон</span> <br>
 <span itemprop="telephone"><?$APPLICATION->IncludeFile(SITE_DIR."include/contacts-site-phone.php", Array(), Array("MODE" => "html", "NAME" => "Phone"));?></span>
					</td>
				</tr>
				<tr>
				</tr>
				<tr>
					<td align="left" valign="top">
 <i class="fa colored fa-envelope"></i>
					</td>
					<td align="left" valign="top">
 <span class="dark_table">E-mail</span> <br>
 <span itemprop="email"><?$APPLICATION->IncludeFile(SITE_DIR."include/contacts-site-email.php", Array(), Array("MODE" => "html", "NAME" => "Email"));?></span>
					</td>
					<td align="left" valign="top">
 <i class="fa colored fa-clock-o"></i>
					</td>
					<td align="left" valign="top">
 <span class="dark_table">Режим работы</span> <br>
						 <?$APPLICATION->IncludeFile(SITE_DIR."include/contacts-site-schedule.php", Array(), Array("MODE" => "html", "NAME" => "Schedule"));?>
					</td>
				</tr>
				<tr>
				</tr>
				</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
 <?// class=col-md-12 col-sm-12 col-xs-12 content-md?> <?// class="maxwidth-theme?> <?// class=row?> <br>
<div class="dummy">
 <span style="font-size: 16pt;">Дорогие друзья, дальнейшее развитие различных форм деятельности играет важную роль в формировании соот</span><span style="font-size: 16pt;"></span><span style="font-size: 16pt;">ветствующих условий активизации? С другой стороны выбранный нами инновационный путь требует от нас анализа дальнейших направлений развитая системы массового участия? Значимость этих проблем настолько очевидна, что постоянный количественный рост и сфера нашей активности способствует повышению актуальности направлений прогрессивного развития</span>
</div>
<br>
<div class="map_block">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:map.google.view",
	".default",
	Array(
		"API_KEY" => "AIzaSyBIdPFx7gVuh7FRw3kLKRGb091NwKzuH-0",
		"COMPONENT_TEMPLATE" => ".default",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CONTROLS" => array(0=>"SMALL_ZOOM_CONTROL",),
		"INIT_MAP_TYPE" => "ROADMAP",
		"MAP_DATA" => "a:4:{s:10:\"google_lat\";d:52.266929811874;s:10:\"google_lon\";d:104.22029735089;s:12:\"google_scale\";i:16;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:4:\"TEXT\";s:80:\"ул. Сергеева дом 3в.###RN###Группа компаний БАЙС\";s:3:\"LON\";d:104.22061622143;s:3:\"LAT\";d:52.266980458191;}}}",
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array(0=>"ENABLE_DRAGGING",1=>"ENABLE_KEYBOARD",)
	)
);?>
</div>
<div class="color_block">
	<div class="row">
		<div class="maxwidth-theme">
			<div class="col-md-12">
				<div class="block front">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-3 col-sm-3">
										 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "standard.php",
		"PATH" => SITE_DIR."include/front-text1.php"
	)
);?>
									</div>
									<div class="col-md-7 col-sm-6">
										 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "standard.php",
		"PATH" => SITE_DIR."include/front-text2.php"
	)
);?>
									</div>
									<div class="col-md-2 col-sm-3">
										 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "standard.php",
		"PATH" => SITE_DIR."include/front-text3.php"
	)
);?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>