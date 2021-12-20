<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        div{
            border: 1px solid black;
            padding: 5px;
        }
        h3{
            color:red;
        }
    </style>
<h2>
    Snack 3 

    <!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->
</h2>

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
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

?>

<div>
    <?php 
            $keys = array_keys($posts);
            for ( $i = 0 ; $i < count($keys); $i++){
                $key = $keys[$i];
                for ( $j = 0 ; $j < count($posts[$key]); $j++){
                    $post = $posts[$key][$j];

                    echo "<div>". "<h3>" . $post['title'] . "</h3>"  . "<h4>" . $post['author'] . "</h4>" . "<p>" . $post['text'] . "</p>" . "</div>";
                }
            }

    ?>
</div>
</body>
</html>