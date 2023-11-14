<?php
include_once '../Proyecto_Videoclub/src/Soporte.php';
include_once '../Proyecto_Videoclub/src/CintaVideo.php';
include_once '../Proyecto_Videoclub/src/Dvd.php';

echo "<p>Clase Soporte: </p>";
$soporte1 = new Soporte('Spiderman', 22, 3);
// echo "<p>" . $soporte1->titulo . "</p>";
// echo "<p>Precio sin IVA" . $soporte1->getPrecio() . "€</p>";
// echo "<p>Precio con IVA" . $soporte1->getPrecioConIva() . "€</p>";
echo $soporte1->muestraResumen();
echo "<p> </p>";

echo "<p>Clase CintaVideo: </p>";
$miCinta = new CintaVideo("Los Cazafantasmas", 23, 3.5, 107);
// echo "<strong>" . $miCinta->titulo . "</strong>";
// echo "<p>Precio:" . $miCinta->getPrecio() . "euros </p>";
// echo "<p>PrecioIVAincluido:" . $miCinta->getPrecioConIva() . "euros </p>";
echo "<p>Resumen de la cinta: </p><p>".$miCinta->muestraResumen()."</p>";
echo "<p></p>";


echo "<p>Clase Dvd: </p>";
$miDvd = new Dvd("Origen", 24, 15, "es,en,fr", "16:9");
echo $miDvd->muestraResumen();
echo "<p></p>";
