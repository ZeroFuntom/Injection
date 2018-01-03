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

  if(preg_match("/[<>]/", $titel)){
    header('Location: edit.php?id='.$id);
    exit;
  }

  if(preg_match("/[<>]/", $beschreibung)){
    header('Location: edit.php?id='.$id);
    exit;
  }

  if(!preg_match("/[0-9]/", $preis)){
    header('Location: edit.php?id='.$id);
    exit;
  }

  if(empty($titel) || empty($beschreibung) || empty($preis)){
    header('Location: edit.php?id='.$id);
    exit;
  }

  $sql = "UPDATE produkte SET name=:titel, beschreibung=:beschreibung, preis=:preis WHERE id_produkt = :id";
  $stmt = $db->prepare($sql);
  $stmt->execute(array(
    'titel' => $titel,
    'beschreibung' => $beschreibung,
    'preis' => $preis,
    'id' => $id
  ));

  header('Location: list.php');
  exit;

?>
