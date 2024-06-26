<!---Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra 
di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 --->

<?php
    $basketArr = [
        ["squadCas" => "Olimpia Milano", "squadOsp" => "Cantù"],
        ["squadCas" => "AC Picchia", "squadOsp" => "AS Birro"],
        ["squadCas" => "NBArazzanti", "squadOsp" => "Slam Drunk"],
        ["squadCas" => "Team Broglio", "squadOsp" => "Viva la FIBA"],
        ["squadCas" => "Atletico ma non troppo", "squadOsp" => "Atletico Magari"],
    ];

    foreach ($basketArr as $index => $basket){
        $basket['puntiCas'] = rand(50,100);
        $basket['puntiOsp'] = rand(50,100);
    };

    foreach ($basketArr as $basket){
        
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
        <h1>Partite di basket</h1>

        <div>
            <p>
                <?php
                    foreach ($basketArr as $basket){
                        echo $basket['squadCas']." - ".$basket['squadOsp']." | ".$basket['puntiCas']." - ".$basket['puntiOsp']."<br>"; 
                    }
                ?>
            </p>
        </div>
        <script src="" async defer></script>
    </body>
</html>