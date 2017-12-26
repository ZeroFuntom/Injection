<?php
  $pw = "panda";
  $id = 2;

  $pwh = password_hash($pw.$id, PASSWORD_DEFAULT);

  echo $pwh;
?>
