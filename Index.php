<?php
$nombreVariable ="<H1>Daiana Vallejo</H1>"; // se utiliza "" cuando va a ser contenido
$numero =10;
/**
* Docuemntacion del codigo
 */

/*

 */
if ($numero > 0)
    echo "El número $numero es mayor a cero "; // se usa llaves cuando hay varias lineas en una condicional


echo $nombreVariable;
// Cierre del codigo php

?>

<p>

    Base de datos relacional
    Véase también: Base de datos objeto-relacional
    La base de datos relacional (BDR) es un tipo de base de datos (BD) que cumple con el modelo relacional (el modelo más utilizado actualmente para implementar las BD ya planificadas).
    Permite establecer interconexiones o relaciones entre los datos (que están guardados en tablas), y a través de dichas conexiones relacionar los datos de ambas tablas, de ahí proviene su nombre: "modelo relacional".
    Tras ser postuladas sus bases en 1970 por Edgar Frank Codd, de los laboratorios IBM en San José (California), no tardó en consolidarse como un nuevo paradigma en los modelos de base de datos.1


</p>

<ul> // se define una lista
    <?php

    for ($i=0;$i <= $numero;$i++) {

        echo "<li>$i</li>";

    }
    ?>
</ul>


