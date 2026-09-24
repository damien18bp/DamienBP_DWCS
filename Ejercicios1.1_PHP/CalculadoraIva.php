<?php
/**
 * Calculadora de IVA
 *
 * Este script calcula el precio total de un producto incluyendo el IVA.
 *
 * @param float $precio El precio base del producto.
 * @param float $iva El porcentaje de IVA a aplicar.
 * @return float El precio total con IVA incluido.
 */

function calcularIva($precio, $iva) {
    $total = $precio + ($precio * ($iva / 100));
    return $total;
}
echo "El precio con IVA es: " . calcularIva(100, 21);