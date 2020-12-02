<?php
#buscar caracteres especificos

$string = "aabCcCCddDDeFFgGGhhhhIJJkLLmmmmnOpQrrrSssTTUV"; 
echo preg_match_all("/[a-z]{2}[A-Z]{3}?/", $string, $matches);

print_r($matches);



?>
