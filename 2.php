<?php
$country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";

// 1️⃣ Convertimos el string en un array usando explode
$lista = explode(",", $country);

// 2️⃣ Creamos un array vacío donde guardaremos el resultado
$capitals = [];

// 3️⃣ Recorremos cada país con foreach
foreach ($lista as $pais) {
    // 4️⃣ En cada vuelta, añadimos un nuevo elemento al array $capitals
    $capitals[] = ['country' => $pais];
}
var_dump($capitals);
?>