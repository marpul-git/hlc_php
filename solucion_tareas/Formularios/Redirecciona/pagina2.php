<?php
    echo "pagina 2";
    //Aquí podemos recoger los parámetros. Descomenta la siguiente línea y comenta el header
    //print_r($_GET);

    header( "refresh:5;url=pagina3.php" ); 

   // header("location: pagina3.php");
?>