<!doctype html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>database connections</title>
    </head>
    <body>
      <?php
      $username = "root";
      $password = "";
      $host = "localhost";

      $connector = mysql_connect($host,$username,$password)
          or die("Unable to connect");
        echo "Connections are made successfully::";
      $selected = mysql_select_db("leopards", $connector)
        or die("Unable to connect");

      //execute the SQL query and return records
      $result = mysql_query("SELECT * FROM signup ");
      ?>
      <table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th><label for="field3">
		  <span>Company<span class="required">
		  *</span>
		  </span><input type="text" class="input-field" name="ccompname" value="" /></label></th>
          <th>Employee_Name</th>
          <th>Employee_dob</th>
          <th>Employee_Adress</th>
  
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysql_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row['name']}</td>
              <td>{$row['email']}</td>
              <td>{$row['password']}</td>
              <td>{$row['cpassword']}</td>
          
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
     <?php mysql_close($connector); ?>
    </body>
    </html>