/** *
 * Formulario que permite escribir numeros y nos dice si son positivos, negativo o cero.
 * @param int $numero Numero entero a verificar
 * @return string Devuelve un mensaje indicando si el numero es positivo, negativo o cero.
 */

<?php
function verificarNumero($numero) {
    if ($numero > 0) {
        return "El número es positivo.";
    } elseif ($numero < 0) {
        return "El número es negativo.";
    } else {
        return "El número es cero.";
    }
}
