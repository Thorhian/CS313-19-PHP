<?php
session_start();
require('db.php');

if(!isset($_GET['username']) || !isset($_GET['password'])) {
     header("login.php");
     die();
}

if (isset($_SESSION['userID'])) {
     header("userHome.php");
     die();
} else {
     $username = $_GET['username'];
     $password = $_GET['password'];
     $db = getDb();
     $logQ = $db->prepare('SELECT user_id, username, password FROM users WHERE username=:username AND password=:password');
     $logQ->execute(array(':username' => $username, ':password' => $password));
     $rows = $logQ->fetchAll(PDO::FETCH_ASSOC);
     if(!isset($rows)) {
          header("login.php");
          die();
     }

     echo $rows['username'];
     foreach($rows as $row) {
          printf("user-id: %d\n", $row['user_id']);
          printf("username: %s\n", $row['username']);
     }
}

?>
