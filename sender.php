<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "leopards");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 
// Escape user inputs for security

$accno = mysqli_real_escape_string($link, $_POST['accno']);	
$sconper = mysqli_real_escape_string($link, $_POST['sconper']);
$scompname = mysqli_real_escape_string($link, $_POST['scompname']);
$sflat = mysqli_real_escape_string($link, $_POST['sflat']);
$sbuild = mysqli_real_escape_string($link, $_POST['sbuild']);
$sstreet = mysqli_real_escape_string($link, $_POST['sstreet']);
$sarea = mysqli_real_escape_string($link, $_POST['sarea']);
$scity = mysqli_real_escape_string($link, $_POST['scity']);

$sphone = mysqli_real_escape_string($link, $_POST['sphone']);







// attempt insert query execution
$sql = "INSERT INTO sender (sconper, accno, scompname, sflat, sbuild, sstreet, sarea, scity, sphone) VALUES ('$sconper', '$accno', '$scompname', '$sflat', '$sbuild', '$sstreet', '$sarea', '$scity', '$sphone')";
$str1="$sflat";
$str2="$sbuild";
$str3="$sstreet";
$str4="$sarea";
$str11="$scity";


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
<script type="text/javascript">
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
<style>
@font-face { font-family: kitfont; src: url('1979 Dot Matrix Regular.TTF'); } 

.customFont { /*  <div class="customFont" /> */
font-style: kitfont;
font-size:10;
}
#mainDiv {
height: 200px; /* height of receipt 4.5 inches*/
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
  #date {top: 20px;
left: -10px;
position:absolute;
font-size:12px;

}
  #accno {
top: 20px;
left: 200px;
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
font-size:15px;
}



 </style>

</head>
<body>

<div id="mainDiv"> <!--  invisible space -->
<!--<div id="cqm" class="customFont"></div>-->

<div id="sconper" class="customFont"><?php echo $scompname; ?></div>
<div id="accno" class="customFont"><?php echo $accno; ?></div>
<!--<div id="scompname" class="customFont"><?php echo $scompname; ?></div>-->
<div id="sbuild" class="customFont"><?php echo $str1 . " " . $str2 . "," . " " . $str3 . "<br/>" . $str4; ?></div>
<!--<div id="scity" class="customFont"><?php echo $scity; ?></div>-->
<!--<div id="szip" class="customFont"><?php echo $szip; ?></div>-->
<div id="scountry" class="customFont"><?php echo $str11; ?></div>
<div id="sphone" class="customFont"><?php echo $sphone; ?></div>

<!--<img id="or_mto" src="logo.jpg" /> <!---- sample for logo  ---->
</div>

</body>
</html>