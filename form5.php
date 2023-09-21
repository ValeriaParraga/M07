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

    // Creació array bidimensional 10 x 10 amb espais en blanc
    $tablero = array_fill(0, $N, array_fill(0, $N, "&nbsp;")); 

    // Función para colocar un barco en el tablero
    function colocarBarco(&$tablero, $fila, $columna, $longitud, $orientacion) {
        if ($orientacion === 'horizontal') {
            for ($i = $columna; $i < $columna + $longitud; $i++) {
                $tablero[$fila][$i] = 'S'; 
            }
        } elseif ($orientacion === 'vertical') {
            for ($i = $fila; $i < $fila + $longitud; $i++) {
                $tablero[$i][$columna] = 'S'; 
            }
        }
    }

    // Colocar un submarino de una longitud, la fila, columna, orientación horizontal
    colocarBarco($tablero, 3, 4, 2, 'horizontal');
    colocarBarco($tablero, 5, 6, 3, 'vertical');
    colocarBarco($tablero, 8, 9, 1, 'vertical');
    colocarBarco($tablero, 1, 2, 4, 'horizontal');

    // Imprimir el tablero con letras del abecedario y números
    echo "<table>";
    echo "<tr>";
    echo "\t\t<td>&nbsp;</td>";
    for ($i = 1; $i <= $N; $i++) {
        echo "\t\t<td>$i</td>";
    }
    echo "</tr>";

    for ($i = 65; $i < 65 + $N; $i++) {
        echo "<tr>";
        $letter = chr($i);
        echo "\t\t<td>$letter</td>\n";
        for ($j = 1; $j <= $N; $j++) {
            echo "<td>{$tablero[$i - 65][$j - 1]}</td>"; 
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
    </div>
    
</body>
</html>