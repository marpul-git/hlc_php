<?

$mario=5;
echo “Este es el valor de mario: ”,$mario, “<br>”;
$mario= “Mario Pulido”;
echo”Ahora mario es igual a ”, $mario, “<br>”;

function cambiar($mario)  {

echo “Antes el nombre de la variable era: ”,$mario, “<br>”;
$mario=”Pulido Mario”;
echo “Ahora la variable mario es: ”,$mario, “<br>”;

}

cambiar($mario);
echo “Arriba el valor era: ”,$mario,”<br>”;
?>