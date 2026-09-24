/** *
 * Función que recibe dos parametros y devuelva el valor de la potencia de A elevado a B
 * @param int $a
 * @param int $b
 * @return int
 * Escribe tambien un programa php que use esta funcion y muestre el resultado de la potencia de 2 elevado a 3
 */
<?php
function potencia($a, $b) {
    return pow($a, $b);
}

echo potencia(2, 3);
