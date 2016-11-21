
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title></title>
<!--<link href="style.css" rel="stylesheet" type="text/css" />-->
<style>
body {
	font: normal .8em/1.5em Arial, Helvetica, sans-serif;
	background: #ebebeb;
	width:910px;
	margin: 20px auto;
	color: #666;
}

a {
	color: #333;
}
#nav {
	margin: 0;
	padding: 5px 0px 0;
	background: #7d7d7d url(img/gradient.png) repeat-x 0 -110px;
	line-height: 100%;

	border-radius: 2em;
	-webkit-border-radius: 2em;
	-moz-border-radius: 2em;

	-webkit-box-shadow: 0 1px 3px rgba(0,0,0, .4);
	-moz-box-shadow: 0 1px 3px rgba(0,0,0, .4);
}
#nav li {
	margin: 0 5px;
	padding: 0 0 8px;
	float: left;
	position: relative;
	list-style: none;
}


/* main level link */
#nav a {
	font-weight: bold;
	color: #e7e5e5;
	text-decoration: none;
	display: block;
	padding:  8px 20px;
	margin: 0;

	-webkit-border-radius: 1.6em;
	-moz-border-radius: 1.6em;
	
	text-shadow: 0 1px 1px rgba(0,0,0, .3);
}
#nav a:hover {
	background: #000;
	color: #fff;
}

/* main level link hover */
#nav .current a, #nav li:hover > a {
	background: #DCDCDC url(img/gradient.png) repeat-x 0 -40px;
	color: #696969;
	border-top: solid 1px #f8f8f8;

	-webkit-box-shadow: 0 1px 1px rgba(0,0,0, .2);
	-moz-box-shadow: 0 1px 1px rgba(0,0,0, .2);
	box-shadow: 0 1px 1px rgba(0,0,0, .2);

	text-shadow: 0 1px 0 rgba(255,255,255, 1);
}

/* sub levels link hover */
#nav ul li:hover a, #nav li:hover li a {
	background: none;
	border: none;
	color: #666;

	-webkit-box-shadow: none;
	-moz-box-shadow: none;
}
#nav ul a:hover {
	background: #0078ff url(img/gradient.png) repeat-x 0 -100px !important;
	color: #fff !important;

	-webkit-border-radius: 0;
	-moz-border-radius: 0;

	text-shadow: 0 1px 1px rgba(0,0,0, .1);
}

/* dropdown */
#nav li:hover > ul {
	display: block;
}

/* level 2 list */
#nav ul {
	display: none;

	margin: 0;
	padding: 0;
	width: 185px;
	position: absolute;
	top: 35px;
	left: 0;
	background: #ddd url(img/gradient.png) repeat-x 0 0;
	border: solid 1px #b4b4b4;

	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;

	-webkit-box-shadow: 0 1px 3px rgba(0,0,0, .3);
	-moz-box-shadow: 0 1px 3px rgba(0,0,0, .3);
	box-shadow: 0 1px 3px rgba(0,0,0, .3);
}
#nav ul li {
	float: none;
	margin: 0;
	padding: 0;
}

#nav ul a {
	font-weight: normal;
	text-shadow: 0 1px 0 #fff;
}

/* level 3+ list */
#nav ul ul {
	left: 181px;
	top: -3px;
}

/* rounded corners of first and last link */
#nav ul li:first-child > a {
	-webkit-border-top-left-radius: 9px;
	-moz-border-radius-topleft: 9px;

	-webkit-border-top-right-radius: 9px;
	-moz-border-radius-topright: 9px;
}
#nav ul li:last-child > a {
	-webkit-border-bottom-left-radius: 9px;
	-moz-border-radius-bottomleft: 9px;

	-webkit-border-bottom-right-radius: 9px;
	-moz-border-radius-bottomright: 9px;
}

/* clearfix */
#nav:after {
	content: ".";
	display: block;
	clear: both;
	visibility: hidden;
	line-height: 0;
	height: 0;
}
#nav {
	display: inline-block;
} 
html[xmlns] #nav {
	display: block;
}
 
* html #nav {
	height: 1%;
}
</style>
</head>

<body>
<ul id="nav">
	<li class="current"><a href="index.php">Home</a></li>
		<li><a href="aboutus.php">Aboutus</a></li>
	<li><a href="">Manage Users</a>
		<ul>
			<li><a href="signup.php">SignUp</a>
				<!--<ul>
					<li><a href="signup.php"></a>Admin</li>
					<li><a href="signup.php"></a>User</li>
					<li><a href="signup.php"></a>Shipper</li>
					<li><a href="signup.php"></a>Consginee</li>
				</ul>-->
			</li>
			<li><a href="index.php">SignIn</a>
				<!--<ul>
					<li><a href="dummyl.php"></a>Admin</li>
					<li><a href="dummyl.php"></a>User</li>
					<li><a href="dummyl.php"></a>Consignee</li>
					<li><a href="dummyl.php"></a>Shipper</li>
				</ul>-->
			</li>
		
		</ul>
	</li>

	<li><a href="awbill.php">Manage Awbill</a>
		<ul>
			<li><a href="senders.php">Manage Shipper</a>
				<ul>
					<li><a href="#">Manage City</a></li>
					<li><a href="cons.php">Manage Country</a>
						<ul>
							<li><a href="#">Sub-Level Item</a></li>
							<li><a href="#">Sub-Level Item</a></li>
							<li><a href="#">Sub-Level Item</a></li>
						</ul>
					</li>
					
					
				</ul>
			</li>
			<li><a href="cons.php">Manage Consignee</a></li>
		
				<ul>
					<li><a href="#">Manage Express centre</a></li>
					
				</ul>
			</li>
		</ul>
	</li>
<li><a href="fetc.php">Print AWBill</a>

<ul>
					<li><a href="view.php">View AirwayBill</a></li>
						<li><a href="edit.php">Edit-Delete AirwayBill</a></li>
					
				</ul>
	</li>
	<li><a href="contactus.php">Contact Us</a></li>
	<li><a href="Logout.php">Logout</a></li>

	<li><a href="manual.pdf">Manual</a></li>
</ul>
<p><a href=""></a> <em></em> <a href=""></a></p>
</body>
</html>
