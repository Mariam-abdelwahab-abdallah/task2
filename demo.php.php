<?php
    
    echo "Enter two numbers to use in calculation process:<br>";

    $this->num1 = $num1;

    $this->num2 = $num2;

    echo "Choose the number of opertion you want:<br>(1) + \n (2) - \n (3) * \n (4) / \n";
    
    $this->operator = $operator;

    switch ($operator){

        case 1:

            echo "The sum of the two numbers is". $this->num1 + $this->num2. "<br>"; 

            break;
    
        case 2 :
    
            echo "The subtraction of the two numbers is". $this->num1 - $this->num2. "<br>";
    
            break;
    
        case 3 :
    
            echo "The multiplication of the two numbers is". $this->num1 * $this->num2. "<br>";
    
            break;
    
        case 4 :
    
            echo "The division of the two numbers is". $this->num1 / $this->num2. "<br>";
    
            break;
    
    }
    



