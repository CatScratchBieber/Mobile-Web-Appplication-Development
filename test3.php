<?php
//Allow Headers
header('Access-Control-Allow-Origin: *');
$servername = "localhost:3306";
$username = "avanraden";
$password = "#0Honorrolllll";
$dbname = "demo";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
 if ($conn->connect_error)
     echo "Error: Unexpected connection error. Please retry the operation.";
 else
  {

    $sql = "SELECT * FROM demo_one";
    $result = mysqli_query($conn, $sql);

         echo"<table border='1'>";
         echo"<tr><td>First Name</td><td>Last Name</td><td>Email</td><td>Phone Number</td></tr>\n";
         while($row = mysqli_fetch_assoc($result)) {
           echo"<tr><td>{$row['FirstName']}</td><td>{$row['LastName']}</td><td>{$row['Email']}</td><td>{$row['PhoneNumber']}</td></tr>\n";

         }
              echo "</table>";
       }


?>
