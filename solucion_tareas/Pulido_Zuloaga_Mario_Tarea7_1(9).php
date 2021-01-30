<?php
    $a=12; //en binario 1100;
    $b=23; //en binario 10111;
    $A="12"; //en binario 110001110010;
    $B="23"; //en binario 110010110011;
    //operador &;
    print_r($a&$b);
    echo "<br>";
    print_r($A&$B);
    echo "<br>";
    //operador |;
    print_r($a|$b);
    echo "<br>";
    print_r($A|$B);
    echo "<br>";
    //operador ^;
    print_r($a^$b);
    print_r($A^$B);
    echo "<br>";
    //repite el código para el operador <<;
    echo "<br>";
    print_r($A<<$B);//El operador << multiplica el valor de la primera cadena por 2 elevado al valor de la segunda.
    //repite el código para el operador >>;
    echo "<br>";
    print_r($A>>$B);//El operador << divide el valor de la primera cadena por 2 elevado al valor de la segunda.
    //Al ser un operador matemático solo tiene sentido cuando ambas variables son números naturales. 
    //En las cadenas alfanuméricas extrae los números que pudiera haber al comienzo y, en caso de no haberlos, toma valor cero.

    //operador ~
    print_r(~$a);//Invierte los valores de los bits de la cadena $a convirtiendo los CEROS en UNO y los UNO en CERO.

?>