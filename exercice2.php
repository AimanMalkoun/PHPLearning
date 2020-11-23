<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
    <?php
        $date = date('l');
        switch ($date){
            case "Monday" :
                echo "Lundi, ".$date;
                break;
            case "Thuesday":
                echo "Mardi, ".$date;
                break;
            case "Wedneday":
                echo "Mercredi, ".$date;
                break;
            case "Thursday":
                echo "Jeudi, ".$date;
                break;
            case "Friday":
                echo "Vendredi, ".$date;
                break;
            case "Saturday":
                echo "Samedi, ".$date;
                break;
            case "Sunday":
                echo "Dimanche, ".$date;
                break;
            default:
                echo "Yeah it seems the developper skipped his english classes. Please dont fire him ;)";
                break;
            }
    ?>
</body>
</html>