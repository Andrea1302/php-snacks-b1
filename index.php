<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>
    Snack 2

    <!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->
</h2>

    <?php
        $nomeTrovato = $_GET["nome"];
        $mailTrovata = $_GET["mail"];
        $ageTrovata = $_GET["age"];


        $hasAt = strpos($mailTrovata , "@");
        $hasDot = strpos($mailTrovata , ".");
        $isMailOk = $hasAt !== false && $hasDot !== false;

        $isNumber = is_numeric($ageTrovata);
    ?>

<p>
    <?php
        echo strlen($nomeTrovato);
        if ( strlen($nomeTrovato) > 3 && $isMailOk && $isNumber){
            echo "Accesso riuscito";
        } else {
            echo "Accesso negato";
        }
    ?>
</p>

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

<p>
    <?php 
            $keys = array_keys($posts);
            var_dump($posts[$keys[0]][0]['title']);
            for ( $i = 0 ; $i < count($keys); $i++){
                $key = $keys[$i];
                for ( $j = 0 ; $j < count($posts[$key]); $j++){
                    $post = $posts[$key][$j];
                    echo $post['title'];
                }
            }
            // $prova = $posts[$keys[0]];
            // var_dump($prova['title'])

    ?>
</p>

<h2>
    Snack 4 


<!-- Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->
</h2>

<?php

    // function getArrayOfIntegers($min, $max, $nItems){
    //     $arrNumber = [];
    //     while ( count($arrNumber) < $nItems ) {
    //         $number = rand( $min , $max);
    //         if (!in_array($number, $arrNumber) ){
    //             $arrNumber[] = $number;
    //         }
    //     }
    //     return $arrNumber;
    // }

?>
<p>
    <?php
        $arraynumeri = getArrayOfIntegers(1, 30, 15);
        echo "ciao" ;
    ?>
</p>
</body>
</html>