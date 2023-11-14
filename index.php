<?php
// include_once '../Proyecto_Videoclub/src/Soporte.php';
// include_once '../Proyecto_Videoclub/src/CintaVideo.php';
// include_once '../Proyecto_Videoclub/src/Dvd.php';
// include_once '../Proyecto_Videoclub/src/Juego.php';

include_once 'autoload.php';

$soporte1 = new Soporte('Spiderman', 22, 3);
$miCinta = new CintaVideo("Los Cazafantasmas", 23, 3.5, 107);
$miDvd = new Dvd("Origen", 24, 15, "es,en,fr", "16:9");
$miJuego = new Juego("The Last of Us Part II", 26, 49.99, "PS4", 1, 1);


echo "<strong>Clase Soporte: </strong>";
echo $soporte1->muestraResumen();
echo "<p></p>";

echo "<strong>Clase CintaVideo: </strong>";
echo "<p>Resumen de la cinta: </p><p>" . $miCinta->muestraResumen() . "</p>";
echo "<p></p>";

echo "<strong>Clase Dvd: </strong>";
echo $miDvd->muestraResumen();
echo "<p></p>";

echo "<strong>Clase Juego: </strong>";
echo $miJuego->muestraResumen();
echo "<p></p>";
