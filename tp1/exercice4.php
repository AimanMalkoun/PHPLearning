<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
    <ul>
        <?php 
            for ($i=1; $i <= 30; $i++) { 
                echo "<li>".$i."<sup>2</sup> = ".($i*$i)."</li>";
            }
        ?>
    </ul>
</body>
</html>