<?php
namespace Hackspace;
include 'suma.php';

use Hackspace\Suma;
#operacion1 suma 3, 4
#operacion2 suma 5, 8

$suma=new Suma(3,4);
echo (string)$suma->ejecutar();
echo "\n";

