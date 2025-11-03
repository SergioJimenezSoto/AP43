<?php 

$data = "Tokyo, Japan; Mexico City, Mexico; New York City, USA; Mumbai, India; Seoul, Korea; Shanghai, China; Lagos, Nigeria; Buenos Aires, Argentina; Cairo, Egypt; London, England.";

$separar = explode(";" , $data);

for ($i = 0; $i < count($separar); $i++) {
    $array[$i] = explode(",", $separar[$i]);
}
var_dump($array);
?> 