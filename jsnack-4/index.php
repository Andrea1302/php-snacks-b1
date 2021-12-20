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
    Snack 4 


<!-- Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->
</h2>

<?php

    function getArrayOfIntegers($min, $max, $nItems){
        $arrNumber = [];
        while ( count($arrNumber) < $nItems ) {
            $number = rand( $min , $max);
            if (!in_array($number, $arrNumber) ){
                $arrNumber[] = $number;
            }
        }
        return $arrNumber;
    }

?>
<p>
    <?php
        $arr = getArrayOfIntegers(1, 30, 15);
        var_dump($arr) ;
    ?>
</p>
</body>
</html>