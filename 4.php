<?php
$city = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires, Cairo,London";
$country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";
$cityArray= explode (",",$city);
$CountryArray= explode (",",$country);
$Capitals=[];
for ($i=0;$i<count($cityArray);$i++){
    $Capitals=[
        'country' => trim($CountryArray[$i]), // trim() limpia espacios
        'city' => trim($cityArray[$i])
    ];
    
    var_dump ($Capitals);
}
?>

