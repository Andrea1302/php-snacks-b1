<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    
    $CalendarioBasket = [
        [
            "casa" => "cantù",
            "ospite" => "Olimpia",
            "puntiCasa" => 60,
            "puntiTrasferta" => 55
        ],
        [
            "casa" => "sassari",
            "ospite" => "venezia",
            "puntiCasa" => 80,
            "puntiTrasferta" => 120
        ],
        [
            "casa" => "armani",
            "ospite" => "livorno",
            "puntiCasa" => 100,
            "puntiTrasferta" => 102
        ],
        [
            "casa" => "lakers",
            "ospite" => "bulls",
            "puntiCasa" => 85,
            "puntiTrasferta" => 77
        ],
        [
            "casa" => "oklahoma",
            "ospite" => "denver",
            "puntiCasa" => 66,
            "puntiTrasferta" => 104
        ],
    ];

    ?>


<h2>
    Snack 1 

    <!-- Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

    Olimpia Milano - Cantù | 55-60 -->
</h2>
<p>
    <?php
            // var_dump($prova);
        for ( $x = 0 ; $x < count($CalendarioBasket); $x++ ){
            echo   $CalendarioBasket[$x]["casa"] . "-" . $CalendarioBasket[$x]["ospite"] . " ". "|" . " " . $CalendarioBasket[$x]["puntiCasa"] ."-". $CalendarioBasket[$x]["puntiTrasferta"] . "<br>" ;
        }
    ?>
</p>



</body>
</html>