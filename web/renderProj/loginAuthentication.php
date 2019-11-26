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
     if(sizeof($rows) == 0) {
          header("login.php");
          die();
     } else if(sizeof($rows) > 1) {
          header("login.php");
          die();
     }

     if($username == $rows[0]['username'] && $password == $rows[0]['password']) {
          $_SESSION['userID'] = $rows[0]['user-id'];
          $_SESSION['username'] = $rows[0]['username'];
          header("userHome.php");
          die();
     }

     //What are you doing here code?!?
     header("login.php");
     die();
}

?>
