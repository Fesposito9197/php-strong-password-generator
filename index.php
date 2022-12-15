<?php 
session_start();
include __DIR__ . '/functions.php';

$user_pass=$_GET["quantity"];
$_SESSION["userpassword"]=  randomPassword($user_pass);





?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pasword Generator</title>
    </head>
    <body>
        <form action="index.php" method="get">
            <label for="quantity">Scegli la lunghezza della tua password(minimo 3 caratteri):</label>
            <input type="number" name="quantity" id="quantity" min="5" max="15">
            <button type="submit" >Genera la password</button>
            
        </form>
        <div>
            <a href="userPassword.php">Scopri la tua password</a>
        </div>
    </body>
</html>