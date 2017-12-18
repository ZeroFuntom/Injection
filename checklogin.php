<?php
  session_start();

  include("db.php");
  $username = $_POST["username"];
  $password = $_POST["password"];

  if(empty($username)||empty($password)){
    header('Location: login.php');
    exit;
  }

  if(isset($username)&&isset($password)){
    $sql = "SELECT id_user, benutzername, passwort, admin FROM user WHERE benutzername = '$username' AND passwort = '$password'";

    echo $sql;

    //echo $sql;
    $stmt = $db->prepare($sql);
    $stmt->execute();

    if($row = $stmt->fetch(PDO::FETCH_OBJ)){
      $id = $row->id_user;
      $chkuser = $row->benutzername;
      $chkpw = $row->passwort;
      $admin = $row->admin;
    }

    if(isset($chkuser)&&isset($chkpw)){
      echo $password." - ".$chkpw;
      if($password == $chkpw){
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
