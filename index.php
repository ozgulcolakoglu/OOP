
<?php
function __autoload($classname) {
    echo $classname."bulamadı ve autoload çalıştı<br>";
    require "classes/".$classname . ".php";

}



$kuruTemizlemeci = new EveKuruTemizleme();
$kuruTemizlemeci->setCamasir("Pantul");
$kuruTemizlemeci->yika(null,false);