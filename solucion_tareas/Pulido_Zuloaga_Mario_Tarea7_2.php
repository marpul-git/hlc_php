<?php
/*
Php dispone de los siguientes operadores de comparación

$A == $B
El operador == compara los valores de dos variables y devuelve 1 (CIERTO) en el caso de que sean iguales y el valor NUL – carácter ASCII 0– (FALSO) cuando son distintas.
$A === $B
El operador === es similar al anterior, pero realiza la comparación en sentido estricto. Para que devuelva 1 es necesario que sean iguales los valores de las variables y también su tipo.
$A != $B
El operador != devuelve 1 cuando los valores de las variables son distintos (en general ! indica negación, en este caso podríamos leer «no igual») y devuelve NUL cuando son iguales. Este operador no compara en sentido estricto, por lo que puede considerar iguales los valores de dos variables de distinto tipo.
$A < $B
El operador < devuelve 1 cuando los valores de $A son menores que los de $B .
$A <= $B
Se comporta de forma idéntica al anterior. La única diferencia es que ahora aceptará como ciertos los casos de igualdad tanto en el caso de números como en el de códigos ASCII.
$A > $B
Es idéntico –en el modo de funcionamiento– a $A < $B. Solo difiere de éste en el criterio de comparación que ahora requerirá que los valores de $A sean mayores que los de la variable $B.
$A >= $B
Añade al anterior la posibilidad de certeza en caso de igualdad.*/

$A=3;
$B='3';
$C=3;
$D=4;

$E=($A == $B);
$F=($A == $D);
$G=($A === $B);
$H=($A === $C);
$I=($A != $B);
$J=($A != $D);
$K=($A < $D);
$L=($D < $A);
$M=($A > $D);
$N=($D > $A);
$O=($A > $C);
$P=($A >= $C);
$Q=($A <= $C);



echo $A,' => valor de $A','<br>';
echo $B,' => valor de $B (aunque sea un string)','<br>';
echo $C,' => valor de $C','<br>';
echo $D,' => valor de $D','<br>','<br>';

echo $E,' => valor de ($A==$B)','  //En este caso nos devuelve 1 porque ambas variables tienen el mismo valor','<br>';
echo $F,' => valor de ($A==$D)','  //En este caso nos devuelve null porque tienen distinto valor','<br>';
echo $G,' => valor de ($A===$B)','  //En este caso nos devuelve null porque aunque tienen el mismo valor, son de tipos diferentes','<br>';
echo $H,' => valor de ($A===$C)','  //En este caso nos devuelve 1 porque tienen el mismo valor y son del mismo tipo','<br>';
echo $I,' => valor de ($A != $B)','  //En este caso nos devuelve null porque no son distintos, no compara en sentido estricto','<br>';
echo $J,' => valor de ($A != $D)','  //En este caso nos devuelve 1 porque si son distintos','<br>';
echo $K,' => valor de ($A < $D)','  //En este caso nos devuelve 1 porque $A es menor que $D','<br>';
echo $L,' => valor de ($D < $A)','  //En este caso nos devuelve null porque $D no es menor que $A','<br>';
echo $M,' => valor de ($A > $D)','  //En este caso nos devuelve null porque $A no es mayor que $D','<br>';
echo $N,' => valor de ($D > $A)','  //En este caso nos devuelve 1 porque $D es mayor que $A','<br>';
echo $O,' => valor de ($A > $C)','  //En este caso nos devuelve null porque ambos numeros son iguales','<br>';
echo 'Si le añadimos el signo igual (>=) ó (<=) a cualquiera de ellos, nos devolveria 1 en caso de igualdad','<br>';
echo $P,' => valor de ($A >= $C)','  //En este caso nos devuelve 1 porque ambos numeros son iguales','<br>';
echo $Q,' => valor de ($A <= $C)','  //En este caso nos devuelve 1 porque ambos numeros son iguales','<br>';

?>