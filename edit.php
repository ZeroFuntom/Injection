<?php
  session_start();

  if(!$_SESSION["id"]){
    header('Location: login.php');
  }

  if(!$_SESSION["admin"]){
    header('Location: list.php');
  }

  include("db.php");

  $id = $_GET['id'];


?>
<!DOCTYPE html>
<html>
   <head>
       <title>Warehouse Management</title>
       <link rel="stylesheet" href="style/styles.css">
   </head>
   <body>
      <h1>Produkt bearbeiten</h1>
      <form method="post" action="update.php">
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
          $sql = "SELECT * FROM produkte WHERE id_produkt = $id";
          $stmt = $db->prepare($sql);
          $stmt->execute();

          while($row = $stmt->fetch(PDO::FETCH_OBJ)){

            echo "
              <tr>
                <td><img src='$row->link'></td>
                <td><input type='number' name='id' value='$row->id_produkt' readonly></td>
                <td><input type='text' name='titel' value='$row->name'></td>
                <td><input type='text' name='beschreibung' value='$row->beschreibung'></td>
                <td>CHF<input type='number' name='preis' value='$row->preis'></td>
                <td><input type='submit' value='Save'></td>
              </tr>
            ";
          }
         ?>
         </table>
       </form>
    </body>
</html>
