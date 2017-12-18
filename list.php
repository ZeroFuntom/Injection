<?php
  session_start();

  if(!$_SESSION["id"]){
    header('Location: login.php');
  }

  include("db.php");
 ?>

<!DOCTYPE html>
<html>
   <head>
       <title>Warehouse Management</title>
       <link rel="stylesheet" href="style/styles.css">
   </head>
   <body>
       <h1>Liste</h1>
       <table>
       <tr>
           <th>Image</th>
           <th>ID</th>
           <th>Titel</th>
           <th>Beschreibung</th>
           <th>Preis</th>
           <th></th>
       </tr>


       <?php
        $sql = "SELECT * FROM produkte";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        while($row = $stmt->fetch(PDO::FETCH_OBJ)){
          if(!$_SESSION["admin"]){
            $edit = 'javascript:alert("Kein Zugriff!")';
          }else{
            $edit = "edit.php?id=$row->id_produkt";
          }
          echo "
            <tr>
              <td><img src='$row->link'></td>
              <td>$row->id_produkt</td>
              <td>$row->name</td>
              <td>$row->beschreibung</td>
              <td>CHF $row->preis</td>
              <td><a href='$edit'>Edit Item</a></td>
            </tr>
          ";
        }
       ?>
       </table>
       <a href="logout.php">Logout</a>
     </body>
</html>
