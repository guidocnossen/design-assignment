<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Titel</title>

		<?php // <meta name="google" content="notranslate"> optional ?>
		<meta name="format-detection" content="telephone=no">

		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" viewport-fit="cover">

		<!-- Chrome, Firefox OS and Opera -->
	    <meta name="theme-color" content="#e6007e">
	    <!-- Windows Phone -->
	    <meta name="msapplication-navbutton-color" content="#e6007e">
	    <!-- iOS Safari -->
	    <meta name="apple-mobile-web-app-status-bar-style" content="#e6007e">

		<link rel="icon" href="assets/img/theme/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="assets/img/theme/favicon.ico">
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="assets/js/html5.js"></script>
		<![endif]-->

		<link rel="manifest" href="manifest.json">
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,700">
        <link rel="stylesheet" href="assets/css/app.css?latest=<?php echo filemtime('assets/css/app.css'); ?>"><?php // modified-time value is included to prevent design caching on demo-showcase ?>

		<script src="assets/js/app.js?latest=<?php echo filemtime('assets/js/app.js'); ?>"></script><?php // modified-time value is included to prevent design caching on demo-showcase ?>
	</head>
	<body class="home">
		<script>
		// update browser notification
		var $buoop = {c:2};
		function $buo_f(){
			var e = document.createElement("script");
			e.src = "//browser-update.org/update.min.js";
			document.body.appendChild(e);
		};
		try { document.addEventListener("DOMContentLoaded", $buo_f,false) }
		catch(e){ window.attachEvent("onload", $buo_f) }
		</script>

		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-6">

						<div class="form-wrapper">
							<form action="" method="">
								<header class="form-header">
									<h3 class="form-title">Non-Gravity Forms formulier</h3>
									<p class="form-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</header>
								<div class="form-body">
									<ul class="form-field-wrapper">
						                <li class="form-field">
						                    <label class="field-label">Aanhef</label>
						                    <div class="input-wrapper input-wrapper-select has-icon-right">
						                        <i class="icon-right fa fa-caret-down"></i>
						                        <select name="gender">
						                            <option value="null" selected>Geen</option><?php // include neutral gender option ?>
						                            <option value="male">Dhr.</option>
						                            <option value="female">Mevr.</option>
						                        </select>
						                    </div>
						                </li>
						                <li class="form-fields">
						                    <div class="form-field">
						                        <label class="field-label" for="first-name">Voornaam<span class="required"><i class="fa fa-lock"></i></span></label>
						                        <div class="input-wrapper">
						                            <input id="first-name" name="first-name" type="text" required>
						                        </div>
						                    </div>
						                    <div class="form-field">
						                        <label class="field-label" for="last-name">Achternaam<span class="required"><i class="fa fa-lock"></i></span></label>
						                        <div class="input-wrapper">
						                            <input id="last-name" name="last-name" type="text" required>
						                        </div>
						                    </div>
						                </li>
						                <li class="form-field">
						                    <label class="field-label" for="email-sender">Uw e-mailadres<span class="required"><i class="fa fa-lock"></i></span></label>
						                    <div class="input-wrapper">
						                        <input id="email-sender" name="email-sender" type="email" required>
						                    </div>
						                    <p class="field-description">We sturen u geen spam&mdash;beloofd.</p>
						                </li>
						                <li class="form-field">
						                    <label class="field-label" for="email-sender">Bericht</label>
						                    <div class="input-wrapper">
						                        <textarea id="message" name="message">Lorem ipsum placeholder text.</textarea>
						                    </div>
						                </li>
                                        <li class="form-field">
                                            <label class="field-label" for="email-sender">Keuzerondjes</label>
                                            <div class="input-wrapper input-wrapper-radio">
                                                <div class="input-radio">
                                                    <input id="radio-1" name="radio" type="radio">
                                                    <label for="radio-1">Eerste keuze</label>
                                                </div>
                                                <div class="input-radio">
                                                    <input id="radio-2" name="radio" type="radio">
                                                    <label for="radio-2">Tweede keuze</label>
                                                </div>
                                                <div class="input-radio">
                                                    <input id="radio-3" name="radio" type="radio">
                                                    <label for="radio-3">Derde keuze</label>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="form-field">
                                            <label class="field-label" for="email-sender">Aankruisvakjes</label>
                                            <div class="input-wrapper input-wrapper-checkbox">
                                                <div class="input-checkbox">
                                                    <input id="checkbox-1" name="checkbox" type="checkbox">
                                                    <label for="checkbox-1">Eerste keuze</label>
                                                </div>
                                                <div class="input-checkbox">
                                                    <input id="checkbox-2" name="checkbox" type="checkbox">
                                                    <label for="checkbox-2">Tweede keuze</label>
                                                </div>
                                                <div class="input-checkbox">
                                                    <input id="checkbox-3" name="checkbox" type="checkbox">
                                                    <label for="checkbox-3">Derde keuze</label>
                                                </div>
                                            </div>
                                        </li>
						            </ul><!-- /.form-wrapper -->
								</div>
					            <footer class="form-footer">
									<button type="submit" class="gtm-event" title="Verstuur zoekopdrachten" data-gtm-event="Share (send) saved-searches (modal)"><i class="icon-left fa fa-envelope"></i> Formulier versturen</button>
								</footer>
							</form>
						</div><!-- /.form-wrapper -->

					</div>
					<div class="col-md-6">

						<div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_1">
						    <form id="gform_1" method="post" action="#" enctype="multipart/form-data">
						        <div class='gform_heading'>
						            <h3 class='gform_title'>Gravity Forms formulier</h3>
						            <span class='gform_description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
						        </div>
						        <div class="gform_body">
						            <ul id="gform_fields_9" class="gform_fields top_label form_sublabel_below description_below">
                                        <li id="field_9_12" class="gfield field_sublabel_below field_description_below gfield_visibility_visible">
                                            <label class="gfield_label" for="input_9_12">Aanhef</label>
                                            <div class="ginput_container ginput_container_select">
                                                <select name="input_12" id="input_9_12" class="medium gfield_select" tabindex="1" aria-invalid="false">
                                                    <option value="Geen">Geen</option>
                                                    <option value="Dhr.">Dhr.</option>
                                                    <option value="Mevr.">Mevr.</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li id="field_9_1" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                                            <label class="gfield_label gfield_label_before_complex" for="input_9_1_3">Naam<span class="gfield_required">*</span></label>
                                            <div class="ginput_complex ginput_container no_prefix has_first_name no_middle_name has_last_name no_suffix gf_name_has_2 ginput_container_name gfield_trigger_change" id="input_9_1">
                                                <span id="input_9_1_3_container" class="name_first">
                                                    <input type="text" name="input_1.3" id="input_9_1_3" value="" aria-label="Voornaam" tabindex="3" aria-required="true" aria-invalid="false">
                                                    <label for="input_9_1_3">Voornaam</label>
                                                </span>
                                                <span id="input_9_1_6_container" class="name_last">
                                                    <input type="text" name="input_1.6" id="input_9_1_6" value="" aria-label="Achternaam" tabindex="5" aria-required="true" aria-invalid="false">
                                                    <label for="input_9_1_6">Achternaam</label>
                                                </span>
                                            </div>
                                        </li>
                                        <li id="field_9_2" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                                            <label class="gfield_label" for="input_9_2">E-mailadres<span class="gfield_required">*</span></label>
                                            <div class="ginput_container ginput_container_email">
                                                <input name="input_2" id="input_9_2" type="email" value="" class="medium" tabindex="7" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div class="gfield_description">We sturen u geen spam—beloofd.</div>
                                        </li>
                                        <li id="field_9_5" class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                                            <label class="gfield_label" for="input_9_5">Uw bericht<span class="gfield_required">*</span></label>
                                            <div class="ginput_container ginput_container_textarea">
                                                <textarea name="input_5" id="input_9_5" class="textarea medium" tabindex="8" aria-required="true" aria-invalid="false" rows="10" cols="50">Lorem ipsum placeholder text.</textarea>
                                            </div>
                                        </li>
                                        <li id="field_9_6" class="gfield field_sublabel_below field_description_below gfield_visibility_visible">
                                            <label class="gfield_label">Keuzerondjes</label>
                                            <div class="ginput_container ginput_container_radio">
                                                <ul class="gfield_radio" id="input_9_6">
                                                    <li class="gchoice_9_6_0">
                                                        <input name="input_6" type="radio" value="Eerste keuze" id="choice_9_6_0" tabindex="9">
                                                        <label for="choice_9_6_0" id="label_9_6_0">Eerste keuze</label>
                                                    </li>
                                                    <li class="gchoice_9_6_1">
                                                        <input name="input_6" type="radio" value="Tweede keuze" id="choice_9_6_1" tabindex="10">
                                                        <label for="choice_9_6_1" id="label_9_6_1">Tweede keuze</label>
                                                    </li>
                                                    <li class="gchoice_9_6_2">
                                                        <input name="input_6" type="radio" value="Derde keuze" id="choice_9_6_2" tabindex="11">
                                                        <label for="choice_9_6_2" id="label_9_6_2">Derde keuze</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li id="field_9_7" class="gfield field_sublabel_below field_description_below gfield_visibility_visible">
                                            <label class="gfield_label">Aankruisvakjes</label>
                                            <div class="ginput_container ginput_container_checkbox">
                                                <ul class="gfield_checkbox" id="input_9_7">
                                                    <li class="gchoice_9_7_1">
                                                        <input name="input_7.1" type="checkbox" value="Eerste keuze" id="choice_9_7_1" tabindex="12">
                                                        <label for="choice_9_7_1" id="label_9_7_1">Eerste keuze</label>
                                                    </li>
                                                    <li class="gchoice_9_7_2">
                                                        <input name="input_7.2" type="checkbox" value="Tweede keuze" id="choice_9_7_2" tabindex="13">
                                                        <label for="choice_9_7_2" id="label_9_7_2">Tweede keuze</label>
                                                    </li>
                                                    <li class="gchoice_9_7_3">
                                                        <input name="input_7.3" type="checkbox" value="Derde keuze" id="choice_9_7_3" tabindex="14">
                                                        <label for="choice_9_7_3" id="label_9_7_3">Derde keuze</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li id="field_9_8" class="gfield gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below field_description_below gfield_visibility_visible">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                        <li id="field_9_10" class="gfield field_sublabel_below field_description_below gfield_visibility_">
                                            <label class="gfield_label" for="input_9_10">Datum</label>
                                            <div class="ginput_container ginput_container_date">
                                                <input name="input_10" id="input_9_10" type="text" value="" class="datepicker medium mdy datepicker_no_icon hasDatepicker" tabindex="15">
                                            </div>
                                            <input type="hidden" id="gforms_calendar_icon_input_9_10" class="gform_hidden" value="http://dbk.dbkdev.nl/wp-content/plugins/gravityforms/images/calendar.png">
                                        </li>
                                        <li id="field_9_11" class="gfield field_sublabel_below field_description_below gfield_visibility_visible">
                                            <label class="gfield_label gfield_label_before_complex" for="input_9_11_1">Adres</label>
                                            <div class="ginput_complex ginput_container has_street has_street2 has_city has_state has_zip ginput_container_address gfield_trigger_change" id="input_9_11">
                                                <span class="ginput_full address_line_1" id="input_9_11_1_container">
                                                    <input type="text" name="input_11.1" id="input_9_11_1" value="" tabindex="16">
                                                    <label for="input_9_11_1" id="input_9_11_1_label">Straat + huisnummer</label>
                                                </span>
                                                <span class="ginput_full address_line_2" id="input_9_11_2_container">
                                                    <input type="text" name="input_11.2" id="input_9_11_2" value="" tabindex="17">
                                                    <label for="input_9_11_2" id="input_9_11_2_label">Adresregel 2</label>
                                                </span>
                                                <span class="ginput_left address_city" id="input_9_11_3_container">
                                                    <input type="text" name="input_11.3" id="input_9_11_3" value="" tabindex="18">
                                                    <label for="input_9_11_3" id="input_9_11_3_label">Stad</label>
                                                </span>
                                                <span class="ginput_right address_state" id="input_9_11_4_container">
                                                    <input type="text" name="input_11.4" id="input_9_11_4" value="" tabindex="20">
                                                    <label for="input_9_11_4" id="input_9_11_4_label">Staat / provincie / regio</label>
                                                </span>
                                                <span class="ginput_left address_zip" id="input_9_11_5_container">
                                                    <input type="text" name="input_11.5" id="input_9_11_5" value="" tabindex="21">
                                                    <label for="input_9_11_5" id="input_9_11_5_label">Postcode</label>
                                                </span>
                                                <input type="hidden" class="gform_hidden" name="input_11.6" id="input_9_11_6" value="">
                                                <div class="gf_clear gf_clear_complex"></div>
                                            </div>
                                        </li>
                                        <li id="field_9_13" class="gfield gsection field_sublabel_below field_description_below gfield_visibility_visible">
                                            <h2 class="gsection_title">Sectie-einde</h2>
                                            <div class="gsection_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                        </li>
                                        <li id="field_9_15" class="gfield field_sublabel_below field_description_below gfield_visibility_visible">
                                            <label class="gfield_label" for="input_9_15">Multi-keuzelijst</label>
                                            <div class="ginput_container ginput_container_multiselect">
                                                <select multiple="multiple" size="7" name="input_15[]" id="input_9_15" class="medium gfield_select" tabindex="22">
                                                    <option value="Eerste keuze">Eerste keuze</option>
                                                    <option value="Tweede keuze">Tweede keuze</option>
                                                    <option value="Derde keuze">Derde keuze</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li id="field_9_16" class="gfield field_sublabel_below field_description_below gfield_visibility_">
                                            <label class="gfield_label" for="input_9_16">Nummer</label>
                                            <div class="ginput_container ginput_container_number">
                                                <input name="input_16" id="input_9_16" type="number" step="any" value="" class="medium" tabindex="23" aria-invalid="false">
                                            </div>
                                        </li>
                                        <li id="field_9_17" class="gfield gfield_error field_sublabel_below field_description_below gfield_visibility_visible">
                                            <label class="gfield_label" for="input_9_17">Telefoon</label>
                                            <div class="ginput_container ginput_container_phone">
                                                <input name="input_17" id="input_9_17" type="tel" value="" class="medium" tabindex="24" aria-invalid="false">
                                            </div>
                                        </li>
                                        <li id="field_9_18" class="gfield field_sublabel_below field_description_below gfield_visibility_">
                                            <label class="gfield_label" for="input_9_18">Website</label>
                                            <div class="ginput_container ginput_container_website">
                                                <input name="input_18" id="input_9_18" type="url" value="" class="medium" tabindex="25" placeholder="http://" aria-invalid="false">
                                            </div>
                                        </li>
                                        <li id="field_9_20" class="gfield field_sublabel_below field_description_below gfield_visibility_visible">
                                            <label class="gfield_label">Bestand</label>
                                            <div class="ginput_container ginput_container_fileupload">
                                                <div id="gform_multifile_upload_9_20" data-settings="{&quot;runtimes&quot;:&quot;html5,flash,html4&quot;,&quot;browse_button&quot;:&quot;gform_browse_button_9_20&quot;,&quot;container&quot;:&quot;gform_multifile_upload_9_20&quot;,&quot;drop_element&quot;:&quot;gform_drag_drop_area_9_20&quot;,&quot;filelist&quot;:&quot;gform_preview_9_20&quot;,&quot;unique_names&quot;:true,&quot;file_data_name&quot;:&quot;file&quot;,&quot;url&quot;:&quot;http:\/\/dbk.dbkdev.nl\/?gf_page=839b38e0b00e756&quot;,&quot;flash_swf_url&quot;:&quot;http:\/\/dbk.dbkdev.nl\/wp-includes\/js\/plupload\/plupload.flash.swf&quot;,&quot;silverlight_xap_url&quot;:&quot;http:\/\/dbk.dbkdev.nl\/wp-includes\/js\/plupload\/plupload.silverlight.xap&quot;,&quot;filters&quot;:{&quot;mime_types&quot;:[{&quot;title&quot;:&quot;Toegestane bestanden&quot;,&quot;extensions&quot;:&quot;*&quot;}],&quot;max_file_size&quot;:&quot;268435456b&quot;},&quot;multipart&quot;:true,&quot;urlstream_upload&quot;:false,&quot;multipart_params&quot;:{&quot;form_id&quot;:9,&quot;field_id&quot;:20},&quot;gf_vars&quot;:{&quot;max_files&quot;:0,&quot;message_id&quot;:&quot;gform_multifile_messages_9_20&quot;,&quot;disallowed_extensions&quot;:[&quot;php&quot;,&quot;asp&quot;,&quot;aspx&quot;,&quot;cmd&quot;,&quot;csh&quot;,&quot;bat&quot;,&quot;html&quot;,&quot;htm&quot;,&quot;hta&quot;,&quot;jar&quot;,&quot;exe&quot;,&quot;com&quot;,&quot;js&quot;,&quot;lnk&quot;,&quot;htaccess&quot;,&quot;phtml&quot;,&quot;ps1&quot;,&quot;ps2&quot;,&quot;php3&quot;,&quot;php4&quot;,&quot;php5&quot;,&quot;php6&quot;,&quot;py&quot;,&quot;rb&quot;,&quot;tmp&quot;]}}" class="gform_fileupload_multifile" style="position: relative;">
                                                    <div id="gform_drag_drop_area_9_20" class="gform_drop_area" style="position: relative;">
                                                        <span class="gform_drop_instructions">Sleep bestanden hierheen of </span>
                                                        <input id="gform_browse_button_9_20" type="button" value="Selecteer bestanden" class="button gform_button_select_files" aria-describedby="extensions_message_9_20" tabindex="26" style="position: relative; z-index: 1;">
                                                    </div>
                                                    <div id="html5_1bsksp2bvn00p3i1fe7mtr1nah3_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 5px; left: 226px; width: 123px; height: 18px; overflow: hidden; z-index: 0;">
                                                        <input id="html5_1bsksp2bvn00p3i1fe7mtr1nah3" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" multiple="" accept="">
                                                    </div>
                                                </div>
                                                <span id="extensions_message_9_20" class="screen-reader-text"></span>
                                                <div class="validation_message">
                                                    <ul id="gform_multifile_messages_9_20">
                                                    </ul>
                                                </div>
                                            </div>
                                            <div id="gform_preview_9_20"></div>
                                        </li>
                                        <li id="field_9_21" class="gfield field_sublabel_below field_description_below gfield_visibility_">
                                            <label class="gfield_label" for="input_9_21">Bestand</label>
                                            <div class="ginput_container ginput_container_fileupload">
                                                <input type="hidden" name="MAX_FILE_SIZE" value="268435456">
                                                <input name="input_21" id="input_9_21" type="file" class="medium" aria-describedby="extensions_message_9_21" onchange="javascript:gformValidateFileSize( this, 268435456 );" tabindex="27">
                                                <span id="extensions_message_9_21" class="screen-reader-text"></span>
                                                <div class="validation_message"></div>
                                            </div>
                                        </li>
                                        <li id="field_9_22" class="gfield field_sublabel_below field_description_below gfield_visibility_visible">
                                            <label class="gfield_label" for="input_9_22_shim">Lijst</label>
                                            <style type="text/css">
                                                body .ginput_container_list table.gfield_list tbody tr td.gfield_list_icons {
                                                    vertical-align: middle !important;
                                                }

                                                body .ginput_container_list table.gfield_list tbody tr td.gfield_list_icons img.add_list_item,
                                                body .ginput_container_list table.gfield_list tbody tr td.gfield_list_icons img.delete_list_item {
                                                    background-color: transparent !important;
                                                    background-position: 0 0;
                                                    background-size: 16px 16px !important;
                                                    background-repeat: no-repeat;
                                                    border: none !important;
                                                    width: 16px !important;
                                                    height: 16px !important;
                                                    opacity: 0.5;
                                                    transition: opacity .5s ease-out;
                                                    -moz-transition: opacity .5s ease-out;
                                                    -webkit-transition: opacity .5s ease-out;
                                                    -o-transition: opacity .5s ease-out;
                                                }

                                                body .ginput_container_list table.gfield_list tbody tr td.gfield_list_icons img.add_list_item:hover,
                                                body .ginput_container_list table.gfield_list tbody tr td.gfield_list_icons img.delete_list_item:hover {
                                                    opacity: 1.0;
                                                }
                                            </style>
                                            <div class="ginput_container ginput_container_list ginput_list">
                                                <input type="text" id="input_9_22_shim" style="position:absolute;left:-999em;" onfocus="jQuery( &quot;#field_9_22 table tr td:first-child input&quot; ).focus();">
                                                <table class="gfield_list gfield_list_container">
                                                    <colgroup>
                                                        <col id="gfield_list_22_col1" class="gfield_list_col_odd">
                                                        <col id="gfield_list_22_col2" class="gfield_list_col_even">
                                                    </colgroup>
                                                    <tbody>
                                                        <tr class="gfield_list_group gfield_list_row_odd">
                                                            <td class="gfield_list_cell gfield_list_22_cell1">
                                                                <input type="text" name="input_22[]" value="" tabindex="28">
                                                            </td>
                                                            <td class="gfield_list_icons">
                                                                <img src="http://dbk.dbkdev.nl/wp-content/plugins/gravityforms/images/list-add.svg" class="add_list_item " title="Nog een rij toevoegen" alt="Nieuwe rij toevoegen" onclick="gformAddListItem(this, 0)" onkeypress="gformAddListItem(this, 0)" style="cursor:pointer;" tabindex="29">
                                                                <img src="http://dbk.dbkdev.nl/wp-content/plugins/gravityforms/images/list-remove.svg" class="delete_list_item" title="Deze rij verwijderen" alt="Deze rij verwijderen" onclick="gformDeleteListItem(this, 0)" onkeypress="gformDeleteListItem(this, 0)" style="cursor: pointer; visibility: visible;" tabindex="30">
                                                            </td>
                                                        </tr>
                                                        <tr class="gfield_list_group gfield_list_row_even">
                                                            <td class="gfield_list_cell gfield_list_22_cell1">
                                                                <input type="text" name="input_22[]" value="" tabindex="28">
                                                            </td>
                                                            <td class="gfield_list_icons">
                                                                <img src="http://dbk.dbkdev.nl/wp-content/plugins/gravityforms/images/list-add.svg" class="add_list_item " title="Nog een rij toevoegen" alt="Nieuwe rij toevoegen" onclick="gformAddListItem(this, 0)" onkeypress="gformAddListItem(this, 0)" style="cursor:pointer;" tabindex="29">
                                                                <img src="http://dbk.dbkdev.nl/wp-content/plugins/gravityforms/images/list-remove.svg" class="delete_list_item" title="Deze rij verwijderen" alt="Deze rij verwijderen" onclick="gformDeleteListItem(this, 0)" onkeypress="gformDeleteListItem(this, 0)" style="cursor: pointer; visibility: visible;" tabindex="30">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </li>
                                    </ul>
						        </div>
						        <div class="gform_footer top_label">
						            <button type="submit" id="gform_submit_button_1" class="gform_button button" tabindex="15">Formulier versturen</button>
						        </div>
						    </form>
						</div><!-- /.gform_wrapper -->

					</div>
				</div>
			</div>
		</section>

	</body>
</html>