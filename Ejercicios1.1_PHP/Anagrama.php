/**
* Programa que pide dos palabras en un formulario y compruebva si la primera es un anagrama de la segunda.
* @param string $palabra1 Primera palabra a comparar
* @param string $palabra2 Segunda palabra a comparar
* @return bool Devuelve true si son anagramas, false en caso contrario
 */
<?php
function sonAnagramas($palabra1, $palabra2) {
    $palabra1 = strtolower($palabra1);
    $palabra2 = strtolower($palabra2);
    $array1 = str_split($palabra1);
    $array2 = str_split($palabra2);
    sort($array1);
    sort($array2);
    return $array1 === $array2;
}
?>
