<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fita 1.4</title>
    <style>
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
    <h2>Exercise 4<h2>

    <?php
        echo "<table>";
        $N = 10;
        echo "<tr>";
        echo "\t\t<td>&nbsp</td>";
        for($i=1; $i <= $N; $i++) {
            echo "\t\t<td>$i</td>";
        }
        echo "</tr>";
        
        for($i=65; $i < 65 + $N ; $i++) { 
            echo "<tr>"; 
            $letter = chr($i);  
            echo "\t\t<td>$letter</td>\n";
            for ($j = 1; $j <= $N; $j++) {
                echo "<td>&nbsp;</td>"; 
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>