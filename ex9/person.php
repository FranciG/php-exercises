<?php

session_start();
echo "<h3>Person info</h3>";
print_r $_POST;
echo "Fist name is" echo $_POST["fname"];
echo "Last name is" echo $_POST["lname"];

$_SESSION['username'] = $_POST['fname'];
$_SESSION['userlname'] = $_POST['lname'];

 ?>
