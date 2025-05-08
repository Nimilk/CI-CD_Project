<?php

$name = $_GET['name'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Reflected XSS Demo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        input[type="text"] {
            padding: 10px;
            width: 300px;
        }
        button {
            padding: 10px 20px;
        }
    </style>
</head>
<body>

    <h2>Welcome to the Reflected XSS Demo</h2>
    <p>Enter your name to see it reflected on the page:</p>

    <form method="GET" action="">
        <input type="text" name="name" placeholder="Your name here" required />
        <button type="submit">Submit</button>
    </form>


        <h3>Hello, <?php echo $name; ?>!</h3> <!-- VULNERABLE LINE -->



</body>
</html>
