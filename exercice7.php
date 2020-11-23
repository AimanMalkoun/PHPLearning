<?php
    #My one billion $ startup idea a "calculator" I call it calinia
    echo "Hi This is Calinia your smart calculator powered by an intellegent AI\n";
    $operation = readline("Please type in your operation *,+,-,/, %");
    $num1 = readline("Enter the first number: ");
    $num2 = readline("Enter the second number: ");

    if ($operation == '*') {
        echo "The result is (drum roll please): ".($num1*$num2);
    }
    elseif ($operation == '/') {
        echo "The result is (drum roll please): ".($num1/$num2);    
    }
    elseif ($operation == '+') {
        echo "The result is (drum roll please): ".($num1+$num2);    
    }
    elseif ($operation == '-') {
        echo "The result is (drum roll please): ".($num1-$num2);    
    }
    elseif ($operation == '%') {
        echo "The result is (drum roll please): ".($num1%$num2);    
    }
    else {
        echo "it is developper's fault not mine";
    }
?>