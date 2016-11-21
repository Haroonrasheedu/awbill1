<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

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

VIEW-PAGINATED.PHP

Displays all data from 'players' table

This is a modified version of view.php that includes pagination

*/



// connect to the database

include('connect-db.php');



// number of results to show per page

$per_page = 3;



// figure out the total pages in the database

$result = mysql_query("SELECT * FROM awbill");

$total_results = mysql_num_rows($result);

$total_pages = ceil($total_results / $per_page);



// check if the 'page' variable is set in the URL (ex: view-paginated.php?page=1)

if (isset($_GET['page']) && is_numeric($_GET['page']))

{

$show_page = $_GET['page'];



// make sure the $show_page value is valid

if ($show_page > 0 && $show_page <= $total_pages)

{

$start = ($show_page -1) * $per_page;

$end = $start + $per_page;

}

else

{

// error - show first set of results

$start = 0;

$end = $per_page;

}

}

else

{

// if page isn't set, show first set of results

$start = 0;

$end = $per_page;

}



// display pagination



echo "<p><a href='view.php'>View All</a> | <b>View Page:</b> ";

for ($i = 1; $i <= $total_pages; $i++)

{

echo "<a href='view-paginated.php?page=$i'>$i</a> ";

}

echo "</p>";



// display data in table

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

for ($i = $start; $i < $end; $i++)

{

// make sure that PHP doesn't try to show results that don't exist

if ($i == $total_results) { break; }



// echo out the contents of each row into a table

echo "<tr>";
echo '<td>' . mysql_result($result, $i, 'awbno') . '</td>';
echo '<td>' . mysql_result($result, $i, 'date') . '</td>';
echo '<td>' . mysql_result($result, $i, 'sconper') . '</td>';
echo '<td>' . mysql_result($result, $i, 'scompname') . '</td>';
echo '<td>' . mysql_result($result, $i, 'sflat') . '</td>';
echo '<td>' . mysql_result($result, $i, 'sbuild') . '</td>';
echo '<td>' . mysql_result($result, $i, 'sstreet') . '</td>';
echo '<td>' . mysql_result($result, $i, 'sarea') . '</td>';
echo '<td>' . mysql_result($result, $i, 'scity') . '</td>';
echo '<td>' . mysql_result($result, $i, 'szip') . '</td>';
echo '<td>' . mysql_result($result, $i, 'scountry') . '</td>';
echo '<td>' . mysql_result($result, $i, 'sphone') . '</td>';
echo '<td>' . mysql_result($result, $i, 'ccontper') . '</td>';

echo '<td>' . mysql_result($result, $i, 'consphone') . '</td>';
echo '<td>' . mysql_result($result, $i, 'ccompname') . '</td>';
echo '<td>' . mysql_result($result, $i, 'cflat') . '</td>';
echo '<td>' . mysql_result($result, $i, 'cbuilding') . '</td>';
echo '<td>' . mysql_result($result, $i, 'cstreet') . '</td>';
echo '<td>' . mysql_result($result, $i, 'carea') . '</td>';
echo '<td>' . mysql_result($result, $i, 'ccity') . '</td>';
echo '<td>' . mysql_result($result, $i, 'czip') . '</td>';
echo '<td>' . mysql_result($result, $i, 'ccountry') . '</td>';
echo '<td>' . mysql_result($result, $i, 'mode') . '</td>';
echo '<td>' . mysql_result($result, $i, 'sinst') . '</td>';
echo '<td>' . mysql_result($result, $i, 'pieces') . '</td>';
echo '<td>' . mysql_result($result, $i, 'weight') . '</td>';
echo '<td>' . mysql_result($result, $i, 'amt') . '</td>';
echo '<td>' . mysql_result($result, $i, 'pickup') . '</td>';
echo '<td>' . mysql_result($result, $i, 'descr') . '</td>';




echo '<td><a href="edit.php?awbno=' . mysql_result($result, $i, 'awbno') . '">Edit</a></td>';

echo '<td><a href="delete.php?awbno=' . mysql_result($result, $i, 'awbno') . '">Delete</a></td>';

echo "</tr>";

}

// close table>

echo "</table>";



// pagination



?>

<p><a href="new.php">Add a new record</a></p>



</body>

</html>