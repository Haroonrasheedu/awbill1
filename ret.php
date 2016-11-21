<DOCTYPE html>
    <html>
    <head><title>Practice</title></head>
    <body align="center">
    <?php

    $con=mysqli_connect("localhost","root","","leopards");
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
     ?>

     <form action="ret.php" method="post">
    Name     <br><input type="text" name="testname"       value="<?php echo $_GET['n']; ?>"><br>
    Address 1<br><input type="text"  name="testadd" value="<?php echo $_GET['m']; ?>"><br>
    <input type="submit" name="reset" value="Clear">
    <input type="submit" name="submit" value="Submit">
    <input type="submit" name="retrieve" value="Retrieve">
    </form>

    <?php
    if (isset($_POST['submit']))
    {
    $testname=$_POST['testname'];
    $testadd=$_POST['testadd'];
 
    if(($testname=='')||($testadd==""))
    {
    echo "<script>alert('Please fill all fields')</script>";
    exit();
    }
    else
    {
    mysqli_query($con,"INSERT INTO test (testname, testadd)
    VALUES ('$testname','$testadd')");
    echo "<script>alert('Your record successfull inserted into database...')</script>";
    exit();
    }
    }
    if (isset($_POST['retrieve']))
    {
    $result = mysqli_query($con,"SELECT * FROM test");
      while($row = mysqli_fetch_array($result))
      { 
       $testname=$row['testname'];echo "<br>";echo "<br>";
       $testadd=$row['testadd'];echo "<br>";echo "<br>";
     
    echo "<script type='text/javascript'>  
window.open('ret.php?n=$testname','_self'); 
window.open('ret.php?m=$testadd','_self');  </script>"; 
      }  
    }
    ?>
    </body>
    </html>