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

        $isNumber = is_numeric($ageTrovata)
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

</body>
</html>