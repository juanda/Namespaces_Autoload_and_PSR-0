<?php

include __DIR__."/libreria_A/Cuadrado.php";
include __DIR__."/libreria_B/Cuadrado.php"; // Ya no aparece el error debido a la
                                            // redeclaración de la clase Cuadrado

use Jazzyweb\LibGeo\Cuadrado;
use \Orbium\Maths\Geometry;

$c1 = new Cuadrado();
echo '<br>';
$c2 = new Geometry\Cuadrado();
