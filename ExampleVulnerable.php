<?php
   $id = $_GET["id"];
   $password = "123";
   $con = mysqli_connect("localhost", "root", $password, "test");
   $sql = "SELECT id, fname, lname FROM persons WHERE id=$id";
   $result = mysqli_query($con,$sql);
  if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
    echo $row['fname']."\n";
   }
  } else {
   echo "0 results";
  }
  $con->close();
?>
