<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>View Records</title>
<style>

table {
    margin: 0px;
	background: #ecce3b;

}

th {
    font-family: Arial, Helvetica, sans-serif;
    font-size: .6em;
    background: #666;
	font-weight:bold;
    color: #FFF;
    padding: 2px 6px;
    border-collapse: separate;
    border: 1px solid black #000;
}

td {
    font-family: Arial, Helvetica, sans-serif;
    font-size: .7em;
    border: 1px solid black;
	color: black;
}
</style>
</head>

<body>

<?php include 'scroll.php';?>

<?php

/*

VIEW.PHP

Displays all data from 'players' table

*/



// connect to the database

include('connect-db.php');



// get results from database

$result = mysql_query("SELECT * FROM awbill")

or die(mysql_error());



// display data in table

echo "<p><b>View All</b> | <a href='view-paginated.php?page=1'>View Paginated</a></p>";



echo "<table border='1' cellpadding='10'>";

echo "<tr> 
<th>AWB NO</th>
 <th>DATE</th> 
<th>SENDER PERSON</th>
 <th>COMPANY NAME</th> 
 <th>SHIPPER FLAT</th>
  <th>SHIPPER BUILDING</th> 
 <th>SHIPPER STREET</th>
  <th>SHIPPER AREA</th> 
 <th>SHIPPER CITY</th>
  <th>ZIPCODE</th> 
 <th>SHIPPER COUNTRY</th>
  <th>SHIPPER PHONE</th> 
 <th>CONSIGNEE PERSON</th>
  <th>CONSIGNEE PHONE</th> 
 <th>COMPANY</th>
  <th>CONSIGNEE FLAT</th> 
 <th>BUILDING</th>
  <th>STREET</th> 
 <th>AREA</th>
  <th>CITY</th> 
 <th>ZIP</th>
  <th>COUNTRY</th> 
 <th>MODE</th>
 
  <th>SPECIAL INSTRUCTIONS</th>
  <th>PIECES</th> 
 <th>WEIGHT</th>
  <th>AMOUNT</th> 
 <th>PICKUP</th>
  <th>DESCRIPTION</th>
 </tr>";



// loop through results of database query, displaying them in the table

while($row = mysql_fetch_array( $result )) {



// echo out the contents of each row into a table

echo "<tr>";

echo '<td>' . $row['awbno'] . '</td>';
echo '<td>' . $row['date'] . '</td>';
echo '<td>' . $row['sconper'] . '</td>';
echo '<td>' . $row['scompname'] . '</td>';
echo '<td>' . $row['sflat'] . '</td>';
echo '<td>' . $row['sbuild'] . '</td>';
echo '<td>' . $row['sstreet'] . '</td>';
echo '<td>' . $row['sarea'] . '</td>';
echo '<td>' . $row['scity'] . '</td>';
echo '<td>' . $row['szip'] . '</td>';
echo '<td>' . $row['scountry'] . '</td>';
echo '<td>' . $row['sphone'] . '</td>';
echo '<td>' . $row['ccontper'] . '</td>';

echo '<td>' . $row['consphone'] . '</td>';
echo '<td>' . $row['ccompname'] . '</td>';
echo '<td>' . $row['cflat'] . '</td>';
echo '<td>' . $row['cbuilding'] . '</td>';
echo '<td>' . $row['cstreet'] . '</td>';
echo '<td>' . $row['carea'] . '</td>';
echo '<td>' . $row['ccity'] . '</td>';
echo '<td>' . $row['czip'] . '</td>';
echo '<td>' . $row['ccountry'] . '</td>';
echo '<td>' . $row['mode'] . '</td>';
echo '<td>' . $row['sinst'] . '</td>';
echo '<td>' . $row['pieces'] . '</td>';
echo '<td>' . $row['weight'] . '</td>';
echo '<td>' . $row['amt'] . '</td>';
echo '<td>' . $row['pickup'] . '</td>';
echo '<td>' . $row['descr'] . '</td>';



echo '<td><a href="edit.php?awbno=' . $row['awbno'] . '">Edit</a></td>';
echo '<td><a href="delete.php?awbno=' . $row['awbno'] . '">Delete</a></td>';

echo "</tr>";

}



// close table>

echo "</table>";

?>

<p><a href="new.php">Add a new record</a></p>



</body>

</html>