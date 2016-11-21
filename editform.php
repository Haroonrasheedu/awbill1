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

           mysql_select_db("charitabledb") or die(mysql_error());
            include "db.inc.php";
           $donorid = (varchar)$_GET['donorid'];
           $query = mysql_query("SELECT * FROM donors WHERE donorid = '$donorid'") or 
           die(mysql_error());

           if(mysql_num_rows($query)>=1){
            while($row = mysql_fetch_array($query)) {
           $firstname = $row['firstname'];
            $lastname = $row['lastname'];
             $address = $row['address'];
            }
            ?>
           <form action="update.php" method="post">
            <input type="hidden" name="ID" value="<?=$donorid;?>">
           First Name: <input type="text" name="firstname" value="<?=$firstname?>"><br>
           Last Name: <input type="text" name="lastname" value="<?=$lastname?>"><br>
           Address: <input type="text" name="address" value="<?=$address?>"><br>
           <input type="Submit">
            </form>
           <?php
            }else{
            echo 'No entry found. <a href="javascript:history.back()">Go back</a>';
             }
               ?>
           </body>
           </html>