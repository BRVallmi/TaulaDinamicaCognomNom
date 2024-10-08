<?php
require "./const.php";
if($argv[1]<=0 || $argv[2]<=0){
    echo "Entrada incorrecte, sortint del programa.";
    exit;
}
$preuBase = $argv[1]*$argv[2];
switch($argv[3]){
    case 0: $preuDescompte = $preuBase-$preuBase*30/100; break;
    case 1: $preuDescompte = $preuBase-$preuBase*20/100; break;
    case 2: $preuDescompte = $preuBase*20/100-$preuBase;
            $preuDescompte = $preuBase+$preuDescompte*5/100; break;
    default: echo "Entrada incorrecte, sortint del programa."; exit;
}
echo "Import sense descomptes: ".number_format(round($preuBase,2),2)."\n";
echo "Import amb descomptes: ".number_format(round($preuDescompte,2),2)."\n";