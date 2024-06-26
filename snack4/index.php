<!---Snack 4
Creare un array con 15 numeri casuali, tenendo conto 
che l’array non dovrà contenere lo stesso numero più di una volta-->

<?php
$numbersList = [];

for( $i = 0; $i < 15; $i++ ){
    $randomNumber = rand(1,100);
    if(!in_array($randomNumber, $numbersList)){
        $numbersList[] = $randomNumber;
    }
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
        <h2>Numeri Random</h2>
        <ul>
            <?php
                foreach($numbersList as $index){
                    echo "<li>".$index."</li>";
                }
            ?>
        </ul>
        <script src="" async defer></script>
    </body>
</html>