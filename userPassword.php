<?php 
session_start();



?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Password</title>
    </head>
    <body>
        <div>
            <h2>Questa è la tua Password:<?php echo $_SESSION["userpassword"] ?></h2>
        </div>
    </body>
</html>