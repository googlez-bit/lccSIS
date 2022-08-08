<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lccgrading_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //echo "id: " . $row["userID"]. " - Name: " . $row["firstname"]. " " . $row["lastname"] . " Password: " . decry . " MD5:" . $row["password"];
        if($row["password"] == md5("admin"))
        {
            echo 'OKAY';
        }
    }
  } else {
    echo "0 results";
  }
  $conn->close();
?>