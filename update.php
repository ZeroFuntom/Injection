x<?php
  session_start();

  if(!$_SESSION["id"]){
    header('Location: login.php');
  }

  if(!$_SESSION["admin"]){
    header('Location: list.php');
  }

  include("db.php");

  $id = $_POST["id"];
  $titel = $_POST["titel"];
  $beschreibung = $_POST["beschreibung"];
  $preis = $_POST["preis"];

  $sql = "UPDATE produkte SET name ='$titel', beschreibung='$beschreibung', preis=$preis WHERE id_produkt = $id";
  $stmt = $db->prepare($sql);
  $stmt->execute();

  header('Location: list.php');

?>
