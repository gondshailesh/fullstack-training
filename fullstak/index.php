<?php

$servername = "localhost";

$username = "root"; 

$password = ""; 

$dbname = "dfirst"; 

$conn = new mysqli($phpmyadmin, $email, $password,);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}
>

include "index.php";

  if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    $password = $_POST['password'];
    $sql = INSERT INTO `dfirst,``` ( `email`, `password`, ) VALUES ( 'email', 'password', current_timestamp());

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>