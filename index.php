<?php 

$user_pass=$_GET["quantity"];
function randomPassword($user_pass) {
    $alphabet="ABCDFGHILMNOPQRSTUVZXYabcdfghilmnopqrstuvzxyz12345678910#?&!";
    $pass = array(); 
    $alphaLength = strlen($alphabet) - 1; 
    for ($i = 0; $i <$user_pass ; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); 
};




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
            <input type="number" name="quantity" id="quantity" min="5">
            <button type="submit">Genera la password</button>
        </form>
        <div>
            <h2>Questa è la tua Password:<?php echo randomPassword($user_pass) ?></h2>
        </div>
    </body>
</html>