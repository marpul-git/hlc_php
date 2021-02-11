<?php
    # determinando el tipo de variable
    $a1=347;
    echo '$a1 ',$a1, " es un ",gettype($a1),"<br>";
    $a2=2147483647;
    echo '$a2 ',$a2, " es un ",gettype($a2),"<br>";
    $a3=-2147483647;
    echo '$a3 ',$a3, " es un ",gettype($a3),"<br>";
    $a4=23.7678;
    echo '$a4 ',$a4, " es un ",gettype($a4),"<br>";
    $a6="347";
    echo '$a6 ',$a6, " es un ",gettype($a6),"<br>";
    $a8="Solo literal";
    echo '$a8 ',$a8, " es un ",gettype($a8),"<br>";
    $a9="12.3 Literal con número";
    echo '$a9 ',$a9, " es un ",gettype($a9),"<br>";
    $a10="";
    echo '$a10 ',$a10, " es un ",gettype($a10),"<br>";
    
    #forzando los tipos

    echo "Ahora estamos forzando los tipos de datos al indicado","<br>";

    echo 'Ahora $a2 es un double ',$a2,' ',( gettype((double)$a2)),' ',"<br>";
    echo 'Ahora $a3 es un double ',$a3,' ',( gettype((double)$a3)),' ',"<br>";
    echo 'Ahora $a4 es un integer ',$a4,' ',( gettype((integer)$a4)),' ',"<br>";
    echo 'Ahora $a6 es un int ',$a6,' ',( gettype((int)$a6)),' ',"<br>";
    echo 'Ahora $a8 es un int ',$a8,' ',( gettype((int)$a8)),' ',"<br>";
    echo 'Ahora $a9 es un double ',$a9,' ',( gettype((double)$a9)),' ',"<br>";
    echo 'Ahora $a10 es un int ',$a10,' ',( gettype((int)$a10)),' ',"<br>";
 
    
   
 
?> 