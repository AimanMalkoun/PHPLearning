<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>
<body>
    <h1>Calcul sur les variables</h1>
    <?php
        $TVA = 0.206;
        $prix = 150;
        $Nombre = 10;
        echo "Le prix HT pour 10 aricles est: ".($prix*10);
        echo "<br>";
        echo "La TVA pour 10 aricles est: ".($TVA*10);
        echo "<br>";
        echo "Le type du variable prix est: ".gettype($prix);
        echo "<br>";
        echo "Le type du variable TVA est: ".gettype($TVA);

        $prix_table = 150;
        $prix_armoire = 350;
        $nombre = 10;

        echo "Le prix pour 10 armoires est: ".($prix_armoire*10);

        if ($prix_armoire <= $prix_table) {
            echo "prix table est plus eleve: ".$prix_table;
        }
        else{
            echo "prix armoire est plus eleve: ".$prix_armoire;
        }
    ?>
    
</body>
</html>