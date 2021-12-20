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


</body>
</html>