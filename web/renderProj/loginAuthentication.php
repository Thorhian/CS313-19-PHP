<?php
session_start();
require('db.php');

if(!isset($_GET['username']) || !isset($_GET['password'])) {
     header('Location: login.php');
     die();
}

if (isset($_SESSION['userID'])) {
     header('Location: userHome.php');
     die();
} else {
     $username = $_GET['username'];
     $password = $_GET['password'];
     $db = getDb();
     $logQ = $db->prepare('SELECT user_id, username, password FROM users WHERE username=:username AND password=:password');
     $logQ->execute(array(':username' => $username, ':password' => $password));
     $rows = $logQ->fetchAll(PDO::FETCH_ASSOC);
     if(sizeof($rows) == 0) {
          header('Location: login.php');
          die();
     } else if(sizeof($rows) > 1) {
          header('Location: login.php');
          die();
     }

     if($username == $rows[0]['username'] && $password == $rows[0]['password']) {
          $_SESSION['userID'] = $rows[0]['user_id'];
          $_SESSION['username'] = $rows[0]['username'];
          header('Location: userHome.php');
          die();
     }

     //What are you doing here code?!?
     header('Location: login.php');
     die();
}

?>
