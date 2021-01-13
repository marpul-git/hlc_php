<?php
// Este comentario no se verá en la página
echo "Esto se leerá <BR> "; // Esto no se leerá
/* Este es un comentario de
múltiples líneas y no se acabará
hasta que no cerremos así.... */
echo "Este es el segundo comentario que se leerá<BR>";
# Este es un comentario tipo shell que tampoco se leerá
# Este, tampoco
echo ("Aquí el tercer texto visible<BR>"); #comentario invisible
/* Cuidado con anidar
comentarios
multilinea con estos
al PHP no le gustan */

echo "echo puede ", " anidar cadenas<br>"; // Con echo se pueden anidar cadenas separadas 
// por comas o puntos.
//Con echo los números no necesitan ir entre comillas
print "Hola<br>";
/* Print muestra solo una simple cadena.
Devuelve 1, por lo cual puede ser usada en una expresión 
if($expresion && print "Cadena"){
    # Hacer algo
}*/
print ("Cadena1" . " Cadena2<br>");/* para poder imprimir varias cadenas 
con una sola instrucccion, utilizaremos los puntos, pero no las comas.
Con print los numeros deben ir entre comillas, aunque utilicemos los parentesis.*/

$a = array ('a' => 'manzana', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
print_r ($a);
# Print_r ()Muestra una representación más entendible de un solo valor cualquiera
#No solo acepta cadenas, también acepta arreglos y objetos formateándolos para ser visualizados de una forma más entendible
#Puede devolver su valor de salida como un valor de retorno si le pasa true como su segundo argumento
#Útil para la depuración

?>