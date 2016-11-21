<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "leopards");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$ccontper = mysqli_real_escape_string($link, $_POST['ccontper']);
$compname = mysqli_real_escape_string($link, $_POST['compname']);
$consphone = mysqli_real_escape_string($link, $_POST['consphone']);
$flat = mysqli_real_escape_string($link, $_POST['flat']);
$building = mysqli_real_escape_string($link, $_POST['building']);
$street = mysqli_real_escape_string($link, $_POST['street']);
$area = mysqli_real_escape_string($link, $_POST['area']);
$city = mysqli_real_escape_string($link, $_POST['city']);


//$mode = mysqli_real_escape_string($link, $_POST['mode']);
//$sinst = mysqli_real_escape_string($link, $_POST['sinst']);
//$pieces = mysqli_real_escape_string($link, $_POST['pieces']);
//$weight = mysqli_real_escape_string($link, $_POST['weight']);
//$amt = mysqli_real_escape_string($link, $_POST['amt']);
//$pickup = mysqli_real_escape_string($link, $_POST['pickup']);
//$descr = mysqli_real_escape_string($link, $_POST['descr']);//

 

// attempt insert query execution
$sql = "INSERT INTO consignee (ccontper, compname,consphone, flat, building, street, area, city) VALUES ('$ccontper', '$compname', '$consphone', '$flat', '$building', '$street', '$area', '$city')";


$str7="$flat";
$str8="$building";
$str9="$street";
$str10="$area";

$str45="$city";




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
@font-face { font-family: kitfont; src: url('1979 Dot Matrix Regular.TTF'); } 

.customFont { /*  <div class="customFont" /> */
font-style: kitfont;
font-size:10;
}
#mainDiv {
height: 324px; /* height of receipt 4.5 inches*/
width: 800px;  /* weight of receipt 8.6 inches*/
position:relative; /* positioned relative to its normal position */
}
<!--#cqm { /*  <img id="cqm" /> */
top: 10px; /* top is distance from top (x axis)*/
left: 105px; /* left is distance from left (y axis)*/
position:absolute; /* position absolute based on "top" and "left"    parameters x and y  */
}-->
#ccontper{
top: 50px;
left: 420px; /*   distance from right */
 text-align: left;
position:absolute;
font-size:12px;
}
#consphone{
	top: 150px;
right: 210px; /*   distance from right */
left:420px;
position:absolute;
font-size:12px;
}
#compname{
top: 70px;
left: 420px; /*   distance from right */
text-align: left;
position:absolute;
font-size:12px;
}
#flat{
top: 95px;
left: 370px; /*   distance from right */
text-align: left;
position:absolute;
font-size:12px;
}
#building{
top: 90px;
left: 420px;/*   distance from right */
text-align: left;
position:absolute;
font-size:12px;
}
#street{
	top: 135px;
left: 420px; /*   distance from right */
text-align: left;
position:absolute;
font-size:12px;
}
#area{
	top: 115px;
left: 420px; /*   distance from right */
text-align: left;
position:absolute;
font-size:12px;
}
#city{
	top: 135px;
right: 170px; /*   distance from right */
left:420px;
position:absolute;
font-size:12px;
}
#zip{
	top: 160px;
right: 200px; /*   distance from right */
left: 370px;
position:absolute;
font-size:12px;
}
#country{
	top: 160px;
right: 160px; /*   distance from right */
left: 370px;
position:absolute;
font-size:12px;
}

 </style>
<script type="text/javascript">
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
</head>
<body>

	
<div id="mainDiv"> <!--  invisible space -->
<!--<div id="cqm" class="customFont"></div>-->


<!--<div id="ccontper" class="customFont"><?php echo $ccontper; ?></div>-->
<div id="compname" class="customFont"><?php echo $compname; ?></div>
<div id="consphone" class="customFont"><?php echo $consphone; ?></div>
<!--<div id="flat" class="customFont"><?php echo $flat; ?></div>-->
<div id="building" class="customFont"><?php echo $str7 . "," . $str8 . "," . $str9; ?></div>
<!--<div id="street" class="customFont"><?php echo $street; ?></div>-->
<div id="area" class="customFont"><?php echo $area; ?></div>
<div id="city" class="customFont"><?php echo $str45; ?></div>
<!--<div id="zip" class="customFont"><?php echo $zip; ?></div>
<div id="country" class="customFont"><?php echo $country; ?></div>-->



<!--<img id="or_mto" src="logo.jpg" /> <!---- sample for logo  ---->
</div>

</body>
</html>