<?php

/*

DELETE.PHP

Deletes a specific entry from the 'players' table

*/



// connect to the database

include('connect-db.php');



// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_GET['awbno']) && is_numeric($_GET['awbno']))

{

// get id value

$awbno = $_GET['awbno'];



// delete the entry

$result = mysql_query("DELETE FROM awbill WHERE awbno=$awbno")

or die(mysql_error());



// redirect back to the view page

header("Location: view.php");

}

else

// if id isn't set, or isn't valid, redirect back to view page

{

header("Location: view.php");

}



?>