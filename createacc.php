<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpass = $_POST['confirmpass'];


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "loginweb";

$connect = new mysqli($host,$dbusername,$dbpassword,$dbname);
$query = "INSERT INTO `login`(`username`,`email`,`password`,`confirmpass`) VALUES ('$username','$email','$password','$confirmpass')";
$result = $connect->query($query);
if($result == $result){
  echo 'success';
}
else{

}
?>
