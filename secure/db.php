<?php
    error_reporting(0);
    $db = new PDO('mysql:host=localhost;dbname=m181_produktverwaltung_secure', 'root', '');

    $db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
  ?>
