<?php require_once "config/DB.php" ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Location Auto</title>
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>
    <!--  -->
    <?php 
    if (isset($_POST['sub'])) {
      $client = htmlspecialchars($_POST['client']);
      $imatrucle = htmlspecialchars($_POST['imatrucle']);
      $Debut = htmlspecialchars($_POST['Debut']);
      $Fin = htmlspecialchars($_POST['Fin']);
      $PrixJour = htmlspecialchars($_POST['Jour']);
      $NombreJour = htmlspecialchars($_POST['Nombre']);
      $Total = htmlspecialchars($_POST['Total']);
      echo $client, ",",$imatrucle, ",",$Debut, ",",$Fin, ",",$PrixJour, ",",$NombreJour, ",",$Total ;
    }
    ?>
    <!--  -->
    <div class="container">
      <h1>Location Auto</h1>
      <form action="" method="post">
        <label for="client">client</label>
        <input type="text" name="client" id="client" />
        <label for="imatrucle">imatrucle</label>
        <input type="text" name="imatrucle" id="imatrucle" />
        <label for="Debut">date Debut</label>
        <input type="date" name="Debut" id="Debut" />
        <label for="Fin">date Fin</label>
        <input type="date" name="Fin" id="Fin" />
        <label for="Jour">Prix Jour</label>
        <input type="text" name="Jour" id="Jour" />
        <label for="Nombre">Nombre Jour</label>
        <input type="text" name="Nombre" id="Nombre" />
        <label for="Total">Total</label>
        <input type="text" name="Total" id="Total" />
        <button type="submit" name="sub" style="background-color: green; margin-top: 1rem;">Add</button>
        <!-- <button type="button" style="background-color: red;">delete</button>
        <button type="button" style="background-color: yellow;">Update</button>
        <button type="button" style="background-color: rgb(182, 10, 10);">cancel</button> -->
      </form>
    </div>
  </body>
</html>
