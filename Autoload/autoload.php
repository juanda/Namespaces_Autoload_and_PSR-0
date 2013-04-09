<?php

function __autoload($nombre_clase) {
    
    include __DIR__.'/libreria_A/'.$nombre_clase . '.php';
}
