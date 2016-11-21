<?php
if(isset($_POST['search']))
{
	$valueToSearch = $_POST['valueToSearch'];
	//$query = "SELECT * FROM awbill WHERE CONCAT(awbno, date, sconper, scompname, sflat, sbuild, sstreet, sarea, scity, szip, scountry, sphone, ccontper, consphone, ccompname, cflat, cbuilding, cstreet, carea, ccity, czip, ccountry, mode, sinst, pieces, weight, amt, pickup, descr) LIKE '%".$valueToSearch."%'";
	$query = "SELECT * FROM awbill WHERE CONCAT(awbno) LIKE '%".$valueToSearch."%'";
$search_result = filterTable($query);	
	}
else
{
$query = "SELECT * FROM awbill";
$search_result = filterTable($query);
}
function filterTable($query)
{
$connect = mysqli_connect("localhost", "root", "", "leopards");
$filter_Result = mysqli_query($connect, $query);
return $filter_Result;
}

?>
<!DOCTYPE html>
<html>
<head>
<style>
	border: 1px solid black;table,tr,th,td{
	font-size: 12px;
}
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
font-size:15px;
}
    #awbno {
top: 80px;
left: -10px;

} 
 #sconper{
top: 50px;
left: -10px;
position:absolute;
font-size:20px;
 }
 #scompname{
	top: 70px;
left: -10px;
position:absolute;
font-size:20px;
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
top: 90px;
left: -10px;
position:absolute;
font-size:20px;
 }

 <!--#szip{
	top: 155px;
left: -10px;
position:absolute;
font-size:15px;
 }-->
 #scountry{
	 top: 115px;
left: -10px;
position:absolute;
font-size:20px;
 } 

#sphone {
top: 140px;
left: -10px;
position:absolute;
font-size:30px;
}


#ccontper{
top: 50px;
left: 370px; /*   distance from right */
 text-align: left;
position:absolute;
font-size:20px;
}
#cconsphone{
top: 140px;
left: 370px; /*   distance from right */
text-align: left;
position:absolute;
font-size:30px;
}
#ccompname{
top: 70px;
left: 370px; /*   distance from right */
text-align: left;
position:absolute;
font-size:20px;
}
<!--#cflat{
top: 95px;
left: 320px; /*   distance from right */
text-align: left;
position:absolute;
font-size:15px;
}-->
#cbuilding{
top: 90px;
left: 370px;/*   distance from right */
text-align: left;
position:absolute;
font-size:20px;
}
<!--#cstreet{
	top: 125px;
left: 320px; /*   distance from right */
text-align: left;
position:absolute;
font-size:15px;
}
#carea{
	top: 140px;
left: 320px; /*   distance from right */
text-align: left;
position:absolute;
font-size:15px;
}
<!--#ccity{
	top: 155px;
right: 210px; /*   distance from right */
left: 320px;
position:absolute;
font-size:15px;
}
#czip{
	top: 170px;
right: 210px; /*   distance from right */
left: 320px;
position:absolute;
font-size:15px;
}-->
#ccountry{
	top: 115px;
right: 135px; /*   distance from right */

position:absolute;
font-size:20px;
}

#mode{
top: 170px;
right: -20px; /*   distance from right */
position:absolute;
font-size:15px;
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
/*
	 CSS-Tricks Example
	 by Chris Coyier
	 http://css-tricks.com
*/
.form-style-6{
	max-width: 350px;
	font-family: "arial", "Lucida Grande", sans-serif;
		background: rgba() url(images/yellow.jpg) repeat-x left top;
		    padding: 20px 0px 0px 500px;
			margin-right: 800px;
		
			    
}
.form-style-6 label{
	display:block;
	margin-bottom: 10px;
}

.form-style-6 input:checked {
    height: 20px;
    width: 20px;
}

.form-style-6 label > span{
	float: left;
	width: 100px;
	color: #130108;
	font-weight: bold;
	font-size: 12px;
	text-shadow: 1px 1px 1px #fff;
}
.form-style-6 img{
margin-top: -190px;
}
.form-style-6 fieldset{
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
.form-style-6 fieldset legend{
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
.form-style-6 textarea{
	width:250px;
	height:100px;
}
.form-style-6 input[type=text],
.form-style-6 input[type=date],
.form-style-6 input[type=datetime],
.form-style-6 input[type=number],
.form-style-6 input[type=search],
.form-style-6 input[type=time],
.form-style-6 input[type=url],
.form-style-6 input[type=email],
.form-style-6 select, 
.form-style-6 textarea{
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
.form-style-6  input[type=submit],
.form-style-6  input[type=button]{
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
.form-style-6 .required{
	color:red;
	font-weight:normal;
}



#rig{float:right;}
* { margin: 0; padding: 0; }
body { font: 14px/1.4 Georgia, serif; }
#page-wrap { width: 800px; margin: 0 auto; background:white;margin-top:0px;}

textarea { border: 0;float: left; font: 20px arial, font-weight: bold; Serif; overflow: hidden;width:50%;
 }
table { border-collapse: collapse; float: right; }
table td, table th { border: 1px solid black; padding: 5px; }
#header1 { height: 35px; width: 40%; margin: 20px 0; background: black; text-align: center; color: #ecce3b; font: bold 15px Helvetica, Sans-Serif; text-decoration: uppercase; letter-spacing: 10px; padding: 8px 0px; }
#header { height: 10px; width: 100%; margin: 5px 0; background: #ecce3b; text-align: center; color: solid black; font: bold 15px Helvetica, Sans-Serif; text-decoration: uppercase; letter-spacing: 10px; padding: 8px 0px; }

#address { width: 100px; height: 150px; float: left; }
#customer { overflow: hidden; }

#logo { text-align: left; float: right; position: relative; margin-top: -20px; border: 1px solid #fff; max-width: 400px; max-height: 400px; border-background:#ecce3b;}
#logo:hover, #logo.edit { border: 1px solid #000; margin-top: 0px; max-height: 125px; }
#logoctr { display: none; }
#logo:hover #logoctr, #logo.edit #logoctr { display: block; text-align: right; line-height: 25px; background: #eee; padding: 0 5px; }
#logohelp { text-align: left; display: none; font-style: italic; padding: 10px 5px;}
#logohelp input { margin-bottom: 5px; }
.edit #logohelp { display: block; }
.edit #save-logo, .edit #cancel-logo { display: inline; }
.edit #image, #save-logo, #cancel-logo, .edit #change-logo, .edit #delete-logo { display: none; }
#customer-title { font-size: 20px; float: left; font-family:george; border:2px solid #ecce3b ;background white; }
#cp {margin-top: 20px; background:};
#meta { margin-top: -100px; width: 150px; float: right; font-weight: bold; }
#meta td { text-align: right;  }
#meta td.meta-head { text-align: left; background:#ecce3b;font-size: 15px;font-weight:bold; }
#meta td textarea { font-family:george;width: 100%; height: 20px; text-align: right;font-size: 15px;font-weight:bold; }




#items { clear: both; width: 100%; margin: 30px 0 0 0; border: 1px solid black; }
#items th { background:#ecce3b ; }
#items textarea { width: 80px; height: 50px; border-radius: 2px; border: 1px solid #ecce3b; }
#items tr.item-row td { border: 0; vertical-align: top; }
#items td.description { width: 300px; }
#items td.item-name { width: 175px; }
#items td.description textarea, #items td.item-name textarea { width: 80%; font-family: george; font-size:15px; font-weight:bold;}
#items td.total-line { border-right: 0; text-align: right; }
#items td.total-value { border-left: 0; padding: 10px;border: 1px solid black; }
#items td.total-value textarea { height: 20px; background: none; }
#items td.balance { background: #eee; }
#items td.blank { border: 0; }

#terms { text-align: center; margin: 20px 0 0 0; }
#terms h5 { text-transform: uppercase; font: 13px Helvetica, Sans-Serif; letter-spacing: 10px; border-bottom: 1px solid black; padding: 0 0 8px 0; margin: 0 0 8px 0;font-weight;font-color:#ecce3b; }
#terms textarea { width: 100%; text-align: center;}

textarea:hover, textarea:focus, #items td.total-value textarea:hover, #items td.total-value textarea:focus, .delete:hover { background-color:#EEFF88; }

.delete-wpr { position: relative; }
.delete { display: block; color: #000; text-decoration: none; position: absolute; background: #EEEEEE; font-weight: bold; padding: 0px 3px; border: 1px solid; top: -6px; left: -22px; font-family: Verdana; font-size: 12px; }
</style>
<script type="text/javascript">
function myFunction() {
    window.print();
}
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
function print_today() {
  // ***********************************************
  // AUTHOR: WWW.CGISCRIPT.NET, LLC
  // URL: http://www.cgiscript.net
  // Use the script, just leave this message intact.
  // Download your FREE CGI/Perl Scripts today!
  // ( http://www.cgiscript.net/scripts.htm )
  // ***********************************************
  var now = new Date();
  var months = new Array('January','February','March','April','May','June','July','August','September','October','November','December');
  var date = ((now.getDate()<10) ? "0" : "")+ now.getDate();
  function fourdigits(number) {
    return (number < 1000) ? number + 1900 : number;
  }
  var today =  months[now.getMonth()] + " " + date + ", " + (fourdigits(now.getYear()));
  return today;
}

// from http://www.mediacollege.com/internet/javascript/number/round.html
function roundNumber(number,decimals) {
  var newString;// The new rounded number
  decimals = Number(decimals);
  if (decimals < 1) {
    newString = (Math.round(number)).toString();
  } else {
    var numString = number.toString();
    if (numString.lastIndexOf(".") == -1) {// If there is no decimal point
      numString += ".";// give it one at the end
    }
    var cutoff = numString.lastIndexOf(".") + decimals;// The point at which to truncate the number
    var d1 = Number(numString.substring(cutoff,cutoff+1));// The value of the last decimal place that we'll end up with
    var d2 = Number(numString.substring(cutoff+1,cutoff+2));// The next decimal, after the last one we want
    if (d2 >= 5) {// Do we need to round up at all? If not, the string will just be truncated
      if (d1 == 9 && cutoff > 0) {// If the last digit is 9, find a new cutoff point
        while (cutoff > 0 && (d1 == 9 || isNaN(d1))) {
          if (d1 != ".") {
            cutoff -= 1;
            d1 = Number(numString.substring(cutoff,cutoff+1));
          } else {
            cutoff -= 1;
          }
        }
      }
      d1 += 1;
    } 
    if (d1 == 10) {
      numString = numString.substring(0, numString.lastIndexOf("."));
      var roundedNum = Number(numString) + 1;
      newString = roundedNum.toString() + '.';
    } else {
      newString = numString.substring(0,cutoff) + d1.toString();
    }
  }
  if (newString.lastIndexOf(".") == -1) {// Do this again, to the new string
    newString += ".";
  }
  var decs = (newString.substring(newString.lastIndexOf(".")+1)).length;
  for(var i=0;i<decimals-decs;i++) newString += "0";
  //var newNumber = Number(newString);// make it a number if you like
  return newString; // Output the result to the form field (change for your purposes)
}

function update_total() {
  var total = 0;
  $('.price').each(function(i){
    price = $(this).html().replace("$","");
    if (!isNaN(price)) total += Number(price);
  });

  total = roundNumber(total,2);

  $('#subtotal').html("$"+total);
  $('#total').html("$"+total);
  
  update_balance();
}

function update_balance() {
  var due = $("#total").html().replace("$","") - $("#paid").val().replace("$","");
  due = roundNumber(due,2);
  
  $('.due').html("$"+due);
}

function update_price() {
  var row = $(this).parents('.item-row');
  var price = row.find('.cost').val().replace("$","") * row.find('.qty').val();
  price = roundNumber(price,2);
  isNaN(price) ? row.find('.price').html("N/A") : row.find('.price').html("$"+price);
  
  update_total();
}

function bind() {
  $(".cost").blur(update_price);
  $(".qty").blur(update_price);
}

$(document).ready(function() {

  $('input').click(function(){
    $(this).select();
  });

  $("#paid").blur(update_balance);
   
  $("#addrow").click(function(){
    $(".item-row:last").after('<tr class="item-row"><td class="item-name"><div class="delete-wpr"><textarea>Item Name</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td><td class="description"><textarea>Description</textarea></td><td><textarea class="cost">$0</textarea></td><td><textarea class="qty">0</textarea></td><td><span class="price">$0</span></td></tr>');
    if ($(".delete").length > 0) $(".delete").show();
    bind();
  });
  
  bind();
  
  $(".delete").live('click',function(){
    $(this).parents('.item-row').remove();
    update_total();
    if ($(".delete").length < 2) $(".delete").hide();
  });
  
  $("#cancel-logo").click(function(){
    $("#logo").removeClass('edit');
  });
  $("#delete-logo").click(function(){
    $("#logo").remove();
  });
  $("#change-logo").click(function(){
    $("#logo").addClass('edit');
    $("#imageloc").val($("#image").attr('src'));
    $("#image").select();
  });
  $("#save-logo").click(function(){
    $("#image").attr('src',$("#imageloc").val());
    $("#logo").removeClass('edit');
  });
  
  $("#date").val(print_today());
  
});
</script>
</head>
<body>
<?php include 'scroll.php';?>
<form action="fetc.php" method="post">

<div class="form-style-6">

<fieldset><input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
<input type="Submit" name="search" value="Enter the AWBILL Number wish to print"><br><br>



</fieldset>

</div>

<!--
<table>
<tr>
<th>AWB No</th>
<th>Date</th>
<th>Shipper C.Person</th>
<th>Company Name</th>
<th>Shipper phone</th>
<th>Shipper Flat</th>
<th>Shipper Street</th>
<th>Shipper Building</th>
<th>Shipper city</th>
<th>Shipper Country</th>
<th>Shipper C.Person</th>
<th>Company Name</th>
<th>Consignee phone</th>
<th>Consingee Flat</th>
<th>Consingee Street</th>
<th>Consignee Building</th>
<th>Consignee city</th>
<th>Consingee Country</th>
<th>Mode</th>
<th>Special Instructions</th>
<th>Weight</th>
<th>Amount</th>
<th>Description</th>-->
<!--<button onclick="myFunction()">Print this page</button>-->

</tr>
<?php while($row = mysqli_fetch_array($search_result)):?>
<!--
<tr>
<td><?php echo $row['awbno'];?></td>
<td><?php echo $row['date'];?></td>
<td><?php echo $row['sconper'];?></td>
<td><?php echo $row['scompname'];?></td>
<td><?php echo $row['sphone'];?></td>
<td><?php echo $row['sflat'];?></td>
<td><?php echo $row['sstreet'];?></td>
<td><?php echo $row['sbuild'];?></td>
<td><?php echo $row['scity'];?></td>
<td><?php echo $row['scountry'];?></td>
<td><?php echo $row['ccompname'];?></td>
<td><?php echo $row['ccontper'];?></td>
<td><?php echo $row['consphone'];?></td>
<td><?php echo $row['cflat'];?></td>
<td><?php echo $row['cstreet'];?></td>
<td><?php echo $row['carea'];?></td>
<td><?php echo $row['ccity'];?></td>
<td><?php echo $row['ccountry'];?></td>
<td><?php echo $row['mode'];?></td>
<td><?php echo $row['sinst'];?></td>
<td><?php echo $row['amt'];?></td>
<td><?php echo $row['weight'];?></td>
<td><?php echo $row['pickup'];?></td>
</tr>-->
<?php
$awbno = $row['awbno'];
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
$str1="$sflat";
$str2="$sbuild";
$str3="$sstreet";
$str33="$scity";
$str4="$sarea";
$str5="$scountry";
$str6="$szip";

$str7="$cflat";
$str8="$cbuilding";
$str9="$cstreet";
$str10="$carea";

$str45="$ccity";
$str46="$czip";
$str47="$ccountry";

$str48="$mode";
$str49="$sinst";
$str50="$amt";
?>

<?php endwhile;?>
</table>
</form>

<div id="page-wrap">

<input id="header1" type="button" onclick="printDiv('printableArea')" value="Print a Invoice!" />
		<textarea id="header">LEOPARDS WORLDWIDE EXPRESS </textarea>
			<div id="identity">
			
		<div id="meta"><th> SENDER</th></div>
            <textarea id="customer-title"><?php echo $sconper . "\n" .$scompname . " " . $sbuild . " " . $sstreet . " " . $sarea . " " . $sflat . " " . $scity . " " . $scountry; ?>
</textarea>

            <div id="logo">

              <div id="logoctr">
                <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a
                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
              </div>

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
              <img id="image" src="logo.jpg" alt="logo" width="70" height="70" />
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">
	
	<div id="meta"><th>CONSIGNEE</th></div>
            <textarea id="customer-title"><?php echo $ccompname . "\n" . $ccontper . "," . $consphone . "," . $sbuild . ',' . $sstreet . "," . $sarea . "," . $scity; ?></textarea>

            <table id="meta">
                <tr>
                    <td class="meta-head">AWB No</td>
                    <td><textarea><?php echo $awbno; ?></textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">DATE</td>
                    <td><textarea><?php echo $date; ?></textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">AMOUNT</td>
                    <td><textarea><?php echo $amt; ?></textarea></td>
                </tr>

            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>MODE</th>
		      <th>SPECIAL INSTRUCTIONS</th>
		      <th>WEIGHT</th>
		      <th>PIECES</th>
		      <th>PICKUP</th>
			  <th>DESCRIPTION</th>
		  </tr>
		 		  <tr class="item-row">
		      <td class="item-name"><textarea><?php echo $mode; ?></textarea></td>
		      <td class="description"><textarea><?php echo $sinst; ?></textarea></td>
		      <td class="description"><textarea><?php echo $weight; ?></textarea></td>
		      <td class="description"><textarea><?php echo $pieces; ?></textarea></td>
		      <td class="description"><textarea><?php echo $pickup; ?></textarea></td>
		      <td class="description"><textarea><?php echo $descr; ?></textarea></td></td>
		  </tr>	
		
		</table>
		
		<div id="terms">
				  <textarea>CONDITIONS: We hereby acknowledge all the terms and conditions contained on the reverse side as the terms and conditions of this contract conditions</textarea>
		</div>
	
	</div>
	<br>
	<br>
	<br>
	<br>
		<br>
	<br>
	<br>
	<br>
			<br>
	<br>
	<br>
	<br>
	
	
<div id="printableArea">
<div id="mainDiv"> <!--  invisible space -->
<!--<div id="cqm" class="customFont"></div>-->
<div id="awbno" class="customFont"><?php echo $awbno; ?></div>
<div id="date" class="customFont"><?php echo $date; ?></div>
<div id="sconper" class="customFont"><?php echo $sconper; ?></div>
<div id="scompname" class="customFont"><?php echo $scompname; ?></div>
<div id="sbuild" class="customFont"><?php echo $str1 . " " . $str2 . "," . " " . $str3; ?></div>
<!--<div id="scity" class="customFont"><?php echo $scity; ?></div>-->
<!--<div id="szip" class="customFont"><?php echo $szip; ?></div>-->
<div id="scountry" class="customFont"><?php echo $str4 . "," . "" . $str33 . "," . $str5 . "-" . $str6; ?></div>
<div id="sphone" class="customFont"><?php echo $sphone; ?></div>
<div id="ccontper" class="customFont"><?php echo $ccontper; ?></div>
<div id="ccompname" class="customFont"><?php echo $ccompname; ?></div>
<!--div id="cflat" class="customFont"><?php echo $cflat; ?></div>-->
<div id="cbuilding" class="customFont"><?php echo $str7 . "," . $str8 . "," . $str9; ?></div>
<!--<div id="cstreet" class="customFont"><?php echo $cstreet; ?></div>
<div id="carea" class="customFont"><?php echo $carea; ?></div>
<div id="ccity" class="customFont"><?php echo $ccity; ?></div>
<div id="czip" class="customFont"><?php echo $czip; ?></div>-->
<div id="ccountry" class="customFont"><?php echo $str10 . "," . $str45 . "," . $str47 . "-" . $str46; ?></div>
<div id="cconsphone" class="customFont"><?php echo $consphone; ?></div>
<div id="mode" class="customFont"><?php echo $str48 . "/" . $str49; ?></div>
<!--<div id="sinst" class="customFont"><?php echo $sinst; ?>-->
<div id="pieces" class="customFont"><?php echo $pieces; ?></div>
<div id="weight" class="customFont"><?php echo $weight; ?></div>
<div id="amt" class="customFont"><?php echo $amt; ?></div>
<div id="pickup" class="customFont"><?php echo $pickup; ?></div>
<div id="descr" class="customFont"><?php echo $descr; ?></div>
</div>

	
</body>
</html>