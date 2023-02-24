<?php 

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$city = $_POST['city'];
$state = $_POST['state'];
$district = $_POST['district'];
$pin = $_POST['pin'];
$mobno = $_POST['mobno'];
$homeno = $_POST['homeno'];
$enterproductname = $_POST['enterproductname'];


$conn = nem mysqli('localhost','root','','home');
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}
else
{
    $stmt = $conn->prepare("insert into order(fname, lname, email, city, state, district, pin, mobno, homeno, enterproductname)
    values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ");
    $stmt->bind_param("ssssssiiis",$fname, $lname, $email, $city, $state, $district, $pin, $mobno, $homeno, $enterproductname);
    $stmt->execute();
    echo"order successfully....";
    $stmt->close();
    $conn->close();
}
?>
































