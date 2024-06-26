<!---Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
--->

<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'autore2',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'autore3',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'autore4',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'autore5',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'autore6',
            'text' => 'Testo post 6'
        ]
    ],
];
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
        <h2>
            Posts
        </h2>
        <?php
            foreach ($posts as $date => $postsList){
                echo '<h3> Date: '.$date.'</h3>';
            }


        ?>
        <script src="" async defer></script>
    </body>
</html>