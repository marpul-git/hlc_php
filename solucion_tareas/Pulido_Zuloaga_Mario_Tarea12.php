<?php

$tablas=array
        (
        "Sa" => array
            (
            "0"=>"Domingo",
            "1"=>"Lunes",
            "2"=>"Martes",
            "3"=>"Miercoles",
            "4"=>"Jueves",
            "5"=>"Viernes",
            "6"=>"Sabado"
            ),
            

        $a => array
        (
            "Primero"=>"Domingo",
            "Segundo"=>"Lunes",
            "Tercero"=>"Martes",
            "Cuarto"=>"Miercoles",
            "Quinto"=>"Jueves",
            "Sexto"=>"Viernes",
            "Septimo"=>"Sabado"
            
        )
        );  
        
echo $tablas["Sa"]["1"], "<br>";
echo $tablas[$a]["Cuarto"], "<br>";

?>