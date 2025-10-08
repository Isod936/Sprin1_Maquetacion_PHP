<?php
$errores = [];

$nombre = $_POST['nombre'] ?? '';
$edad = $_POST['edad'] ?? '';
$email = $_POST['email'] ?? '';

if (empty($nombre)) {
    $errores[] = "El nombre no puede estar vacío.";
}

if (empty($edad)) {
    $errores[] = "La edad no puede estar vacía.";
} elseif (!is_numeric($edad)) {
    $errores[] = "La edad debe ser un número.";
} elseif ($edad < 0 || $edad > 120) {
    $errores[] = "La edad debe estar entre 0 y 120.";
}

if (empty($email)) {
    $errores[] = "El correo electrónico no puede estar vacío.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errores[] = "El formato del correo electrónico no es válido.";
}

if (empty($errores)) {
    echo "Todos los datos son válidos:<br>";
    echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
    echo "Edad: " . htmlspecialchars($edad) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
} else {
    echo "Se han encontrado errores:<br>";
    foreach ($errores as $error) {
        echo "- " . $error . "<br>";
    }
}
?>