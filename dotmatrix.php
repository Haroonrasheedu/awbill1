<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "leopards");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 
// Escape user inputs for security

	//$awbno = mysqli_real_escape_string($link, $_POST['awbno']);
		$accno = mysqli_real_escape_string($link, $_POST['accno']);
	$date = mysqli_real_escape_string($link, $_POST['date']);
$sconper = mysqli_real_escape_string($link, $_POST['sconper']);
$scompname = mysqli_real_escape_string($link, $_POST['scompname']);
$sflat = mysqli_real_escape_string($link, $_POST['sflat']);
$sbuild = mysqli_real_escape_string($link, $_POST['sbuild']);
$sstreet = mysqli_real_escape_string($link, $_POST['sstreet']);
$sarea = mysqli_real_escape_string($link, $_POST['sarea']);
$scity = mysqli_real_escape_string($link, $_POST['scity']);
$szip = mysqli_real_escape_string($link, $_POST['szip']);
$scountry = mysqli_real_escape_string($link, $_POST['scountry']);
$sphone = mysqli_real_escape_string($link, $_POST['sphone']);
$ccontper = mysqli_real_escape_string($link, $_POST['ccontper']);
$consphone = mysqli_real_escape_string($link, $_POST['consphone']);
$ccompname = mysqli_real_escape_string($link, $_POST['ccompname']);
$cflat = mysqli_real_escape_string($link, $_POST['cflat']);
$cbuilding = mysqli_real_escape_string($link, $_POST['cbuilding']);
$cstreet = mysqli_real_escape_string($link, $_POST['cstreet']);
$carea = mysqli_real_escape_string($link, $_POST['carea']);
$ccity = mysqli_real_escape_string($link, $_POST['ccity']);
$czip = mysqli_real_escape_string($link, $_POST['czip']);
$ccountry = mysqli_real_escape_string($link, $_POST['ccountry']);
$mode = mysqli_real_escape_string($link, $_POST['mode']);
$sinst = mysqli_real_escape_string($link, $_POST['sinst']);
$pieces = mysqli_real_escape_string($link, $_POST['pieces']);
$weight = mysqli_real_escape_string($link, $_POST['weight']);
$amt = mysqli_real_escape_string($link, $_POST['amt']);
$pickup = mysqli_real_escape_string($link, $_POST['pickup']);
$descr = mysqli_real_escape_string($link, $_POST['descr']);







// attempt insert query execution
$sql = "INSERT INTO awbill (date, accno, sconper, scompname, sflat, sbuild, sstreet, sarea, scity, szip, scountry, sphone, ccontper, consphone, ccompname, cflat, cbuilding, cstreet, carea, ccity, czip, ccountry, mode, sinst, pieces, weight, amt, pickup, descr) VALUES ('$date', '$accno', '$sconper', '$scompname', '$sflat', '$sbuild', '$sstreet', '$sarea', '$scity', '$szip', '$scountry', '$sphone', '$ccontper', '$consphone', '$ccompname', '$cflat', '$cbuilding', '$cstreet', '$carea', '$ccity', '$czip', '$ccountry', '$mode', '$sinst', '$pieces', '$weight', '$amt', '$pickup', '$descr')";
$str1="$sflat";
$str2="$sbuild";
$str3="$sstreet";
$str4="$sarea";
$str11="$scity";
$str5="$scountry";
$str6="$szip";

$str7="$cflat";
$str8="$cbuilding";
$str9="$cstreet";
$str10="$carea";

$str51="$ccity";
$str46="$czip";
$str47="$ccountry";

$str48="$mode";
$str49="$sinst";
$str50="$amt";

if(mysqli_query($link, $sql)){
echo "1";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>


<html>
<head>
<title></title>

<style>
body{background:#eee;}
@font-face { font-family: kitfont; src: url('1979 Dot Matrix Regular.TTF'); } 

.customFont { /*  <div class="customFont" /> */
font-style: kitfont;
font-size:10;
}
#mainDiv {
height: 324px; /* height of receipt 4.5 inches*/
width: 700px;  /* weight of receipt 8.6 inches*/
position:relative; /* positioned relative to its normal position */
}
<!--#cqm { /*  <img id="cqm" /> */
top: 10px; /* top is distance from top (x axis)*/
left: 105px; /* left is distance from left (y axis)*/
position:absolute; /* position absolute based on "top" and "left"    parameters x and y  */
}-->

#or_mto { 
position: absolute;
left: 0px;
top: 0px;
z-index: -1; /*image */
}
    #date {
top: 20px;
left: -10px;
position:absolute;
font-size:12px;
}

 #accno {
top: 20px;
left: 250px;
position:absolute;
font-size:12px;
}
    #awbno {
top: 80px;
left: -10px;

} 
 #sconper{
top: 50px;
left: 30px;
position:absolute;
font-size:12px;
 }
 #scompname{
	top: 70px;
left: 30px;
position:absolute;
font-size:12px;
}
<!--#sflat{
top: 95px;
left: -10px;
position:absolute;
font-size:15px;
 }

 #sstreet{
	top: 110px;
left: -10px;
position:absolute;
font-size:15px;
 }
 #sarea{
	top: 75px;
left: -10px;
position:absolute;
font-size:15px;
 }
  #scity{
	top: 130px;
left: -10px;
position:absolute;
font-size:15px;
 }-->
  #sbuild{
top: 70px;
left: 30px;
position:absolute;
font-size:12px;
 }

 <!--#szip{
	top: 155px;
left: -10px;
position:absolute;
font-size:15px;
 }-->
#scountry{
	top:110px;
left: 30px;
position:absolute;
font-size:12px;
 } 

#sphone {
top: 130px;
left: 30px;
position:absolute;
font-size:12px;
}


#ccontper{
top: 50px;
left: 400px; /*   distance from right */
 text-align: left;
position:absolute;
font-size:12px;
}
#cconsphone{
top: 130px;
left: 400px; /*   distance from right */
text-align: left;
position:absolute;
font-size:12px;
}
#ccompname{
top: 70px;
left: 400px; /*   distance from right */
text-align: left;
position:absolute;
font-size:12px;
}
<!--#cflat{
top: 95px;
left: 370px; /*   distance from right */
text-align: left;
position:absolute;
font-size:15px;
}-->
#cbuilding{
top: 70px;
left: 400px;/*   distance from right */
text-align: left;
position:absolute;
font-size:12px;
}
<!--#cstreet{
	top: 135px;
left: 400px; /*   distance from right */
text-align: left;
position:absolute;
font-size:15px;
}
#carea{
	top: 115px;
left: 400px; /*   distance from right */
text-align: left;
position:absolute;
font-size:15px;
}-->
<!--#ccity{
	top: 135px;
right: 210px; /*   distance from right */
left:400px;
position:absolute;
font-size:15px;
}
#czip{
	top: 160px;
right: 200px; /*   distance from right */
left: 370px;
position:absolute;
font-size:15px;
}-->
#ccountry{
	top: 110px;
right: 140px; /*   distance from right */
left: 400px;
position:absolute;
font-size:12px;
}

#mode{
top: 170px;
right: -20px; /*   distance from right */
position:absolute;
font-size:12px;
}
#sinst{
top: 170px;
right: -10px; /*   distance from right */
position:absolute;
font-size:15px;
}
#pieces {
top: 240px;
right: 40px; /*   distance from right */
position:absolute;
font-size:15px;
}
#weight{
top: 240px;
right: -50px; /*   distance from right */
position:absolute;
font-size: 30px;
font-size:15px;
}
#amt{
top: 255px;
left: 300; /*   distance from right */
position:absolute;
font-size:15px;
}
#pickup{
top: 255px;
left: -10px; /*   distance from right */
position:absolute;
font-size:15px;
}

#descr{
top: 200px;
left: -10px; /*   distance from right */
position:absolute;
font-size:15px;
}

#query{
top: 200px;
left: -10px; /*   distance from right */
position:absolute;
font-size:15px;
}


 </style>

</head>
<body>

<?php include 'dat.php';?>
<div id="mainDiv"> <!--  invisible space -->
<!--<div id="cqm" class="customFont"></div>
<div id="awbno" class="customFont"><?php echo $awbno; ?></div>-->
<div id="accno" class="customFont"><?php echo $accno; ?></div>
<div id="date" class="customFont"><?php echo $date; ?></div>
<div id="sconper" class="customFont"><?php echo $sconper . "-" . $scompname; ?></div>
<!--<div id="scompname" class="customFont"><?php echo $scompname; ?></div>-->
<div id="sbuild" class="customFont"><?php echo $str1 . " " . $str2 . "," . " " . $str3 . "<br/>" . $str4; ?></div>
<!--<div id="scity" class="customFont"><?php echo $scity; ?></div>-->
<!--<div id="szip" class="customFont"><?php echo $szip; ?></div>-->
<div id="scountry" class="customFont"><?php echo $str11 . "," . $str5 . " " . $str6; ?></div>
<div id="sphone" class="customFont"><?php echo $sphone; ?></div>
<div id="ccontper" class="customFont"><?php echo $ccontper ."-". $ccompname; ?></div>
<!--<div id="ccompname" class="customFont"><?php echo $ccompname; ?></div>-->
<!--div id="cflat" class="customFont"><?php echo $cflat; ?></div>-->
<div id="cbuilding" class="customFont"><?php echo $str7 . "," . $str8 . "," . $str9 . "<br/>" . $str10; ?></div>
<!--<div id="cstreet" class="customFont"><?php echo $cstreet; ?></div>
<div id="carea" class="customFont"><?php echo $carea; ?></div>-->
<!--<div id="ccity" class="customFont"><?php echo $ccity; ?></div>-->
<!--<div id="czip" class="customFont"><?php echo $czip; ?></div>-->
<div id="ccountry" class="customFont"><?php echo $str51 . " " . $str46 . " " . $str47; ?></div>
<div id="cconsphone" class="customFont"><?php echo $consphone; ?></div>
<div id="mode" class="customFont"><?php echo $str48 . "/" . $str49; ?></div>
<!--<div id="sinst" class="customFont"><?php echo $sinst; ?>-->
<div id="pieces" class="customFont"><?php echo $pieces; ?></div>
<div id="weight" class="customFont"><?php echo $weight; ?></div>
<div id="amt" class="customFont"><?php echo $amt . "AED"; ?></div>
<div id="pickup" class="customFont"><?php echo $pickup; ?></div>
<div id="descr" class="customFont"><?php echo $descr; ?></div>
<!--<img id="or_mto" src="logo.jpg" /> <!---- sample for logo  ---->
</div>

</body>
</html>