<?php
    $employe = array('aiman', 'long long name', 'baiman');

    trierEtAfficher($employe);
    function trierEtAfficher($var)
    {
        sort($var);
        print_r($var);
    }
?>