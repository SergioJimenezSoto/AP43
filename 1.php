<?php
$city = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires, Cairo,London"; 
//El ejercicio no te pide un array al principio, sino un string con comas:
// Esto es solo una cadena de texto, no una lista todavía.
//Queremos separar cada ciudad por las comas.
//Para eso usamos la función explode():
$citiesArray = explode(",", $city); //Crear el array $capitals con la estructura pedida
//Queremos que cada elemento tenga la forma:
//['city' => "Tokyo"]
$capitals = [];

foreach ($citiesArray as $cityName) {
    $capitals[] = ['city' => trim($cityName)];
} //Así que hacemos un bucle foreach sobre $citiesArray
//trim() elimina espacios sobrantes (por ejemplo, antes de “Cairo”).
var_dump($capitals);


?>