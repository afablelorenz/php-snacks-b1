<!--- Snack 2
Con un form passare come parametri GET name, mail e age e 
verificare 
(cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare "Accesso riuscito", altrimenti 
"Accesso negato" --->

<?php

$name=$_GET[$name];
$email=$_GET[$email];
$emailCheck1 = '.';
$emailCheck2 = '@';
$eta=$_GET[$eta];
$accesso = false;

if(strlen($name) >=3 && (str_contains($email,$emailCheck1) && str_contains($email,$emailCheck2)) && is_numeric($eta)){
    $accesso = true;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Form</h1>
        <form action="./index.php" method="GET">
            <input type="text" name="name" id="name" placeholder="Inserire il nome minimo 3 caratteri">
            <input type="text" name="email" id="email" placeholder="Inserire l'email">
            <input type="text" name="eta" id="eta" placeholder="Inserire l'età">
            <button type="submit" id="submitButton">
                Submit
            </button>
        </form>
        <div>
            <?php
                echo $accesso ? '<p> Accesso Riuscito </p>' : ' <p>Accesso Negato </p>';
            ?>
        </div>
        <script src="" async defer></script>
    </body>
</html>