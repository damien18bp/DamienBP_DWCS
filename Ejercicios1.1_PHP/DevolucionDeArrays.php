/**
 * Programa que pida 5 numeros y los guarde en un array. Luego llama a una función pasandole
 * el array y la función devuelve el mayor, el menor y la media de los numeros introducidos en otro array.
 * Mostrara por pantalla el array devuelto.
 * @return array
 */

<?php
$numeros = array_fill(0, 5, null);
function calcularEstadisticas($numeros) {
    $mayor = max($numeros);
    $menor = min($numeros);
    $media = array_sum($numeros) / count($numeros);
    return array('mayor' => $mayor, 'menor' => $menor, 'media' => $media);
}
echo "El mayor es: " . calcularEstadisticas($numeros)['mayor'] . "\n";
echo "El menor es: " . calcularEstadisticas($numeros)['menor'] . "\n";
echo "La media es: " . calcularEstadisticas($numeros)['media'] . "\n";