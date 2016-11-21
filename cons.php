
<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Leopards AWBill</title>
<script type="text/javascript">
function enable_text(status)
{
status=status;	
	document.myform.scompname.disabled = status;
	document.myform.sconper.disabled = status;
	document.myform.sphone.disabled = status;
	document.myform.sflat.disabled = status;
	document.myform.sbuild.disabled = status;
	document.myform.sarea.disabled = status;
	document.myform.sstreet.disabled = status;
	document.myform.scity.disabled = status;
	document.myform.szip.disabled = status;
	document.myform.scountry.disabled = status;
	
	
	document.myform.ccompname.value= "";
		document.myform.ccontper.value= "";		
	document.myform.consphone.value= "";
		document.myform.cflat.value= "";		
	document.myform.cstreet.value= "";
		document.myform.carea.value= "";		
	document.myform.ccity.value= "";
		document.myform.czip.value= "";
			document.myform.ccountry.value= "";
	
	
	

 
	
}
function clear(){
 document.getElementById("ccompname").value="";
 document.getElementById("ccontper").value="";
 document.getElementById("cflat").value="";
  document.getElementById("cbuilding").value="";
 document.getElementById("consphone").value="";
  document.getElementById("cstreet").value="";
 document.getElementById("carea").value="";
 document.getElementById("cstreet").value="";
 document.getElementById("ccity").value=""; 
  document.getElementById("ccountry").value=""; 

 
}
</script>
<style type="text/css">



.form-style-4{
	max-width: 350px;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
		background: rgba() url() left top;
	    padding: 20px 0px 0px 300px;
    margin-right: 200px;
    margin-top: -20px;
}
.form-style-4 label{
	display:block;
	margin-bottom: 10px;
}
.form-style-4 label > span{
	float: left;
	width: 100px;
	color: #130108;
	font-weight: bold;
	font-size: 12px;
	text-shadow: 1px 1px 1px #fff;
}
.form-style-4 fieldset{
	border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	margin: 0px 0px 10px 0px;
	border: 1px solid #FFD2D2;
	 background: #ecce3b;
	padding: 20px;
	<!--background: #FFF4F4;-->
	box-shadow: inset 0px 0px 15px #FFE5E5;
	-moz-box-shadow: inset 0px 0px 15px #FFE5E5;
	-webkit-box-shadow: inset 0px 0px 15px #FFE5E5;
}
.form-style-4 fieldset legend{
	color: #130108;
	border-top: 1px solid #FFD2D2;
	border-left: 1px solid #FFD2D2;
	border-right: 1px solid #FFD2D2;
	border-radius: 5px 5px 0px 0px;
	-webkit-border-radius: 5px 5px 0px 0px;
	-moz-border-radius: 5px 5px 0px 0px;
	background: #bdb1b1;
	padding: 0px 8px 3px 8px;
	box-shadow: -0px -1px 2px #F1F1F1;
	-moz-box-shadow:-0px -1px 2px #F1F1F1;
	-webkit-box-shadow:-0px -1px 2px #F1F1F1;
	font-weight: normal;
	font-size: 12px;
}
.form-style-4 textarea{
	width:250px;
	height:100px;
}
.form-style-4 input[type=text],
.form-style-4 input[type=date],
.form-style-4 input[type=datetime],
.form-style-4 input[type=number],
.form-style-4 input[type=search],
.form-style-4 input[type=time],
.form-style-4 input[type=url],
.form-style-4 input[type=email],
.form-style-4 select, 
.form-style-4 textarea{
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border: 1px solid #FFC2DC;
	outline: none;
	color: #130108;
	padding: 5px 8px 5px 8px;
	box-shadow: inset 1px 1px 4px #FFD5E7;
	-moz-box-shadow: inset 1px 1px 4px #FFD5E7;
	-webkit-box-shadow: inset 1px 1px 4px #FFD5E7;
	background: #FFEFF6;
	width:50%;

}
.form-style-4  input[type=submit],
.form-style-4  input[type=button]{
background: #130108;
    border: 1px solid #130108;
    padding: 5px 15px 5px 15px;
    color: #FFCBE2;
    /* box-shadow: inset -1px -1px 3px #FF62A7; */
    -moz-box-shadow: inset -1px -1px 3px #FF62A7;
    /* -webkit-box-shadow: inset -1px -1px 3px #FF62A7; */
    border-radius: 3px;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    font-weight: bold;
}
.form-style-4 .required{
	color:red;
	font-weight:normal;
}


</style>
</head>
<body>

<img src="logo.jpg" alt="" height="100" width="100" align="middle">
<?php include 'dat.php';?>
<?php include 'scroll.php';?>
<form action="consignee.php" name="myform" method="post">
<div class="form-style-4">

<fieldset><legend>Consignee Details</legend>

<label for="field3"><span>Company<span class="required">*</span></span><input type="text" class="input-field" name="compname" value="" /></label>
<label for="field4"><span>Contact<span class="required">*</span></span><input type="text" class="input-field" name="ccontper" value="" /></label>
<label for="field2"><span>Phone<span class="required">*</span></span><input type="text" class="input-field" name="consphone" value="" /></label>

<label for="field2"><span> Flat<span class="required">*</span></span><input type="text" class="input-field" name="flat" value="" /></label>
<label for="field2"><span>Building<span class="required">*</span></span><input type="text" class="input-field" name="building" value="" /></label>
<label for="field2"><span>Street<span class="required">*</span></span><input type="text" class="input-field" name="street" value="" /></label>
<label for="field2"><span>Area <span class="required">*</span></span><input type="text" class="input-field" name="area" value="" /></label>

<label for="field4"><span>City</span><select name="city" class="select-field">
<option value="Dubai">Dubai</option>
<option value="Abudhabi">Abudhabi</option>
<option value="Sharjah">Sharjah</option>
<option value="Fujairah">Fujairah</option>
<option value="Umm ul Quwin">UAQ</option>
<option value="Al Ain">Al Ain</option>
</select></label>
<!--<label for="field2"><span> ZipCode <span class="required">*</span></span><input type="text" class="input-field" name="zip" value="" /></label>

<label for="field4"><span>Country</span><select name="country" class="select-field">
<option value="AF">Afghanistan</option>
	<option value="AL">Albania</option>
	<option value="DZ">Algeria</option>
	<option value="AS">American Samoa</option>
	<option value="AD">Andorra</option>
	<option value="AO">Angola</option>
	<option value="AI">Anguilla</option>
	<option value="AG">Antigua And Barbuda</option>
	<option value="AR">Argentina</option>
	<option value="AM">Armenia</option>
	<option value="AW">Aruba</option>
	<option value="AU">Australia</option>
	<option value="AT">Austria</option>
	<option value="AZ">Azerbaijan</option>
	<option value="BS">Bahamas</option>
	<option value="BH">Bahrain</option>
	<option value="BD">Bangladesh</option>
	<option value="BB">Barbados</option>
	<option value="BY">Belarus</option>
	<option value="BE">Belgium</option>
	<option value="BZ">Belize</option>
	<option value="BJ">Benin</option>
	<option value="BM">Bermuda</option>
	<option value="BT">Bhutan</option>
	<option value="BO">Bolivia</option>
	<option value="BA">Bosnia &amp; Herzegovina</option>
	<option value="BW">Botswana</option>
	<option value="IO">Br Indian Ocean Terr</option>
	<option value="BR">Brazil</option>
	<option value="BN">Brunei</option>
	<option value="BG">Bulgaria</option>
	<option value="BF">Burkina Faso</option>
	<option value="BI">Burundi</option>
	<option value="KH">Cambodia</option>
	<option value="CM">Cameroon</option>
	<option value="CA">Canada</option>
	<option value="RY">Canary Is</option>
	<option value="CV">Cape Verde</option>
	<option value="KY">Cayman Is</option>
	<option value="CF">Central African Rep</option>
	<option value="TD">Chad</option>
	<option value="JE">Channel Islands</option>
	<option value="CL">Chile</option>
	<option value="CN">China</option>
	<option value="CX">Christmas Is</option>
	<option value="CC">Cocos Keeling Is</option>
	<option value="CO">Colombia</option>
	<option value="KM">Comoros</option>
	<option value="CG">Congo</option>
	<option value="CK">Cook Is</option>
	<option value="CR">Costa Rica</option>
	<option value="HR">Croatia</option>
	<option value="CU">Cuba</option>
	<option value="CY">Cyprus</option>
	<option value="CZ">Czech Republic</option>
	<option value="CD">Dem Rep Of The Congo</option>
	<option value="DK">Denmark</option>
	<option value="DJ">Djibouti</option>
	<option value="DM">Dominica</option>
	<option value="DO">Dominican Republic</option>
	<option value="TP">East Timor</option>
	<option value="EC">Ecuador</option>
	<option value="EG">Egypt</option>
	<option value="SV">El Salvador</option>
	<option value="GQ">Equatorial Guinea</option>
	<option value="ER">Eritrea</option>
	<option value="EE">Estonia</option>
	<option value="ET">Ethiopia</option>
	<option value="FK">Falkland Is</option>
	<option value="FO">Faroe Is</option>
	<option value="FJ">Fiji</option>
	<option value="FI">Finland</option>
	<option value="FR">France</option>
	<option value="GF">French Guiana</option>
	<option value="PF">French Polynesia</option>
	<option value="GA">Gabon</option>
	<option value="GM">Gambia</option>
	<option value="GE">Georgia</option>
	<option value="DE">Germany</option>
	<option value="GH">Ghana</option>
	<option value="GI">Gibraltar</option>
	<option value="GR">Greece</option>
	<option value="GL">Greenland</option>
	<option value="GD">Grenada</option>
	<option value="GP">Guadeloupe</option>
	<option value="GU">Guam</option>
	<option value="GT">Guatemala</option>
	<option value="GN">Guinea</option>
	<option value="GW">Guinea Bissau</option>
	<option value="GY">Guyana</option>
	<option value="HT">Haiti</option>
	<option value="HM">Heard &amp; Mcdonald Islands</option>
	<option value="HN">Honduras</option>
	<option value="HK">Hong Kong</option>
	<option value="HU">Hungary</option>
	<option value="IS">Iceland</option>
	<option value="IN">India</option>
	<option value="ID">Indonesia</option>
	<option value="IR">Iran</option>
	<option value="IQ">Iraq</option>
	<option value="IE">Ireland</option>
	<option value="IM">Isle Of Man</option>
	<option value="IL">Israel</option>
	<option value="IT">Italy</option>
	<option value="CI">Ivory Coast</option>
	<option value="JM">Jamaica</option>
	<option value="JP">Japan</option>
	<option value="JO">Jordan</option>
	<option value="KZ">Kazakhstan</option>
	<option value="KE">Kenya</option>
	<option value="KI">Kiribati</option>
	<option value="KP">Korea North</option>
	<option value="KR">Korea South</option>
	<option value="XZ">Kosovo</option>
	<option value="KW">Kuwait</option>
	<option value="KG">Kyrgyzstan</option>
	<option value="LA">Laos</option>
	<option value="LV">Latvia</option>
	<option value="LB">Lebanon</option>
	<option value="LS">Lesotho</option>
	<option value="LR">Liberia</option>
	<option value="LY">Libya</option>
	<option value="LI">Liechtenstein</option>
	<option value="LT">Lithuania</option>
	<option value="LU">Luxembourg</option>
	<option value="MO">Macau</option>
	<option value="MK">Macedonia</option>
	<option value="MG">Madagascar</option>
	<option value="MW">Malawi</option>
	<option value="MY">Malaysia</option>
	<option value="MV">Maldives</option>
	<option value="ML">Mali</option>
	<option value="MT">Malta</option>
	<option value="MH">Marshall Is</option>
	<option value="MQ">Martinique</option>
	<option value="MR">Mauritania</option>
	<option value="MU">Mauritius</option>
	<option value="YT">Mayotte</option>
	<option value="MX">Mexico</option>
	<option value="FM">Micronesia</option>
	<option value="MD">Moldova</option>
	<option value="MC">Monaco</option>
	<option value="MN">Mongolia</option>
	<option value="ME">Montenegro</option>
	<option value="MS">Montserrat</option>
	<option value="MA">Morocco</option>
	<option value="MZ">Mozambique</option>
	<option value="MM">Myanmar</option>
	<option value="NA">Namibia</option>
	<option value="NR">Nauru</option>
	<option value="NP">Nepal</option>
	<option value="AN">Netherland Antilles</option>
	<option value="NL">Netherlands</option>
	<option value="NC">New Caledonia</option>
	<option value="NZ">New Zealand</option>
	<option value="NI">Nicaragua</option>
	<option value="NE">Niger</option>
	<option value="NG">Nigeria</option>
	<option value="NU">Niue</option>
	<option value="NF">Norfolk Island</option>
	<option value="MP">Northern Mariana Is</option>
	<option value="NO">Norway</option>
	<option value="OM">Oman</option>
	<option value="PK">Pakistan</option>
	<option value="PW">Palau</option>
	<option value="PS">Palestine</option>
	<option value="PA">Panama</option>
	<option value="PG">Papua New Guinea</option>
	<option value="PY">Paraguay</option>
	<option value="PE">Peru</option>
	<option value="PH">Philippines</option>
	<option value="PN">Pitcairn Is</option>
	<option value="PL">Poland</option>
	<option value="PT">Portugal</option>
	<option value="PR">Puerto Rico</option>
	<option value="QA">Qatar</option>
	<option value="RE">Reunion Is</option>
	<option value="RO">Romania</option>
	<option value="RU">Russia</option>
	<option value="RW">Rwanda</option>
	<option value="WS">Samoa</option>
	<option value="SM">San Marino</option>
	<option value="ST">Sao Tome &amp; Principe</option>
	<option value="SA">Saudi Arabia</option>
	<option value="SN">Senegal</option>
	<option value="RS">Serbia</option>
	<option value="SC">Seychelles</option>
	<option value="SL">Sierra Leone</option>
	<option value="SG">Singapore</option>
	<option value="SK">Slovakia</option>
	<option value="SI">Slovenia</option>
	<option value="SB">Solomon Is</option>
	<option value="SO">Somalia</option>
	<option value="ZA">South Africa</option>
	<option value="SS">South Sudan</option>
	<option value="ES">Spain</option>
	<option value="LK">Sri Lanka</option>
	<option value="HL">St Helena</option>
	<option value="KN">St Kitts &amp; Nevis</option>
	<option value="LC">St Lucia</option>
	<option value="PM">St Pierre &amp; Miquelon</option>
	<option value="VC">St Vincent&amp;Grenadine</option>
	<option value="SD">Sudan</option>
	<option value="SR">Surinam</option>
	<option value="SJ">Svalbard &amp; Jan Mayen</option>
	<option value="SZ">Swaziland</option>
	<option value="SE">Sweden</option>
	<option value="CH">Switzerland</option>
	<option value="SY">Syria</option>
	<option value="TW">Taiwan</option>
	<option value="TJ">Tajikistan</option>
	<option value="TZ">Tanzania</option>
	<option value="TH">Thailand</option>
	<option value="TL">Timor-Lestev</option>
	<option value="TG">Togo</option>
	<option value="TK">Tokelau</option>
	<option value="TO">Tonga</option>
	<option value="TT">Trinidad &amp; Tobago</option>
	<option value="TN">Tunisia</option>
	<option value="TR">Turkey</option>
	<option value="TM">Turkmenistan</option>
	<option value="TC">Turks &amp; Caicos Is</option>
	<option value="TV">Tuvalu</option>
	<option value="UG">Uganda</option>
	<option value="UA">Ukraine</option>
	<option value="AE">United Arab Emirates</option>
	<option value="GB">United Kingdom</option>
	<option value="US">United States</option>
	<option value="UY">Uruguay</option>
	<option value="UM">Us Minor Outlying Is</option>
	<option value="UZ">Uzbekistan</option>
	<option value="VU">Vanuatu</option>
	<option value="VA">Vatican City</option>
	<option value="VE">Venezuela</option>
	<option value="VN">Vietnam</option>
	<option value="VG">Virgin Is - British</option>
	<option value="VI">Virgin Islands - Us</option>
	<option value="WL">Wales</option>
	<option value="WF">Wallis &amp; Futuna Is</option>
	<option value="EH">Western Sahara</option>
	<option value="YE">Yemen</option>
	<option value="ZM">Zambia</option>
	<option value="ZW">Zimbabwe</option>



</select></label>-->
<label><span>&nbsp;</span><input type="submit" value="Submit" /></label>
</fieldset>

</div>
</form>
		  	
</body>
</html>
