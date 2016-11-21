<html>
<head>
<style>
p::first-letter{
    color: #ff0000;
    font-size: large;
}
div.scrollmenu {
	
    background-color: #eee;
    overflow: hidden;
    white-space: nowrap;
	border-radius: 9px;
	max-width:60%;
	font-family: arial;
	font-size: 12px;
	text-shadow: 1px 1px 1px #fff;
	font-weight: bold;
	padding: 10px 0px 10px 270px;
	margin: 10px;
	 border: 2px solid #ecce3b;
	 background: gray;
	 margin-top:15px;
	 position: relative;

	 
}

div.scrollmenu a {
    display: inline-block;
    color: black;
    text-align: left;
    padding: 7px;
    text-decoration: none;
	background: #ecce3b;
	border-radius:10px;
}

div.scrollmenu a:hover {
    background-color: #bdb1b1;
	color: #130108;
}



</style>
<body>
</body>
</html>

<?php
echo '<div class="scrollmenu">   
	  <a href="aboutus.php"><p>About us</p></a>
  <a href="cons.php">Manage Consignee</a>
  <a href="sender.php">Manage Shipper</a>
    <a href="awbill.php">Manage AWBill</a> 
  <a href="fetc.php">PrintAwbill</a> 
  <a href="signup.php">Registration</a>
   <a href="contactus.php">Contact Us</a>
  <a href="Logout.php">Log Out</a>
     <a href="#friends">Settings</a>
</div>
';
?>