<?php
    $snote = 0;
    $scoef = 0;
    for ($i=0; $i < 6; $i++) { 
        echo "======================================== \n";
        $note = readline("Veillez entrer la note: ");
        $coef = readline("Veillez entrer le coefficient: ");
        echo "======================================== \n";

        $snote += $note;
        $scoef += $coef;
    }

    $moy = $snote*$scoef/6;
    echo "moyenne est: ".$moy;

?>