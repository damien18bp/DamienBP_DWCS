/** *
 * Procedimiento que reciba cinco números y devuelva la suma de ellos.
 * @param int $num1 Primer número
 * @param int $num2 Segundo número
 * @param int $num3 Tercer número
 * @param int $num4 Cuarto número
 * @param int $num5 Quinto número
 * @return int La suma de los cinco números
 */
<?php
function sumarCincoNumeros(int $num1, int $num2, int $num3, int $num4, int $num5): int {
    return $num1 + $num2 + $num3 + $num4 + $num5;
}
echo "La suma de los cinco números es: " . sumarCincoNumeros(1, 2, 3, 4, 5);
