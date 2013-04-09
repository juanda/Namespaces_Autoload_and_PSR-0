<?php

include __DIR__."/libreria_A/Cuadrado.php";
include __DIR__."/libreria_B/Cuadrado.php"; // Ya no aparece el error debido a la
                                            // redeclaración de la clase Cuadrado


$c1 = new \Jazzyweb\LibGeo\Cuadrado();
echo '<br>';
$c2 = new \Orbium\Maths\Geometry\Cuadrado();
