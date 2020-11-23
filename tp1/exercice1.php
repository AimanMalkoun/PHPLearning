<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <?php
        $date = date('l');
        if ($date == "Monday"){
            echo "Lundi, ".$date;
        }
        elseif ($date == "Thuesday"){
            echo "Mardi, ".$date;
        }
        elseif ($date == "Wednesday"){
            echo "Mercredi, ".$date;
        }
        elseif ($date == "Thersday"){
            echo "Jeudi, ".$date;
        }
        elseif ($date == "Friday"){
            echo "Vendredi, ".$date;
        }
        elseif ($date == "Saturday"){
            echo "Samedi, ".$date;
        }
        elseif ($date == "Sunday"){
            echo "Dimanche, ".$date;
        }
        else {
            echo "It seems the developper made a grammar mistake";
        }
    ?>
</body>
</html>