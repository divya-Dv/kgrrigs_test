
<div id="wa-side" class="sidenav">
<!-- 	<a href="https://api.whatsapp.com/send?phone=+917901344444&amp;text=Hi,KGR Rigs" target="_blank"  id="wahtsapp">-->
<!--    Chat With Us&nbsp;&nbsp;<i class="fab fa-whatsapp"></i>-->
<!--</a>-->
 	<a href="#" data-toggle="modal" data-target="#download-modal" id="bro_dwn">
    <i class="fas fa-file-pdf"></i>&nbsp;&nbsp;Download Brochure
</a>
 	<a href="#" data-toggle="modal" data-target="#epop-up" id="enq_now">
    <i class="fas fa-envelope"></i>&nbsp;&nbsp;Enquire Now
</a>
  </div>
<!-- Modal -->
<div class="modal fade" id="download-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Download Brochure</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
          <form method="post" action="download.php">
            <div class="messages"></div>
            <div class="form-group">
              <input id="form_name" type="text" name="name" class="form-control" placeholder="Name" required="required" data-error="Username is required." pattern="[A-Za-z .]{3,20}" title="Enter valid Name, Max characters allowed are 20">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required="required" data-error="Valid email is required.">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <select class="form-control" name="countryCode"  title="County Code*" required>
                        <option value=""  disabled selected> Select country code</option>
                <option data-countrycode="IN" value="+91" >India (+91)</option>
            	<option data-countrycode="GB" value="+44">Norway (+47)</option>
            	<option data-countrycode="US" value="+1">UK (+44)</option>
            	<option data-countrycode="DZ" value="+213">Algeria (+213)</option>
            		<option data-countrycode="AD" value="+376">Andorra (+376)</option>
            		<option data-countrycode="AO" value="+244">Angola (+244)</option>
            		<option data-countrycode="AI" value="+1264">Anguilla (+1264)</option>
            		<option data-countrycode="AG" value="+1268">Antigua &amp; Barbuda (+1268)</option>
            		<option data-countrycode="AR" value="+54">Argentina (+54)</option>
            		<option data-countrycode="AM" value="+374">Armenia (+374)</option>
            		<option data-countrycode="AW" value="+297">Aruba (+297)</option>
            		<option data-countrycode="AU" value="+61">Australia (+61)</option>
            		<option data-countrycode="AT" value="+43">Austria (+43)</option>
            		<option data-countrycode="AZ" value="+994">Azerbaijan (+994)</option>
            		<option data-countrycode="BS" value="+1242">Bahamas (+1242)</option>
            		<option data-countrycode="BH" value="+973">Bahrain (+973)</option>
            		<option data-countrycode="BD" value="+880">Bangladesh (+880)</option>
            		<option data-countrycode="BB" value="+1246">Barbados (+1246)</option>
            		<option data-countrycode="BY" value="+375">Belarus (+375)</option>
            		<option data-countrycode="BE" value="+32">Belgium (+32)</option>
            		<option data-countrycode="BZ" value="+501">Belize (+501)</option>
            		<option data-countrycode="BJ" value="+229">Benin (+229)</option>
            		<option data-countrycode="BM" value="+1441">Bermuda (+1441)</option>
            		<option data-countrycode="BT" value="+975">Bhutan (+975)</option>
            		<option data-countrycode="BO" value="+591">Bolivia (+591)</option>
            		<option data-countrycode="BA" value="+387">Bosnia Herzegovina (+387)</option>
            		<option data-countrycode="BW" value="+267">Botswana (+267)</option>
            		<option data-countrycode="BR" value="+55">Brazil (+55)</option>
            		<option data-countrycode="BN" value="+673">Brunei (+673)</option>
            		<option data-countrycode="BG" value="+359">Bulgaria (+359)</option>
            		<option data-countrycode="BF" value="+226">Burkina Faso (+226)</option>
            		<option data-countrycode="BI" value="+257">Burundi (+257)</option>
            		<option data-countrycode="KH" value="+855">Cambodia (+855)</option>
            		<option data-countrycode="CM" value="+237">Cameroon (+237)</option>
            		<option data-countrycode="CA" value="+1">Canada (+1)</option>
            		<option data-countrycode="CV" value="+238">Cape Verde Islands (+238)</option>
            		<option data-countrycode="KY" value="+1345">Cayman Islands (+1345)</option>
            		<option data-countrycode="CF" value="+236">Central African Republic (+236)</option>
            		<option data-countrycode="CL" value="+56">Chile (+56)</option>
            		<option data-countrycode="CN" value="+86">China (+86)</option>
            		<option data-countrycode="CO" value="+57">Colombia (+57)</option>
            		<option data-countrycode="KM" value="+269">Comoros (+269)</option>
            		<option data-countrycode="CG" value="+242">Congo (+242)</option>
            		<option data-countrycode="CK" value="+682">Cook Islands (+682)</option>
            		<option data-countrycode="CR" value="+506">Costa Rica (+506)</option>
            		<option data-countrycode="HR" value="+385">Croatia (+385)</option>
            		<option data-countrycode="CU" value="+53">Cuba (+53)</option>
            		<option data-countrycode="CY" value="+90392">Cyprus North (+90392)</option>
            		<option data-countrycode="CY" value="+357">Cyprus South (+357)</option>
            		<option data-countrycode="CZ" value="+42">Czech Republic (+42)</option>
            		<option data-countrycode="DK" value="+45">Denmark (+45)</option>
            		<option data-countrycode="DJ" value="+253">Djibouti (+253)</option>
            		<option data-countrycode="DM" value="+1809">Dominica (+1809)</option>
            		<option data-countrycode="DO" value="+1809">Dominican Republic (+1809)</option>
            		<option data-countrycode="EC" value="+593">Ecuador (+593)</option>
            		<option data-countrycode="EG" value="+20">Egypt (+20)</option>
            		<option data-countrycode="SV" value="+503">El Salvador (+503)</option>
            		<option data-countrycode="GQ" value="+240">Equatorial Guinea (+240)</option>
            		<option data-countrycode="ER" value="+291">Eritrea (+291)</option>
            		<option data-countrycode="EE" value="+372">Estonia (+372)</option>
            		<option data-countrycode="ET" value="+251">Ethiopia (+251)</option>
            		<option data-countrycode="FK" value="+500">Falkland Islands (+500)</option>
            		<option data-countrycode="FO" value="+298">Faroe Islands (+298)</option>
            		<option data-countrycode="FJ" value="+679">Fiji (+679)</option>
            		<option data-countrycode="FI" value="+358">Finland (+358)</option>
            		<option data-countrycode="FR" value="+33">France (+33)</option>
            		<option data-countrycode="GF" value="+594">French Guiana (+594)</option>
            		<option data-countrycode="PF" value="+689">French Polynesia (+689)</option>
            		<option data-countrycode="GA" value="+241">Gabon (+241)</option>
            		<option data-countrycode="GM" value="+220">Gambia (+220)</option>
            		<option data-countrycode="GE" value="+7880">Georgia (+7880)</option>
            		<option data-countrycode="DE" value="+49">Germany (+49)</option>
            		<option data-countrycode="GH" value="+233">Ghana (+233)</option>
            		<option data-countrycode="GI" value="+350">Gibraltar (+350)</option>
            		<option data-countrycode="GR" value="+30">Greece (+30)</option>
            		<option data-countrycode="GL" value="+299">Greenland (+299)</option>
            		<option data-countrycode="GD" value="+1473">Grenada (+1473)</option>
            		<option data-countrycode="GP" value="+590">Guadeloupe (+590)</option>
            		<option data-countrycode="GU" value="+671">Guam (+671)</option>
            		<option data-countrycode="GT" value="+502">Guatemala (+502)</option>
            		<option data-countrycode="GN" value="+224">Guinea (+224)</option>
            		<option data-countrycode="GW" value="+245">Guinea - Bissau (+245)</option>
            		<option data-countrycode="GY" value="+592">Guyana (+592)</option>
            		<option data-countrycode="HT" value="+509">Haiti (+509)</option>
            		<option data-countrycode="HN" value="+504">Honduras (+504)</option>
            		<option data-countrycode="HK" value="+852">Hong Kong (+852)</option>
            		<option data-countrycode="HU" value="+36">Hungary (+36)</option>
            		<option data-countrycode="IS" value="+354">Iceland (+354)</option>
            	
            		<option data-countrycode="ID" value="+62">Indonesia (+62)</option>
            		<option data-countrycode="IR" value="+98">Iran (+98)</option>
            		<option data-countrycode="IQ" value="+964">Iraq (+964)</option>
            		<option data-countrycode="IE" value="+353">Ireland (+353)</option>
            		<option data-countrycode="IL" value="+972">Israel (+972)</option>
            		<option data-countrycode="IT" value="+39">Italy (+39)</option>
            		<option data-countrycode="JM" value="+1876">Jamaica (+1876)</option>
            		<option data-countrycode="JP" value="+81">Japan (+81)</option>
            		<option data-countrycode="JO" value="+962">Jordan (+962)</option>
            		<option data-countrycode="KZ" value="+7">Kazakhstan (+7)</option>
            		<option data-countrycode="KE" value="+254">Kenya (+254)</option>
            		<option data-countrycode="KI" value="+686">Kiribati (+686)</option>
            		<option data-countrycode="KP" value="+850">Korea North (+850)</option>
            		<option data-countrycode="KR" value="+82">Korea South (+82)</option>
            		<option data-countrycode="KW" value="+965">Kuwait (+965)</option>
            		<option data-countrycode="KG" value="+996">Kyrgyzstan (+996)</option>
            		<option data-countrycode="LA" value="+856">Laos (+856)</option>
            		<option data-countrycode="LV" value="+371">Latvia (+371)</option>
            		<option data-countrycode="LB" value="+961">Lebanon (+961)</option>
            		<option data-countrycode="LS" value="+266">Lesotho (+266)</option>
            		<option data-countrycode="LR" value="+231">Liberia (+231)</option>
            		<option data-countrycode="LY" value="+218">Libya (+218)</option>
            		<option data-countrycode="LI" value="+417">Liechtenstein (+417)</option>
            		<option data-countrycode="LT" value="+370">Lithuania (+370)</option>
            		<option data-countrycode="LU" value="+352">Luxembourg (+352)</option>
            		<option data-countrycode="MO" value="+853">Macao (+853)</option>
            		<option data-countrycode="MK" value="+389">Macedonia (+389)</option>
            		<option data-countrycode="MG" value="+261">Madagascar (+261)</option>
            		<option data-countrycode="MW" value="+265">Malawi (+265)</option>
            		<option data-countrycode="MY" value="+60">Malaysia (+60)</option>
            		<option data-countrycode="MV" value="+960">Maldives (+960)</option>
            		<option data-countrycode="ML" value="+223">Mali (+223)</option>
            		<option data-countrycode="MT" value="+356">Malta (+356)</option>
            		<option data-countrycode="MH" value="+692">Marshall Islands (+692)</option>
            		<option data-countrycode="MQ" value="+596">Martinique (+596)</option>
            		<option data-countrycode="MR" value="+222">Mauritania (+222)</option>
            		<option data-countrycode="YT" value="+269">Mayotte (+269)</option>
            		<option data-countrycode="MX" value="+52">Mexico (+52)</option>
            		<option data-countrycode="FM" value="+691">Micronesia (+691)</option>
            		<option data-countrycode="MD" value="+373">Moldova (+373)</option>
            		<option data-countrycode="MC" value="+377">Monaco (+377)</option>
            		<option data-countrycode="MN" value="+976">Mongolia (+976)</option>
            		<option data-countrycode="MS" value="+1664">Montserrat (+1664)</option>
            		<option data-countrycode="MA" value="+212">Morocco (+212)</option>
            		<option data-countrycode="MZ" value="+258">Mozambique (+258)</option>
            		<option data-countrycode="MN" value="+95">Myanmar (+95)</option>
            		<option data-countrycode="NA" value="+264">Namibia (+264)</option>
            		<option data-countrycode="NR" value="+674">Nauru (+674)</option>
            		<option data-countrycode="NP" value="+977">Nepal (+977)</option>
            		<option data-countrycode="NL" value="+31">Netherlands (+31)</option>
            		<option data-countrycode="NC" value="+687">New Caledonia (+687)</option>
            		<option data-countrycode="NZ" value="+64">New Zealand (+64)</option>
            		<option data-countrycode="NI" value="+505">Nicaragua (+505)</option>
            		<option data-countrycode="NE" value="+227">Niger (+227)</option>
            		<option data-countrycode="NG" value="+234">Nigeria (+234)</option>
            		<option data-countrycode="NU" value="+683">Niue (+683)</option>
            		<option data-countrycode="NF" value="+672">Norfolk Islands (+672)</option>
            		<option data-countrycode="NP" value="+670">Northern Marianas (+670)</option>
            		<option data-countrycode="NO" value="+47">Norway (+47)</option>
            		<option data-countrycode="OM" value="+968">Oman (+968)</option>
            		<option data-countrycode="PW" value="+680">Palau (+680)</option>
            		<option data-countrycode="PA" value="+507">Panama (+507)</option>
            		<option data-countrycode="PG" value="+675">Papua New Guinea (+675)</option>
            		<option data-countrycode="PY" value="+595">Paraguay (+595)</option>
            		<option data-countrycode="PE" value="+51">Peru (+51)</option>
            		<option data-countrycode="PH" value="+63">Philippines (+63)</option>
            		<option data-countrycode="PL" value="+48">Poland (+48)</option>
            		<option data-countrycode="PT" value="+351">Portugal (+351)</option>
            		<option data-countrycode="PR" value="+1787">Puerto Rico (+1787)</option>
            		<option data-countrycode="QA" value="+974">Qatar (+974)</option>
            		<option data-countrycode="RE" value="+262">Reunion (+262)</option>
            		<option data-countrycode="RO" value="+40">Romania (+40)</option>
            		<option data-countrycode="RU" value="+7">Russia (+7)</option>
            		<option data-countrycode="RW" value="+250">Rwanda (+250)</option>
            		<option data-countrycode="SM" value="+378">San Marino (+378)</option>
            		<option data-countrycode="ST" value="+239">Sao Tome &amp; Principe (+239)</option>
            		<option data-countrycode="SA" value="+966">Saudi Arabia (+966)</option>
            		<option data-countrycode="SN" value="+221">Senegal (+221)</option>
            		<option data-countrycode="CS" value="+381">Serbia (+381)</option>
            		<option data-countrycode="SC" value="+248">Seychelles (+248)</option>
            		<option data-countrycode="SL" value="+232">Sierra Leone (+232)</option>
            		<option data-countrycode="SG" value="+65">Singapore (+65)</option>
            		<option data-countrycode="SK" value="+421">Slovak Republic (+421)</option>
            		<option data-countrycode="SI" value="+386">Slovenia (+386)</option>
            		<option data-countrycode="SB" value="+677">Solomon Islands (+677)</option>
            		<option data-countrycode="SO" value="+252">Somalia (+252)</option>
            		<option data-countrycode="ZA" value="+27">South Africa (+27)</option>
            		<option data-countrycode="ES" value="+34">Spain (+34)</option>
            		<option data-countrycode="LK" value="+94">Sri Lanka (+94)</option>
            		<option data-countrycode="SH" value="+290">St. Helena (+290)</option>
            		<option data-countrycode="KN" value="+1869">St. Kitts (+1869)</option>
            		<option data-countrycode="SC" value="+1758">St. Lucia (+1758)</option>
            		<option data-countrycode="SD" value="+249">Sudan (+249)</option>
            		<option data-countrycode="SR" value="+597">Suriname (+597)</option>
            		<option data-countrycode="SZ" value="+268">Swaziland (+268)</option>
            		<option data-countrycode="SE" value="+46">Sweden (+46)</option>
            		<option data-countrycode="CH" value="+41">Switzerland (+41)</option>
            		<option data-countrycode="SI" value="+963">Syria (+963)</option>
            		<option data-countrycode="TW" value="+886">Taiwan (+886)</option>
            		<option data-countrycode="TJ" value="+7">Tajikstan (+7)</option>
            		<option data-countrycode="TH" value="66">Thailand (+66)</option>
            		<option data-countrycode="TG" value="+228">Togo (+228)</option>
            		<option data-countrycode="TO" value="+676">Tonga (+676)</option>
            		<option data-countrycode="TT" value="+1868">Trinidad &amp; Tobago (+1868)</option>
            		<option data-countrycode="TN" value="+216">Tunisia (+216)</option>
            		<option data-countrycode="TR" value="+90">Turkey (+90)</option>
            		<option data-countrycode="TM" value="+7">Turkmenistan (+7)</option>
            		<option data-countrycode="TM" value="+993">Turkmenistan (+993)</option>
            		<option data-countrycode="TC" value="+1649">Turks &amp; Caicos Islands (+1649)</option>
            		<option data-countrycode="TV" value="+688">Tuvalu (+688)</option>
            		<option data-countrycode="UG" value="+256">Uganda (+256)</option>
            		<!-- <option data-countryCode="GB" value="+44">UK (+44)</option> -->
            		<option data-countrycode="UA" value="+380">Ukraine (+380)</option>
            		<option data-countrycode="AE" value="+971">United Arab Emirates (+971)</option>
            		<option data-countrycode="UY" value="+598">Uruguay (+598)</option>
            		 <option data-countrycode="US" value="+1">USA (+1)</option> 
            		<option data-countrycode="UZ" value="+7">Uzbekistan (+7)</option>
            		<option data-countrycode="VU" value="+678">Vanuatu (+678)</option>
            		<option data-countrycode="VA" value="+379">Vatican City (+379)</option>
            		<option data-countrycode="VE" value="+58">Venezuela (+58)</option>
            		<option data-countrycode="VN" value="+84">Vietnam (+84)</option>
            		<option data-countrycode="VG" value="+84">Virgin Islands - British (+1284)</option>
            		<option data-countrycode="VI" value="+84">Virgin Islands - US (+1340)</option>
            		<option data-countrycode="WF" value="+681">Wallis &amp; Futuna (+681)</option>
            		<option data-countrycode="YE" value="+969">Yemen (North)(+969)</option>
            		<option data-countrycode="YE" value="+967">Yemen (South)(+967)</option>
            		<option data-countrycode="ZM" value="+260">Zambia (+260)</option>
            		<option data-countrycode="ZW" value="+263">Zimbabwe (+263)</option>
            	
            </select>
                    </div>
                    <div class="col-md-8">
                                 <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Phone" required="required" data-error="Phone is required" pattern="^\+?[1-9]\d{1,14}$" title="Enter Valid   digits Mobile Number">
              <div class="help-block with-errors"></div>
                    </div>
                </div>
             
            </div>
            <div class="form-group">
              <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="4" required="required" data-error="Please,leave us a message."></textarea>
              <div class="help-block with-errors"></div>
            </div>
            <button class="btn btn-border btn-radius"><span>Submit Now</span>
            </button>
            <input type="hidden" id="token" name="token">
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="epop-up" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
   <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Enquire Now</h5>
          <button type="button" id="btnModeClose" class="close" data-dismiss="modal" aria-label="Close" style="background-color: #0087c8;
    color: #fff;font-size:22px;
    padding: 6px 18px;
       position: relative;
    top: 0;
    float: right;
    border: none;
    opacity: initial;">
<span aria-hidden="true">&times;</span>
</button>
      </div>
      <div class="modal-body">
                <form action="mail.php" method="post">
            <div class="messages"></div>
            <div class="form-group">
              <input id="form_name1" type="text" name="name" class="form-control" placeholder="Name" required="required" data-error="Username is required." pattern="[A-Za-z .]{3,20}" title="Enter valid Name, Max characters allowed are 20">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <input id="form_email1" type="email" name="email" class="form-control" placeholder="Email" required="required" data-error="Valid email is required.">
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <select class="form-control" name="countryCode"  title="County Code*" >
                 <option value=""  disabled selected> Select country code</option>
                <option data-countrycode="IN" value="+91" >India (+91)</option>
            	<option data-countrycode="GB" value="+44">Norway (+47)</option>
            	<option data-countrycode="US" value="+1">UK (+44)</option>
            	<option data-countrycode="DZ" value="+213">Algeria (+213)</option>
            		<option data-countrycode="AD" value="+376">Andorra (+376)</option>
            		<option data-countrycode="AO" value="+244">Angola (+244)</option>
            		<option data-countrycode="AI" value="+1264">Anguilla (+1264)</option>
            		<option data-countrycode="AG" value="+1268">Antigua &amp; Barbuda (+1268)</option>
            		<option data-countrycode="AR" value="+54">Argentina (+54)</option>
            		<option data-countrycode="AM" value="+374">Armenia (+374)</option>
            		<option data-countrycode="AW" value="+297">Aruba (+297)</option>
            		<option data-countrycode="AU" value="+61">Australia (+61)</option>
            		<option data-countrycode="AT" value="+43">Austria (+43)</option>
            		<option data-countrycode="AZ" value="+994">Azerbaijan (+994)</option>
            		<option data-countrycode="BS" value="+1242">Bahamas (+1242)</option>
            		<option data-countrycode="BH" value="+973">Bahrain (+973)</option>
            		<option data-countrycode="BD" value="+880">Bangladesh (+880)</option>
            		<option data-countrycode="BB" value="+1246">Barbados (+1246)</option>
            		<option data-countrycode="BY" value="+375">Belarus (+375)</option>
            		<option data-countrycode="BE" value="+32">Belgium (+32)</option>
            		<option data-countrycode="BZ" value="+501">Belize (+501)</option>
            		<option data-countrycode="BJ" value="+229">Benin (+229)</option>
            		<option data-countrycode="BM" value="+1441">Bermuda (+1441)</option>
            		<option data-countrycode="BT" value="+975">Bhutan (+975)</option>
            		<option data-countrycode="BO" value="+591">Bolivia (+591)</option>
            		<option data-countrycode="BA" value="+387">Bosnia Herzegovina (+387)</option>
            		<option data-countrycode="BW" value="+267">Botswana (+267)</option>
            		<option data-countrycode="BR" value="+55">Brazil (+55)</option>
            		<option data-countrycode="BN" value="+673">Brunei (+673)</option>
            		<option data-countrycode="BG" value="+359">Bulgaria (+359)</option>
            		<option data-countrycode="BF" value="+226">Burkina Faso (+226)</option>
            		<option data-countrycode="BI" value="+257">Burundi (+257)</option>
            		<option data-countrycode="KH" value="+855">Cambodia (+855)</option>
            		<option data-countrycode="CM" value="+237">Cameroon (+237)</option>
            		<option data-countrycode="CA" value="+1">Canada (+1)</option>
            		<option data-countrycode="CV" value="+238">Cape Verde Islands (+238)</option>
            		<option data-countrycode="KY" value="+1345">Cayman Islands (+1345)</option>
            		<option data-countrycode="CF" value="+236">Central African Republic (+236)</option>
            		<option data-countrycode="CL" value="+56">Chile (+56)</option>
            		<option data-countrycode="CN" value="+86">China (+86)</option>
            		<option data-countrycode="CO" value="+57">Colombia (+57)</option>
            		<option data-countrycode="KM" value="+269">Comoros (+269)</option>
            		<option data-countrycode="CG" value="+242">Congo (+242)</option>
            		<option data-countrycode="CK" value="+682">Cook Islands (+682)</option>
            		<option data-countrycode="CR" value="+506">Costa Rica (+506)</option>
            		<option data-countrycode="HR" value="+385">Croatia (+385)</option>
            		<option data-countrycode="CU" value="+53">Cuba (+53)</option>
            		<option data-countrycode="CY" value="+90392">Cyprus North (+90392)</option>
            		<option data-countrycode="CY" value="+357">Cyprus South (+357)</option>
            		<option data-countrycode="CZ" value="+42">Czech Republic (+42)</option>
            		<option data-countrycode="DK" value="+45">Denmark (+45)</option>
            		<option data-countrycode="DJ" value="+253">Djibouti (+253)</option>
            		<option data-countrycode="DM" value="+1809">Dominica (+1809)</option>
            		<option data-countrycode="DO" value="+1809">Dominican Republic (+1809)</option>
            		<option data-countrycode="EC" value="+593">Ecuador (+593)</option>
            		<option data-countrycode="EG" value="+20">Egypt (+20)</option>
            		<option data-countrycode="SV" value="+503">El Salvador (+503)</option>
            		<option data-countrycode="GQ" value="+240">Equatorial Guinea (+240)</option>
            		<option data-countrycode="ER" value="+291">Eritrea (+291)</option>
            		<option data-countrycode="EE" value="+372">Estonia (+372)</option>
            		<option data-countrycode="ET" value="+251">Ethiopia (+251)</option>
            		<option data-countrycode="FK" value="+500">Falkland Islands (+500)</option>
            		<option data-countrycode="FO" value="+298">Faroe Islands (+298)</option>
            		<option data-countrycode="FJ" value="+679">Fiji (+679)</option>
            		<option data-countrycode="FI" value="+358">Finland (+358)</option>
            		<option data-countrycode="FR" value="+33">France (+33)</option>
            		<option data-countrycode="GF" value="+594">French Guiana (+594)</option>
            		<option data-countrycode="PF" value="+689">French Polynesia (+689)</option>
            		<option data-countrycode="GA" value="+241">Gabon (+241)</option>
            		<option data-countrycode="GM" value="+220">Gambia (+220)</option>
            		<option data-countrycode="GE" value="+7880">Georgia (+7880)</option>
            		<option data-countrycode="DE" value="+49">Germany (+49)</option>
            		<option data-countrycode="GH" value="+233">Ghana (+233)</option>
            		<option data-countrycode="GI" value="+350">Gibraltar (+350)</option>
            		<option data-countrycode="GR" value="+30">Greece (+30)</option>
            		<option data-countrycode="GL" value="+299">Greenland (+299)</option>
            		<option data-countrycode="GD" value="+1473">Grenada (+1473)</option>
            		<option data-countrycode="GP" value="+590">Guadeloupe (+590)</option>
            		<option data-countrycode="GU" value="+671">Guam (+671)</option>
            		<option data-countrycode="GT" value="+502">Guatemala (+502)</option>
            		<option data-countrycode="GN" value="+224">Guinea (+224)</option>
            		<option data-countrycode="GW" value="+245">Guinea - Bissau (+245)</option>
            		<option data-countrycode="GY" value="+592">Guyana (+592)</option>
            		<option data-countrycode="HT" value="+509">Haiti (+509)</option>
            		<option data-countrycode="HN" value="+504">Honduras (+504)</option>
            		<option data-countrycode="HK" value="+852">Hong Kong (+852)</option>
            		<option data-countrycode="HU" value="+36">Hungary (+36)</option>
            		<option data-countrycode="IS" value="+354">Iceland (+354)</option>
            	
            		<option data-countrycode="ID" value="+62">Indonesia (+62)</option>
            		<option data-countrycode="IR" value="+98">Iran (+98)</option>
            		<option data-countrycode="IQ" value="+964">Iraq (+964)</option>
            		<option data-countrycode="IE" value="+353">Ireland (+353)</option>
            		<option data-countrycode="IL" value="+972">Israel (+972)</option>
            		<option data-countrycode="IT" value="+39">Italy (+39)</option>
            		<option data-countrycode="JM" value="+1876">Jamaica (+1876)</option>
            		<option data-countrycode="JP" value="+81">Japan (+81)</option>
            		<option data-countrycode="JO" value="+962">Jordan (+962)</option>
            		<option data-countrycode="KZ" value="+7">Kazakhstan (+7)</option>
            		<option data-countrycode="KE" value="+254">Kenya (+254)</option>
            		<option data-countrycode="KI" value="+686">Kiribati (+686)</option>
            		<option data-countrycode="KP" value="+850">Korea North (+850)</option>
            		<option data-countrycode="KR" value="+82">Korea South (+82)</option>
            		<option data-countrycode="KW" value="+965">Kuwait (+965)</option>
            		<option data-countrycode="KG" value="+996">Kyrgyzstan (+996)</option>
            		<option data-countrycode="LA" value="+856">Laos (+856)</option>
            		<option data-countrycode="LV" value="+371">Latvia (+371)</option>
            		<option data-countrycode="LB" value="+961">Lebanon (+961)</option>
            		<option data-countrycode="LS" value="+266">Lesotho (+266)</option>
            		<option data-countrycode="LR" value="+231">Liberia (+231)</option>
            		<option data-countrycode="LY" value="+218">Libya (+218)</option>
            		<option data-countrycode="LI" value="+417">Liechtenstein (+417)</option>
            		<option data-countrycode="LT" value="+370">Lithuania (+370)</option>
            		<option data-countrycode="LU" value="+352">Luxembourg (+352)</option>
            		<option data-countrycode="MO" value="+853">Macao (+853)</option>
            		<option data-countrycode="MK" value="+389">Macedonia (+389)</option>
            		<option data-countrycode="MG" value="+261">Madagascar (+261)</option>
            		<option data-countrycode="MW" value="+265">Malawi (+265)</option>
            		<option data-countrycode="MY" value="+60">Malaysia (+60)</option>
            		<option data-countrycode="MV" value="+960">Maldives (+960)</option>
            		<option data-countrycode="ML" value="+223">Mali (+223)</option>
            		<option data-countrycode="MT" value="+356">Malta (+356)</option>
            		<option data-countrycode="MH" value="+692">Marshall Islands (+692)</option>
            		<option data-countrycode="MQ" value="+596">Martinique (+596)</option>
            		<option data-countrycode="MR" value="+222">Mauritania (+222)</option>
            		<option data-countrycode="YT" value="+269">Mayotte (+269)</option>
            		<option data-countrycode="MX" value="+52">Mexico (+52)</option>
            		<option data-countrycode="FM" value="+691">Micronesia (+691)</option>
            		<option data-countrycode="MD" value="+373">Moldova (+373)</option>
            		<option data-countrycode="MC" value="+377">Monaco (+377)</option>
            		<option data-countrycode="MN" value="+976">Mongolia (+976)</option>
            		<option data-countrycode="MS" value="+1664">Montserrat (+1664)</option>
            		<option data-countrycode="MA" value="+212">Morocco (+212)</option>
            		<option data-countrycode="MZ" value="+258">Mozambique (+258)</option>
            		<option data-countrycode="MN" value="+95">Myanmar (+95)</option>
            		<option data-countrycode="NA" value="+264">Namibia (+264)</option>
            		<option data-countrycode="NR" value="+674">Nauru (+674)</option>
            		<option data-countrycode="NP" value="+977">Nepal (+977)</option>
            		<option data-countrycode="NL" value="+31">Netherlands (+31)</option>
            		<option data-countrycode="NC" value="+687">New Caledonia (+687)</option>
            		<option data-countrycode="NZ" value="+64">New Zealand (+64)</option>
            		<option data-countrycode="NI" value="+505">Nicaragua (+505)</option>
            		<option data-countrycode="NE" value="+227">Niger (+227)</option>
            		<option data-countrycode="NG" value="+234">Nigeria (+234)</option>
            		<option data-countrycode="NU" value="+683">Niue (+683)</option>
            		<option data-countrycode="NF" value="+672">Norfolk Islands (+672)</option>
            		<option data-countrycode="NP" value="+670">Northern Marianas (+670)</option>
            		<option data-countrycode="NO" value="+47">Norway (+47)</option>
            		<option data-countrycode="OM" value="+968">Oman (+968)</option>
            		<option data-countrycode="PW" value="+680">Palau (+680)</option>
            		<option data-countrycode="PA" value="+507">Panama (+507)</option>
            		<option data-countrycode="PG" value="+675">Papua New Guinea (+675)</option>
            		<option data-countrycode="PY" value="+595">Paraguay (+595)</option>
            		<option data-countrycode="PE" value="+51">Peru (+51)</option>
            		<option data-countrycode="PH" value="+63">Philippines (+63)</option>
            		<option data-countrycode="PL" value="+48">Poland (+48)</option>
            		<option data-countrycode="PT" value="+351">Portugal (+351)</option>
            		<option data-countrycode="PR" value="+1787">Puerto Rico (+1787)</option>
            		<option data-countrycode="QA" value="+974">Qatar (+974)</option>
            		<option data-countrycode="RE" value="+262">Reunion (+262)</option>
            		<option data-countrycode="RO" value="+40">Romania (+40)</option>
            		<option data-countrycode="RU" value="+7">Russia (+7)</option>
            		<option data-countrycode="RW" value="+250">Rwanda (+250)</option>
            		<option data-countrycode="SM" value="+378">San Marino (+378)</option>
            		<option data-countrycode="ST" value="+239">Sao Tome &amp; Principe (+239)</option>
            		<option data-countrycode="SA" value="+966">Saudi Arabia (+966)</option>
            		<option data-countrycode="SN" value="+221">Senegal (+221)</option>
            		<option data-countrycode="CS" value="+381">Serbia (+381)</option>
            		<option data-countrycode="SC" value="+248">Seychelles (+248)</option>
            		<option data-countrycode="SL" value="+232">Sierra Leone (+232)</option>
            		<option data-countrycode="SG" value="+65">Singapore (+65)</option>
            		<option data-countrycode="SK" value="+421">Slovak Republic (+421)</option>
            		<option data-countrycode="SI" value="+386">Slovenia (+386)</option>
            		<option data-countrycode="SB" value="+677">Solomon Islands (+677)</option>
            		<option data-countrycode="SO" value="+252">Somalia (+252)</option>
            		<option data-countrycode="ZA" value="+27">South Africa (+27)</option>
            		<option data-countrycode="ES" value="+34">Spain (+34)</option>
            		<option data-countrycode="LK" value="+94">Sri Lanka (+94)</option>
            		<option data-countrycode="SH" value="+290">St. Helena (+290)</option>
            		<option data-countrycode="KN" value="+1869">St. Kitts (+1869)</option>
            		<option data-countrycode="SC" value="+1758">St. Lucia (+1758)</option>
            		<option data-countrycode="SD" value="+249">Sudan (+249)</option>
            		<option data-countrycode="SR" value="+597">Suriname (+597)</option>
            		<option data-countrycode="SZ" value="+268">Swaziland (+268)</option>
            		<option data-countrycode="SE" value="+46">Sweden (+46)</option>
            		<option data-countrycode="CH" value="+41">Switzerland (+41)</option>
            		<option data-countrycode="SI" value="+963">Syria (+963)</option>
            		<option data-countrycode="TW" value="+886">Taiwan (+886)</option>
            		<option data-countrycode="TJ" value="+7">Tajikstan (+7)</option>
            		<option data-countrycode="TH" value="66">Thailand (+66)</option>
            		<option data-countrycode="TG" value="+228">Togo (+228)</option>
            		<option data-countrycode="TO" value="+676">Tonga (+676)</option>
            		<option data-countrycode="TT" value="+1868">Trinidad &amp; Tobago (+1868)</option>
            		<option data-countrycode="TN" value="+216">Tunisia (+216)</option>
            		<option data-countrycode="TR" value="+90">Turkey (+90)</option>
            		<option data-countrycode="TM" value="+7">Turkmenistan (+7)</option>
            		<option data-countrycode="TM" value="+993">Turkmenistan (+993)</option>
            		<option data-countrycode="TC" value="+1649">Turks &amp; Caicos Islands (+1649)</option>
            		<option data-countrycode="TV" value="+688">Tuvalu (+688)</option>
            		<option data-countrycode="UG" value="+256">Uganda (+256)</option>
            		<!-- <option data-countryCode="GB" value="+44">UK (+44)</option> -->
            		<option data-countrycode="UA" value="+380">Ukraine (+380)</option>
            		<option data-countrycode="AE" value="+971">United Arab Emirates (+971)</option>
            		<option data-countrycode="UY" value="+598">Uruguay (+598)</option>
            		 <option data-countrycode="US" value="+1">USA (+1)</option> 
            		<option data-countrycode="UZ" value="+7">Uzbekistan (+7)</option>
            		<option data-countrycode="VU" value="+678">Vanuatu (+678)</option>
            		<option data-countrycode="VA" value="+379">Vatican City (+379)</option>
            		<option data-countrycode="VE" value="+58">Venezuela (+58)</option>
            		<option data-countrycode="VN" value="+84">Vietnam (+84)</option>
            		<option data-countrycode="VG" value="+84">Virgin Islands - British (+1284)</option>
            		<option data-countrycode="VI" value="+84">Virgin Islands - US (+1340)</option>
            		<option data-countrycode="WF" value="+681">Wallis &amp; Futuna (+681)</option>
            		<option data-countrycode="YE" value="+969">Yemen (North)(+969)</option>
            		<option data-countrycode="YE" value="+967">Yemen (South)(+967)</option>
            		<option data-countrycode="ZM" value="+260">Zambia (+260)</option>
            		<option data-countrycode="ZW" value="+263">Zimbabwe (+263)</option>
            	
            </select>
                    </div>
                    <div class="col-md-8">
                         <input id="form_phone1" type="tel" name="phone" class="form-control" placeholder="Phone" required="required" data-error="Phone is required" pattern="^\+?[1-9]\d{1,14}$" title="Enter Valid   digits Mobile Number">
              <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="form-group">
              <textarea id="form_message1" name="message" class="form-control" placeholder="Message" rows="4" required="required" data-error="Please,leave us a message."></textarea>
              <div class="help-block with-errors"></div>
            </div>
            <button class="btn btn-border btn-radius"><span>Submit Now</span>
            </button>
            <input type="hidden" id="token1" name="token">
          </form>

      </div>
     
    </div>
  </div>
  </div>
<!--map start-->

<section class="o-hidden p-0">
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col-sm-12">
          <h2 style="display:none;">Heading</h2>
        <div class="map iframe-h">
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3805.7149585074017!2d78.59828611435437!3d17.473351804920505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9c509c9ba2f3%3A0xc512a631e6ac0661!2sKGR%20RIGS%20%26%20MINING%20EQUIPMENT!5e0!3m2!1sen!2sin!4v1587647741263!5m2!1sen!2sin"  height="450"  style="border:none;width:100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
      </div>      
    </div>
  </div>
</section>

<!--map end-->

<!--footer start-->

<!--<footer class="footer dark-bg pt-10 sm-pt-8 pos-r" data-bg-img="images/bg/09.png" style="background-size: contain; background-repeat: no-repeat;">-->
<footer class="footer dark-bg pt-10 sm-pt-8 pos-r">
  <div class="contact-media">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="media-icon style-2 list-inline theme-bg">
            <li> <i class="flaticon-paper-plane"></i>
              <span>Address:</span>
              <p class="mb-0">225/P & 226/P, IDA PHASE-II, Cherlapally, Hyderabad, Telangana 500051</p>
            </li>
            <li> <i class="flaticon-phone-call"></i>
              <span>Phone:</span>
              <a href="tel:+917901344444">+91 7901344444</a>, <br><a href="tel:+919848022014"> +91 9848022014</a>
            </li>
            <li> <i class="flaticon-message"></i>
              <span>Email:</span>
              <a href="mailto:sales@kgrrigs.com">sales@kgrrigs.com</a>, <a href="mailto:info@kgrrigs.com"> info@kgrrigs.com</a>, <a href="mailto:kgrrigs@gmail.com"> kgrrigs@gmail.com</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="primary-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <h5>About <span class="text-theme"> KGR Rigs</span></h5>
          <p class="mb-3">KGR Group addresses the Mining sector through a comprehensive portfolio of products, with an experience of delivering value-based RIGS to over 100 institutions across 25 countries.</p> <a class="btn-simple" href="about.php"><span>Read More <i class="ml-2 fas fa-long-arrow-alt-right"></i></span></a>
        </div>
        <div class="col-lg-3 col-md-6 sm-mt-5 footer-list">
          <h5>Quick <span class="text-theme"> Links</span></h5>
          <ul class="list-unstyled">
            <!--<li><a href="index.php"><i class="fas fa-angle-right"></i> Home</a>-->
            <!--</li>-->
            <li><a href="about.php"><i class="fas fa-angle-right"></i> About Us</a>
            </li>
            <li><a href="infrastructure.php"><i class="fas fa-angle-right"></i> Infrastructure</a>
            </li>
            <li><a href="contact.php"><i class="fas fa-angle-right"></i> Contact</a>
            </li>
            <li><a href="our-presence.php"><i class="fas fa-angle-right"></i> Presence</a>
            </li>
            <li><a href="kgr-dth.php"><i class="fas fa-angle-right"></i> KGR DTH 1000/1500/2000</a>
            </li>
            <li><a href="kgr-dthr.php"><i class="fas fa-angle-right"></i> KGR DTHR 1000/1500/2000</a>
            </li>
            <li><a href="sitemap.php"><i class="fas fa-angle-right"></i> SiteMap</a>
            </li>
            <li><a href="blogs.php"><i class="fas fa-angle-right"></i> Blogs</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 sm-mt-5 footer-list">
          <h5>Products <span class="text-theme"> Range</span></h5>
          <ul class="list-unstyled">
            
            <li><a href="tractor-mounted-rig.php"><i class="fas fa-angle-right"></i> Tractor Mounted Rig</a>
            </li>
            <li><a href="kgr-em-40.php"><i class="fas fa-angle-right"></i> KGR EM-40 Mining Rig</a>
            </li>
            <li><a href="kgr-cd-35.php"><i class="fas fa-angle-right"></i> KGR CD-35(LM 100)</a>
            </li>
            <li><a href="core-drilling-rig.php"><i class="fas fa-angle-right"></i> Core Drilling Rig</a>
            </li>
            <li><a href="friction-welded-drill-pipes.php"><i class="fas fa-angle-right"></i> Friction Welded Drill Pipes</a>
            </li>
            <li><a href="dth-hammers-button-bits.php"><i class="fas fa-angle-right"></i> DTH Hammers & Button Bits</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 md-mt-5">
          <h5>Business <span class="text-theme"> hours</span></h5>
          <p>KGR Rigs & Mining Equipment</p>
          <ul class="list-unstyled working-hours clearfix">
            <li><span>Monday - Saturday</span> 09:00 to 6:00 </li>
            <li><span>Sunday</span> Closed</li>
          </ul>
          <div class="social-icons social-colored mt-3">
              <ul class="list-inline mb-0">
                <li class="social-facebook"><a href="https://www.facebook.com/people/KGR-Rigs-Mining-Equipment/100078865001441/" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                </li>
                <!--<li class="social-twitter"><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>-->
                <!--</li>-->
                <!--<li class="social-gplus"><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>-->
                <!--</li>-->
                <li class="social-linkedin"><a href="https://www.linkedin.com/company/kgr-rigs-mining-equipment/?viewAsMember=true" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                </li>
              </ul>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="secondary-footer">
    <div class="container">
      <div class="copyright">
        <div class="row align-items-center">
          <div class="col-md-7">
           <span>Copyright 2020 KGR Rigs. Powered by <span>
               <img src="https://www.grank.co.in/assest/photos/g-rank-white-logo.png" loading="lazy" alt="grank-logo" class="logo-white"></span> | Digital Marketing Services</span>
          </div>
          <!-- <div class="col-md-5 text-md-right sm-mt-3 footer-list">
            <ul class="list-inline">
              <li><a href="#">Terms & Condition</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</div>
</footer>

<!--footer end-->


<!--back-to-top start-->

<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="fas fa-chevron-up"></i></a></div>

<!--back-to-top end-->
<script>
	grecaptcha.ready(function() {
		grecaptcha.execute('6LceZ8MbAAAAAH4BFsxP87_cyknqnHhsCXyUMS3V', {action: 'homepage'}).then(function(token) {
			console.log(token);
			document.getElementById("token").value = token;
		});
	});
</script>
<script>
	grecaptcha.ready(function() {
		grecaptcha.execute('6LceZ8MbAAAAAH4BFsxP87_cyknqnHhsCXyUMS3V', {action: 'homepage'}).then(function(token) {
			console.log(token);
			document.getElementById("token1").value = token;
		});
	});
</script>
<script>
	grecaptcha.ready(function() {
		grecaptcha.execute('6LceZ8MbAAAAAH4BFsxP87_cyknqnHhsCXyUMS3V', {action: 'homepage'}).then(function(token) {
			console.log(token);
			document.getElementById("token2").value = token;
		});
	});
</script>
<script>
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script async src="https://backend.livhousing.com/bot/create-script-tag?token=10c72d82-db21-4e6e-b5f0-65794e9b94df" ></script>