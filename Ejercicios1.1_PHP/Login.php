/**
 * Función para iniciar sesión
 *
 * @param string $username El nombre de usuario
 * @param string $password La contraseña
 * @return bool True si las credenciales son correctas, false en caso contrario
 */
<?php
define('USER', 'usuario');
define('PASS', '1234');

function login(string $username, string $password): bool {
    $toret = false;
    if (!empty($username) && !empty($password)) {
        if ($USER === $username && $PASS === $password) {
            $toret = true;
        }
    }
    return $toret;
}