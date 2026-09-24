/**
 * Funcion que recibe la rado base y altura de un cilindro y devuelve su volumen.
    * @param float $radio Radio base del cilindro
    * @param float $altura Altura del cilindro
    * @return float El volumen del cilindro
 */
<?php
function volumenCilindro(float $radio, float $altura): float {
    $volumen = pi() * pow($radio, 2) * $altura;
    return $volumen;
}
echo "El volumen del cilindro es: " . volumenCilindro(3, 5);