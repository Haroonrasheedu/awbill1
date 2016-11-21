<?php

               mysql_select_db("leopards") or die(mysql_error());
               include "db.inc.php";
               $email = (varchar)$_POST["email"];

               $name = mysql_real_escape_string($_POST["name"]);
               $password = mysql_real_escape_string($_POST["password"]);
               $cpassword = mysql_real_escape_string($_POST["cpassowrd"]);

               $query="UPDATE awbill
               SET name = '$name', password = '$password', cpassword =        
               '$cpassword' 
                  WHERE email='$email'";

                mysql_query($query)or die(mysql_error());
                 if(mysql_affected_rows()>=1){
                 echo "<p>($email) Record Updated<p>";
                 }else{
                 echo "<p>($email) Not Updated<p>";
                  }
                  ?>