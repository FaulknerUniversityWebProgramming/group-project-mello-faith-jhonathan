<?php
session_start();
if(!empty($_SESSION['username'])) {
header('location:roster-schedule.php');
}
require 'myDB.php';


if(isset($_POST['login'])) {

$user = $_POST['username'];
$pass = $_POST['password'];

if(empty($user) || empty($pass)) {
$message = 'All field are required';
} else {
$query = $conn->prepare("SELECT username, password FROM Users WHERE 
username=? AND password=? ");
$query->execute(array($user,$pass));
$row = $query->fetch(PDO::FETCH_BOTH);

if($query->rowCount() > 0) {
  $_SESSION['username'] = $user;
  header('location:roster-schedule.php');
} else {
  $message = "Username/Password is incorrect";
}


}

}
?>