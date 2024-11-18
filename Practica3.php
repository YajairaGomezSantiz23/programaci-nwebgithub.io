<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones y Condicionales en PHP</title>
</head>
<body>

    <?php
    // Función para realizar operaciones matemáticas
    function operacionesMatematicas($x, $y) {
        echo "<h2>Operaciones Matemáticas</h2>";
        echo "Valores iniciales: x = $x, y = $y<br>";
        echo "Suma: $x + $y = " . ($x + $y) . "<br>";
        echo "Resta: $x - $y = " . ($x - $y) . "<br>";
        echo "Multiplicación: $x * $y = " . ($x * $y) . "<br>";
        echo "División: $x / $y = " . ($x / $y) . "<br>";
        echo "Exponente: $x ^ $y = " . pow($x, $y) . "<br>";
        echo "Raíz cuadrada de x: sqrt($x) = " . sqrt($x) . "<br>";
    }

    // Función para mostrar ejemplos de condicionales con operadores de comparación
    function condicionalesAvanzados($a, $b) {
        echo "<h2>Condicionales Avanzados</h2>";
        echo "Valores iniciales: a = $a, b = $b<br>";
        echo "¿a es igual a b? " . ($a == $b ? 'Sí' : 'No') . "<br>";
        echo "¿a es estrictamente igual a b? " . ($a === $b ? 'Sí' : 'No') . "<br>";
        echo "¿a es diferente de b? " . ($a != $b ? 'Sí' : 'No') . "<br>";
        echo "¿a es mayor o igual a b? " . ($a >= $b ? 'Sí' : 'No') . "<br>";
        echo "¿a es menor o igual a b? " . ($a <= $b ? 'Sí' : 'No') . "<br>";
    }

    // Función de operadores de asignación
    function operadoresAsignacion($a) {
        echo "<h2>Operadores de Asignación</h2>";
        echo "Valor inicial de a: $a<br>";

        $a *= 3;
        echo "Multiplicación asignada (a *= 3): $a<br>";

        $a -= 4;
        echo "Resta asignada (a -= 4): $a<br>";

        $a /= 2;
        echo "División asignada (a /= 2): $a<br>";

        $a += 7;
        echo "Suma asignada (a += 7): $a<br>";

        $a %= 5;
        echo "Módulo asignado (a %= 5): $a<br>";
    }

    // Función de operadores lógicos
    function operadoresLogicosAvanzados($x, $y) {
        echo "<h2>Operadores Lógicos Avanzados</h2>";
        echo "Valores iniciales: x = $x, y = $y<br>";
        echo "¿x es mayor que 5 y y es menor que 10? " . (($x > 5 && $y < 10) ? 'Sí' : 'No') . "<br>";
        echo "¿x es mayor que 5 o y es menor que 5? " . (($x > 5 || $y < 5) ? 'Sí' : 'No') . "<br>";
        echo "¿No es cierto que x es menor que 3? " . (!($x < 3) ? 'Sí' : 'No') . "<br>";
    }

    // Función para concatenar cadenas de texto
    function concatenarTexto($nombre, $apellido) {
        echo "<h2>Concatenación de Texto</h2>";
        echo "Valores iniciales: nombre = $nombre, apellido = $apellido<br>";
        $nombreCompleto = $nombre . " " . $apellido;
        echo "Concatenación de nombre y apellido: $nombreCompleto<br>";
        $nombreCompleto .= " - Desarrollador Web";
        echo "Concatenación con asignación: $nombreCompleto<br>";
    }

    // Llamadas a las funciones con valores de ejemplo
    operacionesMatematicas(12, 4);
    condicionalesAvanzados(15, 20);
    operadoresAsignacion(10);
    operadoresLogicosAvanzados(7, 4);
    concatenarTexto("Carlos", "Martínez");

    ?>

</body>
</html>
