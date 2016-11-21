<?php

/*

EDIT.PHP

Allows user to edit specific entry in database

*/



// creates the edit record form

// since this form is used multiple times in this file, I have made it a function that is easily reusable

function renderForm($awbno, $date, $sconper, $scompname, $sflat, $sbuild, $sstreet, $sarea, $scity, $szip, $scountry, $sphone, $ccontper, $consphone, $ccompname, $cflat, $cbuilding, $cstreet, $carea, $ccity, $czip, $ccountry, $mode, $sinst, $pieces, $weight, $amt, $pickup, $descr, $error)

{

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

<title>Edit Record</title>
<style>
.form-style-3{
	max-width: 350px;
	font-family: "arial", "Lucida Grande", sans-serif;
		background: rgba() url(images/yellow.jpg) repeat-x left top;
		    padding: 20px 0px 0px -200px;
			margin-top: 60px;
}
.form-style-3 label{
	display:block;
	margin-bottom: 10px;
}
.form-style-3 label > span{
	float: left;
	width: 100px;
	color: #130108;
	font-weight: bold;
	font-size: 12px;
	text-shadow: 1px 1px 1px #fff;
}
.form-style-3 fieldset{
	border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	    margin: 0px 0px 10px 0px;
    border: 2px solid #FFD2D2;
    background: #ecce3b;
    padding: 20px;
	box-shadow: inset 0px 0px 15px #FFE5E5;
	-moz-box-shadow: inset 0px 0px 15px #FFE5E5;
	-webkit-box-shadow: inset 0px 0px 15px #FFE5E5;
}
.form-style-3 fieldset legend{
	color: #130108;
	border-top: 1px solid #FFD2D2;
	border-left: 1px solid #FFD2D2;
	border-right: 1px solid #FFD2D2;
	border-radius: 5px 5px 0px 0px;
	-webkit-border-radius: 5px 5px 0px 0px;
	-moz-border-radius: 5px 5px 0px 0px;
	background: #bdb1b1;
	padding: 5px 8px 3px 8px;
	box-shadow: -0px -1px 2px #F1F1F1;
	-moz-box-shadow:-0px -1px 2px #F1F1F1;
	-webkit-box-shadow:-0px -1px 2px #F1F1F1;
	font-weight: normal;
	font-size: 12px;
}
.form-style-3 textarea{
	width:250px;
	height:100px;
}
.form-style-3 input[type=text],
.form-style-3 input[type=date],
.form-style-3 input[type=datetime],
.form-style-3 input[type=number],
.form-style-3 input[type=search],
.form-style-3 input[type=time],
.form-style-3 input[type=url],
.form-style-3 input[type=email],
.form-style-3 select, 
.form-style-3 textarea{
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
.form-style-3  input[type=submit],
.form-style-3  input[type=button]{
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
.form-style-3 .required{
	color:red;
	font-weight:normal;
}
</style>


</head>

<body>
<?php include 'scroll.php';?>
<?php

// if there are any errors, display them

if ($error != '')

{

echo '<div style="padding:2px; border:1px solid red; color:red;">'.$error.'</div>';

}

?>



<form action="" method="post">

<input type="hidden" name="awbno" value="<?php echo $awbno; ?>"/>

<div>

<p><strong>awbno</strong> <?php echo $awbno; ?></p>

<div class="form-style-3">

<fieldset>
<label for="field3"><span>DATE<span class="required">*</span></span><input type="text" class="input-field" name="date" value="<?php echo $date; ?>" /></label>
<label for="field3"><span>ConPERSON<span class="required">*</span></span><input type="text" class="input-field" name="sconper" value="<?php echo $sconper; ?>" /></label>
<label for="field3"><span>COMPANYNAME<span class="required">*</span></span><input type="text" class="input-field" name="scompname" value="<?php echo $scompname; ?>" /></label>
<label for="field3"><span>FLAT<span class="required">*</span></span><input type="text" class="input-field" name="sflat" value="<?php echo $sflat; ?>" /></label>
<label for="field3"><span>BUILDING<span class="required">*</span></span><input type="text" class="input-field" name="sbuild" value="<?php echo $sbuild; ?>" /></label>
<label for="field3"><span>STREET<span class="required">*</span></span><input type="text" class="input-field" name="sstreet" value="<?php echo $sstreet; ?>" /></label>
<label for="field3"><span>AREA<span class="required">*</span></span><input type="text" class="input-field" name="sarea" value="<?php echo $sarea; ?>" /></label>
<label for="field3"><span>CITY<span class="required">*</span></span><input type="text" class="input-field" name="scity" value="<?php echo $scity; ?>" /></label>
<label for="field3"><span>ZIPCODE<span class="required">*</span></span><input type="text" class="input-field" name="szip" value="<?php echo $szip; ?>" /></label>
<label for="field3"><span>COUNTRY<span class="required">*</span></span><input type="text" class="input-field" name="scountry" value="<?php echo $scountry; ?>" /></label>
<label for="field3"><span>SENDERPHONE<span class="required">*</span></span><input type="text" class="input-field" name="sphone" value="<?php echo $sphone; ?>" /></label>
<label for="field3"><span>CONSIGPERSON<span class="required">*</span></span><input type="text" class="input-field" name="ccontper" value="<?php echo $ccontper; ?>" /></label>
<label for="field3"><span>COMPANYNAME<span class="required">*</span></span><input type="text" class="input-field" name="ccompname" value="<?php echo $ccompname; ?>" /></label>
<label for="field3"><span>CONSIGNEEPHONE<span class="required">*</span></span><input type="text" class="input-field" name="consphone" value="<?php echo $consphone; ?>" /></label>
<label for="field3"><span>FLAT<span class="required">*</span></span><input type="text" class="input-field" name="cflat" value="<?php echo $cflat; ?>" /></label>
<label for="field3"><span>BUILDING<span class="required">*</span></span><input type="text" class="input-field" name="cbuilding" value="<?php echo $cbuilding; ?>" /></label>
<label for="field3"><span>STREET<span class="required">*</span></span><input type="text" class="input-field" name="cstreet" value="<?php echo $cstreet; ?>" /></label>
<label for="field3"><span>AREA<span class="required">*</span></span><input type="text" class="input-field" name="carea" value="<?php echo $carea; ?>" /></label>
<label for="field3"><span>CITY<span class="required">*</span></span><input type="text" class="input-field" name="ccity" value="<?php echo $ccity; ?>" /></label>
<label for="field3"><span>ZIPCODE<span class="required">*</span></span><input type="text" class="input-field" name="czip" value="<?php echo $czip; ?>" /></label>
<label for="field3"><span>COUNTRY<span class="required">*</span></span><input type="text" class="input-field" name="ccountry" value="<?php echo $ccountry; ?>" /></label>
<label for="field3"><span>MODE<span class="required">*</span></span><input type="text" class="input-field" name="mode" value="<?php echo $mode; ?>" /></label>
<label for="field3"><span>S.INSTRUCTIONS<span class="required">*</span></span><input type="text" class="sinst" name="sinst" value="<?php echo $sinst; ?>" /></label>
<label for="field3"><span>PIECES<span class="required">*</span></span><input type="text" class="input-field" name="pieces" value="<?php echo $pieces; ?>" /></label>
<label for="field3"><span>WEIGHT<span class="required">*</span></span><input type="text" class="input-field" name="weight" value="<?php echo $weight; ?>" /></label>
<label for="field3"><span>AMOUNT<span class="required">*</span></span><input type="text" class="input-field" name="amt" value="<?php echo $amt; ?>" /></label>
<label for="field3"><span>PICKUP <span class="required">*</span></span><input type="text" class="input-field" name="pickup" value="<?php echo $pickup; ?>" /></label>
<label for="field3"><span>DESCRIPTION<span class="required">*</span></span><input type="text" class="input-field" name="descr" value="<?php echo $descr; ?>" /></label>









<p>* required</p>

<input type="submit" name="submit" value="Submit">
</fieldset>
</div>
</form>

</body>

</html>

<?php

}


// connect to the database

include('connect-db.php');



// check if the form has been submitted. If it has, process the form and save it to the database

if (isset($_POST['submit']))

{

// confirm that the 'id' value is a valid integer before getting the form data

if (is_numeric($_POST['awbno']))

{

// get form data, making sure it is valid

$awbno = $_POST['awbno'];

$date = mysql_real_escape_string(htmlspecialchars($_POST['date']));
$sconper = mysql_real_escape_string(htmlspecialchars($_POST['sconper']));
$scompname = mysql_real_escape_string(htmlspecialchars($_POST['scompname']));
$sflat = mysql_real_escape_string(htmlspecialchars($_POST['sflat']));
$sbuild = mysql_real_escape_string(htmlspecialchars($_POST['sbuild']));
$sstreet = mysql_real_escape_string(htmlspecialchars($_POST['sstreet']));
$sarea = mysql_real_escape_string(htmlspecialchars($_POST['sarea']));
$scity = mysql_real_escape_string(htmlspecialchars($_POST['scity']));
$szip = mysql_real_escape_string(htmlspecialchars($_POST['szip']));
$scountry = mysql_real_escape_string(htmlspecialchars($_POST['scountry']));
$sphone = mysql_real_escape_string(htmlspecialchars($_POST['sphone']));
$ccontper = mysql_real_escape_string(htmlspecialchars($_POST['ccontper']));
$consphone = mysql_real_escape_string(htmlspecialchars($_POST['consphone']));
$ccompname = mysql_real_escape_string(htmlspecialchars($_POST['ccompname']));
$cflat = mysql_real_escape_string(htmlspecialchars($_POST['cflat']));
$cbuilding = mysql_real_escape_string(htmlspecialchars($_POST['cbuilding']));
$cstreet = mysql_real_escape_string(htmlspecialchars($_POST['cstreet']));
$carea = mysql_real_escape_string(htmlspecialchars($_POST['carea']));
$ccity = mysql_real_escape_string(htmlspecialchars($_POST['ccity']));
$czip = mysql_real_escape_string(htmlspecialchars($_POST['czip']));
$ccountry = mysql_real_escape_string(htmlspecialchars($_POST['ccountry']));
$mode = mysql_real_escape_string(htmlspecialchars($_POST['mode']));
$sinst = mysql_real_escape_string(htmlspecialchars($_POST['sinst']));
$pieces = mysql_real_escape_string(htmlspecialchars($_POST['pieces']));
$weight = mysql_real_escape_string(htmlspecialchars($_POST['weight']));
$amt = mysql_real_escape_string(htmlspecialchars($_POST['amt']));
$pickup = mysql_real_escape_string(htmlspecialchars($_POST['pickup']));
$descr = mysql_real_escape_string(htmlspecialchars($_POST['descr']));



// check that firstname/lastname fields are both filled in

if ($date == '' || $sconper == '' || $scompname == '' || $sflat == '' || $sbuild == '' || $sstreet == '' 
|| $sarea == '' || $scity == '' || $szip == '' || $scountry == '' || $sphone == '' || $ccontper == ''
|| $ccompname == '' || $consphone == '' || $cflat== '' || $cbuilding == '' || $cstreet == '' || $carea == ''
|| $ccity == '' || $czip == '' || $ccountry == '' || $mode == '' || $sinst == '' || $pieces == ''
|| $weight == '' || $amt == '' || $pickup == '' || $descr == '')

{

// generate error message

$error = 'ERROR: Please fill in all required fields!';



//error, display form

renderForm($awbno, $date, $sconper, $scompname, $sflat, $sbuild, $sstreet, $sarea, $scity, $szip, $scountry, $sphone, $ccontper, $consphone, $ccompname, $cflat, $cbuilding, $cstreet, $carea, $ccity, $czip, $ccountry, $mode, $sinst, $pieces, $weight, $amt, $pickup, $descr, $error);

}

else

{

// save the data to the database

mysql_query("UPDATE awbill SET date='$date', sconper='$sconper', scompname='$scompname', sflat='$sflat', sbuild='$sbuild', sstreet='$sstreet', sarea='$sarea', scity='$scity', szip='$szip', scountry='$scountry', sphone='$sphone', ccontper='$ccontper', ccompname='$ccompname', consphone='$consphone', cflat='$cflat', cstreet='$cstreet', cbuilding='$cbuilding', carea='$carea', ccity='$ccity', czip='$czip', ccountry='$ccountry', mode='$mode', sinst='$sinst', pieces='$pieces', weight='$weight', amt='$amt', pickup='$pickup',descr='$descr' WHERE awbno='$awbno'")

or die(mysql_error());



// once saved, redirect back to the view page

header("Location: view.php");

}

}

else

{

// if the 'id' isn't valid, display an error

echo 'Error!';

}

}

else

// if the form hasn't been submitted, get the data from the db and display the form

{



// get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)

if (isset($_GET['awbno']) && is_numeric($_GET['awbno']) && $_GET['awbno'] > 0)

{

// query db

$awbno = $_GET['awbno'];

$result = mysql_query("SELECT * FROM awbill WHERE awbno=$awbno")

or die(mysql_error());

$row = mysql_fetch_array($result);



// check that the 'id' matches up with a row in the databse

if($row)

{
// get data from db


$date = $row['date'];
$sconper = $row['sconper'];
$scompname = $row['scompname'];
$sflat = $row['sflat'];
$sbuild = $row['sbuild'];
$sstreet = $row['sstreet'];
$sarea = $row['sarea'];
$scity = $row['scity'];
$szip = $row['szip'];
$scountry = $row['scountry'];
$sphone = $row['sphone'];
$ccontper = $row['ccontper'];
$consphone = $row['consphone'];
$ccompname = $row['ccompname'];
$cflat = $row['cflat'];
$cbuilding = $row['cbuilding'];
$cstreet = $row['cstreet'];
$carea = $row['carea'];
$ccity = $row['ccity'];
$czip = $row['czip'];
$ccountry = $row['ccountry'];
$mode = $row['mode'];
$sinst = $row['sinst'];
$pieces = $row['pieces'];
$weight = $row['weight'];
$amt = $row['amt'];
$pickup = $row['pickup'];
$descr = $row['descr'];
// show form

//renderForm($id, $firstname, $lastname, '');
renderForm($awbno, $date, $sconper, $scompname, $sflat, $sbuild, $sstreet, $sarea, $scity, $szip, $scountry, $sphone, $ccontper, $consphone, $ccompname, $cflat, $cbuilding, $cstreet, $carea, $ccity, $czip, $ccountry, $mode, $sinst, $pieces, $weight, $amt, $pickup, $descr, '');

}



else

// if no match, display result

{

echo "No results!";

}

}

else

// if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error

{

echo 'Error!';

}

}

?>