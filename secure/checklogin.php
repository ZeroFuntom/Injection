<?php
  session_start();

  include("db.php");
  $username = $_POST["username"];
  $password = $_POST["password"];

  if(empty($username)||empty($password)){
    header('Location: login.php');
    exit;
  }

  if(strlen($username)>50 || strlen($password)>128){
    header('Location: login.php');
    exit;
  }

  if(!preg_match("#^[0-9a-zA-Z]+$#", $username)){
    header('Location: login.php');
    exit;
  }

  if(!preg_match("#^[0-9a-zA-Z$!?]+$#", $password)){
    header('Location: login.php');
    exit;
  }

  if(isset($username)&&isset($password)){
    $sql = "SELECT id_user, benutzername, passwort, admin FROM user WHERE benutzername = :username";

    $stmt = $db->prepare($sql);
    $stmt->execute(array(
      'username' => $username
    ));

    if($row = $stmt->fetch(PDO::FETCH_OBJ)){
      $id = $row->id_user;
      $chkuser = $row->benutzername;
      $chkpw = $row->passwort;
      $admin = $row->admin;
    }

    if(isset($chkuser)&&isset($chkpw)){

      if(password_verify($password.$id, $chkpw)){
        if($admin == "1"){
          $_SESSION["admin"] = $admin;
        }
        $_SESSION["id"] = $id;
        header('Location: list.php');
      }else{
        header('Location: login.php');
      }
    }else{
      header('Location: login.php');
    }

  }
?>
