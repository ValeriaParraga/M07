<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici batalla naval</title>
    <style>
        h2 {
            text-align: center;
        }
        div {
            margin: 0 auto;
            width: 30%;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            width: 400px;
            height: 40px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Naval battle</h2>

    <div> 
    <?php

    $N = 10; 

    // Imprimir el tablero con letras del abecedario y números
    function imprimirTablero($tablero) {
        echo "<table>";
        echo "<tr>";
        echo "\t\t<td>&nbsp;</td>";
        for ($i = 1; $i <= count($tablero); $i++) {
            echo "\t\t<td>$i</td>";
        }
        echo "</tr>";
    
        for ($i = 65; $i < 65 + count($tablero); $i++) {
            echo "<tr>";
            $letter = chr($i);
            echo "\t\t<td>$letter</td>\n";
            for ($j = 1; $j <= count($tablero); $j++) {
                echo "<td>{$tablero[$i - 65][$j - 1]}</td>"; 
            }
            echo "</tr>";
        }
        echo "</table>";
        }

    $barcos = [
        ['nombre' => 'fragata', 'longitud' => 1],
        ['nombre' => 'submarino', 'longitud' => 2],
        ['nombre' => 'destructor', 'longitud' => 3],
        ['nombre' => 'portaaviones', 'longitud' => 4],
    ];

    // Creació array bidimensional 10 x 10 amb espais en blanc
    $tablero = array_fill(0, $N, array_fill(0, $N, "&nbsp;")); 

    // Función para colocar un barco en el tablero
    function colocarBarco(&$tablero, $fila, $columna, $longitud, $orientacion) {
        if ($orientacion === 'horizontal') {
            for ($i = $columna; $i < $columna + $longitud; $i++) {
                $tablero[$fila][$i] = 'B'; 
            }
        } elseif ($orientacion === 'vertical') {
            for ($i = $fila; $i < $fila + $longitud; $i++) {
                $tablero[$i][$columna] = 'B'; 
            }
        }
    }

    // Fem els randoms entre els vaixells i files i columnes
    function colocarBarcoAleatorio(&$tablero, $longitud) {
        $N = count($tablero);
    
        do {
            $fila = rand(0, $N - 1);
            $columna = rand(0, $N - 1);
            $orientacion = rand(0, 1) ? 'horizontal' : 'vertical';
        } while (!esUbicacionValida($tablero, $fila, $columna, $longitud, $orientacion));
    
        colocarBarco($tablero, $fila, $columna, $longitud, $orientacion);
    }
    
    // Función para verificar si una ubicación para un barco es válida
    function esUbicacionValida($tablero, $fila, $columna, $longitud, $orientacion) {
        $N = count($tablero);
    
        if ($orientacion === 'horizontal') {
            if ($columna + $longitud > $N) {
                return false; // El barco se sale de los límites del tablero
            }
    
            for ($i = $columna; $i < $columna + $longitud; $i++) {
                if ($tablero[$fila][$i] !== '&nbsp;') {
                    return false; // El barco se solapa con otro barco
                }
            }
        } elseif ($orientacion === 'vertical') {
            if ($fila + $longitud > $N) {
                return false; // El barco se sale de los límites del tablero
            }
    
            for ($i = $fila; $i < $fila + $longitud; $i++) {
                if ($tablero[$i][$columna] !== '&nbsp;') {
                    return false; // El barco se solapa con otro barco
                }
            }
        }
    
        return true;
    }

    foreach ($barcos as $barco) {
        colocarBarcoAleatorio($tablero, $barco['longitud']);
    }

    // Imprimir el tablero con los barcos
    echo "<br><br>";
    imprimirTablero($tablero);

    ?>
    </div>
    
</body>
</html>