<?php
    include('config.php');
    $id = $_REQUEST['id'];
    $query = "SELECT * FROM admin WHERE id  = '$id";
    $result  = mysqli_query($query);
    if (!$result) 
    {
        die("Error: Data not found..");
    }
    $test = mysqli_fetch_array($result);
    $name=$test['id'] ;
?>
<html>
<title></title>
<head></head>
<body>
<div class="Text">
<input class="Text" type="text" value="<?PHP echo $id; ?>" name="id" size="19"/>
</body>
</html>