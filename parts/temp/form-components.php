<script type='text/javascript' src='http://dbk.nl/wp-content/plugins/gravityforms/js/jquery.json.min.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var gform_gravityforms = {"strings":{"invalid_file_extension":"Dit bestandstype is niet toegestaan. Moet \u00e9\u00e9n van de volgende zijn:","delete_file":"Dit bestand verwijderen","in_progress":"in behandeling","file_exceeds_limit":"Bestand overschrijdt limiet bestandsgrootte","illegal_extension":"Dit type bestand is niet toegestaan.","max_reached":"Maximale aantal bestanden bereikt","unknown_error":"Er was een probleem bij het opslaan van het bestand op de server","currently_uploading":"Wacht tot het uploaden is voltooid","cancel":"Annuleren","cancel_upload":"Deze upload annuleren","cancelled":"Geannuleerd"},"vars":{"images_url":"http:\/\/dbk.nl\/wp-content\/plugins\/gravityforms\/images"}};
/* ]]> */
</script>
<script type='text/javascript' src='http://dbk.nl/wp-content/plugins/gravityforms/js/gravityforms.min.js'></script>
<script type='text/javascript' src='http://dbk.nl/wp-includes/js/plupload/plupload.full.min.js'></script>
<script type='text/javascript' src='http://dbk.nl/wp-content/plugins/gravityforms/js/jquery.maskedinput.min.js'></script>
<script type='text/javascript' src='http://dbk.nl/wp-content/plugins/gravityforms/js/placeholders.jquery.min.js'></script>
<script>
jQuery( document ).ready(function() {

    jQuery('.toggle_helpers input[type=checkbox]').attr('checked',false);

    jQuery('#showgrid').click(function(){
        if(jQuery(this).is(":checked")) {
            jQuery('#preview_form_container').addClass("showgrid");
        } else {
            jQuery('#preview_form_container').removeClass("showgrid");
        }
    });

    jQuery('#showme').click(function(){
        if(jQuery(this).is(":checked")) {
            jQuery('.gform_wrapper form').addClass("gf_showme");
            jQuery('#helper_legend_container').css("display", "inline-block");
        } else {
            jQuery('.gform_wrapper form').removeClass("gf_showme");
            jQuery('#helper_legend_container').css("display", "none");
        }
    });

});
</script>
<div class='gf_browser_chrome gform_wrapper' id='gform_wrapper_9' ><form method='post' enctype='multipart/form-data'  id='gform_9'  action='/?gf_page=preview&#038;id=9'>
    <div class='gform_heading'>
        <h3 class='gform_title'>Test formulier</h3>
        <span class='gform_description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
    </div>
    <div class='gform_body'>
        <ul id='gform_fields_9' class='gform_fields top_label form_sublabel_below description_below'>
            <li id='field_9_1' class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' >
                <label class='gfield_label gfield_label_before_complex' for='input_9_1_3' >Naam<span class='gfield_required'>*</span></label>
                <div class='ginput_complex ginput_container no_prefix has_first_name no_middle_name has_last_name no_suffix gf_name_has_2 ginput_container_name gfield_trigger_change' id='input_9_1'>

        <span id='input_9_1_3_container' class='name_first' >
                                <input type='text' name='input_1.3' id='input_9_1_3' value='' aria-label='Voornaam' tabindex='2'  aria-required="true" aria-invalid="false" />
                                <label for='input_9_1_3' >Voornaam</label>
                            </span>

        <span id='input_9_1_6_container' class='name_last' >
                                <input type='text' name='input_1.6' id='input_9_1_6' value='' aria-label='Achternaam' tabindex='4'  aria-required="true" aria-invalid="false" />
                                <label for='input_9_1_6' >Achternaam</label>
                            </span>

    </div></li>

    <li id='field_9_17' class='gfield field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_9_17' >Telefoon</label><div class='ginput_container ginput_container_phone'><input name='input_17' id='input_9_17' type='tel' value='' class='medium' tabindex='6'    aria-invalid="false" /></div></li>

    <!-- <li id='field_9_2' class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_9_2' >E-mailadres<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_email'>
        <input name='input_2' id='input_9_2' type='email' value='' class='medium' tabindex='7'    aria-required="true" aria-invalid="false"/>
    </div><div class='gfield_description'>We sturen u geen spam—beloofd.</div>
</li> -->

<li id="field_9_2" class="gfield gfield_error gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible"><label class="gfield_label" for="input_9_2">E-mailadres<span class="gfield_required">*</span></label><div class="ginput_container ginput_container_email">
                            <input name="input_2" id="input_9_2" type="email" value="" class="medium" tabindex="7" aria-required="true" aria-invalid="true">
                        </div><div class="gfield_description">We sturen u geen spam—beloofd.</div><div class="gfield_description validation_message">Dit veld is verplicht. </div></li>

            <li class="gfield">
                <label class="gfield_label">Bericht</label>
                <div class="ginput_container">
                    <textarea rows="5" cols="50"></textarea>
                </div>
            </li>

<li id='field_9_23' class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_9_23' >Datum<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_date'>
        <input name='input_23' id='input_9_23' type='text' value='' class='datepicker medium mdy datepicker_no_icon' tabindex='8'  />
    </div>
    <input type='hidden' id='gforms_calendar_icon_input_9_23' class='gform_hidden' value='http://dbk.nl/wp-content/plugins/gravityforms/images/calendar.png'/></li><li id='field_9_28' class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label gfield_label_before_complex' for='input_9_28_1' >Tijd<span class='gfield_required'>*</span></label><div class='clear-multi'>
    <div class='gfield_time_hour ginput_container ginput_container_time' id='input_9_28'>
        <input type='number' maxlength='2' name='input_28[]' id='input_9_28_1' value='' tabindex='9' min='0' max='24' step='1'  placeholder='18'/> <i>:</i>
        <label for='input_9_28_1' >Uur</label>
    </div>
    <div class='gfield_time_minute ginput_container ginput_container_time'>
        <input type='number' maxlength='2' name='input_28[]' id='input_9_28_2' value='' tabindex='10' min='0' max='59' step='1'  placeholder='00'/>
        <label for='input_9_28_2' >Minuut</label>
    </div>

</div></li><li id='field_9_25' class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_9_25' >Aantal personen<span class='gfield_required'>*</span></label><div class='ginput_container ginput_container_select'><select name='input_25' id='input_9_25'  class='medium gfield_select' tabindex='12'  aria-required="true" aria-invalid="false"><option value='1 persoon' >1 persoon</option><option value='2 personen' >2 personen</option><option value='3 personen' >3 personen</option><option value='4 personen' >4 personen</option><option value='5 personen' >5 personen</option><option value='6 personen' >6 personen</option><option value='7 personen' >7 personen</option><option value='8 personen' >8 personen</option><option value='9 personen' >9 personen</option><option value='10 personen' >10 personen</option></select></div></li><li id='field_9_29' class='gfield field_sublabel_below field_description_below gfield_visibility_' ><label class='gfield_label' for='input_9_29' >Geen titel</label><div class='ginput_container ginput_container_multiselect'><select multiple='multiple'  size='7' name='input_29[]' id='input_9_29'  class='medium gfield_select' tabindex='13' ><option value='Eerste keuze' >Eerste keuze</option><option value='Tweede keuze' >Tweede keuze</option><option value='Derde keuze' >Derde keuze</option></select></div></li><li id='field_9_30' class='gfield field_sublabel_below field_description_below gfield_visibility_' ><label class='gfield_label'  >Geen titel</label><div class='ginput_container ginput_container_checkbox'><ul class='gfield_checkbox' id='input_9_30'><li class='gchoice_9_30_1'>
            <input name='input_30.1' type='checkbox'  value='Eerste keuze'  id='choice_9_30_1' tabindex='14'  />
            <label for='choice_9_30_1' id='label_9_30_1'>Eerste keuze</label>
        </li><li class='gchoice_9_30_2'>
            <input name='input_30.2' type='checkbox'  value='Tweede keuze'  id='choice_9_30_2' tabindex='15'  />
            <label for='choice_9_30_2' id='label_9_30_2'>Tweede keuze</label>
        </li><li class='gchoice_9_30_3'>
            <input name='input_30.3' type='checkbox'  value='Derde keuze'  id='choice_9_30_3' tabindex='16'  />
            <label for='choice_9_30_3' id='label_9_30_3'>Derde keuze</label>
        </li></ul></div></li><li id='field_9_31' class='gfield field_sublabel_below field_description_below gfield_visibility_' ><label class='gfield_label'  >Geen titel</label><div class='ginput_container ginput_container_radio'><ul class='gfield_radio' id='input_9_31'><li class='gchoice_9_31_0'><input name='input_31' type='radio' value='Eerste keuze'  id='choice_9_31_0' tabindex='17'    /><label for='choice_9_31_0' id='label_9_31_0'>Eerste keuze</label></li><li class='gchoice_9_31_1'><input name='input_31' type='radio' value='Tweede keuze'  id='choice_9_31_1' tabindex='18'    /><label for='choice_9_31_1' id='label_9_31_1'>Tweede keuze</label></li><li class='gchoice_9_31_2'><input name='input_31' type='radio' value='Derde keuze'  id='choice_9_31_2' tabindex='19'    /><label for='choice_9_31_2' id='label_9_31_2'>Derde keuze</label></li></ul></div></li>

            <li id='field_9_32' class='gfield gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below field_description_below gfield_visibility_visible' >HTML blok met content lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>

        <li id='field_9_33' class='gfield field_sublabel_below field_description_below gfield_visibility_visible gfield_errorz' >
            <label class='gfield_label gfield_label_before_complex' for='input_9_33_1' >Adres</label>
<div class='ginput_complex ginput_container has_street has_street2 has_city has_state has_zip has_country ginput_container_address gfield_trigger_change' id='input_9_33' >
     <span class='ginput_full address_line_1' id='input_9_33_1_container' >
                    <input type='text' name='input_33.1' id='input_9_33_1' value='' tabindex='20'  />
                    <label for='input_9_33_1' id='input_9_33_1_label' >Straat + huisnummer</label>
                </span><span class='ginput_full address_line_2' id='input_9_33_2_container' >
                    <input type='text' name='input_33.2' id='input_9_33_2' value='' tabindex='21'  />
                    <label for='input_9_33_2' id='input_9_33_2_label' >Adresregel 2</label>
                </span><span class='ginput_left address_city' id='input_9_33_3_container' >
                <input type='text' name='input_33.3' id='input_9_33_3' value='' tabindex='22'  />
                <label for='input_9_33_3' id='input_9_33_3_label' >Stad</label>
             </span><span class='ginput_right address_state' id='input_9_33_4_container' >
                    <input type='text' name='input_33.4' id='input_9_33_4' value='' tabindex='24'    />
                    <label for='input_9_33_4' id='input_9_33_4_label' >Staat / provincie / regio</label>
                  </span><span class='ginput_left address_zip' id='input_9_33_5_container' >
                <input type='text' name='input_33.5' id='input_9_33_5' value='' tabindex='25'  />
                <label for='input_9_33_5' id='input_9_33_5_label' >Postcode</label>
            </span><span class='ginput_right address_country' id='input_9_33_6_container' >
                    <select name='input_33.6' id='input_9_33_6' tabindex='26' ><option value='' ></option><option value='Afghanistan' >Afghanistan</option><option value='Albanië' >Albanië</option><option value='Algerije' >Algerije</option><option value='Amerikaans Samoa' >Amerikaans Samoa</option><option value='Andorra' >Andorra</option><option value='Angola' >Angola</option><option value='Antigua en Barbuda' >Antigua en Barbuda</option><option value='Argentinië' >Argentinië</option><option value='Armenië' >Armenië</option><option value='Australië' >Australië</option><option value='Oostenrijk' >Oostenrijk</option><option value='Azerbeidzjan' >Azerbeidzjan</option><option value='Bahama&#039;s' >Bahama&#039;s</option><option value='Bahrein' >Bahrein</option><option value='Bangladesh' >Bangladesh</option><option value='Barbados' >Barbados</option><option value='Wit-Rusland' >Wit-Rusland</option><option value='België' >België</option><option value='Belize' >Belize</option><option value='Benin' >Benin</option><option value='Bermuda' >Bermuda</option><option value='Bhutan' >Bhutan</option><option value='Bolivia' >Bolivia</option><option value='Bosnië en Herzegovina' >Bosnië en Herzegovina</option><option value='Botswana' >Botswana</option><option value='Brazilië' >Brazilië</option><option value='Brunei ' >Brunei </option><option value='Bulgarije' >Bulgarije</option><option value='Burkina Faso' >Burkina Faso</option><option value='Burundi' >Burundi</option><option value='Cambodja' >Cambodja</option><option value='Kameroen' >Kameroen</option><option value='Canada' >Canada</option><option value='Kaapverdië' >Kaapverdië</option><option value='Kaaimaneilanden' >Kaaimaneilanden</option><option value='Centraal-Afrikaanse Republiek' >Centraal-Afrikaanse Republiek</option><option value='Tsjaad' >Tsjaad</option><option value='Chili' >Chili</option><option value='China' >China</option><option value='Colombia' >Colombia</option><option value='Comoren' >Comoren</option><option value='Congo, Democratische Republiek' >Congo, Democratische Republiek</option><option value='Congo, Republiek' >Congo, Republiek</option><option value='Costa Rica' >Costa Rica</option><option value='Ivoorkust' >Ivoorkust</option><option value='Kroatië' >Kroatië</option><option value='Cuba' >Cuba</option><option value='Curaçao' >Curaçao</option><option value='Cyprus' >Cyprus</option><option value='Centraal-Afrikaanse Republiek' >Centraal-Afrikaanse Republiek</option><option value='Denemarken' >Denemarken</option><option value='Djibouti' >Djibouti</option><option value='Dominica' >Dominica</option><option value='Centraal-Afrikaanse Republiek' >Centraal-Afrikaanse Republiek</option><option value='Oost-Timor' >Oost-Timor</option><option value='Ecuador' >Ecuador</option><option value='Egypte' >Egypte</option><option value='El Salvador' >El Salvador</option><option value='Equatoriaal-Guinea' >Equatoriaal-Guinea</option><option value='Eritrea' >Eritrea</option><option value='Estland' >Estland</option><option value='Ethiopië' >Ethiopië</option><option value='Faeröer' >Faeröer</option><option value='Fiji' >Fiji</option><option value='Finland' >Finland</option><option value='Frankrijk' >Frankrijk</option><option value='Frans-Polynesië' >Frans-Polynesië</option><option value='Gabon' >Gabon</option><option value='Gambia' >Gambia</option><option value='Georgië' >Georgië</option><option value='Duitsland' >Duitsland</option><option value='Ghana' >Ghana</option><option value='Griekenland' >Griekenland</option><option value='Groenland' >Groenland</option><option value='Grenada' >Grenada</option><option value='Guam' >Guam</option><option value='Guatemala' >Guatemala</option><option value='Guinee' >Guinee</option><option value='Guinea-Bissau' >Guinea-Bissau</option><option value='Guyana' >Guyana</option><option value='Haïti' >Haïti</option><option value='Honduras' >Honduras</option><option value='Hong Kong' >Hong Kong</option><option value='Hongarije' >Hongarije</option><option value='IJsland' >IJsland</option><option value='India' >India</option><option value='Indonesië' >Indonesië</option><option value='Iran' >Iran</option><option value='Irak' >Irak</option><option value='Ierland' >Ierland</option><option value='Israël' >Israël</option><option value='Italië' >Italië</option><option value='Jamaica' >Jamaica</option><option value='Japan' >Japan</option><option value='Jordanië' >Jordanië</option><option value='Kazachstan' >Kazachstan</option><option value='Kenia' >Kenia</option><option value='Kiribati' >Kiribati</option><option value='Noord-Korea' >Noord-Korea</option><option value='Zuid-Korea' >Zuid-Korea</option><option value='Kosovo' >Kosovo</option><option value='Koeweit' >Koeweit</option><option value='Kirgizië' >Kirgizië</option><option value='Laos' >Laos</option><option value='Letland' >Letland</option><option value='Libanon' >Libanon</option><option value='Lesotho' >Lesotho</option><option value='Liberia' >Liberia</option><option value='Libië' >Libië</option><option value='Liechtenstein' >Liechtenstein</option><option value='Litouwen' >Litouwen</option><option value='Luxemburg' >Luxemburg</option><option value='Macedonië' >Macedonië</option><option value='Madagaskar' >Madagaskar</option><option value='Malawi' >Malawi</option><option value='Maleisië' >Maleisië</option><option value='Maldiven' >Maldiven</option><option value='Mali' >Mali</option><option value='Malta' >Malta</option><option value='Marshalleilanden' >Marshalleilanden</option><option value='Mauritanië' >Mauritanië</option><option value='Mauritius' >Mauritius</option><option value='Mexico' >Mexico</option><option value='Micronesia' >Micronesia</option><option value='Moldavië' >Moldavië</option><option value='Monaco' >Monaco</option><option value='Mongolië' >Mongolië</option><option value='Montenegro' >Montenegro</option><option value='Marokko' >Marokko</option><option value='Mozambique' >Mozambique</option><option value='Myanmar' >Myanmar</option><option value='Namibië' >Namibië</option><option value='Nauru' >Nauru</option><option value='Nepal' >Nepal</option><option value='Nederland' selected='selected'>Nederland</option><option value='Nieuw formulier' >Nieuw formulier</option><option value='Nicaragua' >Nicaragua</option><option value='Niger' >Niger</option><option value='Nigeria' >Nigeria</option><option value='Northern Mariana Islands' >Northern Mariana Islands</option><option value='Noorwegen' >Noorwegen</option><option value='Oman' >Oman</option><option value='Pakistan' >Pakistan</option><option value='Palau' >Palau</option><option value='Palestina, Staat' >Palestina, Staat</option><option value='Panama' >Panama</option><option value='Papoea-Nieuw-Guinea' >Papoea-Nieuw-Guinea</option><option value='Paraguay' >Paraguay</option><option value='Peru' >Peru</option><option value='Filipijnen' >Filipijnen</option><option value='Polen' >Polen</option><option value='Portugal' >Portugal</option><option value='Puerto Rico' >Puerto Rico</option><option value='Qatar' >Qatar</option><option value='Roemenië' >Roemenië</option><option value='Rusland' >Rusland</option><option value='Rwanda' >Rwanda</option><option value='Saint Kitts en Nevis' >Saint Kitts en Nevis</option><option value='Saint Lucia' >Saint Lucia</option><option value='Saint Vincent en de Grenadines' >Saint Vincent en de Grenadines</option><option value='Samoa' >Samoa</option><option value='San Marino' >San Marino</option><option value='Sao Tomé en Principe' >Sao Tomé en Principe</option><option value='Saoedi-Arabië' >Saoedi-Arabië</option><option value='Senegal' >Senegal</option><option value='Servië' >Servië</option><option value='Seychellen' >Seychellen</option><option value='Sierra Leone' >Sierra Leone</option><option value='Singapore' >Singapore</option><option value='Sint Maarten' >Sint Maarten</option><option value='Slowakije' >Slowakije</option><option value='Slovenië' >Slovenië</option><option value='Salomonseilanden' >Salomonseilanden</option><option value='Somalië' >Somalië</option><option value='Zuid-Afrika' >Zuid-Afrika</option><option value='Spanje' >Spanje</option><option value='Sri Lanka' >Sri Lanka</option><option value='Soedan' >Soedan</option><option value='Sudan, Zuid' >Sudan, Zuid</option><option value='Suriname' >Suriname</option><option value='Swaziland' >Swaziland</option><option value='Zweden' >Zweden</option><option value='Zwitserland' >Zwitserland</option><option value='Syrië' >Syrië</option><option value='Taiwan' >Taiwan</option><option value='Tadzjikistan' >Tadzjikistan</option><option value='Tanzania' >Tanzania</option><option value='Thailand' >Thailand</option><option value='Togo' >Togo</option><option value='Tonga' >Tonga</option><option value='Trinidad en Tobago' >Trinidad en Tobago</option><option value='Tunesië' >Tunesië</option><option value='Turkije' >Turkije</option><option value='Turkmenistan' >Turkmenistan</option><option value='Tuvalu' >Tuvalu</option><option value='Uganda' >Uganda</option><option value='Oekraïne' >Oekraïne</option><option value='Verenigde Arabische Emiraten' >Verenigde Arabische Emiraten</option><option value='Verenigd Koninkrijk' >Verenigd Koninkrijk</option><option value='Verenigde Staten' >Verenigde Staten</option><option value='Uruguay' >Uruguay</option><option value='Oezbekistan' >Oezbekistan</option><option value='Vanuatu' >Vanuatu</option><option value='Vaticaanstad' >Vaticaanstad</option><option value='Venezuela' >Venezuela</option><option value='Vietnam' >Vietnam</option><option value='Britse Maagdeneilanden' >Britse Maagdeneilanden</option><option value='Amerikaanse Maagdeneilanden' >Amerikaanse Maagdeneilanden</option><option value='Yemen' >Yemen</option><option value='Zambia' >Zambia</option><option value='Zimbabwe' >Zimbabwe</option></select>
                    <label for='input_9_33_6' id='input_9_33_6_label' >Land</label>
                </span>
<div class='gf_clear gf_clear_complex'></div>
</div></li><li id='field_9_34' class='gfield field_sublabel_below field_description_below gfield_visibility_' ><label class='gfield_label' for='input_9_34' >Website</label><div class='ginput_container ginput_container_website'>
<input name='input_34' id='input_9_34' type='url' value='' class='medium'  tabindex='27'   placeholder='http://'  aria-invalid="false"/>
</div></li><li id='field_9_35' class='gfield field_sublabel_below field_description_below gfield_visibility_' ><label class='gfield_label' for='input_9_35' >Bestand</label><div class='ginput_container ginput_container_fileupload'><input type='hidden' name='MAX_FILE_SIZE' value='268435456' /><input name='input_35' id='input_9_35' type='file' class='medium' aria-describedby='extensions_message_9_35' onchange='javascript:gformValidateFileSize( this, 268435456 );' tabindex='28' /><span id='extensions_message_9_35' class='screen-reader-text'></span><div class='validation_message'></div></div></li><li id='field_9_36' class='gfield field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label'  >Bestand</label><div class='ginput_container ginput_container_fileupload'><div id='gform_multifile_upload_9_36' data-settings='{&quot;runtimes&quot;:&quot;html5,flash,html4&quot;,&quot;browse_button&quot;:&quot;gform_browse_button_9_36&quot;,&quot;container&quot;:&quot;gform_multifile_upload_9_36&quot;,&quot;drop_element&quot;:&quot;gform_drag_drop_area_9_36&quot;,&quot;filelist&quot;:&quot;gform_preview_9_36&quot;,&quot;unique_names&quot;:true,&quot;file_data_name&quot;:&quot;file&quot;,&quot;url&quot;:&quot;http:\/\/dbk.nl\/?gf_page=839b38e0b00e756&quot;,&quot;flash_swf_url&quot;:&quot;http:\/\/dbk.nl\/wp-includes\/js\/plupload\/plupload.flash.swf&quot;,&quot;silverlight_xap_url&quot;:&quot;http:\/\/dbk.nl\/wp-includes\/js\/plupload\/plupload.silverlight.xap&quot;,&quot;filters&quot;:{&quot;mime_types&quot;:[{&quot;title&quot;:&quot;Toegestane bestanden&quot;,&quot;extensions&quot;:&quot;*&quot;}],&quot;max_file_size&quot;:&quot;268435456b&quot;},&quot;multipart&quot;:true,&quot;urlstream_upload&quot;:false,&quot;multipart_params&quot;:{&quot;form_id&quot;:9,&quot;field_id&quot;:36},&quot;gf_vars&quot;:{&quot;max_files&quot;:0,&quot;message_id&quot;:&quot;gform_multifile_messages_9_36&quot;,&quot;disallowed_extensions&quot;:[&quot;php&quot;,&quot;asp&quot;,&quot;aspx&quot;,&quot;cmd&quot;,&quot;csh&quot;,&quot;bat&quot;,&quot;html&quot;,&quot;htm&quot;,&quot;hta&quot;,&quot;jar&quot;,&quot;exe&quot;,&quot;com&quot;,&quot;js&quot;,&quot;lnk&quot;,&quot;htaccess&quot;,&quot;phtml&quot;,&quot;ps1&quot;,&quot;ps2&quot;,&quot;php3&quot;,&quot;php4&quot;,&quot;php5&quot;,&quot;php6&quot;,&quot;py&quot;,&quot;rb&quot;,&quot;tmp&quot;]}}' class='gform_fileupload_multifile'>
                    <div id='gform_drag_drop_area_9_36' class='gform_drop_area'>
                        <span class='gform_drop_instructions'>Sleep bestanden hierheen of </span>
                        <input id='gform_browse_button_9_36' type='button' value='Selecteer bestanden' class='button gform_button_select_files' aria-describedby='extensions_message_9_36' tabindex='29' />
                    </div>
                </div><span id='extensions_message_9_36' class='screen-reader-text'></span><div class='validation_message'>
            <ul id='gform_multifile_messages_9_36'>
            </ul>
        </div></div><div id='gform_preview_9_36'></div></li><li id='field_9_37' class='gfield field_sublabel_below field_description_below gfield_visibility_' ><label class='gfield_label' for='input_9_37_shim' >Lijst</label><style type="text/css">

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

    </style><div class='ginput_container ginput_container_list ginput_list'><input type='text' id='input_9_37_shim' style='position:absolute;left:-999em;' onfocus='jQuery( "#field_9_37 table tr td:first-child input" ).focus();' /><table class='gfield_list gfield_list_container'><colgroup><col id='gfield_list_37_col1' class='gfield_list_col_odd' /><col id='gfield_list_37_col2' class='gfield_list_col_even' /></colgroup><tbody><tr class='gfield_list_row_odd gfield_list_group'><td class='gfield_list_cell gfield_list_37_cell1' ><input type='text' name='input_37[]' value='' tabindex='30' /></td><td class='gfield_list_icons'>   <img src='http://dbk.nl/wp-content/plugins/gravityforms/images/list-add.svg' class='add_list_item '  title='Nog een rij toevoegen' alt='Nieuwe rij toevoegen' onclick='gformAddListItem(this, 0)' onkeypress='gformAddListItem(this, 0)' style='cursor:pointer;' tabindex='31'/>   <img src='http://dbk.nl/wp-content/plugins/gravityforms/images/list-remove.svg' class='delete_list_item'  title='Deze rij verwijderen' alt='Deze rij verwijderen' onclick='gformDeleteListItem(this, 0)' onkeypress='gformDeleteListItem(this, 0)' style='cursor:pointer; visibility:hidden;' tabindex='32'/></td></tr></tbody></table></div></li>
        </ul></div>
<div class='gform_footer top_label'> <input type='submit' id='gform_submit_button_9' class='gform_button button' value='Formulier versturen' tabindex='33' onclick='if(window["gf_submitting_9"]){return false;}  if( !jQuery("#gform_9")[0].checkValidity || jQuery("#gform_9")[0].checkValidity()){window["gf_submitting_9"]=true;}  ' onkeypress='if( event.keyCode == 13 ){ if(window["gf_submitting_9"]){return false;} if( !jQuery("#gform_9")[0].checkValidity || jQuery("#gform_9")[0].checkValidity()){window["gf_submitting_9"]=true;}  jQuery("#gform_9").trigger("submit",[true]); }' />
<input type='hidden' class='gform_hidden' name='is_submit_9' value='1' />
<input type='hidden' class='gform_hidden' name='gform_submit' value='9' />

<input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
<input type='hidden' class='gform_hidden' name='state_9' value='WyJbXSIsImQ5ZWE2MDQyODg3NmViNjE3YWNlYzcxNWViMTZhOTRiIl0=' />
<input type='hidden' class='gform_hidden' name='gform_target_page_number_9' id='gform_target_page_number_9' value='0' />
<input type='hidden' class='gform_hidden' name='gform_source_page_number_9' id='gform_source_page_number_9' value='1' />
<input type='hidden' name='gform_field_values' value='' />
<input type='hidden' name='gform_uploaded_files' id='gform_uploaded_files_9' value='' />
</div>
    </form>
</div>