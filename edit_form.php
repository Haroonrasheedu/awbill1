<html>
     <head>
       <title>Form Edit Data</title>
      </head>

      <body>
          <table border=1>
      <tr>
       <td align=center>Form Edit Employees Data</td>
         </tr>
        <?php

           mysql_select_db("leopards") or die(mysql_error());
            include "Dbconnect.php";
           $email = (varchar)$_GET['email'];
           $query = mysql_query("SELECT * FROM signup WHERE email = '$email'") or 
           die(mysql_error());

           if(mysql_num_rows($query)>=1){
            while($row = mysql_fetch_array($query)) {
           $name = $row['name'];
            $password = $row['password'];
             $cpassword = $row['cpassowrd'];
            }
            ?>
           <form action="update.php" method="post">
            <input type="hidden" name="EMail" value="<?=$email;?>">
           Name: <input type="text" name="name" value="<?=$name?>"><br>
           Password: <input type="text" name="password" value="<?=$password?>"><br>
           Confirm Password: <input type="text" name="cpassword" value="<?=$cpassowrd
?>"><br>
           <input type="Submit">
            </form>
           <?php
            }else{
            echo 'No entry found. <a href="javascript:history.back()">Go back</a>';
             }
               ?>
           </body>
           </html>