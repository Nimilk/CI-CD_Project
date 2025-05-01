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


<!DOCTYPE html>
<html>
<head>
    <title>Hardcoded Credentials & SQL Warning Demo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        input[type="text"] {
            padding: 8px;
            width: 250px;
        }
        button {
            padding: 8px 16px;
        }
        .output {
            margin-top: 20px;
            padding: 10px;
            background-color: #f8f8f8;
            border: 1px solid #ccc;
            width: fit-content;
        }
    </style>
</head>
<body>

    <h2>User Lookup Demo</h2>
    <p>This page uses a hardcoded DB password and an incomplete SQL query (both insecure).</p>

    <form method="GET" action="">
        <label for="id">Enter User ID:</label>
        <input type="text" id="id" name="id" required />
        <button type="submit">Search</button>
    </form>


        <div class="output">
            <h4>Search Result for ID: <?php echo htmlspecialchars($id); ?></h4>
            <?php echo $resultText; ?>
        </div>
 

</body>
</html>
